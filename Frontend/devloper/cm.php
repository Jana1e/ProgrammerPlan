<?php include 'header.php'; ?>

<div id="content_manage">

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
                                <p>Customized courses to suit your needs, from beginner to advanced levels.</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="../assets/img/banner.png" class="img-fluid" alt="banner">
                            <div class="carousel-caption  d-md-block">
                                <h2 class="mb-3">Tailored Learning Paths</h2>
                                <p>Customized courses to suit your needs, from beginner to advanced levels.</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="../assets/img/banner.png" class="img-fluid" alt="banner">
                            <div class="carousel-caption  d-md-block">
                                <h2 class="mb-3">Tailored Learning Paths</h2>
                                <p>Customized courses to suit your needs, from beginner to advanced levels.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>


    <div class="cms_ssc">
        <!-- Bordered Tabs Justified -->
        <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="review" role="tablist">
            <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100 active" id="review-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-review" type="button" role="tab" aria-controls="home" aria-selected="true">Review Work</button>
            </li>
            <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="addwork-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-addwork" type="button" role="tab" aria-controls="addwork" aria-selected="false">Addwork</button>
            </li>
        </ul>
        <div class="tab-content pt-2" id="reviewContent">
            <div class="tab-pane fade show active" id="bordered-justified-review" role="tabpanel" aria-labelledby="review-tab">
                <!-- Review work sec -->
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
                                        <a class="icon" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" style="">

                                             <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#EditWork">Edit work
</a></li>
                                            <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                                            <li><a class="dropdown-item" href="#">Delete work </a></li>
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

                                             <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#EditWork">Edit work</a></li>
                                            <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                                            <li><a class="dropdown-item" href="#">Delete work </a></li>
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

                                             <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#EditWork">Edit work
</a></li>
                                            <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                                            <li><a class="dropdown-item" href="#">Delete work </a></li>
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

                                             <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#EditWork">Edit work
</a></li>
                                            <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                                            <li><a class="dropdown-item" href="#">Delete work </a></li>
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

                                             <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#EditWork">Edit work
</a></li>
                                            <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                                            <li><a class="dropdown-item" href="#">Delete work </a></li>
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

                                             <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#EditWork">Edit work
</a></li>
                                            <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                                            <li><a class="dropdown-item" href="#">Delete work </a></li>
                                        </ul>
                                    </div>

                                </div>


                            </div>
                            <small>Improving the structure of existing code without changing its behavior.</small>
                        </div>
                    </div>
                </div>

                <!-- ends -->
            </div>
            <div class="tab-pane fade" id="bordered-justified-addwork" role="tabpanel" aria-labelledby="addwork-tab">
                <!-- add work sec  -->
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
                                                <button type="submit" class="btn btn-dark w-100 py-3">Add</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>

                        </div>

                    </div>

                </div>

                <!-- ends -->
            </div>

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
                    <h2 class="main_heading">Edit work
</h2>
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


<?php include 'footer.php'; ?>