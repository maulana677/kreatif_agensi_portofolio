@extends('frontend.layouts.master')

@section('title', 'Book a Meeting')

@section('content')

    <section id="Content" class="flex flex-col lg:flex-row min-h-screen bg-portto-black">
        <!-- Background and Testimonials Section -->
        <div
            class="w-full lg:w-1/2 min-h-screen bg-cover bg-center bg-[url('{{ asset('frontend/assets/images/background/side-image.png') }}')] flex flex-col p-8 lg:p-16">
            <div class="text-center text-white mb-12 flex-grow flex flex-col justify-center">
                <h2 class="text-4xl lg:text-5xl font-extrabold mb-8">What Our Clients Say</h2>
                <div class="flex flex-col items-center space-y-6">
                    @foreach ($testimonials as $testimonial)
                        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
                            <div class="mb-4 flex justify-center">
                                <img src="{{ asset($testimonial->logo) }}" class="w-12 h-12 object-contain" alt="logo">
                            </div>
                            <p class="text-lg font-semibold text-gray-800 mb-4 text-center">
                                {{ $testimonial->testimonial_text }}</p>
                            <div class="flex justify-center">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $testimonial->rating)
                                        <img src="{{ asset('frontend/assets/images/icons/Star.svg') }}" class="w-6 h-6"
                                            alt="star">
                                    @endif
                                @endfor
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Booking Form Section -->
        <div class="w-full lg:w-1/2 min-h-screen bg-white p-8 lg:p-16 flex flex-col items-center justify-center">
            <div class="text-center mb-12">
                <h1 class="text-4xl lg:text-5xl font-extrabold text-black mb-4">Book a Meeting</h1>
                <p class="text-lg text-gray-600">Tell me anything about your biggest future dreams</p>
            </div>
            <form action="{{ route('home.book.store-book') }}" method="POST" enctype="multipart/form-data"
                class="flex flex-col gap-5 w-full max-w-lg mx-auto">
                @csrf
                <label class="flex flex-col gap-2 font-semibold">
                    <span class="text-black">Complete Name</span>
                    <input type="text" name="name" id="name"
                        class="bg-gray-100 rounded-full p-4 outline-none focus:ring-2 focus:ring-portto-green placeholder:text-gray-500"
                        placeholder="Write your complete name" required>
                </label>
                <label class="flex flex-col gap-2 font-semibold">
                    <span class="text-black">Email Address</span>
                    <input type="email" name="email" id="email"
                        class="bg-gray-100 rounded-full p-4 outline-none focus:ring-2 focus:ring-portto-green placeholder:text-gray-500"
                        placeholder="What’s your email address" required>
                </label>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <label class="flex flex-col gap-2 font-semibold w-full">
                        <span class="text-black">Category</span>
                        <select name="projectCategory_id" id="projectCategory_id"
                            class="font-semibold rounded-full p-4 appearance-none outline-none focus:ring-2 focus:ring-portto-green bg-gray-100"
                            required>
                            <option value="" class="text-gray-500" selected disabled hidden>Select category</option>
                            @foreach ($projectsCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </label>
                    <label class="flex flex-col gap-2 font-semibold w-full">
                        <span class="text-black">Est. Budget (Rp)</span>
                        <input type="number" name="budget" id="budget"
                            class="bg-gray-100 rounded-full p-4 outline-none focus:ring-2 focus:ring-portto-green placeholder:text-gray-500"
                            placeholder="Tell me your budget" required>
                    </label>
                </div>
                <label class="flex flex-col gap-2 font-semibold">
                    <span class="text-black">Project Brief</span>
                    <textarea name="brief" id="brief"
                        class="bg-gray-100 rounded-lg p-4 outline-none focus:ring-2 focus:ring-portto-green placeholder:text-gray-500 h-64"
                        placeholder="Brief me your whole project" required></textarea>
                </label>
                <button
                    class="font-bold text-lg text-white bg-portto-purple rounded-full p-4 transition-all duration-300 hover:shadow-lg">Request
                    for Meeting</button>
            </form>
        </div>
    </section>

@endsection
