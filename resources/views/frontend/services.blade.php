@extends('frontend.layouts.master')

@section('title', 'Services')

@section('content')
    <main class="flex-grow">
        {{--  <section id="Header" class="bg-portto-black text-white relative py-20 mt-8">
            @include('frontend.section.navbar')
            <div class="container mx-auto max-w-7xl px-4 lg:px-8 py-16">
                <div class="text-center">
                    <h1 class="text-4xl lg:text-5xl font-extrabold mb-4">{{ $serviceSetting->title }}</h1>
                    <p class="text-lg lg:text-xl">{{ $serviceSetting->sub_title }}</p>
                </div>
            </div>
        </section>  --}}

        <section id="Header" class="flex flex-col gap-[200px] bg-portto-black relative pb-40">
            @include('frontend.section.navbar')
            <div
                class="hero container max-w-[1130px] mx-auto flex flex-col justify-center items-center relative mt-20 lg:mt-40">
                <h1 class="font-extrabold text-[50px] leading-[70px] text-white text-center z-10">
                    {{ $serviceSetting->title }}</h1>
                <p class="text-xl leading-[30px] text-white z-10">{{ $serviceSetting->sub_title }}</p>
            </div>
        </section>

        <!-- Other content sections -->
    </main>

    <section id="Services" class="container max-w-5xl mx-auto pt-20 pb-20 relative min-h-screen">
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
