<?php

namespace App\Repositories\Appointment;


interface AppointmentInterface
{

    public function all(int $paginate = null, string $orderBy = 'id', string $sortBy = 'desc');
    public function storeMessage($request);
}
