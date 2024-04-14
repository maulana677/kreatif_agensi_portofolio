@extends('frontend.layouts.master')

@section('title', 'Detail Creatifolio')

@section('content')
    <section id="Header" class="flex flex-col gap-[100px] bg-portto-black relative max-h-[665px] mb-[493px]">
        @include('frontend.section.navbar')
        <div class="hero container max-w-[1130px] mx-auto flex flex-col justify-center items-center relative">
            <h1 class="font-extrabold text-[50px] leading-[70px] text-white text-center z-10">{{ $project->name }}</h1>
            <p class="text-xl leading-[30px] text-white z-10">{{ $project->projectCategory->name }}</p>
            <div class="flex shrink-0 w-full h-[800px] rounded-[50px] overflow-hidden bg-white mt-[70px] z-10">
                <img src="{{ asset($project->cover) }}" class="w-full h-full object-cover" alt="thumbnail">
            </div>
            <img src="{{ asset('frontend/assets/images/Ellipse.svg') }}"
                class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-[135px] w-[35%]"
                alt="background icon">
        </div>
    </section>

    <section id="Details" class="container max-w-[1130px] mx-auto pt-[50px]">
        <div class="flex gap-[50px] justify-between">
            <div class="flex flex-col gap-5">
                <h2 class="font-extrabold text-2xl">The First Purpose</h2>
                <div class="description flex flex-col gap-4 font-medium text-lg leading-[38px]">
                    {{ $project->about }}
                </div>
                <div class="flex gap-4">
                    <div class="flex items-center gap-1 bg-[#F4F5F8] p-[8px_10px] rounded-[12px]">
                        <div class="w-5 h-5 flex shrink-0">
                            <img src="{{ asset('frontend/assets/images/icons/crown-black.svg') }}" alt="icon">
                        </div>
                        <p class="font-semibold">Startup</p>
                    </div>
                    <div class="flex items-center gap-1 bg-[#F4F5F8] p-[8px_10px] rounded-[12px]">
                        <div class="w-5 h-5 flex shrink-0">
                            <img src="{{ asset('frontend/assets/images/icons/code-black.svg') }}" alt="icon">
                        </div>
                        <p class="font-semibold">Future AI</p>
                    </div>
                    <div class="flex items-center gap-1 bg-[#F4F5F8] p-[8px_10px] rounded-[12px]">
                        <div class="w-5 h-5 flex shrink-0">
                            <img src="{{ asset('frontend/assets/images/icons/chart-2-black.svg') }}" alt="icon">
                        </div>
                        <p class="font-semibold">Finance</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-5">
                <h2 class="font-extrabold text-2xl">Software Used</h2>
                <div class="software-container flex flex-col shrink-0 gap-5 w-[325px]">
                    @forelse($project->tools as $tool)
                        <div
                            class="card-software w-full flex items-center bg-[#F4F5F8] rounded-2xl p-5 gap-4 transition-all duration-300 hover:ring-2 hover:ring-portto-purple">
                            <div class="w-[70px] h-[70px] bg-white rounded-full flex shrink-0 items-center justify-center">
                                <img src="{{ asset($tool->logo) }}" alt="tool">
                            </div>
                            <div class="flex flex-col gap-[2px]">
                                <p class="tool-title font-bold text-xl leading-[30px]">{{ $tool->name }}</p>
                                <p class="text-lg text-[#878C9C]">{{ $tool->tagline }}</p>
                            </div>
                        </div>
                    @empty
                        <p>Belum ada software ditambahkan</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <section id="Screenshots" class="container max-w-[1130px] mx-auto pt-[50px]">
        <div class="flex flex-col gap-5">
            <h2 class="font-extrabold text-2xl">Screenshots</h2>
            <div class="grid grid-cols-4 gap-5">
                @forelse ($project->screenshots as $item)
                    <a href="{{ asset($item->screenshot) }}"
                        class="group w-full h-[190px] flex overflow-hidden rounded-[30px] ring-1 ring-[#E4E5E8] transition-all duration-300 hover:ring-[3px] hover:ring-portto-purple relative"
                        data-fancybox="gallery" data-caption="Screenshot #1">
                        <img src="{{ asset($item->screenshot) }}" class="w-full h-full object-cover" alt="thumbnail">
                        <img src="{{ asset('frontend/assets/images/icons/eye.svg') }}"
                            class="absolute transition-all duration-300 opacity-0 group-hover:opacity-100  transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-10"
                            alt="icon eye">
                    </a>
                @empty
                    <p>Belum ada software ditambahkan</p>
                @endempty
        </div>
    </div>
</section>

<section id="Featured-testimonial" class="container max-w-[1130px] mx-auto">
    <div class="flex gap-[100px] items-center px-[65px] pt-[100px]">
        @foreach ($testimonials as $testimonial)
            <div class="flex flex-col gap-5 relative">
                <div class="flex w-[200px] h-[250px] rounded-[30px] shrink-0 overflow-hidden z-10">
                    <img src="{{ asset($testimonial->avatar) }}" alt="photo">
                </div>
                <div class="flex flex-col gap-[6px] text-center">
                    <p class="font-bold text-2xl">{{ $testimonial->name }}</p>
                    <p class="text-xl text-[#878C9C]">{{ $testimonial->job_title }}</p>
                </div>
                <img src="{{ asset('frontend/assets/images/icons/quote.svg') }}"
                    class="absolute transform -translate-x-1/2 -translate-y-1/2 left-[21px] top-[14px]" alt="icon">
            </div>
            <div class="flex flex-col gap-[50px]">
                <div class="flex shrink-0">
                    <img src="{{ asset($testimonial->logo) }}" alt="logo">
                </div>
                <p class="font-semibold text-[32px] leading-[60px]">{{ $testimonial->testimonial_text }}
                </p>
                <div class="flex h-8 w-fit shrink-0">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $testimonial->rating)
                            <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star">
                        @endif
                    @endfor
                </div>
            </div>
        @endforeach
    </div>
</section>

<section id="Book" class="container max-w-[1130px] mx-auto">
    <div
        class="bg-portto-black flex justify-between px-[50px] rounded-[50px] h-[476px] mt-[100px] bg-[url('{{ asset('frontend/assets/images/Ellipse.svg') }}')] bg-center bg-no-repeat bg-contain bg-[length:400px_400px] relative">
        <div class="group/projects w-[220px] overflow-hidden">
            <div class="slider flex flex-col h-max justify-center">
                <div
                    class="project-container animate-[slideToT_30s_linear_infinite] group-hover/projects:pause-animate flex flex-col gap-[30px] pt-[30px] justify-center">
                    <div
                        class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('frontend/assets/images/thumbnails/thumbnail1.png') }}"
                                class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div
                        class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('frontend/assets/images/thumbnails/thumbnail2.png') }}"
                                class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div
                        class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('frontend/assets/images/thumbnails/thumbnail3.png') }}"
                                class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider flex flex-col h-max justify-center">
                <div
                    class="project-container animate-[slideToT_30s_linear_infinite] group-hover/projects:pause-animate flex flex-col gap-[30px] pt-[30px] justify-center">
                    <div
                        class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('frontend/assets/images/thumbnails/thumbnail1.png') }}"
                                class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div
                        class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('frontend/assets/images/thumbnails/thumbnail2.png') }}"
                                class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div
                        class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('frontend/assets/images/thumbnails/thumbnail3.png') }}"
                                class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-5 items-center justify-center text-center w-fit">
            <h2 class="font-extrabold text-[40px] leading-[60px] text-white">Let Me Help You <br>Grow Business Today
            </h2>
            <p class="font-semibold text-lg leading-[32px] text-white">I will dedicate my entire career to focus <br>on
                finishing your future dreams</p>
            <a href="{{ route('home.book') }}"
                class="bg-portto-light-gold font-bold text-lg p-[14px_30px] rounded-full transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">Book
                a Meeting</a>
        </div>
        <div class="group/projects w-[220px] overflow-hidden">
            <div class="slider flex flex-col h-max justify-center">
                <div
                    class="project-container animate-[slideToB_30s_linear_infinite] group-hover/projects:pause-animate flex flex-col gap-[30px] pt-[30px] justify-center">
                    <div
                        class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('frontend/assets/images/thumbnails/thumbnail1.png') }}"
                                class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div
                        class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('frontend/assets/images/thumbnails/thumbnail2.png') }}"
                                class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div
                        class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('frontend/assets/images/thumbnails/thumbnail3.png') }}"
                                class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider flex flex-col h-max justify-center">
                <div
                    class="project-container animate-[slideToB_30s_linear_infinite] group-hover/projects:pause-animate flex flex-col gap-[30px] pt-[30px] justify-center">
                    <div
                        class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('frontend/assets/images/thumbnails/thumbnail1.png') }}"
                                class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div
                        class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('frontend/assets/images/thumbnails/thumbnail2.png') }}"
                                class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div
                        class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{ asset('frontend/assets/images/thumbnails/thumbnail3.png') }}"
                                class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--  faq start  --}}
@include('frontend.section.faq')
{{--  faq end  --}}

{{--  faq start  --}}
@include('frontend.section.footer')
{{--  faq end  --}}

@push('after-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
@endpush

@push('after-script')
    <script src="{{ asset('frontend/src/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    </script>
@endpush
@endsection
