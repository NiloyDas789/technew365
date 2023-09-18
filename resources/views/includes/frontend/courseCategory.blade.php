<section id="course-part" class="pt-115 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-45">
                    <h5>Our Course Category </h5>
                    <h2>Featured Course Categories </h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row course-slied mt-30">
            @foreach ($courseCategories as $courseCategory)
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ setImage($courseCategory->image) }}" alt="Course">
                            </div>
                        </div>
                        <div class="cont">
                            {{-- <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul> --}}
                            {{-- <span>({{ $courseCategory->total_class }} Classes)</span> --}}
                            <a href="{{ route('view-courses', $courseCategory->id) }}">
                                <h4>{{ $courseCategory->title }}</h4>
                            </a>
                        </div>
                    </div> <!-- singel course -->
                </div>
            @endforeach
        </div> <!-- course slied -->
    </div> <!-- container -->
</section>
