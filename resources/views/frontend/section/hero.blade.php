<section id="Header" class="flex flex-col gap-[100px] bg-portto-black relative">
    @include('frontend.section.navbar')
    <div class="hero container max-w-[1130px] mx-auto flex justify-between items-center relative">
        <div class="flex flex-col gap-[50px] h-fit w-fit text-white z-10">
            @foreach ($smallTitles as $smallTitle)
                <p class="font-semibold text-2xl">{{ $smallTitle->title }}</p>
            @endforeach
            <h1 class="font-extrabold text-[80px] leading-[90px]">{{ $hero->title }}</h1>
            <p>{{ $hero->sub_title }}</p>
            @if ($hero->btn_text)
                <a href="{{ $hero->btn_url }}"
                    class="font-bold text-[20px] leading-[39px] rounded-[30px] p-[10px_40px] bg-portto-purple w-fit transition-all duration-300 hover:shadow-[0_10px_20px_0_#4920E5]">
                    {{ $hero->btn_text }} <span class="dir-part"></span>
                </a>
            @endif
        </div>
        <div class="flex max-w-[471px] max-h-[567px] z-10">
            <img src="{{ asset($hero->image) }}" class="w-full h-full object-contain" alt="hero image">
        </div>
        <img src="{{ asset('frontend/assets/images/Ellipse.svg') }}"
            class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2" alt="background icon">
    </div>
    <div class="company-logos w-full overflow-hidden pb-[190px]">
        <div class="group/slider flex flex-nowrap w-max items-center">
            <div
                class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate flex gap-[70px] pl-[70px] items-center flex-nowrap">
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
