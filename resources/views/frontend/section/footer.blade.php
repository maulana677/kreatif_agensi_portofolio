<footer class="bg-portto-black text-white pb-[50px] border-t-[10px] border-portto-purple">
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
                <a href=""
                    class="w-10 h-10 flex shrink-0 rounded-full bg-portto-purple items-center justify-center"><img
                        src="{{ asset('frontend/assets/images/icons/call.svg') }}" alt="icon"></a>
                <a href=""
                    class="w-10 h-10 flex shrink-0 rounded-full bg-portto-purple items-center justify-center"><img
                        src="{{ asset('frontend/assets/images/icons/dribbble.svg') }}" alt="icon"></a>
                <a href=""
                    class="w-10 h-10 flex shrink-0 rounded-full bg-portto-purple items-center justify-center"><img
                        src="{{ asset('frontend/assets/images/icons/sms.svg') }}" alt="icon"></a>
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
    <p class="text-sm text-[#A0A0AC] text-center">{{ $footerInfo->copyright }}</p>
</footer>
