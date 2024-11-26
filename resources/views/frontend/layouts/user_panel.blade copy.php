@extends('frontend.layouts.app')
@section('content')
@include('frontend.home.partials.home-banner-area')
<section class="py-5">
  
    <div class="container">
     
        <div class="d-flex align-items-start">
			@include('frontend.inc.user_side_nav')
            @include('frontend.inc.user_side_nav_dash')
    
			<div class="aiz-user-panel">
				@yield('panel_content')
            </div>
        </div>
    </div>
</section>
@endsection
