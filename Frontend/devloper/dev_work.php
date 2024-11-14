<?php include 'header.php'; ?>

<section class="courseinfo_sec">
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
                <a href="dev_profile.php">
                  <div class="d-flex justify-content-between mb-3 ">
                    <div class="health_category ">
                      <span class="ps-2  ">Personal Information</span>
                    </div>


                  </div>
                </a>
                <hr>

                <a href="dev_work.php">
                  <div class="d-flex justify-content-between mb-3 ">
                    <div class="health_category">
                      <span class="ps-2 active ">My work</span>
                    </div>


                  </div>
                </a>
                <hr style="color:#1F1F1F; opacity:1;">

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
              <div class="d-flex justify-content-between">
                <div>
                  <h5>My Work</h5>
                </div>
                <div>
                  <div class=" text-center">
                    <a href="#" class="hk_btns text-white rounded-2" data-bs-toggle="modal" data-bs-target="#logIn">
                      +Add New Work
                    </a>
                  </div>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/pf1.png" alt="c1" class="img-fluid w-100 mb-2">
              
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h4>Code Refactor:</h4>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                            <li>
                              <a class="dropdown-item " href="#"  data-bs-toggle="modal" data-bs-target="#EditWork">Edit work</a></li>
                            <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                            <li><a class="dropdown-item" href="#" >Delete work </a></li>
                          </ul>
                        </div>

                      </div>

                      
                    </div>
                    <small>Improving the structure of existing code without changing its behavior.</small>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/pf2.png" alt="c1" class="img-fluid w-100 mb-2">
              
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h4>Bug Fixes:</h4>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                            <li><a class="dropdown-item " href="#"  data-bs-toggle="modal" data-bs-target="#EditWork">Edit work</a></li>
                            <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                            <li><a class="dropdown-item" href="#" >Delete work </a></li>
                          </ul>
                        </div>

                      </div>

                      
                    </div>
                    <small>Improving the structure of existing code without changing its behavior.</small>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/pf3.png" alt="c1" class="img-fluid w-100 mb-2">
              
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h4>Feature Implementation:</h4>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                            <li><a class="dropdown-item " href="#"  data-bs-toggle="modal" data-bs-target="#EditWork">Edit work</a></li>
                            <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                            <li><a class="dropdown-item" href="#" >Delete work </a></li>
                          </ul>
                        </div>

                      </div>

                      
                    </div>
                    <small>Improving the structure of existing code without changing its behavior.</small>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/pf4.png" alt="c1" class="img-fluid w-100 mb-2">
              
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h4>API Integration:</h4>
                      </div>
                      <div class="str_rate">

<div class="filter ">
  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

    <li><a class="dropdown-item " href="#"  data-bs-toggle="modal" data-bs-target="#EditWork">Edit work</a></li>
    <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
    <li><a class="dropdown-item" href="#" >Delete work </a></li>
  </ul>
</div>

</div>

                      
                    </div>
                    <small>Improving the structure of existing code without changing its behavior.</small>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/pf5.png" alt="c1" class="img-fluid w-100 mb-2">
              
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h4>Database Schema Update:</h4>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                            <li><a class="dropdown-item " href="#"  data-bs-toggle="modal" data-bs-target="#EditWork">Edit work</a></li>
                            <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                            <li><a class="dropdown-item" href="#" >Delete work </a></li>
                          </ul>
                        </div>

                      </div>

                      
                    </div>
                    <small>Improving the structure of existing code without changing its behavior.</small>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/pf6.png" alt="c1" class="img-fluid w-100 mb-2">
              
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h4>Front-End Development:</h4>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                            <li><a class="dropdown-item " href="#"  data-bs-toggle="modal" data-bs-target="#EditWork">Edit work</a></li>
                            <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                            <li><a class="dropdown-item" href="#" >Delete work </a></li>
                          </ul>
                        </div>

                      </div>

                      
                    </div>
                    <small>Improving the structure of existing code without changing its behavior.</small>
                  </div>
                </div>
        

                <div class="col-lg-8 mx-auto mt-3">
                  <div class=" text-center ">
                    <a href="#" class="hk_btns text-white rounded-2  d-block">
                      Save Changes
                    </a>
                  </div>
                </div>
              </div>
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




<!-- add course  Modal -->
<div class="modal fade" id="logIn" tabindex="-1" aria-labelledby="logInLabel" aria-hidden="true" id>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="logInLabel">
          <a href="index.php" class="logo d-flex align-items-center">
            <img src="../assets/img/logo.png" alt="" class="img-fluid">
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

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7">

                <div class=" mb-3">
                  <div class="heading_sec">
                    <h2 class="main_heading"> Add Portfolio</h2>
                  </div>

                </div>
                <form>
                  <div class="row g-3">

                    <div class="col-md-12">
                      <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Add your Project Title">
                        <label for="floatingInput">Project Title</label>
                      </div>

                    </div>

                    <div class="col-12">
                      <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Project duration">
                        <label for="floatingInput"> Project duration </label>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Use this space to share about your client, their goals, any challenges that came up, and how you dealt with them. " id="floatingTextarea" rows="8" style="height: 200px"></textarea>
                        <label for="floatingTextarea">Project Description</label>
                      </div>
                    </div>
                    <div class="col-12 border rounded-2 p-3">
                      <label for="floatingInput" class="p-2">Attachments </label>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>

                      </div>

                      <div class="text-center">
                        <small><strong>You can upload the following formats</strong></small> <br>
                        <small> <strong>.jpg, .jpeg, .png, .gif, .mp4, .avi; max size - 50 MB; max files - 5</strong></small>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="row">
                        <div class="col-md-12 ci_btn">
                          <button type="submit" class="btn btn-dark w-100 py-3">Continue</button>
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

    </div>
  </div>
</div>
<!-- add course  Modal ends -->



<!-- EditWork  Modal -->
<div class="modal fade" id="EditWork" tabindex="-1" aria-labelledby="EditWorkLabel" aria-hidden="true" id>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="EditWork">
          <a href="index.php" class="logo d-flex align-items-center">
            <img src="../assets/img/logo.png" alt="" class="img-fluid">
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

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7">

                <div class=" mb-3">
                  <div class="heading_sec">
                    <h2 class="main_heading">Edit Course</h2>
                  </div>

                </div>
                <form>
                  <div class="row g-3">

                    <div class="col-md-12">
                      <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Add your Course title">
                        <label for="floatingInput">Course Title</label>
                      </div>

                    </div>

                    <div class="col-12">
                      <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Free/Paid">
                        <label for="floatingInput"> Edit  price </label>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Use this space to share a brief description about your Course. " id="floatingTextarea" rows="8" style="height: 200px"></textarea>
                        <label for="floatingTextarea">Course Description</label>
                      </div>
                    </div>
                    <div class="col-12 border rounded-2 p-3">
                      <label for="floatingInput" class="p-2">Attachments </label>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>

                      </div>

                      <div class="text-center">
                        <small><strong>You can upload the following formats</strong></small> <br>
                        <small> <strong>.jpg, .jpeg, .png, .gif, .mp4, .avi; max size - 50 MB; max files - 5</strong></small>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="row">
                        <div class="col-md-12 ci_btn">
                          <button type="submit" class="btn btn-dark w-100 py-3">Continue</button>
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

    </div>
  </div>
</div>
<!-- EditWork Modal ends -->

</main><!-- End #main -->


<!-- footer sec -->
<?php include 'footer.php'; ?>