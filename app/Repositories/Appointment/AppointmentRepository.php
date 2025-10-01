<?php

namespace App\Repositories\Appointment;

use App\Traits\ReturnFormatTrait;
use App\Models\Backend\Appointment;
use App\Repositories\Appointment\AppointmentInterface;

class AppointmentRepository implements AppointmentInterface
{
    use ReturnFormatTrait;

    private $model;

    public function __construct(Appointment $model)
    {
        $this->model = $model;
    }

    public function all(int $paginate = null, string $orderBy = 'id', string $sortBy = 'desc')
    {
        $query = $this->model::query();

        $query->orderBy($orderBy, $sortBy);

        if ($paginate !== null) {
            return  $query->paginate($paginate);
        } else {
            return $query->get();
        }
    }

    public function storeMessage($request)
    {
        // dd($request->all());
        try {

            $appointment            = new $this->model;
            $appointment->phone_number      = $request->phone_number;
            $appointment->doctor_id      = $request->doctor_id;
            $appointment->patient_name      = $request->patient_name;
            $appointment->day      = $request->day;

            $appointment->save();

            return $this->responseWithSuccess(___('alert.Appointment_booked_successfully!'), []);

        } catch (\Throwable $th) {
            return $this->responseWithError(___('alert.something_went_wrong'), []);
        }
    }
}
