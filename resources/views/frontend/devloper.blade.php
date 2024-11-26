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
    <meta name="twitter:creator"
        content="@author_handle">
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
    <link rel="stylesheet" href="{{ static_asset('assets/css/bootstrap-rtl.min.css') }}"> @endif
<link rel="stylesheet"
        href="{{ static_asset('assets/css/aiz-core.css?v=') }}{{ rand(1000, 9999) }}">
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

            $products_count = count(get_seller_products($shop->user->id));

        @endphp


@php

    $products = get_shop_best_selling_products($shop->user->id);

@endphp


        <section class="section dashboard ">
            <div class="container-xxl">
                <div class="row">
                    <!-- Left side columns -->
                    <div class="col-lg-12 p-lg-0 mb-3">
                        <!-- card_shadow sec -->
                        <div class="card_shadow shadow_sec_padd">
                            <div class="d-flex justify-content-between mb-3 ">
                                <div class="heading_sec">
                                    <h2 class="main_heading">About Teacher
                                    </h2>
                                </div>
                                <div class="heading_sec">
                                    <a href="#" class="see_all_text">
                                        <svg width="26" height="25" viewBox="0 0 26 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1_6447)">
                                                <path
                                                    d="M22.5766 4.03376C22.0233 3.58664 21.3663 3.23195 20.6433 2.98996C19.9202 2.74797 19.1452 2.62341 18.3625 2.62341C17.5798 2.62341 16.8047 2.74797 16.0817 2.98996C15.3586 3.23195 14.7016 3.58664 14.1483 4.03376L13 4.96126L11.8516 4.03376C10.734 3.13103 9.21809 2.62388 7.63747 2.62388C6.05685 2.62388 4.54097 3.13103 3.4233 4.03376C2.30563 4.93649 1.67773 6.16086 1.67773 7.43751C1.67773 8.71416 2.30563 9.93853 3.4233 10.8413L13 18.5763L22.5766 10.8413C23.1302 10.3943 23.5693 9.86372 23.869 9.2797C24.1686 8.69567 24.3228 8.06969 24.3228 7.43751C24.3228 6.80533 24.1686 6.17935 23.869 5.59532C23.5693 5.0113 23.1302 4.48067 22.5766 4.03376Z"
                                                    stroke="#616161" stroke-width="4" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1_6447">
                                                    <rect width="26" height="21" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </a>

                                    
                                    <button class="btn btn-sm btn-soft-secondary-base rounded-0 hov-svg-white hov-text-white" data-bs-toggle="modal" data-bs-target="#chat_modal"
                                        onclick="show_chat_modal()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="mr-2 has-transition">
                                            <g id="Group_23918" data-name="Group 23918" transform="translate(1053.151 256.688)">
                                                <path id="Path_3012" data-name="Path 3012" d="M134.849,88.312h-8a2,2,0,0,0-2,2v5a2,2,0,0,0,2,2v3l2.4-3h5.6a2,2,0,0,0,2-2v-5a2,2,0,0,0-2-2m1,7a1,1,0,0,1-1,1h-8a1,1,0,0,1-1-1v-5a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1Z" transform="translate(-1178 -341)" fill="#f4b650" />
                                                <path id="Path_3013" data-name="Path 3013" d="M134.849,81.312h8a1,1,0,0,1,1,1v5a1,1,0,0,1-1,1h-.5a.5.5,0,0,0,0,1h.5a2,2,0,0,0,2-2v-5a2,2,0,0,0-2-2h-8a2,2,0,0,0-2,2v.5a.5.5,0,0,0,1,0v-.5a1,1,0,0,1,1-1" transform="translate(-1182 -337)" fill="#f4b650" />
                                                <path id="Path_3014" data-name="Path 3014" d="M131.349,93.312h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1" transform="translate(-1181 -343.5)" fill="#f4b650" />
                                                <path id="Path_3015" data-name="Path 3015" d="M131.349,99.312h5a.5.5,0,1,1,0,1h-5a.5.5,0,1,1,0-1" transform="translate(-1181 -346.5)" fill="#f4b650" />
                                            </g>
                                        </svg>

                                        {{ translate('Message Techer') }}
                                    </button>
                                </div>
                            </div>

                            <div
                                class="d-flex justify-content-between mb-3 flex-lg-row flex-md-row flex-sm-column flex-column">
                                <div class=" profile-card d-flex flex-column align-items-center">

                                 

                                    <img src="{{ uploaded_asset($shop->logo) }}" alt="Profile" class="rounded-circle mb-3">
                                    <h5>    {{ $shop->name }}</h5>
                                    <h6>{{ $shop->meta_title }}</h6>
                                      <!-- Ratting -->
                            <div class="rating rating-mr-2 text-dark">
                                {{ renderStarRating($shop->rating) }}
                                
                              </div>
                                    <div class="social-links mt-2">
                                        @if ($shop->facebook || $shop->instagram || $shop->google || $shop->twitter || $shop->youtube)
                            <div class="pl-md-3 pr-lg-3 mt-2 mt-md-0 border-lg-right">
                    
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
                            </div> @endif
                                    </div>
                                </div>

                                <div class="dev_info">
    <h5>I am a Teacher</h5>

    <p>
        {{ $shop->meta_description }} </p>
    </div>
    <div class="heading_sec dev_info">
        <a href="#" class="see_all_text">
            <div class="button_view">
                <a type="button" class="btn btn-primary btn-sm" href="chat_developer.php">Chat </a>


            </div>

        </a>
    </div>
    </div>



    </div>


    </div>
    <!-- End card_shadow -->

    <div class="col-lg-6 mb-3">
        <div class="card_shadow shadow_sec_padd">
            <div class="d-flex justify-content-between mb-3">
                <div class="heading_sec">
                    <h2 class="main_heading">My Portfolio</h2>
                </div>
                <div class="heading_sec">
                    <a href="#" class="see_all_text">
                        <p>Seel all</p>

                    </a>
                </div>
            </div>

            <div class="portfolio_img">
              
                <div class="row mb-3">


                    @foreach ($products as $key => $product)
                    <div class="col-lg-6">
                      
                        <img src="{{ uploaded_asset($product->thumbnail_img) }}" alt=" portfoli" class="img-fluid w-100">
                        
                    </div>
                @endforeach

                 
                   

                  
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6  mb-3">
        <div class="card_shadow shadow_sec_padd">
            <div class="d-flex justify-content-between ">
                <div class="heading_sec">
                    <h2 class="main_heading">Course Reviews</h2>
                </div>
                <div class="heading_sec">
                    <a href="#" class="see_all_text">
                        <p> Seel all</p>

                    </a>
                </div>
            </div>

            <div class="portfolio_img">

                <span>
                    <svg width="74" height="16" viewBox="0 0 74 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21.398 13.8333L22.3459 9.73542L19.1667 6.97917L23.3667 6.61458L25.0001 2.75L26.6334 6.61458L30.8334 6.97917L27.6542 9.73542L28.6022 13.8333L25.0001 11.6604L21.398 13.8333Z"
                            fill="#1D1B20" />
                        <path
                            d="M63.398 13.8333L64.3459 9.73542L61.1667 6.97917L65.3667 6.61458L67.0001 2.75L68.6334 6.61458L72.8334 6.97917L69.6542 9.73542L70.6022 13.8333L67.0001 11.6604L63.398 13.8333Z"
                            fill="#1D1B20" />
                        <path
                            d="M49.398 13.8333L50.3459 9.73542L47.1667 6.97917L51.3667 6.61458L53.0001 2.75L54.6334 6.61458L58.8334 6.97917L55.6542 9.73542L56.6022 13.8333L53.0001 11.6604L49.398 13.8333Z"
                            fill="#1D1B20" />
                        <path
                            d="M35.398 13.8333L36.3459 9.73542L33.1667 6.97917L37.3667 6.61458L39.0001 2.75L40.6334 6.61458L44.8334 6.97917L41.6542 9.73542L42.6022 13.8333L39.0001 11.6604L35.398 13.8333Z"
                            fill="#1D1B20" />
                        <path
                            d="M4.12612 14.6667L5.27716 9.98333L1.41675 6.83333L6.51675 6.41667L8.50008 2L10.4834 6.41667L15.5834 6.83333L11.723 9.98333L12.874 14.6667L8.50008 12.1833L4.12612 14.6667Z"
                            fill="#1D1B20" />
                    </svg>
                    4.9

                </span>
                <table class="table">

                    <tbody>
                        <tr>
                            <th scope="row">Seller Communication level</th>
                            <td>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.398 11.8333L3.34591 7.73542L0.166748 4.97917L4.36675 4.61458L6.00008 0.75L7.63341 4.61458L11.8334 4.97917L8.65425 7.73542L9.60217 11.8333L6.00008 9.66042L2.398 11.8333Z"
                                        fill="#1D1B20" />
                                </svg>
                                4.9

                            </td>

                        </tr>
                        <tr>
                            <th scope="row">Recommend to a friend</th>
                            <td>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.398 11.8333L3.34591 7.73542L0.166748 4.97917L4.36675 4.61458L6.00008 0.75L7.63341 4.61458L11.8334 4.97917L8.65425 7.73542L9.60217 11.8333L6.00008 9.66042L2.398 11.8333Z"
                                        fill="#1D1B20" />
                                </svg>
                                4.9

                            </td>

                        </tr>
                        <tr>
                            <th scope="row">Recommend to a friend</th>
                            <td>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.398 11.8333L3.34591 7.73542L0.166748 4.97917L4.36675 4.61458L6.00008 0.75L7.63341 4.61458L11.8334 4.97917L8.65425 7.73542L9.60217 11.8333L6.00008 9.66042L2.398 11.8333Z"
                                        fill="#1D1B20" />
                                </svg>
                                4.9

                            </td>

                        </tr>
                        <tr>
                            <th scope="row"> Total reviews</th>
                            <td>

                                108

                            </td>

                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div><!-- End Left side columns -->

    <!-- End Right side columns -->

    </div>
    </div>
    </section>
    <div class="modal fade" id="chat_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
        <div class="modal-content position-relative">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title fw-600 h5">{{ translate('Any query about this Course') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Modal Form -->
            <form action="{{ route('conversations.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="receiver_id" value="{{ $shop->user->id }}">
                <div class="modal-body gry-bg px-3 pt-3">
                    <!-- Title -->
                    <div class="form-group">
                        <input type="text" class="form-control mb-3 rounded-0" name="title"
                            placeholder="{{ translate('Title') }}" required>
                    </div>

                    <!-- Message -->
                    <div class="form-group">
                        <textarea class="form-control rounded-0" rows="4" name="message" required
                            placeholder="{{ translate('Description') }}"></textarea>
                    </div>

                    <!-- Days Delivery -->
                    <div class="form-group">
                        <label for="delivery_days">{{ translate('Days Delivery') }}</label>
                        <input type="number" class="form-control rounded-0" id="delivery_days" name="delivery_days"
                            placeholder="{{ translate('Enter the number of days') }}" required>
                    </div>

                    <!-- Offer Price -->
                    <div class="form-group">
                        <label for="offer_price">{{ translate('Offer Price') }}</label>
                        <input type="text" class="form-control rounded-0" id="offer_price" name="offer_price"
                            placeholder="{{ translate('Enter your offer price') }}" required>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary fw-600 rounded-0"
                        data-dismiss="modal">{{ translate('Cancel') }}</button>
                    <button type="submit" class="btn btn-primary fw-600 rounded-0 w-100px">{{ translate('Send') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>



    @section('script')
    <script type="text/javascript">
       
    
    
    
    
    
    
        function show_chat_modal() {
            @if(Auth::check())
            $('#chat_modal').modal('show');
            @else
            $('#login_modal').modal('show');
            @endif
        }
    </script>

@endsection



@endsection
