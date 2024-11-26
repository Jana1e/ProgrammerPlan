@extends('frontend.layouts.user_panel')

@section('panel_content')
    <div class="aiz-titlebar mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <b class="fs-20 fw-700 text-dark">{{ translate('Wishlist')}}</b>
            </div>
        </div>
    </div>
  
        <div class="">
            @forelse(get_user_wishlist() as $key => $wishlist)
            <div class="aiz-card-box col py-3 text-center border-right border-bottom has-transition hov-shadow-out z-1" id="wishlist_{{ $wishlist->id }}">
                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden mb-3">
                    <!-- Image -->
                    <a href="{{ route('product', $wishlist->product->slug) }}" class="d-block h-100">
                        <img src="{{ uploaded_asset($wishlist->product->thumbnail_img) }}" class="lazyload mx-auto img-fit"
                            title="{{ $wishlist->product->getTranslation('name') }}">
                    </a>
                    <!-- Remove from wishlisht -->
                    <div class="absolute-top-right aiz-p-hov-icon">
                        <a href="javascript:void(0)" onclick="removeFromWishlist({{ $wishlist->id }})" data-toggle="tooltip" data-title="{{ translate('Remove from wishlist') }}" data-placement="left">
                            <i class="la la-trash"></i>
                        </a>
                    </div>
                    <!-- add to cart -->
                    <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex justify-content-center align-items-center" 
                href="{{ route('product', $wishlist->product->slug) }}" onclick="showAddToCartModal({{ $wishlist->product->id }})">{{ $wishlist->product->getTranslation('name') }}</a>
                </div>
               
                
            </div>
            @empty
            <div class="row">
                <div class="col">
                    <div class="text-center bg-white p-4 border">
                        <img class="mw-100 h-200px" src="{{ static_asset('assets/img/nothing.svg') }}" alt="Image">
                        <h5 class="mb-0 h5 mt-3">{{ translate("There isn't anything added yet")}}</h5>
                    </div>
                </div>
            </div>
            @endforelse



        </div>
   
    <!-- Pagination -->
    <div class="aiz-pagination">
        {{ $wishlists->links() }}
    </div>
@endsection

@section('modal')
    <!-- add To Cart Modal -->
    <div class="modal fade" id="addToCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader">
                    <i class="fa fa-spin fa-spinner"></i>
                </div>
                <button type="button" class="close absolute-close-btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div id="addToCart-modal-body">

                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        function removeFromWishlist(id){
            $.post('{{ route('wishlists.remove') }}',{_token:'{{ csrf_token() }}', id:id}, function(data){
                $('#wishlist').html(data);
                $('#wishlist_'+id).hide();
                AIZ.plugins.notify('success', '{{ translate("Item has been renoved from wishlist") }}');
            })
        }
    </script>
@endsection
