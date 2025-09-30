@extends('frontend.master')
@section('title', 'about-us')
@section('Maincontent')

    <!-- page breadcrumb start -->

    <section class=" py-16 sm:py-18 relative z-[1] text-white">
        <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-2]"
            style="background-image: url({{asset('frontend')}}/assets/img/testimonial.jpg);"></div>
        <div class="bg-overly absolute top-0 bottom-0 w-full h-full z-[-1]" style="background-color: rgba(0,0,0,0.5);">
        </div>
        <div class="px-6 relative z-[1]">
            <div class="text-center breadcrumb">
                <h2 class="text-4xl sm:text-6xl font-bold mb-4">Days</h2>
                <ul class="flex gap-2 items-ceneter justify-center leading-6 text-base font-medium">
                    <li class="flex gap-2 items-center text-gray-200"><a href="">Home</a> <i
                            class="ph-bold ph-caret-right"></i></li>
                    <li class="flex gap-2 items-center"><a href="">Days</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- page breadcrumb Ends -->



    <section class="days py-16 bg-gray-800">
        <div class="container max-w-[1224px] mx-auto px-4 lg:px-3">
            <h2 class="text-2xl sm:text-4xl font-bold text-white mb-15 text-center">Select Days</h2>
            <div>
                <div>
                    <div class="days-container flex gap-4 justify-center items-center flex-wrap">


                        @foreach ($days as $day)
                        <ul>
                            <li>
                                <a href="{{ route('doctor', ['day' => $day->value, 'category' => request('category')]) }}"
                                    class="uppercase w-full md:w-[400px] text-white bg-white/20 border border-white/30 backdrop-blur-md shadow-md font-semibold py-4 px-6 rounded-xl block text-center transition transform hover:-translate-y-1 hover:bg-white/30 hover:shadow-xl">
                                {{ $day->value }}
                                </a>
                            </li>
                        </ul>
                        @endforeach


                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
