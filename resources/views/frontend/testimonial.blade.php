@extends('frontend.layouts.master')

@section('title', 'Testimonial')

@section('content')
    <section id="Header" class="flex flex-col gap-[100px] bg-portto-black relative">
        @include('frontend.section.navbar')
        <div class="hero container max-w-[1130px] mx-auto pt-[130px] pb-[120px] flex justify-between items-center relative">
            <div class="flex flex-col gap-[50px] h-fit w-fit text-white z-10 mb-16">
                <h1 class="font-extrabold text-[80px] leading-[90px]">My Freelance Testimonials</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae hic repellendus porro?</p>
            </div>
            {{--  <div class="flex max-w-[471px] max-h-[567px] z-10">
                <img src="{{ asset('frontend/assets/images/hero-image.png') }}" class="w-full h-full object-contain"
                    alt="hero image">
            </div>  --}}
        </div>
    </section>

    <section id="Testimonials" class="bg-[#F4F5F8]">
        <div class="container max-w-[1130px] mx-auto pt-[100px] pb-[100px]">
            <h2 class="font-extrabold text-[50px] leading-[70px] text-center">All My Clients</h2>
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
    </section>


    {{--  foooter start  --}}
    @include('frontend.section.footer')
    {{--  footer end  --}}
@endsection
