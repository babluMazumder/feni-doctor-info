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
                    {{ customSection(\Modules\Section\Enums\Type::DOCTOR, 'doctor_title') }}</span>
                <h2 class="text-2xl sm:text-4xl font-bold text-gray-800 mb-4">
                    {{ customSection(\Modules\Section\Enums\Type::DOCTOR, 'doctor_sub_title') }}</h2>
            </div>
        </div>
        <div class="container max-w-[1224px] mx-auto px-6 relative z-[1] mb-25">

            {{-- @dd(request()->all()) --}}
            <form action="{{ route('doctor') }}" method="GET" class="grid lg:grid-cols-[1fr_1fr_1fr_150px] gap-3">

                <div class="relative w-full">
                    <select id="category" name="category"
                        class="select2 w-full h-14 pl-6 pr-10 border border-gray-200 rounded-lg bg-white text-base font-medium text-gray-700 appearance-none focus:outline-none focus:border-blue-500">
                        <option value="">All categories</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ request('category') == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                        @endforeach

                    </select>

                    <!-- custom arrow (positioned on the right) -->
                    {{-- <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center">
                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.293l3.71-4.06a.75.75 0 111.12 1L10.53 13.06a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                                clip-rule="evenodd" />
                        </svg>
                    </div> --}}
                </div>

                <div class="relative w-full">
                    <select id="doctor" name="doctor"
                        class="w-full h-14 pl-6 pr-10 border bg-none border-gray-200 rounded-lg bg-white text-base font-medium text-gray-700 appearance-none focus:outline-none focus:border-blue-500">
                        <option value="">Doctors</option>
                        @foreach ($doctors as $doctor)
                            <option value="{{ $doctor->id }}" {{ request('doctor') == $doctor->id ? 'selected' : '' }}>
                                {{ $doctor->name }}</option>
                        @endforeach

                    </select>

                    <!-- custom arrow (positioned on the right) -->
                    {{-- <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center">
                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.293l3.71-4.06a.75.75 0 111.12 1L10.53 13.06a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                                clip-rule="evenodd" />
                        </svg>
                    </div> --}}
                </div>


                <div>
                    <button type="submit" class="btn-primary h-14 w-full rounded-lg"><i
                            class="ph-bold ph-magnifying-glass"></i>Search</button>
                </div>
            </form>

        </div>

        <div class="px-4 lg:px-[80px] ">
            <!-- Doctors Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-x-6 gap-y-20 justify-center items-center">
                @if ($doctors->count() > 0)
                    <!-- Doctor Card -->
                    @foreach ($doctors as $doctor)
                        <div
                            class="bg-white p-6 rounded-xl doctor-card shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 border border-gray-100 group backdrop-blur-lg flex-1 text-center relative z-[1]">
                            <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-1] left-0 rounded-xl opacity-60"
                                style="background-image: url({{ asset('frontend') }}/assets/img/shape-bg/abstract-3.jpg);">
                            </div>
                            <div
                                class="w-30 h-30 rounded-full overflow-hidden absolute -top-12 bg-gradient-to-r from-teal-400 via-purple-400 to-blue-500 p-3 left-1/2 -translate-x-1/2  z-[1]">
                                <img src="{{ getImage($doctor->upload, 'original', 'default-image-80x80.png') }}"
                                    class="w-full h-full rounded-full object-cover" alt="">
                            </div>

                            <h3 class="text-red-600 font-semibold text-lg mt-18">{{ $doctor->specialization }}
                            </h3>
                            <h2 class="text-green-600 font-bold text-xl">{{ $doctor->name }}</h2>
                            <p class="text-gray-700 mt-2">
                                {{ $doctor->qualification }},
                                {{ $doctor->designation }},
                                {{ $doctor->hospital_name }}
                            </p>
                            <p class="text-red-600 mt-2 font-semibold">{{ $doctor->visiting_hours }}
                                [{{ $doctor->room_no }}] <br> {{ $doctor->days }}</p>
                            <p class="text-green-600 font-semibold mb-6">Digital Fee: {{ $doctor->visiting_fee }} TK</p>
                            <span  class="btn-primary rounded-lg btn-black h-10"
                                 data-modal-target="small-modal" data-modal-toggle="small-modal">Serial Now
                                <i class="ph-bold ph-arrow-up-right"></i></span>
                        </div>
                    @endforeach




            </div>

            <div class="mt-3">
                <x-paginate-show :items="$doctors" />
            </div>
        @else
            <p class="text-center text-gray-500 col-span-5">No doctors avilable</p>
            @endif
        </div>
    </section>

    <!-- doctor list Ends-->
@endsection

{{-- @push('scripts')
    <script>
        $(document).ready(function() {
            $('#category').change(function() {
                let categoryId = $(this).val();
                let doctorDropdown = $('#doctor');
                doctorDropdown.html('<option>Loading...</option>');

                let url = '/get-doctors/' + (categoryId ? categoryId : 'all'); // handle all categories

                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(data) {
                        let options = '<option value="">All Doctors</option>';
                        if (data.length > 0) {
                            $.each(data, function(key, doctor) {
                                options +=
                                    `<option value="${doctor.id}">${doctor.name}</option>`;
                            });
                        } else {
                            options += '<option value="">No doctors available</option>';
                        }
                        doctorDropdown.html(options);
                    },
                    error: function() {
                        doctorDropdown.html('<option value="">No doctors available</option>');
                    }
                });
            });
        });
    </script>
@endpush --}}


{{-- Serial Modal Start --}}

<div id="small-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">

        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">

            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    সিরিয়াল নিতে আপনার তথ্য দিন
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="small-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <div class="p-4 md:p-5 space-y-4">
                <form action="{{ route('appointments.store') }}" method="POST">
                    @csrf
                    <div>

                        <input type="text" name="patient_name" id="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="রোগীর নাম লিখুন" required />
                    </div>
                    <div>

                        <input type="number" name="phone_number" id="number"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="আপনার ফোন নম্বর লিখুন" required />
                    </div>
                     <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="small-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">সিরিয়াল নিন </button>
                        <button data-modal-hide="small-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"> বাতিল করুন </button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>

{{-- Serial Modal Ends --}}
