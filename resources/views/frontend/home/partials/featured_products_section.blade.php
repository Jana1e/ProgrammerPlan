<section class="section dashboard " id="home_course">
    <div class="container-xxl">
        <div class="row">

            @if (count(get_featured_products()) > 0)
                <!-- Left side columns -->
                <div class="col-lg-9 p-lg-0 mb-3">
                    <!-- card_shadow sec -->
                    <div class="card_shadow shadow_sec_padd">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="heading_sec">
                                <h2 class="main_heading">Our Courses</h2>
                            </div>
                            <div class="heading_sec">
                                <a href="/search" class="see_all_text" >See All</a>
                            </div>
                        </div>




                        <div class="row">


                            @foreach (get_featured_products() as $key => $product)
                                @include('frontend.home.partials.product_box_2', ['product' => $product])
                            @endforeach





                        </div>

                    </div>
                    <!-- End card_shadow -->

                </div><!-- End Left side columns -->
            @endif
            <!-- Right side columns -->
            <div class="col-lg-3 right_sec">
    
              @include('frontend.home.partials.events')

            </div><!-- End Right side columns -->

        </div>
    </div>
</section>
