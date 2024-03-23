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

    {{--  <section id="Testimonials" class="bg-[#F4F5F8]">
        <div class="container max-w-[1130px] mx-auto pt-[180px] pb-[100px]">
            <h2 class="font-extrabold text-[50px] leading-[70px] text-center">I Have Delivered Success <br>For All My
                Clients</h2>
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
    </section>  --}}


    {{--  foooter start  --}}
    @include('frontend.section.footer')
    {{--  footer end  --}}
@endsection
