<?php

namespace App\Enums;

enum BloodGroup: string
{
    case A_Positive = 'A+';
    case A_Negative = 'A-';
    case B_Positive = 'B+';
    case B_Negative = 'B-';
    case AB_Positive = 'AB+';
    case AB_Negative = 'AB-';
    case O_Positive = 'O+';
    case O_Negative = 'O-';

    public function label(): string
    {
        return match($this) {
            self::A_Positive => 'A+',
            self::A_Negative => 'A-',
            self::B_Positive => 'B+',
            self::B_Negative => 'B-',
            self::AB_Positive => 'AB+',
            self::AB_Negative => 'AB-',
            self::O_Positive => 'O+',
            self::O_Negative => 'O-',
        };
    }
}
