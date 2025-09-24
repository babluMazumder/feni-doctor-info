<?php

namespace App\Models\Backend;

use App\Enums\Status;
use App\Traits\CommonHelperTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ambulance extends Model
{
    use HasFactory, CommonHelperTrait;
    protected $casts = [
      
        'status' => Status::class,
    ];
}
