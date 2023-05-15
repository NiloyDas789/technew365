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

    {{-- @include('includes.frontend.publication') --}}

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
