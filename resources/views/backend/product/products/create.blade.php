@extends('backend.layouts.app')

@section('content')

    @php
        CoreComponentRepository::instantiateShopRepository();
        CoreComponentRepository::initializeCache();
    @endphp
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
        <div id="anc_sec" class="dashboard-box bg-white mb-2rem overflow-hidden">
            <nav class="nav nav-pills nav-fill">
                <!-- Basic Information Tab -->
                <a class="nav-link tab-pills active" id="general-tab" data-tab="general" href="#">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- SVG content -->
                    </svg>
                    Basic Information
                    <span><small class="text-success ms-4">7/12</small></span>
                </a>

                <!-- Advance Information Tab -->
                <a class="nav-link tab-pills" id="files-and-media-tab" data-tab="files_and_media" href="#">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <!-- SVG content -->
                    </svg>
                    Advance Information
                </a>

                <!-- Add more tabs if necessary -->
            </nav>

            <!-- Tab Content -->
            <div class="tab-content p-3">
                <!-- Basic Information Content -->
                <div class="tab general">
                    <div class="bg-white p-3 p-sm-2rem ">
                        <!-- Course Information -->
                        <h5 class="mb-3 pb-3 fs-17 fw-700" style="border-bottom: 1px dashed #e4e5eb;">
                            {{ translate('Course Information') }}</h5>

                        <!-- Form Start -->
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"
                            id="choice_form">
                            @csrf
                            <div class="w-100">
                                <div class="row">
                                    <div class="col-xxl-7 col-xl-6">
                                        <!-- Product Name -->
                                        <div class="form-group row">
                                            <label class="col-xxl-3 col-form-label fs-13">{{ translate('Title') }} <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-xxl-9">
                                                <input type="text" class="form-control" name="name" required
                                                    value="{{ old('name') }}" placeholder="{{ translate('Title') }}"
                                                    onchange="update_sku()">
                                            </div>
                                        </div>

                                        <!-- Lab Level -->
                                        <div class="form-group row" id="brand">
                                            <label class="col-xxl-3 col-form-label fs-13">{{ translate('Level') }}</label>
                                            <div class="col-xxl-9">
                                                <select class="form-control aiz-selectpicker" name="brand_id" required
                                                    id="brand_id" data-live-search="true">
                                                    <option value="">{{ translate('Select Level') }}</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Category -->
                                        <div class="form-group row" id="brand">
                                            <label
                                                class="col-xxl-3 col-form-label fs-13">{{ translate('Category') }}</label>
                                            <div class="col-xxl-9">
                                                <select class="form-control aiz-selectpicker" name="category_id" required
                                                    id="category_id" data-live-search="true">
                                                    <option value="">{{ translate('Select Category') }}</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">
                                                            {{ $category->getTranslation('name') }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Teacher -->
                                        <div class="form-group row" id="brand">
                                            <label
                                                class="col-xxl-3 col-form-label fs-13">{{ translate('Teacher') }}</label>
                                            <div class="col-xxl-9">

                                                <select class="form-control aiz-selectpicker" name="user_id" required
                                                    id="category_id" data-live-search="true">
                                                    <option value="">{{ translate('Select Teacher') }}</option>

                                                    @foreach (\App\Models\User::where('user_type', 'teacher')->get() as $key => $teacher)
                                                        <option value="{{ $teacher->id }}">
                                                            {{ $teacher->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>






                                        <!-- Durations -->
                                        <div class="form-group row">
                                            <label class="col-xxl-3 col-form-label fs-13">{{ translate('Durations') }}
                                                <span class="text-danger">*</span></label>
                                            <div class="col-xxl-9">
                                                <input type="text" class="form-control aiz-date-range" name="date_range"
                                                    placeholder="{{ translate('Select Date') }}" data-time-picker="true"
                                                    data-format="DD-MM-Y HH:mm:ss" data-separator=" to " autocomplete="off">
                                            </div>
                                        </div>

                                        <!-- Status -->
                                        <h5 class="mb-3 mt-5 pb-3 fs-17 fw-700" style="border-bottom: 1px dashed #e4e5eb;">
                                            {{ translate('Status') }}</h5>

                                        <!-- Featured -->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">{{ translate('Featured') }}</label>
                                            <div class="col-md-9">
                                                <label class="aiz-switch aiz-switch-success mb-0 d-block">
                                                    <input type="checkbox" name="featured" value="1">
                                                    <span></span>
                                                </label>
                                                <small
                                                    class="text-muted">{{ translate('If you enable this, this course will be granted as a featured product.') }}</small>
                                            </div>
                                        </div>

                                        <!-- Today's Deal -->
                                        <div class="form-group row">
                                            <label
                                                class="col-md-3 col-form-label">{{ translate('Today\'s Deal') }}</label>
                                            <div class="col-md-9">
                                                <label class="aiz-switch aiz-switch-success mb-0 d-block">
                                                    <input type="checkbox" name="todays_deal" value="1">
                                                    <span></span>
                                                </label>
                                                <small
                                                    class="text-muted">{{ translate('If you enable this, this course will be granted as a today\'s deal product.') }}</small>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                <!-- Advance Information Content -->
                <div class="tab files_and_media d-none">
                    <div class="bg-white p-3 p-sm-2rem">
                        <!-- Advance Information -->
                        <h5 class="mb-3 pb-3 fs-17 fw-700" style="border-bottom: 1px dashed #e4e5eb;">
                            {{ translate('Advance Information') }}</h5>

                        <!-- Gallery Images -->
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">{{ translate('Gallery Images') }}
                                <small>(600x600)</small></label>
                            <div class="col-md-9">
                                <div class="input-group" data-toggle="aizuploader" data-type="image"
                                    data-multiple="true">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                            {{ translate('Browse') }}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="photos" class="selected-files">
                                </div>
                                <div class="file-preview box sm"></div>
                                <small
                                    class="text-muted">{{ translate('These images are visible in course details page gallery. Use 600x600 sizes images.') }}</small>
                            </div>
                        </div>

                        <!-- Thumbnail Image -->
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">{{ translate('Thumbnail Image') }}
                                <small>(300x300)</small></label>
                            <div class="col-md-9">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                            {{ translate('Browse') }}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="thumbnail_img" class="selected-files">
                                </div>
                                <div class="file-preview box sm"></div>
                                <small
                                    class="text-muted">{{ translate('This image is visible in all product box. Use 300x300 sizes image.') }}</small>
                            </div>
                        </div>

                  

                        <!-- Video Link -->
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">{{ translate('Video Link') }}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="video_link"
                                    value="{{ old('video_link') }}" placeholder="{{ translate('Video Link') }}">
                                <small
                                    class="text-muted">{{ translate('Use proper link without extra parameter. Don\'t use short share link/embed code.') }}</small>
                            </div>
                        </div>

                        <!-- PDF Specification -->
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">{{ translate('PDF Specification') }}</label>
                            <div class="col-md-9">
                                <div class="input-group" data-toggle="aizuploader" data-type="document">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                            {{ translate('Browse') }}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="pdf" class="selected-files">
                                </div>
                                <div class="file-preview box sm"></div>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="form-group">
                            <label class="col-form-label">{{ translate('Description') }}</label>
                            <div>
                                <textarea class="aiz-text-editor" name="description">{{ old('description') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add more tab content sections if necessary -->

            </div>

            <!-- Footer Buttons -->
            <div class="card-footer text-end">
                <div class="d-flex">
                    <button type="button" id="back_button" class="btn btn-link"
                        onclick="navigateBack()">Previous</button>
                    <button type="button" id="next_button" class="btn btn-primary ms-auto"
                        onclick="navigateNext()">Save & Next</button>
                    <button type="submit" id="submit_button" class="btn btn-success ms-auto d-none">Submit</button>
                </div>
            </div>

            </form> <!-- Form End -->

        </div>

    </div>

    <!-- JavaScript for Tab Navigation -->
    <script>
        // JavaScript for tab navigation
        document.querySelectorAll('.tab-pills').forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();

                // Remove 'active' class from all tabs
                document.querySelectorAll('.tab-pills').forEach(tab => tab.classList.remove('active'));

                // Add 'active' class to clicked tab
                this.classList.add('active');

                // Hide all tab content
                document.querySelectorAll('.tab').forEach(content => content.classList.add('d-none'));

                // Show the corresponding tab content
                const targetTab = this.getAttribute('data-tab');
                document.querySelector(`.${targetTab}`).classList.remove('d-none');

                // Handle footer buttons
                updateFooterButtons();
            });
        });

        // Navigation functions
        function navigateNext() {
            const activeTab = document.querySelector('.tab-pills.active');
            const nextTab = activeTab.nextElementSibling;

            if (nextTab) {
                nextTab.click();
            }
        }

        function navigateBack() {
            const activeTab = document.querySelector('.tab-pills.active');
            const prevTab = activeTab.previousElementSibling;

            if (prevTab) {
                prevTab.click();
            }
        }

        function updateFooterButtons() {
            const activeTab = document.querySelector('.tab-pills.active');
            const firstTab = document.querySelector('.tab-pills:first-of-type');
            const lastTab = document.querySelector('.tab-pills:last-of-type');

            const backButton = document.getElementById('back_button');
            const nextButton = document.getElementById('next_button');
            const submitButton = document.getElementById('submit_button');

            // Show or hide the 'Previous' button
            if (activeTab === firstTab) {
                backButton.classList.add('d-none');
            } else {
                backButton.classList.remove('d-none');
            }

            // Show 'Submit' button on last tab, 'Next' button otherwise
            if (activeTab === lastTab) {
                nextButton.classList.add('d-none');
                submitButton.classList.remove('d-none');
            } else {
                nextButton.classList.remove('d-none');
                submitButton.classList.add('d-none');
            }
        }

        // Initialize footer buttons on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateFooterButtons();
        });
    </script>

@endsection
