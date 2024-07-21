{{--  <section id="Testimonials" class="bg-[#F4F5F8]">
    <div class="container max-w-[1130px] mx-auto pt-[180px] pb-[100px]">
        <h2 class="font-extrabold text-[50px] leading-[70px] text-center">{{ $testimonialsSectionTitle->title }}</h2>
        <p class="font-medium text-[20px] leading-[40px] text-center">{{ $testimonialsSectionTitle->sub_title }}
        </p>
        <div class="grid grid-cols-2 gap-[30px] mt-[50px]">
            @foreach ($testimonials as $testimonial)
                <div class="card-testi bg-white rounded-[30px] flex flex-col p-5 gap-5">
                    <div class="h-[40px] flex shrink-0">
                        <img src="{{ asset($testimonial->logo) }}" alt="logo">
                    </div>
                    <p class="font-semibold text-[22px] leading-[40px]">{{ $testimonial->testimonial_text }}</p>

                    <div class="flex h-8">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $testimonial->rating)
                                <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                            @endif
                        @endfor
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-[70px] h-[70px] shrink-0">
                            <img src="{{ asset($testimonial->avatar) }}" alt="photo">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <p class="font-bold text-xl leading-[30px]">{{ $testimonial->name }}</p>
                            <p class="text-lg text-[#878C9C]">{{ $testimonial->job_title }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>  --}}

<section id="Testimonials" class="py-16 px-6 bg-[#F4F5F8]">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold leading-tight">{{ $testimonialsSectionTitle->title }}</h2>
            <p class="text-lg md:text-xl font-medium mt-4">{{ $testimonialsSectionTitle->sub_title }}</p>
        </div>

        <div class="flex flex-wrap justify-center gap-8">
            @foreach ($testimonials as $testimonial)
                <div class="bg-white rounded-lg shadow-lg p-6 w-full md:w-1/2 lg:w-1/3 flex flex-col gap-4">
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
