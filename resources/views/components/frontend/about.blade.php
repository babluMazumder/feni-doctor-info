  <!-- About section STart -->

    <section class="bg-white pt-16 lg:pt-25 pb-16">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Left: Hero Image -->
                <div class="w-full aspect-[16/14] lg:pr-12 about-img">
                    <img src="{{asset('frontend')}}/assets/img/img-5.jpg" class="w-full h-full rounded-xl object-cover shadow-lg" />
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
                            About Us</span>
                        <h2 class="text-2xl sm:text-5xl font-bold sm:leading-14 text-gray-800 mb-4">Affordable Health
                            Care Solutions</h2>
                    </div>

                    <!-- Subheading -->
                    <p class="text-gray-600 mb-8">
                        Redefining Beauty with Mediax™ is the captivating and inclusive title that invites visitors
                        to explore the unique story and missions of Mediax. This title suggests a commitment to not only
                        providing
                    </p>

                    <!-- Bullet Points -->
                    <div class="flex flex-col lg:flex-row items-stretch gap-10">
                        <div class="flex-shrink-0">
                            <ul class="space-y-6 mb-8">
                                <li class="flex items-center text-gray-900 gap-3 text-xl font-semibold">
                                    <i class="ph-fill ph-shield-check text-green-500 text-3xl leading-4"></i>
                                    25+ Years Of Experience
                                </li>
                                <li class="flex items-center text-gray-900 gap-3 text-xl font-semibold">
                                    <i class="ph-fill ph-shield-check text-green-500 text-3xl leading-4"></i>
                                    15k+ Happy Customers
                                </li>
                                <li class="flex items-center text-gray-900 gap-3 text-xl font-semibold">
                                    <i class="ph-fill ph-shield-check text-green-500 text-3xl leading-4"></i>
                                    12k+ Positive Reviews
                                </li>
                            </ul>

                            <a href="#" class="btn-primary inline-flex justify-center"> About More <i
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
