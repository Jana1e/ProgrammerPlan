<!-- ======= Header ======= -->
<style>
    .notifications {
        min-width: 350px;
        /* Set the minimum width of the dropdown */
        max-width: 600px;
        /* Set the maximum width (optional) */
        word-wrap: break-word;
        /* Ensure long text wraps */
    }

    .notifications .list-group-item {
        white-space: normal;
        /* Ensure text wraps in notifications */
    }

    .notifications .c-scrollbar-light {
        overflow-y: auto;
        max-height: 300px;
        /* Control height for scrollable content */
    }
</style>

<style>
    .view-all-btn {
        text-align: center;
        /* Center-align the text */
        padding: 5px 15px;
        /* Adjust padding for better size */
        font-size: 12px;
        /* Smaller font for compact look */
        border-radius: 20px;
        /* Rounded corners */
        white-space: nowrap;
        /* Prevent text wrapping */
        min-width: 80px;
        /* Set a minimum width */
    }

    .view-all-btn:hover {
        background-color: #004085;
        /* Darker shade on hover */
        color: #fff;
        /* Ensure text color remains white */
    }
</style>


<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
            <img src="../assets/img/logo.png" alt="" class="img-fluid">
            <span class=" d-md-block d-sm-none d-none">Programmer Plan</span>
        </a>







        @if (Auth::check())
            <i class="bi bi-list toggle-sidebar-btn" data-toggle="aiz-mobile-nav"></i>
        @endif

    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->




            <!-- language -->
            @php
                if (Session::has('locale')) {
                    $locale = Session::get('locale', Config::get('app.locale'));
                } else {
                    $locale = env('DEFAULT_LANGUAGE');
                }
            @endphp

            <li class="pe-3 d-lg-block d-sm-none d-none" id="lang-change">
                <div class="dropdown flag_dd header_dd">
                    <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <!-- Current Language -->
                        <img src="{{ static_asset('assets/img/flags/' . $locale . '.png') }}" alt="{{ $locale }}"
                            class="flag-icon me-2" />
                        <span>{{ $locale }}</span>
                    </button>
                    <ul class="dropdown-menu">
                        @foreach (\App\Models\Language::where('status', 1)->get() as $key => $language)
                            <li>
                                <a href="javascript:void(0)" data-flag="{{ $language->code }}" class="dropdown-item">
                                    <img src="{{ static_asset('assets/img/flags/' . $language->code . '.png') }}"
                                        alt="{{ $language->name }}" class="flag-icon me-2" />
                                    <span>{{ $language->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>








            

            <!-- Notifications -->
            @can('view_notifications')
                <div class="aiz-topbar-item mr-3">
                    <div class="align-items-stretch d-flex dropdown">
                        <a class="dropdown-toggle no-arrow" data-toggle="dropdown" href="javascript:void(0);" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <span
                                class="btn btn-topbar btn-circle btn-light p-0 d-flex justify-content-center align-items-center"
                                data-toggle="tooltip" data-title="{{ translate('Notification') }}">
                                <span class="d-flex align-items-center position-relative">
                                    <div class="px-2 hov-svg-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16"
                                            viewBox="0 0 14 16">
                                            <g id="Group_23884" data-name="Group 23884" transform="translate(-677 5110)">
                                                <path id="Union_38" data-name="Union 38"
                                                    d="M5.5,16a.5.5,0,0,1,0-1h3a.5.5,0,1,1,0,1Zm-5-2a.5.5,0,0,1,0-1H2V7A5.008,5.008,0,0,1,6.5,2.025V.5a.5.5,0,1,1,1,0V2.025A5.007,5.007,0,0,1,12,7H11A4,4,0,1,0,3,7v6h8V7h1v6h1.5a.5.5,0,1,1,0,1Z"
                                                    transform="translate(677 -5110)" fill="#9da3ae" />
                                            </g>
                                        </svg>
                                    </div>
                                    @if (auth()->user()->unreadNotifications->count() > 0)
                                        <span
                                            class="badge badge-sm badge-dot badge-circle badge-danger position-absolute absolute-top-right"></span>
                                    @endif
                                </span>
                            </span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-xl py-0">
                            <div class="notifications">
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link text-dark active" data-toggle="tab" data-type="order"
                                            href="javascript:void(0);" data-target="#orders-notifications" role="tab"
                                            id="orders-tab">{{ translate('Orders') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" data-toggle="tab" data-type="seller"
                                            href="javascript:void(0);" data-target="#sellers-notifications" role="tab"
                                            id="sellers-tab">{{ translate('Sellers') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" data-toggle="tab" data-type="seller"
                                            href="javascript:void(0);" data-target="#payouts-notifications" role="tab"
                                            id="sellers-tab">{{ translate('Payouts') }}</a>
                                    </li>
                                </ul>
                                <div class="tab-content c-scrollbar-light overflow-auto"
                                    style="height: 75vh; max-height: 400px; overflow-y: auto;">
                                    <div class="tab-pane active" id="orders-notifications" role="tabpanel">
                                        <x-unread_notification :notifications="auth()
                                            ->user()
                                            ->unreadNotifications()
                                            ->where('type', 'App\Notifications\OrderNotification')
                                            ->take(20)
                                            ->get()" />
                                    </div>
                                    <div class="tab-pane" id="sellers-notifications" role="tabpanel">
                                        <x-unread_notification :notifications="auth()
                                            ->user()
                                            ->unreadNotifications()
                                            ->where('type', 'like', '%shop%')
                                            ->take(20)
                                            ->get()" />
                                    </div>
                                    <div class="tab-pane" id="payouts-notifications" role="tabpanel">
                                        <x-unread_notification :notifications="auth()
                                            ->user()
                                            ->unreadNotifications()
                                            ->where('type', 'App\Notifications\PayoutNotification')
                                            ->take(20)
                                            ->get()" />
                                    </div>
                                </div>
                            </div>

                            <div class="text-center border-top">
                                <a href="{{ route('admin.all-notifications') }}" class="text-reset d-block py-2">
                                    {{ translate('View All Notifications') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan




            <!-- End Messages Nav -->



            <li class="nav-item dropdown pe-3">

                @auth

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">

                     

                            <img src="{{ uploaded_asset(Auth::user()->avatar_original) }}" class="rounded-circle"
                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">





                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">


                            <img src="{{ uploaded_asset(Auth::user()->avatar_original) }}" class="img-fluid mb-3"
                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';"
                            style="border-radius: 25px;">


                            <h6>{{ Auth::user()->name }}</h6>
                            <small>{{ Auth::user()->email }}</small>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.index') }}">
                                <i class="bi bi-person"></i>
                                <span> {{ translate('Profile') }}</span>
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>



                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>{{ translate('Sign Out') }}</span>
                            </a>

                        </li>

                    </ul>
                @else
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">


                        <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="image rounded-circle"
                            alt="{{ translate('avatar') }}"
                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                    </a>


                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li>
                            <a class="dropdown-item " href="{{ route('user.login') }}" data-bs-toggle="modal"
                                data-bs-target="#chooseRole">
                                <i class="bi bi-box-arrow-in-left"></i>
                                <span> Register</span>
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('user.registration') }}" data-bs-toggle="modal"
                                data-bs-target="#logIn">
                                <i class="bi bi-key"></i>
                                <span> Login</span>
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                    </ul>


                @endauth

                <!-- End Profile Dropdown Items -->
            </li>

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
