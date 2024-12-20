@php
$rtl = get_session_language()->rtl;
@endphp

@if ($rtl == 1)
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@else
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endif


@extends('frontend.layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="app-url" content="{{ getBaseURL() }}">
<meta name="file-base-url" content="{{ getFileBaseURL() }}">

<title>@yield('meta_title', get_setting('website_name') . ' | ' . get_setting('site_motto'))</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow">
<meta name="description" content="@yield('meta_description', get_setting('meta_description'))" />
<meta name="keywords" content="@yield('meta_keywords', get_setting('meta_keywords'))">

@yield('meta')

@if (!isset($detailedProduct) && !isset($customer_product) && !isset($shop) && !isset($page) && !isset($blog))
@php
$meta_image = uploaded_asset(get_setting('meta_image'));
@endphp
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{ get_setting('meta_title') }}">
<meta itemprop="description" content="{{ get_setting('meta_description') }}">
<meta itemprop="image" content="{{ $meta_image }}">

<!-- Twitter Card data -->
<meta name="twitter:card" content="product">
<meta name="twitter:site" content="@publisher_handle">
<meta name="twitter:title" content="{{ get_setting('meta_title') }}">
<meta name="twitter:description" content="{{ get_setting('meta_description') }}">
<meta name="twitter:creator" content="@author_handle">
<meta name="twitter:image" content="{{ $meta_image }}">

<!-- Open Graph data -->
<meta property="og:title" content="{{ get_setting('meta_title') }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ route('home') }}" />
<meta property="og:image" content="{{ $meta_image }}" />
<meta property="og:description" content="{{ get_setting('meta_description') }}" />
<meta property="og:site_name" content="{{ env('APP_NAME') }}" />
<meta property="fb:app_id" content="{{ env('FACEBOOK_PIXEL_ID') }}">
@endif


<!-- Favicon -->
@php
$site_icon = uploaded_asset(get_setting('site_icon'));
@endphp
<link rel="icon" href="{{ $site_icon }}">
<link rel="apple-touch-icon" href="{{ $site_icon }}">


<!-- CSS Files -->
<link rel="stylesheet" href="{{ static_asset('assets/css/vendors.css') }}">
@if ($rtl == 1)
<link rel="stylesheet" href="{{ static_asset('assets/css/bootstrap-rtl.min.css') }}">
@endif
<link rel="stylesheet" href="{{ static_asset('assets/css/aiz-core.css?v=') }}{{ rand(1000, 9999) }}">
<link rel="stylesheet" href="{{ static_asset('assets/css/custom-style.css') }}">
@section('meta_title'){{ $shop->meta_title }}@stop

@section('meta_description'){{ $shop->meta_description }}@stop

@section('meta')
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{ $shop->meta_title }}">
<meta itemprop="description" content="{{ $shop->meta_description }}">
<meta itemprop="image" content="{{ uploaded_asset($shop->logo) }}">

<!-- Twitter Card data -->
<meta name="twitter:card" content="website">
<meta name="twitter:site" content="@publisher_handle">
<meta name="twitter:title" content="{{ $shop->meta_title }}">
<meta name="twitter:description" content="{{ $shop->meta_description }}">
<meta name="twitter:creator" content="@author_handle">
<meta name="twitter:image" content="{{ uploaded_asset($shop->meta_img) }}">

<!-- Open Graph data -->
<meta property="og:title" content="{{ $shop->meta_title }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ route('shop.visit', $shop->slug) }}" />
<meta property="og:image" content="{{ uploaded_asset($shop->logo) }}" />
<meta property="og:description" content="{{ $shop->meta_description }}" />
<meta property="og:site_name" content="{{ $shop->name }}" />
@endsection

@section('content')


@php
$followed_sellers = [];
if (Auth::check()) {
$followed_sellers = get_followed_sellers();
}

$products_count =count( get_seller_products($shop->user->id));


@endphp





<section class="courser_filter position-relative">
    <div class="container-fluid p-0">
        <div class="row">


            <!-- Left side columns -->
            <div class="col-lg-12 p-lg-0 mb-3">
                <div class="gradint_box ">

                    <div class="user_sec ">



                        <section class="@if (!isset($type) || $type == 'top-selling' || $type == 'cupons') mb-3 @endif border-top border-bottom" style="background: #fcfcfd;">
                            <div class="container">
                                <!-- Seller Info -->
                                <div class="py-4">
                                    <div class="row justify-content-md-between align-items-center">
                                        <div class="col-lg-5 col-md-6">
                                            <div class="d-flex align-items-center">
                                                <!-- Shop Logo -->
                                                <a href="{{ route('shop.visit', $shop->slug) }}" class="overflow-hidden size-64px rounded-content" style="border: 1px solid #e5e5e5;
                                              box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.06);min-width: fit-content;">
                                                    <img class="lazyload h-64px  mx-auto"
                                                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                        data-src="{{ uploaded_asset($shop->logo) }}"
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                                </a>
                                                <div class="ml-3">
                                                    <!-- Shop Name & Verification Status -->
                                                    <a href="{{ route('shop.visit', $shop->slug) }}"
                                                        class="text-dark d-block fs-16 fw-700">
                                                        {{ $shop->name }}
                                                        @if ($shop->verification_status == 1)
                                                        <span class="ml-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17.5" viewBox="0 0 17.5 17.5">
                                                                <g id="Group_25616" data-name="Group 25616" transform="translate(-537.249 -1042.75)">
                                                                    <path id="Union_5" data-name="Union 5" d="M0,8.75A8.75,8.75,0,1,1,8.75,17.5,8.75,8.75,0,0,1,0,8.75Zm.876,0A7.875,7.875,0,1,0,8.75.875,7.883,7.883,0,0,0,.876,8.75Zm.875,0a7,7,0,1,1,7,7A7.008,7.008,0,0,1,1.751,8.751Zm3.73-.907a.789.789,0,0,0,0,1.115l2.23,2.23a.788.788,0,0,0,1.115,0l3.717-3.717a.789.789,0,0,0,0-1.115.788.788,0,0,0-1.115,0l-3.16,3.16L6.6,7.844a.788.788,0,0,0-1.115,0Z" transform="translate(537.249 1042.75)" fill="#3490f3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        @else
                                                        <span class="ml-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17.5" viewBox="0 0 17.5 17.5">
                                                                <g id="Group_25616" data-name="Group 25616" transform="translate(-537.249 -1042.75)">
                                                                    <path id="Union_5" data-name="Union 5" d="M0,8.75A8.75,8.75,0,1,1,8.75,17.5,8.75,8.75,0,0,1,0,8.75Zm.876,0A7.875,7.875,0,1,0,8.75.875,7.883,7.883,0,0,0,.876,8.75Zm.875,0a7,7,0,1,1,7,7A7.008,7.008,0,0,1,1.751,8.751Zm3.73-.907a.789.789,0,0,0,0,1.115l2.23,2.23a.788.788,0,0,0,1.115,0l3.717-3.717a.789.789,0,0,0,0-1.115.788.788,0,0,0-1.115,0l-3.16,3.16L6.6,7.844a.788.788,0,0,0-1.115,0Z" transform="translate(537.249 1042.75)" fill="red" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        @endif
                                                    </a>
                                                    <!-- Ratting -->
                                                    <div class="rating rating-mr-2 text-dark">
                                                        {{ renderStarRating($shop->rating) }}
                                                        <span class="opacity-60 fs-12">({{ $shop->num_of_reviews }}
                                                            {{ translate('Reviews') }})</span>
                                                    </div>
                                                    <!-- Address -->
                                                    <div class="location fs-12 opacity-70 text-dark mt-1">{{ $shop->meta_title }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col pl-5 pl-md-0 ml-5 ml-md-0">
                                            <div class="d-lg-flex align-items-center justify-content-lg-end">
                                                <div class="d-md-flex justify-content-md-end align-items-md-baseline">
                                                    <!-- Member Since -->
                                                    <div class="pr-md-3 mt-2 mt-md-0 border-md-right">
                                                        <div class="fs-10 fw-400 text-secondary">{{ translate('Member Since') }}</div>
                                                        <div class="mt-1 fs-16 fw-700 text-secondary">{{ date('d M Y',strtotime($shop->created_at)) }}</div>
                                                    </div>










                                                    <!-- Social Links -->
                                                    @if ($shop->facebook || $shop->instagram || $shop->google || $shop->twitter || $shop->youtube)
                                                    <div class="pl-md-3 pr-lg-3 mt-2 mt-md-0 border-lg-right">
                                                        <span class="fs-10 fw-400 text-secondary">{{ translate('Social Media') }}</span><br>
                                                        <ul class="social-md colored-light list-inline mb-0 mt-1">
                                                            @if ($shop->facebook)
                                                            <li class="list-inline-item mr-2">
                                                                <a href="{{ $shop->facebook }}" class="facebook"
                                                                    target="_blank">
                                                                    <i class="lab la-facebook-f"></i>
                                                                </a>
                                                            </li>
                                                            @endif
                                                            @if ($shop->instagram)
                                                            <li class="list-inline-item mr-2">
                                                                <a href="{{ $shop->instagram }}" class="instagram"
                                                                    target="_blank">
                                                                    <i class="lab la-instagram"></i>
                                                                </a>
                                                            </li>
                                                            @endif
                                                            @if ($shop->google)
                                                            <li class="list-inline-item mr-2">
                                                                <a href="{{ $shop->google }}" class="google"
                                                                    target="_blank">
                                                                    <i class="lab la-google"></i>
                                                                </a>
                                                            </li>
                                                            @endif
                                                            @if ($shop->twitter)
                                                            <li class="list-inline-item mr-2">
                                                                <a href="{{ $shop->twitter }}" class="twitter"
                                                                    target="_blank">
                                                                    <i class="lab la-twitter"></i>
                                                                </a>
                                                            </li>
                                                            @endif
                                                            @if ($shop->youtube)
                                                            <li class="list-inline-item">
                                                                <a href="{{ $shop->youtube }}" class="youtube"
                                                                    target="_blank">
                                                                    <i class="lab la-youtube"></i>
                                                                </a>
                                                            </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                    @endif











                                                    <!-- Social Links -->
                                                    @if ($shop->facebook || $shop->instagram || $shop->google || $shop->twitter || $shop->youtube)
                                                    <div class="pl-md-3 pr-lg-3 mt-2 mt-md-0 border-lg-right">
                                                        <span class="fs-10 fw-400 text-secondary">{{ translate('Social Media') }}</span><br>
                                                        <ul class="social-md colored-light list-inline mb-0 mt-1">

                                                            <li class="list-inline-item">
                                                                <svg width="20" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8.25 15C10.9424 15 13.125 12.8174 13.125 10.125C13.125 7.43261 10.9424 5.25 8.25 5.25C5.55761 5.25 3.375 7.43261 3.375 10.125C3.375 12.8174 5.55761 15 8.25 15Z" stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10" />
                                                                    <path d="M14.5698 5.43173C15.2403 5.24281 15.9436 5.19978 16.6321 5.30552C17.3207 5.41126 17.9786 5.66333 18.5615 6.04475C19.1444 6.42616 19.6389 6.92807 20.0115 7.51666C20.3841 8.10525 20.6263 8.76685 20.7217 9.45692C20.8171 10.147 20.7635 10.8495 20.5645 11.5171C20.3655 12.1847 20.0258 12.8019 19.5682 13.3272C19.1107 13.8524 18.5458 14.2735 17.9118 14.5621C17.2777 14.8507 16.5892 15.0001 15.8926 15.0001" stroke="#564FFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M1.49951 18.5059C2.26089 17.4229 3.27166 16.539 4.4465 15.9288C5.62133 15.3186 6.92574 15.0001 8.24959 15C9.57344 14.9999 10.8779 15.3184 12.0528 15.9285C13.2276 16.5386 14.2385 17.4225 14.9999 18.5054" stroke="#564FFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M15.8926 15C17.2166 14.999 18.5213 15.3171 19.6962 15.9273C20.8712 16.5375 21.8819 17.4218 22.6426 18.5054" stroke="#564FFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>

                                                                <span><small><b>{{ count($shop->followers) }}</b> students </small> </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <svg width="20" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" fill="#2563EB" stroke="#2563EB" stroke-width="1.5" stroke-miterlimit="10" />
                                                                    <path d="M15 12L10.5 9V15L15 12Z" fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>


                                                                <span><small><b>{{ $products_count }}</b> courses </small> </span>
                                                            </li>


                                                        </ul>
                                                    </div>
                                                    @endif




                                                </div>
                                                <!-- follow -->
                                                <div class="d-flex justify-content-md-end pl-lg-3 pt-3 pt-lg-0">
                                                    @if(in_array($shop->id, $followed_sellers))
                                                    <a href="{{ route("followed_seller.remove", ['id'=>$shop->id]) }}" data-toggle="tooltip" data-title="{{ translate('Unfollow Seller') }}" data-placement="top"
                                                        class="btn btn-success d-flex align-items-center justify-content-center fs-12 w-190px follow-btn followed"
                                                        style="height: 40px; border-radius: 30px !important; justify-content: center;">
                                                        <i class="las la-check fs-16 mr-2"></i>
                                                        <span class="fw-700">{{ translate('Followed') }}</span> &nbsp; ({{ count($shop->followers) }})
                                                    </a>
                                                    @else
                                                    <a href="{{ route("followed_seller.store", ['id'=>$shop->id]) }}"
                                                        class="btn btn-primary d-flex align-items-center justify-content-center fs-12 w-190px follow-btn"
                                                        style="height: 40px; border-radius: 30px !important; justify-content: center;">
                                                        <i class="las la-plus fs-16 mr-2"></i>
                                                        <span class="fw-700">{{ translate('Follow Seller') }}</span> &nbsp; ({{ count($shop->followers) }})
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>




                        <section class="mt-3 mb-3 bg-white">
                            <div class="container">
                                <!--  Top Menu -->
                                <div class="d-flex flex-wrap justify-content-center justify-content-md-start">
                                    <a class="fw-700 fs-11 fs-md-13 mr-3 mr-sm-4 mr-md-5 text-dark opacity-60 hov-opacity-100 @if (!isset($type)) opacity-100 @endif"
                                        href="{{ route('shop.visit', $shop->slug) }}">{{ translate('Home') }}</a>
                                    <a class="fw-700 fs-11 fs-md-13 mr-3 mr-sm-4 mr-md-5 text-dark opacity-60 hov-opacity-100 @if (isset($type) && $type == 'top-selling') opacity-100 @endif"
                                        href="{{ route('shop.visit.type', ['slug' => $shop->slug, 'type' => 'top-selling']) }}">{{ translate('Top Courses') }}</a>
                                    <a class="fw-700 fs-11 fs-md-13 text-dark opacity-60 hov-opacity-100 @if (isset($type) && $type == 'all-products') opacity-100 @endif"
                                        href="{{ route('shop.visit.type', ['slug' => $shop->slug, 'type' => 'all-products']) }}">{{ translate('All Courses') }}</a>
                                </div>
                            </div>
                        </section>






                        @if (!isset($type))
                        @php
                        $feature_products = $shop->user->products->where('published', 1)->where('approved', 1)->where('seller_featured', 1);
                        @endphp
                        @if (count($feature_products) > 0)
                        <!-- Featured Products -->
                        <section class="mt-3 mb-3" id="section_featured">
                            <div class="container">
                                <!-- Top Section -->
                                <div class="d-flex mb-4 align-items-baseline justify-content-between">
                                    <!-- Title -->
                                    <h3 class="fs-16 fs-md-20 fw-700 mb-3 mb-sm-0">
                                        <span class="">{{ translate('Featured Products') }}</span>
                                    </h3>
                                    <!-- Links -->
                                    <div class="d-flex">
                                        <a type="button" class="arrow-prev slide-arrow text-secondary mr-2" onclick="clickToSlide('slick-prev','section_featured')"><i class="las la-angle-left fs-20 fw-600"></i></a>
                                        <a type="button" class="arrow-next slide-arrow text-secondary ml-2" onclick="clickToSlide('slick-next','section_featured')"><i class="las la-angle-right fs-20 fw-600"></i></a>
                                    </div>
                                </div>
                                <!-- Products Section -->
                                <div class="px-sm-3">
                                    <div class="aiz-carousel sm-gutters-16 arrow-none" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true' data-autoplay='true' data-infinute="true">
                                        @foreach ($feature_products as $key => $product)
                                        <div class="carousel-box px-3 position-relative has-transition hov-animate-outline border-right border-top border-bottom @if ($key == 0) border-left @endif">
                                            @include(
                                            'frontend.home.partials.product_box_2',
                                            ['product' => $product]
                                            )
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </section>
                        @endif

                        <!-- Banner Slider -->
                        <section class="mt-3 mb-3">
                            <div class="container">
                                <div class="aiz-carousel mobile-img-auto-height" data-arrows="true" data-dots="false" data-autoplay="true">
                                    @if ($shop->sliders != null)
                                    @foreach (explode(',', $shop->sliders) as $key => $slide)
                                    <div class="carousel-box w-100 h-140px h-md-300px h-xl-450px">
                                        <img class="d-block lazyload h-100 img-fit" src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($slide) }}" alt="{{ $key }} offer">
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </section>

                        <!-- Coupons -->
                        @php
                        $coupons = get_coupons($shop->user->id);
                        @endphp
                        @if (count($coupons) > 0)
                        <section class="mt-3 mb-3" id="section_coupons">
                            <div class="container">
                                <!-- Top Section -->
                                <div class="d-flex mb-4 align-items-baseline justify-content-between">
                                    <!-- Title -->
                                    <h3 class="fs-16 fs-md-20 fw-700 mb-3 mb-sm-0">
                                        <span class="pb-3">{{ translate('Coupons') }}</span>
                                    </h3>
                                    <!-- Links -->
                                    <div class="d-flex">
                                        <a type="button" class="arrow-prev slide-arrow link-disable text-secondary mr-2" onclick="clickToSlide('slick-prev','section_coupons')"><i class="las la-angle-left fs-20 fw-600"></i></a>
                                        <a class="text-blue fs-12 fw-700 hov-text-primary" href="{{ route('shop.visit.type', ['slug' => $shop->slug, 'type' => 'cupons']) }}">{{ translate('View All') }}</a>
                                        <a type="button" class="arrow-next slide-arrow text-secondary ml-2" onclick="clickToSlide('slick-next','section_coupons')"><i class="las la-angle-right fs-20 fw-600"></i></a>
                                    </div>
                                </div>
                                <!-- Coupons Section -->
                                <div class="aiz-carousel sm-gutters-16 arrow-none" data-items="3" data-lg-items="2" data-sm-items="1" data-arrows='true' data-infinite='false'>
                                    @foreach ($coupons->take(10) as $key => $coupon)
                                    <div class="carousel-box">
                                        @include('frontend.partials.coupon_box', ['coupon' => $coupon])
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                        @endif

                        @if ($shop->banner_full_width_1)
                        <!-- Banner full width 1 -->
                        @foreach (explode(',', $shop->banner_full_width_1) as $key => $banner)
                        <section class="container mb-3 mt-3">
                            <div class="w-100">
                                <img class="d-block lazyload h-100 img-fit"
                                    src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                                    data-src="{{ uploaded_asset($banner) }}" alt="{{ env('APP_NAME') }} offer">
                            </div>
                        </section>
                        @endforeach
                        @endif

                        @if ($shop->banners_half_width)
                        <!-- Banner half width -->
                        <section class="container  mb-3 mt-3">
                            <div class="row gutters-16">
                                @foreach (explode(',', $shop->banners_half_width) as $key => $banner)
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <div class="w-100">
                                        <img class="d-block lazyload h-100 img-fit"
                                            src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                                            data-src="{{ uploaded_asset($banner) }}" alt="{{ env('APP_NAME') }} offer">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </section>
                        @endif

                        @endif

                        <section class="mb-3 mt-3" id="section_types">
                            <div class="container">
                                <!-- Top Section -->
                                <div class="d-flex mb-4 align-items-baseline justify-content-between">
                                    <!-- Title -->
                                    <h3 class="fs-16 fs-md-20 fw-700 mb-3 mb-sm-0">
                                        <span class="pb-3">
                                            @if (!isset($type))
                                            {{ translate('About Me') }}
                                            @elseif ($type == 'top-selling')
                                            {{ translate('Top Courses') }}

                                            @endif
                                        </span>
                                    </h3>
                                    @if (!isset($type))
                                    <!-- Links -->
                                    <div class="d-flex">
                                        <a type="button" class="arrow-prev slide-arrow link-disable text-secondary mr-2" onclick="clickToSlide('slick-prev','section_types')"><i class="las la-angle-left fs-20 fw-600"></i></a>
                                        <a type="button" class="arrow-next slide-arrow text-secondary ml-2" onclick="clickToSlide('slick-next','section_types')"><i class="las la-angle-right fs-20 fw-600"></i></a>
                                    </div>
                                    @endif
                                </div>

                                @php
                                if (!isset($type)){
                                $products = get_seller_products($shop->user->id);
                                }
                                elseif ($type == 'top-selling'){
                                $products = get_shop_best_selling_products($shop->user->id);
                                }
                                elseif ($type == 'cupons'){
                                $coupons = get_coupons($shop->user->id , 24);
                                }
                                @endphp

                                @if (!isset($type))
                                <!-- About Me Section -->

                                <p>
                                    {{ $shop->meta_description }}
                                </p>

                                @if ($shop->banner_full_width_2)
                                <!-- Banner full width 2 -->
                                @foreach (explode(',', $shop->banner_full_width_2) as $key => $banner)
                                <div class="mt-3 mb-3 w-100">
                                    <img class="d-block lazyload h-100 img-fit"
                                        src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                                        data-src="{{ uploaded_asset($banner) }}" alt="{{ env('APP_NAME') }} offer">
                                </div>
                                @endforeach
                                @endif


                                @elseif ($type == 'all-products')
                                <!-- All Courses Section -->
                                <form class="" id="search-form" action="" method="GET">
                                    <div class="row gutters-16 justify-content-center">
                                        <!-- Sidebar -->
                                        <div class="col-xl-3 col-md-6 col-sm-8">

                                            <!-- Sidebar Filters -->
                                            <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-xl sidebar-right z-1035">
                                                <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                                                <div class="collapse-sidebar c-scrollbar-light text-left">
                                                    <div class="d-flex d-xl-none justify-content-between align-items-center pl-3 border-bottom">
                                                        <h3 class="h6 mb-0 fw-600">{{ translate('Filters') }}</h3>
                                                        <button type="button" class="btn btn-sm p-2 filter-sidebar-thumb" data-toggle="class-toggle" data-target=".aiz-filter-sidebar">
                                                            <i class="las la-times la-2x"></i>
                                                        </button>
                                                    </div>

                                                    <!-- Categories -->
                                                    <div class="bg-white border mb-4 mx-3 mx-xl-0 mt-3 mt-xl-0">
                                                        <div class="fs-16 fw-700 p-3">
                                                            <a href="#collapse_1" class="dropdown-toggle filter-section text-dark d-flex align-items-center justify-content-between" data-toggle="collapse">
                                                                {{ translate('Categories') }}
                                                            </a>
                                                        </div>
                                                        <div class="collapse show px-3" id="collapse_1">
                                                            @foreach (get_categories_by_products($shop->user->id) as $category)
                                                            <label class="aiz-checkbox mb-3">
                                                                <input
                                                                    type="checkbox"
                                                                    name="selected_categories[]"
                                                                    value="{{ $category->id }}" @if (in_array($category->id, $selected_categories)) checked @endif
                                                                onchange="filter()"
                                                                >
                                                                <span class="aiz-square-check"></span>
                                                                <span class="fs-14 fw-400 text-dark">{{ $category->getTranslation('name') }}</span>
                                                            </label>
                                                            <br>
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                  

                                                    <!-- Ratings -->
                                                    <div class="bg-white border mb-4 mx-3 mx-xl-0 mt-3 mt-xl-0">
                                                        <div class="fs-16 fw-700 p-3">
                                                            <a href="#collapse_2" class="dropdown-toggle filter-section text-dark d-flex align-items-center justify-content-between" data-toggle="collapse">
                                                                {{ translate('Ratings') }}
                                                            </a>
                                                        </div>
                                                        <div class="collapse show px-3" id="collapse_2">
                                                            <label class="aiz-checkbox mb-3">
                                                                <input
                                                                    type="radio"
                                                                    name="rating"
                                                                    value="5" @if ($rating==5) checked @endif
                                                                    onchange="filter()">
                                                                <span class="aiz-square-check"></span>
                                                                <span class="rating rating-mr-2">{{ renderStarRating(5) }}</span>
                                                            </label>
                                                            <br>
                                                            <label class="aiz-checkbox mb-3">
                                                                <input
                                                                    type="radio"
                                                                    name="rating"
                                                                    value="4" @if ($rating==4) checked @endif
                                                                    onchange="filter()">
                                                                <span class="aiz-square-check"></span>
                                                                <span class="rating rating-mr-2">{{ renderStarRating(4) }}</span>
                                                                <span class="fs-14 fw-400 text-dark">{{ translate('And Up') }}</span>
                                                            </label>
                                                            <br>
                                                            <label class="aiz-checkbox mb-3">
                                                                <input
                                                                    type="radio"
                                                                    name="rating"
                                                                    value="3" @if ($rating==3) checked @endif
                                                                    onchange="filter()">
                                                                <span class="aiz-square-check"></span>
                                                                <span class="rating rating-mr-2">{{ renderStarRating(3) }}</span>
                                                                <span class="fs-14 fw-400 text-dark">{{ translate('And Up') }}</span>
                                                            </label>
                                                            <br>
                                                            <label class="aiz-checkbox mb-3">
                                                                <input
                                                                    type="radio"
                                                                    name="rating"
                                                                    value="2" @if ($rating==2) checked @endif
                                                                    onchange="filter()">
                                                                <span class="aiz-square-check"></span>
                                                                <span class="rating rating-mr-2">{{ renderStarRating(2) }}</span>
                                                                <span class="fs-14 fw-400 text-dark">{{ translate('And Up') }}</span>
                                                            </label>
                                                            <br>
                                                            <label class="aiz-checkbox mb-3">
                                                                <input
                                                                    type="radio"
                                                                    name="rating"
                                                                    value="1" @if ($rating==1) checked @endif
                                                                    onchange="filter()">
                                                                <span class="aiz-square-check"></span>
                                                                <span class="rating rating-mr-2">{{ renderStarRating(1) }}</span>
                                                                <span class="fs-14 fw-400 text-dark">{{ translate('And Up') }}</span>
                                                            </label>
                                                            <br>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Contents -->
                                        <div class="col-xl-9">
                                            <!-- Top Filters -->
                                            <div class="text-left mb-2">
                                                <div class="row gutters-5 flex-wrap">
                                                    <div class="col-lg col-10">
                                                        <h1 class="fs-20 fs-md-24 fw-700 text-dark">
                                                            {{ translate('All Courses') }}
                                                        </h1>
                                                    </div>
                                                    <div class="col-2 col-lg-auto d-xl-none mb-lg-3 text-right">
                                                        <button type="button" class="btn btn-icon p-0" data-toggle="class-toggle" data-target=".aiz-filter-sidebar">
                                                            <i class="la la-filter la-2x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-6 col-lg-auto mb-3 w-lg-200px">
                                                        <select class="form-control form-control-sm aiz-selectpicker rounded-0" name="sort_by" onchange="filter()">
                                                            <option value="">{{ translate('Sort by') }}</option>
                                                            <option value="newest" @isset($sort_by) @if ($sort_by=='newest' ) selected @endif @endisset>{{ translate('Newest') }}</option>
                                                            <option value="oldest" @isset($sort_by) @if ($sort_by=='oldest' ) selected @endif @endisset>{{ translate('Oldest') }}</option>
                                                            <option value="price-asc" @isset($sort_by) @if ($sort_by=='price-asc' ) selected @endif @endisset>{{ translate('Price low to high') }}</option>
                                                            <option value="price-desc" @isset($sort_by) @if ($sort_by=='price-desc' ) selected @endif @endisset>{{ translate('Price high to low') }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>










                                            <div class="card_shadow shadow_sec_padd">





                                                <div class="row">

                                                    @foreach ($products as $key => $product)
                                                    @include('frontend.home.partials.product_box_2', ['product' => $product])
                                                    @endforeach

                                                </div>

                                            </div>











                                            <div class="aiz-pagination mt-4">
                                                {{ $products->appends(request()->input())->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @else
                                <!-- Top Courses Products Section -->
                                <div class="px-3">
                                    <div class="row gutters-16 row-cols-xxl-6 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 border-left border-top">
                                    @foreach ($products as $key => $product)
                                                    @include('frontend.home.partials.product_box_2', ['product' => $product])
                                                    @endforeach
                                    </div>
                                </div>
                                <div class="aiz-pagination mt-4 mb-4">
                                    {{ $products->links() }}
                                </div> @endif
                            </div>
                        </section>






                    </div>





                </div>



            </div>
        </div>
</section>









@endsection

@section('script')
<script type="text/javascript">
    function filter() {
        $('#search-form').submit();
    }

    function rangefilter(arg) {
        $('input[name=min_price]').val(arg[0]);
        $('input[name=max_price]').val(arg[1]);
        filter();
    }
</script>
@endsection