{{--  <nav class="container max-w-[1130px] mx-auto flex justify-between items-center pt-[30px] z-10">
    <a href="{{ route('home') }}" class="w-[161px] flex shrink-0 h-fit w-fit">
        <img src="{{ asset($generalSetting->logo) }}" alt="logo">
    </a>
    <div class="flex gap-[50px] items-center">
        <ul class="flex gap-[50px] items-center text-white">
            <li>
                <a href="{{ route('home') }}"
                    class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Home</a>
            </li>
            <li>
                <a href="{{ route('home.services') }}"
                    class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Services</a>
            </li>
            <li>
                <a href="{{ route('home.testimonials') }}"
                    class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Testimonials</a>
            </li>
            <li>
                <a href="#"
                    class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Pricing</a>
            </li>
            <li>
                <a href="{{ route('home.about') }}"
                    class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">About</a>
            </li>
        </ul>
        <button
            class="bg-portto-light-gold font-bold text-lg p-[14px_30px] rounded-full transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">Hire
            Me</button>
    </div>
</nav>  --}}

<nav class="bg-portto-black text-white">
    <div class="container max-w-5xl mx-auto flex justify-between items-center py-4">
        <a href="{{ route('home') }}" class="w-40 h-auto">
            <img src="{{ asset($generalSetting->logo) }}" alt="logo" class="h-10">
        </a>
        <div class="block lg:hidden">
            <button id="menu-toggle" class="focus:outline-none">
                <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
        <ul id="menu" class="hidden lg:flex gap-8 items-center">
            <li>
                <a href="{{ route('home') }}"
                    class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Home</a>
            </li>
            <li>
                <a href="{{ route('home.services') }}"
                    class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Services</a>
            </li>
            <li>
                <a href="{{ route('home.testimonials') }}"
                    class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Testimonials</a>
            </li>
            <li>
                <a href="#"
                    class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Pricing</a>
            </li>
            <li>
                <a href="{{ route('home.about') }}"
                    class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">About</a>
            </li>
            <li>
                <button
                    class="bg-portto-light-gold font-bold text-lg py-2 px-4 rounded-full transition-all duration-300 hover:shadow-portto-light-gold">Hire
                    Me</button>
            </li>
        </ul>
    </div>
    <div id="mobile-menu" class="lg:hidden hidden">
        <ul class="flex flex-col gap-4 items-center py-4">
            <li>
                <a href="{{ route('home') }}"
                    class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Home</a>
            </li>
            <li>
                <a href="{{ route('home.services') }}"
                    class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Services</a>
            </li>
            <li>
                <a href="{{ route('home.testimonials') }}"
                    class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Testimonials</a>
            </li>
            <li>
                <a href="#"
                    class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Pricing</a>
            </li>
            <li>
                <a href="{{ route('home.about') }}"
                    class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">About</a>
            </li>
            <li>
                <button
                    class="bg-portto-light-gold font-bold text-lg py-2 px-4 rounded-full transition-all duration-300 hover:shadow-portto-light-gold">Hire
                    Me</button>
            </li>
        </ul>
    </div>
</nav>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        var menu = document.getElementById('menu');
        var mobileMenu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
        mobileMenu.classList.toggle('hidden');
    });
</script>
