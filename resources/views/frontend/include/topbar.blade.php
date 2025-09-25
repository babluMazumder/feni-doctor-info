  <!-------- scroll top btn--------->

    <a class="scroll-button" href="#"><i class="ph-bold ph-arrow-up"></i></a>

    <div class="bg-white py-5 w-full text-gray-500 hidden lg:block">
        <div class="max-w-[1224px] mx-auto flex justify-between gap-30 px-4 lg:px-0">

            <div class="flex justify-between items-center gap-30 flex-1">
                <!-- Logo -->
                <a href="/" class="shrink-0 flex justify-center lg:justify-start">
                    <img src="{{ logo(settings('light_logo'),'original') }}" alt="Logo" class="max-h-[50px]">
                </a>

                <!-- Search Bar -->
                <form action="#" class="relative w-full order-3 lg:order-none">
                    <input type="search" name="q" placeholder="Search doctors, services…"
                        class="form-control rounded-lg">
                    <button type="submit" aria-label="Search" class="search-btn absolute inset-y-[5px] right-1.5">
                        <i class="ph-light ph-magnifying-glass text-xl"></i>
                    </button>
                </form>
            </div>

            <!-- Contact & Hours -->
            <div class="flex justify-between gap-8 top-right">

                <!-- Contact -->
                <div class="flex items-center gap-3">
                    <i class="ph-light ph-headset text-5xl text-blue-500"></i>
                    <div>
                        <span class="block">Contact Us</span>
                        <a href="tel:+1636543569"
                            class="text-gray-950 font-semibold text-lg hover:text-blue-500 transition">
                            {{ settings('phone') }}
                        </a>
                    </div>
                </div>

                <!-- Hours -->
                <div class="flex items-center gap-3">
                    <i class="ph-light ph-clock text-5xl text-blue-500"></i>
                    <div>
                        <span class="block">{{ settings('opening_days') }}</span>
                        <span class="text-gray-950 font-semibold text-lg">{{ settings('opening_hours') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
