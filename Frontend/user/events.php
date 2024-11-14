<?php include 'header.php'; ?>

<section class="banner_slider mb-0">
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
</section>
<section class="section dashboard ">
  <div class="container-xxl">


    <!-- card_shadow sec -->
    <div class="card_shadow shadow_sec_padd ">
      <div class="row ">
        <div class="col-lg-12 mx-auto events_sec ">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered justify-content-center" id="borderedTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home" aria-selected="true">Hackathon</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Courses</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">All Event</button>
            </li>
          </ul>
          <div class="tab-content pt-2" id="borderedTabContent">
            <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
              <div class="hk_events mb-3">
                <img src="../assets/img/hk.png" class="img-fluid w-100" alt="hackton">

                <div class="mt-4 text-center">
                  <a href="upcoming_event.php" class="hk_btns">
                    View More..
                  </a>
                </div>
              </div>
              <div class="hk_events mb-3">
                <img src="../assets/img/hackton.png" class="img-fluid w-100" alt="hackton">

                <div class="mt-4 text-center">
                  <a href="upcoming_event.php" class="hk_btns">
                    View More..
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="hk_events mb-3">
                <img src="../assets/img/hk.png" class="img-fluid w-100" alt="hackton">

                <div class="mt-4 text-center">
                  <a href="upcoming_event.php" class="hk_btns">
                    View More..
                  </a>
                </div>
              </div>
              <div class="hk_events mb-3">
                <img src="../assets/img/hackton.png" class="img-fluid w-100" alt="hackton">

                <div class="mt-4 text-center">
                  <a href="upcoming_event.php" class="hk_btns">
                    View More..
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="bordered-contact" role="tabpanel" aria-labelledby="contact-tab">

              <div class="hk_events mb-3">
                <img src="../assets/img/hk.png" class="img-fluid w-100" alt="hackton">

                <div class="mt-4 text-center">
                  <a href="upcoming_event.php" class="hk_btns">
                    View More..
                  </a>
                </div>
              </div>
              <div class="hk_events mb-3">
                <img src="../assets/img/hackton.png" class="img-fluid w-100" alt="hackton">

                <div class="mt-4 text-center">
                  <a href="upcoming_event.php" class="hk_btns">
                    View More..
                  </a>
                </div>
              </div>
            </div>
          </div><!-- End Bordered Tabs -->


        </div>




      </div>



    </div>








    <!-- End Right side columns -->

  </div>
  </div>
</section>

</main><!-- End #main -->


<!-- footer sec -->
<?php include 'footer.php'; ?>