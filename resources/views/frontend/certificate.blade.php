@extends('layouts.frontend')
@section('name', 'Certificate Verification')
@section('content')
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8"
        style="background-image: url({{ asset('frontend/assets') }}/images/banner/top_banner.webp)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Certificate Verification</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Certificate Verification</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                            <h5>Verify Certificate</h5>
                            <h2>Enter Verification ID</h2>
                        </div> <!-- section title -->
                        <div class="main-form pt-45">
                            <form action="{{ route('certificate') }}" method="GET">
                                @csrf
                                <div class="col-md-12">
                                    <div class="singel-form form-group has-error has-danger">
                                        <input name="id" type="text" placeholder="Your Verification ID"
                                            data-error="ID is required." required="required">
                                        <div class="help-block with-errors">
                                        </div>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="singel-form">
                                        <button type="submit" class="main-btn disabled">Submit</button>
                                    </div> <!-- singel form -->
                                </div>
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
                <div class="col-lg-5">
                    <div class="contact-from mt-30">

                        {{-- {{ dd(session()->pull('certification')) }} --}}
                        @if (isset($certification))
                            <div
                                style="background-image: url('{{ asset('frontend/assets') }}/images/certificate_bg.png') ;
                        /* background-size: 150px; */
                        /* width: 180px; */
                        /* height: 300px; */
                            background-repeat: no-repeat;

                        background-size: fit;">
                                <div class="section-title">
                                    <h5>Certificate Details</h5>
                                    {{-- <h2>Enter Your ID</h2> --}}
                                </div>
                                <ul>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <b>Student Name:</b>
                                            </div>
                                            <div class="cont">
                                                <p>{{ $certification->name }}</p>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <b>ID:</b>
                                            </div>
                                            <div class="cont">
                                                <p>{{ $certification->student_id }}</p>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <b>Course Title:</b>
                                            </div>
                                            <div class="cont">
                                                <p>{{ $certification->course_title }}</p>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <b>Completetion Date:</b>
                                            </div>
                                            <div class="cont">
                                                <p>{{ $certification->completion_date }}</p>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                </ul>
                                <a href="{{ route('certificate') }}" type="button" class="btn btn-secondary mt-2">
                                    <i class="fas fa-redo-alt"></i>Reset</a>
                            </div>
                        @else
                            <div class="alert alert-danger mt-5" role="alert">
                                <p>No Data Found.</p>
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session()->pull('error') }}
                            </div>
                        @endif

                    </div> <!-- contact address -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

@endsection
