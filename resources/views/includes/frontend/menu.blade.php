<div class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="{{ request()->is('/') ? 'active' : null }}"
                                    href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ request()->is('courses') ? 'active' : null }}"
                                    href="{{ route('courses') }}">Courses</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ request()->is('placements') ? 'active' : null }}"
                                    href="{{ route('students') }}">Placement</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ request()->is('certificate-verification') ? 'active' : null }}"
                                    href="{{ route('certificate') }}">Verify Certificate</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ request()->is('gallery') ? 'active' : null }}"
                                    href="{{ route('gallery') }}">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ request()->is('about-us') ? 'active' : null }}"
                                    href="{{ route('about-us') }}">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ request()->is('contact') ? 'active' : null }}"
                                    href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav> <!-- nav -->
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                {{-- <div class="right-icon text-right">
                    <ul>
                        <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>
                    </ul>
                </div>  --}}
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>
