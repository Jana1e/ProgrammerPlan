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

<section class="community_page_ans ">
  <div class="container py-3 text-body">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
        <div class="d-flex justify-content-between align-items-center mb-3 ">
          <div>
            <h5>All Answers</h5>
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sort By
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Votes</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>

        </div>

        <!-- Default Accordion -->
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <span class="ms-3"> How can i run the app??</span>
                <div class="filter ">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <span class="badge rounded-pill text-bg-secondary">robotic</span>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic natus, ut accusantium similique consectetur, itaque reprehenderit laboriosam dolores fugit deserunt ab architecto eaque, sint numquam eligendi sapiente dicta expedita possimus!
                </p>

                <div class="d-flex justify-content-between">
                  <div>
                    <i class="bi bi-star-fill fs-4"></i>
                  </div>

                  <div class="right_sec">
                    <div class="d-flex align-items-center">

                      <div class="">
                        <h6>Amelia</h6>
                        <a href="#!" class="link-grey"><i class="bi bi-calendar-fill"></i> 9hrs ago</a>
                        <a href="#!" class="link-grey"><i class="bi bi-eye"></i> 1.5k</a>
                      </div>
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ps-3">
                        <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" width="50" height="50">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <span class="ms-3"> How can i run the app??</span>
                <div class="filter ">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <span class="badge rounded-pill text-bg-secondary">robotic</span>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic natus, ut accusantium similique consectetur, itaque reprehenderit laboriosam dolores fugit deserunt ab architecto eaque, sint numquam eligendi sapiente dicta expedita possimus!
                </p>

                <div class="d-flex justify-content-between">
                  <div>
                    <i class="bi bi-star-fill fs-4"></i>
                  </div>

                  <div class="right_sec">
                    <div class="d-flex align-items-center">

                      <div class="">
                        <h6>Amelia</h6>
                        <a href="#!" class="link-grey"><i class="bi bi-calendar-fill"></i> 9hrs ago</a>
                        <a href="#!" class="link-grey"><i class="bi bi-eye"></i> 1.5k</a>
                      </div>
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ps-3">
                        <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" width="50" height="50">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <span class="ms-3"> How can i run the app??</span>
                <div class="filter ">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <span class="badge rounded-pill text-bg-secondary">robotic</span>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic natus, ut accusantium similique consectetur, itaque reprehenderit laboriosam dolores fugit deserunt ab architecto eaque, sint numquam eligendi sapiente dicta expedita possimus!
                </p>

                <div class="d-flex justify-content-between">
                  <div>
                    <i class="bi bi-star-fill fs-4"></i>
                  </div>

                  <div class="right_sec">
                    <div class="d-flex align-items-center">

                      <div class="">
                        <h6>Amelia</h6>
                        <a href="#!" class="link-grey"><i class="bi bi-calendar-fill"></i> 9hrs ago</a>
                        <a href="#!" class="link-grey"><i class="bi bi-eye"></i> 1.5k</a>
                      </div>
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ps-3">
                        <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" width="50" height="50">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3 ">
          <img src="../assets/img/profile-img.jpg" alt="avatar 3" style="width: 40px; height: 100%; " class="rounded-circle">
          <input type="text" class="form-control form-control-lg border-0" id="exampleFormControlInput1" placeholder="Write New Answer">
          <a class="ms-1 text-muted" href="#!"><i class="fa fa-paperclip"></i></a>
          <a class="ms-3 text-muted" href="#!"><i class="fa fa-smile-o"></i></a>
          <a class="ms-3" href="#!"><i class="fa fa-paper-plane"></i></a>
        </div><!-- End Default Accordion Example -->
      </div>
    </div>
  </div>
</section>

<!-- ends -->


</main><!-- End #main -->


<!-- footer sec -->
<?php include 'footer.php'; ?>