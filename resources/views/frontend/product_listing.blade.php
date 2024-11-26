@extends('frontend.layouts.app')

@section('content')
    @include('frontend.home.partials.home-banner-area')

    <section class="courser_filter">
        <div class="container-xxl">
            <form id="search-form" action="{{ route('search') }}" method="GET">
                <div class="row">
                    <div class="col-lg-12 p-lg-0 mb-3">
                        <div class="card_shadow shadow_sec_padd">
                            <!-- Navigation Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                                <!-- All Courses Tab -->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="all-courses-tab" data-bs-toggle="tab"
                                        data-bs-target="#all-courses" type="button" role="tab"
                                        aria-controls="all-courses" aria-selected="true">
                                        <span>
                                            <!-- SVG Icon for All Courses -->
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <!-- Your SVG Paths Here -->
                                            </svg>
                                        </span>
                                        <span class="ms-2"> All Courses</span>
                                    </button>
                                </li>
                                <!-- Your Courses Tab -->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="your-courses-tab" data-bs-toggle="tab"
                                        data-bs-target="#your-courses" type="button" role="tab"
                                        aria-controls="your-courses" aria-selected="false">
                                        <span>
                                            <!-- SVG Icon for Your Courses -->
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <!-- Your SVG Paths Here -->
                                            </svg>
                                        </span>
                                        <span class="ms-2"> Your Courses</span>
                                    </button>
                                </li>
                                <!-- Track Progress Tab -->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="track-progress-tab" data-bs-toggle="tab"
                                        data-bs-target="#track-progress" type="button" role="tab"
                                        aria-controls="track-progress" aria-selected="false">
                                        <span>
                                            <!-- SVG Icon for Track Progress -->
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <!-- Your SVG Paths Here -->
                                            </svg>
                                        </span>
                                        <span class="ms-2"> Track Progress</span>
                                    </button>
                                </li>
                            </ul>

                            <!-- Tab Panes -->
                            <div class="tab-content pt-2" id="borderedTabContent">
                                <!-- All Courses Tab Content -->
                                <div class="tab-pane fade show active" id="all-courses" role="tabpanel"
                                    aria-labelledby="all-courses-tab">
                                    <div class="row">
                                        <!-- Sort By Dropdown -->
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                                            <div class="course_select">
                                                <label for="sort_by" class="form-label">Sort By</label>
                                                <select class="form-select" id="sort_by" name="sort_by"
                                                    onchange="handleSelectionChange()">
                                                    <option value="latest"
                                                        {{ request('sort_by') == 'latest' ? 'selected' : '' }}>
                                                        Latest
                                                    </option>
                                                    <option value="price_asc"
                                                        {{ request('sort_by') == 'price_asc' ? 'selected' : '' }}>
                                                        Price Ascending
                                                    </option>
                                                    <option value="price_desc"
                                                        {{ request('sort_by') == 'price_desc' ? 'selected' : '' }}>
                                                        Price Descending
                                                    </option>
                                                    <option value="free"
                                                        {{ request('sort_by') == 'free' ? 'selected' : '' }}>
                                                        Free
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Category Dropdown -->
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                                            <div class="course_select">
                                                <label for="category" class="form-label">Category</label>
                                                <select class="form-select" id="category" name="category"
                                                    onchange="handleSelectionChange()">
                                                    <option value="all"
                                                        {{ !request('category') || request('category') === 'all' ? 'selected' : '' }}>
                                                        All Categories
                                                    </option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->slug }}"
                                                            {{ request('category') === $category->slug ? 'selected' : '' }}>
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                    </div>


                                    <!-- Products Display -->
                                    <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                                        <div class="row">
                                            @forelse ($allCourses as $data)
                                                @include('frontend.home.partials.product_box_2', [
                                                    'product' => $data,
                                                ])
                                            @empty
                                                <div class="col-12">
                                                    <p class="text-center">No products found.</p>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>






                                </div>

                                <!-- Your Courses Tab Content -->
                                <div class="tab-pane fade" id="your-courses" role="tabpanel"
                                    aria-labelledby="your-courses-tab">
                                    <div class="row">
                                        <!-- Sort By Dropdown -->
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                                            <div class="course_select">
                                                <label for="your_sort_by" class="form-label">Sort By</label>
                                                <select class="form-select" id="your_sort_by" name="your_sort_by"
                                                    onchange="handleSelectionChange()">
                                                    <option value="latest"
                                                        {{ request('your_sort_by') == 'latest' ? 'selected' : '' }}>
                                                        Latest
                                                    </option>
                                                    <option value="progress_asc"
                                                        {{ request('your_sort_by') == 'progress_asc' ? 'selected' : '' }}>
                                                        Progress Ascending
                                                    </option>
                                                    <option value="progress_desc"
                                                        {{ request('your_sort_by') == 'progress_desc' ? 'selected' : '' }}>
                                                        Progress Descending
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Category Dropdown -->
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                                            <div class="course_select">
                                                <label for="your_category" class="form-label">Category</label>
                                                <select class="form-select" id="your_category" name="your_category"
                                                    onchange="handleSelectionChange()">
                                                    <option value="all"
                                                        {{ !request('your_category') || request('your_category') === 'all' ? 'selected' : '' }}>
                                                        All Categories
                                                    </option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->slug }}"
                                                            {{ request('your_category') === $category->slug ? 'selected' : '' }}>
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                    </div>

                                    <!-- Products Display -->
                                    <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                                        <div class="row">
                                            @forelse ($yourCourses as $data)
                                                @include('frontend.home.partials.product_box_2', [
                                                    'product' => $data['course'],
                                                ])
                                            @empty
                                                <div class="col-12">
                                                    <p class="text-center">You have not enrolled in any courses yet.
                                                    </p>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>

                                </div>

                                <!-- Track Progress Tab Content -->
                                <div class="tab-pane fade" id="track-progress" role="tabpanel"
                                    aria-labelledby="track-progress-tab">
                                    <div class="row">
                                        <!-- Calendar Section -->
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-3">
                                            <!-- Carousel Slider -->
                                            <div id="carouselExampleCaptions" class="carousel slide">
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#carouselExampleCaptions"
                                                        data-bs-slide-to="0" class="active" aria-current="true"
                                                        aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#carouselExampleCaptions"
                                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    <button type="button" data-bs-target="#carouselExampleCaptions"
                                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{ asset('assets/img/banner.png') }}" class="img-fluid"
                                                            alt="banner">
                                                        <div class="carousel-caption d-md-block">
                                                            <h2 class="mb-2">Welcome Back Amelia</h2>
                                                            <p>Go back to the Lessons</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('assets/img/banner.png') }}" class="img-fluid"
                                                            alt="banner">
                                                        <div class="carousel-caption d-md-block">
                                                            <h2 class="mb-2">Learn from the Best</h2>
                                                            <p>Go back to the Lessons</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('assets/img/banner.png') }}" class="img-fluid"
                                                            alt="banner">
                                                        <div class="carousel-caption d-md-block">
                                                            <h2 class="mb-2">Master New Skills</h2>
                                                            <p>Explore our curated courses and master new skills, guided
                                                                by industry experts.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>

                                            <!-- Your Courses Display -->
                                            <div class="card_shadow shadow_sec_padd mt-4">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <div class="heading_sec">
                                                        <h2 class="main_heading text-dark">Your Courses</h2>
                                                    </div>
                                                    <div class="heading_sec">
                                                        <a href="/" class="see_all_text">See All</a>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    @forelse ($yourCourses as $data)
                                                        @include('frontend.home.partials.product_box_1', [
                                                            'course' => $data['course'],
                                                        ])
                                                    @empty
                                                        <div class="col-12">
                                                            <p class="text-center">You have not enrolled in any courses
                                                                yet.</p>
                                                        </div>
                                                    @endforelse
                                                </div>
                                            </div>

                                            <!-- Calendar Events -->
                                            <div id="wrap" class="mt-4">
                                                <div id="calendar_events"></div>
                                                <div style="clear:both"></div>
                                            </div>
                                        </div>

                                        <!-- Calendar and Progress Section -->
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                            <!-- Calendar Widget -->
                                            <div class="calendar calendar-first" id="calendar_first">
                                                <div class="calendar_header">
                                                    <button class="switch-month switch-left"> <i
                                                            class="fa fa-chevron-left"></i></button>
                                                    <h2></h2>
                                                    <button class="switch-month switch-right"> <i
                                                            class="fa fa-chevron-right"></i></button>
                                                </div>
                                                <div class="calendar_weekdays"></div>
                                                <div class="calendar_content"></div>
                                            </div>

                                            <!-- Homework Progress -->
                                            <div class="progrees_home mt-4">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <h5>Homework Progress</h5>
                                                    </div>

                                                    <div class="str_rate">
                                                        <div class="filter">
                                                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                                    class="bi bi-three-dots"></i></a>
                                                            <ul
                                                                class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                                <li><a class="dropdown-item active" href="#"
                                                                        target="_blank">View Course Details</a></li>
                                                                <li><a class="dropdown-item" href="#"
                                                                        target="_blank">About Teacher</a></li>
                                                                <li><a class="dropdown-item" href="#"
                                                                        target="_blank">Add Course</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Progress Bars -->
                                                <div class="work_progress mt-3">
                                                    <h6>Optimizing work</h6>
                                                    <p class="text-dark text-start" style="font-size: 13px;">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem
                                                        dignissimos mollitia in quis at voluptas corrupti.
                                                    </p>
                                                    <div class="progress" role="progressbar" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar" style="width: 50%;">50%</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="progrees_home mt-3">
                                                <div class="work_progress">
                                                    <h6>Design Improvement</h6>
                                                    <p class="text-dark text-start" style="font-size: 13px;">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem
                                                        dignissimos mollitia in quis at voluptas corrupti.
                                                    </p>
                                                    <div class="progress" role="progressbar" aria-valuenow="80"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar" style="width: 80%;">80%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Bordered Tabs -->
                        </div><!-- End card_shadow -->
                    </div><!-- End column -->
                </div><!-- End row -->
            </form><!-- End form -->
        </div><!-- End container -->
    </section>
@endsection

@section('script')
    <script>
        // Function to handle form submission on selection change
        function handleSelectionChange() {
            document.getElementById('search-form').submit();
        }

        // Initialize Calendar (Assuming you have a calendar library like FullCalendar)
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar_events');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                // Add your calendar options here
                events: @json($calendarEvents),
                // Example:
                // events: [
                //     {
                //         title: 'Homework Deadline: Cybersecurity Basics',
                //         start: '2024-05-10',
                //         end: '2024-05-10',
                //     },
                //     {
                //         title: 'Live Q&A Session',
                //         start: '2024-05-15T14:00:00',
                //     },
                //     // Add more events as needed
                // ]
            });
            calendar.render();
        });
    </script>
@endsection
