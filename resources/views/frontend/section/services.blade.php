{{--  <section id="Services" class="container max-w-[1130px] mx-auto pt-[190px] pb-[100px]">
    <div class="flex flex-col gap-[10px] mb-[50px]">
        <h2 class="font-extrabold text-[50px] leading-[70px] text-center">{{ $serviceSetting->title }}
        </h2>
        <p class="font-medium text-[20px] text-center mb-[50px]">{{ $serviceSetting->sub_title }}</p>

        <div class="flex flex-col w-full items-center justify-center mb-[50px]">
            <a href="{{ route('home.services') }}"
                class="font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">All
                Services</a>
        </div>
        <div class="grid grid-cols-2 gap-[30px]">
            @foreach ($service as $services)
                <div class="p-[50px] pb-0 rounded-[30px] flex flex-col gap-[50px] bg-[#F4F5F8]">
                    <div class="flex items-center justify-center shrink-0 w-20 h-20 rounded-full bg-portto-purple">
                        <img src="{{ asset($services->icon) }}" class="w-10 h-10 object-contain" alt="icon">
                    </div>
                    <div class="flex flex-col gap-5">
                        <p class="font-extrabold text-[32px] leading-[48px]">{{ $services->title }}</p>
                        <p class="text-lg leading-[34px]">{{ $services->sub_title }}</p>
                    </div>
                    <div class="w-full h-[350px]">
                        <img src="{{ asset($services->image) }}" class="w-full object-contain" alt="image">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>  --}}

<section id="Services" class="container mx-auto pt-16 pb-10 px-6">
    <div class="text-center mb-12">
        <h2 class="font-extrabold text-4xl md:text-5xl leading-tight">{{ $serviceSetting->title }}</h2>
        <p class="font-medium text-lg md:text-xl mt-4">{{ $serviceSetting->sub_title }}</p>
        <a href="{{ route('home.services') }}"
            class="inline-block mt-6 bg-portto-light-gold text-black font-bold text-lg py-2 px-6 rounded-full transition-all duration-300 hover:shadow-portto-light-gold">
            All Services
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @foreach ($service as $services)
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center">
                <div class="flex items-center justify-center w-20 h-20 mb-6 rounded-full bg-portto-purple">
                    <img src="{{ asset($services->icon) }}" class="w-10 h-10 object-contain" alt="icon">
                </div>
                <h3 class="font-extrabold text-2xl mb-4">{{ $services->title }}</h3>
                <p class="text-lg text-center mb-4">{{ $services->sub_title }}</p>
                <div class="w-full h-30">
                    <img src="{{ asset($services->image) }}" class="w-full h-full object-cover rounded-lg"
                        alt="image">
                </div>
            </div>
        @endforeach
    </div>
</section>
