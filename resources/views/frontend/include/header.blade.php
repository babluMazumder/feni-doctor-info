<header
        class="headerSticky bg-white lg:bg-blue-500 relative z-[2] py-3 lg:py-0 border-b border-gray-200 lg:border-0">
        <div class="container max-w-[1224px] mx-auto px-4 lg:px-0">
            <div class="text-white hover:text-green-500 flex justify-between gap-3 items-center">
                <!-- Logo -->
                <a href="{{asset('frontend')}}/index.html" class="shrink-0 flex justify-center lg:justify-start lg:hidden">
                    <img src="{{asset('frontend')}}/assets/img/logo-light-2.png" alt="Logo" class="max-h-[35px] md:max-h-[40px]">
                </a>
                <ul class="menu hidden lg:flex items-center gap-8 text-base font-medium uppercase">
                    <li class="has-submenu">
                        <a href="/" class="py-6 text-white hover:text-green-400 transition duration-300 flex gap-2 items-center">Home</a>
                    </li>
                    <li><a href="{{ route('category') }}" class="py-6 text-white hover:text-green-400 transition duration-300 block">Category</a></li>
                    <li><a href="{{ route('doctor') }}" class="py-6 text-white hover:text-green-400 transition duration-300 block">Doctors</a></li>
                    <li class="has-submenu">
                        <a href="#" class="py-6 text-white hover:text-green-400 transition duration-300 flex gap-2 items-center">Pages <i class="ph-bold ph-caret-down"></i></a>
                        <ul class="submenu shadow-lg capitalize">
                            <li><a href="{{ route('about') }}" class="py-6 text-white hover:text-green-400 transition duration-300 block">About Us</a></li>
                            <li><a href="{{ route('terms') }}">Terms & Condition</a></li>
                            <li><a href="{{asset('frontend')}}/privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('blog') }}" class="py-6 text-white hover:text-green-400 transition duration-300 block">Blog</a></li>
                    <li><a href="{{ route('contact') }}" class="py-6 text-white hover:text-green-400 transition duration-300 block">Contact</a></li>
                </ul>

                <div class="flex gap-6 items-center">
                    <ul class="menu hidden lg:flex items-center gap-8 text-base font-medium uppercase">
                        <li class="has-submenu">
                            <a href="#" class="py-6 text-white hover:text-green-400 transition duration-300 flex gap-2 items-center"><span class="fi fi-gb"></span> English <i
                                    class="ph-bold ph-caret-down"></i></a>
                            <ul class="submenu shadow-lg capitalize">
                                <li><a href="#" class="flex-row-reverse"><span class="fi fi-gb"></span>
                                        English</a></li>
                                <li><a href="#" class="flex-row-reverse"><span class="fi fi-bd"></span>
                                        Bangla</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="hidden lg:block">
                        <a href="#" class="btn-primary rounded-lg btn-white"> Appointment Now <i
                                class="ph-bold ph-arrow-up-right"></i></a>
                    </div>
                    <div class="offcanvas-toggle ">
                        <i class="ph-bold ph-list"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>


     <!-- header offcanvas start -->
    <div
        class="overlay bg-black/80 cursor-pointer fixed inset-0 pointer-events-none transition-all duration-300 w-full h-full transform translate-x-full z-[999]">
    </div>

    <div
        class="offcanvas w-full sm:w-[400px] fixed right-0 top-0 z-[9999] p-4 lg:p-8 bg-white shadow-lg transform translate-x-full transition-transform duration-300">
        <!-- Overlay -->

        <div class="offcanvas-header flex items-center justify-between mb-10">
            <!-- Logo -->
            <a href="/" class="shrink-0">
                <img src="{{asset('frontend')}}/assets/img/logo-light-2.png" alt="Logo" class="max-h-[42px]">
            </a>
            <button
                class="close-btn border-0 bg-blue-500 text-white w-10 h-10 rounded-full flex items-center justify-center text-sm cursor-pointer hover:bg-green-500"
                type="button"> <i class="ph ph-x"></i></button>
        </div>
        <div class="offcanvas-body overflow-y-auto scrollbar-none text-gray-500">
            <p class="mb-8 hidden lg:block text-base font-normal leading-6">Lorem ipsum dolor sit amet consectetur
                adipisicing elit.
                Dolor iure, veniam eius omnis ducimus nam?</p>
            <ul
                class="menu flex lg:hidden flex-col items-start gap-0 text-sm font-medium uppercase text-gray-900 mb-10">
                <!-- Home -->
                <li class="has-dropdown w-full">
                    <a href="{{asset('frontend')}}/index.html"
                        class="py-4 flex justify-between gap-2 items-center border-b border-gray-200">
                        Home
                    </a>
                </li>

                <!-- About Us -->
                <li class="w-full"><a href="{{ route('category') }}"
                        class="py-4 flex justify-between border-b border-gray-200">Category</a>
                </li>

                <!-- Service -->
                <li class="w-full"><a href="{{ route('doctor') }}"
                        class="py-4 flex justify-between border-b border-gray-200">Doctors</a>
                </li>

                <!-- Pages -->
                <li class="has-dropdown w-full">
                    <a href="#" class="py-4 flex justify-between gap-2 items-center border-b border-gray-200">
                        Pages
                        <button
                            class="toggle-btn w-6 h-6 text-sm rounded-full flex items-center justify-center bg-gray-200 cursor-pointer">
                            <i class="ph ph-plus"></i>
                        </button>
                    </a>
                    <ul class="px-4 submenu uppercase overflow-hidden max-h-0 transition-all duration-300">
                        <li><a href="{{ route('about') }}" class="py-4 flex justify-between border-b border-gray-200">About
                                Us</a>
                        </li>
                        <li><a href="{{ route('terms') }}"
                                class="py-4 flex justify-between border-b border-gray-200">Terms & Condition</a>
                        </li>
                        <li><a href="{{ route('privacy') }}"
                                class="py-4 flex justify-between border-b border-gray-200">Privacy Policy</a>
                        </li>
                    </ul>
                </li>

                <li class="w-full"><a href="{{ route('blog') }}"
                        class="py-4 flex justify-between border-b border-gray-200">Blog</a></li>
                <li class="w-full"><a href="{{ route('contact') }}"
                        class="py-4 flex justify-between border-b border-gray-200">Contact</a>
                </li>
            </ul>
            <div class="mb-6">
                <h4 class="text-xl font-semibold leading-6 mb-4 text-black">Contact Us</h4>
                <p class="flex items-center gap-3 text-base leading-6 mb-3"><i
                        class="ph ph-map-pin text-xl text-blue-500"></i> 2478 Street City Ohio 90255</p>
                <p class="flex items-center gap-3 text-base leading-6 mb-3"><i
                        class="ph ph-envelope-simple text-xl text-blue-500"></i> info@mediax.com</p>
                <p class="flex items-center gap-3 text-base leading-6 mb-3"><i
                        class="ph ph-phone text-xl text-blue-500"></i> +(402) 763 282 46</p>
            </div>
            <ul class="social flex items-center gap-2 mb-10">
                <li>
                    <a href="#"
                        class="bg-gray-200 w-10 h-10 rounded-full flex items-center justify-center text-lg text-gray-800 hover:bg-blue-500 hover:text-white transition-all"><i
                            class="icon-facebook"></i></a>
                </li>
                <li><a href="#"
                        class="bg-gray-200 w-10 h-10 rounded-full flex items-center justify-center text-lg text-gray-800 hover:bg-blue-500 hover:text-white transition-all"><i
                            class="icon-twitter"></i></a></li>
                <li><a href="#"
                        class="bg-gray-200 w-10 h-10 rounded-full flex items-center justify-center text-lg text-gray-800 hover:bg-blue-500 hover:text-white transition-all"><i
                            class="icon-linkedin"></i></a></li>
                <li><a href="#"
                        class="bg-gray-200 w-10 h-10 rounded-full flex items-center justify-center text-lg text-gray-800 hover:bg-blue-500 hover:text-white transition-all"><i
                            class="icon-pinterest"></i></a></li>
            </ul>

            <div class="hidden lg:block">
                <!-- Title -->
                <h3 class="text-gray-500 text-base leading-4 mb-4">Subscribe for newsletter</h3>

                <!-- Input + Button -->
                <div class="flex items-center relative overflow-hidden mb-4">
                    <input type="email" placeholder="Enter Email" class="form-control h-12 rounded-lg" />
                    <button
                        class="bg-blue-500 absolute right-0 text-lg border-blue-500 px-4 py-2 w-16 h-12 rounded-r-lg cursor-pointer hover:bg-gray-900 transition text-white ">
                        <!-- Paper plane icon (Phosphor) -->
                        <i class="ph-fill ph-paper-plane-tilt"></i>
                    </button>
                </div>

                <label class="flex items-center gap-2 cursor-pointer mb-4">
                    <label class="flex items-center justify-center gap-2 cursor-pointer relative">
                        <!-- Checkbox -->
                        <input type="checkbox"
                            class="peer w-5 h-5 leding-4 appearance-none rounded border border-gray-400 checked:bg-blue-500 checked:border-blue-500 relative" />
                        <!-- Custom check icon -->
                        <i class="ph ph-check text-white text-xs absolute hidden peer-checked:block"></i>
                    </label>
                    <span class="">I agree with the terms & conditions</span>
                </label>

                <!-- App Store Buttons -->
                <div class="flex gap-3">
                    <a href="#" class="block">
                        <img src="{{asset('frontend')}}/assets/img/apple_store.png" alt="App Store" class="h-10" />
                    </a>
                    <a href="#" class="block">
                        <img src="{{asset('frontend')}}/assets/img/play_store.png" alt="Google Play" class="h-10" />
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- header offcanvas Ends -->
