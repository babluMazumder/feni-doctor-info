<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Blog\Repositories\Blog\BlogInterface;

class FrontendController extends Controller
{

    protected $blogRepo;

    public function __construct( BlogInterface $blogRepo )
    {

        $this->blogRepo     = $blogRepo;

    }
   public function index()
    {


        return view('frontend.index');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function category(){
        return view('frontend.category');
    }
    public function days(){
        return view('frontend.category');
    }
    public function doctor(){
        return view('frontend.doctor');
    }
    public function blog(){
        $paginate   = (ceil(settings('paginate_value') / 3) * 3);

        $blogs      = $this->blogRepo->all(paginate: $paginate, status: Status::ACTIVE->value, orderBy: 'position');
        return view('frontend.blog', compact('blogs'));
    }
    public function blogDetails(){
        return view('frontend.blog-details');
    }
    public function about(){
        return view('frontend.about-us');
    }
    public function termsConditions(){
        return view('frontend.term-condition');
    }





}
