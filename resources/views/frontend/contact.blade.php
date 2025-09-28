@extends('frontend.master')
@section('title', 'Contact')
@section('Maincontent')
 <!-- page breadcrumb start -->
{{-- @dd(data_get(customSection(\Modules\Section\Enums\Type::BREADCRUMB, 'breadcrumb_image'), 'original')) --}}
    <section class=" py-16 sm:py-18 relative z-[1] text-white">
        <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-2]"
            style="background-image: url({{asset('frontend')}}/assets/img/testimonial.jpg);"></div>
        <div class="bg-overly absolute top-0 bottom-0 w-full h-full z-[-1]" style="background-color: rgba(0,0,0,0.5);">
        </div>
        <div class="px-6 relative z-[1]">
            <div class="text-center breadcrumb">
                <h2 class="text-4xl sm:text-6xl font-bold mb-4">Contact Us</h2>
                <ul class="flex gap-2 items-ceneter justify-center leading-6 text-base font-medium">
                    <li class="flex gap-2 items-center text-gray-200"><a href="/">Home</a> <i
                            class="ph-bold ph-caret-right"></i></li>
                    <li class="flex gap-2 items-center"><a href="">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- page breadcrumb Ends -->

    <!-- contact form start -->

    <section class="bg-gray-50 pt-16 pb-16 lg:pb-40">
        <div class="container mx-auto max-w-6xl px-6 pb-16">
            <!-- 3 Cards Grid -->
            <div class="grid md:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <div class="flex items-center gap-4 p-6 bg-white rounded-2xl shadow-md hover:shadow-lg transition">
                    <!-- Left Icon -->
                    <div class="bg-blue-500 text-white text-5xl w-18 h-18 rounded-xl flex items-center justify-center">
                        <i class="ph ph-clock"></i>
                    </div>
                    <!-- Right Content -->
                    <div class="font-normal">
                        <h3 class="text-xl font-bold text-gray-800 leading-5 mb-3">Opening Hours</h3>
                        <p class="text-gray-500 leading-4 mb-1">{{ customSection(\Modules\Section\Enums\Type::CONTACT_US, 'opening_hours') }}</p>
                        <span class="text-green-500 leading-4">{{ customSection(\Modules\Section\Enums\Type::CONTACT_US, 'opening_days') }}</span>
                    </div>
                </div>

                <div class="flex items-center gap-4 p-6 bg-white rounded-2xl shadow-md hover:shadow-lg transition">
                    <!-- Left Icon -->
                    <div class="bg-blue-500 text-white text-5xl w-18 h-18 rounded-xl flex items-center justify-center">
                        <i class="ph ph-phone"></i>
                    </div>
                    <!-- Right Content -->
                    <div class="font-normal">
                        <h3 class="text-xl font-bold text-gray-800 leading-5 mb-3">Call Us</h3>
                        <p class="text-gray-500 leading-4 mb-1">{{ customSection(\Modules\Section\Enums\Type::CONTACT_US, 'phone') }}</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 p-6 bg-white rounded-2xl shadow-md hover:shadow-lg transition">
                    <!-- Left Icon -->
                    <div class="bg-blue-500 text-white text-5xl w-18 h-18 rounded-xl flex items-center justify-center">
                        <i class="ph ph-map-pin"></i>
                    </div>
                    <!-- Right Content -->
                    <div class="font-normal">
                        <h3 class="text-xl font-bold text-gray-800 leading-5 mb-3">Visit Us</h3>
                        <p class="text-gray-500 leading-4 mb-1">{{ customSection(\Modules\Section\Enums\Type::CONTACT_US, 'address') }}</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="container mx-auto max-w-6xl px-6">
            <!-- Section Heading -->

            <!-- Grid Layout -->
            <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-md">
                <!-- Contact Form -->
                <div class="grid lg:grid-cols-2 gap-10">
                    <form action="{{ route('frontend.contactUs.store') }}" method="POST" class="space-y-6" >
                        @csrf
                        <h2 class="text-3xl font-bold text-gray-800 mb-10">Get in Touch</h2>

                        <!-- Name Field -->
                        <div class="relative">
                            <input type="text" placeholder="Your Name" name="name" class="form-control rounded-lg">
                            <i class="ph ph-user absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        </div>

                        <!-- Email Field -->
                        <div class="relative">
                            <input type="email" placeholder="Your Email" name="email" class="form-control rounded-lg">
                            <i
                                class="ph ph-envelope-simple absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        </div>

                        <!-- Phone Field -->
                        <div class="relative">
                            <input type="tel" placeholder="Your Phone" name="phone" class="form-control rounded-lg">
                            <i class="ph ph-phone absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        </div>

                        <!-- Message Field -->
                        <div class="relative">
                            <textarea rows="4" placeholder="Your Message" name="message"
                                class="form-control rounded-lg resize-none"></textarea>
                            <i class="ph ph-chat-circle-text absolute right-4 top-6 text-gray-400"></i>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full btn-primary justify-center rounded-lg">
                            Send Message
                        </button>
                    </form>

                    <!-- Google Map -->
                    <div class="overflow-hidden rounded-xl shadow-md h-[500px]">
                        <iframe
                            src="{{ customSection(\Modules\Section\Enums\Type::CONTACT_US, 'map') }}"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- contact form Ends -->


    <!-- Cta section Start -->

    <section class="cta-section">
        <div class="pt-16 lg:py-16 bg-blue-500 text-white relative z-[1]">
            <div
                class="container max-w-[1224px] mx-auto px-4 lg:px-0 flex items-center lg:justify-center justify-between lg:gap-6 gap-10 flex-wrap">
                <div class="lg:w-[700px] me-auto">
                    <h2 class="text-2xl md:text-5xl font-semibold lg:leading-13 mb-6">{{ customSection(\Modules\Section\Enums\Type::CTA, 'short_title') }}</h2>
                    <p>{{ customSection(\Modules\Section\Enums\Type::CTA, 'short_title') }}</p>
                    <div class="flex flex-wrap gap-6 items-center mt-6">
                        <a href="{{ customSection(\Modules\Section\Enums\Type::CTA, 'button_one_link') }}"
                            class="text-white-900 font-medium uppercase bg-gray-800 shadow hover:shadow-lg transition transform hover:-translate-y-1 py-4 px-6 rounded-lg inline-flex gap-2 items-center justify-center">{{ customSection(\Modules\Section\Enums\Type::CTA, 'button_one') }} <i class="ph-bold ph-arrow-up-right"></i></a>
                        <a href="{{ customSection(\Modules\Section\Enums\Type::CTA, 'button_two_link') }}"
                            class="text-gray-900 font-medium uppercase bg-white shadow hover:shadow-lg transition transform hover:-translate-y-1 py-4 px-6 rounded-lg inline-flex gap-2 items-center justify-center">{{ customSection(\Modules\Section\Enums\Type::CTA, 'button_two') }}<i class="ph-bold ph-arrow-up-right"></i></a>
                    </div>
                </div>

                <div class="lg:absolute lg:right-5 lg:-bottom-0 z-[1] max-w-[900px]">
                    <img src="{{asset('frontend')}}/assets/img/cta-img-2.png" class="w-full" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Cta section Ends -->
@endsection
