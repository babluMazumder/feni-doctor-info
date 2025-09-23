<?php

namespace App\Enums;

enum HospitalType: string
{
    case HOSPITAL = 'hospital';
    case CLINIC = 'clinic';
    case DIAGNOSTIC_CENTER = 'diagnostic_center';
    case OTHER = 'other';
}
