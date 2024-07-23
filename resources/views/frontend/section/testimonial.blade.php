<section id="Testimonials" class="py-16 px-6 bg-[#F4F5F8]">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold leading-tight">{{ $testimonialsSectionTitle->title }}</h2>
            <p class="text-lg md:text-xl font-medium mt-4">{{ $testimonialsSectionTitle->sub_title }}</p>
        </div>

        <!-- Grid for Testimonials -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($testimonials as $testimonial)
                <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col gap-4">
                    <div class="h-[40px] flex shrink-0">
                        <img src="{{ asset($testimonial->logo) }}" alt="logo">
                    </div>
                    <p class="text-lg font-semibold text-gray-800">{{ $testimonial->testimonial_text }}</p>

                    <div class="flex justify-center space-x-1">
                        @for ($i = 1; $i <= 5; $i++)
                            <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" class="w-5 h-5"
                                alt="star">
                        @endfor
                    </div>
                    <div class="flex items-center gap-4 mt-4">
                        <div class="w-16 h-16 flex-shrink-0 rounded-full overflow-hidden">
                            <img src="{{ asset($testimonial->avatar) }}" class="w-full h-full object-cover"
                                alt="photo">
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="font-bold text-lg">{{ $testimonial->name }}</p>
                            <p class="text-sm text-gray-500">{{ $testimonial->job_title }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
