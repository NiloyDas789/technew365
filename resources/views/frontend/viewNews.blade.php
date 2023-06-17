@extends('layouts.frontend')
@section('name', 'Latest News')
@section('content')
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8"
        style="background-image: url({{ asset('frontend/assets') }}/images/top_banner_1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>{{ $latestNews->title }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item">LatestNews</li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $latestNews->title }}</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <section id="blog-singel" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details mt-30">
                        <div class="thum">
                            <img style="width: 100%;" src="{{ setImage($latestNews->image) }}" alt="Latest_News">
                        </div>
                        <div class="cont">
                            <h3>{{ $latestNews->title }}</h3>
                            <ul>
                                <li><i class="fa fa-calendar"></i>{{ date('F j, Y', strtotime($latestNews->created_at)) }}
                                </li>
                            </ul>
                            <p>{{ $latestNews->description }}
                            </p>
                        </div> <!-- cont -->
                    </div> <!-- blog details -->
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->

@endsection
