@extends('frontend.layouts.master')

@section('title', 'Creatifolio')

@section('content')

    <section id="Header" class="flex flex-col gap-[100px] bg-portto-black relative">
        <nav class="container max-w-[1130px] mx-auto flex justify-between items-center pt-[30px] z-10">
            <a href="index.html" class="w-[161px] flex shrink-0 h-fit w-fit">
                <img src="{{ asset('frontend/assets/images/logos/logo.svg') }}" alt="logo">
            </a>
            <div class="flex gap-[50px] items-center">
                <ul class="flex gap-[50px] items-center text-white">
                    <li>
                        <a href="index.html"
                            class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Home</a>
                    </li>
                    <li>
                        <a href=""
                            class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Services</a>
                    </li>
                    <li>
                        <a href=""
                            class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Testimonials</a>
                    </li>
                    <li>
                        <a href=""
                            class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Pricing</a>
                    </li>
                    <li>
                        <a href=""
                            class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">About</a>
                    </li>
                </ul>
                <button
                    class="bg-portto-light-gold font-bold text-lg p-[14px_30px] rounded-full transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">Hire
                    Me</button>
            </div>
        </nav>
        <div class="hero container max-w-[1130px] mx-auto flex justify-between items-center relative">
            <div class="flex flex-col gap-[50px] h-fit w-fit text-white z-10">
                <p class="font-semibold text-2xl">I’m Shayna 👋</p>
                <h1 class="font-extrabold text-[80px] leading-[90px]">Professional Designer & Dev</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae hic repellendus porro?</p>
                <button
                    class="font-bold text-[26px] leading-[39px] rounded-[30px] p-[30px_40px] bg-portto-purple w-fit transition-all duration-300 hover:shadow-[0_10px_20px_0_#4920E5]">Explore
                    Now
                </button>
            </div>
            <div class="flex max-w-[471px] max-h-[567px] z-10">
                <img src="{{ asset('frontend/assets/images/hero-image.png') }}" class="w-full h-full object-contain"
                    alt="hero image">
            </div>
            <img src="{{ asset('frontend/assets/images/Ellipse.svg') }}"
                class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2" alt="background icon">
        </div>
        <div class="company-logos w-full overflow-hidden pb-[190px]">
            <div class="group/slider flex flex-nowrap w-max items-center">
                <div
                    class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate  flex gap-[70px] pl-[70px] items-center flex-nowrap">
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logoipsum1.png') }}"
                            class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logoipsum1.png') }}"
                            class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logoipsum1.png') }}"
                            class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logoipsum1.png') }}"
                            class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logoipsum1.png') }}"
                            class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logoipsum1.png') }}"
                            class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logoipsum1.png') }}"
                            class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logoipsum1.png') }}"
                            class="w-full h-full object-contain" alt="logo">
                    </div>
                </div>
                <div
                    class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate  flex gap-[70px] pl-[70px] items-center flex-nowrap ">
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logoipsum1.png') }}"
                            class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logoipsum2.png') }}"
                            class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logoipsum2.png') }}"
                            class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logoipsum2.png') }}"
                            class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logoipsum2.png') }}"
                            class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logoipsum2.png') }}"
                            class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logoipsum2.png') }}"
                            class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[40px] shrink-0">
                        <img src="{{ asset('frontend/assets/images/logos/logoipsum2.png') }}"
                            class="w-full h-full object-contain" alt="logo">
                    </div>
                </div>
            </div>
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

    {{--  services start  --}}
    @include('frontend.section.services')
    {{--  services end  --}}

    {{--  project start  --}}
    @include('frontend.section.project')
    {{--  project end  --}}

    {{--  workflow start  --}}
    @include('frontend.section.workflow')
    {{--  workflow end  --}}

    {{--  testimonials start  --}}
    @include('frontend.section.testimonial')
    {{--  testimonials end  --}}

    {{--  faq start  --}}
    @include('frontend.section.faq')
    {{--  faq end  --}}

    <footer class="bg-portto-black text-white pb-[50px] border-t-[10px] border-portto-purple">
        <div
            class="container max-w-[1130px] mx-auto flex justify-between pt-[100px] pb-[50px] mb-[50px] relative border-b border-[#585867]">
            <img src="{{ asset('frontend/assets/images/Ellipse.svg') }}"
                class="absolute h-[300px] top-[70px] -left-[20px] z-0" alt="icon">
            <div class="flex shrink-0 h-fit z-10">
                <img src="{{ asset('frontend/assets/images/logos/logo.svg') }}" alt="logo">
            </div>
            <div class="flex gap-[100px] z-10">
                <div class="flex flex-col gap-5">
                    <p class="font-bold text-lg">Explore</p>
                    <a href=""
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Services</a>
                    <a href=""
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Testimonials</a>
                    <a href=""
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Pricing</a>
                    <a href=""
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">About</a>
                </div>
                <div class="flex flex-col gap-5">
                    <p class="font-bold text-lg">Services</p>
                    <a href=""
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">UI/UX
                        Design</a>
                    <a href=""
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Web
                        Development</a>
                    <a href=""
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Data
                        Science</a>
                    <a href=""
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Digital
                        Marketing</a>
                </div>
                <div class="flex flex-col gap-5">
                    <p class="font-bold text-lg">About</p>
                    <a href=""
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">My
                        Profile</a>
                    <a href=""
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">How
                        do I work</a>
                    <a href=""
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Achievements</a>
                    <a href=""
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Team
                        A</a>
                </div>
                <div class="flex flex-col gap-5">
                    <p class="font-bold text-lg">Connect</p>
                    <a href=""
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300 flex items-center gap-[6px]"><img
                            src="{{ asset('frontend/assets/images/icons/call.svg') }}" alt="icon">+1 2208
                        1996</a>
                    <a href=""
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300 flex items-center gap-[6px]"><img
                            src="{{ asset('frontend/assets/images/icons/dribbble.svg') }}"
                            alt="icon">buildwithangga</a>
                    <a href=""
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300 flex items-center gap-[6px]"><img
                            src="{{ asset('frontend/assets/images/icons/sms.svg') }}" alt="icon">team@bwa.com</a>
                </div>
            </div>
        </div>
        <p class="text-sm text-[#A0A0AC] text-center">All Rights Reserved. Copyright BuildWithAngga 2024.</p>
    </footer>

    @push('after-script')
        <script src="{{ asset('frontend/src/main.js') }}"></script>
    @endpush

@endsection
