@extends('frontend.layouts.master')

@section('title', 'Creatifolio')

@section('content')

    {{--  hero start  --}}
    @include('frontend.section.hero')
    {{--  hero end  --}}

    {{--  services start  --}}
    @include('frontend.section.services')
    {{--  services end  --}}

    {{--  project start  --}}
    @include('frontend.section.project')
    {{--  project end  --}}

    {{--  workflow start  --}}
    @include('frontend.section.workflow')
    {{--  workflow end  --}}

    {{--  testimonials start  --}}
    @include('frontend.section.testimonial')
    {{--  testimonials end  --}}

    {{--  faq start  --}}
    @include('frontend.section.faq')
    {{--  faq end  --}}

    {{--  foooter start  --}}
    @include('frontend.section.footer')
    {{--  footer end  --}}

    @push('after-script')
        <script src="{{ asset('frontend/src/main.js') }}"></script>
    @endpush

@endsection
