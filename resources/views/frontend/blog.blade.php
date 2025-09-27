@extends('frontend.master')
@section('title', 'Blog')
@section('Maincontent')
 <!-- page breadcrumb start -->
 @php
     $img = data_get(customSection(\Modules\Section\Enums\Type::BREADCRUMB, 'breadcrumb_image'), 'original');
 @endphp

    <section class=" py-16 sm:py-18 relative z-[1] text-white">
        <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-2]"
            style="background-image: url({{asset('frontend')}}/assets/img/testimonial.jpg);"></div>
        <div class="bg-overly absolute top-0 bottom-0 w-full h-full z-[-1]" style="background-color: rgba(0,0,0,0.5);">
        </div>
        <div class="px-6 relative z-[1]">
            <div class="text-center breadcrumb">
                <h2 class="text-4xl sm:text-6xl font-bold mb-4">{{ customSection(\Modules\Section\Enums\Type::BREADCRUMB, 'blog-single-title') }}</h2>
                <ul class="flex gap-2 items-ceneter justify-center leading-6 text-base font-medium">
                    <li class="flex gap-2 items-center text-gray-200"><a href="/">Home</a> <i
                            class="ph-bold ph-caret-right"></i></li>
                    <li class="flex gap-2 items-center"><a href="">Blogs</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- page breadcrumb Ends -->




    <!-- blog section Start -->

    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <span class="text-base sm:text-xl font-semibold flex items-center justify-center gap-2 leading-4 mb-3">
                    <span class="text-blue-500 leading-4">
                        <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480">
                            <path
                                d="M480 240A240 240 0 0 1 240 0 240 240 0 0 1 0 240a240 240 0 0 1 240 240 240 240 0 0 1 240-240Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                   {{ customSection(\Modules\Section\Enums\Type::BLOGS, 'short_title') }}</span>
                <h2 class="text-2xl sm:text-4xl font-bold text-gray-800 mb-4">{!! customSection(\Modules\Section\Enums\Type::BLOGS, 'title') !!}</h2>
            </div>

            <!-- Blog Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
                <!-- Blog Card 1 -->
                @foreach ($blogs as $blog )
                <div
                    class="bg-white rounded-xl shadow border border-gray-100 hover:shadow-lg transition overflow-hidden group">
                    <!-- Parent div with padding -->
                    <div class="p-6 overflow-hidden rounded-xl">
                        <div class="aspect-[16/10] overflow-hidden rounded-xl">
                            <a href="{{ route('blog.details', $blog->slug) }}"><img src="{{ getImage($blog->upload, 'image_two','default-image-80x80.png') }}" alt="Blog 1"
                                    class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110"></a>
                        </div>
                    </div>

                    <div class="pb-6 px-6">
                        <div class="flex items-center text-gray-500 text-sm mb-2 space-x-4">
                            <span class="flex items-center gap-1"><i class="ph ph-user text-green-500"></i> {{@$blog->user->name}}</span>
                            <span class="flex items-center gap-1"><i class="ph ph-calendar text-green-500"></i> {{ date('M d, Y', strtotime($blog->date)) }}</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">
                            <a href="{{ route('blog.details', $blog->slug) }}" class="text-gray-900 hover:text-blue-500 transition">{{ Str::limit($blog->title, 35) }}</a>
                        </h3>
                        <a href="{{ route('blog.details', $blog->slug) }}" class="btn-primary rounded-lg h-10">Read More <i
                                class="ph-bold ph-arrow-up-right"></i></a>
                    </div>
                </div>

                @endforeach


            </div>

            <!-- pagination  -->

            <ul class="flex items-center justify-center">
                <!-- Previous Button -->
                <li>
                    <a href="#"
                        class="w-12 h-12 flex items-center justify-center ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                        <i class="ph ph-arrow-left"></i>
                    </a>
                </li>

                <!-- Page Numbers -->
                <li>
                    <a href="#"
                        class="w-12 h-12 flex items-center justify-center border bg-gray-200 border-gray-300 text-gray-700 hover:bg-gray-100 hover:text-gray-700">1</a>
                </li>
                <li>
                    <a href="#"
                        class="w-12 h-12 flex items-center justify-center border border-gray-300 text-gray-700 hover:bg-gray-100 hover:text-gray-700">2</a>
                </li>
                <li>
                    <a href="#"
                        class="w-12 h-12 flex items-center justify-center border border-gray-300 text-gray-700 hover:bg-gray-100 hover:text-gray-700">3</a>
                </li>

                <!-- Next Button -->
                <li>
                    <a href="#"
                        class="w-12 h-12 flex items-center justify-center text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- blog section Ends -->
@endsection
