@extends('frontend.layouts.user_panel')

@section('panel_content')
 
        <div class="profile_form">
            <div class="d-flex justify-content-between">
                <div>
                    <h5>My Work</h5>
                </div>
                <div>
                    <div class=" text-center">
                        <a href="#" class="hk_btns text-white rounded-2" data-bs-toggle="modal" data-bs-target="#AddPortfolioModal">
                            +Add New Work

                            
                        </a>
                    </div>
                </div>
            </div>
            @include('frontend.devloper.partials.workbox_1',['Works' => $Works])
           
        <div>
    
@endsection

@section('modal')
    <!-- Wallet Recharge Modal -->

    <script type="text/javascript">
        function show_wallet_modal() {
            $('#wallet_modal').modal('show');
        }
    </script>

    <!-- Address modal Modal -->
    @include('frontend.partials.address.address_modal')
@endsection

@section('script')
    @include('frontend.partials.address.address_js')

    @if (get_setting('google_map') == 1)
        @include('frontend.partials.google_map')
    @endif
@endsection
