<?php

namespace App\Models\Backend;

use App\Models\Upload;
use App\Models\Backend\Category;
use App\Traits\CommonHelperTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory, CommonHelperTrait;
     public function image()
    {
        return $this->belongsTo(Upload::class, 'image_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}
