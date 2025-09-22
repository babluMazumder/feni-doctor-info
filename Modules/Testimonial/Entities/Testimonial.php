<?php

namespace Modules\Testimonial\Entities;

use App\Enums\Status;
use App\Models\Upload;
use App\Traits\CommonHelperTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory, CommonHelperTrait;

    protected $fillable = [];
    protected $casts = [
        'status' => Status::class,
    ];


    public function upload()
    {
        return $this->belongsTo(Upload::class, 'image', 'id');
    }

    public function getMyRatingAttribute()
    {
        $ratingHtml = '';

        for ($i = 1; $i <= 5; $i++) {
            if ($this->rating >= $i) {
                $starClass = 'bi-star-fill';
            } elseif ($this->rating >= ($i - 0.5)) {
                $starClass = 'bi-star-half';
            } else {
                $starClass = 'bi-star';
            }

            $ratingHtml .= '<span><i class="bi ' . $starClass . '"></i></span>';
        }

        return $ratingHtml;
    }
}
