@php
    $product_url = route('product', $product->slug);
    if ($product->auction_product == 1) {
        $product_url = route('auction-product', $product->slug);
    }
@endphp

<div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
    <div class="cards_courses">





        <a href="{{ $product_url }}" class="d-block h-100">
            <img class="img-fluid w-100 mb-2" src="{{ get_image($product->thumbnail) }}"
                alt="{{ $product->getTranslation('name') }}" title="{{ $product->getTranslation('name') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
        </a>

        <div class="d-flex justify-content-between">
            <div class="course_heading">
                <h4>{{ $product->getTranslation('name') }}</h4>
            </div>
            <div class="course_headinfg">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.3446 14.901L14.2849 17.3974C14.7886 17.7165 15.4139 17.2419 15.2644 16.654L14.126 12.1756C14.0939 12.0509 14.0977 11.9197 14.137 11.797C14.1762 11.6743 14.2492 11.5652 14.3477 11.4822L17.8811 8.54132C18.3453 8.1549 18.1057 7.38439 17.5092 7.34567L12.8949 7.0462C12.7706 7.03732 12.6514 6.99332 12.5511 6.91931C12.4509 6.84531 12.3737 6.74435 12.3286 6.62819L10.6076 2.29436C10.5609 2.17106 10.4777 2.06492 10.3692 1.99002C10.2606 1.91511 10.1319 1.875 10 1.875C9.86813 1.875 9.73938 1.91511 9.63085 1.99002C9.52232 2.06492 9.43914 2.17106 9.39236 2.29436L7.6714 6.62819C7.62631 6.74435 7.54914 6.84531 7.4489 6.91931C7.34865 6.99332 7.22944 7.03732 7.10515 7.0462L2.49078 7.34567C1.89429 7.38439 1.65466 8.1549 2.11894 8.54132L5.65232 11.4822C5.75079 11.5652 5.82383 11.6743 5.86305 11.797C5.90226 11.9197 5.90606 12.0509 5.874 12.1756L4.81824 16.3288C4.63889 17.0343 5.38929 17.6038 5.99369 17.2209L9.65539 14.901C9.75837 14.8354 9.87792 14.8006 10 14.8006C10.1221 14.8006 10.2416 14.8354 10.3446 14.901Z"
                        fill="url(#paint0_linear_201_8073)"></path>
                    <defs>
                        <linearGradient id="paint0_linear_201_8073" x1="10" y1="1.875" x2="10"
                            y2="17.5" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#59B5C6"></stop>
                            <stop offset="1" stop-color="#0A2B7D"></stop>
                        </linearGradient>
                    </defs>
                </svg>

                <span>{{ $product->rating }}</span>

            </div>
        </div>

        <small>{{ \Illuminate\Support\Str::limit(strip_tags($product->getTranslation('description')), 10, '...') }}</small>



        <div class="d-flex justify-content-between align-items-center">
            <div class="course_heading">
                <h6>Free</h6>
            </div>
            <div class="str_rate">

                <div class="filter ">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                        <li><a class="dropdown-item active" href="{{ $product_url }}" target="_blank">View Course
                                Details</a></li>
                                <li>
                                    <a class="dropdown-item" 
                                       href="{{ $product->user && $product->user->shop ? route('shop.visit', $product->user->shop->slug) : '#' }}" 
                                       target="_blank">
                                        {{ $product->user && $product->user->shop ? 'About Teacher' : 'Teacher Information Not Available' }}
                                    </a>
                                </li>
                                
                        <li><a class="dropdown-item" href="courses.php" target="_blank">Add Course </a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>