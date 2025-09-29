<?php

namespace App\Repositories\Doctor;

use App\Enums\Status;
use App\Enums\ImageSize;
use Illuminate\Support\Str;
use App\Models\Backend\Doctor;
use App\Traits\ReturnFormatTrait;
use App\Repositories\Doctor\DoctorInterface;
use App\Repositories\Upload\UploadInterface;

class DoctorRepository implements DoctorInterface
{
    use ReturnFormatTrait;
    protected $model,$upload;
    public function __construct(Doctor $model, UploadInterface $upload)
    {

        $this->model = $model;
        $this->upload   = $upload;
    }




    public function all(?int $paginate = null,)
    {
        $query = $this->model::query();


        return  $paginate != null ? $query->paginate($paginate) : $query->get();
    }
    public function get($id)
    {
        return $this->model::find($id);
    }

    public function store($request)
    {
        // dd($request->all());
        try {
            $doctor = new $this->model;
            $doctor->name            = $request->name;
            $doctor->specialization  = $request->specialization;
            $doctor->qualification   = $request->qualification;
            $doctor->designation     = $request->designation;
            $doctor->hospital_name   = $request->hospital_name;
            $doctor->visiting_hours  = $request->visiting_hours;
            $doctor->days            = $request->days;
            $doctor->room_no         = $request->room_no;
            $doctor->visiting_fee    = $request->visiting_fee;
            $doctor->contact_number  = $request->contact_number;
             if ($request->hasFile('profile_photo')) {
                $doctor->profile_photo = $this->upload->uploadImage($request->profile_photo, 'doctor/', ImageSize::IMAGE_750x450
                );
            }

            // Slug (auto-generate if empty)
            // if ($request->filled('slug')) {
            //     $doctor->slug = $request->slug;
            // } else {
            //     $doctor->slug = \Illuminate\Support\Str::slug($request->name);

            //     $count = 1;
            //     while ($this->model::where('slug', $doctor->slug)->exists()) {
            //         $doctor->slug = \Illuminate\Support\Str::slug($request->name) . '-' . $count++;
            //     }
            // }

             $doctor->slug                 = Str::slug($request->name);

            $count = 1;
            while ($this->model::where('slug', $doctor->slug)->exists()) {
                $doctor->slug             = Str::slug($doctor->name ) . '-' . $count++;
            }
            $doctor->category_id     = $request->category_id;
            $doctor->status          = $request->status ?? \App\Enums\Status::ACTIVE->value;
            $doctor->save();




            return $this->responseWithSuccess(___('alert.successfully_added'));
        } catch (\Throwable $th) {
dd($th);
            return $this->responseWithError(___('alert.something_went_wrong'));
        }
    }

    public function update($request)
    {
        // dd($request->all());
        try {

            $doctor = $this->model::findOrFail($request->id);
            $doctor->name            = $request->name;
            $doctor->specialization  = $request->specialization;
            $doctor->qualification   = $request->qualification;
            $doctor->designation     = $request->designation;
            $doctor->hospital_name   = $request->hospital_name;
            $doctor->visiting_hours  = $request->visiting_hours;
            $doctor->days            = $request->days;
            $doctor->room_no         = $request->room_no;
            $doctor->visiting_fee    = $request->visiting_fee;
            $doctor->contact_number  = $request->contact_number;
             if ($request->hasFile('profile_photo')) {
                $doctor->profile_photo = $this->upload->uploadImage($request->profile_photo, 'doctor/', ImageSize::IMAGE_750x450
                );
            }

             $doctor->slug                 = Str::slug($request->name);

            $count = 1;
            while ($this->model::where('slug', $doctor->slug)->exists()) {
                $doctor->slug             = Str::slug($doctor->name ) . '-' . $count++;
            }
            $doctor->category_id     = $request->category_id;
            $doctor->status          = $request->status ?? \App\Enums\Status::ACTIVE->value;
            $doctor->save();



            return $this->responseWithSuccess(___('alert.successfully_updated'));
        } catch (\Throwable $th) {

            return $this->responseWithError(___('alert.something_went_wrong'));
        }
    }

    public function delete($id)
    {
        try {
            $doctor = $this->model::findOrFail($id);

            $doctor->delete();

            return $this->responseWithSuccess(___('alert.successfully_deleted'));
        } catch (\Throwable $th) {

            return $this->responseWithError(___('alert.something_went_wrong'));
        }
    }
}
