<?php include 'header.php'; ?>


<div class="col-lg-12 p-lg-0 mb-3">
  <!-- card_shadow sec -->
  <div class=" shadow_sec_padd">


    <div class="row mb-3">
      <div class="col-xl-4">

        <div class=" sign_upsec">
          <div class=" profile-card pt-4 text-center">

            <div id="carouselExampleIndicators" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../assets/img/signup.png" class="d-block w-100" alt="slider">
                </div>
                <div class="carousel-item">
                  <img src="../assets/img/signup.png" class="d-block w-100" alt="slider">
                </div>
                <div class="carousel-item">
                  <img src="../assets/img/signup.png" class="d-block w-100" alt="slider">
                </div>
              </div>
              <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button> -->
            </div>
          </div>




        </div>
      </div>

      <div class="col-lg-7">
        <div class="">
          <div class=" mb-3">
            <div class="heading_sec">
              <h2 class="main_heading">Sign up</h2>
            </div>
            <p>Let’s get you all st up so you can access your personal account.</p>
          </div>
          <form>
          <div class="row g-3">
              <div class="col-md-6">
                <div class="form-floating mb-1">
                  <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
                  <label for="floatingInput">First Name</label>
                </div>

              </div>
              <div class="col-md-6">
                <div class="form-floating mb-1">
                  <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
                  <label for="floatingInput">Last Name</label>
                </div>

              </div>

              <div class="col-md-6">
                <div class="form-floating mb-1">
                  <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                  <label for="floatingInput">Email</label>
                </div>

              </div>
              <div class="col-6">
                <div class="form-floating mb-1">
                  <input type="password" class="form-control" id="floatingInput" placeholder="Phone Number">
                  <label for="floatingInput"> Password </label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating mb-1">
                  <input type="File" class="form-control" id="floatingInput" placeholder="File">
                  <label for="floatingInput">Pic </label>
                </div>
              </div>

              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                  <label class="form-check-label" for="rememberMe"><strong>I agree to all the </strong> <span><a href="#" class="text-danger"> Terms</a></span> <strong>and</strong> <span><a href="#" class="text-danger"> Privacy Policies</a></span> </label>
                </div>
              </div>
             
              </div>
              <div class="col-12">
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-dark w-100 ">Create account</button>
                  </div>
                </div>
              </div>

              <div class="col-12 text-center small_text mt-4">

                <p>Already have an account? <a href="login.php">Login</a></p>

                <h6><span>Or Sign up with</span></h6>

              </div>

              <div class="col-12">
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn bg-transparent border-primary w-100 ">
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.1323 6.77545H13.6289V6.74951H8.00391V9.24951H11.5361C11.0208 10.7048 9.63609 11.7495 8.00391 11.7495C5.93297 11.7495 4.25391 10.0704 4.25391 7.99951C4.25391 5.92857 5.93297 4.24951 8.00391 4.24951C8.95984 4.24951 9.82953 4.61014 10.4917 5.1992L12.2595 3.43139C11.1433 2.39107 9.65015 1.74951 8.00391 1.74951C4.55234 1.74951 1.75391 4.54795 1.75391 7.99951C1.75391 11.4511 4.55234 14.2495 8.00391 14.2495C11.4555 14.2495 14.2539 11.4511 14.2539 7.99951C14.2539 7.58045 14.2108 7.17139 14.1323 6.77545Z" fill="#FFC107" />
                        <path d="M2.47461 5.09045L4.52805 6.59639C5.08367 5.22076 6.4293 4.24951 8.00398 4.24951C8.95992 4.24951 9.82961 4.61014 10.4918 5.1992L12.2596 3.43139C11.1434 2.39107 9.65023 1.74951 8.00398 1.74951C5.60336 1.74951 3.52148 3.10482 2.47461 5.09045Z" fill="#FF3D00" />
                        <path d="M8.004 14.2497C9.61838 14.2497 11.0853 13.6319 12.1943 12.6272L10.2599 10.9904C9.61136 11.4836 8.81883 11.7504 8.004 11.7497C6.37838 11.7497 4.99807 10.7132 4.47807 9.2666L2.43994 10.8369C3.47432 12.861 5.57494 14.2497 8.004 14.2497Z" fill="#4CAF50" />
                        <path d="M14.1343 6.77545H13.6309V6.74951H8.00586V9.24951H11.538C11.2915 9.94214 10.8475 10.5474 10.2609 10.9904L10.2618 10.9898L12.1962 12.6267C12.0593 12.7511 14.2559 11.1245 14.2559 7.99951C14.2559 7.58045 14.2127 7.17139 14.1343 6.77545Z" fill="#1976D2" />
                      </svg>

                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>

  </div>


</div>
</main><!-- End #main -->


<!-- footer sec -->
<?php include 'footer.php'; ?>