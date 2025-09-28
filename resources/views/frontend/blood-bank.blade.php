@php
    use Carbon\Carbon;
@endphp

@extends('frontend.master')
@section('title', 'doctor')
@section('Maincontent')
    <!-- doctor list Start-->

    <section class="pt-16 pb-16 lg:pb-40 bg-white relative z-[1]">
        <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-1] opacity-5"
            style="background-image: url({{ asset('frontend') }}/assets/img/shape-bg/abstract-2.jpg);"></div>
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
                  Our Blood Banks</span>
                {{-- <h2 class="text-2xl sm:text-4xl font-bold text-gray-800 mb-4">
                    {{ customSection(\Modules\Section\Enums\Type::DOCTOR, 'doctor_sub_title') }}</h2> --}}
            </div>
        </div>

        <div class="px-4 lg:px-[80px] ">

            <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-x-6 gap-y-20 justify-center items-center">


                @foreach ( $bloodBanks as $bloodBank)



                    <div
                        class="bg-white p-6 rounded-xl doctor-card shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 border border-gray-100 group backdrop-blur-lg flex-1 text-center relative z-[1]">

                        <div
                            class="w-30 h-30 rounded-full overflow-hidden absolute -top-12 bg-gradient-to-r from-teal-400 via-purple-400 to-blue-500 p-3 left-1/2 -translate-x-1/2  z-[1]">
                            <img src="{{ asset('frontend/assets/img/icons-blood-bank.png') }}"
                                class="w-full h-full rounded-full object-cover" alt="">
                        </div>

                        <h2 class="text-red-600 font-semibold text-lg mt-18">{{ $bloodBank->name }}</h2>

                        <p class="text-gray-700 mt-2">
                            {{ $bloodBank->address }}<br>
                            {{ $bloodBank->phone }} <br>
                            {{ $bloodBank->email }}
                        </p>
                        <p class="text-green-600 font-semibold mb-6">license no no: {{ $bloodBank->license_no }}</p>
                        <p class="text-green-600 font-semibold mb-6">Available groups:
                                                    @php
                                                        $groups = is_string($bloodBank->available_groups)
                                                            ? json_decode($bloodBank->available_groups, true)
                                                            : $bloodBank->available_groups;
                                                    @endphp
                                                    @if (!empty($groups))
                                                        <ul class="list-unstyled mb-0">
                                                            @foreach ($groups as $group => $units)
                                                                <li>{{ $group }}: {{ $units }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @else
                                                        <span>-</span>
                                                    @endif</p>


                        <a href="tel:{{ $bloodBank->phone }}" class="btn-primary rounded-lg btn-black h-10">Call Now <i
                                class="ph-bold ph-arrow-up-right"></i></a>
                    </div>
                @endforeach

                @if ($bloodBanks)
                    <div class="mt-3">
                        <x-paginate-show :items="$bloodBanks" />
                    </div>
                @endif
            </div>
        </div>



    </section>


    <!-- doctor list Ends-->
@endsection
