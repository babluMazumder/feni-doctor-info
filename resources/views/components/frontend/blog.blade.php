<!-- blog section Start -->

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
                       {{ customSection(\Modules\Section\Enums\Type::BLOGS, 'short_title') }}</span>
                    <h2 class="text-2xl sm:text-4xl font-bold text-gray-800 mb-4">{!! customSection(\Modules\Section\Enums\Type::BLOGS, 'title') !!}</h2>
                </div>
                <div><a class="btn-primary rounded-lg h-10" href="{{ route('blog') }}">View All <i
                            class="ph-bold ph-arrow-up-right"></i></a></div>
            </div>

            <!-- Blog Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Blog Card 1 -->
                @foreach ($blogs->take(3) as $blog)
                {{-- @dd($blog->slug) --}}
                  <div
                    class="bg-white rounded-xl shadow border border-gray-100 hover:shadow-lg transition overflow-hidden group">
                    <!-- Parent div with padding -->
                    <div class="p-6 overflow-hidden rounded-xl">
                        <div class="aspect-[16/10] overflow-hidden rounded-xl">
                            <a href="{{ route('blog.details', $blog->slug) }}"><img src="{{ getImage($blog->upload, 'image_two','default-image-80x80.png') }}" alt="Blog 1"
                                    class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110"></a>
                        </div>
                    </div>

                    <div class="pb-6 px-6">
                        <div class="flex items-center text-gray-500 text-sm mb-2 space-x-4">
                            <span class="flex items-center gap-1"><i class="ph ph-user text-green-500"></i> {{@$blog->user->name}}</span>
                            <span class="flex items-center gap-1"><i class="ph ph-calendar text-green-500"></i> {{ date('M d, Y', strtotime($blog->date)) }}</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">
                            <a href="{{ route('blog.details', $blog->slug) }}" class="text-gray-900 hover:text-blue-500 transition">{{ Str::limit($blog->title, 35) }}</a>
                        </h3>
                        <a href="{{ route('blog.details', $blog->slug) }}" class="btn-primary rounded-lg h-10">Read More <i
                                class="ph-bold ph-arrow-up-right"></i></a>
                    </div>
                </div>

                @endforeach


            </div>
        </div>
    </section>

    <!-- blog section Ends -->
