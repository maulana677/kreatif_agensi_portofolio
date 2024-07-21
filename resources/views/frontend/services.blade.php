@extends('frontend.layouts.master')

@section('title', 'Services')

@section('content')
    {{--  <section id="Header" class="flex flex-col gap-[100px] bg-portto-black relative">
        @include('frontend.section.navbar')
        <div class="hero container max-w-[1130px] mx-auto pt-[130px] pb-[50px] flex justify-between items-center relative">
            <div class="flex flex-col gap-[50px] h-fit w-fit text-white z-10 mb-16">
                <h1 class="font-extrabold text-[80px] leading-[10px]">{{ $serviceSetting->title }}</h1>
                <p>{{ $serviceSetting->sub_title }}</p>
            </div>
        </div>
    </section>

    <section id="Services" class="container max-w-[1130px] mx-auto pt-[100px] pb-[100px]">
        <div class="flex flex-col gap-[50px]">
            <div class="flex justify-between items-center">
                <h2 class="font-extrabold text-[50px] leading-[50px] mt-8">All Service</h2>
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
    </section>  --}}

    @include('frontend.section.navbar')
    <section id="Header"
        class="flex flex-col gap-10 lg:gap-20 bg-portto-black text-white relative py-10 lg:py-20 mt-10 lg:mt-20">
        <div class="container max-w-4xl mx-auto flex flex-col items-center text-center">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold">{{ $serviceSetting->title }}</h1>
            <p class="mt-2 sm:mt-4 text-lg sm:text-xl">{{ $serviceSetting->sub_title }}</p>
        </div>
    </section>

    <section id="Services" class="container max-w-5xl mx-auto pt-20 pb-20">
        <h2 class="text-4xl font-extrabold text-center mb-10">All Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach ($service as $services)
                <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center text-center">
                    <div class="w-20 h-20 bg-portto-purple rounded-full flex items-center justify-center mb-6">
                        <img src="{{ asset($services->icon) }}" class="w-10 h-10" alt="Service Icon">
                    </div>
                    <h3 class="text-2xl font-bold mb-4">{{ $services->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ $services->sub_title }}</p>
                    <div class="w-full h-48">
                        <img src="{{ asset($services->image) }}" class="w-full h-full object-cover rounded-lg"
                            alt="Service Image">
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{--  foooter start  --}}
    @include('frontend.section.footer')
    {{--  footer end  --}}
@endsection
