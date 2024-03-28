<section id="Projects"
    class=" w-full flex flex-col py-[100px] bg-[url('{{ asset('frontend/assets/images/background/background1.png') }}')] bg-cover bg-center bg-no-repeat">
    <div class="flex flex-col gap-[10px] mb-[50px]">
        <h2 class="font-extrabold text-[50px] leading-[70px] text-center text-white">{{ $projectTitle->title }}</h2>
        <p class="text-lg text-center text-white">{{ $projectTitle->sub_title }}</p>
    </div>
    <div class="projects w-full flex flex-col mb-[30px] overflow-hidden">
        <div class="group/slider slider flex flex-nowrap w-max items-center">

            <div
                class="project-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap">
                @forelse($projects as $index => $project)
                    @if ($index < 3)
                        <div
                            class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                            <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                                <img src="{{ asset($project->cover) }}" class="w-full h-full object-cover"
                                    alt="thumbnail">
                            </div>
                            <div
                                class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                                <div class="text-center z-10">
                                    <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">
                                        {{ $project->name }}
                                    </p>
                                    <p class="text-lg text-[#BABABC]">{{ $project->projectCategory->name }}</p>
                                </div>
                                <a href="{{ route('home.details', $project) }}"
                                    class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View
                                    Details</a>
                                <img src="{{ asset('frontend/assets/images/Ellipse.svg') }}"
                                    class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2"
                                    alt="background icon">
                            </div>
                        </div>
                    @endif
                @empty
                @endforelse
            </div>

            <div
                class="project-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap ">
                @forelse($projects as $index => $project)
                    @if ($index < 3)
                        <div
                            class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                            <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                                <img src="{{ asset($project->cover) }}" class="w-full h-full object-cover"
                                    alt="thumbnail">
                            </div>
                            <div
                                class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                                <div class="text-center z-10">
                                    <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">
                                        {{ $project->name }}
                                    </p>
                                    <p class="text-lg text-[#BABABC]">{{ $project->projectCategory->name }}</p>
                                </div>
                                <a href="{{ route('home.details', $project) }}"
                                    class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View
                                    Details</a>
                                <img src="{{ asset('frontend/assets/images/Ellipse.svg') }}"
                                    class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2"
                                    alt="background icon">
                            </div>
                        </div>
                    @endif
                @empty
                @endforelse
            </div>

        </div>
    </div>
    <div class="projects w-full flex flex-col overflow-hidden">
        <div class="group/slider slider flex flex-nowrap w-max items-center">
            <div
                class="project-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap">
                @forelse($projects as $index => $project)
                    @if ($index >= 3)
                        <div
                            class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                            <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                                <img src="{{ asset($project->cover) }}" class="w-full h-full object-cover"
                                    alt="thumbnail">
                            </div>
                            <div
                                class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                                <div class="text-center z-10">
                                    <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">
                                        {{ $project->name }}
                                    </p>
                                    <p class="text-lg text-[#BABABC]">{{ $project->projectCategory->name }}</p>
                                </div>
                                <a href="{{ route('home.details', $project) }}"
                                    class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View
                                    Details</a>
                                <img src="{{ asset('frontend/assets/images/Ellipse.svg') }}"
                                    class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2"
                                    alt="background icon">
                            </div>
                        </div>
                    @endif
                @empty
                @endforelse
            </div>
            <div
                class="project-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap ">
                @forelse($projects as $index => $project)
                    @if ($index >= 3)
                        <div
                            class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                            <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                                <img src="{{ asset($project->cover) }}" class="w-full h-full object-cover"
                                    alt="thumbnail">
                            </div>
                            <div
                                class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                                <div class="text-center z-10">
                                    <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">
                                        {{ $project->name }}
                                    </p>
                                    <p class="text-lg text-[#BABABC]">{{ $project->projectCategory->name }}</p>
                                </div>
                                <a href="{{ route('home.details', $project) }}"
                                    class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View
                                    Details</a>
                                <img src="{{ asset('frontend/assets/images/Ellipse.svg') }}"
                                    class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2"
                                    alt="background icon">
                            </div>
                        </div>
                    @endif
                @empty
                @endforelse
            </div>
        </div>
    </div>
</section>
