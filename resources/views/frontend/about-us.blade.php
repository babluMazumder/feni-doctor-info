@extends('frontend.master')
@section('title', 'about-us')
@section('Maincontent')
 <!-- page breadcrumb start -->

    <section class=" py-16 sm:py-18 relative z-[1] text-white">
        <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-2]"
            style="background-image: url({{asset('frontend')}}/assets/img/testimonial.jpg);"></div>
        <div class="bg-overly absolute top-0 bottom-0 w-full h-full z-[-1]" style="background-color: rgba(0,0,0,0.5);">
        </div>
        <div class="px-6 relative z-[1]">
            <div class="text-center breadcrumb">
                <h2 class="text-4xl sm:text-6xl font-bold mb-4">About Us</h2>
                <ul class="flex gap-2 items-ceneter justify-center leading-6 text-base font-medium">
                    <li class="flex gap-2 items-center text-gray-200"><a href="/">Home</a> <i
                            class="ph-bold ph-caret-right"></i></li>
                    <li class="flex gap-2 items-center"><a href="">About Us</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- About section STart -->

    <section class="bg-white pt-16 lg:pt-25 lg:pb-40 pb-16">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Left: Hero Image -->
                <div class="w-full aspect-[16/14] lg:pr-12 about-img">
                    <img src="{{ data_get(customSection(\Modules\Section\Enums\Type::ABOUT_US, 'about_us_image'), 'original') }}" class="w-full h-full rounded-xl object-cover shadow-lg" />
                </div>

                <!-- Right: Content -->
                <div class="space-y-6">
                    <div class=" mb-8">
                        <span class="text-base sm:text-xl font-semibold flex items-center gap-2 leading-4 mb-3">
                            <span class="text-blue-500 leading-4">
                                <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480">
                                    <path
                                        d="M480 240A240 240 0 0 1 240 0 240 240 0 0 1 0 240a240 240 0 0 1 240 240 240 240 0 0 1 240-240Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                           {{ customSection(\Modules\Section\Enums\Type::ABOUT_US, 'section_tagline')}}</span>
                        <h2 class="text-2xl sm:text-5xl font-bold sm:leading-14 text-gray-800 mb-4">{{ customSection(\Modules\Section\Enums\Type::ABOUT_US, 'section_main_title')}}</h2>
                    </div>

                    <!-- Subheading -->
                    <p class="text-gray-600 mb-8">
                      {{ customSection(\Modules\Section\Enums\Type::ABOUT_US, 'promotional_red_text')}}
                    </p>

                    <!-- Bullet Points -->
                    <div class="flex flex-col lg:flex-row items-stretch gap-10">
                        <div class="flex-shrink-0">
                            <ul class="space-y-6 mb-8">
                                <li class="flex items-center text-gray-900 gap-3 text-xl font-semibold">
                                    <i class="ph-fill ph-shield-check text-green-500 text-3xl leading-4"></i>
                                    {{ customSection(\Modules\Section\Enums\Type::ABOUT_US, 'years_of_experience')}} Years Of Experience
                                </li>
                                <li class="flex items-center text-gray-900 gap-3 text-xl font-semibold">
                                    <i class="ph-fill ph-shield-check text-green-500 text-3xl leading-4"></i>
                                   {{ customSection(\Modules\Section\Enums\Type::ABOUT_US, 'happay_customers')}} Happy Customers
                                </li>
                                <li class="flex items-center text-gray-900 gap-3 text-xl font-semibold">
                                    <i class="ph-fill ph-shield-check text-green-500 text-3xl leading-4"></i>
                                   {{ customSection(\Modules\Section\Enums\Type::ABOUT_US, 'positive_reviews')}} Positive Reviews
                                </li>
                            </ul>

                            <a href="{{ customSection(\Modules\Section\Enums\Type::ABOUT_US, 'primary_button_link')}}" class="btn-primary inline-flex justify-center">{{ customSection(\Modules\Section\Enums\Type::ABOUT_US, 'primary_button_text')}} <i
                                    class="ph-bold ph-arrow-up-right"></i></a>
                        </div>
                        <div class="ab-inner-img rounded-xl overflow-hidden aspect-[16/12]">
                            <img src="{{asset('frontend')}}/assets/img/ab-2.jpg" class="rounded-xl w-full h-full object-cover" alt="">
                            <!-- Play Button (Trigger) -->
                            <button data-modal-target="videoModal1" class="play-btn cursor-pointer">
                                <i class="ph-fill ph-play text-xl"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- video Modal -->
    <div id="videoModal1"
        class="fixed inset-0 bg-black/80 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300 z-[999999]">

        <div class="relative rounded-lg shadow-lg w-full max-w-3xl scale-95 transition-transform duration-300">

            <!-- Close Button -->
            <button data-modal-close
                class="absolute -top-4 -right-4 cursor-pointer rounded-full w-10 h-10 flex items-center justify-center bg-gray-100 text-gray-500 hover:bg-blue-500 hover:text-white text-xl">
                <i class="ph ph-x"></i>
            </button>

            <!-- Video -->
            <div class="aspect-w-16 aspect-h-9">
                <iframe class="w-full h-[400px] md:h-[450px] rounded-lg overflow-hidden"
                    src="https://www.youtube.com/embed/dEo9mZc65Bc"
                    title="Life and death in the surgeon doctor stock video footage by FINDSTORY" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- About section Ends -->


    <!-- Cta section Start -->

    <section class="cta-section">
        <div class="pt-16 lg:py-16 bg-blue-500 text-white relative z-[1]">
            <div
                class="container max-w-[1224px] mx-auto px-4 lg:px-0 flex items-center lg:justify-center justify-between lg:gap-6 gap-10 flex-wrap">
                <div class="lg:w-[700px] me-auto">
                    <h2 class="text-2xl md:text-5xl font-semibold lg:leading-13 mb-6">{{ customSection(\Modules\Section\Enums\Type::CTA, 'short_title') }}</h2>
                    <p>{!! customSection(\Modules\Section\Enums\Type::CTA, 'title') !!}</p>
                    <div class="flex flex-wrap gap-6 items-center mt-6">
                        <a href="{{ customSection(\Modules\Section\Enums\Type::CTA, 'button_one_link') }}"
                            class="text-white-900 font-medium uppercase bg-gray-800 shadow hover:shadow-lg transition transform hover:-translate-y-1 py-4 px-6 rounded-lg inline-flex gap-2 items-center justify-center">{{ customSection(\Modules\Section\Enums\Type::CTA, 'button_one') }} <i class="ph-bold ph-arrow-up-right"></i></a>
                        <a href="{{ customSection(\Modules\Section\Enums\Type::CTA, 'button_two_link') }}"
                            class="text-gray-900 font-medium uppercase bg-white shadow hover:shadow-lg transition transform hover:-translate-y-1 py-4 px-6 rounded-lg inline-flex gap-2 items-center justify-center">{{ customSection(\Modules\Section\Enums\Type::CTA, 'button_two') }} <i class="ph-bold ph-arrow-up-right"></i></a>
                    </div>
                </div>

                <div class="lg:absolute lg:right-5 lg:-bottom-0 z-[1] max-w-[900px]">
                    <img src="{{asset('frontend')}}/assets/img/cta-img-2.png" class="w-full" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Cta section Ends -->



    <!-- testimonial start -->

    <section class="px-4 testimonial-section py-16">
        <div class="container max-w-[1224px] mx-auto px-4 lg:px-0">
            <div class="text-center">
                <span class="text-base sm:text-xl font-semibold flex justify-center items-center gap-2 leading-4 mb-3">
                    <span class="text-blue-500 leading-4">
                        <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480">
                            <path
                                d="M480 240A240 240 0 0 1 240 0 240 240 0 0 1 0 240a240 240 0 0 1 240 240 240 240 0 0 1 240-240Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                   {{ customSection(\Modules\Section\Enums\Type::CLIENT_REVIEW, 'client_title') }}</span>
                <h2 class="text-2xl sm:text-4xl font-bold text-gray-800 mb-4">{{ customSection(\Modules\Section\Enums\Type::CLIENT_REVIEW, 'client_sub_title') }}</h2>
            </div>
            <div class="swiper testimonial swiper-margin">
                <div class="swiper-wrapper">
                    @foreach ($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div
                            class="pb-11 testimonial-item pt-15 px-8 rounded-xl shadow-md hover:shadow-lg bg-white relative backdrop-blur-lg ring ring-gray-100">
                            <div
                                class=" absolute right-0 top-0 -translate-1/2 quote-icon w-15 h-15 flex items-center justify-center text-4xl ring-6 rounded-full ring-teal-500 bg-gray-800 text-white">
                                <i class="ph-fill ph-quotes"></i>
                            </div>
                            <div class="flex items-start gap-5 mb-4">
                                <div class="shrink-0 w-20 h-20 rounded-full overflow-hidden">
                                    <img src="{{ getImage($testimonial->upload, 'image_two','default-image-80x80.png') }}" class="w-full h-full object-cover" alt="">
                                </div>
                                <div>
                                    <h4 class="text-xl leading-5 mb-1 font-semibold text-gray-800">{{ $testimonial->client_name }}</h4>
                                    <span class="text-base block text-gray-800">{{ $testimonial->designation }}</span>
                                    <div class="flex text-lg items-center mb-4 mt-2">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= floor($testimonial->rating))
                                                {{-- Full star --}}
                                                <i class="ph-fill ph-star text-amber-400"></i>
                                            @elseif ($i - $testimonial->rating < 1)
                                                {{-- Half star (if you want to support halves) --}}
                                                <i class="ph-fill ph-star-half text-amber-400"></i>
                                            @else
                                                {{-- Empty star --}}
                                                <i class="ph-fill ph-star text-gray-400"></i>
                                            @endif
                                        @endfor

                                        <span class="ml-2 text-sm text-gray-600">({{ $testimonial->rating }})</span>
                                    </div>
                                </div>

                            </div>
                            <p class="mb-0 text-gray-500 text-base leading-7 font-normal">{!! $testimonial->description !!}</p>

                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>


    <!-- testimonial Ends -->
@endsection
