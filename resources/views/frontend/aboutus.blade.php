@extends('layouts.frontend')
@section('name', 'About us')
@section('content')

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8"
        style="background-image: url({{ asset('frontend/assets') }}/images/page-banner-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>About us</h5>
                        <h2>Welcome to TECHNEWS365 </h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>TECHNEWS365 is a platform that has been providing courses on various emerging technologies since
                            its journey began in June 2013. The platform was founded with the vision of making the latest
                            technology trends accessible to everyone. Over the years, TECHNEWS365 has continued to expand
                            its offerings and now provides courses on networking, cloud computing, data science, AI,
                            cybersecurity, and other related topics. The courses on TECHNEWS365 are designed by industry
                            experts with years of experience in the field. They use a variety of teaching methods to ensure
                            that learners have a comprehensive understanding of the subject matter, including lectures,
                            videos, interactive simulations, and hands-on exercises. With its flexible learning options and
                            high-quality resources, TECHNEWS365 has become a trusted source for anyone interested in
                            enhancing their skills and staying up-to-date with the latest technology trends.</p>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-7 mt-auto mb-4">
                    <div class="about-image">
                        <img src="{{ asset('frontend/assets') }}/images/banner/banner-4.png" alt="About">
                    </div> <!-- about imag -->
                </div>
            </div> <!-- row -->
            <div class="about-items pt-60">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>01</span>
                            <h4>Why Choose us</h4>
                            <p>At Technews365, we are committed to providing the highest quality technology courses and
                                resources for our students. Our team of experienced instructors and industry professionals
                                are dedicated to helping you succeed in your career.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>02</span>
                            <h4>Our Mission</h4>
                            <p>At Technews365, our mission is to empower individuals with quality technology education,
                                personalized learning experiences, and a supportive community.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>03</span>
                            <h4>Our vission</h4>
                            <p>At Technews365, our vision is to be a leading provider of quality technology education that
                                empowers individuals to achieve their full potential and become change-makers in the tech
                                industry.</p>
                        </div> <!-- about singel -->
                    </div>
                </div> <!-- row -->
            </div> <!-- about items -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== COUNTER PART START ======-->

    {{-- <div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8"
        style="background-image: url({{ asset('frontend/assets') }}/images/bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">30,000</span>+</span>
                        <p>Students enrolled</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">41,000</span>+</span>
                        <p>Courses Uploaded</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">11,000</span>+</span>
                        <p>People certifie</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">39,000</span>+</span>
                        <p>Global Teachers</p>
                    </div> <!-- singel counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> --}}

    <!--====== COUNTER PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->

    {{-- <section id="teachers-part" class="pt-65 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50 pb-35">
                        <h5>Featured Teachers</h5>
                        <h2>Meet Our teachers</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('frontend/assets') }}/images/teachers/t-1.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html">
                                <h6>Mark alen</h6>
                            </a>
                            <span>Vice chencelor</span>
                        </div>
                    </div> <!-- singel teachers -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('frontend/assets') }}/images/teachers/t-2.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html">
                                <h6>Mark alen</h6>
                            </a>
                            <span>Vice chencelor</span>
                        </div>
                    </div> <!-- singel teachers -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('frontend/assets') }}/images/teachers/t-3.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html">
                                <h6>Mark alen</h6>
                            </a>
                            <span>Vice chencelor</span>
                        </div>
                    </div> <!-- singel teachers -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('frontend/assets') }}/images/teachers/t-4.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html">
                                <h6>Mark alen</h6>
                            </a>
                            <span>Vice chencelor</span>
                        </div>
                    </div> <!-- singel teachers -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('frontend/assets') }}/images/teachers/t-5.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html">
                                <h6>Mark alen</h6>
                            </a>
                            <span>Vice chencelor</span>
                        </div>
                    </div> <!-- singel teachers -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('frontend/assets') }}/images/teachers/t-6.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html">
                                <h6>Mark alen</h6>
                            </a>
                            <span>Vice chencelor</span>
                        </div>
                    </div> <!-- singel teachers -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('frontend/assets') }}/images/teachers/t-7.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html">
                                <h6>Mark alen</h6>
                            </a>
                            <span>Vice chencelor</span>
                        </div>
                    </div> <!-- singel teachers -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('frontend/assets') }}/images/teachers/t-8.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html">
                                <h6>Mark alen</h6>
                            </a>
                            <span>Vice chencelor</span>
                        </div>
                    </div> <!-- singel teachers -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section> --}}

    <!--====== TEACHERS PART ENDS ======-->

    <!--====== TEASTIMONIAL PART START ======-->

    {{-- <section id="testimonial" class="bg_cover pt-115 pb-120" data-overlay="8"
        style="background-image: url({{ asset('frontend/assets') }}/images/bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-40">
                        <h5>Testimonial</h5>
                        <h2>What they say</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-slied mt-40">
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="{{ asset('frontend/assets') }}/images/testimonial/t-1.jpg" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed
                                odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Bsc, Engineering</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="{{ asset('frontend/assets') }}/images/testimonial/t-2.jpg" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed
                                odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Bsc, Engineering</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="{{ asset('frontend/assets') }}/images/testimonial/t-3.jpg" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed
                                odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Bsc, Engineering</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
            </div> <!-- testimonial slied -->
        </div> <!-- container -->
    </section> --}}

    <!--====== TEASTIMONIAL PART ENDS ======-->

    <!--====== PATNAR LOGO PART START ======-->

    {{-- <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
        <div class="container">
            <div class="row patnar-slied">
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ asset('frontend/assets') }}/images/patnar-logo/p-1.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ asset('frontend/assets') }}/images/patnar-logo/p-2.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ asset('frontend/assets') }}/images/patnar-logo/p-3.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ asset('frontend/assets') }}/images/patnar-logo/p-4.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ asset('frontend/assets') }}/images/patnar-logo/p-2.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ asset('frontend/assets') }}/images/patnar-logo/p-3.png" alt="Logo">
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> --}}

    <!--====== PATNAR LOGO PART ENDS ======-->


@endsection
