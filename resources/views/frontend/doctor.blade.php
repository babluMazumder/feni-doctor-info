@extends('frontend.master')
@section('title', 'doctor')
@section('Maincontent')
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
                     {{ customSection(\Modules\Section\Enums\Type::DOCTOR, 'doctor_title') }}</span>
                <h2 class="text-2xl sm:text-4xl font-bold text-gray-800 mb-4"> {{ customSection(\Modules\Section\Enums\Type::DOCTOR, 'doctor_sub_title') }}</h2>
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
@endsection
