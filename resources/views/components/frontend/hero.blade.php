  <!-- hero section Start -->

    <section class="hero-section border-b border-gray-100 pt-16 pb-16 sm:pt-[100px] sm:pb-[100px] relative z-[1]">
        <div class="absolute top-10 left-[45%] translate-x-1/2 w-16 float-bob-y hidden lg:block"><img
                src="{{asset('frontend')}}/assets/img/icons/medical.png" class="" alt="">
        </div>
        <div class="absolute top-20 left-52 w-12 float-bob-x hidden lg:block"><img
                src="{{asset('frontend')}}/assets/img/icons/heart-rate.png" class="" alt=""></div>
        <div class="absolute hidden w-16 top-1/2 end-50 rotate-slow lg:block"><img src="{{asset('frontend')}}/assets/img/icons/dna.png"
                class="" alt=""></div>
        <div class="w-full rounded-lg absolute top-0 bottom-0 bg-cover bg-center z[-1] opacity-30"
            style="background-image: url('{{asset('frontend')}}/assets/img//shape-bg/abstract-3.jpg');">
        </div>
        <div class="container max-w-[1224px] mx-auto px-4 lg:px-0 relative z-[1]">
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center justify-center gap-12 lg:gap-[30px]">
                <div class="">
                    <span class=" text-base sm:text-xl font-semibold flex items-center gap-2 leading-1 mb-4">
                        <span class="text-blue-500">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480">
                                <path
                                    d="M480 240A240 240 0 0 1 240 0 240 240 0 0 1 0 240a240 240 0 0 1 240 240 240 240 0 0 1 240-240Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                       {{customSection(\Modules\Section\Enums\Type::HERO_SECTION, 'hero_section_title')}}</span>
                    <h1 class="text-3xl sm:text-7xl font-bold sm:leading-18 mb-4 sm:mb-10 capitalize"> {{customSection(\Modules\Section\Enums\Type::HERO_SECTION, 'hero_section_short_description')}}</h1>
                    {{-- <h1 class="text-3xl sm:text-7xl font-bold sm:leading-18 mb-4 sm:mb-10 capitalize">Caring for <span
                            class="text-blue-500">Health</span> Caring for You</h1> --}}
                    <p class="text-base font-normal text-gray-500 leading-6 mb-4 sm:mb-8">{!!  customSection(\Modules\Section\Enums\Type::HERO_SECTION, 'description')!!}</p>

                    <form action="#"
                        class="p-4 sm:p-5 bg-white shadow-lg rounded-lg ring ring-gray-100 mb-4 sm:mb-8 flex flex-col lg:flex-row gap-4 lg:gap-0 items-center">
                        <!-- Tailwind v3+ required -->
                        <!-- <label for="category" class="sr-only">Category</label> -->
                        <div class="relative flex items-center w-full">
                            <select id="category" name="category"
                                class="w-full h-12 md:h-14 pl-4 pr-10 border rounded-lg lg:rounded-r-none border-gray-200 bg-white text-base font-medium text-gray-800 appearance-none focus:outline-none ">
                                <option value="">All categories</option>
                                <option value="electronics">Electronics</option>
                                <option value="apparel">Apparel</option>
                                <option value="home">Home & Garden</option>
                                <option value="sports">Sports</option>
                                <option value="books">Books</option>
                            </select>

                            <!-- custom arrow (positioned on the right) -->
                            <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center">
                                <i class="ph-bold ph-caret-down"></i>
                            </div>
                        </div>

                        <div class="relative flex items-center w-full">
                            <select id="category" name="category"
                                class="w-full h-12 md:h-14 pl-4 pr-10 border lg:border-l-0 lg:border-r-0 rounded-lg lg:rounded-none border-gray-200 bg-white text-base font-medium text-gray-800 appearance-none focus:outline-none ">
                                <option value="">Cardiology</option>
                                <option value="electronics">Neurology</option>
                            </select>

                            <!-- custom arrow (positioned on the right) -->
                            <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center">
                                <i class="ph-bold ph-caret-down"></i>
                            </div>
                        </div>

                        <!-- Desktop -->
                        <button
                            class="inline-flex w-full md:w-40 h-12 md:h-14 items-center rounded-lg lg:rounded-l-none justify-center gap-2 px-4 py-2 bg-blue-500 text-white text-base cursor-pointer font-medium hover:bg-black focus:outline-none"
                            type="button">
                            <i class="ph ph-magnifying-glass text-xl"></i>
                            <span class="">Search</span>
                        </button>
                    </form>


                    <div class="flex gap-4 items-center justify-center lg:justify-start flex-wrap">
                        <a href="{{customSection(\Modules\Section\Enums\Type::HERO_SECTION, 'appointment_button_link')}}" class="btn-primary inline-flex"> {{customSection(\Modules\Section\Enums\Type::HERO_SECTION, 'appointment_button')}} <i
                                class="ph-bold ph-arrow-up-right"></i></a>
                        <a href="{{customSection(\Modules\Section\Enums\Type::HERO_SECTION, 'discover_button_link')}}" class="btn-primary btn-black inline-flex"></i> {{customSection(\Modules\Section\Enums\Type::HERO_SECTION, 'discover_button')}} <i
                                class="ph-bold ph-arrow-up-right"></i></a>
                    </div>
                </div>

                <div class="hero-right lg:ps-20">
                     @php $hero_image = customSection(\Modules\Section\Enums\Type::HERO_SECTION, 'hero_image'); @endphp
                    <div class="hero-img rounded-lg border-10 border-gray-900 p-4 aspect-[16/20]"><img
                            class=" overflow-hidden w-full h-full object-cover rounded-lg" src="{{ $hero_image['original'] }}"
                            alt="">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- hero section Ends -->
