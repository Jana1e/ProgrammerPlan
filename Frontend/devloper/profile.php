<?php include 'header.php'; ?>

<section class="banner_slider">
    <div class="container-xxl p-lg-0 ">
        <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/banner.png" class="img-fluid" alt="banner">
                        <div class="carousel-caption  d-md-block">
                            <h2 class="mb-3">Learn from the Best</h2>
                            <p>Explore our curated courses and master new skills, guided by industry experts.</p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="../assets/img/banner.png" class="img-fluid" alt="banner">
                        <div class="carousel-caption  d-md-block">
                            <h2 class="mb-3">Learn from the Best</h2>
                            <p>Explore our curated courses and master new skills, guided by industry experts.</p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="../assets/img/banner.png" class="img-fluid" alt="banner">
                        <div class="carousel-caption  d-md-block">
                            <h2 class="mb-3">Learn from the Best</h2>
                            <p>Explore our curated courses and master new skills, guided by industry experts.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>


<section class="userProfile_sec">
    <div class="container-xxl position-relative">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12 p-lg-0 mb-3 mt-4">
                <!-- card_shadow sec -->

                <!-- <div class="linear_bg"></div> -->
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
                                <a href="profile.php">
                                    <div class="d-flex justify-content-between mb-3 ">
                                        <div class="health_category ">
                                            <span class="ps-2 active ">Update Profile</span>
                                        </div>


                                    </div>
                                </a>
                                <hr style="color:#1F1F1F; opacity:1;">

                                <a href="user_dashboard.php">
                                    <div class="d-flex justify-content-between mb-3 ">
                                        <div class="health_category">
                                            <span class="ps-2 ">My Dashboard</span>
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
                                    <h2 class="main_heading">Update</h2>
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