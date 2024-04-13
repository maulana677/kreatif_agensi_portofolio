@extends('frontend.layouts.master')

@section('title', 'Services')

@section('content')
    <section id="Header" class="flex flex-col gap-[100px] bg-portto-black relative">
        @include('frontend.section.navbar')
        <div class="hero container max-w-[1130px] mx-auto pt-[130px] pb-[180px] flex justify-between items-center relative">
            <div class="flex flex-col gap-[50px] h-fit w-fit text-white z-10 mb-16">
                <h1 class="font-extrabold text-[80px] leading-[90px]">{{ $serviceSetting->title }}</h1>
                <p class="mb-5">{{ $serviceSetting->sub_title }}</p>
            </div>
        </div>
    </section>

    <section id="Services" class="container max-w-[1130px] mx-auto pt-[100px] pb-[100px]">
        <div class="flex flex-col gap-[50px]">
            <div class="flex justify-between items-center">
                <h2 class="font-extrabold text-[50px] leading-[70px] mt-8">All Service</h2>
            </div>
            <div class="grid grid-cols-2 gap-[30px]">
                @foreach ($service as $services)
                    <div class="p-[50px] pb-0 rounded-[30px] flex flex-col gap-[50px] bg-[#F4F5F8]">
                        <div class="flex items-center justify-center shrink-0 w-20 h-20 rounded-full bg-portto-purple">
                            <img src="{{ asset($services->icon) }}" class="w-10 h-10 object-contain" alt="icon">
                        </div>
                        <div class="flex flex-col gap-5">
                            <p class="font-extrabold text-[32px] leading-[48px]">{{ $services->title }}</p>
                            <p class="text-lg leading-[34px]">{{ $services->sub_title }}</p>
                        </div>
                        <div class="w-full h-[350px]">
                            <img src="{{ asset($services->image) }}" class="w-full object-contain" alt="image">
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
