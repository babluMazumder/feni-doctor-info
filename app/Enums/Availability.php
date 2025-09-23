<?php

namespace App\Enums;

enum Availability: string
{
    case Yes = 'yes';   // can donate now
    case No = 'no';     // not available
}
