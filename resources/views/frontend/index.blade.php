@extends('layouts.frontend')
@section('title', 'Hill View Hotel - Home')
@section('content')
		<!-- SLIDESHOW -->
        @include('includes.frontend.slideshow')
		<!-- SLIDESHOW END -->

		<!-- SERVICES LIST & BOOKING FORM -->
		@include('includes.frontend.servicelist')
		<!-- SERVICES LIST & BOOKING FORM END -->

		<!-- ROOMS LIST -->
		@include('includes.frontend.roomlist')
		<!-- ROOMS LIST END -->

		<!-- WHY CHOOSE US? -->
		@include('includes.frontend.whychooseus')
		<!-- WHY CHOOSE US? END -->

		<!-- PRICING PLANS -->
		@include('includes.frontend.pricingplans')
		<!-- PRICING PLANS END -->

		<!-- TESTIMONIALS CAROUSEL -->
		@include('includes.frontend.testimonialcarousel')
		<!-- TESTIMONIALS CAROUSEL END -->

		<!-- CONTACT SECTION -->
		@include('includes.frontend.contactsection')
		<!-- CONTACT SECTION END -->
@endsection
