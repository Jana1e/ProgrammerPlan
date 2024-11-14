<?php include 'header.php';?>
<!-- picsher in header add-->
    <section class="banner_slider">

      <div class="container-xxl p-lg-0 ">
        <div class="row">
        <div class="col-lg-12">
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
      </div>
    </section>


<!-- Manage Course-->
    <section class="section dashboard " id="home_course">
      <div class="container-xxl">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-9 p-lg-0 mb-3">
            <!-- card_shadow sec -->
            <div class="card_shadow shadow_sec_padd">
              <div class="d-flex justify-content-between mb-3">
                <div class="heading_sec">
                  <h2 class="main_heading">Manage Your Courses </h2>
                </div>
                <div class="heading_sec">
                  <a href="courses.php" class="see_all_text" target="_blank">See All</a>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/c01.png" alt="c1" class="img-fluid w-100 mb-2">
                    <div class="d-flex justify-content-between">
                      <div class="course_heading">
                        <h4>Cybersecurity</h4>
                      </div>
                      <div class="course_headinfg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)"></path>
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6"></stop>
                              <stop offset="1" stop-color="#0A2B7D"></stop>
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum&nbsp;is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">
                        <!-- Options for managing course-->
                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">Edit Course</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Delete Course </a></li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/c2.png" alt="c2" class="img-fluid w-100 mb-2">
                    <div class="d-flex justify-content-between">
                      <div class="course_heading">
                        <h4>UI/UX</h4>
                      </div>
                      <div class="course_headinfg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)"></path>
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6"></stop>
                              <stop offset="1" stop-color="#0A2B7D"></stop>
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum&nbsp;is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">
                        <!-- Options for managing course-->
                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">Edit Course</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Delete Course </a></li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/c3.png" alt="c2" class="img-fluid w-100 mb-2">
                    <div class="d-flex justify-content-between">
                      <div class="course_heading">
                        <h4>Coding</h4>
                      </div>
                      <div class="course_headinfg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)"></path>
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6"></stop>
                              <stop offset="1" stop-color="#0A2B7D"></stop>
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum&nbsp;is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">
                        <!-- Options for managing course-->
                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">Edit Course</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Delete Course </a></li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/c4.png" alt="c2" class="img-fluid w-100 mb-2">
                    <div class="d-flex justify-content-between">
                      <div class="course_heading">
                        <h4>Data analysis</h4>
                      </div>
                      <div class="course_headinfg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)"></path>
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6"></stop>
                              <stop offset="1" stop-color="#0A2B7D"></stop>
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum&nbsp;is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">
                        <!-- Options for managing course-->
                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">Edit Course</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Delete Course </a></li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/c5.png" alt="c2" class="img-fluid w-100 mb-2">
                    <div class="d-flex justify-content-between">
                      <div class="course_heading">
                        <h4>Security</h4>
                      </div>
                      <div class="course_headinfg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)"></path>
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6"></stop>
                              <stop offset="1" stop-color="#0A2B7D"></stop>
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum&nbsp;is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">
                        <!-- Options for managing course-->
                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">Edit Course</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Delete Course </a></li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/c6.png" alt="c2" class="img-fluid w-100 mb-2">
                    <div class="d-flex justify-content-between">
                      <div class="course_heading">
                        <h4>Digital marketing</h4>
                      </div>
                      <div class="course_headinfg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)"></path>
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6"></stop>
                              <stop offset="1" stop-color="#0A2B7D"></stop>
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum&nbsp;is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">
                        <!-- Options for managing course-->
                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">Edit Course</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Delete Course </a></li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/c7.png" alt="c2" class="img-fluid w-100 mb-2">
                    <div class="d-flex justify-content-between">
                      <div class="course_heading">
                        <h4>App Development</h4>
                      </div>
                      <div class="course_headinfg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)"></path>
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6"></stop>
                              <stop offset="1" stop-color="#0A2B7D"></stop>
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum&nbsp;is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <!-- Options for managing course-->
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">Edit Course</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Delete Course </a></li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/c8.png" alt="c2" class="img-fluid w-100 mb-2">
                    <div class="d-flex justify-content-between">
                      <div class="course_heading">
                        <h4>Data visualization</h4>
                      </div>
                      <div class="course_headinfg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)"></path>
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6"></stop>
                              <stop offset="1" stop-color="#0A2B7D"></stop>
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum&nbsp;is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">
                        <!-- Options for managing course-->
                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">Edit Course</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Delete Course </a></li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
            <!-- End card_shadow -->

          </div><!-- End Left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-3 right_sec">

            <!-- <div class="card_shadow">

              <div class="card-body  shadow_sec_padd mb-3">
                <div class=" mb-3">
                  <div class="heading_sec">
                    <h2 class="main_heading">Message...</h2>

                    <form action="">
                      <div class="col-md-12 mx-auto">
                        <div class="card">

                          <div class="mb-3" id="message-list">
                            <div class="">
                              <textarea class="form-control " id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                          </div>
                          <div class="">
                            <form onsubmit="sendMessage(); return false;">
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="Write your message..." id="message-input">
                                <button type="submit" class="btn btn-primary z-0">Send</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>



                </div>



              </div>
            </div> -->
            <!-- Events sec -->
            <div class="card_shadow">

              <div class="card-body pb-0 shadow_sec_padd">
                <div class="d-flex justify-content-between mb-3">
                  <div class="heading_sec">
                    <h2 class="main_heading">Events</h2>
                  </div>
                  <div class="heading_sec">
                    <a href="events.php" target="_blank" class="see_all_text">See All</a>
                  </div>
                </div>

                <div class="news">
                  <div class="post-item clearfix">


                    <div class="box_shadow mb-3">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="images">
                          <img src="../assets/img/news-1.jpg" alt="">
                        </div>
                        <div class="text_dates">
                          <h6>Tech Skills Event.</h6>
                          <small>SEP 9 2024</small>
                        </div>
                        <div class="button_view">
                          <a type="button" class="btn btn-primary btn-sm" href="events.php" target="_blank">view</a>
                        </div>
                      </div>
                    </div>
                    <div class="box_shadow mb-3">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="images">
                          <img src="../assets/img/news-1.jpg" alt="">
                        </div>
                        <div class="text_dates">
                          <h6>Tech Skills Event.</h6>
                          <small>SEP 9 2024</small>
                        </div>
                        <div class="button_view">
                          <a type="button" class="btn btn-primary btn-sm" href="events.php" target="_blank">view</a>
                        </div>
                      </div>
                    </div>
                    <div class="box_shadow mb-3">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="images">
                          <img src="../assets/img/news-1.jpg" alt="">
                        </div>
                        <div class="text_dates">
                          <h6>Tech Skills Event.</h6>
                          <small>SEP 9 2024</small>
                        </div>
                        <div class="button_view">
                          <a type="button" class="btn btn-primary btn-sm" href="events.php" target="_blank">view</a>
                        </div>
                      </div>
                    </div>
                  </div>



                </div><!-- End sidebar recent posts-->

              </div>
            </div><!-- End News & Updates -->

          </div><!-- End Right side columns -->

        </div>
      </div>
    </section>

  </main>
  <!-- End #main -->

 <!-- footer sec -->
 <?php include 'footer.php';?>