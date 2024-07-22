<footer class="bg-portto-black text-white border-t-8 border-portto-purple py-16">
    <div class="container mx-auto max-w-screen-xl px-6 lg:px-8">
        <!-- Footer Content -->
        <div class="flex flex-col md:flex-row gap-10">
            <!-- Footer Info Section -->
            <div class="flex-1 flex flex-col gap-6 mb-8 md:mb-0">
                <img src="{{ asset($footerInfo->logo) }}" class="w-10 h-auto" alt="logo">
                <p class="text-lg">{{ $footerInfo->description }}</p>
                <div class="flex gap-4">
                    @foreach ($socialLinks as $socialLink)
                        <a href="{{ $socialLink->url }}"
                            class="bg-portto-purple w-12 h-12 flex items-center justify-center rounded-full">
                            <img src="{{ asset($socialLink->icon) }}" class="w-6 h-6" alt="icon">
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Footer Links Section -->
            <div class="flex flex-col md:flex-row gap-12 flex-1">
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
                            <img src="{{ asset($gridFour->logo) }}" class="w-6 h-6"
                                alt="icon">{{ $gridFour->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <p class="text-sm text-light-gray text-center mt-10">{{ $footerInfo->copyright }}</p>
    </div>
</footer>
