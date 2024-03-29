@extends('layouts.frontend')
@section('name', 'Students')
@section('content')
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8"
        style="background-image: url({{ asset('frontend/assets') }}/images/banner/top_banner.webp)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Our Recent Placements</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Placement</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->

    <section id="teachers-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                @foreach ($jobs as $job)
                    <div class="col-lg-3 col-sm-6">
                        <div class="singel-teachers mt-30 text-center">
                            <div class="image">
                                <img src="{{ setImage($job->image) }}" alt="Teachers">
                            </div>
                            <div class="cont">
                                <a href="#">
                                    <h6>{{ $job->title }}</h6>
                                </a>
                                <span>{{ $job->designation }} at</span>
                                <span>{{ $job->company_name }}</span>
                            </div>
                        </div> <!-- singel teachers -->
                    </div>
                @endforeach
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    {{ $jobs->links() }}
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEACHERS PART ENDS ======-->

@endsection
