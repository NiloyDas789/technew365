@extends('layouts.frontend')
@section('name', 'Contact')
@section('content')
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8"
        style="background-image: url({{ asset('frontend/assets') }}/images/banner/top_banner.webp)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
                            <h5>Contact Us</h5>
                            <h2>Keep in touch</h2>
                        </div> <!-- section title -->
                        <div class="main-form pt-45">
                            <div class="contact-address mt-30">
                                <ul>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <div class="cont">
                                                <p>Dewan Bazar, Joynab Colony, Office Building (4th Floor), Chattogram.</p>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="cont">
                                                <p>+8801750-030604</p>
                                                {{-- <p>+1 222 345 342</p> --}}
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="cont">
                                                <p>technews365.net@gmail.com</p>
                                                {{-- <p>info@yourmail.com</p> --}}
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
                <div class="col-lg-5">
                    <div class="contact-from mt-30">
                        <a href="https://www.google.com/maps/@22.3450161,91.8378478,19.5z?entry=ttu" target="_blank"><img
                                src="{{ asset('frontend/assets') }}/images/location.jpg" alt=""></a>

                    </div> <!--  contact from -->
                </div>
                {{-- <div class="col-lg-5">
                     <!-- contact address -->
                    <div class="map mt-30">
                        <div id="contact-map"></div>
                    </div> <!-- map -->
                </div> --}}
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

@endsection
