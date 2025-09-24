<?php

namespace App\Enums;

enum AmbulanceType: string
{
    case AC = 'AC';
    case NonAC = 'Non-AC';
    case ICU = 'ICU';
    case Freezer = 'Freezer';

    public function label(): string
    {
        return match($this) {
            self::AC => 'AC Ambulance',
            self::NonAC => 'Non-AC Ambulance',
            self::ICU => 'ICU Ambulance',
            self::Freezer => 'Freezer Ambulance',
        };
    }
}
