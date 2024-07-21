{{--  @extends('frontend.layouts.master')

@section('title', 'About Me')

@section('content')
    <section id="Header" class="flex flex-col gap-[100px] bg-portto-black relative">
        @include('frontend.section.navbar')
        <div class="hero container max-w-[1130px] mx-auto pt-[100px] pb-[180px] flex justify-between items-center relative">
            <div class="flex flex-col gap-[50px] h-fit w-fit text-white z-10 mb-2">
                <h1 class="font-extrabold text-[80px] leading-[90px]">{{ $about->title }}</h1>
                <div class="desc wow fadeInUp font-extrabold text-[20px]" data-wow-delay="0.4s" style="color: white">
                    {!! $about->description !!}
                </div>
                <a href="{{ route('resume.download') }}"
                    class="font-extrabold text-[20px] leading-[39px] rounded-[30px] p-[10px_40px] bg-portto-purple w-fit transition-all duration-300 hover:shadow-[0_10px_20px_0_#4920E5]"
                    <a href="" class="button-primary-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                    <span class="icon"><i class="fal fa-download"></i></span>
                    <span class="text">Download Resume</span>
                    <span class="dir-part"></span>
                </a>

            </div>
            <div class="flex max-w-[471px] max-h-[567px] mt-[100px] z-10 m-5">
                <img src="{{ asset($about->image) }}" class="w-full h-full object-contain" alt="hero image">
            </div>
        </div>
    </section>

    @include('frontend.section.footer')
@endsection  --}}

@extends('frontend.layouts.master')

@section('title', 'About Me')

@section('content')
    @include('frontend.section.navbar')
    <section id="About"
        class="flex flex-col gap-10 lg:gap-20 bg-portto-black text-white relative py-10 lg:py-20 mt-10 lg:mt-20">
        <div class="container mx-auto max-w-screen-xl px-6 py-12 lg:py-24">
            <div class="flex flex-col lg:flex-row items-center lg:gap-12">
                <!-- Text Section -->
                <div class="lg:w-1/2 flex flex-col items-start gap-6 mb-10 lg:mb-0">
                    <h1 class="text-4xl lg:text-5xl font-extrabold text-white">{{ $about->title }}</h1>
                    <p class="text-lg lg:text-xl text-gray-700 leading-relaxed">{!! $about->description !!}</p>
                    <a href="{{ route('resume.download') }}"
                        class="inline-flex items-center px-6 py-3 text-lg font-bold text-white bg-portto-purple rounded-full hover:bg-portto-dark-purple transition-colors duration-300">
                        <span class="mr-2">Download Resume</span>
                        <i class="fal fa-download"></i>
                    </a>
                </div>

                <!-- Image Section -->
                <div class="lg:w-1/2 flex justify-center lg:justify-end">
                    <img src="{{ asset($about->image) }}" class="w-full h-auto max-w-md rounded-lg shadow-lg"
                        alt="About Me">
                </div>
            </div>
        </div>
    </section>

    {{-- Footer Start --}}
    @include('frontend.section.footer')
    {{-- Footer End --}}
@endsection
