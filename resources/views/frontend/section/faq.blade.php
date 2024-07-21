{{--  <section id="FAQ" class="container max-w-[1130px] mx-auto">
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
</section>  --}}


<section id="FAQ" class="py-16 px-6">
    <div class="container mx-auto max-w-6xl">
        <div class="flex flex-col md:flex-row gap-12 items-start">
            <!-- Left Side Section -->
            <div class="flex flex-col items-start max-w-md mx-auto md:mx-0">
                <div class="flex items-center justify-center bg-portto-purple w-16 h-16 rounded-full mb-6">
                    <img src="{{ asset($faqSectionTitle->logo) }}" class="w-12 h-12 object-contain" alt="icon">
                </div>
                <div class="text-center md:text-left mb-6">
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-2">{{ $faqSectionTitle->title }}</h2>
                    <p class="text-base md:text-lg text-gray-600">{{ $faqSectionTitle->sub_title }}</p>
                </div>
                <a href="{{ route('home.book') }}"
                    class="bg-portto-black text-white font-bold text-base md:text-lg rounded-full py-3 px-6 transition-all duration-300 hover:bg-portto-light-gold hover:text-portto-black hover:ring hover:ring-portto-black">
                    {{ $faqSectionTitle->btn_text }}
                </a>
            </div>

            <!-- Right Side Section -->
            <div class="flex flex-col w-full">
                @foreach ($faqQuestion as $faqQuestions)
                    <div class="bg-white rounded-lg shadow-lg mb-6 p-6">
                        <button
                            class="accordion-button w-full text-left flex items-center justify-between text-lg font-semibold text-gray-800 hover:text-portto-purple focus:outline-none">
                            <span>{{ $faqQuestions->question }}</span>
                            <svg class="w-6 h-6 transform rotate-0 transition-transform duration-300 ease-in-out"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="mt-4 max-h-0 overflow-hidden transition-max-height duration-300 ease-in-out">
                            <p class="text-base leading-relaxed text-gray-700">{{ $faqQuestions->answer }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.accordion-button').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            button.querySelector('svg').classList.toggle('rotate-180');
            content.classList.toggle('max-h-0');
            content.classList.toggle('max-h-screen');
        });
    });
</script>
