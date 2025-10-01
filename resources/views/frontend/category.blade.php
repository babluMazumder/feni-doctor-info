@extends('frontend.master')
@section('title', 'Home')
@section('Maincontent')
 <!-- Category Start -->

    <section class="py-16 bg-gray-50">
        <div class="container max-w-[1224px] mx-auto px-4 lg:px-0 relative z-[1]">
            <div class="text-center mb-12">
                <span class="text-base sm:text-xl font-semibold flex justify-center items-center gap-2 leading-4 mb-3">
                    <span class="text-blue-500 leading-4">
                        <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480">
                            <path
                                d="M480 240A240 240 0 0 1 240 0 240 240 0 0 1 0 240a240 240 0 0 1 240 240 240 240 0 0 1 240-240Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>{{ customSection(\Modules\Section\Enums\Type::CATEGORY, 'category_title') }}</span>
                <h2 class="text-2xl sm:text-4xl font-bold text-gray-800 mb-4">{{ customSection(\Modules\Section\Enums\Type::CATEGORY, 'category_sub_title') }}</h2>
            </div>

            <!-- Grid -->
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <!-- Card 1 -->

                @foreach ($categories as $category )


                <div
                    class="group relative px-6 py-8 bg-white/80 backdrop-blur-lg rounded-2xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 text-center border-t-4 border-blue-500">
                    <div
                        class="flex justify-center mb-6 bg-gradient-to-r from-blue-100 to-blue-200 w-20 h-20 p-4 rounded-full shadow-inner mx-auto">
                        <img src="{{ getImage($category->upload, 'original','default-image-80x80.png') }}" alt="Internal Medicine" class="w-10 h-10" />
                    </div>
                    <h3 class="text-xl font-bold"><a class="text-gray-900 hover:text-blue-500 transition"
                            href="">{{ $category->title }}</a></h3>
                    <p class="text-gray-700 text-base font-medium mt-3 mb-6">
                       {{ $category->sub_title }}
                    </p>
                    <a href="{{ route('days',['category' => $category->id]) }}"
                        class="inline-flex items-center justify-center px-6 py-2 gap-2 text-base font-semibold text-white bg-blue-600 rounded-lg shadow hover:bg-blue-700 transition">
                        Book Now <i class="ph-bold ph-arrow-up-right"></i>
                    </a>
                </div>
                @endforeach

            </div>

        </div>
    </section>

    <!-- Category ends -->
@endsection
