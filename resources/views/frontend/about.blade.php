@extends('frontend.layouts.master')

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

    {{--  foooter start  --}}
    @include('frontend.section.footer')
    {{--  footer end  --}}
@endsection
