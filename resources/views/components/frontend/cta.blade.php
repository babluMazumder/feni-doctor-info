 <!-- Cta section Start -->

    <section class="cta-section">
        <div class="pt-16 lg:py-16 bg-blue-500 text-white relative z-[1]">
            <div
                class="container max-w-[1224px] mx-auto px-4 lg:px-0 flex items-center lg:justify-center justify-between lg:gap-6 gap-10 flex-wrap">
                <div class="lg:w-[700px] me-auto">
                    <h2 class="text-2xl md:text-5xl font-semibold lg:leading-13 mb-6">{{ customSection(\Modules\Section\Enums\Type::CTA, 'short_title') }}</h2>
                    <p>{!! customSection(\Modules\Section\Enums\Type::CTA, 'title') !!} </p>
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
