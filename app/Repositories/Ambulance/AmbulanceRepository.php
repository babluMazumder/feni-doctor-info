<?php

namespace App\Repositories\Ambulance;

use App\Repositories\Ambulance\AmbulanceInterface;
use App\Traits\ReturnFormatTrait;
use App\Enums\Status;
use App\Models\Backend\Ambulance;

class AmbulanceRepository implements AmbulanceInterface
{
    use ReturnFormatTrait;
    protected $model;
    public function __construct(Ambulance $model)
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

            $Ambulance = new $this->model;

            $Ambulance->service_name = $request->service_name;
            $Ambulance->ambulance_type = $request->ambulance_type;
            $Ambulance->registration_no = $request->registration_no;
            $Ambulance->driver_name = $request->driver_name;
            $Ambulance->driver_phone = $request->driver_phone;
            $Ambulance->email = $request->email;
            $Ambulance->phone = $request->phone;
            $Ambulance->address = $request->address;
            $Ambulance->district = $request->district;
            $Ambulance->latitude = $request->latitude;
            $Ambulance->longitude = $request->longitude;

            // Convert status to enum value
            $Ambulance->status = \App\Enums\Status::tryFrom((int) $request->status);

            $Ambulance->save();




            return $this->responseWithSuccess(___('alert.successfully_added'));
        } catch (\Throwable $th) {
            // dd($th);
            return $this->responseWithError(___('alert.something_went_wrong'));
        }
    }

    public function update($request)
    {
        try {

            $Ambulance =  $this->model::findOrFail($request->id);

            $Ambulance->service_name = $request->service_name;
            $Ambulance->ambulance_type = $request->ambulance_type;
            $Ambulance->registration_no = $request->registration_no;
            $Ambulance->driver_name = $request->driver_name;
            $Ambulance->driver_phone = $request->driver_phone;
            $Ambulance->email = $request->email;
            $Ambulance->phone = $request->phone;
            $Ambulance->address = $request->address;
            $Ambulance->district = $request->district;
            $Ambulance->latitude = $request->latitude;
            $Ambulance->longitude = $request->longitude;

            // Convert status to enum value
            $Ambulance->status = \App\Enums\Status::tryFrom((int) $request->status);

            $Ambulance->save();


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
