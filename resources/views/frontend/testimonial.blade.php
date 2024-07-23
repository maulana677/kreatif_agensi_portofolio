@extends('frontend.layouts.master')

@section('title', 'Testimonial')

@section('content')
    <main class="flex-grow">
        <section id="Header" class="bg-portto-black text-white relative py-20 mt-8">
            @include('frontend.section.navbar')
            <div class="container mx-auto max-w-7xl px-4 lg:px-8 py-16">
                <div class="text-center">
                    <h1 class="text-4xl lg:text-5xl font-extrabold mb-4">{{ $testimonialsSectionTitle->title }}</h1>
                    <p class="text-lg lg:text-xl">{{ $testimonialsSectionTitle->sub_title }}</p>
                </div>
            </div>
        </section>
    </main>

    <section id="Testimonials" class="container max-w-5xl mx-auto pt-20 pb-20 relative min-h-screen">
        <div class="container mx-auto max-w-7xl px-4 lg:px-8">
            <h2 class="text-3xl lg:text-4xl font-extrabold text-center mb-12">What Our Clients Say</h2>

            <!-- Grid for Testimonials -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($testimonials as $testimonial)
                    <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center max-w-xs mx-auto">
                        <div class="mb-4">
                            <img src="{{ asset($testimonial->logo) }}" alt="logo" class="w-20 h-20 object-contain">
                        </div>
                        <p class="text-lg font-semibold text-center mb-4">{{ $testimonial->testimonial_text }}</p>
                        <div class="flex mb-4">
                            @for ($i = 1; $i <= 5; $i++)
                                <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" alt="star"
                                    class="{{ $i <= $testimonial->rating ? 'text-yellow-500' : 'text-gray-300' }}">
                            @endfor
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 rounded-full overflow-hidden">
                                <img src="{{ asset($testimonial->avatar) }}" alt="photo"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="text-center">
                                <p class="font-bold text-lg">{{ $testimonial->name }}</p>
                                <p class="text-gray-600 text-sm">{{ $testimonial->job_title }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Footer Start --}}
    @include('frontend.section.footer')
    {{-- Footer End --}}
@endsection
