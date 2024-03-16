@extends('frontend.layouts.master')

@section('title', 'Creatifolio')

@section('content')
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

    @push('after-script')
        <script src="{{ asset('frontend/src/main.js') }}"></script>
    @endpush

@endsection
