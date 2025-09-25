<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\Status;
use Illuminate\Http\Request;
use Modules\Blog\Entities\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
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
    public function blogDetails($slug){
         $blog           = Blog::with('image', 'author')->firstWhere('slug', $slug);

        abort_if(!$blog, 404);


        $recentBlogs    = Cache::remember('recent_blog', now()->addMinutes(10), fn() => Blog::with('image','author')->where('status', Status::ACTIVE)->whereNot('id', $blog->id)->latest()->take(3)->get(['title', 'slug', 'position', 'date', 'banner', 'id']));
         $previousBlog   = Blog::where('position', '<', $blog->position)->orderBy('position', 'desc')->first(['id', 'title', 'slug', 'position']);
        $nextBlog       = Blog::where('position', '>', $blog->position)->orderBy('position', 'asc')->first(['id', 'title', 'slug', 'position']);

        return view('frontend.blog-details',compact('blog', 'recentBlogs', 'previousBlog', 'nextBlog'));
    }
    public function about(){
        return view('frontend.about-us');
    }
    public function termsConditions(){
        return view('frontend.term-condition');
    }





}
