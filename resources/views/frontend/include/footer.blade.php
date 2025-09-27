  <footer class="bg-[#0d1117] text-gray-400 relative z-[1]">
        <div class="absolute bg-cover bg-center w-100 h-100 -top-1/5 -right-10 z-[-1]"
            style="background-image: url({{asset('frontend')}}/assets/img/shape-bg/footer-shape-2.png);"></div>
        <div class="absolute bg-cover bg-center w-100 h-100 bottom-0 left-0 z-[-1]"
            style="background-image: url({{asset('frontend')}}/assets/img/shape-bg/footer-shape-1.png);"></div>
        <div
            class="container relative z-[1] max-w-[1224px] px-4 mx-auto lg:px-0 pt-20 pb-20 grid sm:grid-cols-2 lg:grid-cols-4 gap-x-4 gap-y-6">

            <div>
                <!-- Logo -->
                <a href="#" class="shrink-0 block mb-6">
                    <img src="{{asset('frontend')}}/assets/img/logo-dark-2.png" alt="Logo" class="max-h-[50px]">
                </a>
                <p class="mb-6 text-base leading-relaxed">
                    Subscribe to our newsletter today to receive latest news administrate cost effective for tactical
                    data.
                </p>

                <ul class="space-y-3 text-base">
                    <li class="flex items-center gap-2">
                        <span class="text-blue-500 flex items-center gap-3"><i class="ph ph-map-pin text-xl"></i></span>
                       {{ settings('address') }}
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-blue-500 flex items-center gap-3"><i
                                class="ph ph-envelope-simple text-xl"></i></span> {{ settings('email') }}
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-blue-500 flex items-center gap-3">
                            <i class="ph ph-phone-call text-xl"></i></span> {{ settings('phone') }}
                    </li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div class="lg:ps-12">
                <h3 class="footer-title pb-4 text-white text-xl sm:text-2xl font-semibold mb-6 relative">Quick Links

                </h3>
                <ul class="space-y-3 text-base">
                    <li><a href="{{ route('about') }}" class="hover:text-blue-500 transition">About Us</a></li>
                    <li><a href="{{ route('terms') }}" class="hover:text-blue-500 transition">Terms of Use</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Our Services</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Help & FAQs</a></li>
                    <li><a href="{{ route('blog') }}" class="hover:text-blue-500 transition">Blog</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Privacy Policy</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-blue-500 transition">Contact Us</a></li>
                </ul>
            </div>

            <!-- Popular Service -->
            <div>
                <h3 class="footer-title pb-4 text-white text-xl sm:text-2xl font-semibold mb-6 relative">Popular Service

                </h3>
                <ul class="space-y-3 text-base">
                    <li><a href="#" class="hover:text-blue-500 transition">Cardiology Care</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Urgent Care</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Orthopedic Care</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Diagnosis Department</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Gastroenterology</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Therapy Department</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Dental Service</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="">
                <h3 class="footer-title pb-4 text-white text-xl sm:text-2xl font-semibold mb-6 relative">Let’s Stay In
                    Touch
                </h3>
                <p class="text-base mb-4">Subscribe for newsletter</p>
                <!-- Input + Button -->
                <div class="flex items-center relative overflow-hidden mb-4">
                    <input type="email" placeholder="Enter Email" class="form-control h-12 rounded-lg" />
                    <button
                        class="bg-blue-500 absolute right-0 text-lg border-blue-500 px-4 py-2 w-16 h-12 rounded-r-lg cursor-pointer hover:bg-gray-900 transition text-white">
                        <!-- Paper plane icon (Phosphor) -->
                        <i class="ph-fill ph-paper-plane-tilt"></i>
                    </button>
                </div>
                <label class="flex items-center gap-2 cursor-pointer mb-4">
                    <label class="flex items-center justify-center gap-2 cursor-pointer relative">
                        <!-- Checkbox -->
                        <input type="checkbox"
                            class="peer w-5 h-5 leding-4 appearance-none rounded border border-gray-400 checked:bg-blue-500 checked:border-blue-500" />
                        <!-- Custom check icon -->
                        <i class="ph ph-check text-white text-xs absolute hidden peer-checked:block"></i>
                    </label>
                    <span class="">I agree with the terms & conditions</span>
                </label>

                <div class="flex gap-3">
                    <a href="#"><img src="{{asset('frontend')}}/assets/img/apple_store.png" class="h-10" alt="App Store"></a>
                    <a href="#"><img src="{{asset('frontend')}}/assets/img/play_store.png" class="h-10" alt="Google Play"></a>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="bg-gray-800 py-4 text-base text-center">
            <div
                class="container max-w-[1224px] px-4 mx-auto lg:px-0 flex flex-col md:flex-row items-center justify-between">
              <p>Copyright © 2025<a target="_blank" href="https://www.bugbuild.com" class="text-inherit hover:text-inherit">{{ settings('copyright') }}</a></p>

                <div class="flex gap-4 mt-4 md:mt-0">
                    <ul class="social flex items-center gap-2 mb-10">
                @foreach ($social_links as $social_link)
                <li>
                    <a href="{{ $social_link->link }}"
                        class="bg-gray-200 w-10 h-10 rounded-full flex items-center justify-center text-lg text-gray-800 hover:bg-blue-500 hover:text-white transition-all"><i
                            class="{{ $social_link->icon }}"></i></a>
                </li>

                @endforeach


            </ul>
                </div>
            </div>
        </div>
    </footer>
