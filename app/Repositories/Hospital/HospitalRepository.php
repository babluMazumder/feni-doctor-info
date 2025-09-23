<?php

namespace App\Repositories\Hospital;

use App\Repositories\Hospital\HospitalInterface;
use App\Traits\ReturnFormatTrait;
use App\Enums\Status;
use App\Models\Backend\Hospital;

class HospitalRepository implements HospitalInterface
{
    use ReturnFormatTrait;
    protected $model;
    public function __construct(Hospital $model)
    {

        $this->model = $model;
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
        try {

            $hospital = new $this->model;
            $hospital->name = $request->name;
            $hospital->type = $request->type;
            $hospital->registration_no = $request->registration_no;
            $hospital->email = $request->email;
            $hospital->phone = $request->phone;
            $hospital->address = $request->address;
            $hospital->district = $request->district;
            $hospital->latitude = $request->latitude;
            $hospital->longitude = $request->longitude;
            $hospital->website_url = $request->website_url;
            // Convert status to enum value
            $hospital->status = \App\Enums\Status::tryFrom((int) $request->status);

            $hospital->save();




            return $this->responseWithSuccess(___('alert.successfully_added'));
        } catch (\Throwable $th) {
            dd($th);
            return $this->responseWithError(___('alert.something_went_wrong'));
        }
    }

    public function update($request)
    {
        try {

            $hospital = $this->model::findOrFail($request->id);
            $hospital->name = $request->name;
            $hospital->type = $request->type;
            $hospital->registration_no = $request->registration_no;
            $hospital->email = $request->email;
            $hospital->phone = $request->phone;
            $hospital->address = $request->address;
            $hospital->district = $request->district;
            $hospital->latitude = $request->latitude;
            $hospital->longitude = $request->longitude;
            $hospital->website_url = $request->website_url;
            // Convert status to enum value
            $hospital->status = \App\Enums\Status::tryFrom((int) $request->status);

            $hospital->save();
            return $this->responseWithSuccess(___('alert.successfully_updated'));
        } catch (\Throwable $th) {
            dd($th);
            return $this->responseWithError(___('alert.something_went_wrong'));
        }
    }

    public function delete($id)
    {
        try {
            $hospital = $this->model::findOrFail($id);

            $hospital->delete();

            return $this->responseWithSuccess(___('alert.successfully_deleted'));
        } catch (\Throwable $th) {
            dd($th);
            return $this->responseWithError(___('alert.something_went_wrong'));
        }
    }
}
