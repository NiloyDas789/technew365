@extends('layouts.frontend')
@section('name', 'Home')
@section('content')

    <!--====== SLIDER PART START ======-->

    @include('includes.frontend.slider')

    <!--====== SLIDER PART ENDS ======-->

    <!--====== CATEGORY PART START ======-->

    @include('includes.frontend.category')

    <!--====== CATEGORY PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    @include('includes.frontend.about')

    <!--====== ABOUT PART ENDS ======-->

    <!--====== APPLY PART START ======-->

    {{-- @include('includes.frontend.apply') --}}

    <!--====== APPLY PART ENDS ======-->

    <!--====== COURSE PART START ======-->

    @include('includes.frontend.course')

    <!--====== COURSE PART ENDS ======-->

    <!--====== VIDEO FEATURE PART START ======-->

    @include('includes.frontend.videoFeature')

    <!--====== VIDEO FEATURE PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->

    @include('includes.frontend.teachers')

    <!--====== TEACHERS PART ENDS ======-->

    <!--====== PUBLICATION PART START ======-->

    @include('includes.frontend.publication')

    <!--====== PUBLICATION PART ENDS ======-->

    <!--====== TEASTIMONIAL PART START ======-->

    {{-- @include('includes.frontend.teastimonial') --}}

    <!--====== TEASTIMONIAL PART ENDS ======-->

    <!--====== NEWS PART START ======-->

    @include('includes.frontend.news')

    <!--====== NEWS PART ENDS ======-->

    <!--====== Youtube Video PART START ======-->

    {{-- @include('includes.frontend.youtubeVideo') --}}

    <!--====== Youtube Video PART ENDS ======-->


@endsection
@push('style')
    <style>
        /* Styles for mobile */
        @media (max-width: 767px) {
            #slider_banner_1 {
                background-image: url("{{ asset('frontend/assets') }}/images/mobile/banner-1.webp");
            }

            #slider_banner_3 {
                background-image: url("{{ asset('frontend/assets') }}/images/mobile/banner-3.webp");
            }

            #slider_banner_4 {
                background-image: url("{{ asset('frontend/assets') }}/images/mobile/banner-4.webp");
            }

            #video-feature {
                background-image: url("{{ asset('frontend/assets') }}/images/mobile/youtube_banner.jpg");
            }
        }

        /* Styles for web */
        @media (min-width: 768px) {
            #slider_banner_1 {
                background-image: url("{{ asset('frontend/assets') }}/images/banner/banner-1.webp");
            }

            #slider_banner_3 {
                background-image: url("{{ asset('frontend/assets') }}/images/banner/banner-3.webp");
            }

            #slider_banner_4 {
                background-image: url("{{ asset('frontend/assets') }}/images/banner/banner-4.webp");
            }

            #video-feature {
                background-image: url("{{ asset('frontend/assets') }}/images/banner/youtube_banner.webp");
            }
        }
    </style>
@endpush
