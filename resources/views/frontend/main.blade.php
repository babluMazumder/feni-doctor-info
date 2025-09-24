

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
            style="background-image: url('{{asset('frontend')}}/assets/img//shape-bg/abstract-3.jpg');"></div>
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
                        24/7 Emergency Service</span>
                    <h1 class="text-3xl sm:text-7xl font-bold sm:leading-18 mb-4 sm:mb-10 capitalize">Caring for <span
                            class="text-blue-500">Health</span> Caring for You</h1>
                    <p class="text-base font-normal text-gray-500 leading-6 mb-4 sm:mb-8">Lorem ipsum dolor sit amet
                        consectetur
                        adipisicing
                        elit. Commodi nulla quibusdam architecto, error exercitationem a?</p>

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
                        <a href="#" class="btn-primary inline-flex"> Appointment Now <i
                                class="ph-bold ph-arrow-up-right"></i></a>
                        <a href="#" class="btn-primary btn-black inline-flex"></i> Discover More <i
                                class="ph-bold ph-arrow-up-right"></i></a>
                    </div>
                </div>

                <div class="hero-right lg:ps-20">
                    <div class="hero-img rounded-lg border-10 border-gray-900 p-4 aspect-[16/20]"><img
                            class=" overflow-hidden w-full h-full object-cover rounded-lg" src="{{asset('frontend')}}/assets/img/img-7.jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- hero section Ends -->

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
                    </span> Disease Categories</span>
                <h2 class="text-2xl sm:text-4xl font-bold text-gray-800 mb-4">Our Specialized Disease Categories</h2>
            </div>

            <!-- Grid -->
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <!-- Card 1 -->
                <div
                    class="group relative px-6 py-8 bg-white/80 backdrop-blur-lg rounded-2xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 text-center border-t-4 border-blue-500">
                    <div
                        class="flex justify-center mb-6 bg-gradient-to-r from-blue-100 to-blue-200 w-20 h-20 p-4 rounded-full shadow-inner mx-auto">
                        <img src="{{asset('frontend')}}/assets/img/icons/pills.png" alt="Internal Medicine" class="w-10 h-10" />
                    </div>
                    <h3 class="text-xl font-bold"><a class="text-gray-900 hover:text-blue-500 transition"
                            href="{{asset('frontend')}}/days.html">Internal Medicine</a></h3>
                    <p class="text-gray-700 text-base font-medium mt-3 mb-6">
                        Diabetes • High Blood Pressure • Fever
                    </p>
                    <a href="{{asset('frontend')}}/days.html"
                        class="inline-flex items-center justify-center px-6 py-2 gap-2 text-base font-semibold text-white bg-blue-600 rounded-lg shadow hover:bg-blue-700 transition">
                        Book Now <i class="ph-bold ph-arrow-up-right"></i>
                    </a>
                </div>

                <!-- Card 2 -->
                <div
                    class="group relative px-6 py-8 bg-white/80 backdrop-blur-lg rounded-2xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 text-center border-t-4 border-green-500">
                    <div
                        class="flex justify-center mb-6 bg-gradient-to-r from-gray-100 to-gray-200 w-20 h-20 p-4 rounded-full shadow-inner mx-auto">
                        <img src="{{asset('frontend')}}/assets/img/icons/floss.png" alt="Dental Care" class="w-10 h-10" />
                    </div>
                    <h3 class="text-xl font-bold"><a class="text-gray-900 hover:text-blue-500 transition"
                            href="{{asset('frontend')}}/days.html">Dental Care</a></h3>
                    <p class="text-gray-700 text-base font-medium mt-3 mb-6">
                        Toothache • Cavity • Gum Disease
                    </p>
                    <a href="{{asset('frontend')}}/days.html"
                        class="inline-flex items-center justify-center px-6 py-2 gap-2 text-base font-semibold text-white bg-gray-600 rounded-lg shadow hover:bg-gray-700 transition">
                        Book Now <i class="ph-bold ph-arrow-up-right"></i>
                    </a>
                </div>

                <!-- Card 3 -->
                <div
                    class="group relative px-6 py-8 bg-white/80 backdrop-blur-lg rounded-2xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 text-center border-t-4 border-teal-500">
                    <div
                        class="flex justify-center mb-6 bg-gradient-to-r from-teal-100 to-teal-200 w-20 h-20 p-4 rounded-full shadow-inner mx-auto">
                        <img src="{{asset('frontend')}}/assets/img/icons/kidney.png" alt="Urology Care" class="w-10 h-10" />
                    </div>
                    <h3 class="text-xl font-bold"><a class="text-gray-900 hover:text-blue-500 transition"
                            href="{{asset('frontend')}}/days.html">Urology Care</a></h3>

                    <p class="text-gray-700 text-base font-medium mt-3 mb-6">
                        Kidney Stone • Urinary Tract Infection
                    </p>
                    <a href="{{asset('frontend')}}/days.html"
                        class="inline-flex items-center justify-center gap-2 px-6 py-2 text-base font-semibold text-white bg-teal-600 rounded-lg shadow hover:bg-teal-700 transition">
                        Book Now <i class="ph-bold ph-arrow-up-right"></i>
                    </a>
                </div>

                <!-- Card 4 -->
                <div
                    class="group relative px-6 py-8 bg-white/80 backdrop-blur-lg rounded-2xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 text-center border-t-4 border-purple-500">
                    <div
                        class="flex justify-center mb-6 bg-gradient-to-r from-purple-100 to-purple-200 w-20 h-20 p-4 rounded-full shadow-inner mx-auto">
                        <img src="{{asset('frontend')}}/assets/img/icons/brain.png" alt="Neurology Care" class="w-10 h-10" />
                    </div>
                    <h3 class="text-xl font-bold"><a class="text-gray-900 hover:text-blue-500 transition"
                            href="{{asset('frontend')}}/days.html">Neurology Care</a></h3>

                    <p class="text-gray-700 text-base font-medium mt-3 mb-6">
                        Migraine • Stroke • Nerve Disorders
                    </p>
                    <a href="{{asset('frontend')}}/days.html"
                        class="inline-flex items-center justify-center gap-2 px-6 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow hover:bg-purple-700 transition">
                        Book Now <i class="ph-bold ph-arrow-up-right"></i>
                    </a>
                </div>

                <!-- Card 5 -->
                <div
                    class="group relative px-6 py-8 bg-white/80 backdrop-blur-lg rounded-2xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 text-center border-t-4 border-red-500">
                    <div
                        class="flex justify-center mb-6 bg-gradient-to-r from-red-100 to-red-200 w-20 h-20 p-4 rounded-full shadow-inner mx-auto">
                        <img src="{{asset('frontend')}}/assets/img/icons/cardiology.png" alt="Cardiology Care" class="w-10 h-10" />
                    </div>
                    <h3 class="text-xl font-bold"><a class="text-gray-900 hover:text-blue-500 transition"
                            href="{{asset('frontend')}}/days.html">Cardiology Care</a></h3>

                    <p class="text-gray-700 text-base font-medium mt-3 mb-6">
                        Chest Pain • Blockage • Heart Failure
                    </p>
                    <a href="{{asset('frontend')}}/days.html"
                        class="inline-flex items-center justify-center gap-2 px-6 py-2 text-base font-semibold text-white bg-red-600 rounded-lg shadow hover:bg-red-700 transition">
                        Book Now <i class="ph-bold ph-arrow-up-right"></i>
                    </a>
                </div>

                <!-- Card 6 -->
                <div
                    class="group relative px-6 py-8 bg-white/80 backdrop-blur-lg rounded-2xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 text-center border-t-4 border-cyan-500">
                    <div
                        class="flex justify-center mb-6 bg-gradient-to-r from-cyan-100 to-cyan-200 w-20 h-20 p-4 rounded-full shadow-inner mx-auto">
                        <img src="{{asset('frontend')}}/assets/img/icons/pulmonology.png" alt="Pulmonology Care" class="w-10 h-10" />
                    </div>
                    <h3 class="text-xl font-bold"><a class="text-gray-900 hover:text-blue-500 transition"
                            href="{{asset('frontend')}}/days.html">Pulmonology Care</a></h3>

                    <p class="text-gray-700 text-base font-medium mt-3 mb-6">
                        Asthma • Cough • Lung Infections
                    </p>
                    <a href="{{asset('frontend')}}/days.html"
                        class="inline-flex items-center justify-center gap-2 px-6 py-2 text-base font-semibold text-white bg-cyan-600 rounded-lg shadow hover:bg-cyan-700 transition">
                        Book Now <i class="ph-bold ph-arrow-up-right"></i>
                    </a>
                </div>

                <!-- Card 7 -->
                <div
                    class="group relative px-6 py-8 bg-white/80 backdrop-blur-lg rounded-2xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 text-center border-t-4 border-yellow-500">
                    <div
                        class="flex justify-center mb-6 bg-gradient-to-r from-yellow-100 to-yellow-200 w-20 h-20 p-4 rounded-full shadow-inner mx-auto">
                        <img src="{{asset('frontend')}}/assets/img/icons/gastroenterology.png" alt="Gastroenterology" class="w-10 h-10" />
                    </div>
                    <h3 class="text-xl font-bold"><a class="text-gray-900 hover:text-blue-500 transition"
                            href="{{asset('frontend')}}/days.html">Gastroenterology</a></h3>

                    <p class="text-gray-700 text-base font-medium mt-3 mb-6">
                        Gastric • Ulcer • Liver Problems
                    </p>
                    <a href="{{asset('frontend')}}/days.html"
                        class="inline-flex items-center justify-center gap-2 px-6 py-2 text-base font-semibold text-white bg-yellow-600 rounded-lg shadow hover:bg-yellow-700 transition">
                        Book Now <i class="ph-bold ph-arrow-up-right"></i>
                    </a>
                </div>

                <!-- Card 8 -->
                <div
                    class="group relative px-6 py-8 bg-white/80 backdrop-blur-lg rounded-2xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 text-center border-t-4 border-indigo-500">
                    <div
                        class="flex justify-center mb-6 bg-gradient-to-r from-indigo-100 to-indigo-200 w-20 h-20 p-4 rounded-full shadow-inner mx-auto">
                        <img src="{{asset('frontend')}}/assets/img/icons/arthritis.png" alt="Orthopedic Care" class="w-10 h-10" />
                    </div>
                    <h3 class="text-xl font-bold"><a class="text-gray-900 hover:text-blue-500 transition"
                            href="{{asset('frontend')}}/days.html">Orthopedic Care</a></h3>

                    <p class="text-gray-700 text-base font-medium mt-3 mb-6">
                        Bone Fracture • Arthritis • Joint Pain
                    </p>
                    <a href="{{asset('frontend')}}/days.html"
                        class="inline-flex items-center justify-center gap-2 px-6 py-2 text-base font-semibold text-white bg-indigo-600 rounded-lg shadow hover:bg-indigo-700 transition">
                        Book Now <i class="ph-bold ph-arrow-up-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- Category ends -->


    <!-- doctor list Start-->

    <section class="pt-16 pb-16 lg:pb-40 bg-white relative z-[1]">
        <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-1] opacity-5"
            style="background-image: url({{asset('frontend')}}/assets/img/shape-bg/abstract-2.jpg);"></div>
        <div class="container max-w-[1224px] mx-auto px-6 relative z-[1] mb-25">
            <div class="text-center mb-12">
                <span class="text-base sm:text-xl font-semibold flex justify-center items-center gap-2 leading-4 mb-3">
                    <span class="text-blue-500 leading-4">
                        <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480">
                            <path
                                d="M480 240A240 240 0 0 1 240 0 240 240 0 0 1 0 240a240 240 0 0 1 240 240 240 240 0 0 1 240-240Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                    Doctors</span>
                <h2 class="text-2xl sm:text-4xl font-bold text-gray-800 mb-4">Popular Doctors</h2>
            </div>
        </div>

        <div class="px-4 lg:px-[80px] ">
            <!-- Doctors Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-x-6 gap-y-20 justify-center items-center">

                <!-- Doctor Card -->

                <div
                    class="bg-white p-6 rounded-xl doctor-card shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 border border-gray-100 group backdrop-blur-lg flex-1 text-center relative z-[1]">
                    <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-1] left-0 rounded-xl opacity-60"
                        style="background-image: url({{asset('frontend')}}/assets/img/shape-bg/abstract-3.jpg);"></div>
                    <div
                        class="w-30 h-30 rounded-full overflow-hidden absolute -top-12 bg-gradient-to-r from-teal-400 via-purple-400 to-blue-500 p-3 left-1/2 -translate-x-1/2  z-[1]">
                        <img src="{{asset('frontend')}}/assets/img/img-4.jpeg" class="w-full h-full rounded-full object-cover" alt="">
                    </div>

                    <h3 class="text-red-600 font-semibold text-lg mt-18">Medicine, Arthritis, Pain, Paralysis & Diabetes
                    </h3>
                    <h2 class="text-green-600 font-bold text-xl">Dr. Robert Roy</h2>
                    <p class="text-gray-700 mt-2">
                        MBBS (Dhaka), MPH (Health), MD (Medicine), CCD (BIRDEM)
                        Medical Officer, Upazila Health Complex, Noakhali
                    </p>
                    <p class="text-red-600 mt-2 font-semibold">Time: 4 PM - 8 PM [C-108]</p>
                    <p class="text-green-600 font-semibold mb-6">Digital Fee: 500 TK</p>
                    <a href="#" class="btn-primary rounded-lg btn-black h-10">Serial Now <i
                            class="ph-bold ph-arrow-up-right"></i></a>
                </div>

                <div
                    class="bg-white p-6 rounded-xl doctor-card shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 border border-gray-100 group backdrop-blur-lg flex-1 text-center relative z-[1]">
                    <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-1] left-0 rounded-xl opacity-60"
                        style="background-image: url({{asset('frontend')}}/assets/img/shape-bg/abstract-3.jpg);"></div>
                    <div
                        class="w-30 h-30 rounded-full overflow-hidden absolute -top-12 bg-gradient-to-r from-teal-400 via-purple-400 to-blue-500 p-3 left-1/2 -translate-x-1/2  z-[1]">
                        <img src="{{asset('frontend')}}/assets/img/img-1.jpeg" class="w-full h-full rounded-full object-cover" alt="">
                    </div>

                    <h3 class="text-red-600 font-semibold text-lg mt-18">Cardiology & Heart Diseases</h3>
                    <h2 class="text-green-600 font-bold text-xl">Dr. James Anderson</h2>
                    <p class="text-gray-700 mt-2">
                        MBBS, MD (Cardiology)
                        Consultant, National Heart Foundation, Dhaka
                    </p>
                    <p class="text-red-600 mt-2 font-semibold">Time: 5 PM - 9 PM [C-210]</p>
                    <p class="text-green-600 font-semibold mb-6">Digital Fee: 700 TK</p>
                    <a href="#" class="btn-primary rounded-lg btn-black h-10">Serial Now <i
                            class="ph-bold ph-arrow-up-right"></i></a>
                </div>

                <div
                    class="bg-white p-6 rounded-xl doctor-card shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 border border-gray-100 group backdrop-blur-lg flex-1 text-center relative z-[1]">
                    <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-1] left-0 rounded-xl opacity-60"
                        style="background-image: url({{asset('frontend')}}/assets/img/shape-bg/abstract-3.jpg);"></div>
                    <div
                        class="w-30 h-30 rounded-full overflow-hidden absolute -top-12 bg-gradient-to-r from-teal-400 via-purple-400 to-blue-500 p-3 left-1/2 -translate-x-1/2  z-[1]">
                        <img src="{{asset('frontend')}}/assets/img/img-3.jpeg" class="w-full h-full rounded-full object-cover" alt="">
                    </div>

                    <h3 class="text-red-600 font-semibold text-lg mt-18">Child Specialist & Pediatrician</h3>
                    <h2 class="text-green-600 font-bold text-xl">Dr. Sophia Khan</h2>
                    <p class="text-gray-700 mt-2">
                        MBBS, FCPS (Pediatrics)
                        Associate Professor, Dhaka Shishu Hospital
                    </p>
                    <p class="text-red-600 mt-2 font-semibold">Time: 10 AM - 2 PM [C-305]</p>
                    <p class="text-green-600 font-semibold mb-6">Digital Fee: 600 TK</p>
                    <a href="#" class="btn-primary rounded-lg btn-black h-10">Serial Now <i
                            class="ph-bold ph-arrow-up-right"></i></a>
                </div>

                <div
                    class="bg-white p-6 rounded-xl doctor-card shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 border border-gray-100 group backdrop-blur-lg flex-1 text-center relative z-[1]">
                    <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-1] left-0 rounded-xl opacity-60"
                        style="background-image: url({{asset('frontend')}}/assets/img/shape-bg/abstract-3.jpg);"></div>
                    <div
                        class="w-30 h-30 rounded-full overflow-hidden absolute -top-12 bg-gradient-to-r from-teal-400 via-purple-400 to-blue-500 p-3 left-1/2 -translate-x-1/2  z-[1]">
                        <img src="{{asset('frontend')}}/assets/img/img-3.jpeg" class="w-full h-full rounded-full object-cover" alt="">
                    </div>

                    <h3 class="text-red-600 font-semibold text-lg mt-18">Gynecology & Obstetrics</h3>
                    <h2 class="text-green-600 font-bold text-xl">Dr. Emily Watson</h2>
                    <p class="text-gray-700 mt-2">
                        MBBS, FCPS (Gyne & Obs)
                        Consultant, Mitford Hospital, Dhaka
                    </p>
                    <p class="text-red-600 mt-2 font-semibold">Time: 3 PM - 7 PM [C-120]</p>
                    <p class="text-green-600 font-semibold mb-6">Digital Fee: 550 TK</p>
                    <a href="#" class="btn-primary rounded-lg btn-black h-10">Serial Now <i
                            class="ph-bold ph-arrow-up-right"></i></a>
                </div>

                <div
                    class="bg-white p-6 rounded-xl doctor-card shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 border border-gray-100 group backdrop-blur-lg flex-1 text-center relative z-[1]">
                    <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-1] left-0 rounded-xl opacity-60"
                        style="background-image: url({{asset('frontend')}}/assets/img/shape-bg/abstract-3.jpg);"></div>
                    <div
                        class="w-30 h-30 rounded-full overflow-hidden absolute -top-12 bg-gradient-to-r from-teal-400 via-purple-400 to-blue-500 p-3 left-1/2 -translate-x-1/2  z-[1]">
                        <img src="{{asset('frontend')}}/assets/img/team-1.jpg" class="w-full h-full rounded-full object-cover" alt="">
                    </div>

                    <h3 class="text-red-600 font-semibold text-lg mt-18">Dermatology & Skin Care</h3>
                    <h2 class="text-green-600 font-bold text-xl">Dr. Michael Smith</h2>
                    <p class="text-gray-700 mt-2">
                        MBBS, MD (Dermatology)
                        Consultant, Square Hospital, Dhaka
                    </p>
                    <p class="text-red-600 mt-2 font-semibold">Time: 6 PM - 9 PM [C-402]</p>
                    <p class="text-green-600 font-semibold mb-6">Digital Fee: 650 TK</p>
                    <a href="#" class="btn-primary rounded-lg btn-black h-10">Serial Now <i
                            class="ph-bold ph-arrow-up-right"></i></a>
                </div>

                <div
                    class="bg-white p-6 rounded-xl doctor-card shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 border border-gray-100 group backdrop-blur-lg flex-1 text-center relative z-[1]">
                    <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-1] left-0 rounded-xl opacity-60"
                        style="background-image: url({{asset('frontend')}}/assets/img/shape-bg/abstract-3.jpg);"></div>
                    <div
                        class="w-30 h-30 rounded-full overflow-hidden absolute -top-12 bg-gradient-to-r from-teal-400 via-purple-400 to-blue-500 p-3 left-1/2 -translate-x-1/2  z-[1]">
                        <img src="{{asset('frontend')}}/assets/img/team-2.jpg" class="w-full h-full rounded-full object-cover" alt="">
                    </div>

                    <h3 class="text-red-600 font-semibold text-lg mt-18">Orthopedic & Bone Specialist</h3>
                    <h2 class="text-green-600 font-bold text-xl">Dr. David Lee</h2>
                    <p class="text-gray-700 mt-2">
                        MBBS, MS (Orthopedics)
                        Consultant, Apollo Hospital, Dhaka
                    </p>
                    <p class="text-red-600 mt-2 font-semibold">Time: 11 AM - 2 PM [C-310]</p>
                    <p class="text-green-600 font-semibold mb-6">Digital Fee: 700 TK</p>
                    <a href="#" class="btn-primary rounded-lg btn-black h-10">Serial Now <i
                            class="ph-bold ph-arrow-up-right"></i></a>
                </div>

                <div
                    class="bg-white p-6 rounded-xl doctor-card shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 border border-gray-100 group backdrop-blur-lg flex-1 text-center relative z-[1]">
                    <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-1] left-0 rounded-xl opacity-60"
                        style="background-image: url({{asset('frontend')}}/assets/img/shape-bg/abstract-3.jpg);"></div>
                    <div
                        class="w-30 h-30 rounded-full overflow-hidden absolute -top-12 bg-gradient-to-r from-teal-400 via-purple-400 to-blue-500 p-3 left-1/2 -translate-x-1/2  z-[1]">
                        <img src="{{asset('frontend')}}/assets/img/team-3.jpg" class="w-full h-full rounded-full object-cover" alt="">
                    </div>

                    <h3 class="text-red-600 font-semibold text-lg mt-18">Neurology & Brain Specialist</h3>
                    <h2 class="text-green-600 font-bold text-xl">Dr. Sarah Johnson</h2>
                    <p class="text-gray-700 mt-2">
                        MBBS, MD (Neurology)
                        Assistant Professor, BSMMU, Dhaka
                    </p>
                    <p class="text-red-600 mt-2 font-semibold">Time: 2 PM - 6 PM [C-510]</p>
                    <p class="text-green-600 font-semibold mb-6">Digital Fee: 800 TK</p>
                    <a href="#" class="btn-primary rounded-lg btn-black h-10">Serial Now <i
                            class="ph-bold ph-arrow-up-right"></i></a>
                </div>

                <div
                    class="bg-white p-6 rounded-xl doctor-card shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 border border-gray-100 group backdrop-blur-lg flex-1 text-center relative z-[1]">
                    <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-1] left-0 rounded-xl opacity-60"
                        style="background-image: url({{asset('frontend')}}/assets/img/shape-bg/abstract-3.jpg);"></div>
                    <div
                        class="w-30 h-30 rounded-full overflow-hidden absolute -top-12 bg-gradient-to-r from-teal-400 via-purple-400 to-blue-500 p-3 left-1/2 -translate-x-1/2  z-[1]">
                        <img src="{{asset('frontend')}}/assets/img/team-4.jpg" class="w-full h-full rounded-full object-cover" alt="">
                    </div>

                    <h3 class="text-red-600 font-semibold text-lg mt-18">Eye Specialist & Surgeon</h3>
                    <h2 class="text-green-600 font-bold text-xl">Dr. William Brown</h2>
                    <p class="text-gray-700 mt-2">
                        MBBS, MS (Ophthalmology)
                        Consultant, Ispahani Eye Institute, Dhaka
                    </p>
                    <p class="text-red-600 mt-2 font-semibold">Time: 9 AM - 1 PM [C-215]</p>
                    <p class="text-green-600 font-semibold mb-6">Digital Fee: 500 TK</p>
                    <a href="#" class="btn-primary rounded-lg btn-black h-10">Serial Now <i
                            class="ph-bold ph-arrow-up-right"></i></a>
                </div>

                <div
                    class="bg-white p-6 rounded-xl doctor-card shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 border border-gray-100 group backdrop-blur-lg flex-1 text-center relative z-[1]">
                    <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-1] left-0 rounded-xl opacity-60"
                        style="background-image: url({{asset('frontend')}}/assets/img/shape-bg/abstract-3.jpg);"></div>
                    <div
                        class="w-30 h-30 rounded-full overflow-hidden absolute -top-12 bg-gradient-to-r from-teal-400 via-purple-400 to-blue-500 p-3 left-1/2 -translate-x-1/2  z-[1]">
                        <img src="{{asset('frontend')}}/assets/img/team-4.jpg" class="w-full h-full rounded-full object-cover" alt="">
                    </div>

                    <h3 class="text-red-600 font-semibold text-lg mt-18">Eye Specialist & Surgeon</h3>
                    <h2 class="text-green-600 font-bold text-xl">Dr. William Brown</h2>
                    <p class="text-gray-700 mt-2">
                        MBBS, MS (Ophthalmology)
                        Consultant, Ispahani Eye Institute, Dhaka
                    </p>
                    <p class="text-red-600 mt-2 font-semibold">Time: 9 AM - 1 PM [C-215]</p>
                    <p class="text-green-600 font-semibold mb-6">Digital Fee: 500 TK</p>
                    <a href="#" class="btn-primary rounded-lg btn-black h-10">Serial Now <i
                            class="ph-bold ph-arrow-up-right"></i></a>
                </div>

                <div
                    class="bg-white p-6 rounded-xl doctor-card shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 border border-gray-100 group backdrop-blur-lg flex-1 text-center relative z-[1]">
                    <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-1] left-0 rounded-xl opacity-60"
                        style="background-image: url({{asset('frontend')}}/assets/img/shape-bg/abstract-3.jpg);"></div>
                    <div
                        class="w-30 h-30 rounded-full overflow-hidden absolute -top-12 bg-gradient-to-r from-teal-400 via-purple-400 to-blue-500 p-3 left-1/2 -translate-x-1/2  z-[1]">
                        <img src="{{asset('frontend')}}/assets/img/team-4.jpg" class="w-full h-full rounded-full object-cover" alt="">
                    </div>

                    <h3 class="text-red-600 font-semibold text-lg mt-18">Eye Specialist & Surgeon</h3>
                    <h2 class="text-green-600 font-bold text-xl">Dr. William Brown</h2>
                    <p class="text-gray-700 mt-2">
                        MBBS, MS (Ophthalmology)
                        Consultant, Ispahani Eye Institute, Dhaka
                    </p>
                    <p class="text-red-600 mt-2 font-semibold">Time: 9 AM - 1 PM [C-215]</p>
                    <p class="text-green-600 font-semibold mb-6">Digital Fee: 500 TK</p>
                    <a href="#" class="btn-primary rounded-lg btn-black h-10">Serial Now <i
                            class="ph-bold ph-arrow-up-right"></i></a>
                </div>


            </div>
        </div>
    </section>

    <!-- doctor list Ends-->


    <!-- Cta section Start -->

    <section class="cta-section">
        <div class="pt-16 lg:py-16 bg-blue-500 text-white relative z-[1]">
            <div
                class="container max-w-[1224px] mx-auto px-4 lg:px-0 flex items-center lg:justify-center justify-between lg:gap-6 gap-10 flex-wrap">
                <div class="lg:w-[700px] me-auto">
                    <h2 class="text-2xl md:text-5xl font-semibold lg:leading-13 mb-6">We’re welcoming new patients and
                        can’t
                        wait to meet you!</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto aliquam cum voluptas fuga
                        doloremque
                        eos, voluptates dolor. In, ratione quas distinctio temporibus quidem id obcaecati, molestiae,
                        laboriosam accusantium deleniti illum.</p>
                    <div class="flex flex-wrap gap-6 items-center mt-6">
                        <a href="#"
                            class="text-white-900 font-medium uppercase bg-gray-800 shadow hover:shadow-lg transition transform hover:-translate-y-1 py-4 px-6 rounded-lg inline-flex gap-2 items-center justify-center">Book
                            Appointment <i class="ph-bold ph-arrow-up-right"></i></a>
                        <a href="#"
                            class="text-gray-900 font-medium uppercase bg-white shadow hover:shadow-lg transition transform hover:-translate-y-1 py-4 px-6 rounded-lg inline-flex gap-2 items-center justify-center">Get
                            Free Consulting <i class="ph-bold ph-arrow-up-right"></i></a>
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
                    Testimonial</span>
                <h2 class="text-2xl sm:text-4xl font-bold text-gray-800 mb-4">What Our Present Says?</h2>
            </div>
            <div class="swiper testimonial swiper-margin">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div
                            class="pb-11 testimonial-item pt-15 px-8 rounded-xl shadow-md hover:shadow-lg bg-white relative backdrop-blur-lg ring ring-gray-100">
                            <div
                                class=" absolute right-0 top-0 -translate-1/2 quote-icon w-15 h-15 flex items-center justify-center text-4xl ring-6 rounded-full ring-teal-500 bg-gray-800 text-white">
                                <i class="ph-fill ph-quotes"></i>
                            </div>
                            <div class="flex items-start gap-5 mb-4">
                                <div class="shrink-0 w-20 h-20 rounded-full overflow-hidden">
                                    <img src="{{asset('frontend')}}/assets/img/img-2.jpeg" class="w-full h-full object-cover" alt="">
                                </div>
                                <div>
                                    <h4 class="text-xl leading-5 mb-1 font-semibold text-gray-800">Dr. Robert Roy</h4>
                                    <span class="text-base block text-gray-800">Cardiology</span>
                                    <div class="flex text-lg items-center mb-4 mt-2">
                                        <i class="ph-fill ph-star text-amber-400"></i>
                                        <i class="ph-fill ph-star text-amber-400"></i>
                                        <i class="ph-fill ph-star text-amber-400"></i>
                                        <i class="ph-fill ph-star text-amber-400"></i>
                                        <i class="ph-fill ph-star text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0 text-gray-500 text-base leading-7 font-normal">Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Illo fugit,
                                totam repellat provident quas ipsum!</p>

                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div
                            class="pb-11 testimonial-item pt-15 px-8 rounded-xl shadow-md hover:shadow-lg bg-white relative backdrop-blur-lg ring ring-gray-100">
                            <div
                                class=" absolute right-0 top-0 -translate-1/2 quote-icon w-15 h-15 flex items-center justify-center text-4xl ring-6 rounded-full ring-teal-500 bg-gray-800 text-white">
                                <i class="ph-fill ph-quotes"></i>
                            </div>
                            <div class="flex items-start gap-5 mb-4">
                                <div class="shrink-0 w-20 h-20 rounded-full overflow-hidden">
                                    <img src="{{asset('frontend')}}/assets/img/img-2.jpeg" class="w-full h-full object-cover" alt="">
                                </div>
                                <div>
                                    <h4 class="text-xl leading-5 mb-1 font-semibold text-gray-800">Dr. Robert Roy</h4>
                                    <span class="text-base block text-gray-800">Cardiology</span>
                                    <div class="flex text-lg items-center mb-4 mt-2">
                                        <i class="ph-fill ph-star text-amber-400"></i>
                                        <i class="ph-fill ph-star text-amber-400"></i>
                                        <i class="ph-fill ph-star text-amber-400"></i>
                                        <i class="ph-fill ph-star text-amber-400"></i>
                                        <i class="ph-fill ph-star text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0 text-gray-500 text-base leading-7 font-normal">Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Illo fugit,
                                totam repellat provident quas ipsum!</p>

                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div
                            class="pb-11 testimonial-item pt-15 px-8 rounded-xl shadow-md hover:shadow-lg bg-white relative backdrop-blur-lg ring ring-gray-100">
                            <div
                                class=" absolute right-0 top-0 -translate-1/2 quote-icon w-15 h-15 flex items-center justify-center text-4xl ring-6 rounded-full ring-teal-500 bg-gray-800 text-white">
                                <i class="ph-fill ph-quotes"></i>
                            </div>
                            <div class="flex items-start gap-5 mb-4">
                                <div class="shrink-0 w-20 h-20 rounded-full overflow-hidden">
                                    <img src="{{asset('frontend')}}/assets/img/img-2.jpeg" class="w-full h-full object-cover" alt="">
                                </div>
                                <div>
                                    <h4 class="text-xl leading-5 mb-1 font-semibold text-gray-800">Dr. Robert Roy</h4>
                                    <span class="text-base block text-gray-800">Cardiology</span>
                                    <div class="flex text-lg items-center mb-4 mt-2">
                                        <i class="ph-fill ph-star text-amber-400"></i>
                                        <i class="ph-fill ph-star text-amber-400"></i>
                                        <i class="ph-fill ph-star text-amber-400"></i>
                                        <i class="ph-fill ph-star text-amber-400"></i>
                                        <i class="ph-fill ph-star text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0 text-gray-500 text-base leading-7 font-normal">Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Illo fugit,
                                totam repellat provident quas ipsum!</p>

                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div
                            class="pb-11 testimonial-item pt-15 px-8 rounded-xl shadow-md hover:shadow-lg bg-white relative backdrop-blur-lg ring ring-gray-100">
                            <div
                                class=" absolute right-0 top-0 -translate-1/2 quote-icon w-15 h-15 flex items-center justify-center text-4xl ring-6 rounded-full ring-teal-500 bg-gray-800 text-white">
                                <i class="ph-fill ph-quotes"></i>
                            </div>
                            <div class="flex items-start gap-5 mb-4">
                                <div class="shrink-0 w-20 h-20 rounded-full overflow-hidden">
                                    <img src="{{asset('frontend')}}/assets/img/img-2.jpeg" class="w-full h-full object-cover" alt="">
                                </div>
                                <div>
                                    <h4 class="text-xl leading-5 mb-1 font-semibold text-gray-800">Dr. Robert Roy</h4>
                                    <span class="text-base block text-gray-800">Cardiology</span>
                                    <div class="flex text-lg items-center mb-4 mt-2">
                                        <i class="ph-fill ph-star text-amber-400"></i>
                                        <i class="ph-fill ph-star text-amber-400"></i>
                                        <i class="ph-fill ph-star text-amber-400"></i>
                                        <i class="ph-fill ph-star text-amber-400"></i>
                                        <i class="ph-fill ph-star text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0 text-gray-500 text-base leading-7 font-normal">Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Illo fugit,
                                totam repellat provident quas ipsum!</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- testimonial Ends -->


    <!-- faq section  Start-->

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
                    FAQ</span>
                <h2 class="text-2xl sm:text-4xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h2>
            </div>

            <div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-center">
                <!-- Left Image -->
                <div>
                    <img src="{{asset('frontend')}}/assets/img/img-9.jpg" alt="FAQ Illustration" class="rounded-2xl shadow-lg w-full">
                </div>

                <div class="space-y-4">
                    <!-- Item 1 -->
                    <div class="accordion-item border border-gray-200 rounded-lg overflow-hidden">
                        <button onclick="toggleAccordion(this)"
                            class="w-full cursor-pointer flex justify-between items-center p-4 font-semibold text-gray-800 hover:bg-gray-100 transition">
                            What is your service policy?
                            <i class="ph ph-plus text-xl transition-transform duration-300"></i>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 bg-white p-0">
                            <p class="p-4 text-gray-600">
                                Our service policy ensures timely response and quality support. Lorem ipsum dolor sit
                                amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>

                    <!-- Item 2 -->
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
                    </div>
                </div>


            </div>
        </div>

    </section>

    <!-- faq section  Start-->


    <!-- blog section Start -->

    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class=" mb-12 flex items-center gap-4 justify-between">
                <div>
                    <span class="text-base sm:text-xl font-semibold flex items-center gap-2 leading-4 mb-3">
                        <span class="text-blue-500 leading-4">
                            <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480">
                                <path
                                    d="M480 240A240 240 0 0 1 240 0 240 240 0 0 1 0 240a240 240 0 0 1 240 240 240 240 0 0 1 240-240Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        Blogs</span>
                    <h2 class="text-2xl sm:text-4xl font-bold text-gray-800 mb-4">News & Blogs</h2>
                </div>
                <div><a class="btn-primary rounded-lg h-10" href="{{asset('frontend')}}/blog-details.html">View All <i
                            class="ph-bold ph-arrow-up-right"></i></a></div>
            </div>

            <!-- Blog Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Blog Card 1 -->
                <div
                    class="bg-white rounded-xl shadow border border-gray-100 hover:shadow-lg transition overflow-hidden group">
                    <!-- Parent div with padding -->
                    <div class="p-6 overflow-hidden rounded-xl">
                        <div class="aspect-[16/10] overflow-hidden rounded-xl">
                            <a href="{{asset('frontend')}}/blog-details.html"><img src="{{asset('frontend')}}/assets/img/blog-1.jpg" alt="Blog 1"
                                    class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110"></a>
                        </div>
                    </div>

                    <div class="pb-6 px-6">
                        <div class="flex items-center text-gray-500 text-sm mb-2 space-x-4">
                            <span class="flex items-center gap-1"><i class="ph ph-user text-green-500"></i> By
                                Mediax</span>
                            <span class="flex items-center gap-1"><i class="ph ph-calendar text-green-500"></i> 15
                                March, 2024</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">
                            <a href="{{asset('frontend')}}/blog-details.html" class="text-gray-900 hover:text-blue-500 transition">Exploring
                                Trends in Medical Cosmetic Procedures</a>
                        </h3>
                        <a href="{{asset('frontend')}}/blog-details.html" class="btn-primary rounded-lg h-10">Read More <i
                                class="ph-bold ph-arrow-up-right"></i></a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-xl shadow border border-gray-100 hover:shadow-lg transition overflow-hidden group">
                    <!-- Parent div with padding -->
                    <div class="p-6 overflow-hidden rounded-xl">
                        <div class="aspect-[16/10] overflow-hidden rounded-xl">
                            <a href="{{asset('frontend')}}/blog-details.html"><img src="{{asset('frontend')}}/assets/img/blog-2.jpg" alt="Blog 1"
                                    class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110"></a>
                        </div>
                    </div>

                    <div class="pb-6 px-6">
                        <div class="flex items-center text-gray-500 text-sm mb-2 space-x-4">
                            <span class="flex items-center gap-1"><i class="ph ph-user text-green-500"></i> By
                                Mediax</span>
                            <span class="flex items-center gap-1"><i class="ph ph-calendar text-green-500"></i> 15
                                March, 2024</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">
                            <a href="{{asset('frontend')}}/blog-details.html" class="text-gray-900 hover:text-blue-500 transition">Exploring
                                Trends in Medical Cosmetic Procedures</a>
                        </h3>
                        <a href="{{asset('frontend')}}/blog-details.html" class="btn-primary rounded-lg h-10">Read More <i
                                class="ph-bold ph-arrow-up-right"></i></a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-xl shadow border border-gray-100 hover:shadow-lg transition overflow-hidden group">
                    <!-- Parent div with padding -->
                    <div class="p-6 overflow-hidden rounded-xl">
                        <div class="aspect-[16/10] overflow-hidden rounded-xl">
                            <a href="{{asset('frontend')}}/blog-details.html"><img src="{{asset('frontend')}}/assets/img/blog-3.jpg" alt="Blog 1"
                                    class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110"></a>
                        </div>
                    </div>

                    <div class="pb-6 px-6">
                        <div class="flex items-center text-gray-500 text-sm mb-2 space-x-4">
                            <span class="flex items-center gap-1"><i class="ph ph-user text-green-500"></i> By
                                Mediax</span>
                            <span class="flex items-center gap-1"><i class="ph ph-calendar text-green-500"></i> 15
                                March, 2024</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">
                            <a href="{{asset('frontend')}}/blog-details.html" class="text-gray-900 hover:text-blue-500 transition">Exploring
                                Trends in Medical Cosmetic Procedures</a>
                        </h3>
                        <a href="{{asset('frontend')}}/blog-details.html" class="btn-primary rounded-lg h-10">Read More <i
                                class="ph-bold ph-arrow-up-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- blog section Ends -->


    <!-- blog section Ends -->
