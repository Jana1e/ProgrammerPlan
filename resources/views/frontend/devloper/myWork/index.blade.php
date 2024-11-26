@extends('frontend.layouts.app')

@section('content')
    @include('frontend.home.partials.home-banner-area')



    <div class="cms_ssc">
        <!-- Bordered Tabs Justified -->
        <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="review" role="tablist">
            <!-- Review Tab -->
            <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100 active" id="review-tab" data-bs-toggle="tab"
                    data-bs-target="#bordered-justified-review" type="button" role="tab"
                    aria-controls="bordered-justified-review" aria-selected="true">Review Work</button>
            </li>
            <!-- Add Work Tab -->
            <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="addwork-tab" data-bs-toggle="tab"
                    data-bs-target="#bordered-justified-addwork" type="button" role="tab"
                    aria-controls="bordered-justified-addwork" aria-selected="false">Add Work</button>
            </li>
        </ul>

        <div class="tab-content pt-2" id="reviewContent">
            <!-- Review Work Section -->
            <div class="tab-pane fade show active" id="bordered-justified-review" role="tabpanel"
                aria-labelledby="review-tab">
            

                    @include('frontend.devloper.partials.workbox_1',['Works' => $Works])
                
            </div>

            <!-- Add Work Section -->
            <div class="tab-pane fade" id="bordered-justified-addwork" role="tabpanel" aria-labelledby="addwork-tab">
                <div class="shadow_sec_padd">
                    <div class="row mb-3">
                        <!-- Carousel Section -->
                        <div class="col-xl-4">
                            <div class="sign_upsec">
                                <div class="profile-card pt-4 text-center">
                                    <div id="addCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#addCarousel" data-bs-slide-to="0"
                                                class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#addCarousel" data-bs-slide-to="1"
                                                aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#addCarousel" data-bs-slide-to="2"
                                                aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="../assets/img/signup.png" class="d-block w-100" alt="Slide 1">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../assets/img/signup.png" class="d-block w-100" alt="Slide 2">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../assets/img/signup.png" class="d-block w-100" alt="Slide 3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add Portfolio Form Section -->

                        <!-- Add Portfolio Form -->
                        <div class="col-lg-7">
                            <div class="mb-3">
                                <div class="heading_sec">
                                    <h2 class="main_heading">Add Portfolio</h2>
                                </div>
                            </div>




                            <form class="" action="{{ route('my-work.store') }}" method="POST"
                                enctype="multipart/form-data" id="choice_form">
                                @csrf
                                <!-- Data type -->
                                <input type="hidden" id="data_type" value="digital">
                                <input type="hidden" name="added_by" value="admin">
                                <input type="hidden" name="digital" value="1">


                                <div class="row g-3">
                                    <!-- Project Title -->
                                    <div class="col-md-12">
                                        <div class="form-floating mb-1">
                                            <input type="text" class="form-control" name="name" id="projectTitle"
                                                placeholder="Add your Project Title">
                                            <label for="projectTitle">Project Title</label>
                                        </div>
                                    </div>
                                    <!-- Project Duration -->
                                    <div class="col-12">
                                        <div class="form-floating mb-1">
                                            <input type="text" class="form-control" id="projectDuration"
                                                placeholder="Project Duration">
                                            <label for="projectDuration">Project Duration</label>
                                        </div>
                                    </div>
                                    <!-- Project Description -->
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="description" placeholder="Describe your project..." id="projectDescription"
                                                rows="8" style="height: 200px"></textarea>
                                            <label for="projectDescription">Project Description</label>
                                        </div>
                                    </div>
                                    <!-- Attachments -->

                                    <div class="col-12 border rounded-2 p-3">
                                        <label for="attachments" class="p-2">{{ translate('Attachments') }}</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                        {{ translate('Browse') }}</div>
                                                </div>
                                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                <input type="hidden" name="thumbnail_img" id="attachments"
                                                    class="selected-files">
                                            </div>
                                            <div class="file-preview box sm">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <small><strong>Allowed formats:</strong></small><br>
                                            <small><strong>.jpg, .jpeg, .png, .gif, .mp4, .avi; max size - 50 MB; max files
                                                    - 5</strong></small>
                                        </div>

                                    </div>

                                    <select id="demo-ease" class="" name="category_id" required>
                                        <option value="">{{ translate('Choose Category') }}</option>
                                        <option value="">{{ translate('Choose Category') }}</option>
                                        @foreach (\App\Models\Category::all() as $key => $category)
                                            <option value="{{ $category->id }}">{{ $category->getTranslation('name') }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <!-- Submit Button -->
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-dark w-100 py-3">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

   
@endsection
