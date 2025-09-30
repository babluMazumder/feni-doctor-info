<?php

namespace App\Models\Backend;

use App\Traits\CommonHelperTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory, CommonHelperTrait;
     protected $fillable = ['patient_name', 'phone_number'];
}
