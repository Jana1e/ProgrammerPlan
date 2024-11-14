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

<div class="cms_ssc">
        <!-- Bordered Tabs Justified -->
        <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="review" role="tablist">
            
            <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-order" type="button" role="tab" aria-controls="order" aria-selected="false">Active Order</button>
            </li>
            <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100 active" id="review-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-review" type="button" role="tab" aria-controls="home" aria-selected="true">Completed Order </button>
            </li>
            <li class="nav-item flex-fill" role="presentation">
            <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Cancelled Order</button>
          </li>
        </ul>
       
            <div class="tab-pane fade" id="bordered-justified-order" role="tabpanel" aria-labelledby="order-tab">
                <!-- order sec  -->
                <h5>Order</h5>
                <div class="order_sec">
                   
                    <div class="ordr_bg d-flex align-items-center">
                        <div class="me-3">
                            <img src="../assets/img/order.png" alt="order" class="img-fluid">
                        </div>
                        <div>
                            <h6>Raya Solis</h6>
                            <small>App developer</small>
                        </div>
                        <div class="ms-auto">
                            <div class="str_rate pe-3">

                                <div class="filter ">
                                    <a class="icon show" href="#" data-bs-toggle="dropdown" aria-expanded="true">
                                        <svg width="11" height="30" viewBox="0 0 11 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="5.49879" cy="4.79762" r="4.54762" fill="#616161" />
                                            <circle cx="5.49879" cy="24.1248" r="4.54762" fill="#616161" />
                                            <circle cx="5.49879" cy="43.4524" r="4.54762" fill="#616161" />
                                        </svg>

                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow ">

                                        <li><a class="dropdown-item " href="../devloper/chat_developer.php" target="_blank">Chat with Customer</a></li>
                                        <li><a class="dropdown-item" href="#">Submit the order </a></li>
                                        <li><a class="dropdown-item" href="#">Delete The Order </a></li>
                                        <li><a class="dropdown-item" href="#">Issue an invoice </a></li>
                                        <li><a class="dropdown-item" href="#">Edit The invoice </a></li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="order_sec">
                   
                   <div class="ordr_bg d-flex align-items-center">
                       <div class="me-3">
                           <img src="../assets/img/order.png" alt="order" class="img-fluid">
                       </div>
                       <div>
                           <h6>Kylie Pope</h6>
                           <small>UX developer</small>
                       </div>
                       <div class="ms-auto">
                           <div class="str_rate pe-3">
                               <div class="filter ">
                                   <a class="icon show" href="#" data-bs-toggle="dropdown" aria-expanded="true">
                                       <svg width="11" height="30" viewBox="0 0 11 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                           <circle cx="5.49879" cy="4.79762" r="4.54762" fill="#616161" />
                                           <circle cx="5.49879" cy="24.1248" r="4.54762" fill="#616161" />
                                           <circle cx="5.49879" cy="43.4524" r="4.54762" fill="#616161" />
                                       </svg>

                                   </a>
                                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow ">

                                       <li><a class="dropdown-item " href="../devloper/chat_developer.php" target="_blank">Chat with Customer</a></li>
                                       <li><a class="dropdown-item" href="#">Submit the order </a></li>
                                       <li><a class="dropdown-item" href="#">Delete The Order </a></li>
                                       <li><a class="dropdown-item" href="#">Issue an invoice </a></li>
                                       <li><a class="dropdown-item" href="#">Edit The invoice </a></li>

                                   </ul>
                               </div>

                           </div>
                       </div>
                   </div>
               </div>


                <!-- ends -->
            </div>
        </div><!-- End Bordered Tabs Justified -->
    </div>
</div>

<?php include 'footer.php'; ?>