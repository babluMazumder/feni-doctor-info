<?php

namespace Modules\Section\Entities;

use App\Models\Upload;
use Modules\Section\Enums\Type;
use App\Traits\CommonHelperTrait;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory, CommonHelperTrait;

    protected $fillable = ['type', 'key', 'value'];

    public function upload()
    {
        return $this->belongsTo(Upload::class, 'value', 'id');
    }

    public function getImageAttribute()
    {

        $defaultImages = [
            "original"    => asset('backend/images/profile/4.jpg'),
            "image_one"   => asset('backend/images/profile/4.jpg')
        ];

        if ($this->type == Type::BREADCRUMB && $this->key == 'image') {
            $defaultImages = [
                "original"    => asset('backend/images/profile/8.jpg'),
                "image_one"   => asset('backend/images/profile/9.jpg')
            ];
        }

        return $this->modelImageProcessor($this->upload, $defaultImages);
    }

    public function getMyTypeAttribute()
    {
        $type = '';
        switch ($this->type) {
            // case Type::SOCIAL_LINK:
            //     $type = ___('label.social_link');
            //     break;

            // case Type::HEADER:
            //     $type = ___('label.Header');
            //     break;

            case Type::CATEGORY:
                $type = ___('label.Category');
                break;

            case Type::CONTACT_US:
                $type = ___('label.Contact Us');
                break;
            case Type::HERO_SECTION:
                $type = ___('label.Hero Section');
                break;
            case Type::ABOUT_US:
                $type = ___('label.About Us');
                break;
            case Type::DOCTOR:
                $type = ___('label.Doctors');
                break;
            case Type::OUR_ACHIEVEMENT:
                $type = ___('label.Our Achievement');
                break;
            case Type::OUR_ACHIEVEMENT_TWO:
                $type = ___('label.Our Achievement Two');
                break;

            case Type::FAQ:
                $type = ___('label.FAQs');
                break;
            case Type::FAQ_STYLE_TWO:
                $type = ___('label.FAQs Style Two');
                break;
            case Type::CLIENT_REVIEW:
                $type = ___('label.Client Review/Testimonials');
                break;
            case Type::BLOGS:
                $type = ___('label.Blogs');
                break;
            case Type::CLIENT_SECTION:
                $type = ___('label.Client Section');
                break;
            case Type::SIGNIN:
                $type = ___('label.Signin');
                break;
            case Type::SIGNUP:
                $type = ___('label.Signup');
                break;
            case Type::BREADCRUMB:
                $type = ___('label.Breadcrumb');
                break;

            // case Type::DELIVERY_CALCULATION:
            //     $type = ___('label.delivery Calculation');
            //     break;


            case Type::CTA:
                $type = ___('label.CTA');
                break;
            case Type::FOOTER:
                $type = ___('label.Footer');
                break;


            case Type::POPUP_CONTENT:
                $type = ___('label.popups_content');
                break;
        }
        return $type;
    }
}
