@extends('frontend.layouts.master')

@section('title', 'Testimonial')

@section('content')
    <section id="Header" class="flex flex-col gap-[100px] bg-portto-black relative">
        @include('frontend.section.navbar')
        <div class="hero container max-w-[1130px] mx-auto pt-[130px] pb-[180px] flex justify-between items-center relative">
            <div class="flex flex-col gap-[50px] h-fit w-fit text-white z-10 mb-16">
                <h1 class="font-extrabold text-[80px] leading-[90px]">My Freelance Testimonials</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae hic repellendus porro?</p>
            </div>
            {{--  <div class="flex max-w-[471px] max-h-[567px] z-10">
                <img src="{{ asset('frontend/assets/images/hero-image.png') }}" class="w-full h-full object-contain"
                    alt="hero image">
            </div>  --}}
        </div>
        <div
            class="stats container max-w-[1130px] mx-auto bg-gradient-to-r from-[#FFEDD3] to-[#FFCD83] flex justify-between items-center px-[100px] rounded-[30px] w-full h-[180px] absolute transform -translate-x-1/2 translate-y-1/2 bottom-0 left-1/2">
            <div class="text-center w-fit h-fit">
                <p class="font-extrabold text-[40px] leading-[60px]">$230M</p>
                <p class="font-semibold text-lg">Valuation</p>
            </div>
            <div class="text-center w-fit h-fit">
                <p class="font-extrabold text-[40px] leading-[60px]">31,934</p>
                <p class="font-semibold text-lg">Projects</p>
            </div>
            <div class="text-center w-fit h-fit">
                <p class="font-extrabold text-[40px] leading-[60px]">245</p>
                <p class="font-semibold text-lg">Startups IPO</p>
            </div>
            <div class="text-center w-fit h-fit">
                <p class="font-extrabold text-[40px] leading-[60px]">9/10</p>
                <p class="font-semibold text-lg">Successful</p>
            </div>
            <div class="text-center w-fit h-fit">
                <p class="font-extrabold text-[40px] leading-[60px]">562</p>
                <p class="font-semibold text-lg">Companies</p>
            </div>
        </div>
    </section>

    <section id="Testimonials" class="bg-[#F4F5F8]">
        <div class="container max-w-[1130px] mx-auto pt-[180px] pb-[100px]">
            {{--  <h2 class="font-extrabold text-[50px] leading-[70px] text-center">I Have Delivered Success <br>For All My
                Clients</h2>  --}}
            <div class="grid grid-cols-2 gap-[30px] mt-[50px]">
                <div class="card-testi bg-white rounded-[30px] flex flex-col p-5 gap-5">
                    <div class="h-[40px] flex shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logo-testi.svg') }}" alt="logo">
                    </div>
                    <p class="font-semibold text-[22px] leading-[40px]">“Her working method were truly different from
                        other freelancers, she has this kind of mindset that can create user-center product and user
                        loved it”</p>
                    <div class="flex h-8">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-[70px] h-[70px] shrink-0">
                            <img src="{{ asset('frontend/assets/images/icons/like-notif.svg') }}" alt="photo">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <p class="font-bold text-xl leading-[30px]">Jessi Lyio</p>
                            <p class="text-lg text-[#878C9C]">CPO Agolia Modd</p>
                        </div>
                    </div>
                </div>
                <div class="card-testi bg-white rounded-[30px] flex flex-col p-5 gap-5">
                    <div class="h-[40px] flex shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logo-testi2.svg') }}" alt="logo">
                    </div>
                    <p class="font-semibold text-[22px] leading-[40px]">“She helped us to build our first prototype to
                        win our investor and early users heart that generate huge attraction. Will hire her back again
                        anytime soon”</p>
                    <div class="flex h-8">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-[70px] h-[70px] shrink-0">
                            <img src="{{ asset('frontend/assets/images/icons/like-notif.svg') }}" alt="photo">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <p class="font-bold text-xl leading-[30px]">Mariam Sya</p>
                            <p class="text-lg text-[#878C9C]">Founder TinderJobs</p>
                        </div>
                    </div>
                </div>
                <div class="card-testi bg-white rounded-[30px] flex flex-col p-5 gap-5">
                    <div class="h-[40px] flex shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logo-testi3.svg') }}" alt="logo">
                    </div>
                    <p class="font-semibold text-[22px] leading-[40px]">“She helped us to build our first prototype to
                        win our investor and early users heart that generate huge attraction. Will hire her back again
                        anytime soon”</p>
                    <div class="flex h-8">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-[70px] h-[70px] shrink-0">
                            <img src="{{ asset('frontend/assets/images/photo/photo3.png') }}" alt="photo">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <p class="font-bold text-xl leading-[30px]">John Ceyna</p>
                            <p class="text-lg text-[#878C9C]">Investor at Wokiya</p>
                        </div>
                    </div>
                </div>
                <div class="card-testi bg-white rounded-[30px] flex flex-col p-5 gap-5">
                    <div class="h-[40px] flex shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logo-testi4.svg') }}" alt="logo">
                    </div>
                    <p class="font-semibold text-[22px] leading-[40px]">“Her working method were truly different from
                        other freelancers, she has this kind of mindset that can create user-center product and user
                        loved it”</p>
                    <div class="flex h-8">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-[70px] h-[70px] shrink-0">
                            <img src="{{ asset('frontend/assets/images/photo/photo3.png') }}" alt="photo">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <p class="font-bold text-xl leading-[30px]">Yein Balli</p>
                            <p class="text-lg text-[#878C9C]">CMO Waniwani</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--  foooter start  --}}
    @include('frontend.section.footer')
    {{--  footer end  --}}
@endsection
