@extends('frontend.master')
@section('title', 'Blog Details')
@section('Maincontent')
  <!-- page breadcrumb start -->

    <section class=" py-16 sm:py-18 relative z-[1] text-white">
        <div class="bg-cover bg-center absolute top-0 bottom-0 w-full h-full z-[-2]"
            style="background-image: url({{asset('frontend')}}/assets/img/testimonial.jpg);"></div>
        <div class="bg-overly absolute top-0 bottom-0 w-full h-full z-[-1]" style="background-color: rgba(0,0,0,0.5);">
        </div>
        <div class="px-6 relative z-[1]">
            <div class="text-center breadcrumb">
                <h2 class="text-4xl sm:text-6xl font-bold mb-4">Blogs Details</h2>
                <ul class="flex gap-2 items-ceneter justify-center leading-6 text-base font-medium">
                    <li class="flex gap-2 items-center text-gray-200"><a href="./index.html">Home</a> <i
                            class="ph-bold ph-caret-right"></i></li>
                    <li class="flex gap-2 items-center"><a href="./blog-details.html">Blogs Details</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- page breadcrumb Ends -->


    <!-- blog details start -->
{{-- @dd($blog) --}}
    <section class="blog-details py-16">
        <div class="container max-w-[1224px] px-4 lg:px-0 mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-[1fr_360px] gap-10 lg:gap-20">
                <div class="h-fit">
                    <div class="flex items-center gap-3 mb-3">
                        <a href="#"
                            class="inline-block px-6 py-2 text-sm font-medium bg-gray-100 text-black hover:bg-blue-500 hover:text-white transition rounded-full">Cardiology</a>
                        <a href="#"
                            class="inline-block px-6 py-2 text-sm font-medium bg-gray-100 text-black hover:bg-blue-500 hover:text-white transition rounded-full">Doctors</a>
                        <a href="#"
                            class="inline-block px-6 py-2 text-sm font-medium bg-gray-100 text-black hover:bg-blue-500 hover:text-white transition rounded-full">Heart</a>
                    </div>

                    <h1 class="text-2xl md:text-5xl font-semibold lg:leading-15 mb-4">{{ $blog->title }}</h1>

                    <div class="flex items-center justify-between gap-4 mb-6 md:mb-10">
                        <div class="flex items-center gap-4 flex-wrap">
                            <div class="flex gap-3 items-center">
                                <div class="w-12 h-12 rounded-full overflow-hidden"><img src="{{asset('frontend')}}/assets/img/img-4.jpeg"
                                        class="w-full h-full object-cover" alt=""></div>
                                <span class="text-gray-400">by <span class="text-gray-800">{{@$blog->user->name}}</span></span>
                            </div>
                            <div class="line w-px h-4 bg-gray-300"></div>

                            <div class="flex gap-2 items-center">
                                <div class="text-xl leading-1"><i class="ph ph-calendar-blank"></i></div>
                                <span class="text-gray-800">{{ $blog->date }}</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 flex-wrap">
                            <div class="flex gap-2 items-center">
                                <div class="text-2xl leading-1"><i class="ph ph-chats-circle"></i></div>
                                <span class="text-gray-800">12</span>
                            </div>
                            <div class="line w-px h-4 bg-gray-300"></div>

                            <div class="flex gap-2 items-center">
                                <div class="text-2xl leading-1"><i class="ph ph-eye"></i></div>
                                <span class="text-gray-800">260.2k</span>
                            </div>

                            <div class="line w-px h-4 bg-gray-300"></div>

                            <div class="flex gap-2 items-center">
                                <div class="text-2xl leading-1"><i class="ph ph-clock"></i></div>
                                <span class="text-gray-800">5 min Read</span>
                            </div>
                        </div>
                    </div>

                    <div class="aspect-[16/10] rounded-xl overflow-hidden mb-6 lg:mb-10">
                        <img src="{{ getImage($blog->upload, 'image_two','default-image-80x80.png') }}" class="w-full h-full object-cover" alt="">
                    </div>

                    <p class=" leading-7 font-normal text-lg mb-4 lg:mb-10">{{ $blog->description }}</p>

                    <div class="p-10 border-l-4 border-blue-500 rounded-2xl bg-gray-100 mb-6 lg:mb-10">
                        <h3 class="text-2xl sm:text-3xl font-semibold sm:leading-10 text-gray-900">Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. Dicta, fuga corrupti iure adipisci ad voluptatem.</h3>
                    </div>

                    <div class="flex gap-6 flex-col lg:flex-row mb-6 lg:mb-10">
                        <div class="aspect-[16/10] rounded-xl overflow-hidden shrink-0 flex-1"><img
                                src="{{asset('frontend')}}/assets/img/about-2.jpg" class="w-full h-full object-cover" alt=""></div>
                        <div class="aspect-[16/10] rounded-xl overflow-hidden flex-1"><img src="{{asset('frontend')}}/assets/img/ab-2.jpg"
                                class="w-full h-full object-cover" alt=""></div>
                    </div>

                    <h3 class="text-2xl font-semibold sm:text-3xl text-gray-900 mb-4">Crafting Mobile-Optimized
                        Experiences</h3>

                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur magni illum ullam hic.
                        Perspiciatis quos aperiam fugit! Vitae iure quisquam quae qui asperiores maiores iste nesciunt
                        accusantium voluptatum est velit beatae voluptatibus quasi corrupti alias et eveniet ratione, ut
                        architecto. Ab, quaerat facilis adipisci nemo officiis recusandae. Saepe, debitis consequatur?
                    </p>

                    <div class="flex justify-between gap-3 items-center flex-wrap">
                        <div class="flex gap-3 items-center mt-6 lg:mt-10 flex-wrap">
                            <span>Tag: </span>
                            <a href="#"
                                class="py-2 px-4 capitalize font-normal text-gray-900 text-sm leading-4 border hover:bg-blue-500 hover:text-white transition border-gray-200 rounded-lg block">Cardiology</a>
                            <a href="#"
                                class="py-2 px-4 capitalize font-normal text-gray-900 text-sm leading-4 border hover:bg-blue-500 hover:text-white transition border-gray-200 rounded-lg block">Heart
                                Attack</a>
                            <a href="#"
                                class="py-2 px-4 capitalize font-normal text-gray-900 text-sm leading-4 border hover:bg-blue-500 hover:text-white transition border-gray-200 rounded-lg block">Diabetes</a>
                        </div>

                        <div class="flex gap-3 items-center mt-6 lg:mt-10 flex-wrap">
                            <span>Share: </span>
                            <a href="#"
                                class="w-12 h-12 rounded-full capitalize font-normal text-gray-900 text-lg border hover:bg-blue-500 hover:text-white transition border-gray-200  flex items-center justify-center"><span
                                    class="icon-facebook"></span></a>
                            <a href="#"
                                class="w-12 h-12 rounded-full capitalize font-normal text-gray-900 text-lg border hover:bg-blue-500 hover:text-white transition border-gray-200  flex items-center justify-center"><span
                                    class="icon-twitter"></span></a>
                            <a href="#"
                                class="w-12 h-12 rounded-full capitalize font-normal text-gray-900 text-lg border hover:bg-blue-500 hover:text-white transition border-gray-200  flex items-center justify-center"><span
                                    class="icon-instagram"></span></a>
                            <a href="#"
                                class="w-12 h-12 rounded-full capitalize font-normal text-gray-900 text-lg border hover:bg-blue-500 hover:text-white transition border-gray-200  flex items-center justify-center"><span
                                    class="icon-youtube"></span></a>
                        </div>
                    </div>

                    <div
                        class="flex items-center xl:gap-30 gap-10 justify-between flex-wrap sm:flex-nowrap mt-7 border-y border-gray-200 lg:mt-10 py-5">
                         @if ($previousBlog)
                        <a href="{{ route('blog.details',['slug' => $previousBlog?->slug]) }}">
                            <span class="text-sm font-semibold text-gray-500 uppercase">Previous</span>
                            <strong
                                class="text-xl font-semibold block prev mt-2 duration-300 hover:text-blue-500">{{ $previousBlog?->title }}</strong>
                        </a>
                        @endif
                         @if ($nextBlog)
                        <a href="{{ route('blog.details',['slug' => $nextBlog?->slug]) }}" class="text-right">
                            <span class="text-sm font-semibold text-gray-500 uppercase">Next</span>
                            <strong
                                class="text-xl font-semibold block prev mt-2 duration-300 hover:text-blue-500">{{ $nextBlog?->title }}</strong>
                        </a>
                        @endif
                    </div>
                    <h4 class="capitalize text-lg font-semibold lg:mt-10 mt-6">Leave A comment</h4>
                    <form action="#" class="form grid sm:grid-cols-2 gap-4 gap-y-5 mt-6">
                        <div>
                            <label for="name">Name</label>
                            <input type="text" class="form-control mt-2 rounded-lg" id="name" placeholder="Your name">
                        </div>
                        <div>
                            <label for="Email">Email</label>
                            <input type="text" class="form-control mt-2 rounded-lg" id="Email" placeholder="Your Email">
                        </div>
                        <div class="col-span-full">
                            <label for="Review">Review</label>
                            <textarea class="form-control mt-2 rounded-lg" id="Review" rows="3"
                                placeholder="Write Comment" required></textarea>
                        </div>

                        <label class="col-span-full flex items-center gap-2 cursor-pointer mb-4">
                            <label class="flex items-center justify-center gap-2 cursor-pointer relative">
                                <!-- Checkbox -->
                                <input type="checkbox"
                                    class="peer w-5 h-5 leding-4 appearance-none rounded border border-gray-400 checked:bg-blue-500 checked:border-blue-500" />
                                <!-- Custom check icon -->
                                <i class="ph ph-check text-white text-xs absolute hidden peer-checked:block"></i>
                            </label>
                            <span class="">Save my name, email, and website in this browser for the
                                next time I comment.</span>
                        </label>
                        <div class="col-span-full">
                            <button type="button" class="btn-primary rounded-sm">Post Comment</button>
                        </div>
                    </form>

                </div>

                <div class="h-fit lg:sticky lg:top-24 box-border">
                    <div class="mb-4">
                        <h4 class="text-xl font-semibold mb-4">Recent Posts</h4>
                        <div class="aspect-[16/10] rounded-lg overflow-hidden"><img src="{{asset('frontend')}}/assets/img/blog-1.jpg"
                                class="w-full h-full object-cover" alt=""></div>
                    </div>
                    <div class="flex gap-3 items-center flex-wrap mb-3">
                        <div class="flex gap-2 items-center">
                            <div class="text-xl leading-1"><i class="ph ph-calendar-blank"></i></div>
                            <span class="text-gray-800">31 August, 2025</span>
                        </div>
                        <div class="line w-px h-4 bg-gray-300"></div>
                        <div class="flex gap-2 items-center">
                            <div class="text-xl leading-1"><i class="ph ph-tag-chevron"></i></div>
                            <span class="text-gray-800">Freelancer</span>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold leading-6 mb-0"><a href="#"
                            class="text-gray-900 hover:text-blue-500 transition duration-300">Exploring Trends in
                            Medical Cosmetic Procedures</a></h4>

                              @foreach ($recentBlogs as $recentBlog)
                            <div class="flex gap-4 items-center border-t border-gray-200 pt-4 mt-4">
                                <div class="w-25 h-fit rounded-lg overflow-hidden shrink-0"><a href=""><img
                                            class="w-full h-full object-cover" src="{{ getImage($recentBlog->upload, 'image_one','default-image-80x80.png') }}" alt=""></a></div>
                                <div>
                                    <a href="{{ route('blog.details',['slug' => $recentBlog->slug]) }}"
                                        class="text-base font-semibold text-gray-900 hover:text-blue-500 transition duration-300">{{ $recentBlog->title }}</a>
                                    <div class="flex gap-2 items-center text-sm mt-2">
                                        <span class="text-gray-800">{{ $recentBlog->date }}</span>
                                        <div class="line w-px h-3 bg-gray-300"></div>
                                        <span class="text-gray-800"> by{{ $recentBlog->user?->name  }}</span>
                                    </div>
                                </div>
                              </div>
                                @endforeach



                    {{-- <div class="banner mt-10 rounded-lg overflow-hidden">
                        <img src="{{asset('frontend')}}/assets/img/blog-details.jpg" alt="">
                    </div> --}}

                </div>
            </div>
        </div>
        </div>

    </section>

    <!-- blog details Ends -->


    <!-- related blogs starts -->

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
                <div><a class="btn-primary rounded-lg h-10" href="./blog-details.html">View All <i
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
                            <a href="./blog-details.html"><img src="{{asset('frontend')}}/assets/img/blog-1.jpg" alt="Blog 1"
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
                            <a href="./blog-details.html" class="text-gray-900 hover:text-blue-500 transition">Exploring
                                Trends in Medical Cosmetic Procedures</a>
                        </h3>
                        <a href="./blog-details.html" class="btn-primary rounded-lg h-10">Read More <i
                                class="ph-bold ph-arrow-up-right"></i></a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-xl shadow border border-gray-100 hover:shadow-lg transition overflow-hidden group">
                    <!-- Parent div with padding -->
                    <div class="p-6 overflow-hidden rounded-xl">
                        <div class="aspect-[16/10] overflow-hidden rounded-xl">
                            <a href="./blog-details.html"><img src="{{asset('frontend')}}/assets/img/blog-2.jpg" alt="Blog 1"
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
                            <a href="./blog-details.html" class="text-gray-900 hover:text-blue-500 transition">Exploring
                                Trends in Medical Cosmetic Procedures</a>
                        </h3>
                        <a href="./blog-details.html" class="btn-primary rounded-lg h-10">Read More <i
                                class="ph-bold ph-arrow-up-right"></i></a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-xl shadow border border-gray-100 hover:shadow-lg transition overflow-hidden group">
                    <!-- Parent div with padding -->
                    <div class="p-6 overflow-hidden rounded-xl">
                        <div class="aspect-[16/10] overflow-hidden rounded-xl">
                            <a href="./blog-details.html"><img src="{{asset('frontend')}}/assets/img/blog-3.jpg" alt="Blog 1"
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
                            <a href="./blog-details.html" class="text-gray-900 hover:text-blue-500 transition">Exploring
                                Trends in Medical Cosmetic Procedures</a>
                        </h3>
                        <a href="./blog-details.html" class="btn-primary rounded-lg h-10">Read More <i
                                class="ph-bold ph-arrow-up-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- related blogs Ends -->
@endsection
