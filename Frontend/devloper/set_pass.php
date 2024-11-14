<?php include 'header.php'; ?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#SetPass">
Set a password

</button>

<!-- Modal -->
<div class="modal fade" id="SetPass" tabindex="-1" aria-labelledby="SetPassLabel" aria-hidden="true" id>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="SetPassLabel">
          <a href="index.php" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="" class="img-fluid">
            <span class=" d-md-block d-sm-none d-none">Programmer Plan</span>
          </a>
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="col-lg-12 p-lg-0 mb-3">
          <!-- card_shadow sec -->
          <div class=" shadow_sec_padd">


            <div class="row mb-3">
              <div class="col-lg-7">
                <div class="">
                  <div class=" mb-4">
                    <div class="heading_sec">
                      <!-- <span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.7604 12.0634L6.54639 7.84932L10.7604 3.63525" stroke="#313131" stroke-width="0.936458" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> -->
                        <!-- <small>
                          <a href="login.php" class="text-black">Back to login</a> 
                        </small> -->
                      </span>
                      <h2 class="main_heading mt-3 mb-3">Set a password</h2>
                    </div>
                    <p>Your previous password has been reseted. Please set a new password for your account.</p>
                  </div>
                  <form>
                    <div class="row g-3">

                      <div class="col-md-12">
                        <div class="form-floating mb-3">
                          <input type="password" class="form-control" id="floatingInput" placeholder="Email">
                          <label for="floatingInput">Create Password</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="password" class="form-control" id="floatingInput" placeholder="Email">
                          <label for="floatingInput">Re-enter Password</label>
                        </div>

                      </div>

                      <!-- <p>Didn’t receive a code? <a href="#" class="text-danger">Resend</a></p> -->

                      <div class="col-12">
                        <div class="row">
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-dark w-100 py-3"> Set Password</button>
                          </div>
                        </div>
                      </div>



                      <!-- <div class="col-12">
                        <div class="row">
                          <div class="col-md-12">
                            <button type="submit" class="btn bg-transparent border-primary w-100  py-2">
                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.1323 6.77545H13.6289V6.74951H8.00391V9.24951H11.5361C11.0208 10.7048 9.63609 11.7495 8.00391 11.7495C5.93297 11.7495 4.25391 10.0704 4.25391 7.99951C4.25391 5.92857 5.93297 4.24951 8.00391 4.24951C8.95984 4.24951 9.82953 4.61014 10.4917 5.1992L12.2595 3.43139C11.1433 2.39107 9.65015 1.74951 8.00391 1.74951C4.55234 1.74951 1.75391 4.54795 1.75391 7.99951C1.75391 11.4511 4.55234 14.2495 8.00391 14.2495C11.4555 14.2495 14.2539 11.4511 14.2539 7.99951C14.2539 7.58045 14.2108 7.17139 14.1323 6.77545Z" fill="#FFC107" />
                                <path d="M2.47461 5.09045L4.52805 6.59639C5.08367 5.22076 6.4293 4.24951 8.00398 4.24951C8.95992 4.24951 9.82961 4.61014 10.4918 5.1992L12.2596 3.43139C11.1434 2.39107 9.65023 1.74951 8.00398 1.74951C5.60336 1.74951 3.52148 3.10482 2.47461 5.09045Z" fill="#FF3D00" />
                                <path d="M8.004 14.2497C9.61838 14.2497 11.0853 13.6319 12.1943 12.6272L10.2599 10.9904C9.61136 11.4836 8.81883 11.7504 8.004 11.7497C6.37838 11.7497 4.99807 10.7132 4.47807 9.2666L2.43994 10.8369C3.47432 12.861 5.57494 14.2497 8.004 14.2497Z" fill="#4CAF50" />
                                <path d="M14.1343 6.77545H13.6309V6.74951H8.00586V9.24951H11.538C11.2915 9.94214 10.8475 10.5474 10.2609 10.9904L10.2618 10.9898L12.1962 12.6267C12.0593 12.7511 14.2559 11.1245 14.2559 7.99951C14.2559 7.58045 14.2127 7.17139 14.1343 6.77545Z" fill="#1976D2" />
                              </svg>

                            </button>
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-xl-4">

                <div class=" sign_upsec">
                  <div class=" profile-card pt-4 text-center">

                    <img src="assets/img/setpass.png" class="d-block w-100" alt="slider">
                  </div>




                </div>
              </div>
            </div>

          </div>


        </div>
      </div>

    </div>
  </div>
</div>
</main><!-- End #main -->


<!-- footer sec -->
<?php include 'footer.php'; ?>