@extends('frontend.master')
@section('title', 'Contact')
@section('Maincontent')
 <!-- page breadcrumb start -->

    <section class=" py-16 sm:py-18 relative z-[1] text-white">
        <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-2]"
            style="background-image: url({{asset('frontend')}}/assets/img/testimonial.jpg);"></div>
        <div class="bg-overly absolute top-0 bottom-0 w-full h-full z-[-1]" style="background-color: rgba(0,0,0,0.5);">
        </div>
        <div class="px-6 relative z-[1]">
            <div class="text-center breadcrumb">
                <h2 class="text-4xl sm:text-6xl font-bold mb-4">Contact Us</h2>
                <ul class="flex gap-2 items-ceneter justify-center leading-6 text-base font-medium">
                    <li class="flex gap-2 items-center text-gray-200"><a href="./index.html">Home</a> <i
                            class="ph-bold ph-caret-right"></i></li>
                    <li class="flex gap-2 items-center"><a href="./contact.html">Contact Us</a></li>
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
                        <p class="text-gray-500 leading-4 mb-1">Mon - Fri: 9:00 AM - 6:00 PM</p>
                        <span class="text-green-500 leading-4">Saturday - Closed</span>
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
                        <p class="text-gray-500 leading-4 mb-1">+880 1234 567 890</p>
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
                        <p class="text-gray-500 leading-4 mb-1">123 Main Street, Feni</p>
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
                    <form action="#" class="space-y-6">
                        <h2 class="text-3xl font-bold text-gray-800 mb-10">Get in Touch</h2>

                        <!-- Name Field -->
                        <div class="relative">
                            <input type="text" placeholder="Your Name" class="form-control rounded-lg">
                            <i class="ph ph-user absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        </div>

                        <!-- Email Field -->
                        <div class="relative">
                            <input type="email" placeholder="Your Email" class="form-control rounded-lg">
                            <i
                                class="ph ph-envelope-simple absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        </div>

                        <!-- Phone Field -->
                        <div class="relative">
                            <input type="tel" placeholder="Your Phone" class="form-control rounded-lg">
                            <i class="ph ph-phone absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        </div>

                        <!-- Message Field -->
                        <div class="relative">
                            <textarea rows="4" placeholder="Your Message"
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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.51089375452!2d90.39945241543147!3d23.780887584574378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8953dfc5e6f%3A0x1cda817b4f2bb1!2sDhaka!5e0!3m2!1sen!2sbd!4v1615991366509!5m2!1sen!2sbd"
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
@endsection
