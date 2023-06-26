<section id="publication-part" class="pt-115 pb-120 gray-bg">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6 col-md-8 col-sm-7">
                <div class="section-title pb-60">
                    <h5>Publications</h5>
                    <h2>Featured Books </h2>
                </div> <!-- section title -->
            </div>
            {{-- <div class="col-lg-6 col-md-4 col-sm-5">
                <div class="products-btn text-right pb-60">
                    <a href="#" class="main-btn">All Products</a>
                </div> <!-- products btn -->
            </div> --}}
        </div> <!-- row -->
        <div class="row justify-content-center">
            @foreach ($books as $book)
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="singel-publication mt-30" x-data="{ shown: false }" x-intersect="shown = true">
                        <div class="image" x-show="shown">
                            <img src="{{ setImage($book->image) }}" alt="Publication">
                            <div class="add-cart">
                                {{-- <ul>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                            </ul> --}}
                            </div>
                        </div>
                    </div> <!-- singel publication -->
                </div>
            @endforeach
        </div> <!-- row -->
    </div> <!-- container -->
</section>
