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
            <i class="bi bi-list toggle-sidebar-btn"></i>
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


            @if (get_setting('show_language_switcher') == 'on')

                <li class="pe-3 d-lg-block d-sm-none d-none" id="lang-change">
                    <div class="dropdown flag_dd header_dd">
                        <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <!-- Current Language -->
                            <img src="{{ static_asset('assets/img/flags/' . $system_language->code . '.png') }}"
                                alt="{{ $system_language->name }}" class="flag-icon me-2" />
                            <span>{{ $system_language->name }}</span>
                        </button>
                        <ul class="dropdown-menu">
                            @foreach (get_all_active_language() as $language)
                                <li>
                                    <a href="javascript:void(0)" data-flag="{{ $language->code }}"
                                        class="dropdown-item">
                                        <img src="{{ static_asset('assets/img/flags/' . $language->code . '.png') }}"
                                            alt="{{ $language->name }}" class="flag-icon me-2" />
                                        <span>{{ $language->name }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            @endif




            @if (Auth::check())

                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        @if (Auth::check() && count($user->unreadNotifications) > 0)
                            <span class="badge bg-primary badge-number"> {{ count($user->unreadNotifications) }} </span>
                        @endif
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have {{ count($user->unreadNotifications) }} new notifications
                            <a href="{{ route('customer.all-notifications') }}"
                                class="btn btn-primary btn-sm ms-2 view-all-btn">
                                View all
                            </a>
                        </li>


                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <div class="c-scrollbar-light overflow-auto" style="max-height:300px;">
                            <ul class="list-group list-group-flush">
                                @forelse($user->unreadNotifications as $notification)
                                    @php
                                        $isLinkable = true;
                                        $notificationType = get_notification_type(
                                            $notification->notification_type_id,
                                            'id',
                                        );
                                        $notifyContent = $notificationType->getTranslation('default_text');
                                        $notificationShowDesign = get_setting('notification_show_type');
                                        if (
                                            $notification->type == 'App\Notifications\customNotification' &&
                                            $notification->data['link'] == null
                                        ) {
                                            $isLinkable = false;
                                        }
                                    @endphp
                                    <li class="list-group-item">
                                        <div class="d-flex">
                                            @if ($notificationShowDesign != 'only_text')
                                                <div class="size-35px mr-2">
                                                    @php
                                                        $notifyImageDesign = '';
                                                        if ($notificationShowDesign == 'design_2') {
                                                            $notifyImageDesign = 'rounded-1';
                                                        } elseif ($notificationShowDesign == 'design_3') {
                                                            $notifyImageDesign = 'rounded-circle';
                                                        }
                                                    @endphp
                                                    <img src="{{ uploaded_asset($notificationType->image) }}"
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/notification.png') }}';"
                                                        class="img-fit h-100 {{ $notifyImageDesign }}">
                                                </div>
                                            @endif
                                            <div>
                                                @if ($notification->type == 'App\Notifications\OrderNotification')
                                                    @php
                                                        $orderCode = $notification->data['order_code'];
                                                        $route = route(
                                                            'purchase_history.details',
                                                            encrypt($notification->data['order_id']),
                                                        );
                                                        $orderCode =
                                                            "<span class='text-blue'>" . $orderCode . '</span>';
                                                        $notifyContent = str_replace(
                                                            '[[order_code]]',
                                                            $orderCode,
                                                            $notifyContent,
                                                        );
                                                    @endphp
                                                @endif

                                                @if ($isLinkable = true)
                                                    <a
                                                        href="{{ route('notification.read-and-redirect', encrypt($notification->id)) }}">
                                                @endif
                                                <span
                                                    class="fs-12 text-dark text-truncate-2">{!! $notifyContent !!}</span>
                                                @if ($isLinkable = true)
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                    <li class="list-group-item">
                                        <div class="py-4 text-center fs-16">
                                            {{ translate('No notification found') }}
                                        </div>
                                    </li>
                                @endforelse
                            </ul>
                        </div>


                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

            @endif




            <!-- End Messages Nav -->



            <li class="nav-item dropdown pe-3">

                @auth

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        @if ($user->avatar_original != null)
                            <img src="{{ $user_avatar }}" class="rounded-circle"
                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                        @else
                            <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="image rounded-circle"
                                alt="{{ translate('avatar') }}"
                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                        @endif

                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">

                            @if (Auth::check() && $user->avatar_original != null)
                                <img src="{{ $user_avatar }}" class="img-fluid mb-3"
                                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';"
                                    style="border-radius: 25px;">
                            @else
                                <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="img-fluid mb-3"
                                    alt="{{ translate('avatar') }}"
                                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';"
                                    style="border-radius: 25px;">
                            @endif

                            <h6>{{ $user->name }}</h6>
                            <small>{{ $user->email }}</small>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>




                        @if (isAdmin())
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.dashboard') }}">
                                    <i class="bi bi-house"></i>
                                    <span> {{ translate('Dashboard') }}</span>
                                </a>

                            </li>
                        @else
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('profile') }}">
                                    <i class="bi bi-person"></i>
                                    <span> {{ translate('Profile') }}</span>
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                            @if (Auth::check() && auth()->user()->user_type == 'devloper' ||auth()->user()->user_type == 'teacher' )

                                <a class="dropdown-item d-flex align-items-center" href="{{ route('about_me') }}">
                                    <i class="bi bi-gear"></i>
                                    <span> {{ translate('Setting') }}</span>
                                </a>

                                @endif
                        @endif


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
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">


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
@include('frontend.inc.user_side_nav')