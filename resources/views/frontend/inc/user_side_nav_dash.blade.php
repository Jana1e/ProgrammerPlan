<style>
    .uplaod_profile_sec2 {
        background: var(--white-Color);
        border: 2px solid #b9b9b9;
        box-shadow: 0px 1px 9.9px 4px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
    }

    .p-4.text-center.mb-4.border-bottom.position-relative {
        padding: 20px;
        /* Adjust padding for spacing */
    }

    .avatar2 {
        width: 180px;
        /* Set desired width */
        height: 180px;
        /* Set desired height */
        border-radius: 50%;
        /* Ensures it remains a circle */


    }
</style>

@auth
    

<div class="aiz-user-sidenav-wrap position-relative z-1  uplaod_profile_sec2 rounded ">
    <div class="aiz-user-sidenav overflow-auto c-scrollbar-light px-4 pb-4 rounded ">
        <!-- Close button -->
        <div class="d-xl-none">
            <button class="btn btn-sm p-2 " data-toggle="class-toggle" data-backdrop="static"
                data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
                <i class="las la-times la-2x"></i>
            </button>
        </div>
        @php
            $user = auth()->user();
            $user_avatar = null;
            $carts = [];
            if ($user && $user->avatar_original != null) {
                $user_avatar = uploaded_asset($user->avatar_original);
            }
        @endphp
        <!-- Customer info -->
        <div class="p-4 text-center mb-4 border-bottom position-relative">
            <!-- Image -->
            <span class="avatar2 avatar mb-3">
                @if ($user && $user->avatar_original)
                    <img src="{{ $user_avatar }}" style="width: 180px; height: 180px; border-radius: 50%;"
                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                @else
                    <img src="{{ static_asset('assets/img/avatar-place.png') }}"
                        style="width: 150px; height: 150px; border-radius: 50%;"
                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                @endif

            </span>

            <!-- Name -->
            <h4 class="h5 fs-14 mb-1 fw-700 text-dark">{{ $user->name }}</h4>
            <!-- Phone -->
            @if ($user->phone != null)
                <div class="text-truncate opacity-60 fs-12">{{ $user->phone }}</div>
                <!-- Email -->
            @else
                <div class="text-truncate opacity-60 fs-12">{{ $user->email }}</div>
            @endif
        </div>

        <!-- Menus -->
        <div class="sidemnenu">
            <ul class="aiz-side-nav-list mb-3 pb-3 border-bottom" data-toggle="aiz-side-menu">

                <!-- Dashboard -->
                <li class="aiz-side-nav-item">
                    <a href="{{ route('dashboard') }}" class="aiz-side-nav-link {{ areActiveRoutes(['dashboard']) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <g id="Group_24768" data-name="Group 24768" transform="translate(3495.144 -602)">
                                <path id="Path_2916" data-name="Path 2916"
                                    d="M15.3,5.4,9.561.481A2,2,0,0,0,8.26,0H7.74a2,2,0,0,0-1.3.481L.7,5.4A2,2,0,0,0,0,6.92V14a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V6.92A2,2,0,0,0,15.3,5.4M10,15H6V9A1,1,0,0,1,7,8H9a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H11V9A2,2,0,0,0,9,7H7A2,2,0,0,0,5,9v6H2a1,1,0,0,1-1-1V6.92a1,1,0,0,1,.349-.76l5.74-4.92A1,1,0,0,1,7.74,1h.52a1,1,0,0,1,.651.24l5.74,4.92A1,1,0,0,1,15,6.92Z"
                                    transform="translate(-3495.144 602)" fill="#b5b5bf" />
                            </g>
                        </svg>
                        <span class="aiz-side-nav-text ml-3">{{ translate('Dashboard') }}</span>
                    </a>
                </li>

                @php
                    $delivery_viewed = get_count_by_delivery_viewed();
                    $payment_status_viewed = get_count_by_payment_status_viewed();
                @endphp





                @if (Auth::check() && auth()->user()->user_type == 'devloper')
                    <!-- myWork -->
                    <li class="aiz-side-nav-item">
                        <a href="{{ route('Mywork') }}" class="aiz-side-nav-link {{ areActiveRoutes(['Mywork']) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16.001" height="16"
                                viewBox="0 0 16.001 16">
                                <g id="Group_8110" data-name="Group 8110" transform="translate(-1388.154 -562.604)">
                                    <path id="Path_2963" data-name="Path 2963"
                                        d="M77.864,98.69V92.1a.5.5,0,1,0-1,0V98.69l-1.437-1.437a.5.5,0,0,0-.707.707l1.851,1.852a1,1,0,0,0,.707.293h.172a1,1,0,0,0,.707-.293l1.851-1.852a.5.5,0,0,0-.7-.713Z"
                                        transform="translate(1318.79 478.5)" fill="#b5b5bf" />
                                    <path id="Path_2964" data-name="Path 2964"
                                        d="M67.155,88.6a3,3,0,0,1-.474-5.963q-.009-.089-.015-.179a5.5,5.5,0,0,1,10.977-.718,3.5,3.5,0,0,1-.989,6.859h-1.5a.5.5,0,0,1,0-1l1.5,0a2.5,2.5,0,0,0,.417-4.967.5.5,0,0,1-.417-.5,4.5,4.5,0,1,0-8.908.866.512.512,0,0,1,.009.121.5.5,0,0,1-.52.479,2,2,0,1,0-.162,4l.081,0h2a.5.5,0,0,1,0,1Z"
                                        transform="translate(1324 486)" fill="#b5b5bf" />
                                </g>
                            </svg>
                            <span class="aiz-side-nav-text ml-3">{{ translate('myWork') }}</span>
                        </a>
                    </li>




                    <li class="aiz-side-nav-item">
                        <a href="{{ route('about_me') }}"
                            class="aiz-side-nav-link {{ areActiveRoutes(['about_me']) }}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.641 0C11.5472 0 12.4534 0 13.3596 0C13.3877 0.013124 13.4146 0.0306226 13.4439 0.038122C14.1139 0.211858 14.5014 0.648075 14.6051 1.32427C14.6889 1.87173 14.7526 2.42294 14.8113 2.97352C14.8288 3.13663 14.8913 3.21475 15.0457 3.27037C15.3825 3.39224 15.7169 3.52597 16.0394 3.68096C16.1856 3.75158 16.2737 3.72971 16.3906 3.63659C16.8112 3.29974 17.2387 2.97164 17.6649 2.64229C18.3436 2.11858 19.1273 2.16546 19.7385 2.76978C20.2384 3.26412 20.7353 3.76158 21.2296 4.26092C21.8339 4.87087 21.8814 5.64706 21.3565 6.33388C21.0196 6.77447 20.6728 7.20694 20.3422 7.6519C20.2953 7.71502 20.2797 7.83939 20.3078 7.91376C20.4453 8.2781 20.5946 8.6387 20.7578 8.9918C20.7946 9.07117 20.8984 9.15741 20.9827 9.17116C21.4065 9.2374 21.8339 9.2799 22.2601 9.3324C22.7026 9.38739 23.1451 9.43489 23.4988 9.75799C23.7631 9.99984 23.8994 10.3073 24 10.6385C24 11.5447 24 12.4509 24 13.3571C23.9856 13.3927 23.9675 13.4271 23.9569 13.4639C23.7681 14.1408 23.3151 14.5151 22.6295 14.6114C22.0964 14.6864 21.5614 14.7526 21.0259 14.8088C20.8634 14.8257 20.7834 14.887 20.7278 15.042C20.6096 15.3719 20.4771 15.6975 20.3278 16.0144C20.259 16.16 20.2572 16.2575 20.3622 16.3868C20.7065 16.8112 21.0396 17.2443 21.3702 17.6799C21.8758 18.3454 21.8277 19.1248 21.244 19.7172C20.7453 20.2234 20.2422 20.7259 19.7366 21.2252C19.1235 21.8308 18.3467 21.8764 17.6642 21.3515C17.2312 21.0177 16.7987 20.6834 16.3706 20.344C16.2681 20.2628 16.1875 20.2434 16.0587 20.3034C15.72 20.4609 15.3732 20.6028 15.0232 20.7346C14.8976 20.7821 14.8326 20.8409 14.8176 20.9771C14.7726 21.3958 14.7207 21.8145 14.6657 22.232C14.6139 22.6251 14.5889 23.0245 14.342 23.3657C14.0945 23.7075 13.7496 23.8838 13.3596 23.9963C12.4534 23.9963 11.5472 23.9963 10.641 23.9963C10.6129 23.9831 10.586 23.9656 10.5567 23.9581C9.8886 23.7825 9.49863 23.3494 9.39552 22.672C9.3124 22.1245 9.24865 21.5733 9.18928 21.0227C9.17178 20.8602 9.11054 20.7796 8.95555 20.724C8.6262 20.6053 8.29998 20.4734 7.98313 20.3247C7.83689 20.2559 7.74002 20.2553 7.61066 20.3603C7.18006 20.709 6.74197 21.0496 6.29826 21.3821C5.64268 21.8739 4.86274 21.8183 4.27967 21.2421C3.77408 20.7428 3.27162 20.2397 2.77166 19.7341C2.16671 19.1229 2.12046 18.3504 2.64729 17.6624C2.97477 17.2343 3.30349 16.8074 3.64034 16.3875C3.73471 16.2694 3.75221 16.18 3.68284 16.0356C3.52847 15.7125 3.39286 15.3794 3.27287 15.042C3.21662 14.8845 3.13163 14.8276 2.97227 14.8107C2.43668 14.7532 1.90298 14.6832 1.36864 14.6151C0.983673 14.5664 0.628076 14.4276 0.394344 14.1145C0.226232 13.8895 0.129365 13.6114 0 13.3577C0 12.4359 0 11.5141 0 10.5923C0.0149988 10.5673 0.0362472 10.5436 0.0443715 10.5167C0.242481 9.84423 0.697446 9.47426 1.38427 9.38302C1.91735 9.31177 2.45168 9.24365 2.98664 9.18678C3.14038 9.17053 3.21412 9.10866 3.26724 8.9643C3.39036 8.62808 3.52472 8.29498 3.67659 7.97125C3.74221 7.83189 3.74346 7.74127 3.64409 7.61878C3.30599 7.20006 2.97852 6.77197 2.65104 6.3445C2.11671 5.64706 2.16358 4.87462 2.77728 4.25529C3.26662 3.76221 3.75783 3.27099 4.25092 2.78166C4.87274 2.16483 5.64206 2.11421 6.33888 2.64729C6.7726 2.97914 7.20319 3.31537 7.6319 3.65409C7.72502 3.72783 7.79939 3.75783 7.92251 3.70221C8.27685 3.54097 8.64245 3.40598 8.9968 3.24475C9.07242 3.21037 9.15741 3.11663 9.16991 3.03914C9.2349 2.63104 9.27427 2.2192 9.32927 1.80986C9.38302 1.40989 9.39552 0.999922 9.64362 0.649324C9.8936 0.299977 10.2386 0.108117 10.641 0ZM11.9997 23.002C12.3278 23.002 12.6559 23.0032 12.984 23.002C13.4096 23.0001 13.5796 22.8507 13.6327 22.4301C13.7158 21.7721 13.8008 21.114 13.8777 20.4553C13.9102 20.1765 14.047 20.0147 14.3158 19.9134C14.8695 19.7053 15.4169 19.4791 15.9544 19.2329C16.2244 19.1098 16.4387 19.1291 16.6662 19.3116C17.1787 19.721 17.6999 20.1197 18.218 20.5215C18.5673 20.7928 18.766 20.7828 19.0735 20.4759C19.5385 20.0128 20.0022 19.5485 20.4653 19.0841C20.7834 18.7654 20.7946 18.5729 20.514 18.2105C20.1078 17.6855 19.7022 17.1599 19.2904 16.6393C19.1204 16.4243 19.1141 16.2169 19.2266 15.9669C19.4697 15.4275 19.7016 14.8826 19.9078 14.3283C20.0116 14.0495 20.1759 13.9095 20.4647 13.8764C21.1315 13.7995 21.7977 13.7152 22.4626 13.6283C22.8395 13.5789 22.9988 13.3971 23.0007 13.0196C23.0038 12.3403 23.0038 11.6603 23.0007 10.981C22.9988 10.5998 22.8457 10.4236 22.4639 10.3729C21.7983 10.2848 21.1327 10.2005 20.4659 10.1236C20.1778 10.0905 20.0122 9.9511 19.9084 9.67237C19.7053 9.12554 19.481 8.58496 19.2379 8.05437C19.1154 7.78752 19.1204 7.57253 19.3047 7.34193C19.7141 6.82947 20.1128 6.30826 20.5146 5.78955C20.7971 5.42458 20.7865 5.23647 20.4671 4.91649C20.0034 4.45215 19.5397 3.98781 19.0748 3.52472C18.766 3.21725 18.5704 3.20662 18.2192 3.47848C17.6949 3.88532 17.1687 4.29029 16.6481 4.70213C16.4256 4.87837 16.2144 4.88524 15.955 4.76588C15.4319 4.52527 14.902 4.29529 14.3601 4.10155C14.052 3.99156 13.9045 3.81783 13.8708 3.49848C13.8002 2.83915 13.7133 2.18108 13.6252 1.52363C13.5752 1.14866 13.3933 0.997422 13.0084 0.995547C12.3365 0.993048 11.6647 0.993048 10.9929 0.995547C10.596 0.996797 10.4217 1.14866 10.3698 1.543C10.2836 2.20108 10.198 2.85915 10.1242 3.51785C10.0905 3.81595 9.94985 3.98656 9.66175 4.09218C9.12116 4.29029 8.58683 4.50902 8.06499 4.75213C7.78939 4.88087 7.57066 4.87712 7.33255 4.68713C6.80822 4.26779 6.27513 3.85907 5.74268 3.44973C5.42895 3.2085 5.22334 3.22412 4.94211 3.5041C4.46653 3.97844 3.99156 4.45403 3.51785 4.93024C3.22037 5.22959 3.20787 5.43083 3.46848 5.76767C3.8747 6.29263 4.27904 6.81884 4.69276 7.33818C4.87587 7.56753 4.88462 7.78377 4.7615 8.05125C4.52027 8.57433 4.29341 9.10554 4.0978 9.64675C3.99031 9.94485 3.8197 10.0911 3.51098 10.1248C2.85915 10.1967 2.2092 10.2829 1.55925 10.3661C1.15303 10.4179 0.997422 10.5923 0.996172 10.9991C0.994297 11.6628 0.994297 12.3272 0.996172 12.9909C0.997422 13.4008 1.14929 13.5752 1.5555 13.6271C2.21358 13.7121 2.87165 13.7964 3.53035 13.872C3.81845 13.9052 3.98531 14.0427 4.08843 14.322C4.28716 14.8626 4.50402 15.3982 4.74838 15.9188C4.88149 16.2031 4.87712 16.4268 4.68026 16.6718C4.25967 17.1955 3.85157 17.7286 3.44161 18.2611C3.21037 18.5617 3.22725 18.7723 3.49723 19.0435C3.97094 19.5197 4.44653 19.9947 4.92211 20.4684C5.22959 20.7753 5.42833 20.7871 5.77767 20.5171C6.30888 20.1066 6.83884 19.6941 7.36755 19.2797C7.57503 19.1173 7.78002 19.111 8.02125 19.2185C8.55371 19.4566 9.08929 19.6935 9.638 19.8916C9.9561 20.0066 10.0961 20.1922 10.1298 20.519C10.1967 21.1708 10.2854 21.8208 10.3736 22.4707C10.4242 22.8457 10.6054 22.9951 10.9904 22.9982C11.3279 23.0045 11.6635 23.002 11.9997 23.002Z"
                                    fill="white" />
                                <path
                                    d="M12.1462 16.998C9.44512 17.1192 7.12405 14.9344 7.00219 12.1559C6.88345 9.43609 9.06452 7.11877 11.8556 7.00003C14.5641 6.88504 16.872 9.05674 16.9995 11.8422C17.1239 14.5563 14.9441 16.8724 12.1462 16.998ZM15.9959 11.9971C15.9946 9.78669 14.216 8.0062 12.0055 8.0037C9.79572 8.0012 8.01211 9.77794 8.00648 11.9884C8.00086 14.207 9.79072 15.9987 12.008 15.9943C14.2179 15.99 15.9965 14.2063 15.9959 11.9971Z"
                                    fill="white" />
                            </svg>
                            <span class="aiz-side-nav-text ml-3">{{ translate('Setting') }}</span>
                        </a>
                    </li>
                @endif





                {{-- <!-- Downloads -->
                <li class="aiz-side-nav-item">
                    <a href="{{ route('digital_purchase_history.index') }}"
                        class="aiz-side-nav-link {{ areActiveRoutes(['digital_purchase_history.index']) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.001" height="16" viewBox="0 0 16.001 16">
                            <g id="Group_8110" data-name="Group 8110" transform="translate(-1388.154 -562.604)">
                                <path id="Path_2963" data-name="Path 2963" d="M77.864,98.69V92.1a.5.5,0,1,0-1,0V98.69l-1.437-1.437a.5.5,0,0,0-.707.707l1.851,1.852a1,1,0,0,0,.707.293h.172a1,1,0,0,0,.707-.293l1.851-1.852a.5.5,0,0,0-.7-.713Z" transform="translate(1318.79 478.5)" fill="#b5b5bf"/>
                                <path id="Path_2964" data-name="Path 2964" d="M67.155,88.6a3,3,0,0,1-.474-5.963q-.009-.089-.015-.179a5.5,5.5,0,0,1,10.977-.718,3.5,3.5,0,0,1-.989,6.859h-1.5a.5.5,0,0,1,0-1l1.5,0a2.5,2.5,0,0,0,.417-4.967.5.5,0,0,1-.417-.5,4.5,4.5,0,1,0-8.908.866.512.512,0,0,1,.009.121.5.5,0,0,1-.52.479,2,2,0,1,0-.162,4l.081,0h2a.5.5,0,0,1,0,1Z" transform="translate(1324 486)" fill="#b5b5bf"/>
                            </g>
                        </svg>
                        <span class="aiz-side-nav-text ml-3">{{ translate('Downloads') }}</span>
                    </a>
                </li> --}}




                <!-- Wishlist -->
                @if (Auth::check() && auth()->user()->user_type == 'customer')
                    <li class="aiz-side-nav-item">
                        <a href="{{ route('wishlists.index') }}"
                            class="aiz-side-nav-link {{ areActiveRoutes(['wishlists.index']) }}">
                            <svg id="Group_8116" data-name="Group 8116" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="14"
                                viewBox="0 0 16 14">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect id="Rectangle_1391" data-name="Rectangle 1391" width="16"
                                            height="14" fill="#b5b5bf" />
                                    </clipPath>
                                </defs>
                                <g id="Group_8115" data-name="Group 8115" clip-path="url(#clip-path)">
                                    <path id="Path_2981" data-name="Path 2981"
                                        d="M14.682,1.318a4.5,4.5,0,0,0-6.364,0L8,1.636l-.318-.318A4.5,4.5,0,0,0,1.318,7.682l6.046,6.054a.9.9,0,0,0,1.273,0l6.045-6.054a4.5,4.5,0,0,0,0-6.364m-.707,5.657L8,12.959,2.025,6.975a3.5,3.5,0,0,1,4.95-4.95l.389.389a.9.9,0,0,0,1.273,0l.388-.389a3.5,3.5,0,0,1,4.95,4.95"
                                        transform="translate(0 0)" fill="#b5b5bf" />
                                </g>
                            </svg>
                            <span class="aiz-side-nav-text ml-3">{{ translate('Wishlist') }}</span>
                        </a>
                    </li>
                @endif

                {{-- 
                @if (get_setting('vendor_system_activation') == 1)
                <!-- Followed Sellers -->
                <li class="aiz-side-nav-item">
                    <a href="{{ route('followed_seller') }}" class="aiz-side-nav-link {{ areActiveRoutes(['followed_seller']) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <g id="Group_8114" data-name="Group 8114" transform="translate(-1501.679 -486)">
                                <path id="Path_2977" data-name="Path 2977" d="M193.408,3.756,192.05.862A1.5,1.5,0,0,0,190.692,0H180.666a1.5,1.5,0,0,0-1.357.862L177.95,3.756l.029-.062A3,3,0,0,0,179.373,7.7a3.091,3.091,0,0,0,.306.128V16h12V9.5a.5.5,0,0,0-1,0V15h-3V10.5a.5.5,0,0,0-.5-.5h-3a.5.5,0,0,0-.5.5V15h-3V8a3,3,0,0,0,2.5-1.342,3,3,0,0,0,5,0,3,3,0,0,0,5.229-2.9M184.679,11h2v4h-2Zm6.4-4.041A2,2,0,0,1,188.719,5.4a.5.5,0,0,0-.49-.4h-.1a.5.5,0,0,0-.49.4,2,2,0,0,1-3.919,0,.5.5,0,0,0-.49-.4h-.1a.5.5,0,0,0-.49.4,2,2,0,1,1-3.781-1.225l1.357-2.888A.5.5,0,0,1,180.666,1h10.025a.5.5,0,0,1,.452.288L192.5,4.175a2,2,0,0,1-1.422,2.784" transform="translate(1324 486)" fill="#b5b5bf"/>
                            </g>
                        </svg>
                        <span class="aiz-side-nav-text ml-3">{{ translate('Followed Teacher') }}</span>
                    </a>
                </li>
                @endif --}}




                {{-- 
                <!-- Conversations -->
                @if (get_setting('conversation_system') == 1)
                    @php
                        $conversation = get_non_viewed_conversations();
                    @endphp
                    <li class="aiz-side-nav-item">
                        <a href="{{ route('conversations.index') }}"
                            class="aiz-side-nav-link {{ areActiveRoutes(['conversations.index', 'conversations.show']) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g id="Group_8134" data-name="Group 8134" transform="translate(1053.151 256.688)">
                                    <path id="Path_3012" data-name="Path 3012" d="M134.849,88.312h-8a2,2,0,0,0-2,2v5a2,2,0,0,0,2,2v3l2.4-3h5.6a2,2,0,0,0,2-2v-5a2,2,0,0,0-2-2m1,7a1,1,0,0,1-1,1h-8a1,1,0,0,1-1-1v-5a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1Z" transform="translate(-1178 -341)" fill="#b5b5bf"/>
                                    <path id="Path_3013" data-name="Path 3013" d="M134.849,81.312h8a1,1,0,0,1,1,1v5a1,1,0,0,1-1,1h-.5a.5.5,0,0,0,0,1h.5a2,2,0,0,0,2-2v-5a2,2,0,0,0-2-2h-8a2,2,0,0,0-2,2v.5a.5.5,0,0,0,1,0v-.5a1,1,0,0,1,1-1" transform="translate(-1182 -337)" fill="#b5b5bf"/>
                                    <path id="Path_3014" data-name="Path 3014" d="M131.349,93.312h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1" transform="translate(-1181 -343.5)" fill="#b5b5bf"/>
                                    <path id="Path_3015" data-name="Path 3015" d="M131.349,99.312h5a.5.5,0,1,1,0,1h-5a.5.5,0,1,1,0-1" transform="translate(-1181 -346.5)" fill="#b5b5bf"/>
                                </g>
                            </svg>
                            <span class="aiz-side-nav-text ml-3">{{ translate('Conversations') }}</span>
                            @if (count($conversation) > 0)
                                <span class="badge badge-success">({{ count($conversation) }})</span>
                            @endif
                        </a>
                    </li>
                @endif --}}








                <!-- Manage Profile -->
                <li class="aiz-side-nav-item">
                    <a href="{{ route('profile') }}" class="aiz-side-nav-link {{ areActiveRoutes(['profile']) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <g id="Group_8094" data-name="Group 8094" transform="translate(3176 -602)">
                                <path id="Path_2924" data-name="Path 2924"
                                    d="M331.144,0a4,4,0,1,0,4,4,4,4,0,0,0-4-4m0,7a3,3,0,1,1,3-3,3,3,0,0,1-3,3"
                                    transform="translate(-3499.144 602)" fill="#b5b5bf" />
                                <path id="Path_2925" data-name="Path 2925"
                                    d="M332.144,20h-10a3,3,0,0,0,0,6h10a3,3,0,0,0,0-6m0,5h-10a2,2,0,0,1,0-4h10a2,2,0,0,1,0,4"
                                    transform="translate(-3495.144 592)" fill="#b5b5bf" />
                            </g>
                        </svg>
                        <span class="aiz-side-nav-text ml-3">{{ translate('Manage Profile') }}</span>
                    </a>
                </li>

                <!-- Delete My Account -->
                <li class="aiz-side-nav-item">
                    <a href="javascript:void(0)"
                        onclick="account_delete_confirm_modal('{{ route('account_delete') }}')"
                        class="aiz-side-nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <g id="Group_25000" data-name="Group 25000" transform="translate(-240.535 -537)">
                                <path id="Path_2961" data-name="Path 2961"
                                    d="M221.069,0a8,8,0,1,0,8,8,8,8,0,0,0-8-8m0,15a7,7,0,1,1,7-7,7,7,0,0,1-7,7"
                                    transform="translate(27.466 537)" fill="#b5b5bf" />
                                <rect id="Rectangle_18942" data-name="Rectangle 18942" width="8" height="1"
                                    rx="0.5" transform="translate(244.535 544.5)" fill="#b5b5bf" />
                            </g>
                        </svg>
                        <span class="aiz-side-nav-text ml-3">{{ translate('Delete My Account') }}</span>
                    </a>
                </li>

            </ul>

            <!-- logout -->
            <a href="{{ route('logout') }}" class="btn btn-primary btn-block fs-14 fw-700 mb-5 mb-md-0"
                style="border-radius: 25px;">{{ translate('Sign Out') }}</a>
        </div>

    </div>
</div>
@endauth