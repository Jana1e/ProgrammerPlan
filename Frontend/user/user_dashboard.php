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
                                            <span class="ps-2  ">Update Profile</span>
                                        </div>


                                    </div>
                                </a>
                                <hr>

                                <a href="user_dashboard.php">
                                    <div class="d-flex justify-content-between mb-3 ">
                                        <div class="health_category">
                                            <span class="ps-2 active ">My Dashboard</span>
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

                    <div class="col-lg-8 ">
                        <div class="cip_sec cip_sec">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>courses in progress</h5>
                                </div>
                                <div>
                                    <div class=" text-center">

                                        <a href="#" class="hk_btns text-white rounded-2">
                                            See all
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-3 mb-3">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                                    <div class="cards_courses">
                                        <img src="../assets/img/cip1.png" alt="c1" class="img-fluid w-100 mb-2">
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="course_heading">
                                                <h6>Free</h6>
                                            </div>

                                            <div class="str_rate">

                                                <div class="filter ">
                                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                                        <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#logIn">Edit Course</a></li>
                                                        <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                                                        <li><a class="dropdown-item" href="#" target="_blank">Delete Course </a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>

                                        <hr class="m-2 mb-2">

                                        <div class="progress mb-2" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 50%; background-color:#164088;"></div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div class="pc_sec">
                                                <small>Completed 30%</small>
                                            </div>
                                            <div class="pc_sec">
                                                <small>3/10</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                                    <div class="cards_courses">
                                        <img src="../assets/img/cip3.png" alt="c1" class="img-fluid w-100 mb-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="course_heading">
                                                <h4>Full-Stack Bootcamp</h4>
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="course_heading">
                                                <h6>Free</h6>
                                            </div>

                                            <div class="str_rate">

                                                <div class="filter ">
                                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                                        <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#logIn">Edit Course</a></li>
                                                        <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                                                        <li><a class="dropdown-item" href="#" target="_blank">Delete Course </a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>

                                        <hr class="m-2 mb-2">

                                        <div class="progress mb-2" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 50%; background-color:#164088;"></div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div class="pc_sec">
                                                <small>Completed 30%</small>
                                            </div>
                                            <div class="pc_sec">
                                                <small>3/10</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                                    <div class="cards_courses">
                                        <img src="../assets/img/cip2.png" alt="c1" class="img-fluid w-100 mb-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="course_heading">
                                                <h4>front end development</h4>
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="course_heading">
                                                <h6>Free</h6>
                                            </div>

                                            <div class="str_rate">

                                                <div class="filter ">
                                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                                        <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#logIn">Edit Course</a></li>
                                                        <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                                                        <li><a class="dropdown-item" href="#" target="_blank">Delete Course </a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>

                                        <hr class="m-2 mb-2">

                                        <div class="progress mb-2" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 50%; background-color:#164088;"></div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div class="pc_sec">
                                                <small>Completed 30%</small>
                                            </div>
                                            <div class="pc_sec">
                                                <small>3/10</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5>Home works</h5>
                                        </div>
                                        <div>
                                            <div class=" text-center">

                                                <a href="#" class="">
                                                    See All
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="table-responsive  progress_tables_">
                                        <table class="table mb-3">
                                            <tbody class="progress_tables">
                                                <tr>
                                                    <!-- <th scope="row">1</th> -->
                                                    <td>
                                                        <img src="../assets/img/tb.png" alt="tb" class="img-fluid">
                                                    </td>
                                                    <td>
                                                        <b>Code a Function</b> <br>
                                                        <span>web permeance</span>
                                                    </td>
                                                    <td>
                                                        <b>Remaining</b> <br>
                                                        <span>30%</span>
                                                    </td>

                                                    <td>
                                                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.8002 14.8141L9.02669 21.2092H7.87937L10.6828 14.9339H6.99144V13.9661H11.8002V14.8141ZM12.8734 17.4779C12.8734 16.3273 13.0663 15.4294 13.4521 14.7842C13.8445 14.1324 14.5163 13.8065 15.4674 13.8065C16.4185 13.8065 17.0869 14.1324 17.4727 14.7842C17.8651 15.4294 18.0613 16.3273 18.0613 17.4779C18.0613 18.6419 17.8651 19.5531 17.4727 20.2116C17.0869 20.8634 16.4185 21.1893 15.4674 21.1893C14.5163 21.1893 13.8445 20.8634 13.4521 20.2116C13.0663 19.5531 12.8734 18.6419 12.8734 17.4779ZM16.9439 17.4779C16.9439 16.9392 16.9074 16.4836 16.8342 16.1111C16.7677 15.7386 16.628 15.436 16.4152 15.2032C16.2023 14.9638 15.8864 14.8441 15.4674 14.8441C15.0484 14.8441 14.7324 14.9638 14.5196 15.2032C14.3068 15.436 14.1638 15.7386 14.0906 16.1111C14.0241 16.4836 13.9908 16.9392 13.9908 17.4779C13.9908 18.0366 14.0241 18.5055 14.0906 18.8846C14.1571 19.2638 14.2968 19.5697 14.5096 19.8025C14.7291 20.0353 15.0484 20.1517 15.4674 20.1517C15.8864 20.1517 16.2023 20.0353 16.4152 19.8025C16.6347 19.5697 16.7777 19.2638 16.8442 18.8846C16.9107 18.5055 16.9439 18.0366 16.9439 17.4779ZM19.185 15.6921C19.185 15.2066 19.3246 14.8274 19.604 14.5547C19.89 14.2754 20.2558 14.1357 20.7014 14.1357C21.1471 14.1357 21.5095 14.2754 21.7889 14.5547C22.0749 14.8274 22.2179 15.2066 22.2179 15.6921C22.2179 16.1776 22.0749 16.5601 21.7889 16.8394C21.5095 17.1188 21.1471 17.2584 20.7014 17.2584C20.2558 17.2584 19.89 17.1188 19.604 16.8394C19.3246 16.5601 19.185 16.1776 19.185 15.6921ZM25.2708 14.2654L21.2901 21.2092H20.1727L24.1534 14.2654H25.2708ZM20.7014 14.8241C20.2824 14.8241 20.0729 15.1134 20.0729 15.6921C20.0729 16.2774 20.2824 16.57 20.7014 16.57C20.901 16.57 21.0539 16.5002 21.1604 16.3605C21.2734 16.2142 21.33 15.9914 21.33 15.6921C21.33 15.1134 21.1205 14.8241 20.7014 14.8241ZM23.2455 19.7726C23.2455 19.287 23.3852 18.9079 23.6645 18.6352C23.9505 18.3559 24.3163 18.2162 24.762 18.2162C25.2009 18.2162 25.5601 18.3559 25.8395 18.6352C26.1255 18.9079 26.2685 19.287 26.2685 19.7726C26.2685 20.2581 26.1255 20.6406 25.8395 20.9199C25.5601 21.1993 25.2009 21.3389 24.762 21.3389C24.3163 21.3389 23.9505 21.1993 23.6645 20.9199C23.3852 20.6406 23.2455 20.2581 23.2455 19.7726ZM24.752 18.9046C24.333 18.9046 24.1235 19.1939 24.1235 19.7726C24.1235 20.3512 24.333 20.6406 24.752 20.6406C25.171 20.6406 25.3805 20.3512 25.3805 19.7726C25.3805 19.1939 25.171 18.9046 24.752 18.9046Z" fill="#838282" />
                                                            <path d="M33 16.5C33 25.6127 25.6127 33 16.5 33C7.3873 33 0 25.6127 0 16.5C0 7.3873 7.3873 0 16.5 0C25.6127 0 33 7.3873 33 16.5ZM1.79669 16.5C1.79669 24.6204 8.37959 31.2033 16.5 31.2033C24.6204 31.2033 31.2033 24.6204 31.2033 16.5C31.2033 8.37959 24.6204 1.79669 16.5 1.79669C8.37959 1.79669 1.79669 8.37959 1.79669 16.5Z" fill="#D9D9D9" />
                                                            <path d="M25.6658 29.1324C25.9553 29.5314 25.8678 30.0918 25.4537 30.3593C22.9356 31.9862 20.0164 32.8994 17.0087 32.9922C13.7029 33.0941 10.4429 32.2003 7.6514 30.4267C4.85992 28.6531 2.66586 26.0815 1.35386 23.0456C0.041858 20.0097 -0.327529 16.6495 0.293618 13.4011C0.914766 10.1527 2.49778 7.16587 4.83729 4.82818C7.17681 2.4905 10.1648 0.909815 13.4138 0.291204C16.6627 -0.327408 20.0225 0.0446035 23.0574 1.35897C25.8187 2.55486 28.195 4.48066 29.9353 6.92177C30.2215 7.32318 30.0961 7.87633 29.6798 8.14038C29.2635 8.40443 28.7141 8.27916 28.4253 7.87963C26.8786 5.73983 24.7808 4.05083 22.3479 2.99718C19.6414 1.82501 16.6451 1.49325 13.7477 2.04493C10.8503 2.59661 8.18554 4.00627 6.09915 6.09103C4.01277 8.17579 2.60103 10.8394 2.04709 13.7364C1.49314 16.6333 1.82257 19.6299 2.99261 22.3374C4.16266 25.0448 6.11933 27.3381 8.60879 28.9199C11.0982 30.5016 14.0056 31.2987 16.9536 31.2078C19.6036 31.126 22.1765 30.3302 24.4036 28.912C24.8195 28.6472 25.3763 28.7334 25.6658 29.1324Z" fill="#164088" />
                                                        </svg>

                                                    </td>
                                                    <td>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.475 12C10.475 12.8422 11.1578 13.525 12 13.525C12.8422 13.525 13.525 12.8422 13.525 12C13.525 11.1578 12.8422 10.475 12 10.475C11.1578 10.475 10.475 11.1578 10.475 12Z" fill="#8C94A3" stroke="#8C94A3" stroke-width="0.8" />
                                                            <path d="M10.475 19C10.475 19.8422 11.1578 20.525 12 20.525C12.8422 20.525 13.525 19.8422 13.525 19C13.525 18.1578 12.8422 17.475 12 17.475C11.1578 17.475 10.475 18.1578 10.475 19Z" fill="#8C94A3" stroke="#8C94A3" stroke-width="0.8" />
                                                            <path d="M10.475 5C10.475 5.84223 11.1578 6.525 12 6.525C12.8422 6.525 13.525 5.84223 13.525 5C13.525 4.15777 12.8422 3.475 12 3.475C11.1578 3.475 10.475 4.15777 10.475 5Z" fill="#8C94A3" stroke="#8C94A3" stroke-width="0.8" />
                                                        </svg>

                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <table class="table mb-3">
                                            <tbody class="progress_tables">
                                                <tr>
                                                    <!-- <th scope="row">1</th> -->
                                                    <td>
                                                        <img src="../assets/img/tb.png" alt="tb" class="img-fluid">
                                                    </td>
                                                    <td>
                                                        <b>Design a Mockup</b> <br>
                                                        <span> front end </span>
                                                    </td>
                                                    <td>
                                                        <b>Remaining</b> <br>
                                                        <span>30%</span>
                                                    </td>

                                                    <td>
                                                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.8002 14.8141L9.02669 21.2092H7.87937L10.6828 14.9339H6.99144V13.9661H11.8002V14.8141ZM12.8734 17.4779C12.8734 16.3273 13.0663 15.4294 13.4521 14.7842C13.8445 14.1324 14.5163 13.8065 15.4674 13.8065C16.4185 13.8065 17.0869 14.1324 17.4727 14.7842C17.8651 15.4294 18.0613 16.3273 18.0613 17.4779C18.0613 18.6419 17.8651 19.5531 17.4727 20.2116C17.0869 20.8634 16.4185 21.1893 15.4674 21.1893C14.5163 21.1893 13.8445 20.8634 13.4521 20.2116C13.0663 19.5531 12.8734 18.6419 12.8734 17.4779ZM16.9439 17.4779C16.9439 16.9392 16.9074 16.4836 16.8342 16.1111C16.7677 15.7386 16.628 15.436 16.4152 15.2032C16.2023 14.9638 15.8864 14.8441 15.4674 14.8441C15.0484 14.8441 14.7324 14.9638 14.5196 15.2032C14.3068 15.436 14.1638 15.7386 14.0906 16.1111C14.0241 16.4836 13.9908 16.9392 13.9908 17.4779C13.9908 18.0366 14.0241 18.5055 14.0906 18.8846C14.1571 19.2638 14.2968 19.5697 14.5096 19.8025C14.7291 20.0353 15.0484 20.1517 15.4674 20.1517C15.8864 20.1517 16.2023 20.0353 16.4152 19.8025C16.6347 19.5697 16.7777 19.2638 16.8442 18.8846C16.9107 18.5055 16.9439 18.0366 16.9439 17.4779ZM19.185 15.6921C19.185 15.2066 19.3246 14.8274 19.604 14.5547C19.89 14.2754 20.2558 14.1357 20.7014 14.1357C21.1471 14.1357 21.5095 14.2754 21.7889 14.5547C22.0749 14.8274 22.2179 15.2066 22.2179 15.6921C22.2179 16.1776 22.0749 16.5601 21.7889 16.8394C21.5095 17.1188 21.1471 17.2584 20.7014 17.2584C20.2558 17.2584 19.89 17.1188 19.604 16.8394C19.3246 16.5601 19.185 16.1776 19.185 15.6921ZM25.2708 14.2654L21.2901 21.2092H20.1727L24.1534 14.2654H25.2708ZM20.7014 14.8241C20.2824 14.8241 20.0729 15.1134 20.0729 15.6921C20.0729 16.2774 20.2824 16.57 20.7014 16.57C20.901 16.57 21.0539 16.5002 21.1604 16.3605C21.2734 16.2142 21.33 15.9914 21.33 15.6921C21.33 15.1134 21.1205 14.8241 20.7014 14.8241ZM23.2455 19.7726C23.2455 19.287 23.3852 18.9079 23.6645 18.6352C23.9505 18.3559 24.3163 18.2162 24.762 18.2162C25.2009 18.2162 25.5601 18.3559 25.8395 18.6352C26.1255 18.9079 26.2685 19.287 26.2685 19.7726C26.2685 20.2581 26.1255 20.6406 25.8395 20.9199C25.5601 21.1993 25.2009 21.3389 24.762 21.3389C24.3163 21.3389 23.9505 21.1993 23.6645 20.9199C23.3852 20.6406 23.2455 20.2581 23.2455 19.7726ZM24.752 18.9046C24.333 18.9046 24.1235 19.1939 24.1235 19.7726C24.1235 20.3512 24.333 20.6406 24.752 20.6406C25.171 20.6406 25.3805 20.3512 25.3805 19.7726C25.3805 19.1939 25.171 18.9046 24.752 18.9046Z" fill="#838282" />
                                                            <path d="M33 16.5C33 25.6127 25.6127 33 16.5 33C7.3873 33 0 25.6127 0 16.5C0 7.3873 7.3873 0 16.5 0C25.6127 0 33 7.3873 33 16.5ZM1.79669 16.5C1.79669 24.6204 8.37959 31.2033 16.5 31.2033C24.6204 31.2033 31.2033 24.6204 31.2033 16.5C31.2033 8.37959 24.6204 1.79669 16.5 1.79669C8.37959 1.79669 1.79669 8.37959 1.79669 16.5Z" fill="#D9D9D9" />
                                                            <path d="M25.6658 29.1324C25.9553 29.5314 25.8678 30.0918 25.4537 30.3593C22.9356 31.9862 20.0164 32.8994 17.0087 32.9922C13.7029 33.0941 10.4429 32.2003 7.6514 30.4267C4.85992 28.6531 2.66586 26.0815 1.35386 23.0456C0.041858 20.0097 -0.327529 16.6495 0.293618 13.4011C0.914766 10.1527 2.49778 7.16587 4.83729 4.82818C7.17681 2.4905 10.1648 0.909815 13.4138 0.291204C16.6627 -0.327408 20.0225 0.0446035 23.0574 1.35897C25.8187 2.55486 28.195 4.48066 29.9353 6.92177C30.2215 7.32318 30.0961 7.87633 29.6798 8.14038C29.2635 8.40443 28.7141 8.27916 28.4253 7.87963C26.8786 5.73983 24.7808 4.05083 22.3479 2.99718C19.6414 1.82501 16.6451 1.49325 13.7477 2.04493C10.8503 2.59661 8.18554 4.00627 6.09915 6.09103C4.01277 8.17579 2.60103 10.8394 2.04709 13.7364C1.49314 16.6333 1.82257 19.6299 2.99261 22.3374C4.16266 25.0448 6.11933 27.3381 8.60879 28.9199C11.0982 30.5016 14.0056 31.2987 16.9536 31.2078C19.6036 31.126 22.1765 30.3302 24.4036 28.912C24.8195 28.6472 25.3763 28.7334 25.6658 29.1324Z" fill="#164088" />
                                                        </svg>

                                                    </td>
                                                    <td>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.475 12C10.475 12.8422 11.1578 13.525 12 13.525C12.8422 13.525 13.525 12.8422 13.525 12C13.525 11.1578 12.8422 10.475 12 10.475C11.1578 10.475 10.475 11.1578 10.475 12Z" fill="#8C94A3" stroke="#8C94A3" stroke-width="0.8" />
                                                            <path d="M10.475 19C10.475 19.8422 11.1578 20.525 12 20.525C12.8422 20.525 13.525 19.8422 13.525 19C13.525 18.1578 12.8422 17.475 12 17.475C11.1578 17.475 10.475 18.1578 10.475 19Z" fill="#8C94A3" stroke="#8C94A3" stroke-width="0.8" />
                                                            <path d="M10.475 5C10.475 5.84223 11.1578 6.525 12 6.525C12.8422 6.525 13.525 5.84223 13.525 5C13.525 4.15777 12.8422 3.475 12 3.475C11.1578 3.475 10.475 4.15777 10.475 5Z" fill="#8C94A3" stroke="#8C94A3" stroke-width="0.8" />
                                                        </svg>

                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <table class="table mb-3">
                                            <tbody class="progress_tables">
                                                <tr>
                                                    <!-- <th scope="row">1</th> -->
                                                    <td>
                                                        <img src="../assets/img/tb.png" alt="tb" class="img-fluid">
                                                    </td>
                                                    <td>
                                                        <b>Build a Nav Bar</b> <br>
                                                        <span> front end </span>
                                                    </td>
                                                    <td>
                                                        <b>Remaining</b> <br>
                                                        <span>30%</span>
                                                    </td>

                                                    <td>
                                                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.8002 14.8141L9.02669 21.2092H7.87937L10.6828 14.9339H6.99144V13.9661H11.8002V14.8141ZM12.8734 17.4779C12.8734 16.3273 13.0663 15.4294 13.4521 14.7842C13.8445 14.1324 14.5163 13.8065 15.4674 13.8065C16.4185 13.8065 17.0869 14.1324 17.4727 14.7842C17.8651 15.4294 18.0613 16.3273 18.0613 17.4779C18.0613 18.6419 17.8651 19.5531 17.4727 20.2116C17.0869 20.8634 16.4185 21.1893 15.4674 21.1893C14.5163 21.1893 13.8445 20.8634 13.4521 20.2116C13.0663 19.5531 12.8734 18.6419 12.8734 17.4779ZM16.9439 17.4779C16.9439 16.9392 16.9074 16.4836 16.8342 16.1111C16.7677 15.7386 16.628 15.436 16.4152 15.2032C16.2023 14.9638 15.8864 14.8441 15.4674 14.8441C15.0484 14.8441 14.7324 14.9638 14.5196 15.2032C14.3068 15.436 14.1638 15.7386 14.0906 16.1111C14.0241 16.4836 13.9908 16.9392 13.9908 17.4779C13.9908 18.0366 14.0241 18.5055 14.0906 18.8846C14.1571 19.2638 14.2968 19.5697 14.5096 19.8025C14.7291 20.0353 15.0484 20.1517 15.4674 20.1517C15.8864 20.1517 16.2023 20.0353 16.4152 19.8025C16.6347 19.5697 16.7777 19.2638 16.8442 18.8846C16.9107 18.5055 16.9439 18.0366 16.9439 17.4779ZM19.185 15.6921C19.185 15.2066 19.3246 14.8274 19.604 14.5547C19.89 14.2754 20.2558 14.1357 20.7014 14.1357C21.1471 14.1357 21.5095 14.2754 21.7889 14.5547C22.0749 14.8274 22.2179 15.2066 22.2179 15.6921C22.2179 16.1776 22.0749 16.5601 21.7889 16.8394C21.5095 17.1188 21.1471 17.2584 20.7014 17.2584C20.2558 17.2584 19.89 17.1188 19.604 16.8394C19.3246 16.5601 19.185 16.1776 19.185 15.6921ZM25.2708 14.2654L21.2901 21.2092H20.1727L24.1534 14.2654H25.2708ZM20.7014 14.8241C20.2824 14.8241 20.0729 15.1134 20.0729 15.6921C20.0729 16.2774 20.2824 16.57 20.7014 16.57C20.901 16.57 21.0539 16.5002 21.1604 16.3605C21.2734 16.2142 21.33 15.9914 21.33 15.6921C21.33 15.1134 21.1205 14.8241 20.7014 14.8241ZM23.2455 19.7726C23.2455 19.287 23.3852 18.9079 23.6645 18.6352C23.9505 18.3559 24.3163 18.2162 24.762 18.2162C25.2009 18.2162 25.5601 18.3559 25.8395 18.6352C26.1255 18.9079 26.2685 19.287 26.2685 19.7726C26.2685 20.2581 26.1255 20.6406 25.8395 20.9199C25.5601 21.1993 25.2009 21.3389 24.762 21.3389C24.3163 21.3389 23.9505 21.1993 23.6645 20.9199C23.3852 20.6406 23.2455 20.2581 23.2455 19.7726ZM24.752 18.9046C24.333 18.9046 24.1235 19.1939 24.1235 19.7726C24.1235 20.3512 24.333 20.6406 24.752 20.6406C25.171 20.6406 25.3805 20.3512 25.3805 19.7726C25.3805 19.1939 25.171 18.9046 24.752 18.9046Z" fill="#838282" />
                                                            <path d="M33 16.5C33 25.6127 25.6127 33 16.5 33C7.3873 33 0 25.6127 0 16.5C0 7.3873 7.3873 0 16.5 0C25.6127 0 33 7.3873 33 16.5ZM1.79669 16.5C1.79669 24.6204 8.37959 31.2033 16.5 31.2033C24.6204 31.2033 31.2033 24.6204 31.2033 16.5C31.2033 8.37959 24.6204 1.79669 16.5 1.79669C8.37959 1.79669 1.79669 8.37959 1.79669 16.5Z" fill="#D9D9D9" />
                                                            <path d="M25.6658 29.1324C25.9553 29.5314 25.8678 30.0918 25.4537 30.3593C22.9356 31.9862 20.0164 32.8994 17.0087 32.9922C13.7029 33.0941 10.4429 32.2003 7.6514 30.4267C4.85992 28.6531 2.66586 26.0815 1.35386 23.0456C0.041858 20.0097 -0.327529 16.6495 0.293618 13.4011C0.914766 10.1527 2.49778 7.16587 4.83729 4.82818C7.17681 2.4905 10.1648 0.909815 13.4138 0.291204C16.6627 -0.327408 20.0225 0.0446035 23.0574 1.35897C25.8187 2.55486 28.195 4.48066 29.9353 6.92177C30.2215 7.32318 30.0961 7.87633 29.6798 8.14038C29.2635 8.40443 28.7141 8.27916 28.4253 7.87963C26.8786 5.73983 24.7808 4.05083 22.3479 2.99718C19.6414 1.82501 16.6451 1.49325 13.7477 2.04493C10.8503 2.59661 8.18554 4.00627 6.09915 6.09103C4.01277 8.17579 2.60103 10.8394 2.04709 13.7364C1.49314 16.6333 1.82257 19.6299 2.99261 22.3374C4.16266 25.0448 6.11933 27.3381 8.60879 28.9199C11.0982 30.5016 14.0056 31.2987 16.9536 31.2078C19.6036 31.126 22.1765 30.3302 24.4036 28.912C24.8195 28.6472 25.3763 28.7334 25.6658 29.1324Z" fill="#164088" />
                                                        </svg>

                                                    </td>
                                                    <td>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.475 12C10.475 12.8422 11.1578 13.525 12 13.525C12.8422 13.525 13.525 12.8422 13.525 12C13.525 11.1578 12.8422 10.475 12 10.475C11.1578 10.475 10.475 11.1578 10.475 12Z" fill="#8C94A3" stroke="#8C94A3" stroke-width="0.8" />
                                                            <path d="M10.475 19C10.475 19.8422 11.1578 20.525 12 20.525C12.8422 20.525 13.525 19.8422 13.525 19C13.525 18.1578 12.8422 17.475 12 17.475C11.1578 17.475 10.475 18.1578 10.475 19Z" fill="#8C94A3" stroke="#8C94A3" stroke-width="0.8" />
                                                            <path d="M10.475 5C10.475 5.84223 11.1578 6.525 12 6.525C12.8422 6.525 13.525 5.84223 13.525 5C13.525 4.15777 12.8422 3.475 12 3.475C11.1578 3.475 10.475 4.15777 10.475 5Z" fill="#8C94A3" stroke="#8C94A3" stroke-width="0.8" />
                                                        </svg>

                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="calander_sec">
                                        <div class="calendar calendar-first" id="calendar_first">
                                            <div class="calendar_header">
                                                <button class="switch-month switch-left"> <i class="fa fa-chevron-left"></i></button>
                                                <h2></h2>
                                                <button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
                                            </div>
                                            <div class="calendar_weekdays"></div>
                                            <div class="calendar_content"></div>
                                        </div>
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


</main><!-- End #main -->


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
<!-- add course Modal ends -->

<!-- footer sec -->
<?php include 'footer.php'; ?>