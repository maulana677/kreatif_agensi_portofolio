<section id="Workflow" class="container max-w-[1130px] mx-auto pt-[100px] pb-[200px] relative">
    <div class="container max-w-[1130px] mx-auto pt-[10px] pb-[10px]">
        <h2 class="font-extrabold text-[50px] leading-[70px] text-center">{{ $workflowTitle->title }}
        </h2>
        <p class="font-medium text-[20px] leading-[40px] text-center">{{ $workflowTitle->sub_title }}</p>
        <div class="flex justify-between items-center pt-[100px]">
            @foreach ($workflows as $workflow)
                <div class="w-[350px] flex flex-col shrink-0 gap-[30px] items-center">
                    <div class="flex-none">
                        <img src="{{ asset($workflow->icon) }}" alt="icon">
                    </div>
                    <div class="flex flex-col gap-[10px] text-center">
                        <p class="font-extrabold text-[22px] leading-[33px]">{{ $workflow->title }}</p>
                        <p class="text-lg leading-[34px]">{{ $workflow->sub_title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div
        class="stats container max-w-[800px] mx-auto bg-gradient-to-r from-[#FFEDD3] to-[#FFCD83] flex justify-between items-center px-[100px] rounded-[30px] w-full h-[180px] absolute transform -translate-x-1/2 translate-y-1/2 bottom-0 left-1/2">
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">{{ number_format($countTestimonial) }}</p>
            <p class="font-semibold text-lg">Testimonial</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">{{ number_format($countProject) }}</p>
            <p class="font-semibold text-lg">Projects</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">{{ number_format($countService) }}</p>
            <p class="font-semibold text-lg">Services</p>
        </div>
        {{--  <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">9/10</p>
            <p class="font-semibold text-lg">Successful</p>
        </div>  --}}
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">{{ number_format($countCompany) }}</p>
            <p class="font-semibold text-lg">Companies</p>
        </div>
    </div>
</section>
