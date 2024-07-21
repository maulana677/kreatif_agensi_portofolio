{{--  <footer class="bg-portto-black text-white pb-[50px] border-t-[10px] border-portto-purple">
    <div
        class="container max-w-[1130px] mx-auto flex justify-between pt-[100px] pb-[50px] mb-[50px] relative border-b border-[#585867]">
        <img src="{{ asset('frontend/assets/images/Ellipse.svg') }}"
            class="absolute h-[300px] top-[70px] -left-[20px] z-0" alt="icon">
        <div class="z-10">
            <img src="{{ asset($footerInfo->logo) }}">
            <div class="flex flex-col gap-5 mt-2">
                <p class="text-lg">{{ $footerInfo->description }}</p>
            </div>
            <div class="flex mt-4 gap-5 sm:mt-3">
                @foreach ($socialLinks as $socialLink)
                    <a href="{{ $socialLink->url }}"
                        class="w-10 h-10 flex shrink-0 rounded-full bg-portto-purple items-center justify-center">
                        <img src="{{ asset($socialLink->icon) }}" alt="icon">
                    </a>
                @endforeach
            </div>
        </div>
        <div class="flex gap-[100px] z-10">
            <div class="flex flex-col gap-3">
                <p class="font-bold text-lg">{{ @$footerGridOneTitle->value }}</p>
                @foreach ($footerGridOne as $gridOne)
                    <a href="{{ $gridOne->url }}"
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">{{ $gridOne->name }}</a>
                @endforeach
            </div>
            <div class="flex flex-col gap-3">
                <p class="font-bold text-lg">{{ @$footerGridTwoTitle->value }}</p>
                @foreach ($footerGridTwo as $gridTwo)
                    <a href="{{ $gridTwo->url }}"
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">{{ $gridTwo->name }}
                    </a>
                @endforeach
            </div>
            <div class="flex flex-col gap-3">
                <p class="font-bold text-lg">{{ @$footerGridThreeTitle->value }}</p>
                @foreach ($footerGridThree as $gridThree)
                    <a href="{{ $gridThree->url }}"
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">{{ $gridThree->name }}
                    </a>
                @endforeach
            </div>
            <div class="flex flex-col gap-3">
                <p class="font-bold text-lg">{{ @$footerGridFourTitle->value }}</p>
                @foreach ($footerGridFour as $gridFour)
                    <a href="{{ $gridFour->url }}"
                        class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300 flex items-center gap-[6px]"><img
                            src="{{ asset($gridFour->logo) }}" alt="icon">{{ $gridFour->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
    <p class="text-sm text-[#A0A0AC] text-center">{{ $footerInfo->copyright }}</p>
</footer>  --}}

<footer class="bg-portto-black text-white border-t-8 border-portto-purple py-16">
    <div class="container mx-auto max-w-screen-xl px-6 lg:px-8">
        <div class="flex flex-col md:flex-row gap-10 items-start">
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
