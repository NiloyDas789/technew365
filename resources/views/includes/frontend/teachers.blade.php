<section id="teachers-part" class="pt-70 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h5>Featured Students</h5>
                    <h2>Meet our students</h2>
                </div> <!-- section title -->
                <div class="teachers-cont">
                    <p>TECHNEWS365 has helped numerous students achieve successful careers in high-demand sectors. With
                        courses designed by industry experts, learners gain the skills and knowledge needed to succeed
                        in today's technology-driven world. Students who have completed courses on TECHNEWS365 have gone
                        on to work in diverse industries, including networking, cloud computing, data science, AI, and
                        cybersecurity. With flexible learning options and high-quality resources, TECHNEWS365 empowers
                        learners to reach their career aspirations and stay up-to-date with the latest technology
                        trends.
                        <br>
                        Join TECHNEWS365 today and take the first step towards a successful career in the exciting world
                        of technology.
                    </p>
                    <a href="{{ route('contact') }}" class="main-btn mt-55">Career with us</a>
                </div> <!-- teachers cont -->
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="teachers mt-20">
                    <div class="row">
                        @foreach ($jobs as $job)
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="{{ setImage($job->image) }}" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <h6>{{ $job->title }}</h6>
                                        <span>{{ $job->designation }} at</span>
                                        <span>{{ $job->company_name }}</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                        @endforeach
                    </div> <!-- row -->
                </div> <!-- teachers -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
