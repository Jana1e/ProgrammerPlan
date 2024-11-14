<?php include 'header.php'; ?>

<section class="banner_slider mb-0">

  <div class="container-xxl p-lg-0 ">
    <div class="row">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../assets/img/hackton.png" class="img-fluid" alt="banner">

          </div>


        </div>

        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> -->
      </div>
    </div>
  </div>
</section>
<section class="section dashboard ">
  <div class="container-xxl">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12 p-lg-0 mb-3">
        <!-- card_shadow sec -->
        <div class="card_shadow shadow_sec_padd">
          <div class="row">
            <div class="col-lg-5">

              <div class="events_starts">

                <h3 class="mt-1">The Dates Hackathon </h3>
                <small>Sun, September 5th at 3:00 PM (Ryadh )</small>
                <p>Event Start In</p>


                <div id="countdown">
                  <ul class="p-0">
                    <li><span id="days"></span>Days</li>
                    <li><span id="hours"></span>Hours</li>
                    <li><span id="minutes"></span>Minutes</li>
                    <li><span id="seconds"></span>Seconds</li>
                  </ul>
                </div>

                <p class="mb-0">Link To Register</p>

                <a href="#">https://mdseason.com/hakathon</a>

                <p>Hackathon Information:</p>

                <ul class="list-inline">
                  <li class="list-inline-item ">
                    <a href="chat_one.php" class="hk_btns" target="_blank">
                      <svg width="20" height="20" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 5.47145C0.110044 5.06786 0.19808 4.65816 0.331356 4.26313C1.21416 1.6716 3.55566 0.0107738 6.36668 0.00588179C11.9802 -0.00267918 17.5924 0.0034358 23.2059 0.0034358C26.8997 0.0034358 30.5924 -0.00634817 34.2862 0.00710478C37.3246 0.0181117 39.7749 1.97735 40.4597 4.91254C40.5746 5.40541 40.615 5.90683 40.615 6.41315C40.6125 12.5489 40.6186 18.6835 40.6113 24.8192C40.6076 28.5347 37.8859 31.2485 34.1639 31.251C26.7775 31.2559 19.3911 31.2546 12.0046 31.2473C11.6623 31.2473 11.3969 31.3268 11.1267 31.5543C8.43674 33.8144 5.73331 36.061 3.03478 38.3113C2.72299 38.5706 2.4222 38.8445 2.02482 38.9779C1.2435 39.2396 0.314238 38.8421 0.00122272 37.7964C0 27.0194 0 16.246 0 5.47145ZM3.12404 34.1434C3.33312 33.9783 3.45906 33.8841 3.58011 33.7826C5.58048 32.1169 7.58695 30.4597 9.57387 28.7793C10.1119 28.3243 10.6878 28.1177 11.3957 28.1189C18.9276 28.1323 26.4596 28.1274 33.9915 28.1274C36.2266 28.1274 37.4872 26.858 37.4885 24.6101C37.4885 18.6382 37.4885 12.6663 37.4885 6.69567C37.4885 4.37931 36.2462 3.12941 33.9438 3.12941C24.8505 3.12941 15.7571 3.12941 6.66258 3.12941C4.38344 3.12941 3.12404 4.38298 3.12404 6.65286C3.12404 15.6186 3.12404 24.5844 3.12404 33.549C3.12404 33.7092 3.12404 33.8706 3.12404 34.1434Z" fill="white" />
                        <path d="M48.1329 49.9987C47.7074 49.83 47.3382 49.5768 46.9824 49.2906C44.8023 47.5369 42.6136 45.7941 40.4359 44.0366C40.1804 43.8312 39.9297 43.7419 39.5996 43.7431C32.701 43.7517 25.8025 43.7541 18.9039 43.748C15.8166 43.7456 13.3601 41.8181 12.6607 38.8683C12.4137 37.8263 12.4614 36.7623 12.5311 35.7105C12.5825 34.9314 13.3124 34.3664 14.0864 34.3786C14.88 34.3909 15.5524 35.0048 15.6087 35.8096C15.6429 36.2951 15.6197 36.7855 15.6221 37.2735C15.6331 39.3147 16.9427 40.622 18.9932 40.6233C26.0213 40.6269 33.0507 40.6318 40.0789 40.6135C40.8419 40.611 41.4557 40.8324 42.0377 41.313C43.5062 42.5226 45.004 43.6991 46.4921 44.8854C46.5874 44.9612 46.6657 45.0774 46.8197 45.0774C46.9041 44.9245 46.8601 44.7607 46.8601 44.6053C46.8625 36.0945 46.8638 27.5825 46.8625 19.0716C46.8625 17.0146 45.7438 15.8038 43.6847 15.6228C42.7884 15.5445 42.1563 14.8682 42.1808 14.017C42.2064 13.1487 42.9095 12.5029 43.8265 12.5042C47.0398 12.509 49.8142 15.1666 49.9744 18.3941C49.9878 18.6534 49.9866 18.9151 49.9866 19.1756C49.9866 28.7614 49.9792 38.346 50 47.9319C50.0025 48.898 49.72 49.6025 48.8152 50C48.589 49.9987 48.3604 49.9987 48.1329 49.9987Z" fill="white" />
                        <path d="M20.2611 12.5016C17.1872 12.5016 14.1133 12.5077 11.0394 12.4979C9.84234 12.4942 9.07081 11.4327 9.48775 10.3797C9.72374 9.78284 10.1835 9.45508 10.8205 9.38537C10.9819 9.36825 11.1458 9.37559 11.3084 9.37559C17.3095 9.37559 23.3118 9.37436 29.3129 9.37681C29.5403 9.37681 29.7726 9.36825 29.9927 9.4135C30.7838 9.57371 31.3157 10.3087 31.2338 11.0963C31.1518 11.8864 30.5111 12.4869 29.6785 12.4942C27.8407 12.5101 26.003 12.5003 24.1652 12.5003C22.863 12.5016 21.5621 12.5016 20.2611 12.5016Z" fill="white" />
                        <path d="M17.1359 18.7507C15.0866 18.7507 13.0373 18.7617 10.9893 18.7458C9.80936 18.736 9.0525 17.6219 9.50735 16.5836C9.7898 15.9378 10.3143 15.6284 11.0174 15.6272C12.6436 15.6247 14.2698 15.626 15.896 15.626C18.3843 15.626 20.8725 15.6174 23.3607 15.6296C24.5455 15.6357 25.3171 16.7291 24.8781 17.7699C24.5957 18.4376 24.0577 18.7495 23.3338 18.7495C21.2662 18.7495 19.201 18.7507 17.1359 18.7507Z" fill="white" />
                      </svg>
                    </a>
                  </li>
                  <li class="list-inline-item ">
                    <a href="team_formation.php" class="hk_btns" target="_blank">
                      <svg width="25" height="28" viewBox="0 0 123 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M122 55.7881C120.623 55.7684 119.246 55.7347 117.872 55.7347C109.916 55.7291 101.958 55.7319 94.0018 55.7319C93.5368 55.7319 93.0688 55.7319 92.4928 55.7319C92.5588 56.9427 92.7298 58.072 92.6548 59.1873C92.5288 61.0498 92.5438 62.9882 91.9738 64.744C90.3539 69.7417 85.674 72.8965 79.8182 72.933C67.5275 73.0089 55.2368 73.037 42.9461 72.9274C35.3294 72.86 30.0915 67.6741 30.0615 60.5189C30.0555 58.9766 30.0615 57.4371 30.0615 55.7572C20.5188 55.7572 10.814 55.7572 1.12729 55.7572C0.164311 48.3042 4.58319 37.1177 17.1918 32.6622C13.112 29.6562 11.066 25.7823 11.471 20.9503C11.762 17.4472 13.421 14.5255 16.2739 12.2416C21.7787 7.83103 30.1155 8.20186 35.1224 13.0844C38.0383 15.9302 39.3432 19.3687 38.9563 23.2876C38.5753 27.156 36.5893 30.2518 33.4094 32.502C36.0523 33.9432 38.6533 35.3647 41.4522 36.8901C44.4671 34.5809 48.073 32.6903 52.2699 31.4457C46.774 27.9594 43.8851 23.282 43.8821 17.2449C43.8791 12.5562 45.8231 8.56706 49.495 5.35888C56.7338 -0.973217 68.1755 -0.327084 74.7003 6.78037C81.0121 13.6575 80.4241 25.2457 70.4614 31.4429C74.6133 32.6959 78.2792 34.5275 81.3571 36.9632C84.138 35.4293 86.796 33.9629 89.4809 32.4824C85.572 29.6225 83.55 25.7176 83.967 20.8688C84.264 17.4106 85.926 14.5368 88.7189 12.25C94.2268 7.74114 102.819 8.22995 107.825 13.2501C112.733 18.172 113.324 27.0858 105.815 32.6144C107.15 33.2296 108.515 33.755 109.766 34.4545C116.654 38.306 120.677 43.9582 121.781 51.4168C121.811 51.6247 121.919 51.8242 121.991 52.0293C122 53.2794 122 54.5351 122 55.7881ZM61.2457 69.3512C62.8596 69.3512 64.4736 69.3568 66.0905 69.3512C70.9744 69.3344 75.8583 69.413 80.7361 69.2613C84.795 69.1349 88.3469 65.7862 88.6769 62.0218C89.2709 55.2346 87.3869 49.1217 82.9741 43.6885C75.8523 34.918 62.5806 31.3558 51.6729 35.4574C41.6352 39.233 35.7523 46.2281 34.1504 56.2404C33.7994 58.4288 33.7694 60.7717 34.1984 62.9405C34.9844 66.9156 38.6473 69.3315 43.2881 69.3484C49.276 69.3681 55.2608 69.3512 61.2457 69.3512ZM61.2876 30.1451C68.8714 30.1479 74.9643 24.4591 74.9643 17.3713C74.9643 10.292 68.8444 4.58352 61.2756 4.60318C53.7189 4.62004 47.581 10.3987 47.635 17.4387C47.692 24.4675 53.7849 30.1394 61.2876 30.1451ZM84.399 39.5814C88.6169 44.7898 90.1139 47.2338 91.2868 51.0348C91.5358 51.841 91.9108 52.1107 92.8288 52.1051C100.821 52.0658 108.815 52.0826 116.81 52.0826C117.185 52.0826 117.56 52.0826 118.082 52.0826C116.705 44.4386 112.532 39.0083 104.933 36.2861C97.5147 33.6285 90.6719 34.991 84.399 39.5814ZM38.2903 39.4437C31.4775 34.6062 24.1397 33.4797 16.3579 36.9182C9.64405 39.8848 5.97215 45.0735 4.81718 51.9899C5.26417 52.0321 5.53117 52.0798 5.79816 52.0798C13.9069 52.0826 22.0157 52.0714 30.1245 52.0995C30.8925 52.1023 31.0485 51.7652 31.3155 51.1949C32.5094 48.6441 33.6914 46.0764 35.0924 43.6239C35.9353 42.1547 37.1713 40.8793 38.2903 39.4437ZM107.633 22.5207C107.981 17.7702 104.069 12.9636 98.0726 12.7332C93.0508 12.5394 88.1849 16.0116 87.7469 21.6245C87.3569 26.6026 91.6678 31.1143 97.4037 31.3615C102.726 31.5918 107.408 27.6476 107.633 22.5207ZM35.0624 21.5515C34.8254 16.3122 29.9955 12.5281 24.8236 12.7332C18.7428 12.972 14.9059 17.7225 15.2059 22.487C15.5569 28.0943 20.4468 31.6452 25.5226 31.3502C31.3275 31.0159 35.5184 26.5604 35.0624 21.5515Z" fill="white" stroke="white" stroke-width="0.3" />
                      </svg>
                    </a>
                  </li>

                </ul>

              </div>


            </div>
            <div class="col-lg-7 position-relative z-1">

              <div id='calendar'></div>


              <!-- Add modal -->

              <div class="modal fade edit-form  d-none" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                <div class="modal-dialog modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                      <h5 class="modal-title " id="modal-title">Add Event</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="myForm">
                      <div class="modal-body">
                        <div class="alert alert-danger " role="alert" id="danger-alert" style="display: none;">
                          End date should be greater than start date.
                        </div>
                        <div class="form-group">
                          <label for="event-title">Event name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="event-title" placeholder="Enter event name" required>
                        </div>
                        <div class="form-group">
                          <label for="start-date">Start date <span class="text-danger">*</span></label>
                          <input type="date" class="form-control" id="start-date" placeholder="start-date" required>
                        </div>
                        <div class="form-group">
                          <label for="end-date">End date - <small class="text-muted">Optional</small></label>
                          <input type="date" class="form-control" id="end-date" placeholder="end-date">
                        </div>
                        <div class="form-group">
                          <label for="event-color">Color</label>
                          <input type="color" class="form-control" id="event-color" value="#3788d8">
                        </div>
                      </div>
                      <div class="modal-footer border-top-0 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success" id="submit-button">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <!-- Delete Modal -->
              <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="delete-modal-title" aria-hidden="true">
                <div class="modal-dialog modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="delete-modal-title">Confirm Deletion</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center" id="delete-modal-body">
                      Are you sure you want to delete the event?
                    </div>
                    <div class="modal-footer border-0">
                      <button type="button" class="btn btn-secondary rounded-sm" data-dismiss="modal" id="cancel-button">Cancel</button>
                      <button type="button" class="btn btn-danger rounded-lg" id="delete-button">Delete</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>



          </div>



        </div>


      </div>
      <!-- End card_shadow -->



    </div><!-- End Left side columns -->

    <!-- End Right side columns -->

  </div>
  </div>
</section>

</main><!-- End #main -->


<!-- footer sec -->
<?php include 'footer.php'; ?>