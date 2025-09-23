<?php

namespace App\Models\Backend;

use App\Enums\Status;
use App\Enums\HospitalType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'registration_no',
        'email',
        'phone',
        'address',
        'district',
        'latitude',
        'longitude',
        'website_url',
        'status',
    ];

    protected $casts = [
        'type' => HospitalType::class,
        'status' => Status::class,
    ];

      public function getHospitalStatusAttribute()
    {
        $classes = [
          Status::ACTIVE->value   => 'success',
          Status::INACTIVE->value => 'danger',
        ];

        $class = $classes[$this->status?->value] ?? 'secondary';

        return "<span class='bullet-badge bullet-badge-{$class}'>"
                . ___("label.{$this->status?->name}") .
               "</span>";
    }

}
