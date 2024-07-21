<nav class="bg-portto-black text-white py-4 px-6 lg:px-12 fixed w-full top-0 z-50 shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset($generalSetting->logo) }}" alt="logo" class="h-10 lg:h-12">
        </a>

        <!-- Navigation Links -->
        <div class="hidden lg:flex items-center gap-8">
            <a href="{{ route('home') }}"
                class="text-lg font-medium hover:text-portto-light-gold transition duration-300">Home</a>
            <a href="{{ route('home.services') }}"
                class="text-lg font-medium hover:text-portto-light-gold transition duration-300">Services</a>
            <a href="{{ route('home.testimonials') }}"
                class="text-lg font-medium hover:text-portto-light-gold transition duration-300">Testimonials</a>
            <a href="#"
                class="text-lg font-medium hover:text-portto-light-gold transition duration-300">Pricing</a>
            <a href="{{ route('home.about') }}"
                class="text-lg font-medium hover:text-portto-light-gold transition duration-300">About</a>
        </div>

        <!-- CTA Button -->
        <a href="#"
            class="hidden lg:block bg-portto-light-gold text-portto-black font-bold text-lg px-6 py-3 rounded-full transition-all duration-300 hover:shadow-md">
            Hire Me
        </a>

        <!-- Hamburger Menu for Mobile -->
        <button id="mobile-menu-button" class="lg:hidden text-white focus:outline-none">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="lg:hidden fixed inset-0 bg-portto-black bg-opacity-90 flex flex-col items-center space-y-6 pt-16 hidden">
        <a href="{{ route('home') }}"
            class="text-lg font-medium text-white hover:text-portto-light-gold transition duration-300">Home</a>
        <a href="{{ route('home.services') }}"
            class="text-lg font-medium text-white hover:text-portto-light-gold transition duration-300">Services</a>
        <a href="{{ route('home.testimonials') }}"
            class="text-lg font-medium text-white hover:text-portto-light-gold transition duration-300">Testimonials</a>
        <a href="#"
            class="text-lg font-medium text-white hover:text-portto-light-gold transition duration-300">Pricing</a>
        <a href="{{ route('home.about') }}"
            class="text-lg font-medium text-white hover:text-portto-light-gold transition duration-300">About</a>
        <a href="#"
            class="bg-portto-light-gold text-portto-black font-bold text-lg px-6 py-3 rounded-full transition-all duration-300 hover:shadow-md">
            Hire Me
        </a>
    </div>
</nav>

<script>
    // JavaScript to toggle mobile menu
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
