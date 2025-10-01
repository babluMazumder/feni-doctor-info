<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\Status;
use App\Enums\WeekDay;
use Illuminate\Http\Request;
use App\Models\Backend\Doctor;
use Modules\Blog\Entities\Blog;
use App\Models\Backend\Category;
use App\Models\Backend\Hospital;
use App\Models\Backend\Ambulance;
use App\Models\Backend\BloodBank;
use App\Models\Backend\BloodDonor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Modules\Testimonial\Entities\Testimonial;
use Modules\Blog\Repositories\Blog\BlogInterface;

class FrontendController extends Controller
{

    protected $blogRepo;

    public function __construct(BlogInterface $blogRepo)
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

    public function category()
    {
        $categories = Cache::remember('categories', now()->addMinutes(30), fn() => Category::where('status', Status::ACTIVE)->paginate(settings('paginate_value')));
        return view('frontend.category', compact('categories'));
    }
    public function days()
    {
        $days = WeekDay::cases();
        return view('frontend.days', compact('days'));
    }

    public function doctor(Request $request)
    {
        // dd($request->all());
        $categories = Cache::remember('categories', now()->addMinutes(30), fn() => Category::where('status', Status::ACTIVE)->get());

        $query = Doctor::where('status', Status::ACTIVE);

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }
        if ($request->filled('doctor')) {
            $query->where('id', $request->doctor);
        }
        if ($request->filled('day')) {
            $query->whereJsonContains('days_select', $request->day);
        }
        $doctors = $query->paginate(settings('paginate_value'))->withQueryString();

        return view('frontend.doctor', compact('doctors', 'categories'));
    }
    public function blog()
    {
        $paginate   = (ceil(settings('paginate_value') / 3) * 3);

        $blogs      = $this->blogRepo->all(paginate: $paginate, status: Status::ACTIVE->value, orderBy: 'position');
        return view('frontend.blog', compact('blogs'));
    }

    public function getDoctorsByCategory($categoryId)
    {
             $query = Doctor::where('status', Status::ACTIVE);

    if($categoryId !== 'all'){
        $query->where('category_id', $categoryId);
    }

    $doctors = $query->get(['id', 'name']);

    return response()->json($doctors);
    }


    public function showDonor()
    {
        $bloodDonors = Cache::remember(
            'bloodDonors',
            now()->addMinutes(30),
            fn() => BloodDonor::where('status', Status::ACTIVE)
                ->orderBy('created_at', 'desc')
                ->paginate(settings('paginate_value'))
        );
        return view('frontend.blood-donor', compact('bloodDonors'));
    }


    public function showAmbulance(){
        $ambulances=Cache::remember('ambulances',now()->addMinutes(30),fn() =>Ambulance::where('status',Status::ACTIVE)->paginate(settings('paginate_value')));
        return view('frontend.ambulance',compact('ambulances'));
    }


    public function showHospital(){
        $hospitals=Cache::remember('hospitals',now()->addMinutes(30),fn() =>Hospital::where('status',Status::ACTIVE)->paginate(settings('paginate_value')));
        return view('frontend.hospital',compact('hospitals'));
    }


    public function showBloodBank(){

        $bloodBanks=Cache::remember('bloodBanks',now()->addMinutes(30),fn() =>BloodBank::where('status',Status::ACTIVE)->paginate(settings('paginate_value')));
        return view('frontend.blood-bank',compact('bloodBanks'));
    }




    public function blogDetails($slug)
    {
         $blog = Blog::where('slug', $slug)->firstOrFail();

       // Increment the seen count
        $blog->increment('seen');

        $blog           = Blog::with('image', 'author')->firstWhere('slug', $slug);

        abort_if(!$blog, 404);


        $recentBlogs    = Cache::remember('recent_blog', now()->addMinutes(30), fn() => Blog::with('image', 'user')->where('status', Status::ACTIVE)->whereNot('id', $blog->id)->latest()->take(4)->get());
        $previousBlog   = Blog::where('position', '<', $blog->position)->orderBy('position', 'desc')->first(['id', 'title', 'slug', 'position']);
        $nextBlog       = Blog::where('position', '>', $blog->position)->orderBy('position', 'asc')->first(['id', 'title', 'slug', 'position']);

        return view('frontend.blog-details', compact('blog', 'recentBlogs', 'previousBlog', 'nextBlog'));
    }

    public function about()
    {
        $testimonials = Cache::rememberForever('testimonials', function () {
            return Testimonial::with('upload')->where('status', Status::ACTIVE)->orderBy('position', 'asc')->paginate(settings('paginate_value'));
        });
        return view('frontend.about-us', compact('testimonials'));
    }

    public function termsConditions()
    {
        return view('frontend.term-condition');
    }
}
