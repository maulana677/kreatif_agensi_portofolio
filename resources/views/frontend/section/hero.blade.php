{{--  <section id="Header" class="flex flex-col gap-[100px] bg-portto-black relative">
    @include('frontend.section.navbar')
    <div class="hero container max-w-[1130px] mx-auto flex justify-between items-center relative">
        <div class="flex flex-col gap-[50px] h-fit w-fit text-white z-10">
            @foreach ($smallTitles as $smallTitle)
                <p class="font-semibold text-2xl">{{ $smallTitle->title }}</p>
            @endforeach
            <h1 class="font-extrabold text-[80px] leading-[70px]">{{ $hero->title }}</h1>
            <p>{{ $hero->sub_title }}</p>
            @if ($hero->btn_text)
                <a href="{{ $hero->btn_url }}"
                    class="font-bold text-[20px] leading-[39px] rounded-[30px] p-[10px_40px] bg-portto-purple w-fit transition-all duration-300 hover:shadow-[0_10px_20px_0_#4920E5]">
                    {{ $hero->btn_text }} <span class="dir-part"></span>
                </a>
            @endif
        </div>
        <div class="flex max-w-[471px] z-10">
            <img src="{{ asset($hero->image) }}" class="w-full h-full object-contain leading-[40px]" alt="hero image">
        </div>
        <img src="{{ asset('frontend/assets/images/Ellipse.svg') }}"
            class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2" alt="background icon">
    </div>
    <div class="company-logos w-full overflow-hidden pb-[190px]">
        <div class="group/slider flex flex-nowrap w-max items-center">
            <div
                class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate flex gap-[70px] pl-[70px] items-center flex-nowrap">
                @forelse($runningLogo as $index => $runningLogos)
                    @if ($index < 6)
                        <div class="flex w-fit h-[40px] shrink-0">
                            <img src="{{ asset($runningLogos->icon) }}" class="w-full h-full object-contain"
                                alt="logo">
                        </div>
                    @endif
                @empty
                @endforelse
            </div>
            <div
                class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate  flex gap-[70px] pl-[70px] items-center flex-nowrap ">
                @forelse($runningLogo as $index => $runningLogos)
                    @if ($index < 6)
                        <div class="flex w-fit h-[40px] shrink-0">
                            <img src="{{ asset($runningLogos->icon) }}" class="w-full h-full object-contain"
                                alt="logo">
                        </div>
                    @endif
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <div
        class="stats container max-w-[800px] mx-auto bg-gradient-to-r from-[#FFEDD3] to-[#FFCD83] flex justify-between items-center px-[100px] rounded-[30px] w-full h-[180px] absolute transform -translate-x-1/2 translate-y-1/2 bottom-0 left-1/2">
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">{{ number_format($countTestimonial) }}</p>
            <p class="font-semibold text-lg">Testimonial</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">{{ number_format($countProject) }}</p>
            <p class="font-semibold text-lg">Projects</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">{{ number_format($countService) }}</p>
            <p class="font-semibold text-lg">Services</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">{{ number_format($countCompany) }}</p>
            <p class="font-semibold text-lg">Companies</p>
        </div>
    </div>
</section>  --}}

<section id="Header" class="flex flex-col gap-24 bg-portto-black relative py-12">
    <nav class="container mx-auto flex justify-between items-center text-white">
        <a href="{{ route('home') }}" class="w-40 h-auto">
            <img src="{{ asset($generalSetting->logo) }}" alt="logo" class="h-10">
        </a>
        <div class="hidden lg:flex gap-8 items-center">
            <ul class="flex gap-8 items-center">
                <li><a href="{{ route('home') }}"
                        class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Home</a>
                </li>
                <li><a href="{{ route('home.services') }}"
                        class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Services</a>
                </li>
                <li><a href="{{ route('home.testimonials') }}"
                        class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Testimonials</a>
                </li>
                <li><a href="#"
                        class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Pricing</a>
                </li>
                <li><a href="{{ route('home.about') }}"
                        class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">About</a>
                </li>
            </ul>
            <button
                class="bg-portto-light-gold font-bold text-lg py-2 px-6 rounded-full transition-all duration-300 hover:shadow-portto-light-gold">Hire
                Me</button>
        </div>
        <button id="menu-toggle" class="lg:hidden focus:outline-none">
            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </nav>

    <div class="hero container mx-auto flex flex-col lg:flex-row justify-between items-center text-white relative">
        <div class="flex flex-col gap-6 text-center lg:text-left lg:w-1/2">
            @foreach ($smallTitles as $smallTitle)
                <p class="font-semibold text-2xl">{{ $smallTitle->title }}</p>
            @endforeach
            <h1 class="font-extrabold text-6xl lg:text-7xl">{{ $hero->title }}</h1>
            <p class="mt-4">{{ $hero->sub_title }}</p>
            @if ($hero->btn_text)
                <a href="{{ $hero->btn_url }}"
                    class="font-bold text-[20px] leading-[39px] rounded-[30px] p-[10px_40px] bg-portto-purple w-fit transition-all duration-300 hover:shadow-[0_10px_20px_0_#4920E5]">
                    {{ $hero->btn_text }} <span class="dir-part"></span>
                </a>
            @endif
        </div>
        <div class="lg:w-1/2 mt-8 lg:mt-0">
            <img src="{{ asset($hero->image) }}" class="w-full h-full object-contain" alt="hero image">
        </div>
    </div>

    <div class="company-logos w-full overflow-hidden">
        <div class="group/slider flex flex-nowrap w-max items-center">
            <div
                class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate flex gap-[70px] pl-[70px] items-center flex-nowrap">
                @forelse($runningLogo as $index => $runningLogos)
                    @if ($index < 6)
                        <div class="flex w-fit h-[40px] shrink-0">
                            <img src="{{ asset($runningLogos->icon) }}" class="w-full h-full object-contain"
                                alt="logo">
                        </div>
                    @endif
                @empty
                @endforelse
            </div>
            <div
                class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate  flex gap-[70px] pl-[70px] items-center flex-nowrap ">
                @forelse($runningLogo as $index => $runningLogos)
                    @if ($index < 6)
                        <div class="flex w-fit h-[40px] shrink-0">
                            <img src="{{ asset($runningLogos->icon) }}" class="w-full h-full object-contain"
                                alt="logo">
                        </div>
                    @endif
                @empty
                @endforelse
            </div>
        </div>
    </div>

    <div
        class="stats container mx-auto bg-gradient-to-r from-yellow-200 to-yellow-300 flex justify-around items-center p-8 rounded-lg">
        <div class="text-center">
            <p class="font-extrabold text-4xl">{{ number_format($countTestimonial) }}</p>
            <p class="font-semibold text-lg">Testimonial</p>
        </div>
        <div class="text-center">
            <p class="font-extrabold text-4xl">{{ number_format($countProject) }}</p>
            <p class="font-semibold text-lg">Projects</p>
        </div>
        <div class="text-center">
            <p class="font-extrabold text-4xl">{{ number_format($countService) }}</p>
            <p class="font-semibold text-lg">Services</p>
        </div>
        <div class="text-center">
            <p class="font-extrabold text-4xl">{{ number_format($countCompany) }}</p>
            <p class="font-semibold text-lg">Companies</p>
        </div>
    </div>
</section>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        var menu = document.getElementById('menu');
        var mobileMenu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
        mobileMenu.classList.toggle('hidden');
    });
</script>
