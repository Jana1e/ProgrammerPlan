@extends('frontend.layouts.app')

@section('meta_title'){{ $detailedProduct->meta_title }}@stop

@section('meta_description'){{ $detailedProduct->meta_description }}@stop

@section('meta_keywords'){{ $detailedProduct->tags }}@stop

@section('meta')
@php
$availability = 'out of stock';
$qty = 0;
if ($detailedProduct->variant_product) {
foreach ($detailedProduct->stocks as $key => $stock) {
$qty += $stock->qty;
}
} else {
$qty = optional($detailedProduct->stocks->first())->qty;
}
if ($qty > 0) {
$availability = 'in stock';
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
                                    <img class="img-fluid rounded-top  mb-3 w-100" src="{{ get_image($detailedProduct->thumbnail) }}" alt="course">



                                </div>

                                <div class="col-lg-6">
                                    <h2> {{ $detailedProduct->getTranslation('name') }}</h2>

                                    <!-- Description, Video, Downloads -->
                                    <?php echo $detailedProduct->getTranslation('description'); ?>
                                </div>
                                <div class="col-lg-3">
                                    <a href="javascript:void(0)" class="hov-svg-white  heart_btn" onclick="addToWishList({{ $detailedProduct->id }})"
                                        data-toggle="tooltip" data-title="{{ translate('Add to wishlist') }}" data-placement="left" > <i class="bi bi-heart fs-4 fw-semibold"></i></a>
                                   
                                    <div class="button_view float-end">

                                        <button class="btn btn btn-primary btn-sm  btn-sm btn-soft-secondary-base rounded-0 hov-svg-white hov-text-white" data-bs-toggle="modal" data-bs-target="#chat_modal"
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

                 

                                    @if ($isSubscribed)
                                    <a href="javascript:void(0);"
                                       onclick="product_review('{{ $detailedProduct->id }}')"
                                       class="btn btn-primary btn-sm rounded-0">
                                        {{ translate('Review') }}
                                    </a>
                               
                                @endif
                                






                                    </div>
                                </div>
                            </div>
                            <!-- <h4>Full Stack Web Development</h4> -->
                            <h4>Courses Information</h4>
                            <ul class="list-group mb-3 list-group-flush">
                                <li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0">Starts From {{ \Carbon\Carbon::createFromTimestamp($detailedProduct->duration_start_date)->format('F d') }}

                                </span>
                                    <a href="javascript:void(0);" class="add-wishlist-btn">
                                      
                                        <i class="fa fa-heart"></i>
                                        <span>{{$detailedProduct->wishlistCount()}}</span>
                                    </a>
                                </li>
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span class="mb-0">Duration :</span><strong>


                                        @php
                                        $startDate = \Carbon\Carbon::createFromTimestamp($detailedProduct->duration_start_date);
                                        $endDate = \Carbon\Carbon::createFromTimestamp($detailedProduct->duration_end_date);  
                                        $durationMonths = $startDate->diffInMonths($endDate);
                                        $durationDays = $startDate->diffInDays($endDate);





                                        
                                    @endphp
                                    
                                    @if($durationMonths >= 1)
                                    {{ $durationMonths }} Months
                                    @else
                                         {{ $durationDays }} Days
                                    @endif
                                    


                                    </strong>
                                </li>
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span class="mb-0">Price :</span><strong>Free</strong>
                                </li>
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span class="mb-0">Professor :</span><strong>{{ $detailedProduct->user->shop->name??"" }} </strong>
                                </li>
                                <li class="list-group-item px-0 d-flex justify-content-between">


                                    @php
                                
                                    $userCount = \App\Models\UserProgress::getUserCountByCourse($detailedProduct->id);
                                @endphp

                                    <span><i class="fa fa-graduation-cap text-primary me-2"></i>Student</span><strong>+{{ $userCount }}</strong>
                                </li>
                            </ul>

                            @if (!$isSubscribed)


                            <form action="{{ route('startCourse', $detailedProduct->id) }}" method="POST">
                                @csrf


                                <button type="submit" class="btn btn-primary">Start Course</button>
                            </form>
                            @else
                            <a href="{{ route('courses.show', $detailedProduct->id) }}" class="btn btn-primary">Complate Course</a> @endif
                        </div>
                    </div>
                </div>

            </div>

            <div class="bg-white mb-4 border p-3 p-sm-4 card">
                <!-- Tabs -->
                <div class="nav aiz-nav-tabs">
                    <a href="#tab_default_1" data-toggle="tab"
                        class="mr-5 pb-2 fs-16 fw-700 text-reset active show">{{ translate('Description') }}</a>
                    @if ($detailedProduct->video_link != null)
                        <a href="#tab_default_2" data-toggle="tab"
                            class="mr-5 pb-2 fs-16 fw-700 text-reset">{{ translate('Video') }}</a>
                    @endif
                    @if ($detailedProduct->pdf != null)
                        <a href="#tab_default_3" data-toggle="tab"
                            class="mr-5 pb-2 fs-16 fw-700 text-reset">{{ translate('Downloads') }}</a>
                    @endif
                </div>
            
                <!-- Description -->
                <div class="tab-content pt-0">
                    <!-- Description -->
                    <div class="tab-pane fade active show" id="tab_default_1">
                        <div class="py-5">
                            <div class="mw-100 overflow-hidden text-left aiz-editor-data">
                                <?php echo $detailedProduct->getTranslation('description'); ?>
                            </div>
                        </div>
                    </div>
            
                    <!-- Video -->
                    <div class="tab-pane fade" id="tab_default_2">
                        <div class="py-5">
                            <div class="embed-responsive embed-responsive-16by9">
                                @if (get_youtube_video_id($detailedProduct->video_link))
                               
                                    <iframe class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/{{ get_youtube_video_id($detailedProduct->video_link) }}" ></iframe>
                              
                                @endif
                            </div>
                        </div>
                    </div>
                    
            
            
            
            
            
            
            
            
            
            
            
                    <!-- Download -->
                    <div class="tab-pane fade" id="tab_default_3">
                        <div class="py-5 text-center ">
                            <a href="{{ uploaded_asset($detailedProduct->pdf) }}"
                                class="btn btn-primary">{{ translate('Download') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            


        </div>
    </div>
</section>














<div class="modal fade" id="chat_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
        <div class="modal-content position-relative">
            <div class="modal-header">
                <h5 class="modal-title fw-600 h5">{{ translate('Any query about this Course') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>



            <form class="" action="{{ route('conversations.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
       
                <input type="hidden" name="receiver_id" value="{{ $detailedProduct->user_id }}">
                <div class="modal-body gry-bg px-3 pt-3">
                    <div class="form-group">
                        <input type="text" class="form-control mb-3 rounded-0" name="title"
                            value="{{ $detailedProduct->name }}" placeholder="{{ translate('Course Name') }}"
                            required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control rounded-0" rows="8" name="message" required
                            placeholder="{{ translate('Your Question') }}">{{ route('product', $detailedProduct->slug) }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary fw-600 rounded-0"
                        data-dismiss="modal">{{ translate('Cancel') }}</button>
                    <button type="submit" class="btn btn-primary fw-600 rounded-0 w-100px">{{ translate('Send') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection


@section('modal')
    <!-- Product Review Modal -->
    <div class="modal fade" id="product-review-modal">
        <div class="modal-dialog">
            <div class="modal-content" id="product-review-modal-content">

            </div>
        </div>
    </div>


    @endsection




@section('script')
<script type="text/javascript">
   

   function product_review(product_id) {
            $.post('{{ route('product_review_modal') }}', {
                _token: '{{ @csrf_token() }}',
                product_id: product_id
            }, function(data) {
                $('#product-review-modal-content').html(data);
                $('#product-review-modal').modal('show', {
                    backdrop: 'static'
                });
                AIZ.extra.inputRating();
            });
        }




    function show_chat_modal() {
        @if(Auth::check())
        $('#chat_modal').modal('show');
        @else
        $('#login_modal').modal('show');
        @endif
    }
</script>
@endsection