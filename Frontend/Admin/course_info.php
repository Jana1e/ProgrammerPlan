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
                <a href="teacher_profile.php">
                  <div class="d-flex justify-content-between mb-3 ">
                    <div class="health_category ">
                      <span class="ps-2  ">Personal Information</span>
                    </div>


                  </div>
                </a>
                <hr>

                <a href="course_info.php">
                  <div class="d-flex justify-content-between mb-3 ">
                    <div class="health_category">
                      <span class="ps-2 active">Courses Information</span>
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
                  <h5>My Courses</h5>
                </div>
                <div>
                  <div class=" text-center">
                    <a href="#" class="hk_btns text-white rounded-2 me-2" data-bs-toggle="modal" data-bs-target="#Addquiz">
                      Create Quiz
                    </a>
                    <a href="#" class="hk_btns text-white rounded-2" data-bs-toggle="modal" data-bs-target="#logIn">
                      +Add New Course
                    </a>
                  </div>
                </div>

              </div>

              <div class="row mt-3">
                <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/c01.png" alt="c1" class="img-fluid w-100 mb-2">
                    <div class="d-flex justify-content-between">
                      <div class="course_heading">
                        <h4>Web Performance</h4>
                      </div>
                      <div class="course_headinfg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="#FFCC00" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)"></path>
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#FFCC00"></stop>
                              <stop offset="1" stop-color="#FFCC00"></stop>
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

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                            <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#EditWork">Edit Course</a></li>
                            <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                            <li><a class="dropdown-item" href="#" target="_blank">Delete Course </a></li>
                          </ul>
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
                        <h4>JavaScript Basics</h4>
                      </div>
                      <div class="course_headinfg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="#FFCC00" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)"></path>
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#FFCC00"></stop>
                              <stop offset="1" stop-color="#FFCC00"></stop>
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

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                            <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#EditWork">Edit Course</a></li>
                            <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                            <li><a class="dropdown-item" href="#" target="_blank">Delete Course </a></li>
                          </ul>
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
                        <h4>Python Advanced</h4>
                      </div>
                      <div class="course_headinfg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="#FFCC00" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)"></path>
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#FFCC00"></stop>
                              <stop offset="1" stop-color="#FFCC00"></stop>
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

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                            <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#EditWork">Edit Course</a></li>
                            <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                            <li><a class="dropdown-item" href="#" target="_blank">Delete Course </a></li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/c4.png" alt="c1" class="img-fluid w-100 mb-2">
                    <div class="d-flex justify-content-between">
                      <div class="course_heading">
                        <h4>Python Advanced</h4>
                      </div>
                      <div class="course_headinfg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="#FFCC00" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)"></path>
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#FFCC00"></stop>
                              <stop offset="1" stop-color="#FFCC00"></stop>
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

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                            <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#EditWork">Edit Course</a></li>
                            <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                            <li><a class="dropdown-item" href="#" target="_blank">Delete Course </a></li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/c5.png" alt="c1" class="img-fluid w-100 mb-2">
                    <div class="d-flex justify-content-between">
                      <div class="course_heading">
                        <h4>React Mastery</h4>
                      </div>
                      <div class="course_headinfg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="#FFCC00" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)"></path>
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#FFCC00"></stop>
                              <stop offset="1" stop-color="#FFCC00"></stop>
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

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                            <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#EditWork">Edit Course</a></li>
                            <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                            <li><a class="dropdown-item" href="#" target="_blank">Delete Course </a></li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                  <div class="cards_courses">
                    <img src="../assets/img/c7.png" alt="c1" class="img-fluid w-100 mb-2">
                    <div class="d-flex justify-content-between">
                      <div class="course_heading">
                        <h4>Node.js API</h4>
                      </div>
                      <div class="course_headinfg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="#FFCC00" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z" fill="url(#paint0_linear_201_8073)"></path>
                          <defs>
                            <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10" y2="17.5" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#FFCC00"></stop>
                              <stop offset="1" stop-color="#FFCC00"></stop>
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

                        <div class="filter ">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                            <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#EditWork">Edit Course</a></li>
                            <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                            <li><a class="dropdown-item" href="#" target="_blank">Delete Course </a></li>
                          </ul>
                        </div>

                      </div>
                    </div>
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
                    <h2 class="main_heading">Add Course</h2>
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
                        <label for="floatingInput"> Add Course price </label>
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
<!-- add course Modal ends -->


<!-- add course  Modal -->
<div class="modal fade" id="Addquiz" tabindex="-1" aria-labelledby="AddquizLabel" aria-hidden="true" id>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="AddquizLabel">
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
                    <h2 class="main_heading">Create Quiz</h2>
                  </div>

                </div>
                <form>
                  <div class="row g-3">

                    <div class="col-md-12">
                      <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Add  your Language">
                        <label for="floatingInput">Language</label>
                      </div>

                    </div>

                    <div class="col-12">
                      <div class="form-floating">
                        <select class="form-select" id="category" aria-label="Floating label select example">
                          <!-- <option selected>select main category</option> -->
                          <option value="1">Free </option>
                          <option value="2">Paid</option>
                          
                        </select>
                        <label for="category">select main category</label>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Question Type">
                        <label for="floatingInput">Question Type</label>
                      </div>

                    </div>

                    <div class="col-md-6">
                      <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Question Type">
                        <label for="floatingInput">A</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Question Type">
                        <label for="floatingInput">B</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Question Type">
                        <label for="floatingInput">C</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Question Type">
                        <label for="floatingInput">D</label>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Use this space to share a brief description about your Course. " id="floatingTextarea" rows="8" style="height: 100px"></textarea>
                        <label for="floatingTextarea">Answer</label>
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
<!-- add course Modal ends -->

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