<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>TECHNEWS365</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('default/favicon.ico') }}" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/animate.css">

    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/nice-select.css">

    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/font-awesome.min.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/style.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/responsive.css">
    @stack('style')

</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>

    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->

    <header id="header-part">

        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li><img src="{{ asset('frontend/assets') }}/images/all-icon/map.png"
                                        alt="icon"><span>Dewan bazar, Chottagram</span></li>
                                <li><img src="{{ asset('frontend/assets') }}/images/all-icon/email.png"
                                        alt="icon"><span>technews365.net@gmail.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-opening-time text-lg-right text-center">
                            <p>Opening Hours : Saturday to Thursday - 9 Am to 10 Pm</p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->

        <div class="header-logo-support pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('default/logo_1.png') }}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="support-button float-right d-none d-md-block">
                            <div class="support float-left">
                                <div class="icon">
                                    <img src="{{ asset('frontend/assets') }}/images/all-icon/support.png"
                                        alt="icon">
                                </div>
                                <div class="cont">
                                    <p>Need Help? call us free</p>
                                    <span>+8801750-030604</span>
                                </div>
                            </div>
                            {{-- <div class="button float-left">
                                <a href="#" class="main-btn">Apply Now</a>
                            </div> --}}
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header logo support -->

        @include('includes.frontend.menu')

    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== SEARCH BOX PART START ======-->

    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>

    <!--====== SEARCH BOX PART ENDS ======-->
    @yield('content')
    <!--====== FOOTER PART START ======-->

    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('default/logo.png') }}"
                                        alt="Logo"></a>
                            </div>
                            <p>Best Platform to Learn Information Technology & Solutions</p>
                            <ul class="mt-20">
                                <li><a href="https://www.facebook.com/groups/technews365info" target="blank"><i
                                            class="fa fa-users"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/TECHNEWS365" target="blank"><i
                                            class="fa fa-facebook-f"></i></a>
                                </li>
                                <li><a href="https://www.youtube.com/@TECHNEWS365" target="blank"><i
                                            class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/technews365" target="blank"><i
                                            class="fa fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/technews365info" target="blank"><i
                                            class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        {{-- <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
                                <li><a href="index-2.html"><i class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="about.html"><i class="fa fa-angle-right"></i>About us</a></li>
                                <li><a href="courses.html"><i class="fa fa-angle-right"></i>Courses</a></li>
                                <li><a href="blog.html"><i class="fa fa-angle-right"></i>News</a></li>
                                <li><a href="events.html"><i class="fa fa-angle-right"></i>Event</a></li>
                            </ul>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Gallery</a></li>
                                <li><a href="shop.html"><i class="fa fa-angle-right"></i>Shop</a></li>
                                <li><a href="teachers.html"><i class="fa fa-angle-right"></i>Teachers</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                                <li><a href="contact.html"><i class="fa fa-angle-right"></i>Contact</a></li>
                            </ul>
                        </div> <!-- footer link --> --}}
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        {{-- <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Support</h6>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>FAQS</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Documentation</a></li>
                            </ul>
                        </div> <!-- support --> --}}
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>Dewan Bazar, Joynab Colony, Office Building (4th Floor), Chittagong</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+8801750-030604</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>technews365.net@gmail.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->

    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TP PART START ======-->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!--====== BACK TO TP PART ENDS ======-->








    <!--====== jquery js ======-->
    <script src="{{ asset('frontend/assets') }}/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('frontend/assets') }}/js/bootstrap.min.js"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('frontend/assets') }}/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('frontend/assets') }}/js/jquery.magnific-popup.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="{{ asset('frontend/assets') }}/js/waypoints.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/jquery.counterup.min.js"></script>

    <!--====== Nice Select js ======-->
    <script src="{{ asset('frontend/assets') }}/js/jquery.nice-select.min.js"></script>

    <!--====== Nice Number js ======-->
    <script src="{{ asset('frontend/assets') }}/js/jquery.nice-number.min.js"></script>

    <!--====== Count Down js ======-->
    <script src="{{ asset('frontend/assets') }}/js/jquery.countdown.min.js"></script>

    <!--====== Validator js ======-->
    <script src="{{ asset('frontend/assets') }}/js/validator.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{ asset('frontend/assets') }}/js/ajax-contact.js"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('frontend/assets') }}/js/main.js"></script>

    <!--====== Map js ======-->
    <script
        src="{{ asset('frontend/assets') }}/https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ">
    </script>
    <script src="{{ asset('frontend/assets') }}/js/map-script.js"></script>

</body>

</html>
