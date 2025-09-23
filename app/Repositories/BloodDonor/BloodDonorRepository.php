<?php

namespace App\Repositories\BloodDonor;

use App\Repositories\BloodDonor\BloodDonorInterface;
use App\Traits\ReturnFormatTrait;
use App\Enums\Status;
use App\Models\Backend\BloodDonor;

class BloodDonorRepository implements BloodDonorInterface
{
    use ReturnFormatTrait;
    protected $model;
    public function __construct(BloodDonor $model)
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
        // dd($request->all());
        try {

            $bloodDonor = new $this->model;
            $bloodDonor->name = $request->name;
            $bloodDonor->last_donation_date = $request->last_donation_date;
            $bloodDonor->gender = $request->gender;
            $bloodDonor->blood_group = $request->blood_group;    
            $bloodDonor->email = $request->email;
            $bloodDonor->availability = $request->availability;
            $bloodDonor->phone = $request->phone;
            $bloodDonor->address = $request->address;
            $bloodDonor->district = $request->district;
            $bloodDonor->status = \App\Enums\Status::tryFrom((int) $request->status);
          
            $bloodDonor->save();




            return $this->responseWithSuccess(___('alert.successfully_added'));
        } catch (\Throwable $th) {
            dd($th);
            return $this->responseWithError(___('alert.something_went_wrong'));
        }
    }

    public function update($request)
    {  
        //   dd($request->all());
        try {
 
            $bloodDonor = $this->model::findOrFail($request->id);
            $bloodDonor->name = $request->name;
            $bloodDonor->last_donation_date = $request->last_donation_date;
            $bloodDonor->gender = $request->gender;
            $bloodDonor->blood_group = $request->blood_group;    
            $bloodDonor->email = $request->email;
            $bloodDonor->availability = $request->availability;
            $bloodDonor->phone = $request->phone;
            $bloodDonor->address = $request->address;
            $bloodDonor->district = $request->district;
            $bloodDonor->status = \App\Enums\Status::tryFrom((int) $request->status);
          
            $bloodDonor->save();


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
