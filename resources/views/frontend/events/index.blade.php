{{-- resources/views/events/index.blade.php --}}
@extends('frontend.layouts.user_panel')

{{-- resources/views/events/user_index.blade.php --}}

@section('content')
 
@include('frontend.home.partials.home-banner-area')

<section class="section dashboard ">
    <div class="container-xxl">


        <!-- card_shadow sec -->
        <div class="card_shadow shadow_sec_padd ">
            <div class="row ">
                <div class="col-lg-12 mx-auto events_sec ">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered justify-content-center" id="borderedTab" role="tablist">

                        @foreach ($categories as $index => $category)
                            <li class="nav-item">
                                <a class="nav-link {{ $index === 0 ? 'active' : '' }}"
                                    href="#category-{{ $category->id }}" data-toggle="tab">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                        <li class="nav-item">
                            <a class="nav-link {{ $categories->isEmpty() ? 'active' : '' }}" href="#all-events"
                                data-toggle="tab">All Events</a>
                        </li>
                    </ul>
                    <div class="tab-content pt-2" id="borderedTabContent">



                        <!-- Category-specific Events -->
                        @foreach ($categories as $index => $category)
                            <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}"
                                id="category-{{ $category->id }}">
                                <div class="row">
                                    @forelse($category->events as $event)
                                        <div class="hk_events mb-3">
                                         
                                            <img src="{{ uploaded_asset($event->image) }}"
                                                class="card-img-top event-image" alt="{{ $event->name }}">

                                            <div class="mt-4 text-center">
                                                <a href="{{ route('events.user_show', $event->id) }}"
                                                    class="hk_btns" >View More...</a>
                                            </div>



                                        </div>
                                    @empty
                                        <p class="ml-3">No events available for this category.</p>
                                    @endforelse
                                </div>
                            </div>
                        @endforeach

                        <!-- All Events Tab -->
                        <div class="tab-pane fade {{ $categories->isEmpty() ? 'show active' : '' }}" id="all-events">
                            <div class="row">
                                @foreach ($allEvents as $event)
                                    <div class="hk_events mb-3">

                                        <img src="{{ uploaded_asset($event->image) }}"
                                            class="card-img-top event-image" alt="{{ $event->name }}">
                                        <div class="mt-4 text-center">
                                            <div class="card-body">

                                                <a href="{{ route('events.user_show', $event->id) }}"
                                                    class="hk_btns">View More...</a>

                                            </div>
                                        </div>
                                @endforeach
                            </div>
                        </div>



                    </div><!-- End Bordered Tabs -->


                </div>




            </div>



        </div>


        <!-- End Right side columns -->

    </div>
 
</section>


@endsection
