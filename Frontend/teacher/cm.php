<?php include 'header.php'; ?>

<div id="content_manage_teacher">

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
                <button class="nav-link w-100" id="addwork-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-addwork" type="button" role="tab" aria-controls="addwork" aria-selected="false">Add New</button>
            </li>

        </ul>
        <div class="tab-content pt-2" id="reviewContent">
            <div class="tab-pane fade show active" id="bordered-justified-review" role="tabpanel" aria-labelledby="review-tab">
                <!-- Review work sec -->
                <div class="row justify-content-center">
                    <div class="d-flex justify-content-end ">
                        <a href="#">See All</a>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-12 mb-3">
                        <div class="course_sec ">

                            <div class="str_rate float-end">
                                <div class="filter ">
                                    <a class="icon show" href="#" data-bs-toggle="dropdown" aria-expanded="true">
                                        <svg width="11" height="30" viewBox="0 0 11 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="5.49879" cy="4.79762" r="4.54762" fill="#616161" />
                                            <circle cx="5.49879" cy="24.1248" r="4.54762" fill="#616161" />
                                            <circle cx="5.49879" cy="43.4524" r="4.54762" fill="#616161" />
                                        </svg>

                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow ">

                                        <li><a class="dropdown-item " href="#" target="_blank">View Course Details</a></li>
                                        <li><a class="dropdown-item" href="#">Edit Course </a></li>
                                        <li><a class="dropdown-item" href="#">Delete Course </a></li>



                                    </ul>
                                </div>

                            </div>
                            <div class="card">
                                <img src="../assets/img/course1.png" alt="course1" class="img-fluid">
                                <div class="card_text">
                                    <div class="d-flex justify-content-between">
                                        <div class="dev_text">
                                            <small>Developments</small>
                                        </div>

                                        <div class="freeText">
                                            <h6>Free</h6>
                                        </div>
                                    </div>
                                    <p class="card_text_1">
                                        Machine Learning A-Z™: Hands-On Python &amp; R In Data Science
                                    </p>

                                    <div class="d-flex justify-content-between">
                                        <div class="dev_svg">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.4135 17.8812L17.1419 20.8769C17.7463 21.2598 18.4967 20.6903 18.3173 19.9847L16.9512 14.6108C16.9127 14.4611 16.9173 14.3036 16.9643 14.1564C17.0114 14.0092 17.0991 13.8783 17.2172 13.7787L21.4573 10.2496C22.0144 9.78588 21.7269 8.86126 21.0111 8.81481L15.4738 8.45544C15.3247 8.44479 15.1816 8.39198 15.0613 8.30317C14.941 8.21437 14.8484 8.09321 14.7943 7.95382L12.7292 2.75323C12.673 2.60528 12.5732 2.4779 12.443 2.38802C12.3127 2.29814 12.1582 2.25 12 2.25C11.8418 2.25 11.6873 2.29814 11.557 2.38802C11.4268 2.4779 11.327 2.60528 11.2708 2.75323L9.20568 7.95382C9.15157 8.09321 9.05897 8.21437 8.93868 8.30317C8.81838 8.39198 8.67533 8.44479 8.52618 8.45544L2.98894 8.81481C2.27315 8.86126 1.9856 9.78588 2.54272 10.2496L6.78278 13.7787C6.90095 13.8783 6.9886 14.0092 7.03566 14.1564C7.08272 14.3036 7.08727 14.4611 7.0488 14.6108L5.78188 19.5945C5.56667 20.4412 6.46715 21.1246 7.19243 20.6651L11.5865 17.8812C11.71 17.8025 11.8535 17.7607 12 17.7607C12.1465 17.7607 12.29 17.8025 12.4135 17.8812Z" fill="#FD8E1F"></path>
                                            </svg>

                                            <span>5.0</span>
                                        </div>

                                        <div class="">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15Z" stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10"></path>
                                                <path d="M2.90527 20.2491C3.82736 18.6531 5.15322 17.3278 6.74966 16.4064C8.34611 15.485 10.1569 15 12.0002 15C13.8434 15 15.6542 15.4851 17.2506 16.4065C18.8471 17.3279 20.1729 18.6533 21.0949 20.2493" stroke="#564FFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>

                                            <span><b>265.7K</b> <span class="text-black-50">students</span></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-12 mb-3">
                        <div class="course_sec ">

                            <div class="str_rate float-end">
                                <div class="filter ">
                                    <a class="icon show" href="#" data-bs-toggle="dropdown" aria-expanded="true">
                                        <svg width="11" height="30" viewBox="0 0 11 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="5.49879" cy="4.79762" r="4.54762" fill="#616161" />
                                            <circle cx="5.49879" cy="24.1248" r="4.54762" fill="#616161" />
                                            <circle cx="5.49879" cy="43.4524" r="4.54762" fill="#616161" />
                                        </svg>

                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow ">

                                        <li><a class="dropdown-item " href="#" target="_blank">View Course Details</a></li>
                                        <li><a class="dropdown-item" href="#">Edit Course </a></li>
                                        <li><a class="dropdown-item" href="#">Delete Course </a></li>



                                    </ul>
                                </div>

                            </div>
                            <div class="card">
                                <img src="../assets/img/course2.png" alt="course2" class="img-fluid">
                                <div class="card_text">
                                    <div class="d-flex justify-content-between">
                                        <div class="dev_text">
                                            <small>Developments</small>
                                        </div>

                                        <div class="freeText">
                                            <h6>Free</h6>
                                        </div>
                                    </div>
                                    <p class="card_text_1">
                                        Machine Learning A-Z™: Hands-On Python &amp; R In Data Science
                                    </p>

                                    <div class="d-flex justify-content-between">
                                        <div class="dev_svg">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.4135 17.8812L17.1419 20.8769C17.7463 21.2598 18.4967 20.6903 18.3173 19.9847L16.9512 14.6108C16.9127 14.4611 16.9173 14.3036 16.9643 14.1564C17.0114 14.0092 17.0991 13.8783 17.2172 13.7787L21.4573 10.2496C22.0144 9.78588 21.7269 8.86126 21.0111 8.81481L15.4738 8.45544C15.3247 8.44479 15.1816 8.39198 15.0613 8.30317C14.941 8.21437 14.8484 8.09321 14.7943 7.95382L12.7292 2.75323C12.673 2.60528 12.5732 2.4779 12.443 2.38802C12.3127 2.29814 12.1582 2.25 12 2.25C11.8418 2.25 11.6873 2.29814 11.557 2.38802C11.4268 2.4779 11.327 2.60528 11.2708 2.75323L9.20568 7.95382C9.15157 8.09321 9.05897 8.21437 8.93868 8.30317C8.81838 8.39198 8.67533 8.44479 8.52618 8.45544L2.98894 8.81481C2.27315 8.86126 1.9856 9.78588 2.54272 10.2496L6.78278 13.7787C6.90095 13.8783 6.9886 14.0092 7.03566 14.1564C7.08272 14.3036 7.08727 14.4611 7.0488 14.6108L5.78188 19.5945C5.56667 20.4412 6.46715 21.1246 7.19243 20.6651L11.5865 17.8812C11.71 17.8025 11.8535 17.7607 12 17.7607C12.1465 17.7607 12.29 17.8025 12.4135 17.8812Z" fill="#FD8E1F"></path>
                                            </svg>

                                            <span>5.0</span>
                                        </div>

                                        <div class="">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15Z" stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10"></path>
                                                <path d="M2.90527 20.2491C3.82736 18.6531 5.15322 17.3278 6.74966 16.4064C8.34611 15.485 10.1569 15 12.0002 15C13.8434 15 15.6542 15.4851 17.2506 16.4065C18.8471 17.3279 20.1729 18.6533 21.0949 20.2493" stroke="#564FFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>

                                            <span><b>265.7K</b> <span class="text-black-50">students</span></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends -->
            </div>
            <div class="tab-pane fade" id="bordered-justified-addwork" role="tabpanel" aria-labelledby="addwork-tab">
                <!-- add work sec  -->


                <div class="addcourse_bt">
                    <a href="anc.php" target="_blank">Add New Course</a>
                </div>
                <div class="addcourse_bt">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#addQuiz">Add New Quiz</a>
                </div>
                <div class="addcourse_bt">
                    <a href="anl.php" target="_blank">Add New Lab</a>
                </div>

                <!-- ends -->
            </div>

        </div><!-- End Bordered Tabs Justified -->
    </div>
</div>

<?php include 'footer.php'; ?>





<!-- add quiz modal -->

<!-- signup/register modal -->

<div class="modal fade" id="addQuiz" tabindex="-1" aria-labelledby="addQuizLabel" aria-hidden="true" id>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addQuizLabel">
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
                            <div class="col-xl-4" id="left-column">

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
                                                    <img src="../assets/img/quiz.png" class="d-block w-100" alt="slider">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="../assets/img/quiz.png" class="d-block w-100" alt="slider">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="../assets/img/quiz.png" class="d-block w-100" alt="slider">
                                                </div>
                                            </div>

                                        </div>
                                    </div>




                                </div>
                            </div>

                            <div class="col-lg-8" id="right-column">
                                <div class=" mb-3">
                                    <div class="heading_sec">
                                        <h2 class="main_heading">Create Quiz</h2>
                                    </div>

                                </div>

                                <div class="creat_quiz">
                                    <div class="container mt-2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="progress mb-3">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                </div>
                                                <div class="step-form">
                                                    <div class="step-form-step active">
                                                        <div class="quiz_no">
                                                            <div class="mb-3">
                                                                <label for="QuizNumber" class="form-label">Quiz Number</label>
                                                                <input type="email" class="form-control" id="QuizNumber" placeholder="Enter Quiz Number">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="QuizName" class="form-label">Quiz Name</label>
                                                                <textarea class="form-control" id="QuizName" rows="3" placeholder="Enter Quiz Label"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="step-form-step">
                                                        <div class="quiz_no mt-3">
                                                            <!-- step 2  -->
                                                            <div class="search mb-3">
                                                                <i class="fa fa-search"></i>
                                                                <input type="text" class="form-control" placeholder="Select Course">

                                                            </div>

                                                            <ul class="list-group list-group-light">
                                                                <li class="list-group-item border-0">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="pf" id="pfs" checked>
                                                                        <label class="form-check-label" for="pfs">
                                                                            Programming Fundamentals
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item border-0">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="ds" id="dsa">
                                                                        <label class="form-check-label" for="dsa">
                                                                            Data Structures And Algorithms
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item border-0">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="da" id="dsaa">
                                                                        <label class="form-check-label" for="dsaa">
                                                                            Design Analysis
                                                                        </label>
                                                                    </div>
                                                                </li>

                                                                <li class="list-group-item border-0">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="cs" id="cn">
                                                                        <label class="form-check-label" for="cn">
                                                                            Computer Networks
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item border-0">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="ai" id="ai">
                                                                        <label class="form-check-label" for="ai">
                                                                            Artificial Intelligence
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item border-0">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="ai" id="ai">
                                                                        <label class="form-check-label" for="ai">
                                                                            Data Science and Big Data
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>

                                                            <!-- ends -->
                                                        </div>
                                                    </div>
                                                    <div class="step-form-step">
                                                        <!-- step 3 create new quiz -->
                                                        <div class="create_nq">
                                                            <h5>Create New Quiz</h5>

                                                            <h6>Articulate Structure of C++ and Java</h6>
                                                            <p>Course: Programming Fundamentals</p>

                                                            <form action="">
                                                                <div class="row mb-3">
                                                                    <label for="inputText" class="col-sm-9 col-form-label"><strong>Enter Number Of Questions : </strong></label>
                                                                    <div class="col-sm-3">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </form>

                                                            <!-- <div class="d-flex justify-content-between">
                                                                <div>
                                                                    <h6>Choose Passing Percentage</h6>
                                                                </div>
                                                                <div>
                                                                   <small class="text-primary"> 70%</small>
                                                                </div>
                                                                
                                                            </div> -->

                                                            <form class="range-form">
                                                                <div class="form-group row">
                                                                    <div class="col-md-9">
                                                                        <label for="ChoosePassing">Choose Passing Percentage</label>
                                                                        <input type="range" min="1" max="100" value="50" class="form-control-range range-slider" id="myRange">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span id="demo"><small class="text-primary">70%</small></span>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                            <div class="mb-3 row">
                                                                <label for="Qs" class="col-sm-12 col-form-label">Choose Quiz Schedule</label>
                                                                <div class="col-sm-6">
                                                                    <input type="date" class="form-control" id="Qs">
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <input type="time" class="form-control" id="Qs">
                                                                </div>
                                                            </div>

                                                            <h6>Choose Tags Composition</h6>

                                                            <form class="range-form">
                                                                <div class="form-group row mb-4">
                                                                    <div class="col-md-9">
                                                                        <label for="ChoosePassing"><strong>Current Affairs</strong></label>
                                                                        <input type="range" min="1" max="100" value="25" class="form-control-range range-slider" id="myRange">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span id="demo"><small class="text-primary">25%</small></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-4">
                                                                    <div class="col-md-9">
                                                                        <label for="LogicalReasoning"><strong>Logical Reasoning</strong></label>
                                                                        <input type="range" min="1" max="100" value="25" class="form-control-range range-slider" id="myRange">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span id="demo"><small class="text-primary">25%</small></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-4">
                                                                    <div class="col-md-9">
                                                                        <label for="LogicalReasoning"><strong>Basic Computers</strong></label>
                                                                        <input type="range" min="1" max="100" value="25" class="form-control-range range-slider" id="myRange">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span id="demo"><small class="text-primary">25%</small></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-4">
                                                                    <div class="col-md-9">
                                                                        <label for="LogicalReasoning"><strong>Basic Science</strong></label>
                                                                        <input type="range" min="1" max="100" value="25" class="form-control-range range-slider" id="myRange">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span id="demo"><small class="text-primary">25%</small></span>
                                                                    </div>
                                                                </div>
                                                            </form>


                                                            <div class="rules_quiz">
                                                                <h6>Right Rules </h6>
                                                                <ul>
                                                                    <li>You must use a functioning webcam and microphone</li>
                                                                    <li>No cell phones or other secondary devices in the room or test area</li>
                                                                    <li>Your desk/table must be clear or any materials except your test-taking device</li>
                                                                    <li>No one else can be in the room with you</li>
                                                                    <li>No talking</li>
                                                                    <li>The testing room must be well-lit and you must be clearly visible</li>
                                                                    <li>No dual screens/monitors</li>
                                                                    <li>Do not leave the camera</li>
                                                                    <li>No use of additional applications or internet</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- ends -->
                                                    </div>
                                                    <div class="step-form-step">
                                                        <!-- step 4 -->

                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <h5>Tag: Development</h5>
                                                            </div>
                                                            <div>
                                                                <a class="ediT_bt me-3" data-bs-toggle="collapse" href="#editTag" role="button" aria-expanded="false" aria-controls="editTag">
                                                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M17.0577 3.85327L13.1902 0.888818C13.0622 0.789764 12.91 0.711132 12.7421 0.657467C12.5743 0.603803 12.3943 0.576172 12.2125 0.576172C12.0306 0.576172 11.8506 0.603803 11.6828 0.657467C11.5149 0.711132 11.3627 0.789764 11.2347 0.888818L0.851972 8.84708C0.722964 8.94521 0.620604 9.06196 0.550805 9.19059C0.481006 9.31921 0.445151 9.45717 0.445313 9.59648V12.5609C0.445313 12.8424 0.591166 13.1122 0.850785 13.3112C1.11041 13.5102 1.46253 13.622 1.82968 13.622H5.69727C5.87902 13.6222 6.059 13.5947 6.22681 13.5412C6.39463 13.4877 6.54695 13.4092 6.67498 13.3103L17.0577 5.35208C17.3146 5.15231 17.4585 4.88312 17.4585 4.60267C17.4585 4.32222 17.3146 4.05304 17.0577 3.85327ZM5.69727 12.5609H1.82968V9.59648L9.44372 3.76042L13.3113 6.72487L5.69727 12.5609ZM14.289 5.97547L10.4214 3.01102L12.2125 1.63822L16.08 4.60267L14.289 5.97547Z" fill="#3D70F5" />
                                                                    </svg>
                                                                    Edit Tag
                                                                </a>
                                                                <a class="add_qs" data-bs-toggle="collapse" href="#addNew" role="button" aria-expanded="false" aria-controls="addNew">+ Add Questions</a>
                                                            </div>
                                                        </div>


                                                        <div class="collapse" id="editTag">
                                                            <div class="card card-body">
                                                                <div class="quiz_no">
                                                                    <div class="mb-3">
                                                                        <label for="QuizNumber" class="form-label">Name</label>
                                                                        <input type="text" class="form-control" id="name" placeholder="Enter Tag ">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <a href="#" class="add_qs w-100">Proceed</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="collapse" id="addNew">
                                                            <div class="card card-body">
                                                                <div class="quiz_no">

                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <h4>Add New Questions</h4>
                                                                            <h6>Web Development</h6>

                                                                        </div>
                                                                        <div>
                                                                            <a class="add_qs" href="#">Proceed</a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <div class="row">
                                                                            <div class="col-lg-8">
                                                                                <label for="QuizNumber" class="form-label">Type your question here</label>
                                                                                <input type="text" class="form-control" id="name" placeholder="Enter Tag ">

                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="Option1" id="Option1">
                                                                                    <label class="form-check-label" for="Option1">
                                                                                        Option 1
                                                                                    </label>
                                                                                </div>

                                                                                <hr>
                                                                                <a href="#">+ Add Option</a>
                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <ul class="list-inline">
                                                                                    <li class="list-inline-item">
                                                                                        <svg width="50" height="50" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <g filter="url(#filter0_d_584_92)">
                                                                                                <circle cx="8" cy="7" r="7" fill="#59B5C6" />
                                                                                            </g>
                                                                                            <path d="M10.1693 4.83073V9.16927H5.83073V4.83073H10.1693ZM10.1693 4.21094H5.83073C5.48984 4.21094 5.21094 4.48984 5.21094 4.83073V9.16927C5.21094 9.51016 5.48984 9.78906 5.83073 9.78906H10.1693C10.5102 9.78906 10.7891 9.51016 10.7891 9.16927V4.83073C10.7891 4.48984 10.5102 4.21094 10.1693 4.21094ZM8.66318 6.95661L7.73349 8.15591L7.07031 7.35328L6.14063 8.54948H9.85938L8.66318 6.95661Z" fill="white" />
                                                                                            <defs>
                                                                                                <filter id="filter0_d_584_92" x="0.125" y="0" width="15.75" height="15.75" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                                                                    <feOffset dy="0.875" />
                                                                                                    <feGaussianBlur stdDeviation="0.4375" />
                                                                                                    <feComposite in2="hardAlpha" operator="out" />
                                                                                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                                                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_584_92" />
                                                                                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_584_92" result="shape" />
                                                                                                </filter>
                                                                                            </defs>
                                                                                        </svg>

                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <svg width="50" height="50" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <g filter="url(#filter0_d_584_97)">
                                                                                                <circle cx="13.5" cy="11.5" r="11.5" fill="url(#paint0_linear_584_97)" />
                                                                                            </g>
                                                                                            <path d="M10.9543 16.0176C10.6743 16.0176 10.4347 15.9194 10.2355 15.723C10.0359 15.5262 9.93612 15.2898 9.93612 15.0137V8.48789C9.79187 8.48789 9.67087 8.43986 9.57312 8.34382C9.47571 8.24744 9.427 8.12813 9.427 7.9859C9.427 7.84367 9.47571 7.72437 9.57312 7.62799C9.67087 7.53194 9.79187 7.48392 9.93612 7.48392H11.9726C11.9726 7.34169 12.0214 7.22238 12.1192 7.126C12.2166 7.02996 12.3374 6.98193 12.4817 6.98193H14.5181C14.6624 6.98193 14.7834 7.02996 14.8811 7.126C14.9786 7.22238 15.0273 7.34169 15.0273 7.48392H17.0637C17.208 7.48392 17.3288 7.53194 17.4262 7.62799C17.524 7.72437 17.5728 7.84367 17.5728 7.9859C17.5728 8.12813 17.524 8.24744 17.4262 8.34382C17.3288 8.43986 17.208 8.48789 17.0637 8.48789V15.0137C17.0637 15.2898 16.9641 15.5262 16.7649 15.723C16.5653 15.9194 16.3255 16.0176 16.0455 16.0176H10.9543ZM10.9543 8.48789V15.0137H16.0455V8.48789H10.9543ZM11.9726 13.5077C11.9726 13.65 12.0214 13.7691 12.1192 13.8651C12.2166 13.9615 12.3374 14.0097 12.4817 14.0097C12.6259 14.0097 12.7469 13.9615 12.8447 13.8651C12.9421 13.7691 12.9908 13.65 12.9908 13.5077V9.99384C12.9908 9.85161 12.9421 9.7323 12.8447 9.63592C12.7469 9.53988 12.6259 9.49185 12.4817 9.49185C12.3374 9.49185 12.2166 9.53988 12.1192 9.63592C12.0214 9.7323 11.9726 9.85161 11.9726 9.99384V13.5077ZM14.009 13.5077C14.009 13.65 14.0579 13.7691 14.1557 13.8651C14.2531 13.9615 14.3739 14.0097 14.5181 14.0097C14.6624 14.0097 14.7834 13.9615 14.8811 13.8651C14.9786 13.7691 15.0273 13.65 15.0273 13.5077V9.99384C15.0273 9.85161 14.9786 9.7323 14.8811 9.63592C14.7834 9.53988 14.6624 9.49185 14.5181 9.49185C14.3739 9.49185 14.2531 9.53988 14.1557 9.63592C14.0579 9.7323 14.009 9.85161 14.009 9.99384V13.5077Z" fill="white" />
                                                                                            <defs>
                                                                                                <filter id="filter0_d_584_97" x="0.75" y="0" width="25.5" height="25.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                                                                    <feOffset dy="1.25" />
                                                                                                    <feGaussianBlur stdDeviation="0.625" />
                                                                                                    <feComposite in2="hardAlpha" operator="out" />
                                                                                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0" />
                                                                                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_584_97" />
                                                                                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_584_97" result="shape" />
                                                                                                </filter>
                                                                                                <linearGradient id="paint0_linear_584_97" x1="13.5" y1="0" x2="13.5" y2="23" gradientUnits="userSpaceOnUse">
                                                                                                    <stop stop-color="#59B5C6" />
                                                                                                    <stop offset="1" stop-color="#0A2B7D" />
                                                                                                </linearGradient>
                                                                                            </defs>
                                                                                        </svg>

                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <svg width="50" height="50" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <g filter="url(#filter0_d_584_92)">
                                                                                                <circle cx="8" cy="7" r="7" fill="#59B5C6" />
                                                                                            </g>
                                                                                            <path d="M10.1693 4.83073V9.16927H5.83073V4.83073H10.1693ZM10.1693 4.21094H5.83073C5.48984 4.21094 5.21094 4.48984 5.21094 4.83073V9.16927C5.21094 9.51016 5.48984 9.78906 5.83073 9.78906H10.1693C10.5102 9.78906 10.7891 9.51016 10.7891 9.16927V4.83073C10.7891 4.48984 10.5102 4.21094 10.1693 4.21094ZM8.66318 6.95661L7.73349 8.15591L7.07031 7.35328L6.14063 8.54948H9.85938L8.66318 6.95661Z" fill="white" />
                                                                                            <defs>
                                                                                                <filter id="filter0_d_584_92" x="0.125" y="0" width="15.75" height="15.75" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                                                                    <feOffset dy="0.875" />
                                                                                                    <feGaussianBlur stdDeviation="0.4375" />
                                                                                                    <feComposite in2="hardAlpha" operator="out" />
                                                                                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                                                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_584_92" />
                                                                                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_584_92" result="shape" />
                                                                                                </filter>
                                                                                            </defs>
                                                                                        </svg>

                                                                                    </li>
                                                                                </ul>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="content_sec">
                                                            <h6>Total Number of Questions : <span class="text-danger"> 50</span></h6>
                                                            <p class="mb-1">Course : Programming Fundamentals</p>
                                                            <p class="mb-1">Subject : Articulate Structure of C++ and Java</p>

                                                            <div class="d-flex justify-content-between">
                                                                <div>
                                                                    <h5>Right Questions</h5>
                                                                </div>
                                                                <div>
                                                                    <h6>Actions</h6>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <div>
                                                                    <h5>Q1</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="#" class="me-2">
                                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M16.384 6.25898L12.134 2.05898L13.534 0.658984C13.9173 0.275651 14.3883 0.0839844 14.947 0.0839844C15.505 0.0839844 15.9757 0.275651 16.359 0.658984L17.759 2.05898C18.1423 2.44232 18.3423 2.90498 18.359 3.44698C18.3757 3.98832 18.1923 4.45065 17.809 4.83398L16.384 6.25898ZM14.934 7.73398L4.33398 18.334H0.0839844V14.084L10.684 3.48398L14.934 7.73398Z" fill="black" />
                                                                        </svg>

                                                                    </a>
                                                                    <a href="#" class="me-2">
                                                                        <svg width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M1.08398 16.334C1.08398 17.434 1.98398 18.334 3.08398 18.334H11.084C12.184 18.334 13.084 17.434 13.084 16.334V4.33398H1.08398V16.334ZM3.08398 6.33398H11.084V16.334H3.08398V6.33398ZM10.584 1.33398L9.58398 0.333984H4.58398L3.58398 1.33398H0.0839844V3.33398H14.084V1.33398H10.584Z" fill="black" />
                                                                        </svg>



                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="mb-3 col-md-6 mb-3">
                                                                    <label for="q1" class="form-label">

                                                                        Which of the following is not a networking protocol ?</label>
                                                                    <input type="text" class="form-control mb-2" id="q1" placeholder="a. ICP">
                                                                    <input type="text" class="form-control mb-2" id="q1" placeholder="b. DCP">
                                                                    <input type="text" class="form-control mb-2 border-success" id="q1" placeholder="c. BCP">
                                                                    <input type="text" class="form-control mb-2 " id="q1" placeholder="d. CCP">
                                                                </div>

                                                                <div class="clearfix">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <h5>Q1</h5>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#" class="me-2">
                                                                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M16.384 6.25898L12.134 2.05898L13.534 0.658984C13.9173 0.275651 14.3883 0.0839844 14.947 0.0839844C15.505 0.0839844 15.9757 0.275651 16.359 0.658984L17.759 2.05898C18.1423 2.44232 18.3423 2.90498 18.359 3.44698C18.3757 3.98832 18.1923 4.45065 17.809 4.83398L16.384 6.25898ZM14.934 7.73398L4.33398 18.334H0.0839844V14.084L10.684 3.48398L14.934 7.73398Z" fill="black" />
                                                                                </svg>

                                                                            </a>
                                                                            <a href="#" class="me-2">
                                                                                <svg width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M1.08398 16.334C1.08398 17.434 1.98398 18.334 3.08398 18.334H11.084C12.184 18.334 13.084 17.434 13.084 16.334V4.33398H1.08398V16.334ZM3.08398 6.33398H11.084V16.334H3.08398V6.33398ZM10.584 1.33398L9.58398 0.333984H4.58398L3.58398 1.33398H0.0839844V3.33398H14.084V1.33398H10.584Z" fill="black" />
                                                                                </svg>



                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 col-md-6 mb-3">
                                                                        <label for="q1" class="form-label">

                                                                            Which of the following is not a networking protocol ?</label>
                                                                        <input type="text" class="form-control mb-2" id="q1" placeholder="a. ICP">
                                                                        <input type="text" class="form-control mb-2" id="q1" placeholder="b. DCP">
                                                                        <input type="text" class="form-control mb-2 border-success" id="q1" placeholder="c. BCP">
                                                                        <input type="text" class="form-control mb-2 " id="q1" placeholder="d. CCP">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--  -->
                                                    </div>
                                                    <div class="step-form-step">
                                                        <!-- step4 -->
                                                        <div class="succss_quix p-4 text-center">
                                                            <h5>Quiz Created Successfully</h5>
                                                            <p>New Quiz within Course: Programming Fundamentals with <br> <b> subject Articulate Structure of C++ and Java</b> Added <br> Succesfully in your schedule. <b>Proceed to prepare a quiz.</b></p>
                                                        </div>
                                                    </div>

                                                </div>

                                                <button class="btn btn-primary next-step"> Proceed</button>
                                                <button class="btn bg-transparent prev-step w-100">
                                                    <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.37679 2.50724V3.14495H1.55057L3.30425 4.89863L2.85148 5.3514L0.326172 2.82609L2.85148 0.300781L3.30425 0.753552L1.55057 2.50724H5.37679Z" fill="#6B6B6B" />
                                                    </svg>
                                                    Back</button>
                                                <button class="btn btn-success confirm-step" style="display:none;">Proceed</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <div class="thank-you-message" style="display:none;">
                                                    <div class="comp_quiz">
                                                        <img src="../assets/img/quizz.png" alt="quiz" class="img-fluid">
                                                        <h2>Please Wait While We <br> Analyse Your Questions</h2>
                                                        <small>Do not referesh or Close this Screen</small>
                                                    </div>

                                                    <div class="report_gen mt-5">
                                                        <h4>Report Generated</h4>
                                                        <!-- Doughnut Chart -->
                                                        <canvas id="doughnutChart" style="max-height: 400px; margin-bottom:50px;"></canvas>
                                                        <script>
                                                            document.addEventListener("DOMContentLoaded", () => {
                                                                new Chart(document.querySelector('#doughnutChart'), {
                                                                    type: 'doughnut',
                                                                    data: {
                                                                        labels: [
                                                                            'Unique Questions 4852',
                                                                            'Repeated Questions 2785',
                                                                            // 'Yellow'
                                                                        ],
                                                                        datasets: [{
                                                                            // label: 'My First Dataset',
                                                                            data: [ 50, 80],
                                                                            backgroundColor: [
                                                                                // 'rgb(255, 99, 132)',
                                                                                
                                                                                'rgba(255, 142, 9, 1)',
                                                                                'rgba(54, 124, 255, 1)'
                                                                            ],
                                                                            hoverOffset: 4
                                                                        }]
                                                                    }
                                                                });
                                                            });
                                                        </script>
                                                        <!-- End Doughnut CHart -->


                                                        <a class="add_qs  w-75 rounded-1 p-3 d-block m-auto" data-bs-toggle="collapse" href="#">+ Preview Questions</a>


                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>


                </div>
            </div>

        </div>
    </div>
</div>

<!-- signup/register modal ends -->