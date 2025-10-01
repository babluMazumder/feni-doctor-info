@extends('frontend.master')
@section('title', 'Blog Details')
@section('Maincontent')
  <!-- page breadcrumb start -->

    <section class=" py-16 sm:py-18 relative z-[1] text-white">
        <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-2]"
            style="background-image: url({{asset('frontend')}}/assets/img/testimonial.jpg);"></div>
        <div class="bg-overly absolute top-0 bottom-0 w-full h-full z-[-1]" style="background-color: rgba(0,0,0,0.5);">
        </div>
        <div class="px-6 relative z-[1]">
            <div class="text-center breadcrumb">
                <h2 class="text-4xl sm:text-6xl font-bold mb-4">Blogs Details</h2>
                <ul class="flex gap-2 items-ceneter justify-center leading-6 text-base font-medium">
                    <li class="flex gap-2 items-center text-gray-200"><a href="/">Home</a> <i
                            class="ph-bold ph-caret-right"></i></li>
                    <li class="flex gap-2 items-center"><a href="">Blogs Details</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- page breadcrumb Ends -->


    <!-- blog details start -->
{{-- @dd($blog) --}}
    <section class="blog-details py-16">
        <div class="container max-w-[1224px] px-4 lg:px-0 mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-[1fr_360px] gap-10 lg:gap-20">
                <div class="h-fit">

                    <h1 class="text-2xl md:text-5xl font-semibold lg:leading-15 mb-4">{{ $blog->title }}</h1>

                    <div class="flex items-center justify-between gap-4 mb-6 md:mb-10">
                        <div class="flex items-center gap-4 flex-wrap">
                            <div class="flex gap-3 items-center">
                                <div class="w-12 h-12 rounded-full overflow-hidden"><img src="{{ getImage(@$blog->user->image,'original') }}"
                                        class="w-full h-full object-cover" alt=""></div>
                                <span class="text-gray-400">by:<span class="text-gray-800">{{@$blog->user->name}}</span></span>
                            </div>
                            <div class="line w-px h-4 bg-gray-300"></div>

                            <div class="flex gap-2 items-center">
                                <div class="text-xl leading-1"><i class="ph ph-calendar-blank"></i></div>
                                <span class="text-gray-800">{{ $blog->date }}</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 flex-wrap">


                            <div class="flex gap-2 items-center">
                                <div class="text-2xl leading-1"><i class="ph ph-eye"></i></div>
                                <span class="text-gray-800">{{ $blog->seen }}</span>
                            </div>

                            <div class="line w-px h-4 bg-gray-300"></div>


                        </div>
                    </div>

                    <div class="aspect-[16/10] rounded-xl overflow-hidden mb-6 lg:mb-10">
                        <img src="{{ getImage($blog->upload, 'image_two','default-image-80x80.png') }}" class="w-full h-full object-cover" alt="">
                    </div>

                    <p class=" leading-7 font-normal text-lg mb-4 lg:mb-10">{{ $blog->description }}</p>



                    <div class="flex justify-between gap-3 items-center flex-wrap">
                            @php
                                $blogUrl = route('blog.details', ['slug' => $blog->slug]);
                            @endphp



                                <div class="flex gap-3 items-center mt-6 lg:mt-10 flex-wrap">
                                        <span>Share: </span>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($blogUrl) }}"target="_blank"
                                            class="w-12 h-12 rounded-full capitalize font-normal text-gray-900 text-lg border hover:bg-blue-500 hover:text-white transition border-gray-200  flex items-center justify-center"><span
                                                class="icon-facebook"></span></a>
                                        <a href="https://twitter.com/intent/tweet?url={{ urlencode($blogUrl) }}&text={{ urlencode($blog->title) }}" target="_blank"
                                            class="w-12 h-12 rounded-full capitalize font-normal text-gray-900 text-lg border hover:bg-blue-500 hover:text-white transition border-gray-200  flex items-center justify-center"><span
                                                class="icon-twitter"></span></a>
                                        <a href="https://api.whatsapp.com/send?text={{ urlencode($blog->title . ' ' . $blogUrl) }}" target="_blank"
                                            class="w-12 h-12 rounded-full capitalize font-normal text-gray-900 text-lg border hover:bg-blue-500 hover:text-white transition border-gray-200  flex items-center justify-center"><span
                                                class="icon-whatsapp"></span></a>
                                </div>
                              <!-- Copy button with message placeholder -->
                            <div class="relative inline-block">
                                <a href="javascript:void(0)"
                                onclick="copyLink(this)"
                                class="w-12 h-12 rounded-full border flex items-center justify-center hover:bg-gray-700 hover:text-white"
                                title="Copy Link">
                                <i class="ph ph-link"></i>
                                </a>
                                <!-- Message -->
                                <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-green-600 text-white text-xs px-3 py-1 rounded-lg shadow
                                            opacity-0 transition-opacity duration-700 ease-in-out">
                                    ✅ Link copied
                                </div>
                            </div>
                     </div>

                    <div
                        class="flex items-center xl:gap-30 gap-10 justify-between flex-wrap sm:flex-nowrap mt-7 border-y border-gray-200 lg:mt-10 py-5">
                         @if ($previousBlog)
                        <a href="{{ route('blog.details',['slug' => $previousBlog?->slug]) }}">
                            <span class="text-sm font-semibold text-gray-500 uppercase">Previous</span>
                            <strong
                                class="text-xl font-semibold block prev mt-2 duration-300 hover:text-blue-500">{{ $previousBlog?->title }}</strong>
                        </a>
                        @endif
                         @if ($nextBlog)
                        <a href="{{ route('blog.details',['slug' => $nextBlog?->slug]) }}" class="text-right">
                            <span class="text-sm font-semibold text-gray-500 uppercase">Next</span>
                            <strong
                                class="text-xl font-semibold block prev mt-2 duration-300 hover:text-blue-500">{{ $nextBlog?->title }}</strong>
                        </a>
                        @endif
                    </div>


                </div>

                <div class="h-fit lg:sticky lg:top-24 box-border">
                    <div class="mb-4">
                        {{-- <h4 class="text-xl font-semibold mb-4">Recent Posts</h4> --}}
                        <div class="aspect-[16/10] rounded-lg overflow-hidden"><img src="{{ getImage(@$blog->user->image,'original') }}"
                                class="w-full h-full object-cover" alt=""></div>
                    </div>
                    {{-- <div class="flex gap-3 items-center flex-wrap mb-3">
                        <div class="flex gap-2 items-center">
                            <div class="text-xl leading-1"><i class="ph ph-calendar-blank"></i></div>
                            <span class="text-gray-800">31 August, 2025</span>
                        </div>
                        <div class="line w-px h-4 bg-gray-300"></div>
                        <div class="flex gap-2 items-center">
                            <div class="text-xl leading-1"><i class="ph ph-tag-chevron"></i></div>
                            <span class="text-gray-800">Freelancer</span>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold leading-6 mb-0"><a href="#"class="text-gray-900 hover:text-blue-500 transition duration-300">Exploring Trends in
                            Medical Cosmetic Procedures</a></h4> --}}

                              @foreach ($recentBlogs as $recentBlog)
                            <div class="flex gap-4 items-center border-t border-gray-200 pt-4 mt-4">
                                <div class="w-25 h-fit rounded-lg overflow-hidden shrink-0"><a href=""><img
                                            class="w-full h-full object-cover" src="{{ getImage($recentBlog->upload, 'image_one','default-image-80x80.png') }}" alt=""></a></div>
                                <div>
                                    <a href="{{ route('blog.details',['slug' => $recentBlog->slug]) }}"
                                        class="text-base font-semibold text-gray-900 hover:text-blue-500 transition duration-300">{{ $recentBlog->title }}</a>
                                    <div class="flex gap-2 items-center text-sm mt-2">
                                        <span class="text-gray-800">{{ $recentBlog->date }}</span>
                                        <div class="line w-px h-3 bg-gray-300"></div>
                                        <span class="text-gray-800"> by:{{ $recentBlog->user?->name  }}</span>
                                    </div>
                                </div>
                              </div>
                                @endforeach



                    {{-- <div class="banner mt-10 rounded-lg overflow-hidden">
                        <img src="{{asset('frontend')}}/assets/img/blog-details.jpg" alt="">
                    </div> --}}

                </div>
            </div>
        </div>
        </div>

    </section>
@endsection

<script>
function copyLink(element) {
    const url = window.location.href;
    const message = element.parentElement.querySelector("div");

    if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(url).then(() => showMessage(message))
        .catch(() => fallbackCopy(url, message));
    } else {
        fallbackCopy(url, message);
    }
}

function fallbackCopy(url, message) {
    const temp = document.createElement("input");
    document.body.appendChild(temp);
    temp.value = url;
    temp.select();
    document.execCommand("copy");
    document.body.removeChild(temp);
    showMessage(message);
}

function showMessage(message) {
    // fade in
    message.classList.remove("opacity-0");
    message.classList.add("opacity-100");

    setTimeout(() => {
        // fade out
        message.classList.remove("opacity-100");
        message.classList.add("opacity-0");
    }, 2000);
}
</script>

