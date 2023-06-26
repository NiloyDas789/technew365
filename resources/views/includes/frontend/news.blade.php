<section id="news-part" class="pt-115 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-50">
                    <h5>Latest Technews</h5>
                    <h2>From TECHNEWS365</h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="singel-news mt-30" x-data="{ shown: false }" x-intersect="shown = true">
                    <div class="news-thum pb-25" x-show="shown">
                        <img src="{{ setImage($biggerItem[0]->image) }}" alt="News">
                    </div>
                    <div class="news-cont">
                        <ul>
                            <li><a href="#"><i class="fa fa-calendar"></i>
                                    {{ date('F j, Y', strtotime($biggerItem[0]->created_at)) }} </a></li>
                            {{-- <li><a href="#"> <span>By</span> Adam linn</a></li> --}}
                        </ul>
                        <a href="{{ route('latest-news', $biggerItem[0]->slug) }}">
                            <h3>{{ $biggerItem[0]->title }}</h3>
                        </a>
                        <p>{{ Str::limit($biggerItem[0]->description, 500) }}</p>
                    </div>
                </div> <!-- singel news -->
            </div>
            <div class="col-lg-6">
                @foreach ($smallerItems as $smallerItem)
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4" x-data="{ shown: false }" x-intersect="shown = true">
                                <div class="news-thum mt-30" x-show="shown">
                                    <img src="{{ setImage($smallerItem->image) }}" alt="News">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i>
                                                {{ date('F j, Y', strtotime($smallerItem->created_at)) }}</a></li>
                                        {{-- <li><a href="#"> <span>By</span> Adam linn</a></li> --}}
                                    </ul>
                                    <a href="{{ route('latest-news', $smallerItem->slug) }}">
                                        <h3>{{ $smallerItem->title }}</h3>
                                    </a>
                                    <p>{{ Str::limit($smallerItem->description, 100) }}</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                @endforeach
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
