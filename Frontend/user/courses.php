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




<section class="courser_filter ">
  <div class="container-xxl">
    <div class="row">
      <div class="col-lg-12 p-lg-0 mb-3">
        <div class="card_shadow shadow_sec_padd">

          <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home" aria-selected="true">
                <span>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.2" d="M3 7.5L12 12.75L21 7.5L12 2.25L3 7.5Z" fill="#6E7485" />
                    <path d="M3 16.5L12 21.75L21 16.5" stroke="#6E7485" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3 12L12 17.25L21 12" stroke="#6E7485" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3 7.5L12 12.75L21 7.5L12 2.25L3 7.5Z" stroke="#6E7485" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                </span><span class="ms-2"> All Courses</span>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                <span>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.2" d="M15 3.75C15.488 4.39855 15.7512 5.18842 15.75 6V6.75H8.25V6C8.24877 5.18842 8.51205 4.39855 8.99995 3.75H5.25C5.15151 3.75 5.05398 3.76939 4.96298 3.80708C4.87199 3.84477 4.78931 3.90002 4.71966 3.96966C4.65002 4.03931 4.59477 4.12199 4.55708 4.21298C4.51939 4.30398 4.5 4.40151 4.5 4.5V20.25C4.5 20.3485 4.51939 20.446 4.55708 20.537C4.59477 20.628 4.65002 20.7107 4.71966 20.7803C4.78931 20.85 4.87199 20.9052 4.96298 20.9429C5.05398 20.9806 5.15151 21 5.25 21H18.75C18.8485 21 18.946 20.9806 19.037 20.9429C19.128 20.9052 19.2107 20.85 19.2803 20.7803C19.35 20.7107 19.4052 20.628 19.4429 20.537C19.4806 20.446 19.5 20.3485 19.5 20.25V4.5C19.5 4.40151 19.4806 4.30398 19.4429 4.21298C19.4052 4.12199 19.35 4.03931 19.2803 3.96966C19.2107 3.90002 19.128 3.84477 19.037 3.80708C18.946 3.76939 18.8485 3.75 18.75 3.75H15Z" fill="#6E7485" />
                    <path d="M9 14.25H15" stroke="#6E7485" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9 11.25H15" stroke="#6E7485" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15.0002 3.75H18.75C18.9489 3.75 19.1397 3.82902 19.2803 3.96967C19.421 4.11032 19.5 4.30109 19.5 4.5V20.25C19.5 20.4489 19.421 20.6397 19.2803 20.7803C19.1397 20.921 18.9489 21 18.75 21H5.25C5.05109 21 4.86032 20.921 4.71967 20.7803C4.57902 20.6397 4.5 20.4489 4.5 20.25V4.5C4.5 4.30109 4.57902 4.11032 4.71967 3.96967C4.86032 3.82902 5.05109 3.75 5.25 3.75H8.9998" stroke="#6E7485" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8.25 6.75V6C8.25 5.00544 8.64509 4.05161 9.34835 3.34835C10.0516 2.64509 11.0054 2.25 12 2.25C12.9946 2.25 13.9484 2.64509 14.6517 3.34835C15.3549 4.05161 15.75 5.00544 15.75 6V6.75H8.25Z" stroke="#6E7485" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>


                </span><span class="ms-2"> Your Courses</span>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                <span>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.2" d="M19.5 4.5H4.5C4.10218 4.5 3.72065 4.65804 3.43934 4.93934C3.15804 5.22065 3 5.60218 3 6V16.5C3 16.8978 3.15804 17.2794 3.43934 17.5607C3.72065 17.842 4.10218 18 4.5 18H19.5C19.8978 18 20.2794 17.842 20.5607 17.5607C20.842 17.2794 21 16.8978 21 16.5V6C21 5.60218 20.842 5.22065 20.5607 4.93934C20.2794 4.65804 19.8978 4.5 19.5 4.5ZM10.5 14.25V8.25L15 11.25L10.5 14.25Z" fill="#6E7485" />
                    <path d="M4.5 18L19.5 18C20.3284 18 21 17.3284 21 16.5V6C21 5.17157 20.3284 4.5 19.5 4.5L4.5 4.5C3.67157 4.5 3 5.17157 3 6V16.5C3 17.3284 3.67157 18 4.5 18Z" stroke="#6E7485" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15 21H9" stroke="#6E7485" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15 11.25L10.5 8.25V14.25L15 11.25Z" stroke="#6E7485" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                </span><span class="ms-2"> Track Progress</span>
              </button>
            </li>
          </ul>
          <div class="tab-content pt-2" id="borderedTabContent">
            <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                  <div class="course_select">
                    <label for="Sort By" class="form-label">Sort By</label>
                    <select class="form-select" aria-label="Sort By">
                      <option selected>Latest</option>
                      <option value="1">Price Asceding</option>
                      <option value="2">Price Deceding</option>
                      <option value="3">Free</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                  <div class="course_select">
                    <label for="Sort By" class="form-label">Category</label>
                    <select class="form-select" aria-label="Sort By">
                      <option selected>All Category</option>
                      <option value="1">Ui/Ux</option>
                      <option value="2">Development</option>
                      <option value="3">Security</option>
                    </select>
                  </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/c01.png" alt="c1" class="img-fluid w-100 mb-2">
                    <div class="d-flex justify-content-between">
                      <div class="course_heading">
                        <h4>Cybersecurity</h4>
                      </div>
                      <div class="course_headinfg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)" />
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6" />
                              <stop offset="1" stop-color="#0A2B7D" />
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">About Teacher</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
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
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)" />
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6" />
                              <stop offset="1" stop-color="#0A2B7D" />
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">About Teacher</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
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
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)" />
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6" />
                              <stop offset="1" stop-color="#0A2B7D" />
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">About Teacher</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
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
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)" />
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6" />
                              <stop offset="1" stop-color="#0A2B7D" />
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">About Teacher</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
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
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)" />
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6" />
                              <stop offset="1" stop-color="#0A2B7D" />
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">About Teacher</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
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
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)" />
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6" />
                              <stop offset="1" stop-color="#0A2B7D" />
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">About Teacher</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
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
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)" />
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6" />
                              <stop offset="1" stop-color="#0A2B7D" />
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">About Teacher</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
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
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)" />
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6" />
                              <stop offset="1" stop-color="#0A2B7D" />
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">About Teacher</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">

              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                  <div class="course_select">
                    <label for="Sort By" class="form-label">Sort By</label>
                    <select class="form-select" aria-label="Sort By">
                      <option selected>Latest</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                  <div class="course_select">
                    <label for="Sort By" class="form-label">Category</label>
                    <select class="form-select" aria-label="Sort By">
                      <option selected>All Category</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                  <div class="course_select">
                    <label for="Sort By" class="form-label">Rating</label>
                    <select class="form-select" aria-label="Sort By">
                      <option selected>4 Star & Up</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/c01.png" alt="c1" class="img-fluid w-100 mb-2">
                    <div class="d-flex justify-content-between">
                      <div class="course_heading">
                        <h4>Cybersecurity</h4>
                      </div>
                      <div class="course_headinfg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)" />
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6" />
                              <stop offset="1" stop-color="#0A2B7D" />
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">About Teacher</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
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
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)" />
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6" />
                              <stop offset="1" stop-color="#0A2B7D" />
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">About Teacher</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
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
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)" />
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6" />
                              <stop offset="1" stop-color="#0A2B7D" />
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">About Teacher</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
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
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)" />
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6" />
                              <stop offset="1" stop-color="#0A2B7D" />
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">About Teacher</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
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
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)" />
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6" />
                              <stop offset="1" stop-color="#0A2B7D" />
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">About Teacher</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
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
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)" />
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6" />
                              <stop offset="1" stop-color="#0A2B7D" />
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">About Teacher</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
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
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)" />
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6" />
                              <stop offset="1" stop-color="#0A2B7D" />
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">About Teacher</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
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
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)" />
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#59B5C6" />
                              <stop offset="1" stop-color="#0A2B7D" />
                            </linearGradient>
                          </defs>
                        </svg>

                        <span>5.0</span>

                      </div>
                    </div>

                    <small>Lorem Ipsum is simply dummy ...</small>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="course_heading">
                        <h6>Free</h6>
                      </div>
                      <div class="str_rate">

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                            <li><a class="dropdown-item" href="about_course.php" target="_blank">About Teacher</a></li>
                            <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="bordered-contact" role="tabpanel" aria-labelledby="contact-tab">

              <!-- track progress sec -->
              <section class="banner_slider">
                <div class="container-xxl p-lg-0 ">
                  <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-3">
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
                              <h2 class="mb-2">Welcome Back Amelia</h2>
                              <p>Go back to the Lessons</p>
                            </div>
                          </div>
                          <div class="carousel-item ">
                            <img src="../assets/img/banner.png" class="img-fluid" alt="banner">
                            <div class="carousel-caption  d-md-block">
                              <h2 class="mb-2">Learn from the Best</h2>
                              <p>Go back to the Lessons</p>
                            </div>
                          </div>
                          <div class="carousel-item ">
                            <img src="../assets/img/banner.png" class="img-fluid" alt="banner">
                            <div class="carousel-caption  d-md-block">
                              <h2 class="mb-2">Learn from the Best</h2>
                              <p>Explore our curated courses and master new skills, guided by industry experts.</p>
                            </div>
                          </div>

                        </div>

                      </div>


                      <div class="card_shadow shadow_sec_padd">
                        <div class="d-flex justify-content-between mb-3">
                          <div class="heading_sec">
                            <h2 class="main_heading text-dark">your Courses</h2>
                          </div>
                          <div class="heading_sec">
                            <a href="courses.php" class="see_all_text" target="_blank">See All</a>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
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

                                  <span>5$</span>

                                </div>
                              </div>

                              <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 25%">25%</div>
                              </div>

                              <div class="d-flex gap-4 flex-wrap mt-3">
                                <img src="../assets/img/profile-img.jpg" class=" rounded-circle object-fit-cover" alt="User Image" width="30" height="30">
                                <div>
                                  <span class="text-gray-600 text-13">Created by <a href="#" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline text-dark">Albert James</a> </span>
                                  <div class="d-flex gap-4">
                                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="bi bi-star-fill" style="color: #FF9F43;
                                        font-size: 12px;"></i>
                                    </span>
                                    <span class="text-13 fw-bold text-gray-600">4.9</span>
                                    <span class="text-13 fw-bold text-gray-600">(12k)</span>
                                  </div>
                                </div>
                              </div>


                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                            <div class="cards_courses">
                              <img src="../assets/img/c2.png" alt="c1" class="img-fluid w-100 mb-2">
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

                                  <span>25$</span>

                                </div>
                              </div>

                              <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 50%">50%</div>
                              </div>

                              <div class="d-flex gap-4 flex-wrap mt-3">
                                <img src="../assets/img/profile-img.jpg" class=" rounded-circle object-fit-cover" alt="User Image" width="30" height="30">
                                <div>
                                  <span class="text-gray-600 text-13">Created by <a href="#" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline text-dark">Albert James</a> </span>
                                  <div class="d-flex gap-4">
                                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="bi bi-star-fill" style="color: #FF9F43;
                                        font-size: 12px;"></i>
                                    </span>
                                    <span class="text-13 fw-bold text-gray-600">4.9</span>
                                    <span class="text-13 fw-bold text-gray-600">(12k)</span>
                                  </div>
                                </div>
                              </div>


                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                            <div class="cards_courses">
                              <img src="../assets/img/c3.png" alt="c1" class="img-fluid w-100 mb-2">
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

                                  <span>50$</span>

                                </div>
                              </div>

                              <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 60%">60%</div>
                              </div>

                              <div class="d-flex gap-4 flex-wrap mt-3">
                                <img src="../assets/img/profile-img.jpg" class=" rounded-circle object-fit-cover" alt="User Image" width="30" height="30">
                                <div>
                                  <span class="text-gray-600 text-13">Created by <a href="#" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline text-dark">Albert James</a> </span>
                                  <div class="d-flex gap-4">
                                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="bi bi-star-fill" style="color: #FF9F43;
                                        font-size: 12px;"></i>
                                    </span>
                                    <span class="text-13 fw-bold text-gray-600">4.9</span>
                                    <span class="text-13 fw-bold text-gray-600">(12k)</span>
                                  </div>
                                </div>
                              </div>


                            </div>
                          </div>

                        </div>

                        <!-- full calander  -->

                        <!-- edns -->

                      </div>

                      <div id='wrap'>

                        <div id='calendar_events'></div>

                        <div style='clear:both'></div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                      <div class="calendar calendar-first" id="calendar_first">
                        <div class="calendar_header">
                          <button class="switch-month switch-left"> <i class="fa fa-chevron-left"></i></button>
                          <h2></h2>
                          <button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
                        </div>
                        <div class="calendar_weekdays"></div>
                        <div class="calendar_content"></div>
                      </div>

                      <div class="progrees_home ">
                        <div class="d-flex justify-content-between">
                          <div>
                            <h5>Homework Progress</h5>
                          </div>

                          <div class="str_rate">
                            <div class="filter ">
                              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li><a class="dropdown-item active" href="add_course.php" target="_blank">View Course Details</a></li>
                                <li><a class="dropdown-item" href="about_course.php" target="_blank">About Teacher</a></li>
                                <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
                              </ul>
                            </div>

                          </div>
                        </div>

                        <div class="work_progress">
                          <h6>Optimizing work</h6>
                          <p class="text-dark text-start " style="font-size: 13px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dignissimos mollitia in quis at voluptas corrupti.</p>
                          <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 50%">50%</div>
                          </div>
                        </div>
                      </div>
                      <div class="progrees_home ">
                        

                        <div class="work_progress">
                          <h6>Optimizing work</h6>
                          <p class="text-dark text-start " style="font-size: 13px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dignissimos mollitia in quis at voluptas corrupti.</p>
                          <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 80%">80%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

              <!-- all course sec -->


              <!-- ends track progress sec -->
            </div>
          </div><!-- End Bordered Tabs -->

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