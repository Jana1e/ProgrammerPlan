@extends('frontend.layouts.app')


@section('content')
   
    <section class="section dashboard dev_info">
        <div class="container-xxl">
          <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12 p-lg-0 mb-3">
              <!-- card_shadow sec -->
              <div class="card_shadow shadow_sec_padd mb-3">
                <div class="d-flex justify-content-between mb-3 ">
                  <div class="heading_sec">
                    <h2 class="main_heading">Popular Services</h2>
                  </div>
      
                </div>
      
                <div class="row">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-3">
                    <div class="chose_dev">
                      <img src="../assets/img/webdev.png" alt="web" class="img-fluid mb-2">
                      <h5>Web Development</h5>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-3">
                    <div class="chose_dev">
                      <img src="../assets/img/dev2.png" alt="web" class="img-fluid mb-2">
                      <h5>UI/UX designer</h5>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-3">
                    <div class="chose_dev">
                      <img src="../assets/img/ai.png" alt="web" class="img-fluid mb-2">
                      <h5>Ai</h5>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-3">
                    <div class="chose_dev">
                      <img src="../assets/img/ml.png" alt="web" class="img-fluid mb-2">
                      <h5>Machine learning</h5>
                    </div>
                  </div>
                  <div class="col-lg- col-md-2 col-sm-4 col-6 mb-3">
                    <div class="chose_dev">
                      <img src="../assets/img/st.png" alt="web" class="img-fluid mb-2">
                      <h5>Software tasting</h5>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-3">
                    <div class="chose_dev">
                      <img src="../assets/img/dev2.png" alt="web" class="img-fluid mb-2">
                      <h5>UI/UX designer</h5>
                    </div>
                  </div>
                </div>
      
              </div>
      
              <div class="card_shadow shadow_sec_padd ">
                <div class="d-flex justify-content-between mb-3 ">
                  <div class="heading_sec">
                    <h2 class="main_heading">Best developers</h2>
                  </div>
      
                </div>
      
                <div class="row">


                    @foreach($shops as $key => $shop)
                  <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-3 ">
                    <div class="chose_dev position-relative">
                      <img src="{{ uploaded_asset($shop->logo) }}" alt="web" class="img-fluid ">
      
                      <div class="dev_details">
                        <div class="card_bg bg-white rounded-3 p-2 mx-2 z-1">
                          <h6 class="mb-0">{{ $shop->name }}</h6>
                          <small>{{ $shop->meta_title }} </small>
                          <div class="button_view">
                            <a type="button" class="btn btn-primary btn-sm" href="{{ route('devloper.visit', $shop->slug) }}" target="_blank">view Profile</a>
      
      
      
                          </div>
                        </div>
                      </div>
                    </div>
      
                  </div>
                 @endforeach
      
      
                </div>
      
              </div>
            </div>
            <!-- End card_shadow -->
      
      
      
          </div><!-- End Left side columns -->
      
          <!-- End Right side columns -->
      
        </div>
        </div>
      </section>

    </main><!-- End #main -->
@endsection
