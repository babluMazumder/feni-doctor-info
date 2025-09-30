<?php

namespace App\Models\Backend;

use App\Models\Upload;
use App\Traits\CommonHelperTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
     use HasFactory, CommonHelperTrait;
     public function upload()
    {

        return $this->belongsTo(Upload::class, 'icon', 'id');
    }
}
