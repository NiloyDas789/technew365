@extends('layouts.frontend')
@section('name', 'Gallery')
@section('content')

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8"
        style="background-image: url({{ asset('frontend/assets') }}/images/top_banner_1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Our Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== COURSES PART START ======-->

    <section id="courses-part" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                    <div class="row">
                        @foreach ($galleries as $gallery)
                            <div class="col-lg-4 col-md-6">
                                <div class="singel-course mt-30">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="{{ setImage($gallery->image) }}" alt="TECHNEWS365">
                                        </div>
                                    </div>
                                </div> <!-- singel course -->
                            </div>
                        @endforeach
                    </div> <!-- row -->
                </div>

            </div> <!-- tab content -->
            <div class="row">
                <div class="col-lg-12">
                    {{ $galleries->links() }}
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== COURSES PART ENDS ======-->

@endsection
