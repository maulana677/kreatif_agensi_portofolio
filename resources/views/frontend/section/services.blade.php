<section id="Services" class="container max-w-[1130px] mx-auto pt-[190px] pb-[100px]">
    <div class="flex flex-col gap-[10px] mb-[50px]">
        {{--  <div class="flex justify-between items-center">  --}}
        <h2 class="font-extrabold text-[50px] leading-[70px] text-center">Actually, I Do Design & Code for Living
        </h2>
        <p class="font-medium text-[20px] text-center mb-[50px]">Lorem ipsum dolor sit amet consectetur
            adipisicing elit.
            Eius, natus. Ducimus, ipsa!</p>

        {{--  </div>  --}}
        <div class="flex flex-col w-full items-center justify-center mb-[50px]">
            <a href="{{ route('home.services') }}"
                class="font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">All
                Services</a>
        </div>
        <div class="grid grid-cols-2 gap-[30px]">
            <div class="p-[50px] pb-0 rounded-[30px] flex flex-col gap-[50px] bg-[#F4F5F8]">
                <div class="flex items-center justify-center shrink-0 w-20 h-20 rounded-full bg-portto-purple">
                    <img src="{{ asset('frontend/assets/images/icons/crown.svg') }}" class="w-10 h-10 object-contain"
                        alt="icon">
                </div>
                <div class="flex flex-col gap-5">
                    <p class="font-extrabold text-[32px] leading-[48px]">High-Quality Mobile App UI/UX Design</p>
                    <p class="text-lg leading-[34px]">Delivering great experience to users so that they are
                        comfortable while using your product.</p>
                </div>
                <div class="w-full h-[350px]">
                    <img src="{{ asset('frontend/assets/images/services1.png') }}" class="w-full object-contain"
                        alt="image">
                </div>
            </div>
            <div class="p-[50px] pb-0 rounded-[30px] flex flex-col gap-[50px] bg-[#F4F5F8]">
                <div class="flex items-center justify-center shrink-0 w-20 h-20 rounded-full bg-portto-green">
                    <img src="{{ asset('frontend/assets/images/icons/code.svg') }}" class="w-10 h-10 object-contain"
                        alt="icon">
                </div>
                <div class="flex flex-col gap-5">
                    <p class="font-extrabold text-[32px] leading-[48px]">AI Business Dashboard Finance Company</p>
                    <p class="text-lg leading-[34px]">Delivering great experience to users so that they are
                        comfortable while using product.</p>
                </div>
                <div class="w-full h-[350px]">
                    <img src="{{ asset('frontend/assets/images/services2.png') }}" class="w-full object-contain"
                        alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
