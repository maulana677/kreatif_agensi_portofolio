@include('frontend.section.navbar')
<section id="Header"
    class="flex flex-col gap-10 lg:gap-20 bg-portto-black text-white relative py-10 lg:py-20 mt-10 lg:mt-20">

    <div
        class="hero container mx-auto px-4 lg:px-8 flex flex-col lg:flex-row justify-between items-center text-white relative pb-12 pt-20 lg:pt-32">
        <div class="flex flex-col gap-6 text-center lg:text-left lg:w-1/2">
            @foreach ($smallTitles as $smallTitle)
                <p class="font-semibold text-2xl">{{ $smallTitle->title }}</p>
            @endforeach
            <h1 class="font-extrabold text-6xl lg:text-7xl">{{ $hero->title }}</h1>
            <p class="mt-4">{{ $hero->sub_title }}</p>
            @if ($hero->btn_text)
                <a href="{{ $hero->btn_url }}"
                    class="font-bold text-[20px] leading-[39px] rounded-[30px] p-[10px_40px] bg-portto-purple w-fit transition-all duration-300 hover:shadow-[0_10px_20px_0_#4920E5] block mx-auto lg:mx-0 lg:ml-0">
                    {{ $hero->btn_text }} <span class="dir-part"></span>
                </a>
            @endif
        </div>
        <div class="lg:w-1/3 mt-8 lg:mt-0">
            <img src="{{ asset($hero->image) }}" class="w-full object-contain" alt="hero image">
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
        </div>
    </div>

    <div
        class="stats container mx-auto bg-gradient-to-r from-yellow-200 to-yellow-300 flex flex-col md:flex-row justify-around items-center p-8 rounded-lg mt-12">
        <div class="text-center mb-8 md:mb-0">
            <p class="font-extrabold text-4xl">{{ number_format($countTestimonial) }}</p>
            <p class="font-semibold text-lg">Testimonial</p>
        </div>
        <div class="text-center mb-8 md:mb-0">
            <p class="font-extrabold text-4xl">{{ number_format($countProject) }}</p>
            <p class="font-semibold text-lg">Projects</p>
        </div>
        <div class="text-center mb-8 md:mb-0">
            <p class="font-extrabold text-4xl">{{ number_format($countService) }}</p>
            <p class="font-semibold text-lg">Services</p>
        </div>
        <div class="text-center">
            <p class="font-extrabold text-4xl">{{ number_format($countCompany) }}</p>
            <p class="font-semibold text-lg">Companies</p>
        </div>
    </div>
</section>

<!-- Cancel Button (Hidden by default, only visible in mobile menu) -->
<button id="cancel-button" class="fixed top-4 right-4 bg-portto-purple text-white p-2 rounded hidden">Cancel</button>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        var menu = document.getElementById('menu');
        var mobileMenu = document.getElementById('mobile-menu');
        var cancelButton = document.getElementById('cancel-button');
        menu.classList.toggle('hidden');
        mobileMenu.classList.toggle('hidden');
        cancelButton.classList.toggle('hidden');
    });

    document.getElementById('cancel-button').addEventListener('click', function() {
        var menu = document.getElementById('menu');
        var mobileMenu = document.getElementById('mobile-menu');
        var cancelButton = document.getElementById('cancel-button');
        menu.classList.add('hidden');
        mobileMenu.classList.add('hidden');
        cancelButton.classList.add('hidden');
    });
</script>
