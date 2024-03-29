@extends('layouts.frontend')
@section('name', 'Courses')
@section('content')

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8"
        style="background-image: url({{ asset('frontend/assets') }}/images/banner/top_banner.webp)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Our Courses</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Courses</li>
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
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="courses-top-search">
                        <ul class="nav float-left" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="courses-grid-tab" data-toggle="tab" href="#courses-grid"
                                    role="tab" aria-controls="courses-grid" aria-selected="true"><i
                                        class="fa fa-th-large"></i></a>
                            </li>
                            <li class="nav-item">
                                <a id="courses-list-tab" data-toggle="tab" href="#courses-list" role="tab"
                                    aria-controls="courses-list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                            </li>
                            <li class="nav-item">Showning 4 0f 24 Results</li>
                        </ul> <!-- nav -->

                        <div class="courses-search float-right">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button type="button"><i class="fa fa-search"></i></button>
                            </form>
                        </div> <!-- courses search -->
                    </div> <!-- courses top search -->
                </div>
            </div> <!-- row --> --}}
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                    <div class="row">
                        @foreach ($courses as $course)
                            <div class="col-lg-4 col-md-6">
                                <div class="singel-course mt-30">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="{{ setImage($course->image) }}" alt="Course">
                                        </div>
                                        {{-- <div class="price">
                                            <span>Free</span>
                                        </div> --}}
                                    </div>
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>({{ $course->total_class }} Classes)</span>
                                        <a href="{{ route('view-course', $course->slug) }}">
                                            <h4>{{ $course->title }}</h4>
                                        </a>
                                        {{-- <div class="course-teacher">
                                            <div class="thum">
                                                <a href="#"><img
                                                        src="{{ asset('frontend/assets') }}/images/course/teacher/t-1.jpg"
                                                        alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="#">
                                                    <h6>Mark anthem</h6>
                                                </a>
                                            </div>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div> <!-- singel course -->
                            </div>
                        @endforeach
                    </div> <!-- row -->
                </div>
                {{-- <div class="tab-pane fade" id="courses-list" role="tabpanel" aria-labelledby="courses-list-tab">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="singel-course mt-30">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="thum">
                                            <div class="image">
                                                <img src="{{ asset('frontend/assets') }}/images/course/cu-1.jpg"
                                                    alt="Course">
                                            </div>
                                            <div class="price">
                                                <span>Free</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cont">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>(20 Reviws)</span>
                                            <a href="#">
                                                <h4>Learn basis javascirpt from start for beginner</h4>
                                            </a>
                                            <div class="course-teacher">
                                                <div class="thum">
                                                    <a href="#"><img
                                                            src="{{ asset('frontend/assets') }}/images/course/teacher/t-1.jpg"
                                                            alt="teacher"></a>
                                                </div>
                                                <div class="name">
                                                    <a href="#">
                                                        <h6>Mark anthem</h6>
                                                    </a>
                                                </div>
                                                <div class="admin">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-user"></i><span>31</span></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--  row  -->
                            </div> <!-- singel course -->
                        </div>
                        <div class="col-lg-12">
                            <div class="singel-course mt-30">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="thum">
                                            <div class="image">
                                                <img src="{{ asset('frontend/assets') }}/images/course/cu-2.jpg"
                                                    alt="Course">
                                            </div>
                                            <div class="price">
                                                <span>Free</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cont">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>(20 Reviws)</span>
                                            <a href="#">
                                                <h4>Learn basis javascirpt from start for beginner</h4>
                                            </a>
                                            <div class="course-teacher">
                                                <div class="thum">
                                                    <a href="#"><img
                                                            src="{{ asset('frontend/assets') }}/images/course/teacher/t-2.jpg"
                                                            alt="teacher"></a>
                                                </div>
                                                <div class="name">
                                                    <a href="#">
                                                        <h6>Mark anthem</h6>
                                                    </a>
                                                </div>
                                                <div class="admin">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-user"></i><span>31</span></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--  row  -->
                            </div> <!-- singel course -->
                        </div>
                        <div class="col-lg-12">
                            <div class="singel-course mt-30">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="thum">
                                            <div class="image">
                                                <img src="{{ asset('frontend/assets') }}/images/course/cu-3.jpg"
                                                    alt="Course">
                                            </div>
                                            <div class="price">
                                                <span>Free</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cont">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>(20 Reviws)</span>
                                            <a href="#">
                                                <h4>Learn basis javascirpt from start for beginner</h4>
                                            </a>
                                            <div class="course-teacher">
                                                <div class="thum">
                                                    <a href="#"><img
                                                            src="{{ asset('frontend/assets') }}/images/course/teacher/t-3.jpg"
                                                            alt="teacher"></a>
                                                </div>
                                                <div class="name">
                                                    <a href="#">
                                                        <h6>Mark anthem</h6>
                                                    </a>
                                                </div>
                                                <div class="admin">
                                                    <ul>
                                                        <li><a href="#"><i
                                                                    class="fa fa-user"></i><span>31</span></a></li>
                                                        <li><a href="#"><i
                                                                    class="fa fa-heart"></i><span>10</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--  row  -->
                            </div> <!-- singel course -->
                        </div>
                        <div class="col-lg-12">
                            <div class="singel-course mt-30">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="thum">
                                            <div class="image">
                                                <img src="{{ asset('frontend/assets') }}/images/course/cu-4.jpg"
                                                    alt="Course">
                                            </div>
                                            <div class="price">
                                                <span>Free</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cont">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>(20 Reviws)</span>
                                            <a href="#">
                                                <h4>Learn basis javascirpt from start for beginner</h4>
                                            </a>
                                            <div class="course-teacher">
                                                <div class="thum">
                                                    <a href="#"><img
                                                            src="{{ asset('frontend/assets') }}/images/course/teacher/t-4.jpg"
                                                            alt="teacher"></a>
                                                </div>
                                                <div class="name">
                                                    <a href="#">
                                                        <h6>Mark anthem</h6>
                                                    </a>
                                                </div>
                                                <div class="admin">
                                                    <ul>
                                                        <li><a href="#"><i
                                                                    class="fa fa-user"></i><span>31</span></a></li>
                                                        <li><a href="#"><i
                                                                    class="fa fa-heart"></i><span>10</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--  row  -->
                            </div> <!-- singel course -->
                        </div>
                    </div> <!-- row -->
                </div> --}}
            </div> <!-- tab content -->
            <div class="row">
                <div class="col-lg-12">
                    {{ $courses->links() }}
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== COURSES PART ENDS ======-->

@endsection
