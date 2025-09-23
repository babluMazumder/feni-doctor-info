<?php

namespace App\Repositories\BloodBank;

use App\Repositories\BloodBank\BloodBankInterface;
use App\Traits\ReturnFormatTrait;
use App\Enums\Status;
use App\Models\Backend\BloodBank;

class BloodBankRepository implements BloodBankInterface
{
    use ReturnFormatTrait;
    protected $model;
    public function __construct(BloodBank $model)
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

            $bloodBank = new $this->model;
            $bloodBank->name = $request->name;
            $bloodBank->license_no = $request->license_no;
            $bloodBank->email = $request->email;
            $bloodBank->phone = $request->phone;
            $bloodBank->address = $request->address;
            $bloodBank->district = $request->district;
            $bloodBank->latitude = $request->latitude;
            $bloodBank->longitude = $request->longitude;
            $bloodBank->available_groups = $request->available_groups;
            // Convert status to enum value
            $bloodBank->status = \App\Enums\Status::tryFrom((int) $request->status);

            $bloodBank->save();




            return $this->responseWithSuccess(___('alert.successfully_added'));
        } catch (\Throwable $th) {
            // dd($th);
            return $this->responseWithError(___('alert.something_went_wrong'));
        }
    }

    public function update($request)
    {
        try {

            $bloodBank = $this->model::findOrFail($request->id);
            $bloodBank->name = $request->name;
            $bloodBank->license_no = $request->license_no;
            $bloodBank->email = $request->email;
            $bloodBank->phone = $request->phone;
            $bloodBank->address = $request->address;
            $bloodBank->district = $request->district;
            $bloodBank->latitude = $request->latitude;
            $bloodBank->longitude = $request->longitude;
            $bloodBank->available_groups = $request->available_groups;
            // Convert status to enum value
            $bloodBank->status = \App\Enums\Status::tryFrom((int) $request->status);

            $bloodBank->save();

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
