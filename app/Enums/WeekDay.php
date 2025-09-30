<?php

namespace App\Enums;

enum WeekDay: string
{
    case MONDAY = 'Monday';
    case TUESDAY = 'Tuesday';
    case WEDNESDAY = 'Wednesday';
    case THURSDAY = 'Thursday';
    case FRIDAY = 'Friday';
    case SATURDAY = 'Saturday';
    case SUNDAY = 'Sunday';

    // Helper to get all values
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    // Helper to get all names (case names)
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }
}

