@extends('frontend.layouts.app')

@section('meta_title'){{ $detailedProduct->meta_title }}@stop

@section('meta_description'){{ $detailedProduct->meta_description }}@stop

@section('meta_keywords'){{ $detailedProduct->tags }}@stop

@section('meta')
    @php
        $availability = "out of stock";
        $qty = 0;
        if($detailedProduct->variant_product) {
            foreach ($detailedProduct->stocks as $key => $stock) {
                $qty += $stock->qty;
            }
        }
        else {
            $qty = optional($detailedProduct->stocks->first())->qty;
        }
        if($qty > 0){
            $availability = "in stock";
        }
    @endphp
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $detailedProduct->meta_title }}">
    <meta itemprop="description" content="{{ $detailedProduct->meta_description }}">
    <meta itemprop="image" content="{{ uploaded_asset($detailedProduct->meta_img) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ $detailedProduct->meta_title }}">
    <meta name="twitter:description" content="{{ $detailedProduct->meta_description }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ uploaded_asset($detailedProduct->meta_img) }}">
  
    <meta name="twitter:label1" content="Price">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $detailedProduct->meta_title }}" />
    <meta property="og:type" content="og:product" />
    <meta property="og:url" content="{{ route('product', $detailedProduct->slug) }}" />
    <meta property="og:image" content="{{ uploaded_asset($detailedProduct->meta_img) }}" />
    <meta property="og:description" content="{{ $detailedProduct->meta_description }}" />
    <meta property="og:site_name" content="{{ get_setting('meta_title') }}" />
   
    <meta property="product:brand" content="{{ $detailedProduct->brand ? $detailedProduct->brand->name : env('APP_NAME') }}">
    <meta property="product:availability" content="{{ $availability }}">
    <meta property="product:condition" content="new">
    <meta property="product:price:amount" content="{{ number_format($detailedProduct->unit_price, 2) }}">
    <meta property="product:retailer_item_id" content="{{ $detailedProduct->slug }}">
    <meta property="product:price:currency"
        content="{{ get_system_default_currency()->code }}" />
    <meta property="fb:app_id" content="{{ env('FACEBOOK_PIXEL_ID') }}">
@endsection

@section('content')
<section class="add_courrse">
    <div class="container-fluid">
        <div class="row">
            <div class="pagetitle">
                <h1>
                    Student Courses</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="courses.php">Course</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Student Courses 
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 position-relative">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-3">
                                    <img class="img-fluid rounded-top  mb-3 w-100" src="../assets/img/c01.png" alt="course">
                                </div>
                                <div class="col-lg-6">
                                    <h2>Full Stack Web Development</h2>
                                 
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                                    </p>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#" class="heart_btn"> <i class="bi bi-heart fs-4 fw-semibold"></i></a>
                                    <div class="button_view float-end">
                                        <a type="button" class="btn btn-primary btn-sm" href="" target="_blank">Add Course</a>



                                    </div>
                                </div>
                            </div>
                            <!-- <h4>Full Stack Web Development</h4> -->
                            <h4>Courses Information</h4>
                            <ul class="list-group mb-3 list-group-flush">
                                <li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0">Starts From April 23</span>
                                    <a href="javascript:void(0);" class="add-wishlist-btn">
                                        <i class="la la-heart-o outline"></i>
                                        <i class="fa fa-heart"></i>
                                        <span>450</span>
                                    </a>
                                </li>
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span class="mb-0">Duration :</span><strong>12 Months</strong>
                                </li>
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span class="mb-0">Price :</span><strong>Free</strong>
                                </li>
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span class="mb-0">Professor :</span><strong>Jack Ronan</strong>
                                </li>
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span><i class="fa fa-graduation-cap text-primary me-2"></i>Student</span><strong>+120</strong>
                                </li>
                            </ul>
                            <a href="course_details.php" class="btn btn-primary">Start Course</a>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>



@endsection
