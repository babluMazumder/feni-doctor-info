 <!-- faq section  Start-->
{{-- @dd($faqs) --}}
    <section class=" mx-auto pb-16">
        <h2 class="text-2xl font-bold mb-6 text-center"></h2>
        <div class="container max-w-[1224px] mx-auto px-4 lg:px-0">
            <div class="text-center mb-12">
                <span class="text-base sm:text-xl font-semibold flex justify-center items-center gap-2 leading-4 mb-3">
                    <span class="text-blue-500 leading-4">
                        <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480">
                            <path
                                d="M480 240A240 240 0 0 1 240 0 240 240 0 0 1 0 240a240 240 0 0 1 240 240 240 240 0 0 1 240-240Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                   {{ customSection(\Modules\Section\Enums\Type::FAQ, 'short_title') }}</span>
                <h2 class="text-2xl sm:text-4xl font-bold text-gray-800 mb-4">{{ customSection(\Modules\Section\Enums\Type::FAQ, 'title') }}</h2>
                <p>{!! customSection(\Modules\Section\Enums\Type::FAQ, 'description') !!}</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-center">
                <!-- Left Image -->
                <div>
                    <img src="{{ data_get(customSection(\Modules\Section\Enums\Type::FAQ,'faq_image'), 'image_one') }}" alt="FAQ Illustration" class="rounded-2xl shadow-lg w-full">
                </div>

                <div class="space-y-4">
                    @foreach ($faqs as $faq)
                     <!-- Item 1 -->
                    <div class="accordion-item border border-gray-200 rounded-lg overflow-hidden">
                        <button onclick="toggleAccordion(this)"
                            class="w-full cursor-pointer flex justify-between items-center p-4 font-semibold text-gray-800 hover:bg-gray-100 transition">
                            {{ $faq->title }}
                            <i class="ph ph-plus text-xl transition-transform duration-300"></i>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 bg-white p-0">
                            <p class="p-4 text-gray-600">
                                {!! $faq->description !!}
                            </p>
                        </div>
                    </div>

                    @endforeach


                    {{-- <!-- Item 2 -->
                    <div class="accordion-item border border-gray-200 rounded-lg overflow-hidden">
                        <button onclick="toggleAccordion(this)"
                            class="w-full cursor-pointer flex justify-between items-center p-4 font-semibold text-gray-800 hover:bg-gray-100 transition">
                            How can I contact support?
                            <i class="ph ph-plus text-xl transition-transform duration-300"></i>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 bg-white p-0">
                            <p class="p-4 text-gray-600">
                                You can reach out to our support team via email, phone, or live chat. We are available
                                24/7.
                            </p>
                        </div>
                    </div>

                    <div class="accordion-item border border-gray-200 rounded-lg overflow-hidden">
                        <button onclick="toggleAccordion(this)"
                            class="w-full cursor-pointer flex justify-between items-center p-4 font-semibold text-gray-800 hover:bg-gray-100 transition">
                            How can I contact support?
                            <i class="ph ph-plus text-xl transition-transform duration-300"></i>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 bg-white p-0">
                            <p class="p-4 text-gray-600">
                                You can reach out to our support team via email, phone, or live chat. We are available
                                24/7.
                            </p>
                        </div>
                    </div>

                    <div class="accordion-item border border-gray-200 rounded-lg overflow-hidden">
                        <button onclick="toggleAccordion(this)"
                            class="w-full cursor-pointer flex justify-between items-center p-4 font-semibold text-gray-800 hover:bg-gray-100 transition">
                            How can I contact support?
                            <i class="ph ph-plus text-xl transition-transform duration-300"></i>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 bg-white p-0">
                            <p class="p-4 text-gray-600">
                                You can reach out to our support team via email, phone, or live chat. We are available
                                24/7.
                            </p>
                        </div>
                    </div>

                    <div class="accordion-item border border-gray-200 rounded-lg overflow-hidden">
                        <button onclick="toggleAccordion(this)"
                            class="w-full cursor-pointer flex justify-between items-center p-4 font-semibold text-gray-800 hover:bg-gray-100 transition">
                            How can I contact support?
                            <i class="ph ph-plus text-xl transition-transform duration-300"></i>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 bg-white p-0">
                            <p class="p-4 text-gray-600">
                                You can reach out to our support team via email, phone, or live chat. We are available
                                24/7.
                            </p>
                        </div>
                    </div> --}}
                </div>


            </div>
        </div>

    </section>

    <!-- faq section  Start-->
