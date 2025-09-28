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
