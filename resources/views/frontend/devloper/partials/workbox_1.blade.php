<div class="row mt-3">

    @foreach ($Works as $key => $work)
        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
            <div class="cards_courses">
                <img class="img-fluid w-100 mb-2" alt="Portfolio Image" src="{{ uploaded_asset($work->thumbnail_img) }}"
                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="course_heading">
                        <h4>{{ $work->name }}:</h4>
                    </div>
                    <div class="str_rate position-relative">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li>
                                    <a class="dropdown-item edit-work-btn" href="#" data-bs-toggle="modal"
                                        data-bs-target="#EditWork" data-id="{{ $work->id }}"
                                        data-name="{{ htmlspecialchars($work->name, ENT_QUOTES) }}"
                                        data-price="{{ htmlspecialchars($work->price, ENT_QUOTES) }}"
                                        data-description="{{ htmlspecialchars($work->description, ENT_QUOTES) }}"
                                        data-thumbnail="{{ $work->thumbnail_img }}">
                                        Edit Work
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this work?')) { document.getElementById('delete-work-form-{{ $work->id }}').submit(); }">
                                        Delete Work
                                    </a>
                                    <form id="delete-work-form-{{ $work->id }}"
                                        action="{{ route('work.destroy', $work->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <small>{{ Str::limit($work->description, 100) }}</small>
            </div>
        </div>
    @endforeach
</div>


<!-- Edit Work Modal -->
<div class="modal fade" id="EditWork" tabindex="-1" aria-labelledby="EditWorkLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- Modal Header -->

                <h5 class="modal-title fs-5" id="EditWorkLabel">Edit Work</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <div class="col-lg-12 p-lg-0 mb-3">
                    <!-- Card Shadow Section -->
                    <div class="shadow_sec_padd">
                        <div class="row mb-3">
                            <!-- Carousel Section -->
                            <div class="col-xl-4">
                                <div class="sign_upsec">
                                    <div class="profile-card pt-4 text-center">
                                        <div id="editCarousel" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#editCarousel"
                                                    data-bs-slide-to="0" class="active" aria-current="true"
                                                    aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#editCarousel"
                                                    data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#editCarousel"
                                                    data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="../assets/img/signup.png" class="d-block w-100"
                                                        alt="Slide 1">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="../assets/img/signup.png" class="d-block w-100"
                                                        alt="Slide 2">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="../assets/img/signup.png" class="d-block w-100"
                                                        alt="Slide 3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Work Form Section -->
                            <div class="col-lg-7">
                                <div class="mb-3">
                                    <div class="heading_sec">
                                        <h2 class="main_heading">Edit Work</h2>
                                    </div>
                                </div>
                                <form id="editWorkForm" action="{{ route('work.update', ['work' => '__ID__']) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row g-3">
                                        <!-- Hidden Work ID Field -->
                                        <input type="hidden" name="work_id" id="hiddenWorkId">

                                        <!-- Course Title -->
                                        <div class="col-md-12">
                                            <div class="form-floating mb-1">
                                                <input type="text" class="form-control" id="editCourseTitle"
                                                    name="name" placeholder="Add your Course Title" required>
                                                <label for="editCourseTitle">Course Title</label>
                                            </div>
                                        </div>

                                        {{-- <!-- Edit Price -->
                                        <div class="col-12">
                                            <div class="form-floating mb-1">
                                                <input type="text" class="form-control" id="editPrice"
                                                    name="price" placeholder="Free/Paid" required>
                                                <label for="editPrice">Edit Price</label>
                                            </div>
                                        </div> --}}

                                        <!-- Course Description -->
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Describe your course..." id="editCourseDescription" name="description"
                                                    rows="8" style="height: 200px" required> </textarea>
                                                <label for="editCourseDescription">Course Description</label>
                                            </div>
                                        </div>

                                        <!-- Attachments -->
                                        <div class="col-12 border rounded-2 p-3">
                                            <label for="attachments"
                                                class="p-2">{{ translate('Attachments') }}</label>
                                            <div class="input-group mb-3" id="image_model">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div
                                                            class="input-group-text bg-soft-secondary font-weight-medium">
                                                            {{ translate('Browse') }}
                                                        </div>
                                                    </div>
                                                    <div class="form-control file-amount">
                                                        {{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="thumbnail_img" id="model_attachments"
                                                        class="selected-files">
                                                </div>
                                                <div class="file-preview box sm"></div>
                                            </div>
                                            <div class="text-center">

                                                <small><strong>Allowed formats:</strong></small><br>
                                                <small><strong>.jpg, .jpeg, .png, .gif, .mp4, .avi; max size - 50 MB;
                                                        max files
                                                        - 5</strong></small>
                                            </div>

                                        </div>

                                        <!-- Submit Button -->
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-dark w-100 py-3">Continue</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>



<!-- Add Portfolio Modal -->
<div class="modal fade" id="AddPortfolioModal" tabindex="-1" aria-labelledby="AddPortfolioModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddPortfolioModalLabel">Add Portfolio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
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
                                                <img src="../assets/img/signup.png" class="d-block w-100"
                                                    alt="Slide 1">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../assets/img/signup.png" class="d-block w-100"
                                                    alt="Slide 2">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../assets/img/signup.png" class="d-block w-100"
                                                    alt="Slide 3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add Portfolio Form Section -->
                        <div class="col-lg-7">
                            <div class="mb-3">
                                <div class="heading_sec">
                                    <h2 class="main_heading">Add Portfolio</h2>
                                </div>
                            </div>

                            <form action="{{ route('work.store') }}" method="POST" enctype="multipart/form-data"
                                id="choice_form">
                                @csrf
                                <!-- Data type -->
                                <input type="hidden" id="data_type" value="digital">
                                <input type="hidden" name="added_by" value="admin">
                                <input type="hidden" name="digital" value="1">

                                <div class="row g-3">
                                    <!-- Project Title -->
                                    <div class="col-md-12">
                                        <div class="form-floating mb-1">
                                            <input type="text" class="form-control" name="name"
                                                id="projectTitle" placeholder="Add your Project Title" required>
                                            <label for="projectTitle">Project Title</label>
                                        </div>
                                    </div>


                                    <!-- Project duration -->
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="duration" min="1"
                                            step="1" placeholder="{{ translate('Project duration') }}">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                id="inputGroupPrepend">{{ translate('Days') }}</span>
                                        </div>
                                    </div>





                                    <div class="col-12">
                                        <div class="form-floating mb-1">
                                            <input type="text" class="form-control" id="floatingInput" name="price"
                                                placeholder="Project price">
                                            <label for="floatingInput"> Project price </label>
                                        </div>
                                    </div>


                                    <!-- Project Description -->
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="description" id="projectDescription" placeholder="Describe your project..."
                                                rows="8" style="height: 200px" required></textarea>
                                            <label for="projectDescription">Project Description</label>
                                        </div>
                                    </div>
                                    <!-- Attachments -->
                                    <div class="col-12 border rounded-2 p-3">
                                        <label for="attachments"
                                            class="p-2">{{ translate('Attachments') }}</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                        {{ translate('Browse') }}
                                                    </div>
                                                </div>
                                                <div class="form-control file-amount">{{ translate('Choose File') }}
                                                </div>
                                                <input type="hidden" name="thumbnail_img" id="attachments"
                                                    class="selected-files">
                                            </div>
                                            <div class="file-preview box sm"></div>
                                        </div>
                                        <div class="text-center">
                                            <small><strong>Allowed formats:</strong></small><br>
                                            <small><strong>.jpg, .jpeg, .png, .gif, .mp4, .avi; max size - 50 MB; max
                                                    files - 5</strong></small>
                                        </div>
                                    </div>
                                    <!-- Category Dropdown -->
                                    <div class="col-12">
                                        <select id="demo-ease" class="form-select" name="category_id" required>
                                            <option value="">{{ translate('Choose Category') }}</option>
                                            @foreach (\App\Models\Category::all() as $key => $category)
                                                <option value="{{ $category->id }}">
                                                    {{ $category->getTranslation('name') }}</option>
                                            @endforeach
                                        </select>
                                    </div>
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
</div>

<!-- Button to Trigger Modal -->



<script>
    document.addEventListener('DOMContentLoaded', function() {
        var EditWork = document.getElementById('EditWork');

        // Populate modal when shown
        EditWork.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = event.relatedTarget;

            // Extract info from data-* attributes
            var workId = button.getAttribute('data-id');
            var workName = button.getAttribute('data-name');
            var workDescription = button.getAttribute('data-description');
            var workThumbnail = button.getAttribute('data-thumbnail');

            // Update modal form fields
            var modalForm = EditWork.querySelector('#editWorkForm');
            modalForm.querySelector('#editCourseTitle').value = workName;
            modalForm.querySelector('#editCourseDescription').value = workDescription;




            // Update the form action
            modalForm.setAttribute('action', `/work/${workId}`);



            // Re-initialize the AIZ Uploader
            if (typeof AIZ !== 'undefined' && AIZ.uploader) {
                AIZ.uploader.initialize();

                // Update the file preview with the existing image
                var $input = $('#model_attachments');
                $input.val(workThumbnail);
                $input.trigger('change');
            }
        });

        // Reset modal when hidden
        EditWork.addEventListener('hidden.bs.modal', function() {
            var modalForm = EditWork.querySelector('#editWorkForm');
            modalForm.reset();

            // Clear dynamically added file inputs
            var fileInputContainer = modalForm.querySelector('#image_model');
            fileInputContainer.innerHTML = '';
        });
    });
</script>
