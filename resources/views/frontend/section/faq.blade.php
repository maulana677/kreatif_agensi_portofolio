<section id="FAQ" class="container max-w-[1130px] mx-auto">
    <div class="flex gap-[70px] items-center pt-[100px] pb-[150px]">
        <div class="flex flex-col gap-[30px]">
            <div class="w-20 h-20 flex shrink-0 rounded-full bg-portto-purple items-center justify-center">
                <img src="{{ asset($faqSectionTitle->logo) }}" alt="icon">
            </div>
            <div class="flex flex-col gap-[10px]">
                <h2 class="font-extrabold text-[50px] leading-[70px]">{{ $faqSectionTitle->title }}</h2>
                <p class="text-lg text-[#878C9C]">{{ $faqSectionTitle->sub_title }}</p>
            </div>
            <a href="{{ route('home.book') }}"
                class="bg-portto-black font-bold text-lg text-white rounded-full p-[14px_30px] w-fit transition-all duration-300 hover:bg-white hover:text-portto-black hover:ring hover:ring-portto-black">{{ $faqSectionTitle->btn_text }}</a>
        </div>
        <div class="flex flex-col gap-[30px] w-[603px] shrink-0">
            @foreach ($faqQuestion as $faqQuestions)
                <div class="flex flex-col p-5 rounded-2xl bg-[#F4F5F8] w-full">
                    <button class="accordion-button flex justify-between gap-1 items-center"
                        data-accordion="accordion-faq-1">
                        <span class="font-bold text-2xl">{{ $faqQuestions->question }}</span>
                    </button>
                    <div>
                        <p class="text-[20px] leading-[36px] pt-5">{{ $faqQuestions->answer }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
