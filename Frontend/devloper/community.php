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
              <h2 class="mb-3">Web Development</h2>
              <p>Explore our curated courses and master new skills, guided by industry experts.</p>
            </div>
          </div>
          <div class="carousel-item ">
            <img src="../assets/img/banner.png" class="img-fluid" alt="banner">
            <div class="carousel-caption  d-md-block">
              <h2 class="mb-3">Web Development</h2>
              <p>Explore our curated courses and master new skills, guided by industry experts.</p>
            </div>
          </div>
          <div class="carousel-item ">
            <img src="../assets/img/banner.png" class="img-fluid" alt="banner">
            <div class="carousel-caption  d-md-block">
              <h2 class="mb-3">Web Development</h2>
              <p>Explore our curated courses and master new skills, guided by industry experts.</p>
            </div>
          </div>

        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> -->
      </div>
    </div>
  </div>
</section>


<!-- new community design page  -->

<section class="community_page">
  <div class="container-fluid">
    <div class="row  ">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
        <!-- Bordered Tabs Justified -->
        <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
          <li class="nav-item flex-fill" role="presentation">
            <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home" aria-selected="true"> Code</button>
          </li>
          <li class="nav-item flex-fill" role="presentation">
            <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Discuss</button>
          </li>
          <li class="nav-item flex-fill" role="presentation">
            <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Feed</button>
          </li>
        </ul>
        <div class="tab-content pt-2" id="borderedTabJustifiedContent">
          <div class="tab-pane fade show active" id="bordered-justified-home" role="tabpanel" aria-labelledby="home-tab">
            <!-- code here -->
            <div class="com_bg">
              <div class="container  py-5 text-body">
                <div class="row d-flex justify-content-center">
                  <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <form class="search-form d-flex align-items-center" method="POST" action="#">
                        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                      </form>
                      <!-- <a href="#" class="hk_btns text-white">
                        + New code
                      </a> -->
                      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          All
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Today</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>


                      <a href="#" class="hk_btns text-white">
                        + New code
                      </a>

                    </div>

                    <div class="card  py-2 mb-2">
                      <div class="card-body">
                        <div class="d-flex flex-start">
                          <img class="rounded-circle shadow-1-strong me-3"
                            src="../assets/img/profile-img.jpg" alt="avatar" width="50"
                            height="50" />
                          <div class="w-100">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                              <h6 class="text-body mb-0">
                                Planteo V1-Explore <br>
                                <span class=" text-primary">[Celebrity ] Eagle</span>
                              </h6>
                              <a href="community_answers.php" class="hk_btns text-white">
                                web
                              </a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                              <p class="small mb-0" style="color: #aaa;">
                                <a href="#!" class="link-grey"><i class="bi bi-hand-thumbs-up-fill"></i> +30</a> •
                                <a href="#!" class="link-grey"><i class="bx bxs-conversation"></i> +71 </a> •
                                <a href="#!" class="link-grey"><i class="bi bi-calendar-fill"></i> 9hrs ago</a>
                                <a href="#!" class="link-grey"><i class="bi bi-eye"></i> 1.5k</a>
                              </p>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card  py-2 mb-2">
                      <div class="card-body">
                        <div class="d-flex flex-start">
                          <img class="rounded-circle shadow-1-strong me-3"
                            src="../assets/img/profile-img.jpg" alt="avatar" width="50"
                            height="50" />
                          <div class="w-100">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                              <h6 class="text-body mb-0">
                                Planteo V1-Explore <br>
                                <span class=" text-primary">[Celebrity ] Eagle</span>
                              </h6>
                              <a href="community_answers.php" class="hk_btns text-white">
                                web
                              </a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                              <p class="small mb-0" style="color: #aaa;">
                                <a href="#!" class="link-grey"><i class="bi bi-hand-thumbs-up-fill"></i> +30</a> •
                                <a href="#!" class="link-grey"><i class="bx bxs-conversation"></i> +71 </a> •
                                <a href="#!" class="link-grey"><i class="bi bi-calendar-fill"></i> 9hrs ago</a>
                                <a href="#!" class="link-grey"><i class="bi bi-eye"></i> 1.5k</a>
                              </p>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card  py-2 mb-2">
                      <div class="card-body">
                        <div class="d-flex flex-start">
                          <img class="rounded-circle shadow-1-strong me-3"
                            src="../assets/img/profile-img.jpg" alt="avatar" width="50"
                            height="50" />
                          <div class="w-100">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                              <h6 class="text-body mb-0">
                                Planteo V1-Explore <br>
                                <span class=" text-primary">[Celebrity ] Eagle</span>
                              </h6>
                              <a href="community_answers.php" class="hk_btns text-white">
                                web
                              </a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                              <p class="small mb-0" style="color: #aaa;">
                                <a href="#!" class="link-grey"><i class="bi bi-hand-thumbs-up-fill"></i> +30</a> •
                                <a href="#!" class="link-grey"><i class="bx bxs-conversation"></i> +71 </a> •
                                <a href="#!" class="link-grey"><i class="bi bi-calendar-fill"></i> 9hrs ago</a>
                                <a href="#!" class="link-grey"><i class="bi bi-eye"></i> 1.5k</a>
                              </p>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>
            <!-- edns code -->
          </div>
          <div class="tab-pane fade" id="bordered-justified-profile" role="tabpanel" aria-labelledby="profile-tab">

            <!-- discuss tab -->
            <div class="com_bg">
              <div class="container  py-5 text-body">
                <div class="row d-flex justify-content-center">
                  <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <form class="search-form d-flex align-items-center" method="POST" action="#">
                        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                      </form>
                      <!-- <a href="#" class="hk_btns text-white">
                        + New code
                      </a> -->
                      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          All
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Today</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>
                      <a href="#" class="hk_btns text-white">
                        + New code
                      </a>
                    </div>

                    <div class="card  py-2 mb-2">
                      <div class="card-body position-relative">
                        <div class="d-flex flex-start">

                          <i class="bi bi-chat-left fs-3 "></i>
                          <span class="badge bg-primary badge-number">4</span>
                          <div class="w-100 ms-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                              <h6 class="text-body mb-1">
                                I cant find kotlin?? <br>
                                <span class="badge rounded-pill text-bg-secondary">robotic</span>
                              </h6>

                              <div class="right_sec">
                                <div class="d-flex align-items-center">

                                  <div class="">
                                    <span class="text-primary small pt-1 fw-bold">Amelia</span>
                                  </div>
                                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ps-3">
                                    <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" width="50" height="50">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                              <p class="small mb-0" style="color: #aaa;">
                                <!-- <a href="#!" class="link-grey"><i class="bi bi-hand-thumbs-up-fill"></i> +30</a> •
                                <a href="#!" class="link-grey"><i class="bx bxs-conversation"></i> +71 </a> • -->
                                <a href="#!" class="link-grey"><i class="bi bi-calendar-fill"></i> 9hrs ago</a>
                                <a href="#!" class="link-grey"><i class="bi bi-eye"></i> 1.5k</a>
                              </p>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card  py-2 mb-2">
                      <div class="card-body position-relative">
                        <div class="d-flex flex-start">

                          <i class="bi bi-chat-left fs-3 "></i>
                          <span class="badge bg-primary badge-number">4</span>
                          <div class="w-100 ms-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                              <h6 class="text-body mb-1">
                                I cant find kotlin?? <br>
                                <span class="badge rounded-pill text-bg-secondary">robotic</span>
                              </h6>

                              <div class="right_sec">
                                <div class="d-flex align-items-center">

                                  <div class="">
                                    <span class="text-primary small pt-1 fw-bold">Amelia</span>
                                  </div>
                                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ps-3">
                                    <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" width="50" height="50">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                              <p class="small mb-0" style="color: #aaa;">
                                <!-- <a href="#!" class="link-grey"><i class="bi bi-hand-thumbs-up-fill"></i> +30</a> •
                                <a href="#!" class="link-grey"><i class="bx bxs-conversation"></i> +71 </a> • -->
                                <a href="#!" class="link-grey"><i class="bi bi-calendar-fill"></i> 9hrs ago</a>
                                <a href="#!" class="link-grey"><i class="bi bi-eye"></i> 1.5k</a>
                              </p>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>
            <!-- ends discuss -->
          </div>
          <div class="tab-pane fade" id="bordered-justified-contact" role="tabpanel" aria-labelledby="contact-tab">

            <div class="firts" class="com_bg">
              <div class="container  py-5 text-body">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="d-flex justify-content-between ">
                      <div class="right_sec">
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                          </div>
                          <div class="ps-3">
                            <h6>Amelia</h6>
                            <span class="text-primary small pt-1 fw-bold">Share Your Thoughts</span>

                            <div class="mt-4 text-center">
                              <a href="#" class="hk_btns text-white">
                                Discover Peers
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="left_sec">
                        <div class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Activity Feed
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="py-3 text-center">
                    <p>Nothing to show</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Bordered Tabs Justified -->
      </div>
    </div>
  </div>
</section>

<!-- ends -->


</main><!-- End #main -->


<!-- footer sec -->
<?php include 'footer.php'; ?>