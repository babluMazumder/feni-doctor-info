<?php

namespace App\Models\Backend;

use App\Enums\Status;
use App\Traits\CommonHelperTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BloodBank extends Model
{    
    use HasFactory, CommonHelperTrait;
    protected $casts = [
        'available_groups' => 'array', // automatically converts JSON to array
        'status' => Status::class,
    ];
  
}
