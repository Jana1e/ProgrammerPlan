@extends('frontend.layouts.app')

@section('content')

    @php
        CoreComponentRepository::instantiateShopRepository();
        CoreComponentRepository::initializeCache();
    @endphp


    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Bootstrap JS (necessary for tab functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <a href="#" data-bs-toggle="modal" data-bs-target="#addQuiz">Add New Quiz</a>



    <div id="anc_sec" class="dashboard-box bg-white mb-2rem overflow-hidden">
        <nav class="nav nav-pills nav-fill">
            <!-- Basic Information -->
            <a class="nav-link active" id="general-tab" href="#general" data-bs-toggle="tab" data-bs-target="#general"
                type="button" role="tab" aria-controls="general" aria-selected="true">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.2"
                        d="M2.94629 6.45987L9.96902 10.5565L16.9917 6.45987L9.96902 2.36328L2.94629 6.45987Z"
                        fill="#6E7485" />
                    <path d="M2.94629 13.4824L9.96902 17.579L16.9917 13.4824" stroke="#6E7485" stroke-width="1.17045"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M2.94629 9.9707L9.96902 14.0673L16.9917 9.9707" stroke="#6E7485" stroke-width="1.17045"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M2.94629 6.45987L9.96902 10.5565L16.9917 6.45987L9.96902 2.36328L2.94629 6.45987Z"
                        stroke="#6E7485" stroke-width="1.17045" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Basic Information
                <span><small class="text-success ms-4">7/12</small></span>
            </a>

            <!-- Advance Information -->
            <a class="nav-link" id="files-and-media-tab" href="#files_and_media" data-bs-toggle="tab"
                data-bs-target="#files_and_media" type="button" role="tab" aria-controls="files_and_media"
                aria-selected="false">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.2"
                        d="M12.492 3.5332C12.8728 4.03926 13.0782 4.65561 13.0772 5.28889V5.87411H7.22496V5.28889C7.22401 4.65561 7.42944 4.03926 7.81016 3.5332H4.88406C4.8072 3.5332 4.7311 3.54834 4.6601 3.57775C4.58909 3.60716 4.52458 3.65026 4.47023 3.70461C4.41589 3.75895 4.37278 3.82347 4.34337 3.89447C4.31396 3.96547 4.29883 4.04158 4.29883 4.11843V16.4082C4.29883 16.4851 4.31396 16.5612 4.34337 16.6322C4.37278 16.7032 4.41589 16.7677 4.47023 16.822C4.52458 16.8764 4.58909 16.9195 4.6601 16.9489C4.7311 16.9783 4.8072 16.9934 4.88406 16.9934H15.4181C15.495 16.9934 15.5711 16.9783 15.6421 16.9489C15.7131 16.9195 15.7776 16.8764 15.832 16.822C15.8863 16.7677 15.9294 16.7032 15.9588 16.6322C15.9882 16.5612 16.0034 16.4851 16.0034 16.4082V4.11843C16.0034 4.04158 15.9882 3.96547 15.9588 3.89447C15.9294 3.82347 15.8863 3.75895 15.832 3.70461C15.7776 3.65026 15.7131 3.60716 15.6421 3.57775C15.5711 3.54834 15.495 3.5332 15.4181 3.5332H12.492Z"
                        fill="#6E7485" />
                    <path d="M7.80957 11.7266H12.4914" stroke="#6E7485" stroke-width="1.17045" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M7.80957 9.38672H12.4914" stroke="#6E7485" stroke-width="1.17045" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M12.4922 3.5332H15.4181C15.5734 3.5332 15.7222 3.59486 15.832 3.70461C15.9417 3.81436 16.0034 3.96322 16.0034 4.11843V16.4082C16.0034 16.5634 15.9417 16.7123 15.832 16.822C15.7222 16.9318 15.5734 16.9934 15.4181 16.9934H4.88406C4.72884 16.9934 4.57999 16.9318 4.47024 16.822C4.36049 16.7123 4.29883 16.5634 4.29883 16.4082V4.11843C4.29883 3.96322 4.36049 3.81436 4.47024 3.70461C4.57999 3.59486 4.72884 3.5332 4.88406 3.5332H7.81003"
                        stroke="#6E7485" stroke-width="1.17045" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M7.22461 5.87465V5.28942C7.22461 4.51336 7.5329 3.76908 8.08165 3.22033C8.63041 2.67157 9.37469 2.36328 10.1507 2.36328C10.9268 2.36328 11.6711 2.67157 12.2198 3.22033C12.7686 3.76908 13.0769 4.51336 13.0769 5.28942V5.87465H7.22461Z"
                        stroke="#6E7485" stroke-width="1.17045" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Advance Information
            </a>

            <!-- Curriculum -->
            <a class="nav-link" id="price-and-stocks-tab" href="#price_and_stocks" data-bs-toggle="tab"
                data-bs-target="#price_and_stocks" type="button" role="tab" aria-controls="price_and_stocks"
                aria-selected="false">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.2"
                        d="M16.1846 4.11914H4.48002C4.1696 4.11914 3.87189 4.24246 3.65239 4.46196C3.43289 4.68146 3.30957 4.97917 3.30957 5.2896V13.4828C3.30957 13.7932 3.43289 14.0909 3.65239 14.3104C3.87189 14.5299 4.1696 14.6532 4.48002 14.6532H16.1846C16.495 14.6532 16.7927 14.5299 17.0122 14.3104C17.2317 14.0909 17.355 13.7932 17.355 13.4828V5.2896C17.355 4.97917 17.2317 4.68146 17.0122 4.46196C16.7927 4.24246 16.495 4.11914 16.1846 4.11914V4.11914ZM9.16184 11.7271V7.04528L12.6732 9.38619L9.16184 11.7271Z"
                        fill="#6E7485" />
                    <path
                        d="M4.48047 14.6523L16.185 14.6523C16.8314 14.6523 17.3555 14.1283 17.3555 13.4819V5.28871C17.3555 4.64228 16.8314 4.11825 16.185 4.11825L4.48047 4.11825C3.83404 4.11825 3.31001 4.64228 3.31001 5.28871L3.31001 13.4819C3.31001 14.1283 3.83404 14.6523 4.48047 14.6523Z"
                        stroke="#6E7485" stroke-width="1.17045" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12.673 16.9941H7.99121" stroke="#6E7485" stroke-width="1.17045" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M12.6735 9.38583L9.16211 7.04492V11.7267L12.6735 9.38583Z" stroke="#6E7485"
                        stroke-width="1.17045" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Curriculum
            </a>

            <!-- Publish Course -->
            <a class="nav-link" id="seo-tab" href="#seo" data-bs-toggle="tab" data-bs-target="#seo" type="button"
                role="tab" aria-controls="seo" aria-selected="false">
                <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.2"
                        d="M9.51492 2.94922C8.12595 2.94922 6.76818 3.36109 5.6133 4.13276C4.45842 4.90443 3.5583 6.00123 3.02676 7.28446C2.49523 8.5677 2.35616 9.97974 2.62713 11.342C2.8981 12.7043 3.56695 13.9556 4.5491 14.9378C5.53125 15.9199 6.78258 16.5888 8.14485 16.8597C9.50713 17.1307 10.9192 16.9916 12.2024 16.4601C13.4856 15.9286 14.5824 15.0284 15.3541 13.8736C16.1258 12.7187 16.5376 11.3609 16.5376 9.97195C16.5376 9.04971 16.356 8.1365 16.0031 7.28446C15.6502 6.43242 15.1329 5.65824 14.4807 5.00612C13.8286 4.354 13.0544 3.83671 12.2024 3.48379C11.3504 3.13086 10.4372 2.94922 9.51492 2.94922V2.94922ZM8.34446 12.3129V7.63104L11.8558 9.97195L8.34446 12.3129Z"
                        fill="#6E7485" />
                    <path
                        d="M9.51492 16.9947C13.3935 16.9947 16.5376 13.8505 16.5376 9.97195C16.5376 6.0934 13.3935 2.94922 9.51492 2.94922C5.63637 2.94922 2.49219 6.0934 2.49219 9.97195C2.49219 13.8505 5.63637 16.9947 9.51492 16.9947Z"
                        stroke="#6E7485" stroke-width="1.17045" stroke-miterlimit="10" />
                    <path d="M11.8561 9.97177L8.34473 7.63086V12.3127L11.8561 9.97177Z" stroke="#6E7485"
                        stroke-width="1.17045" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Publish Course
            </a>

            <!-- Shipping -->
            <a class="nav-link" id="shipping-tab" href="#shipping" data-bs-toggle="tab" data-bs-target="#shipping"
                type="button" role="tab" aria-controls="shipping" aria-selected="false">
                {{ translate('Shipping') }}
            </a>
        </nav>

        <!-- Tab Content -->
        <div class="flex-grow-1 p-sm-3 p-lg-2rem mb-2rem mb-md-0">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif



            <form action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data" enctype="multipart/form-data" id="choice_form">
                @csrf
                <input name="_method" type="hidden" value="POST">
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="lang" value="{{ $lang }}">
                <input type="hidden" name="tab" id="tab">

                <input type="hidden" placeholder="{{translate('Slug')}}" id="slug" name="slug" value="{{ $product->slug }}" class="form-control">
                <div class="tab-content">
                    <!-- General -->
                    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <div class="bg-white p-3 p-sm-2rem ">
                            <!-- Course Information -->
                            <h5 class="mb-3 pb-3 fs-17 fw-700" style="border-bottom: 1px dashed #e4e5eb;">
                                {{ translate('Course Information') }}</h5>
                            <div class="w-100">
                                <div class="row">
                                    <div class="col-xxl-7 col-xl-6">
                                        <!-- Product Name -->
                                        <div class="form-group row">
                                            <label class="col-xxl-3 col-from-label fs-13">{{ translate('Title') }} <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-xxl-9">
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ $product->name }}" placeholder="{{ translate('Title') }}"
                                                    onchange="update_sku()">
                                            </div>
                                        </div>
                                        <!-- Lab Level -->
                                        <div class="form-group row" id="brand">
                                            <label class="col-xxl-3 col-from-label fs-13">{{ translate('Level') }}</label>
                                            <div class="col-xxl-9">
                                                <select class="form-control aiz-selectpicker" name="brand_id"
                                                    id="brand_id" data-live-search="true">
                                                    <option value="">{{ translate('Select Level') }}</option>

                                                </select>
                                                <small
                                                    class="text-muted">{{ translate("You can choose a brand if you'd like to display your product by brand.") }}</small>
                                            </div>
                                        </div>


                                        <!-- Teacher -->



                                        @php
                                            $teachers = \App\Models\User::where('user_type', 'teacher')->get();
                                        @endphp

                                        <div class="form-group row" id="brand">
                                            <label
                                                class="col-xxl-3 col-form-label fs-13">{{ translate('Teacher') }}</label>
                                            <div class="col-xxl-9">

                                                <select class="select2 form-control aiz-selectpicker" name="user_id"
                                                    data-toggle="select2"
                                                    data-placeholder="Choose ..."data-live-search="true"
                                                    data-selected="{{ $product->user_id }}">



                                                    @foreach ($teachers as $teacher)
                                                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                                    @endforeach






                                                </select>
                                            </div>
                                        </div>









                                        <!-- Category -->
                                        <div class="form-group row" id="brand">
                                            <label
                                                class="col-xxl-3 col-form-label fs-13">{{ translate('Category') }}</label>
                                            <div class="col-xxl-9">

                                                <select class="select2 form-control aiz-selectpicker" name="category_id"
                                                    data-toggle="select2"
                                                    data-placeholder="Choose ..."data-live-search="true"
                                                    data-selected="{{ $product->category_id }}">
                                                    @include(
                                                        'backend.product.categories.categories_option_edit',
                                                        ['categories' => $categories]
                                                    )
                                                </select>
                                            </div>
                                        </div>


                                        <!-- Durations -->
                                        <div class="form-group row">
                                            <label class="col-xxl-3 col-from-label fs-13">{{ translate('Durations') }}
                                                <span class="text-danger">*</span></label>
                                            <div class="col-xxl-9">
                                                <input type="text" class="form-control aiz-date-range"
                                                    name="date_range" placeholder="{{ translate('Select Date') }}"
                                                    data-time-picker="true" data-format="DD-MM-Y HH:mm:ss"
                                                    data-separator=" to " autocomplete="off">
                                            </div>
                                        </div>


                                        <!-- Status -->
                                        <h5 class="mb-3 mt-5 pb-3 fs-17 fw-700"
                                            style="border-bottom: 1px dashed #e4e5eb;">
                                            {{ translate('Status') }}</h5>
                                        <div class="w-100">
                                            <!-- Featured -->
                                            <div class="form-group row">
                                                <label class="col-md-3 col-from-label">{{ translate('Featured') }}</label>
                                                <div class="col-md-9">
                                                    <label class="aiz-switch aiz-switch-success mb-0 d-block">
                                                        <input type="checkbox" name="featured" value="1">
                                                        <span></span>
                                                    </label>
                                                    <small
                                                        class="text-muted">{{ translate('If you enable this, this course will be granted as a featured product.') }}</small>
                                                </div>
                                            </div>
                                            <!-- Todays Deal -->
                                            <div class="form-group row">
                                                <label
                                                    class="col-md-3 col-from-label">{{ translate('Todays Deal') }}</label>
                                                <div class="col-md-9">
                                                    <label class="aiz-switch aiz-switch-success mb-0 d-block">
                                                        <input type="checkbox" name="todays_deal" value="1">
                                                        <span></span>
                                                    </label>
                                                    <small
                                                        class="text-muted">{{ translate('If you enable this, this Course will be granted as a todays deal Course.') }}</small>
                                                </div>
                                            </div>





                                        </div>


                                    </div>

                                  




                                </div>





                            </div>




                            <div class="w-100">

                            </div>
                        </div>
                    </div>

                    <!-- Advance Information -->
                    <div class="tab-pane fade" id="files_and_media" role="tabpanel"
                        aria-labelledby="files-and-media-tab">
                        <div class="bg-white p-3 p-sm-2rem">
                            <!-- Advance Informations -->
                            <h5 class="mb-3 pb-3 fs-17 fw-700" style="border-bottom: 1px dashed #e4e5eb;">
                                {{ translate('Advance Informations') }}</h5>
                            <div class="w-100">
                                <!-- Gallery Images -->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"
                                        for="signinSrEmail">{{ translate('Gallery Images') }}
                                        <small>(600x600)</small></label>
                                    <div class="col-md-9">
                                        <div class="input-group" data-toggle="aizuploader" data-type="image"
                                            data-multiple="true">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                    {{ translate('Browse') }}</div>
                                            </div>
                                            <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                            <input type="hidden" name="photos" class="selected-files"
                                                value="{{ $product->photos }}">
                                        </div>
                                        <div class="file-preview box sm">
                                        </div>
                                        <small
                                            class="text-muted">{{ translate('These images are visible in course details page gallery. Use 600x600 sizes images.') }}</small>
                                    </div>
                                </div>
                                <!-- Thumbnail Image -->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"
                                        for="signinSrEmail">{{ translate('Thumbnail Image') }}
                                        <small>(300x300)</small></label>
                                    <div class="col-md-9">
                                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                    {{ translate('Browse') }}</div>
                                            </div>
                                            <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                            <input type="hidden" name="thumbnail_img" class="selected-files"
                                                value="{{ $product->thumbnail_img }}">
                                        </div>
                                        <div class="file-preview box sm">
                                        </div>
                                        <small
                                            class="text-muted">{{ translate('This image is visible in all product box. Use 300x300 sizes image. Keep some blank space around main object of your image as we had to crop some edge in different devices to make it responsive.') }}</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Video Link -->
                            <div class="form-group row">
                                <label class="col-md-3 col-from-label">{{ translate('Video Link') }}</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="video_link"
                                        value="{{ $product->video_link }}" placeholder="{{ translate('Video Link') }}">
                                    <small
                                        class="text-muted">{{ translate("Use proper link without extra parameter. Don't use short share link/embeded iframe code.") }}</small>
                                </div>
                            </div>
                            <!-- PDF Specification -->
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"
                                    for="signinSrEmail">{{ translate('PDF Specification') }}</label>
                                <div class="col-md-9">
                                    <div class="input-group" data-toggle="aizuploader" data-type="document">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                {{ translate('Browse') }}</div>
                                        </div>
                                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                        <input type="hidden" name="pdf" class="selected-files"
                                            value="{{ $product->pdf }}">
                                    </div>
                                    <div class="file-preview box sm">
                                    </div>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="form-group">
                                <label class="col-form-label">{{ translate('Description') }}</label>
                                <div class="">
                                    <textarea class="aiz-text-editor" name="description">{{ $product->description }}</textarea>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Curriculum -->
                    <div class="tab-pane fade" id="price_and_stocks" role="tabpanel"
                        aria-labelledby="price-and-stocks-tab">
                        <div class="bg-white p-3 p-sm-2rem">
                            <!-- tab Title -->
                            <h5 class="mb-3 pb-3 fs-17 fw-700" style="border-bottom: 1px dashed #e4e5eb;">
                                {{ translate('') }}</h5>
                            <div class="w-100">

                                <div class="curri_sec">

                                    <!-- Default Accordion -->
                                    <div class="accordion" id="accordionExample">
                                    </div>
                                    <div class="add_secbt">
                                        <a href="#">Add Sections</a>
                                    </div><!-- End Default Accordion Example -->
                                </div>

                            </div>


                        </div>
                    </div>

                    <!-- Publish Course -->
                    <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                        <div class="bg-white p-3 p-sm-2rem">
                            <h5 class="mb-3 fs-17 fw-700">{{ translate('Publish Course') }}</h5>


                        </div>
                    </div>

                    <!-- Shipping -->
                    <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
                        <div class="bg-white p-3 p-sm-2rem">
                            <h5 class="mb-3 fs-17 fw-700">{{ translate('Shipping') }}</h5>
                            <p>Content for Shipping goes here.</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <div class="d-flex">
                        <button type="button" id="back_button" class="btn btn-link" onclick="back()">Previous</button>
                        <button id="next_button" class="btn btn-primary ms-auto" onclick="next()">Save &
                            next</button>
                    </div>
                </div>

            </form>
        </div>

    </div>







    <!-- Edit Section Modal -->
    <div class="card__">
        <div class="card-body__">

            <div class="modal fade" id="editSectionModal" tabindex="-1" aria-labelledby="editSectionModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editSectionModalLabel">Edit Section Name</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="sectionNameInput" class="form-label">Section</label>
                                    <input type="text" class="form-control" id="sectionNameInput"
                                        placeholder="Write your section name here...">

                                </div>

                                <div class="mb-3">
                                    <label for="section-order" class="form-label">Order</label>
                                    <input type="text" class="form-control" id="section-order"
                                        placeholder="Write your Order name here...">
                                </div>



                            </form>
                        </div>
                        <div class="modal-footer justify-content-between border-0">
                            <button type="button" class="btn btn-transparent" data-bs-dismiss="modal">Cancel</button>
                            <button id="saveSectionChanges" type="button" class="btn text-white "
                                style="background: linear-gradient(90deg, #59B5C6 0%, #153885 100%);
                            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">Save
                                changes</button>
                        </div>
                    </div>
                </div>
            </div><!-- End Vertically centered Modal-->

        </div>
    </div>


    <!-- add sec modal  -->
    <div class="card_ ">
        <div class="card-body_">

            <div class="modal fade" id="addVideo" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Lecture Video</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"
                                        for="pdf">{{ translate('PDF Specifications') }}</label>
                                    <div class="col-md-9">
                                        <div class="input-group" data-toggle="aizuploader" data-type="document"
                                            data-multiple="true">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                    {{ translate('Browse') }}
                                                </div>
                                            </div>
                                            <div class="form-control file-amount">{{ translate('Choose Files') }}</div>
                                            <input type="hidden" name="pdfs" class="selected-files">
                                            <small><b>Note:</b> All files should be at least 720p and less than 4.0
                                                GB.</small>
                                        </div>
                                        <div class="file-preview box sm"></div>
                                    </div>
                                </div>







                            </form>
                        </div>
                        <div class="modal-footer justify-content-between border-0">
                            <button type="button" class="btn btn-transparent" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn text-white "
                                style="background: linear-gradient(90deg, #59B5C6 0%, #153885 100%);
                            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">Upload
                                Video</button>
                        </div>
                    </div>
                </div>
            </div><!-- End Vertically centered Modal-->

        </div>
    </div>

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
                                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                                        data-bs-slide-to="0" class="active" aria-current="true"
                                                        aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{ static_asset('assets/img/quiz.png') }}"
                                                            class="d-block w-100" alt="slider">

                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ static_asset('assets/img/quiz.png') }}"
                                                            class="d-block w-100" alt="slider">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ static_asset('assets/img/quiz.png') }}"
                                                            class="d-block w-100" alt="slider">
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
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                            role="progressbar" style="width: 0%;" aria-valuemin="0"
                                                            aria-valuemax="100">0%</div>
                                                    </div>
                                                    <div class="step-form">
                                                        <div class="step-form-step active">
                                                            <div class="quiz_no">
                                                                <div class="mb-3">
                                                                    <label for="QuizNumber" class="form-label">Quiz
                                                                        Number</label>
                                                                    <input type="email" class="form-control"
                                                                        id="QuizNumber" placeholder="Enter Quiz Number">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="QuizName" class="form-label">Quiz
                                                                        Name</label>
                                                                    <textarea class="form-control" id="QuizName" rows="3" placeholder="Enter Quiz Label"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="step-form-step">
                                                            <div class="quiz_no mt-3">
                                                                <!-- step 2  -->
                                                                <div class="search mb-3">
                                                                    <i class="fa fa-search"></i>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Select Course">

                                                                </div>

                                                                <ul class="list-group list-group-light">
                                                                    <li class="list-group-item border-0">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="pf" id="pfs" checked>
                                                                            <label class="form-check-label"
                                                                                for="pfs">
                                                                                Programming Fundamentals
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item border-0">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="ds" id="dsa">
                                                                            <label class="form-check-label"
                                                                                for="dsa">
                                                                                Data Structures And Algorithms
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item border-0">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="da" id="dsaa">
                                                                            <label class="form-check-label"
                                                                                for="dsaa">
                                                                                Design Analysis
                                                                            </label>
                                                                        </div>
                                                                    </li>

                                                                    <li class="list-group-item border-0">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="cs" id="cn">
                                                                            <label class="form-check-label"
                                                                                for="cn">
                                                                                Computer Networks
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item border-0">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="ai" id="ai">
                                                                            <label class="form-check-label"
                                                                                for="ai">
                                                                                Artificial Intelligence
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item border-0">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="ai" id="ai">
                                                                            <label class="form-check-label"
                                                                                for="ai">
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
                                                                        <label for="inputText"
                                                                            class="col-sm-9 col-form-label"><strong>Enter
                                                                                Number Of Questions : </strong></label>
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
                                                                            <label for="ChoosePassing">Choose Passing
                                                                                Percentage</label>
                                                                            <input type="range" min="1"
                                                                                max="100" value="50"
                                                                                class="form-control-range range-slider"
                                                                                id="myRange">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <span id="demo"><small
                                                                                    class="text-primary">70%</small></span>
                                                                        </div>
                                                                    </div>
                                                                </form>

                                                                <div class="mb-3 row">
                                                                    <label for="Qs"
                                                                        class="col-sm-12 col-form-label">Choose Quiz
                                                                        Schedule</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="date" class="form-control"
                                                                            id="Qs">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="time" class="form-control"
                                                                            id="Qs">
                                                                    </div>
                                                                </div>

                                                                <h6>Choose Tags Composition</h6>

                                                                <form class="range-form">
                                                                    <div class="form-group row mb-4">
                                                                        <div class="col-md-9">
                                                                            <label for="ChoosePassing"><strong>Current
                                                                                    Affairs</strong></label>
                                                                            <input type="range" min="1"
                                                                                max="100" value="25"
                                                                                class="form-control-range range-slider"
                                                                                id="myRange">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <span id="demo"><small
                                                                                    class="text-primary">25%</small></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-4">
                                                                        <div class="col-md-9">
                                                                            <label for="LogicalReasoning"><strong>Logical
                                                                                    Reasoning</strong></label>
                                                                            <input type="range" min="1"
                                                                                max="100" value="25"
                                                                                class="form-control-range range-slider"
                                                                                id="myRange">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <span id="demo"><small
                                                                                    class="text-primary">25%</small></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-4">
                                                                        <div class="col-md-9">
                                                                            <label for="LogicalReasoning"><strong>Basic
                                                                                    Computers</strong></label>
                                                                            <input type="range" min="1"
                                                                                max="100" value="25"
                                                                                class="form-control-range range-slider"
                                                                                id="myRange">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <span id="demo"><small
                                                                                    class="text-primary">25%</small></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-4">
                                                                        <div class="col-md-9">
                                                                            <label for="LogicalReasoning"><strong>Basic
                                                                                    Science</strong></label>
                                                                            <input type="range" min="1"
                                                                                max="100" value="25"
                                                                                class="form-control-range range-slider"
                                                                                id="myRange">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <span id="demo"><small
                                                                                    class="text-primary">25%</small></span>
                                                                        </div>
                                                                    </div>
                                                                </form>


                                                                <div class="rules_quiz">
                                                                    <h6>Right Rules </h6>
                                                                    <ul>
                                                                        <li>You must use a functioning webcam and microphone
                                                                        </li>
                                                                        <li>No cell phones or other secondary devices in the
                                                                            room or test area</li>
                                                                        <li>Your desk/table must be clear or any materials
                                                                            except your test-taking device</li>
                                                                        <li>No one else can be in the room with you</li>
                                                                        <li>No talking</li>
                                                                        <li>The testing room must be well-lit and you must
                                                                            be clearly visible</li>
                                                                        <li>No dual screens/monitors</li>
                                                                        <li>Do not leave the camera</li>
                                                                        <li>No use of additional applications or internet
                                                                        </li>
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
                                                                    <a class="ediT_bt me-3" data-bs-toggle="collapse"
                                                                        href="#editTag" role="button"
                                                                        aria-expanded="false" aria-controls="editTag">
                                                                        <svg width="18" height="14"
                                                                            viewBox="0 0 18 14" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M17.0577 3.85327L13.1902 0.888818C13.0622 0.789764 12.91 0.711132 12.7421 0.657467C12.5743 0.603803 12.3943 0.576172 12.2125 0.576172C12.0306 0.576172 11.8506 0.603803 11.6828 0.657467C11.5149 0.711132 11.3627 0.789764 11.2347 0.888818L0.851972 8.84708C0.722964 8.94521 0.620604 9.06196 0.550805 9.19059C0.481006 9.31921 0.445151 9.45717 0.445313 9.59648V12.5609C0.445313 12.8424 0.591166 13.1122 0.850785 13.3112C1.11041 13.5102 1.46253 13.622 1.82968 13.622H5.69727C5.87902 13.6222 6.059 13.5947 6.22681 13.5412C6.39463 13.4877 6.54695 13.4092 6.67498 13.3103L17.0577 5.35208C17.3146 5.15231 17.4585 4.88312 17.4585 4.60267C17.4585 4.32222 17.3146 4.05304 17.0577 3.85327ZM5.69727 12.5609H1.82968V9.59648L9.44372 3.76042L13.3113 6.72487L5.69727 12.5609ZM14.289 5.97547L10.4214 3.01102L12.2125 1.63822L16.08 4.60267L14.289 5.97547Z"
                                                                                fill="#3D70F5" />
                                                                        </svg>
                                                                        Edit Tag
                                                                    </a>
                                                                    <a class="add_qs" data-bs-toggle="collapse"
                                                                        href="#addNew" role="button"
                                                                        aria-expanded="false" aria-controls="addNew">+ Add
                                                                        Questions</a>


                                                                    <button id="add-question"></button>
                                                                </div>
                                                            </div>


                                                            <div class="collapse" id="editTag">
                                                                <div class="card card-body">
                                                                    <div class="quiz_no">
                                                                        <div class="mb-3">
                                                                            <label for="QuizNumber"
                                                                                class="form-label">Name</label>
                                                                            <input type="text" class="form-control"
                                                                                id="name" placeholder="Enter Tag ">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <a href="#"
                                                                                class="add_qs w-100">Proceed</a>
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
                                                                                <a class="add_qs"
                                                                                    href="#">Proceed</a>

                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <div class="row">
                                                                                <div class="col-lg-8">
                                                                                    <label for="QuizNumber"
                                                                                        class="form-label">Type your
                                                                                        question here</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="name"
                                                                                        placeholder="Enter Tag ">

                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="Option1"
                                                                                            id="Option1">
                                                                                        <label class="form-check-label"
                                                                                            for="Option1">
                                                                                            Option 1
                                                                                        </label>
                                                                                    </div>

                                                                                    <hr>
                                                                                    <a href="#">+ Add Option</a>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <ul class="list-inline">
                                                                                        <li class="list-inline-item">
                                                                                            <svg width="50"
                                                                                                height="50"
                                                                                                viewBox="0 0 16 16"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <g
                                                                                                    filter="url(#filter0_d_584_92)">
                                                                                                    <circle cx="8"
                                                                                                        cy="7"
                                                                                                        r="7"
                                                                                                        fill="#59B5C6" />
                                                                                                </g>
                                                                                                <path
                                                                                                    d="M10.1693 4.83073V9.16927H5.83073V4.83073H10.1693ZM10.1693 4.21094H5.83073C5.48984 4.21094 5.21094 4.48984 5.21094 4.83073V9.16927C5.21094 9.51016 5.48984 9.78906 5.83073 9.78906H10.1693C10.5102 9.78906 10.7891 9.51016 10.7891 9.16927V4.83073C10.7891 4.48984 10.5102 4.21094 10.1693 4.21094ZM8.66318 6.95661L7.73349 8.15591L7.07031 7.35328L6.14063 8.54948H9.85938L8.66318 6.95661Z"
                                                                                                    fill="white" />
                                                                                                <defs>
                                                                                                    <filter
                                                                                                        id="filter0_d_584_92"
                                                                                                        x="0.125" y="0"
                                                                                                        width="15.75"
                                                                                                        height="15.75"
                                                                                                        filterUnits="userSpaceOnUse"
                                                                                                        color-interpolation-filters="sRGB">
                                                                                                        <feFlood
                                                                                                            flood-opacity="0"
                                                                                                            result="BackgroundImageFix" />
                                                                                                        <feColorMatrix
                                                                                                            in="SourceAlpha"
                                                                                                            type="matrix"
                                                                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                                                            result="hardAlpha" />
                                                                                                        <feOffset
                                                                                                            dy="0.875" />
                                                                                                        <feGaussianBlur
                                                                                                            stdDeviation="0.4375" />
                                                                                                        <feComposite
                                                                                                            in2="hardAlpha"
                                                                                                            operator="out" />
                                                                                                        <feColorMatrix
                                                                                                            type="matrix"
                                                                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                                                                        <feBlend
                                                                                                            mode="normal"
                                                                                                            in2="BackgroundImageFix"
                                                                                                            result="effect1_dropShadow_584_92" />
                                                                                                        <feBlend
                                                                                                            mode="normal"
                                                                                                            in="SourceGraphic"
                                                                                                            in2="effect1_dropShadow_584_92"
                                                                                                            result="shape" />
                                                                                                    </filter>
                                                                                                </defs>
                                                                                            </svg>

                                                                                        </li>
                                                                                        <li class="list-inline-item">
                                                                                            <svg width="50"
                                                                                                height="50"
                                                                                                viewBox="0 0 27 26"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <g
                                                                                                    filter="url(#filter0_d_584_97)">
                                                                                                    <circle cx="13.5"
                                                                                                        cy="11.5"
                                                                                                        r="11.5"
                                                                                                        fill="url(#paint0_linear_584_97)" />
                                                                                                </g>
                                                                                                <path
                                                                                                    d="M10.9543 16.0176C10.6743 16.0176 10.4347 15.9194 10.2355 15.723C10.0359 15.5262 9.93612 15.2898 9.93612 15.0137V8.48789C9.79187 8.48789 9.67087 8.43986 9.57312 8.34382C9.47571 8.24744 9.427 8.12813 9.427 7.9859C9.427 7.84367 9.47571 7.72437 9.57312 7.62799C9.67087 7.53194 9.79187 7.48392 9.93612 7.48392H11.9726C11.9726 7.34169 12.0214 7.22238 12.1192 7.126C12.2166 7.02996 12.3374 6.98193 12.4817 6.98193H14.5181C14.6624 6.98193 14.7834 7.02996 14.8811 7.126C14.9786 7.22238 15.0273 7.34169 15.0273 7.48392H17.0637C17.208 7.48392 17.3288 7.53194 17.4262 7.62799C17.524 7.72437 17.5728 7.84367 17.5728 7.9859C17.5728 8.12813 17.524 8.24744 17.4262 8.34382C17.3288 8.43986 17.208 8.48789 17.0637 8.48789V15.0137C17.0637 15.2898 16.9641 15.5262 16.7649 15.723C16.5653 15.9194 16.3255 16.0176 16.0455 16.0176H10.9543ZM10.9543 8.48789V15.0137H16.0455V8.48789H10.9543ZM11.9726 13.5077C11.9726 13.65 12.0214 13.7691 12.1192 13.8651C12.2166 13.9615 12.3374 14.0097 12.4817 14.0097C12.6259 14.0097 12.7469 13.9615 12.8447 13.8651C12.9421 13.7691 12.9908 13.65 12.9908 13.5077V9.99384C12.9908 9.85161 12.9421 9.7323 12.8447 9.63592C12.7469 9.53988 12.6259 9.49185 12.4817 9.49185C12.3374 9.49185 12.2166 9.53988 12.1192 9.63592C12.0214 9.7323 11.9726 9.85161 11.9726 9.99384V13.5077ZM14.009 13.5077C14.009 13.65 14.0579 13.7691 14.1557 13.8651C14.2531 13.9615 14.3739 14.0097 14.5181 14.0097C14.6624 14.0097 14.7834 13.9615 14.8811 13.8651C14.9786 13.7691 15.0273 13.65 15.0273 13.5077V9.99384C15.0273 9.85161 14.9786 9.7323 14.8811 9.63592C14.7834 9.53988 14.6624 9.49185 14.5181 9.49185C14.3739 9.49185 14.2531 9.53988 14.1557 9.63592C14.0579 9.7323 14.009 9.85161 14.009 9.99384V13.5077Z"
                                                                                                    fill="white" />
                                                                                                <defs>
                                                                                                    <filter
                                                                                                        id="filter0_d_584_97"
                                                                                                        x="0.75" y="0"
                                                                                                        width="25.5"
                                                                                                        height="25.5"
                                                                                                        filterUnits="userSpaceOnUse"
                                                                                                        color-interpolation-filters="sRGB">
                                                                                                        <feFlood
                                                                                                            flood-opacity="0"
                                                                                                            result="BackgroundImageFix" />
                                                                                                        <feColorMatrix
                                                                                                            in="SourceAlpha"
                                                                                                            type="matrix"
                                                                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                                                            result="hardAlpha" />
                                                                                                        <feOffset
                                                                                                            dy="1.25" />
                                                                                                        <feGaussianBlur
                                                                                                            stdDeviation="0.625" />
                                                                                                        <feComposite
                                                                                                            in2="hardAlpha"
                                                                                                            operator="out" />
                                                                                                        <feColorMatrix
                                                                                                            type="matrix"
                                                                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0" />
                                                                                                        <feBlend
                                                                                                            mode="normal"
                                                                                                            in2="BackgroundImageFix"
                                                                                                            result="effect1_dropShadow_584_97" />
                                                                                                        <feBlend
                                                                                                            mode="normal"
                                                                                                            in="SourceGraphic"
                                                                                                            in2="effect1_dropShadow_584_97"
                                                                                                            result="shape" />
                                                                                                    </filter>
                                                                                                    <linearGradient
                                                                                                        id="paint0_linear_584_97"
                                                                                                        x1="13.5"
                                                                                                        y1="0"
                                                                                                        x2="13.5"
                                                                                                        y2="23"
                                                                                                        gradientUnits="userSpaceOnUse">
                                                                                                        <stop
                                                                                                            stop-color="#59B5C6" />
                                                                                                        <stop
                                                                                                            offset="1"
                                                                                                            stop-color="#0A2B7D" />
                                                                                                    </linearGradient>
                                                                                                </defs>
                                                                                            </svg>

                                                                                        </li>
                                                                                        <li class="list-inline-item">
                                                                                            <svg width="50"
                                                                                                height="50"
                                                                                                viewBox="0 0 16 16"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <g
                                                                                                    filter="url(#filter0_d_584_92)">
                                                                                                    <circle cx="8"
                                                                                                        cy="7"
                                                                                                        r="7"
                                                                                                        fill="#59B5C6" />
                                                                                                </g>
                                                                                                <path
                                                                                                    d="M10.1693 4.83073V9.16927H5.83073V4.83073H10.1693ZM10.1693 4.21094H5.83073C5.48984 4.21094 5.21094 4.48984 5.21094 4.83073V9.16927C5.21094 9.51016 5.48984 9.78906 5.83073 9.78906H10.1693C10.5102 9.78906 10.7891 9.51016 10.7891 9.16927V4.83073C10.7891 4.48984 10.5102 4.21094 10.1693 4.21094ZM8.66318 6.95661L7.73349 8.15591L7.07031 7.35328L6.14063 8.54948H9.85938L8.66318 6.95661Z"
                                                                                                    fill="white" />
                                                                                                <defs>
                                                                                                    <filter
                                                                                                        id="filter0_d_584_92"
                                                                                                        x="0.125" y="0"
                                                                                                        width="15.75"
                                                                                                        height="15.75"
                                                                                                        filterUnits="userSpaceOnUse"
                                                                                                        color-interpolation-filters="sRGB">
                                                                                                        <feFlood
                                                                                                            flood-opacity="0"
                                                                                                            result="BackgroundImageFix" />
                                                                                                        <feColorMatrix
                                                                                                            in="SourceAlpha"
                                                                                                            type="matrix"
                                                                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                                                            result="hardAlpha" />
                                                                                                        <feOffset
                                                                                                            dy="0.875" />
                                                                                                        <feGaussianBlur
                                                                                                            stdDeviation="0.4375" />
                                                                                                        <feComposite
                                                                                                            in2="hardAlpha"
                                                                                                            operator="out" />
                                                                                                        <feColorMatrix
                                                                                                            type="matrix"
                                                                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                                                                        <feBlend
                                                                                                            mode="normal"
                                                                                                            in2="BackgroundImageFix"
                                                                                                            result="effect1_dropShadow_584_92" />
                                                                                                        <feBlend
                                                                                                            mode="normal"
                                                                                                            in="SourceGraphic"
                                                                                                            in2="effect1_dropShadow_584_92"
                                                                                                            result="shape" />
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
                                                                <h6>Total Number of Questions : <span class="text-danger">
                                                                        50</span></h6>
                                                                <p class="mb-1">Course : Programming Fundamentals</p>
                                                                <p class="mb-1">Subject : Articulate Structure of C++ and
                                                                    Java</p>

                                                                <div class="d-flex justify-content-between">
                                                                    <div>
                                                                        <h5>Right Questions</h5>

                                                                        <ul class="list-group">

                                                                            <li class="list-group-item btn"
                                                                                style="text-align: left;"
                                                                                onclick="appenddToForm('radio')">
                                                                                {{ translate('Add Question') }}</li>

                                                                        </ul>

                                                                    </div>



                                                                </div>





                                                            </div>
                                                            <!--  -->
                                                        </div>
                                                        <div class="step-form-step">
                                                            <!-- step4 -->
                                                            <div class="succss_quix p-4 text-center">
                                                                <h5>Quiz Created Successfully</h5>
                                                                <p>New Quiz within Course: Programming Fundamentals with
                                                                    <br> <b> subject Articulate Structure of C++ and
                                                                        Java</b> Added <br> Succesfully in your schedule.
                                                                    <b>Proceed to prepare a quiz.</b>
                                                                </p>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <button class="btn btn-primary next-step"> Proceed</button>
                                                    <button class="btn bg-transparent prev-step w-100">
                                                        <svg width="6" height="6" viewBox="0 0 6 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5.37679 2.50724V3.14495H1.55057L3.30425 4.89863L2.85148 5.3514L0.326172 2.82609L2.85148 0.300781L3.30425 0.753552L1.55057 2.50724H5.37679Z"
                                                                fill="#6B6B6B" />
                                                        </svg>
                                                        Back</button>
                                                    <button class="btn btn-success confirm-step"
                                                        style="display:none;">Proceed</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <div class="thank-you-message" style="display:none;">
                                                        <div class="comp_quiz">
                                                            <img src="../assets/img/quizz.png" alt="quiz"
                                                                class="img-fluid">
                                                            <h2>Please Wait While We <br> Analyse Your Questions</h2>
                                                            <small>Do not referesh or Close this Screen</small>
                                                        </div>

                                                        <div class="report_gen mt-5">
                                                            <h4>Report Generated</h4>
                                                            <!-- Doughnut Chart -->
                                                            <canvas id="doughnutChart"
                                                                style="max-height: 400px; margin-bottom:50px;"></canvas>
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
                                                                                data: [50, 80],
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


                                                            <a class="add_qs  w-75 rounded-1 p-3 d-block m-auto"
                                                                data-bs-toggle="collapse" href="#">+ Preview
                                                                Questions</a>


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
@section('modal')
    @include('backend.product.products.quizzes');
@endsection
@endsection

<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>


@section('script')
<script type="text/javascript">
    var i = 0;

    function add_customer_choice_options(em) {
        var j = $(em).closest('.form-group.row').find('.option').val();
        var str = '<div class="form-group row">' +
            '<div class="col-sm-6 col-sm-offset-4">' +
            '<input class="form-control" type="text" name="options_' + j + '[]" value="" required>' +
            '</div>' +
            '<div class="col-sm-2"> <span class="btn btn-icon btn-circle" onclick="delete_choice_clearfix(this)"><i class="las la-times"></i></span>' +
            '</div>' +
            '</div>'
        $(em).parent().find('.customer_choice_options_types_wrap_child').append(str);
    }

    function delete_choice_clearfix(em) {
        $(em).parent().parent().remove();
    }

    function appenddToForm(type) {
        //$('#form').removeClass('seller_form_border');
        if (type == 'text') {
            var str = '<div class="form-group row" style="background:rgba(0,0,0,0.1);padding:10px 0;">' +
                '<input type="hidden" name="type[]" value="text">' +
                '<div class="col-lg-3">' +
                '<label class="control-label">Text</label>' +
                '</div>' +
                '<div class="col-lg-7">' +
                '<input class="form-control" type="text" name="label[]" placeholder="Label">' +
                '</div>' +
                '<div class="col-lg-2">' +
                '<span class="btn btn-icon btn-circle" onclick="delete_choice_clearfix(this)"><i class="las la-times"></i></span>' +
                '</div>' +
                '</div>';
            $('#form').append(str);
        } else if (type == 'radio') {
            i++;
            var str = '<div class="form-group row  border   p-3" >' +
                '<input type="hidden" name="type[]" value="radio"><input type="hidden" name="option[]" class="option" value="' +
                i + '">' +
                '<div class="col-lg-12">' +
                '<label class="control-label">Question</label>' +
                '</div>'

                +
                '<div class="col-lg-10">' +
                '<input class="form-control" type="text" name="label[]" placeholder="Question Label" style="margin-bottom:10px">' +
                '<div class="customer_choice_options_types_wrap_child">'

                +
                '</div>' +
                '<button class="btn btn-success pull-right" type="button" onclick="add_customer_choice_options(this)"><i class="glyphicon glyphicon-plus"></i> Add option</button>' +
                '</div>' +
                '<div class="col-lg-2">' +
                '<span class="btn btn-icon btn-circle" onclick="delete_choice_clearfix(this)"><i class="las la-times"></i></span>' +
                '</div>' +
                '</div>';
            $('#form').append(str);
        }

    }
</script>







<script type="text/javascript">
    class SectionManager {
        constructor(accordionSelector, courses) {
            this.accordion = $(accordionSelector);
            this.sectionCount = 1;
            this.product_id = courses;
            this.initialize();
        }

        async initialize() {
            await this.loadSections();
            this.attachEventListeners();
            this.initializeSortable();
            $('.add_secbt').on('click', () => this.openAddSectionModal());
        }

        initializeSortable() {

            new Sortable(document.getElementById('accordionExample'), {
                handle: '.accordion-header',
                onEnd: () => {
                    this.updateSectionOrder();
                }
            });
        }
        async updateSectionOrder() {

            let sectionOrder = [];
            document.querySelectorAll('.accordion-item').forEach((section, index) => {
                sectionOrder.push({
                    id: section.getAttribute('data-id'),
                    order: index + 1
                });
            });


            try {
                const response = await fetch('/sections/reorder', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        order: sectionOrder
                    })
                });
                const data = await response.json();

                if (data.success) {
                    AIZ.plugins.notify('success', 'Sections reordered successfully.');
                } else {
                    AIZ.plugins.notify('danger', 'Failed to reorder sections.');
                }
            } catch (error) {
                console.error('Error updating section order:', error);
                AIZ.plugins.notify('danger', 'An error occurred while reordering sections.');
            }
        }


        async loadSections() {
            try {
                const response = await $.ajax({
                    url: `/sections`,
                    type: 'GET',
                    data: {
                        product_id: this.product_id
                    }
                });

                if (response.success) {
                    AIZ.plugins.notify('success', 'Sections fetched successfully.');


                    response.sections.forEach(sectionData => {

                        this.sectionCount++;

                        const section = new Section(sectionData.id, sectionData.title, sectionData
                            .section_order, this.accordion);
                        section.render();


                        sectionData.lectures.forEach(lectureData => {
                            const lecture = new Lecture(sectionData.id, lectureData.id, lectureData
                                .title, lectureData.video_url, lectureData.content, lectureData
                                .pdf, lectureData.description);
                            lecture.render(`#section-${sectionData.id} .lectures`);
                        });
                    });
                } else {
                    AIZ.plugins.notify('danger', 'Failed to load sections.');
                }
            } catch (error) {

                console.error("Error loading sections:", error);
                AIZ.plugins.notify('danger', `An error occurred: ${error.statusText || 'Unknown error'}`);
            }
        }


        attachEventListeners() {


        }

        async openAddSectionModal() {

            $('#section-order').val(this.sectionCount);

            const addSectionModal = new bootstrap.Modal(document.getElementById('editSectionModal'));
            addSectionModal.show();

            $('#saveSectionChanges').off('click').on('click', async () => {
                const newName = $('#sectionNameInput').val();
                const order = $('#section-order').val();
                if (!newName.trim()) {
                    AIZ.plugins.notify('danger', '{{ translate('Please enter a section title.') }}');
                    return;
                }

                try {
                    const response = await this.createSection(newName, order);
                    if (response.success) {
                        this.sectionCount += 1;
                        const section = new Section(response.section.id, response.section.title, order,
                            this.accordion);
                        section.render();
                        $('#sectionNameInput').val('');
                        $('#section-order').val('');
                        addSectionModal.hide();
                        AIZ.plugins.notify('success', '{{ translate('Section added successfully') }}');
                    }
                } catch (error) {
                    AIZ.plugins.notify('danger', `An error occurred: ${error.message}`);
                }
            });
        }

        async createSection(name, order) {
            return $.ajax({
                url: '/sections',
                type: 'POST',
                data: {
                    title: name,
                    section_order: order,
                    product_id: this.product_id,
                    _token: '{{ csrf_token() }}'
                }
            });
        }
    }


    class Section {
        constructor(id, name, order, container) {
            this.id = id;
            this.name = name;
            this.order = order;
            this.container = container;
        }

        render() {
            const sectionElement = $(`
            <div class="accordion-item" id="section-${this.id}" data-id="${this.id}">
                        <h2 class="accordion-header" id="heading-${this.id}">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-${this.id}" aria-expanded="true" aria-controls="collapse-${this.id}">
                    <div class="d-flex justify-content-between">
                        <div>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.11328 8.33984H13.4866" stroke="#1D2026" stroke-width="1.01544" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.11328 4.43555H13.4866" stroke="#1D2026" stroke-width="1.01544" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.11328 12.2461H13.4866" stroke="#1D2026" stroke-width="1.01544" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <b>Section ${this.order}: </b> <span class="section-name">${this.name}</span>
                        </div>
                        <div class="text-end d-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <span class="add-lecture">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.76172 10.3398H16.65" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.2051 3.89648V16.7847" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span class="edit-section">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.10667 16.7842H3.59169C3.43632 16.7842 3.28731 16.7224 3.17744 16.6126C3.06758 16.5027 3.00586 16.3537 3.00586 16.1983V12.926C3.00586 12.8491 3.02101 12.7729 3.05045 12.7018C3.07989 12.6307 3.12305 12.5662 3.17745 12.5118L11.9649 3.72432C12.0748 3.61446 12.2238 3.55273 12.3791 3.55273C12.5345 3.55273 12.6835 3.61446 12.7934 3.72432L16.0657 6.99664C16.1756 7.1065 16.2373 7.25551 16.2373 7.41088C16.2373 7.56625 16.1756 7.71526 16.0657 7.82513L7.10667 16.7842Z" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.0352 5.6543L14.136 9.7551" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15.892 16.7842H7.10455L3.04102 12.7207" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span class="delete-section">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.1382 5.06836L3.25 5.06836" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.93555 8.58203V13.2687" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.4512 8.58203V13.2687" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M14.9668 5.06836V16.1991C14.9668 16.3545 14.9051 16.5035 14.7952 16.6134C14.6854 16.7232 14.5363 16.7849 14.381 16.7849H5.0077C4.85233 16.7849 4.70332 16.7232 4.59346 16.6134C4.4836 16.5035 4.42188 16.3545 4.42188 16.1991V5.06836" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12.622 5.06793V3.89627C12.622 3.58552 12.4985 3.28751 12.2788 3.06778C12.0591 2.84805 11.7611 2.72461 11.4503 2.72461H7.93533C7.62459 2.72461 7.32657 2.84805 7.10684 3.06778C6.88711 3.28751 6.76367 3.58552 6.76367 3.89627V5.06793" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </button>
            </h2>
                <div id="collapse-${this.id}" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <div class="lectures"></div>
                    </div>
                </div>
            </div>
        `);



            this.container.append(sectionElement);

            sectionElement.find('.add-lecture').on('click', () => this.addLecture());
            sectionElement.find('.edit-section').on('click', () => this.openEditModal(sectionElement));
            sectionElement.find('.delete-section').on('click', () => this.deleteSection(sectionElement));
        }

        async openEditModal(sectionElement) {
            $('#sectionNameInput').val(this.name);
            const editSectionModal = new bootstrap.Modal(document.getElementById('editSectionModal'));
            editSectionModal.show();

            $('#saveSectionChanges').off('click').on('click', async () => {
                const newName = $('#sectionNameInput').val();
                const order = $('#section-order').val();
                if (newName && order) {

                    try {
                        await this.updateSection(newName, order);
                        this.name = newName;
                        sectionElement.find('.section-name').text(newName);
                        AIZ.plugins.notify('success',
                            '{{ translate('Section Update successfully.') }}');
                        editSectionModal.hide();
                    } catch (error) {
                        AIZ.plugins.notify('danger', `An error occurred: ${error.message}`);
                    }
                }
            });
        }

        async updateSection(newName, order) {
            return $.ajax({
                url: `/sections/${this.id}`,
                type: 'PUT',
                data: {
                    name: newName,
                    order: order,
                    _token: '{{ csrf_token() }}'
                }
            });
        }

        async deleteSection(sectionElement) {
            if (!confirm('Are you sure you want to delete this section?')) return;
            try {
                const response = await $.ajax({
                    url: `/sections/${this.id}`,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    }
                });
                if (response.success) {
                    sectionElement.remove();
                    AIZ.plugins.notify('success', '{{ translate('Section deleted successfully.') }}');

                }
            } catch (error) {
                AIZ.plugins.notify('danger', `An error occurred: ${error.message}`);

            }
        }

        async addLecture() {
            const lectureName = prompt("Enter a name for the lecture:");
            const lectureOrder = $('.lectures .lec_sec').length + 1; // Determine lecture order
            if (!lectureName) {
                alert("Lecture name cannot be empty.");
                return;
            }

            try {
                const response = await this.createLecture(lectureName, lectureOrder);
                if (response.success) {
                    // Use the returned lecture ID to create a new Lecture instance
                    const lecture = new Lecture(this.id, response.lecture.id, response.lecture.title);
                    lecture.render(`#section-${this.id} .lectures`);
                    AIZ.plugins.notify('success', 'Lecture added successfully');
                } else {
                    AIZ.plugins.notify('danger', 'Failed to add lecture.');
                }
            } catch (error) {
                let errorMessage = 'An error occurred';
                if (error.responseJSON && error.responseJSON.message) {
                    errorMessage = error.responseJSON.message;
                } else if (error.responseText) {
                    errorMessage = error.responseText;
                } else if (error.message) {
                    errorMessage = error.message;
                }

                console.error("Error adding lecture:", errorMessage);
                AIZ.plugins.notify('danger', errorMessage);
            }
        }

        async createLecture(name, order) {

            return $.ajax({
                url: '/lectures',
                type: 'POST',
                data: {
                    title: name,
                    lecture_order: order,
                    section_id: this.id, // Use current section's ID
                    _token: '{{ csrf_token() }}'
                }
            });
        }
    }

    class Lecture {
        constructor(sectionId, id, name, video = "", content = "", attachFile = "", description = "") {
            this.sectionId = sectionId;
            this.id = id; // Unique ID for the lecture
            this.name = name;
            this.video = video;
            this.content = content;
            this.attachFile = attachFile;
            this.description = description;
        }

        render(lecturesContainerSelector) {
            const lectureElement = $(`





<div class="lec_sec" id="lecture-${this.id}">
<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.60156 8.45703H12.9748" stroke="#8C94A3" stroke-width="1.01544" stroke-linecap="round" stroke-linejoin="round" />
    <path d="M3.60156 4.55273H12.9748" stroke="#8C94A3" stroke-width="1.01544" stroke-linecap="round" stroke-linejoin="round" />
    <path d="M3.60156 12.3633H12.9748" stroke="#8C94A3" stroke-width="1.01544" stroke-linecap="round" stroke-linejoin="round" />
</svg>

<span>${this.name}</span>

<div class="text-end d-block">
    <ul class="list-inline mb-0">
        <li class="list-inline-item">
            <div class="dropdown">
                <button class="btn  dropdown-toggle" style="background-color: #EFF4FF; color:#2563EB;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    contents
                </button>
                <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="#" data-type="Quiz">Quiz</a></li>
                        <li><a class="dropdown-item" href="#" data-type="video">Video</a></li>
                        <li><a class="dropdown-item" href="#" data-type="attach_file">Attach File</a></li>
                        <li><a class="dropdown-item" href="#" data-type="description">Description</a></li>
                        <li><a class="dropdown-item" href="#" data-type="lecture_notes">Lecture Notes</a></li>
                </ul>
            </div>
        </li>
        <li class="list-inline-item" >
            <span class="edit-lecture">
                <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.10667 16.7842H3.59169C3.43632 16.7842 3.28731 16.7224 3.17744 16.6126C3.06758 16.5027 3.00586 16.3537 3.00586 16.1983V12.926C3.00586 12.8491 3.02101 12.7729 3.05045 12.7018C3.07989 12.6307 3.12305 12.5662 3.17745 12.5118L11.9649 3.72432C12.0748 3.61446 12.2238 3.55273 12.3791 3.55273C12.5345 3.55273 12.6835 3.61446 12.7934 3.72432L16.0657 6.99664C16.1756 7.1065 16.2373 7.25551 16.2373 7.41088C16.2373 7.56625 16.1756 7.71526 16.0657 7.82513L7.10667 16.7842Z" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.0352 5.6543L14.136 9.7551" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15.892 16.7842H7.10455L3.04102 12.7207" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </span>
        </li>
        <li class="list-inline-item" >
            <span class="delete-lecture">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.1382 5.06836L3.25 5.06836" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M7.93555 8.58203V13.2687" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M11.4512 8.58203V13.2687" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M14.9668 5.06836V16.1991C14.9668 16.3545 14.9051 16.5035 14.7952 16.6134C14.6854 16.7232 14.5363 16.7849 14.381 16.7849H5.0077C4.85233 16.7849 4.70332 16.7232 4.59346 16.6134C4.4836 16.5035 4.42188 16.3545 4.42188 16.1991V5.06836" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12.622 5.06793V3.89627C12.622 3.58552 12.4985 3.28751 12.2788 3.06778C12.0591 2.84805 11.7611 2.72461 11.4503 2.72461H7.93533C7.62459 2.72461 7.32657 2.84805 7.10684 3.06778C6.88711 3.28751 6.76367 3.58552 6.76367 3.89627V5.06793" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                </svg>


            </span>
        </li>

    </ul>
</div>


</div>










        `);

            $(lecturesContainerSelector).append(lectureElement);

            lectureElement.find('.edit-lecture').on('click', () => this.renderEditForm());
            lectureElement.find('.delete-lecture').on('click', () => this.deleteLecture(lectureElement));



            // Event listeners for dropdown items
            lectureElement.find('.dropdown-item').on('click', (e) => this.openEditModal($(e.currentTarget).data(
                "type")));




        }




        openEditModal(contentType) {
            let currentValue = "";
            let placeholderText = "";

            // تحديد المحتوى بناءً على نوعه
            switch (contentType) {
                case "video":
                    currentValue = this.video;
                    placeholderText = "Enter video URL";
                    break;
                case "attach_file":
                    currentValue = this.attachFile;
                    placeholderText = "Upload file";
                    break;
                case "description":
                    currentValue = this.description;
                    placeholderText = "Enter description";
                    break;
                case "lecture_notes":
                    currentValue = this.content;
                    placeholderText = "Enter lecture notes";
                    break;
            }

            // عرض نافذة تعديل المحتوى
            const modalHtml = `
            <div class="modal fade" id="editContentModal" tabindex="-1" aria-labelledby="editContentModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editContentModalLabel">Edit ${contentType}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ${contentType === 'attach_file' ? `<input type="file" id="editContentInput" />` :
                                `<input type="text" class="form-control" id="editContentInput" placeholder="${placeholderText}" value="${currentValue}">`}
                      
                      
                       <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signinSrEmail">{{ translate('Thumbnail Image') }}</label>
                                    <div class="col-md-9">
                                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse') }}</div>
                                            </div>
                                            <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                            <input type="hidden" name="thumbnail_img2" value="152" class="selected-files">
                                        </div>
                                        <div class="file-preview box sm">
                                        </div>
                                        <small class="text-muted">{{ translate('This image is visible in all product box. Minimum dimensions required: 195px width X 195px height. Keep some blank space around main object of your image as we had to crop some edge in different devices to make it responsive.') }}</small>
                                    </div>
                                </div>
                      
                                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="saveContentChanges">Save changes</button>
                        </div>
                    </div>
                </div>

                
            </div>


 

        `;


            document.body.insertAdjacentHTML('beforeend', modalHtml);

            // Show the Modal
            const modalElement = new bootstrap.Modal(document.getElementById('editContentModal'));
            modalElement.show();


            AIZ.uploader.previewGenerate();

            //  $("body").append(modalHtml);
            //const editModal = new bootstrap.Modal(document.getElementById("editContentModal"));
            //  editModal.show();

            // حفظ التعديلات
            $("#saveContentChanges").on("click", async () => {
                const newValue = contentType === 'attach_file' ? $("#editContentInput")[0].files[0] : $(
                    "#editContentInput").val();
                await this.updateContent(contentType, newValue);
                editModal.hide();
                $("#editContentModal").remove();
            });
        }


        async updateContent(contentType, newValue) {
            const formData = new FormData();
            formData.append("_token", "{{ csrf_token() }}");
            formData.append("title", this.name);
            if (contentType === 'attach_file') {
                formData.append("attach_file", newValue);
            } else {
                formData.append(contentType, newValue);
            }

            try {
                const response = await $.ajax({
                    url: `/lectures/${this.id}`,
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        "X-HTTP-Method-Override": "PUT"
                    }
                });

                if (response.success) {
                    AIZ.plugins.notify("success", `${contentType} updated successfully`);
                    this[contentType] = newValue;
                } else {
                    AIZ.plugins.notify("danger", `Failed to update ${contentType}.`);
                }
            } catch (error) {
                console.error(`Error updating ${contentType}:`, error);
                let errorMessage = "An error occurred while updating the lecture.";
                if (error.responseJSON && error.responseJSON.message) {
                    errorMessage = error.responseJSON.message;
                } else if (error.responseText) {
                    errorMessage = error.responseText;
                } else if (error.message) {
                    errorMessage = error.message;
                }
                AIZ.plugins.notify("danger", errorMessage);
            }
        }



        renderEditForm() {
            const editFormHtml = `
        <div id="editLectureModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Lecture</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="lectureName">Title</label>
                        <input type="text" id="lectureName" class="form-control" value="${this.name}" />

                        <label for="lectureVideo">Video URL</label>
                        <input type="url" id="lectureVideo" class="form-control" value="${this.video}" />

                        <label for="lectureContent">Content</label>
                        <textarea id="lectureContent" class="form-control">${this.content}</textarea>

                        <label for="lectureFile">PDF Specifications</label>
                        <div class="input-group" data-toggle="aizuploader" data-type="document" data-multiple="true">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                            </div>
                            <div class="form-control file-amount">Choose Files</div>
                            <input type="hidden" name="attach_file" id="attach_file" class="selected-files" value="${this.attachFile}">
                            <small><b>Note:</b> All files should be at least 720p and less than 4.0 GB.</small>
                        </div>
                        <div class="file-preview box sm"></div>

                        <label for="lectureDescription">Description</label>
                        <textarea id="lectureDescription" class="form-control">${this.description}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary save-lecture">Save Changes</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    `;

            // Append the modal HTML to the body
            document.body.insertAdjacentHTML('beforeend', editFormHtml);

            // Show the modal using Bootstrap's JavaScript API
            const modalElement = new bootstrap.Modal(document.getElementById('editLectureModal'));
            modalElement.show();


            AIZ.uploader.previewGenerate();


            // Add event listener for save button
            document.querySelector("#editLectureModal .save-lecture").addEventListener("click", () => {
                const editForm = document.getElementById('editLectureModal'); // Reference the modal element
                this.saveEdit(editForm);
            });
        }


        async saveEdit(editForm) {
            const newLectureName = editForm.querySelector("#lectureName").value;
            const newVideo = editForm.querySelector("#lectureVideo").value;
            const newContent = editForm.querySelector("#lectureContent").value;
            const newDescription = editForm.querySelector("#lectureDescription").value;
            const newAttach_file = editForm.querySelector("#attach_file").value;


            const formData = new FormData();
            formData.append("title", newLectureName);
            formData.append("video_url", newVideo);
            formData.append("pdf", newAttach_file);
            formData.append("content", newContent);
            formData.append("description", newDescription);
            formData.append("section_id", this.sectionId);




            formData.append("_token", "{{ csrf_token() }}");


            try {


                const response = await $.ajax({
                    url: `/lectures/${this.id}`,
                    type: "POST", // استخدام POST مع تهيئة PUT في الهيدر
                    data: formData,
                    processData: false, // لمنع jQuery من معالجة البيانات
                    contentType: false, // لمنع jQuery من تعيين نوع المحتوى
                    headers: {
                        'X-HTTP-Method-Override': 'PUT' // التحايل على طريقة PUT في Laravel
                    }
                });

                if (response.success) {
                    // تحديث بيانات المحاضرة
                    this.name = newLectureName;
                    this.video = newVideo;
                    this.content = newContent;
                    this.description = newDescription;

                    // تحديث واجهة المستخدم بالاسم الجديد
                    $(`#lecture-${this.id} .lecture-name`).text(this.name);
                    AIZ.plugins.notify("success", "Lecture updated successfully");
                    $("#editLectureModal").modal("hide").remove();
                } else {
                    AIZ.plugins.notify("danger", "Failed to update lecture.");
                }
            } catch (error) {
                // عرض رسالة خطأ مخصصة
                let errorMessage = 'An error occurred while updating the lecture.';
                if (error.responseJSON && error.responseJSON.message) {
                    errorMessage = error.responseJSON.message;
                } else if (error.responseText) {
                    errorMessage = error.responseText;
                } else if (error.message) {
                    errorMessage = error.message;
                }

                console.error("Error updating lecture:", errorMessage);
                AIZ.plugins.notify("danger", errorMessage);
            }
        }


        async deleteLecture(lectureElement) {
            if (!confirm("Are you sure you want to delete this lecture?")) return;

            try {
                const response = await $.ajax({
                    url: `/lectures/${this.id}`,
                    type: "DELETE",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                });

                if (response.success) {
                    lectureElement.remove();
                    AIZ.plugins.notify("success", "Lecture deleted successfully");
                } else {
                    AIZ.plugins.notify("danger", "Failed to delete lecture.");
                }
            } catch (error) {
                console.error("Error deleting lecture:", error);
                AIZ.plugins.notify("danger", "An error occurred while deleting the lecture.");
            }
        }
    }


    $(document).ready(() => {

        var productId = '{!! $product->id !!}'

        const sectionManager = new SectionManager('#accordionExample', productId);





    });
</script>






{{-- 











<script type="text/javascript">
     
     function openEditSectionModal(sectionElement, sectionId) {
            // Set current section name in the input field
            const currentName = sectionElement.find('.section-name').text();
            $('#sectionNameInput').val(currentName);

            // Show modal
            const editSectionModal = new bootstrap.Modal(document.getElementById('editSectionModal'));
            editSectionModal.show();
            const sectionOrder = 0;
            // Save changes event
            $('#saveSectionChanges').off('click').on('click', function() {
                const newName = $('#sectionNameInput').val();
                if (newName) {


                    updateSection(sectionId, newName, sectionOrder);
                    sectionElement.find('.section-name').text(newName);
                    editSectionModal.hide();
                }
            });
        }


        function updateSection(sectionId, sectionName, sectionOrder) {


            // إرسال طلب AJAX لتحديث القسم
            $.ajax({
                url: `/sections/${sectionId}`, // URL يعتمد على `Route::resource`
                type: 'PUT',
                data: {
                    name: sectionName,
                    order: sectionOrder,
                    _token: '{{ csrf_token() }}' // تضمين CSRF token
                },
                success: function(response) {
                    if (response.success) {
                        // تحديث عرض القسم في الواجهة
                        $(`#section-${sectionId} .section-name`).text(sectionName);

                        // إخفاء النموذج
                        $('#editSectionModal').hide();

                        alert('تم تحديث القسم بنجاح.');
                    } else {
                        alert('حدث خطأ أثناء محاولة التحديث.');
                    }
                },
                error: function(xhr) {
                    alert('An error occurred: ' + (xhr.responseJSON ? xhr.responseJSON.message :
                        'خطأ غير معروف.'));
                }
            });
        }




        function openaddSectionModal() {




            // Show modal
            const editSectionModal = new bootstrap.Modal(document.getElementById('editSectionModal'));
            editSectionModal.show();

            // Save changes event
            $('#saveSectionChanges').off('click').on('click', function() {
                const newName = $('#sectionNameInput').val();
                if (newName) {




                    const title = newName;
                    const order = $('#section-order').val();
                    const productId = 1; // Assume course ID is available in the view

                    // Validate input (optional but recommended)
                    if (title.trim() === '') {
                        alert('Please enter a section title.');
                        return;
                    }

                    // Send AJAX request
                    $.ajax({
                        url: '/sections',
                        type: 'POST',
                        data: {
                            title: title,
                            section_order: order,
                            product_id: productId,
                            _token: '{{ csrf_token() }}' // Include CSRF token
                        },
                        success: function(response) {
                            if (response.success) {
                                // Append the new section to the list
                                $('#section-list-items').append(`<li>${response.section.title}</li>`);

                                // Clear input fields
                                $('#section-title').val('');
                                $('#section-order').val('');

                                editSectionModal.hide();

                                addSection(response.section.title, response.section.id)

                            }
                        },
                        error: function(xhr) {
                            // Handle any errors
                            alert('An error occurred: ' + xhr.responseJSON.message);
                        }
                    });



                }
            });
            return "";

        }

        function deleteSection(section, sectionId) {
            // تأكيد الحذف من المستخدم
            if (!confirm('هل أنت متأكد من أنك تريد حذف هذا القسم؟')) {
                return;
            }

            // إرسال طلب الحذف باستخدام AJAX
            $.ajax({
                url: `/sections/${sectionId}`, // URL لحذف القسم بناءً على معرفه
                type: 'DELETE', // تحديد نوع الطلب كـ DELETE
                data: {
                    _token: '{{ csrf_token() }}' // تضمين CSRF token مباشرة من Blade
                },
                success: function(response) {
                    if (response.success) {
                        // إزالة القسم من الواجهة بعد الحذف
                        section.remove();
                        alert('تم حذف القسم بنجاح.');
                    } else {
                        alert('حدث خطأ أثناء محاولة الحذف.');
                    }
                },
                error: function(xhr) {
                    // معالجة أي أخطاء
                    const errorMessage = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON
                        .message : 'حدث خطأ أثناء محاولة الحذف.';
                    alert(errorMessage);
                }
            });
        }

     $('.add_secbt').on('click', openaddSectionModal);

        var sectionCount = 0;

        function addSection(sectionName, sectionCount) {
            // إنشاء القسم الجديد باستخدام `sectionCount` ليكون معرفًا فريدًا
            const section = $(`
        <div class="accordion-item" id="section-${sectionCount}" data-section-count="${sectionCount}">
            <h2 class="accordion-header" id="heading-${sectionCount}">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-${sectionCount}" aria-expanded="true" aria-controls="collapse-${sectionCount}">
                    <div class="d-flex justify-content-between">
                        <div>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.11328 8.33984H13.4866" stroke="#1D2026" stroke-width="1.01544" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.11328 4.43555H13.4866" stroke="#1D2026" stroke-width="1.01544" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.11328 12.2461H13.4866" stroke="#1D2026" stroke-width="1.01544" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <b>Section ${sectionCount}: </b> <span class="section-name">${sectionName}</span>
                        </div>
                        <div class="text-end d-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <span class="add-lecture">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.76172 10.3398H16.65" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.2051 3.89648V16.7847" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span class="edit-section">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.10667 16.7842H3.59169C3.43632 16.7842 3.28731 16.7224 3.17744 16.6126C3.06758 16.5027 3.00586 16.3537 3.00586 16.1983V12.926C3.00586 12.8491 3.02101 12.7729 3.05045 12.7018C3.07989 12.6307 3.12305 12.5662 3.17745 12.5118L11.9649 3.72432C12.0748 3.61446 12.2238 3.55273 12.3791 3.55273C12.5345 3.55273 12.6835 3.61446 12.7934 3.72432L16.0657 6.99664C16.1756 7.1065 16.2373 7.25551 16.2373 7.41088C16.2373 7.56625 16.1756 7.71526 16.0657 7.82513L7.10667 16.7842Z" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.0352 5.6543L14.136 9.7551" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15.892 16.7842H7.10455L3.04102 12.7207" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span class="delete-section">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.1382 5.06836L3.25 5.06836" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.93555 8.58203V13.2687" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.4512 8.58203V13.2687" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M14.9668 5.06836V16.1991C14.9668 16.3545 14.9051 16.5035 14.7952 16.6134C14.6854 16.7232 14.5363 16.7849 14.381 16.7849H5.0077C4.85233 16.7849 4.70332 16.7232 4.59346 16.6134C4.4836 16.5035 4.42188 16.3545 4.42188 16.1991V5.06836" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12.622 5.06793V3.89627C12.622 3.58552 12.4985 3.28751 12.2788 3.06778C12.0591 2.84805 11.7611 2.72461 11.4503 2.72461H7.93533C7.62459 2.72461 7.32657 2.84805 7.10684 3.06778C6.88711 3.28751 6.76367 3.58552 6.76367 3.89627V5.06793" stroke="#8C94A3" stroke-width="1.17166" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </button>
            </h2>
            <div id="collapse-${sectionCount}" class="accordion-collapse collapse show" aria-labelledby="heading-${sectionCount}" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="lectures"></div>
                </div>
            </div>
        </div>
    `);

            $('#accordionExample').append(section);

            // Add lecture on clicking 'add-lecture'
            section.find('.add-lecture').on('click', function() {
                addLecture(section);
            });

            // Edit section on clicking 'edit-section'
            section.find('.edit-section').on('click', function() {
                alert(1);
                openEditSectionModal(section, sectionCount);
            });

            // Delete section on clicking 'delete-section'
            section.find('.delete-section').on('click', function() {
                deleteSection(section, sectionCount);
            });




        }

        function addLecture(section) {
            const lectureName = prompt("Enter a name for the lecture:");
            if (!lectureName) {
                alert("Lecture name cannot be empty.");
                return;
            }

            const lecture = $(`
        <div class="lec_sec mb-3">
            <div class="d-flex justify-content-between">
                <div>
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.60156 8.45703H12.9748" stroke="#8C94A3" stroke-width="1.01544" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.60156 4.55273H12.9748" stroke="#8C94A3" stroke-width="1.01544" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.60156 12.3633H12.9748" stroke="#8C94A3" stroke-width="1.01544" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="lecture-name">${lectureName}</span>
                </div>
                <div>
                    <ul class="list-inline mb-0">


<div class="dropdown">
                                <button class="btn dropdown-toggle" style="background-color: #EFF4FF; color:#2563EB;" type="button" data-bs-toggle="dropdown" aria-expanded="false">Contents</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Video</a></li>
                                    <li><a class="dropdown-item" href="#">Attach File</a></li>
                                    <li><a class="dropdown-item" href="#">Description</a></li>
                                    <li><a class="dropdown-item" href="#">Lecture Notes</a></li>
                                </ul>
                            </div>

                        <li class="list-inline-item">
                            <span class="edit-lecture">Edit</span>
                        </li>
                        <li class="list-inline-item">
                            <span class="delete-lecture">Delete</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    `);

            section.find('.lectures').append(lecture);

            // Edit lecture on clicking 'edit-lecture'
            lecture.find('.edit-lecture').on('click', function() {
                const newLectureName = prompt("Edit the lecture name:", lectureName);
                if (newLectureName) {
                    lecture.find('.lecture-name').text(newLectureName);
                }
            });

            // Delete lecture on clicking 'delete-lecture'
            lecture.find('.delete-lecture').on('click', function() {
                lecture.remove();
            });
        }

        function editSection(section) {
            const currentName = section.find('.section-name').text();
            const newName = prompt("Edit the section name:", currentName);
            if (newName) {
                section.find('.section-name').text(newName);
            }
        }
        </script>

 --}}


<!-- Treeview js -->
<script src="{{ static_asset('assets/js/hummingbird-treeview.js') }}"></script>

<script>
    var btn_delete = '<a type="button" onclick="removeKolom($(this))">Delete</a>';
    var btn_add = '<a class="add-btn-repeat" onclick="addElement($(this))" type="button">Add</a>';

    function removeKolom(e) {
        e.parents('.kolom').remove();
    }

    function addElement(e) {
        var newElement = $(".kolom").first().clone();
        $(".kolom").find('a.add-btn-repeat').replaceWith(btn_delete);
        newElement.appendTo(".data-repeater").find('a').replaceWith(btn_add);
    }
</script>


<script>
    $(document).ready(function() {




        $("#treeview").hummingbird();

        var main_id = '{{ old('category_id') }}';
        var selected_ids = [];
        @if (old('category_ids'))
            selected_ids = @json(old('category_ids'));
        @endif
        for (let i = 0; i < selected_ids.length; i++) {
            const element = selected_ids[i];
            $('#treeview input:checkbox#' + element).prop('checked', true);
            $('#treeview input:checkbox#' + element).parents("ul").css("display", "block");
            $('#treeview input:checkbox#' + element).parents("li").children('.las').removeClass("la-plus")
                .addClass('la-minus');
        }
        if (main_id) {
            $('#treeview input:radio[value=' + main_id + ']').prop('checked', true);
        }
    });

    $('form').bind('submit', function(e) {

        // Disable the submit button while evaluating if the form should be submitted
        // $("button[type='submit']").prop('disabled', true);

        // var valid = true;

        // if (!valid) {
        // e.preventDefault();

        ////Reactivate the button if the form was not submitted
        // $("button[type='submit']").button.prop('disabled', false);
        // }
    });

    $("[name=shipping_type]").on("change", function() {
        $(".flat_rate_shipping_div").hide();

        if ($(this).val() == 'flat_rate') {
            $(".flat_rate_shipping_div").show();
        }

    });

    function add_more_customer_choice_option(i, name) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: '{{ route('products.add-more-choice-option') }}',
            data: {
                attribute_id: i
            },
            success: function(data) {
                var obj = JSON.parse(data);
                $('#customer_choice_options').append('\
                                            <div class="form-group row">\
                                                <div class="col-md-3">\
                                                    <input type="hidden" name="choice_no[]" value="' + i + '">\
                                                    <input type="text" class="form-control" name="choice[]" value="' +
                    name +
                    '" placeholder="{{ translate('Choice Title') }}" readonly>\
                                                </div>\
                                                <div class="col-md-8">\
                                                    <select class="form-control aiz-selectpicker attribute_choice" data-live-search="true" name="choice_options_' +
                    i + '[]" multiple>\
                                                        ' + obj + '\
                                                    </select>\
                                                </div>\
                                            </div>');
                AIZ.plugins.bootstrapSelect('refresh');
            }
        });


    }

    $('input[name="colors_active"]').on('change', function() {
        if (!$('input[name="colors_active"]').is(':checked')) {
            $('#colors').prop('disabled', true);
            AIZ.plugins.bootstrapSelect('refresh');
        } else {
            $('#colors').prop('disabled', false);
            AIZ.plugins.bootstrapSelect('refresh');
        }
        update_sku();
    });

    $(document).on("change", ".attribute_choice", function() {
        update_sku();
    });

    $('#colors').on('change', function() {
        update_sku();
    });

    $('input[name="unit_price"]').on('keyup', function() {
        update_sku();
    });

    $('input[name="name"]').on('keyup', function() {
        update_sku();
    });

    function delete_row(em) {
        $(em).closest('.form-group row').remove();
        update_sku();
    }

    function delete_variant(em) {
        $(em).closest('.variant').remove();
    }

    function update_sku() {
        $.ajax({
            type: "POST",
            url: '{{ route('products.sku_combination') }}',
            data: $('#choice_form').serialize(),
            success: function(data) {
                $('#sku_combination').html(data);
                AIZ.uploader.previewGenerate();
                AIZ.plugins.fooTable();
                if (data.trim().length > 1) {
                    $('#show-hide-div').hide();
                } else {
                    $('#show-hide-div').show();
                }
            }
        });
    }

    $('#choice_attributes').on('change', function() {
        $('#customer_choice_options').html(null);
        $.each($("#choice_attributes option:selected"), function() {
            add_more_customer_choice_option($(this).val(), $(this).text());
        });

        update_sku();
    });
</script>
<script>
    $(document).ready(function() {
        var hash = document.location.hash;
        if (hash) {
            $('.nav-tabs a[href="' + hash + '"]').tab('show');
        } else {
            $('.nav-tabs a[href="#general"]').tab('show');
        }

        // Change hash for page-reload
        $('.nav-tabs a').on('shown.bs.tab', function(e) {
            window.location.hash = e.target.hash;
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ترتيب الأقسام
        // new Sortable(document.getElementById('accordionExample'), {
        //     handle: '.accordion-header', // السحب يتم فقط من العنوان
        //     animation: 150,
        //     onEnd: function(evt) {
        //         // جمع الترتيب الجديد للأقسام
        //         let sectionOrder = [];
        //         document.querySelectorAll('.accordion-item').forEach((section, index) => {
        //             sectionOrder.push({
        //                 id: section.getAttribute('data-id'),
        //                 order: index + 1
        //             });
        //         });

        //         // إرسال الترتيب الجديد للأقسام إلى الخادم باستخدام AJAX
        //         fetch('/sections/reorder', {
        //                 method: 'POST',
        //                 headers: {
        //                     'Content-Type': 'application/json',
        //                     'X-CSRF-TOKEN': '{{ csrf_token() }}'
        //                 },
        //                 body: JSON.stringify({
        //                     order: sectionOrder
        //                 })
        //             })
        //             .then(response => response.json())
        //             .then(data => {
        //                 if (data.success) {
        //                     alert('تم إعادة ترتيب الأقسام بنجاح.');
        //                 }
        //             })
        //             .catch(error => {
        //                 alert('حدث خطأ أثناء إعادة ترتيب الأقسام.');
        //             });
        //     }
        // });

        // ترتيب المحاضرات داخل كل قسم
        document.querySelectorAll('.accordion-body').forEach(function(lectureList) {
            new Sortable(lectureList, {
                handle: '.lec_sec', // السحب يتم فقط للمحاضرات
                animation: 150,
                onEnd: function(evt) {
                    // جمع الترتيب الجديد للمحاضرات
                    let lectureOrder = [];
                    lectureList.querySelectorAll('.lec_sec').forEach((lecture, index) => {
                        lectureOrder.push({
                            id: lecture.getAttribute('data-id'),
                            order: index + 1
                        });
                    });

                    // إرسال الترتيب الجديد للمحاضرات إلى الخادم باستخدام AJAX
                    fetch('/lectures/reorder', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                order: lectureOrder,
                                section_id: lectureList.parentElement
                                    .parentElement.getAttribute('data-id')
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert('تم إعادة ترتيب المحاضرات بنجاح.');
                            }
                        })
                        .catch(error => {
                            alert('حدث خطأ أثناء إعادة ترتيب المحاضرات.');
                        });
                }
            });
        });
    });
</script>
@endsection
