<section id="about-part" class="pt-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h5>About us</h5>
                    <h2>Welcome to TECHNEWS365 </h2>
                </div> <!-- section title -->
                <div class="about-cont">
                    <p>TECHNEWS365 is a platform that has been providing courses on various emerging technologies
                        since its journey began in June 2013. The platform was founded with the vision of making the
                        latest technology trends accessible to everyone. Over the years, TECHNEWS365 has continued
                        to expand its &nbsp;offerings and now &nbsp;provides courses on networking, cloud
                        computing,data
                        science, &nbsp;AI, &nbsp;&nbsp;cybersecurity, &nbsp;and &nbsp;other &nbsp;related topics.

                        The &nbsp;courses &nbsp;on TECHNEWS365 courses are designed by industry experts with years of
                        experience in
                        the
                        field. They use a variety of teaching methods &nbsp;to &nbsp;ensure &nbsp;that
                        &nbsp;learners&nbsp;
                        &nbsp;&nbsp;have &nbsp;a &nbsp;&nbsp;&nbsp;&nbsp;comprehensive
                        understanding of the subject matter, including lectures, videos, interactive simulations,
                        and hands-on exercises. With its flexible learning options and high-quality resources,
                        TECHNEWS365 has become a trusted source for anyone interested in enhancing their skills and
                        staying up-to-date with the latest technology trends.</p>
                    {{-- <a href="#" class="main-btn mt-55">Learn More</a> --}}
                </div>
            </div> <!-- about cont -->
            <div class="col-lg-6 offset-lg-1">
                <div class="about-event mt-50">
                    <div class="event-title">
                        <h3>Upcoming events</h3>
                    </div> <!-- event title -->
                    <ul>
                        @foreach ($events as $event)
                            <li>
                                <div class="singel-event">
                                    <span><i class="fa fa-calendar"></i> {{ $event->date }}</span>

                                    <h4>{{ $event->title }}</h4>

                                    <span><i class="fa fa-clock-o"></i>
                                        {{ date('h:i A', strtotime($event->start_time)) }}
                                        {{-- {{ $event->end_time !== '00:00:00' ? '-' : null }} --}}
                                        {{ $event->end_time !== '00:00:00' ? '-' . date('h:i A', strtotime($event->end_time)) : null }}</span>
                                    <span><i class="fa fa-map-marker"></i> {{ $event->location }}</span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div> <!-- about event -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    {{-- <div class="about-bg">
        <img src="{{ asset('frontend/assets') }}/images/about/datacenter.jpg" alt="About">
    </div> --}}
</section>
