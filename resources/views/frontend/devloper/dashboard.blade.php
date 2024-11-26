@extends('frontend.layouts.user_panel')

@section('panel_content')
 
        <div class="profile_form">
            <div class="d-flex justify-content-between">
                <div>
                    <h5>My Work</h5>
                </div>
                <div>
                    <div class=" text-center">
                        <a href="#" class="hk_btns text-white rounded-2" data-bs-toggle="modal" data-bs-target="#logIn">
                            +Add New Work
                        </a>
                    </div>
                </div>
            </div>

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
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                        <li>
                                            <a class="dropdown-item " href="#" data-bs-toggle="modal"
                                                data-bs-target="#EditWork">Edit work</a>
                                        </li>
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
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                        <li><a class="dropdown-item " href="#" data-bs-toggle="modal"
                                                data-bs-target="#EditWork">Edit work</a></li>
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
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                        <li><a class="dropdown-item " href="#" data-bs-toggle="modal"
                                                data-bs-target="#EditWork">Edit work</a></li>
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
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                        <li><a class="dropdown-item " href="#" data-bs-toggle="modal"
                                                data-bs-target="#EditWork">Edit work</a></li>
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
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                        <li><a class="dropdown-item " href="#" data-bs-toggle="modal"
                                                data-bs-target="#EditWork">Edit work</a></li>
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
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                        <li><a class="dropdown-item " href="#" data-bs-toggle="modal"
                                                data-bs-target="#EditWork">Edit work</a></li>
                                        <!-- <li><a class="dropdown-item" href="#" target="_blank">Update Course</a></li> -->
                                        <li><a class="dropdown-item" href="#">Delete work </a></li>
                                    </ul>
                                </div>

                            </div>


                        </div>
                        <small>Improving the structure of existing code without changing its behavior.</small>
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
        <div>
    
@endsection

@section('modal')
    <!-- Wallet Recharge Modal -->

    <script type="text/javascript">
        function show_wallet_modal() {
            $('#wallet_modal').modal('show');
        }
    </script>

    <!-- Address modal Modal -->
    @include('frontend.partials.address.address_modal')
@endsection

@section('script')
    @include('frontend.partials.address.address_js')

    @if (get_setting('google_map') == 1)
        @include('frontend.partials.google_map')
    @endif
@endsection
