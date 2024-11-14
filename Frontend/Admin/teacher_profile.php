<?php include 'header.php'; ?>

<section class="teacher_sec">
  <div class="container-xxl position-relative">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12 p-lg-0 mb-3 mt-4">
        <!-- card_shadow sec -->

        <div class="linear_bg"></div>
        <div class="row mb-3 justify-content-center">
          <div class="col-xl-3 mb-3">
            <div class="card uplaod_profile_sec">
              <div class="card-body profile-card pt-4 text-center">
                <div class="avatar-upload">
                  <div class="avatar-preview">
                    <div class="avatar-upload">
                      <div class="avatar-edit">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                      </div>
                      <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(../assets/img/profile-img.jpg);">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="uplaod_text text-center">
                <h2>Amelia</h2>
                <p>amelia.org@gmail.com</p>
              </div>
              <hr class="w-100">

              <div class="mt-4">
                <a href="teacher_profile.php">
                  <div class="d-flex justify-content-between mb-3 ">
                    <div class="health_category ">
                      <span class="ps-2 active ">Personal Information</span>
                    </div>


                  </div>
                </a>
                <hr style="color:#1F1F1F; opacity:1;">

                <a href="course_info.php">
                  <div class="d-flex justify-content-between mb-3 ">
                    <div class="health_category">
                      <span class="ps-2 ">Courses Information</span>
                    </div>


                  </div>
                </a>
                <hr>

                <a href="setting.php">
                  <div class="d-flex justify-content-between mb-3 ">
                    <div class="health_category">
                      <span class="ps-2 "> Setting</span>
                    </div>


                  </div>
                </a>
                <hr>


                <a href="#">
                  <div class="d-flex justify-content-between mb-3 ">
                    <div class="health_category">
                      <span class="ps-2 "> Logout</span>
                    </div>


                  </div>
                </a>

                <hr>
              </div>




            </div>
          </div>

          <div class="col-lg-8">
            <div class="profile_form">
              <div class=" mb-3">
                <div class="heading_sec">
                  <h2 class="main_heading">Personal Information</h2>
                </div>
                <p>Let’s get you all st up so you can access your personal account.</p>
              </div>
              <form>
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
                      <label for="floatingInput">First Name</label>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
                      <label for="floatingInput">Last Name</label>
                    </div>

                  </div>

                  <div class="col-md-6">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                      <label for="floatingInput">Email</label>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInput" placeholder="Phone Number">
                      <label for="floatingInput">Phone Number</label>
                    </div>

                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingInput" placeholder="Phone Number">
                      <label for="floatingInput">Change Password </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingInput" placeholder="Phone Number">
                      <label for="floatingInput">Confirm Password </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="row">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-dark w-100 py-3 fs-6 ">Update profile</button>
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
    <!-- End card_shadow -->

  </div><!-- End Left side columns -->

  <!-- End Right side columns -->

  </div>
  </div>
</section>

</main><!-- End #main -->


<!-- footer sec -->
<?php include 'footer.php'; ?>