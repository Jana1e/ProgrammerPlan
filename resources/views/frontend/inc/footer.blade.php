 <!-- ======= Footer ======= -->
 <footer class="footer">
  <div class="container">
      <div class="row">
          <div class="col-sm-6 col-md-3 mt-4 col-lg-3 text-center text-sm-start">
              <div class="information">
                  <h6 class="footer-heading text-uppercase text-white fw-bold">Page Links</h6>
                  <ul class="list-unstyled footer-link mt-4">
                      <li class="mb-1"><a href="#"
                              class="text-white text-decoration-none fw-semibold">Home </a></li>
                      <li class="mb-1"><a href="#"
                              class="text-white text-decoration-none fw-semibold">About Us </a></li>
                      <li class="mb-1"><a href="#"
                              class="text-white text-decoration-none fw-semibold">Course</a></li>
                      <li class="mb-1"><a href="#"
                              class="text-white text-decoration-none fw-semibold">Progress</a></li>
                      <li class="mb-1"><a href="#"
                              class="text-white text-decoration-none fw-semibold">Events</a></li>
                      <li class="mb-1"><a href="#"
                              class="text-white text-decoration-none fw-semibold">Chat</a></li>
                      <li class="mb-1"><a href="#"
                              class="text-white text-decoration-none fw-semibold">Contact Us</a></li>
                  </ul>
              </div>
          </div>
          <div class="col-sm-6 col-md-6 mt-4 col-lg-6 text-center text-sm-start">
              <div class="resources">
                  <h6 class="footer-heading text-uppercase text-white fw-bold">usefull Links</h6>
                  <ul class="list-unstyled footer-link mt-4">
                      <li class="mb-1"><a href="#"
                              class="text-white text-decoration-none fw-semibold">Help </a></li>
                      <li class="mb-1"><a href="#"
                              class="text-white text-decoration-none fw-semibold">Send Feedabck</a></li>
                      <li class="mb-1"><a href="#"
                              class="text-white text-decoration-none fw-semibold">Ask Question</a></li>
                      <!-- <li class=""><a href="#" class="text-white text-decoration-none fw-semibold">Video Lectures</a></li> -->
                  </ul>
                  <p class="text-white text-decoration-none mb-0 fw-semibold"> Newsletter </a>
                  <p class="text-white text-decoration-none "> Subscribe for latest updates </a>
                  <div class="input-group mb-3 mt-3">
                      <input type="text" class="form-control" placeholder="Enter Your Email"
                          aria-label="Recipient's username" aria-describedby="button-addon2">
                      <button class="btn btn-outline-secondary text-white" type="button"
                          id="button-addon2">Subscribe</button>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-md-3 mt-4 col-lg-3 text-center text-sm-start">
              <div class="social">
                  <h6 class="footer-heading text-uppercase text-white fw-bold">About Us</h6>
                  <p class="text-white mb-1 text-decoration-none d-block fw-semibold mt-3">Lorem ipsum dolor
                      sit amet consectetur adipisicing elit. Omnis ut ipsam,

                  </p>
                  <ul class="list-inline my-4">
                      <!-- <li class="list-inline-item"><a href="#" class="text-white btn-sm btn btn-primary mb-2"><i class="bi bi-facebook"></i></a></li> -->
                      <li class="list-inline-item"><a href="#"
                              class="text-danger btn-sm btn btn-primary mb-2 rounded-circle"><i
                                  class="bi bi-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#"
                              class="text-white btn-sm btn btn-primary mb-2 rounded-circle"><i
                                  class="bi bi-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#"
                              class="text-white btn-sm btn btn-primary mb-2 rounded-circle"><i
                                  class="bi bi-linkedin"></i></a></li>
                  </ul>



              </div>
          </div>

      </div>
      <div class="text-center border-top text-white mt-4 p-1">

          <div class="row  align-items-center">
              <div class="col-lg-12 text-center mb-3">
                  <p class="mb-0 fw-bold">2024 © Our team , All Rights Reserved</p>
              </div>

          </div>
      </div>
</footer>

@if (Auth::check() && auth()->user()->user_type == 'customer')
    <!-- User Side nav -->
    <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
        <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
        <div class="collapse-sidebar bg-white">
            @include('frontend.inc.user_side_nav')
        </div>
    </div>
@endif

