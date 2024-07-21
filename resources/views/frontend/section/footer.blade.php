<footer class="bg-portto-black text-white py-8 lg:py-16 border-t-8 border-portto-purple">
    <div
        class="container mx-auto flex flex-col lg:flex-row justify-between items-start lg:items-center space-y-8 lg:space-y-0">
        <!-- Footer Info Section -->
        <div class="flex-1 flex flex-col items-center lg:items-start gap-6">
            <img src="{{ asset($footerInfo->logo) }}" class="w-24 h-auto" alt="logo">
            <p class="text-lg text-center lg:text-left">{{ $footerInfo->description }}</p>
            <div class="flex gap-4">
                @foreach ($socialLinks as $socialLink)
                    <a href="{{ $socialLink->url }}"
                        class="bg-portto-purple w-10 h-10 flex items-center justify-center rounded-full">
                        <img src="{{ asset($socialLink->icon) }}" class="w-5 h-5" alt="icon">
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Footer Links Section -->
        <div class="flex flex-col lg:flex-row gap-12 lg:gap-16 lg:flex-1 lg:justify-between">
            <div class="flex-1">
                <h4 class="text-xl font-bold mb-4">{{ @$footerGridOneTitle->value }}</h4>
                @foreach ($footerGridOne as $gridOne)
                    <a href="{{ $gridOne->url }}"
                        class="block text-base hover:text-portto-light-gold transition-colors duration-300 mb-2">
                        {{ $gridOne->name }}
                    </a>
                @endforeach
            </div>
            <div class="flex-1">
                <h4 class="text-xl font-bold mb-4">{{ @$footerGridTwoTitle->value }}</h4>
                @foreach ($footerGridTwo as $gridTwo)
                    <a href="{{ $gridTwo->url }}"
                        class="block text-base hover:text-portto-light-gold transition-colors duration-300 mb-2">
                        {{ $gridTwo->name }}
                    </a>
                @endforeach
            </div>
            <div class="flex-1">
                <h4 class="text-xl font-bold mb-4">{{ @$footerGridThreeTitle->value }}</h4>
                @foreach ($footerGridThree as $gridThree)
                    <a href="{{ $gridThree->url }}"
                        class="block text-base hover:text-portto-light-gold transition-colors duration-300 mb-2">
                        {{ $gridThree->name }}
                    </a>
                @endforeach
            </div>
            <div class="flex-1">
                <h4 class="text-xl font-bold mb-4">{{ @$footerGridFourTitle->value }}</h4>
                @foreach ($footerGridFour as $gridFour)
                    <a href="{{ $gridFour->url }}"
                        class="flex items-center gap-2 text-base hover:text-portto-light-gold transition-colors duration-300 mb-2">
                        <img src="{{ asset($gridFour->logo) }}" class="w-6 h-6" alt="icon">{{ $gridFour->name }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <p class="text-sm text-light-gray text-center mt-10">{{ $footerInfo->copyright }}</p>
</footer>
