 <!-- ======= Footer ======= -->
 <footer class="footer">
   <div class="container">
     <div class="row">
       <div class="col-sm-6 col-md-3 mt-4 col-lg-3 text-center text-sm-start">
         <div class="information">
           <h6 class="footer-heading text-uppercase text-white fw-bold">Page Links</h6>
           <ul class="list-unstyled footer-link mt-4">
             <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">Home </a></li>
             <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">About Us </a></li>
             <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">Course</a></li>
             <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">Progress</a></li>
             <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">Events</a></li>
             <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">Chat</a></li>
             <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">Contact Us</a></li>
           </ul>
         </div>
       </div>
       <div class="col-sm-6 col-md-6 mt-4 col-lg-6 text-center text-sm-start">
         <div class="resources">
           <h6 class="footer-heading text-uppercase text-white fw-bold">usefull Links</h6>
           <ul class="list-unstyled footer-link mt-4">
             <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">Help </a></li>
             <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">Send Feedabck</a></li>
             <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">Ask Question</a></li>
             <!-- <li class=""><a href="#" class="text-white text-decoration-none fw-semibold">Video Lectures</a></li> -->
           </ul>
           <p class="text-white text-decoration-none mb-0 fw-semibold"> Newsletter </a>
           <p class="text-white text-decoration-none "> Subscribe for latest updates </a>
           <div class="input-group mb-3 mt-3">
             <input type="text" class="form-control" placeholder="Enter Your Email" aria-label="Recipient's username" aria-describedby="button-addon2">
             <button class="btn btn-outline-secondary text-white" type="button" id="button-addon2">Subscribe</button>
           </div>
         </div>
       </div>
       <div class="col-sm-6 col-md-3 mt-4 col-lg-3 text-center text-sm-start">
         <div class="social">
           <h6 class="footer-heading text-uppercase text-white fw-bold">About Us</h6>
           <p class="text-white mb-1 text-decoration-none d-block fw-semibold mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ut ipsam,

           </p>
           <ul class="list-inline my-4">
             <!-- <li class="list-inline-item"><a href="#" class="text-white btn-sm btn btn-primary mb-2"><i class="bi bi-facebook"></i></a></li> -->
             <li class="list-inline-item"><a href="#" class="text-danger btn-sm btn btn-primary mb-2 rounded-circle"><i class="bi bi-instagram"></i></a></li>
             <li class="list-inline-item"><a href="#" class="text-white btn-sm btn btn-primary mb-2 rounded-circle"><i class="bi bi-twitter"></i></a></li>
             <li class="list-inline-item"><a href="#" class="text-white btn-sm btn btn-primary mb-2 rounded-circle"><i class="bi bi-linkedin"></i></a></li>
           </ul>



         </div>
       </div>

     </div>
     <div class="text-center border-top text-white mt-4 p-1">

       <div class="row  align-items-center">
         <div class="col-lg-12 text-center mb-3">
           <p class="mb-0 fw-bold">2024 © Our team , All Rights Reserved</p>
         </div>

       </div>
     </div>
 </footer>
 <!-- End Footer -->

 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
     class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
 <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
 <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="../assets/vendor/chart.js/chart.umd.js"></script>
 <script src="../assets/vendor/echarts/echarts.min.js"></script>
 <script src="../assets/vendor/quill/quill.js"></script>
 <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
 <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
 <script src="../assets/vendor/php-email-form/validate.js"></script>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


 <!-- Template Main JS File -->
 <script src="../assets/js/main.js"></script>

 <script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5/tinymce.min.js"></script>


 <!-- full calander js -->

 <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.2.0/main.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.2.0/main.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/uuid@8.3.2/dist/umd/uuidv4.min.js"></script>




 <!-- evert calnder js -->

 <script>
   function readURL(input) {
     if (input.files && input.files[0]) {
       var reader = new FileReader();
       reader.onload = function(e) {
         $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
         $('#imagePreview').hide();
         $('#imagePreview').fadeIn(650);
       }
       reader.readAsDataURL(input.files[0]);
     }
   }
   $("#imageUpload").change(function() {
     readURL(this);
   });

   // statr ratimgs css

   var $star_rating = $('.star-rating .fa');

   var SetRatingStar = function() {
     return $star_rating.each(function() {
       if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
         return $(this).removeClass('fa-star-o').addClass('fa-star');
       } else {
         return $(this).removeClass('fa-star').addClass('fa-star-o');
       }
     });
   };

   $star_rating.on('click', function() {
     $star_rating.siblings('input.rating-value').val($(this).data('rating'));
     return SetRatingStar();
   });

   SetRatingStar();
   $(document).ready(function() {

   });
 </script>



 <script>
   //countdown timer js code

   (function() {
     const second = 1000,
       minute = second * 60,
       hour = minute * 60,
       day = hour * 24;

     //I'm adding this section so I don't have to keep updating this pen every year :-)
     //remove this if you don't need it
     let today = new Date(),
       dd = String(today.getDate()).padStart(2, "0"),
       mm = String(today.getMonth() + 1).padStart(2, "0"),
       yyyy = today.getFullYear(),
       nextYear = yyyy + 1,
       dayMonth = "09/30/",
       birthday = dayMonth + yyyy;

     today = mm + "/" + dd + "/" + yyyy;
     if (today > birthday) {
       birthday = dayMonth + nextYear;
     }
     //end

     const countDown = new Date(birthday).getTime(),
       x = setInterval(function() {

         const now = new Date().getTime(),
           distance = countDown - now;

         document.getElementById("days").innerText = Math.floor(distance / (day)),
           document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
           document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
           document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

         //do something later when date is reached
         if (distance < 0) {
           document.getElementById("headline").innerText = "It's my birthday!";
           document.getElementById("countdown").style.display = "none";
           document.getElementById("content").style.display = "block";
           clearInterval(x);
         }
         //seconds
       }, 0)
   }());


   // full calander js

   document.addEventListener('DOMContentLoaded', function() {
     const calendarEl = document.getElementById('calendar');
     const myModal = new bootstrap.Modal(document.getElementById('form'));
     const dangerAlert = document.getElementById('danger-alert');
     const close = document.querySelector('.btn-close');




     const myEvents = JSON.parse(localStorage.getItem('events')) || [{
         id: uuidv4(),
         title: `Edit Me`,
         start: '2023-04-11',
         backgroundColor: 'red',
         allDay: false,
         editable: false,
       },
       {
         id: uuidv4(),
         title: `Delete me`,
         start: '2023-04-17',
         end: '2023-04-21',

         allDay: false,
         editable: false,
       },
     ];


     const calendar = new FullCalendar.Calendar(calendarEl, {
       customButtons: {
         customButton: {
           text: 'Add Event',
           click: function() {
             myModal.show();
             const modalTitle = document.getElementById('modal-title');
             const submitButton = document.getElementById('submit-button');
             modalTitle.innerHTML = 'Add Event'
             submitButton.innerHTML = 'Add Event'
             submitButton.classList.remove('btn-primary');
             submitButton.classList.add('btn-success');



             close.addEventListener('click', () => {
               myModal.hide()
             })



           }
         }
       },
       header: {
         center: 'customButton', // add your custom button here
         right: 'today, prev,next '
       },
       plugins: ['dayGrid', 'interaction'],
       allDay: false,
       editable: true,
       selectable: true,
       unselectAuto: false,
       displayEventTime: false,
       events: myEvents,
       eventRender: function(info) {
         info.el.addEventListener('contextmenu', function(e) {
           e.preventDefault();
           let existingMenu = document.querySelector('.context-menu');
           existingMenu && existingMenu.remove();
           let menu = document.createElement('div');
           menu.className = 'context-menu';
           menu.innerHTML = `<ul>
        <li><i class="fas fa-edit"></i>Edit</li>
        <li><i class="fas fa-trash-alt"></i>Delete</li>
        </ul>`;

           const eventIndex = myEvents.findIndex(event => event.id === info.event.id);


           document.body.appendChild(menu);
           menu.style.top = e.pageY + 'px';
           menu.style.left = e.pageX + 'px';

           // Edit context menu

           menu.querySelector('li:first-child').addEventListener('click', function() {
             menu.remove();

             const editModal = new bootstrap.Modal(document.getElementById('form'));
             const modalTitle = document.getElementById('modal-title');
             const titleInput = document.getElementById('event-title');
             const startDateInput = document.getElementById('start-date');
             const endDateInput = document.getElementById('end-date');
             const colorInput = document.getElementById('event-color');
             const submitButton = document.getElementById('submit-button');
             const cancelButton = document.getElementById('cancel-button');
             modalTitle.innerHTML = 'Edit Event';
             titleInput.value = info.event.title;
             startDateInput.value = moment(info.event.start).format('YYYY-MM-DD');
             endDateInput.value = moment(info.event.end, 'YYYY-MM-DD').subtract(1, 'day').format('YYYY-MM-DD');
             colorInput.value = info.event.backgroundColor;
             submitButton.innerHTML = 'Save Changes';





             editModal.show();

             submitButton.classList.remove('btn-success')
             submitButton.classList.add('btn-primary')

             // Edit button

             submitButton.addEventListener('click', function() {
               const updatedEvents = {
                 id: info.event.id,
                 title: titleInput.value,
                 start: startDateInput.value,
                 end: moment(endDateInput.value, 'YYYY-MM-DD').add(1, 'day').format('YYYY-MM-DD'),
                 backgroundColor: colorInput.value
               }

               if (updatedEvents.end <= updatedEvents.start) { // add if statement to check end date
                 dangerAlert.style.display = 'block';
                 return;
               }

               const eventIndex = myEvents.findIndex(event => event.id === updatedEvents.id);
               myEvents.splice(eventIndex, 1, updatedEvents);

               localStorage.setItem('events', JSON.stringify(myEvents));

               // Update the event in the calendar
               const calendarEvent = calendar.getEventById(info.event.id);
               calendarEvent.setProp('title', updatedEvents.title);
               calendarEvent.setStart(updatedEvents.start);
               calendarEvent.setEnd(updatedEvents.end);
               calendarEvent.setProp('backgroundColor', updatedEvents.backgroundColor);



               editModal.hide();

             })



           });

           // Delete menu
           menu.querySelector('li:last-child').addEventListener('click', function() {
             const deleteModal = new bootstrap.Modal(document.getElementById('delete-modal'));
             const modalBody = document.getElementById('delete-modal-body');
             const cancelModal = document.getElementById('cancel-button');
             modalBody.innerHTML = `Are you sure you want to delete <b>"${info.event.title}"</b>`
             deleteModal.show();

             const deleteButton = document.getElementById('delete-button');
             deleteButton.addEventListener('click', function() {
               myEvents.splice(eventIndex, 1);
               localStorage.setItem('events', JSON.stringify(myEvents));
               calendar.getEventById(info.event.id).remove();
               deleteModal.hide();
               menu.remove();

             });

             cancelModal.addEventListener('click', function() {
               deleteModal.hide();
             })




           });
           document.addEventListener('click', function() {
             menu.remove();
           });
         });
       },

       eventDrop: function(info) {
         let myEvents = JSON.parse(localStorage.getItem('events')) || [];
         const eventIndex = myEvents.findIndex(event => event.id === info.event.id);
         const updatedEvent = {
           ...myEvents[eventIndex],
           id: info.event.id,
           title: info.event.title,
           start: moment(info.event.start).format('YYYY-MM-DD'),
           end: moment(info.event.end).format('YYYY-MM-DD'),
           backgroundColor: info.event.backgroundColor
         };
         myEvents.splice(eventIndex, 1, updatedEvent); // Replace old event data with updated event data
         localStorage.setItem('events', JSON.stringify(myEvents));
         console.log(updatedEvent);
       }

     });

     calendar.on('select', function(info) {

       const startDateInput = document.getElementById('start-date');
       const endDateInput = document.getElementById('end-date');
       startDateInput.value = info.startStr;
       const endDate = moment(info.endStr, 'YYYY-MM-DD').subtract(1, 'day').format('YYYY-MM-DD');
       endDateInput.value = endDate;
       if (startDateInput.value === endDate) {
         endDateInput.value = '';
       }
     });


     calendar.render();

     const form = document.querySelector('form');

     form.addEventListener('submit', function(event) {
       event.preventDefault(); // prevent default form submission

       // retrieve the form input values
       const title = document.querySelector('#event-title').value;
       const startDate = document.querySelector('#start-date').value;
       const endDate = document.querySelector('#end-date').value;
       const color = document.querySelector('#event-color').value;
       const endDateFormatted = moment(endDate, 'YYYY-MM-DD').add(1, 'day').format('YYYY-MM-DD');
       const eventId = uuidv4();

       console.log(eventId);

       if (endDateFormatted <= startDate) { // add if statement to check end date
         dangerAlert.style.display = 'block';
         return;
       }

       const newEvent = {
         id: eventId,
         title: title,
         start: startDate,
         end: endDateFormatted,
         allDay: false,
         backgroundColor: color
       };

       // add the new event to the myEvents array
       myEvents.push(newEvent);

       // render the new event on the calendar
       calendar.addEvent(newEvent);

       // save events to local storage
       localStorage.setItem('events', JSON.stringify(myEvents));

       myModal.hide();
       form.reset();
     });

     myModal._element.addEventListener('hide.bs.modal', function() {
       dangerAlert.style.display = 'none';
       form.reset();
     });

   });
 </script>

 <script>
   // lighr and dark mode js
   (() => {
     'use strict'

     const getStoredTheme = () => localStorage.getItem('theme')
     const setStoredTheme = theme => localStorage.setItem('theme', theme)

     const getPreferredTheme = () => {
       const storedTheme = getStoredTheme()
       if (storedTheme) {
         return storedTheme
       }

       return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
     }

     const setTheme = theme => {
       if (theme === 'auto') {
         document.documentElement.setAttribute('data-bs-theme', (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'))
       } else {
         document.documentElement.setAttribute('data-bs-theme', theme)
       }
     }

     setTheme(getPreferredTheme())

     const showActiveTheme = (theme, focus = false) => {
       const themeSwitcher = document.querySelector('#bd-theme')

       if (!themeSwitcher) {
         return
       }

       const themeSwitcherText = document.querySelector('#bd-theme-text')
       const activeThemeIcon = document.querySelector('.theme-icon-active use')
       const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
       const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')

       document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
         element.classList.remove('active')
         element.setAttribute('aria-pressed', 'false')
       })

       btnToActive.classList.add('active')
       btnToActive.setAttribute('aria-pressed', 'true')
       activeThemeIcon.setAttribute('href', svgOfActiveBtn)
       const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
       themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)

       if (focus) {
         themeSwitcher.focus()
       }
     }

     window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
       const storedTheme = getStoredTheme()
       if (storedTheme !== 'light' && storedTheme !== 'dark') {
         setTheme(getPreferredTheme())
       }
     })

     window.addEventListener('DOMContentLoaded', () => {
       showActiveTheme(getPreferredTheme())

       document.querySelectorAll('[data-bs-theme-value]')
         .forEach(toggle => {
           toggle.addEventListener('click', () => {
             const theme = toggle.getAttribute('data-bs-theme-value')
             setStoredTheme(theme)
             setTheme(theme)
             showActiveTheme(theme, true)
           })
         })
     })
   })()
 </script>


 <!-- signup/register modal -->

 <div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="signUpModalLabel" aria-hidden="true" id>
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h1 class="modal-title fs-5" id="signUpModalLabel">
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
               <div class="col-xl-4">

                 <div class=" sign_upsec">
                   <div class=" profile-card pt-4 text-center">

                     <div id="carouselExampleIndicators" class="carousel slide">
                       <div class="carousel-indicators">
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                       </div>
                       <div class="carousel-inner">
                         <div class="carousel-item active">
                           <img src="../assets/img/signup.png" class="d-block w-100" alt="slider">
                         </div>
                         <div class="carousel-item">
                           <img src="../assets/img/signup.png" class="d-block w-100" alt="slider">
                         </div>
                         <div class="carousel-item">
                           <img src="../assets/img/signup.png" class="d-block w-100" alt="slider">
                         </div>
                       </div>
                       <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button> -->
                     </div>
                   </div>




                 </div>
               </div>

               <div class="col-lg-7">
                 <div class="">
                   <div class=" mb-3">
                     <div class="heading_sec">
                       <h2 class="main_heading">Sign up</h2>
                     </div>
                     <p>Let’s get you all st up so you can access your personal account.</p>
                   </div>
                   <form>
                     <div class="row g-3">
                       <div class="col-md-6">
                         <div class="form-floating mb-1">
                           <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
                           <label for="floatingInput">First Name</label>
                         </div>

                       </div>
                       <div class="col-md-6">
                         <div class="form-floating mb-1">
                           <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
                           <label for="floatingInput">Last Name</label>
                         </div>

                       </div>

                       <div class="col-md-6">
                         <div class="form-floating mb-1">
                           <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                           <label for="floatingInput">Email</label>
                         </div>

                       </div>
                       <div class="col-md-6">
                         <div class="form-floating mb-1">
                           <input type="email" class="form-control" id="floatingInput" placeholder="Phone Number">
                           <label for="floatingInput">Phone Number</label>
                         </div>

                       </div>
                       <div class="col-12">
                         <div class="form-floating mb-1">
                           <input type="password" class="form-control" id="floatingInput" placeholder="Phone Number">
                           <label for="floatingInput">Change Password </label>
                         </div>
                       </div>
                       <div class="col-12">
                         <div class="form-floating mb-1">
                           <input type="password" class="form-control" id="floatingInput" placeholder="Phone Number">
                           <label for="floatingInput">Confirm Password </label>
                         </div>
                       </div>

                       <div class="col-12">
                         <div class="form-check">
                           <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                           <label class="form-check-label" for="rememberMe"><strong>I agree to all the </strong> <span><a href="#" class="text-danger"> Terms</a></span> <strong>and</strong> <span><a href="#" class="text-danger"> Privacy Policies</a></span> </label>
                         </div>
                       </div>
                       <div class="col-12">
                         <div class="row">
                           <div class="col-md-12">
                             <button type="submit" class="btn btn-dark w-100 py-3">Create account</button>
                           </div>
                         </div>
                       </div>

                       <div class="col-12 text-center small_text mt-4">

                         <p>Already have an account? <a href="login.php">Login</a></p>

                         <h6><span>Or Sign up with</span></h6>

                       </div>

                       <div class="col-12">
                         <div class="row">
                           <div class="col-md-12">
                             <button type="submit" class="btn bg-transparent border-primary w-100 ">
                               <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14.1323 6.77545H13.6289V6.74951H8.00391V9.24951H11.5361C11.0208 10.7048 9.63609 11.7495 8.00391 11.7495C5.93297 11.7495 4.25391 10.0704 4.25391 7.99951C4.25391 5.92857 5.93297 4.24951 8.00391 4.24951C8.95984 4.24951 9.82953 4.61014 10.4917 5.1992L12.2595 3.43139C11.1433 2.39107 9.65015 1.74951 8.00391 1.74951C4.55234 1.74951 1.75391 4.54795 1.75391 7.99951C1.75391 11.4511 4.55234 14.2495 8.00391 14.2495C11.4555 14.2495 14.2539 11.4511 14.2539 7.99951C14.2539 7.58045 14.2108 7.17139 14.1323 6.77545Z" fill="#FFC107" />
                                 <path d="M2.47461 5.09045L4.52805 6.59639C5.08367 5.22076 6.4293 4.24951 8.00398 4.24951C8.95992 4.24951 9.82961 4.61014 10.4918 5.1992L12.2596 3.43139C11.1434 2.39107 9.65023 1.74951 8.00398 1.74951C5.60336 1.74951 3.52148 3.10482 2.47461 5.09045Z" fill="#FF3D00" />
                                 <path d="M8.004 14.2497C9.61838 14.2497 11.0853 13.6319 12.1943 12.6272L10.2599 10.9904C9.61136 11.4836 8.81883 11.7504 8.004 11.7497C6.37838 11.7497 4.99807 10.7132 4.47807 9.2666L2.43994 10.8369C3.47432 12.861 5.57494 14.2497 8.004 14.2497Z" fill="#4CAF50" />
                                 <path d="M14.1343 6.77545H13.6309V6.74951H8.00586V9.24951H11.538C11.2915 9.94214 10.8475 10.5474 10.2609 10.9904L10.2618 10.9898L12.1962 12.6267C12.0593 12.7511 14.2559 11.1245 14.2559 7.99951C14.2559 7.58045 14.2127 7.17139 14.1343 6.77545Z" fill="#1976D2" />
                               </svg>

                             </button>
                           </div>
                         </div>
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
 </div>

 <!-- signup/register modal ends -->


 <!-- Modal for chooseRole -->
 <div class="modal fade" id="chooseRole" tabindex="-1" aria-labelledby="chooseRoleLabel" aria-hidden="true" id>
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h1 class="modal-title fs-5" id="chooseRoleLabel">
           <a href="index.php" class="logo d-flex align-items-center">
             <img src="../assets/img/logo.png" alt="" class="img-fluid">
             <span class=" d-md-block d-sm-none d-none">Programmer Plan</span>
           </a>
         </h1>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
         <div class="row mb-3">
           <div class="col-lg-12 mx-auto">

             <div class=" mb-4">
               <div class="heading_sec">
                 <span>
                   <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M10.7604 12.0634L6.54639 7.84932L10.7604 3.63525" stroke="#313131" stroke-width="0.936458" stroke-linecap="round" stroke-linejoin="round" />
                   </svg>
                   <small>
                     <a href="signup.php" class="text-black">Back to Register/SignUp</a>
                   </small>
                 </span>
                 <h2 class="main_heading mt-3 mb-3">Select your Role</h2>
               </div>
               <p>To select your Project we need to customize your Prefrence </p>
             </div>

             <!-- custom radio selects -->
             <div class="radio-tile-group">
               <a href="#" data-bs-toggle="modal" data-bs-target="#signUpModal">
                 <div class="input-container">
                   <input id="walk" class="radio-button" type="radio" name="radio" />
                   <div class="radio-tile">
                     <div class="icon walk-icon">
                       <!-- <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 0h24v24H0z" fill="none" />
                      <path d="M13.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM9.8 8.9L7 23h2.1l1.8-8 2.1 2v6h2v-7.5l-2.1-2 .6-3C14.8 12 16.8 13 19 13v-2c-1.9 0-3.5-1-4.3-2.4l-1-1.6c-.4-.6-1-1-1.7-1-.3 0-.5.1-.8.1L6 8.3V13h2V9.6l1.8-.7" />
                    </svg> -->

                       <svg width="24" height="24" viewBox="0 0 800 800" fill="#000000" xmlns="http://www.w3.org/2000/svg">
                         <g clip-path="url(#clip0_534_88)">
                           <path d="M572.244 197.056C574.171 195.385 576.435 194.149 578.883 193.433C581.33 192.717 583.904 192.537 586.427 192.906C588.903 193.256 591.269 194.156 593.351 195.541C595.433 196.925 597.178 198.759 598.459 200.906C599.943 203.869 600.788 207.111 600.937 210.422C602.018 223.377 599.517 236.38 593.708 248.009C590.968 253.886 586.993 259.104 582.054 263.305C578.041 266.558 573.254 268.716 568.159 269.568L565.78 269.935C564.64 274.202 563.359 277.798 562.73 279.705C558.681 290.695 536.013 328.74 507.493 342.58C507.422 352.18 507.234 363.172 510.58 371.479C516.305 385.607 547.142 403.41 549.267 404.333C549.267 404.333 532.515 468.766 452.848 468.766C351.543 468.766 355.674 401.85 355.674 401.85C357.799 400.927 383.817 385.607 389.533 371.479C393.341 362.052 392.567 349.144 392.631 338.745C382.526 332.367 373.523 324.39 365.976 315.126C355.242 301.959 347.41 286.673 342.994 270.269L338.473 269.57C333.378 268.718 328.591 266.56 324.578 263.307C319.639 259.106 315.664 253.889 312.924 248.011C307.115 236.382 304.614 223.379 305.695 210.424C305.845 207.114 306.688 203.872 308.171 200.908C309.452 198.761 311.198 196.927 313.28 195.543C315.363 194.159 317.729 193.258 320.205 192.908C322.728 192.539 325.302 192.719 327.749 193.435C330.197 194.151 332.461 195.387 334.388 197.058C334.388 197.058 345.65 91.4175 453.839 91.4175C562.029 91.4175 572.244 197.056 572.244 197.056Z" fill="white" />
                           <path d="M590.406 116.986C589.402 112.645 588.096 108.379 586.498 104.22C580.618 89.2001 571.611 71.8638 553.37 61.8523L531.964 45.7574C510.611 10.4009 471.251 3.48979 437.693 5.83553C397.851 8.6305 369.455 19.3213 343.563 49.7341C305.832 94.0509 304.776 152.675 319.032 193.134C319.377 193.035 319.728 192.961 320.083 192.913C322.587 192.547 325.141 192.725 327.57 193.435C329.999 194.146 332.246 195.373 334.158 197.031L352.842 176.703C360.654 165.594 382.805 138.058 399.644 134.692C411.682 132.287 424.513 134.893 437.001 134.391C459.639 133.482 478.361 122.76 498.439 114.937C501.113 113.897 503.81 112.905 506.543 111.998C508.053 111.389 509.68 111.122 511.306 111.217C513.173 111.577 514.865 112.556 516.108 113.996C539.421 136.746 561.314 169.444 565.266 203.553C568.871 200.271 572.461 197.031 572.461 197.031C574.372 195.373 576.619 194.146 579.048 193.435C581.477 192.725 584.031 192.547 586.535 192.913C587.063 192.989 587.586 193.099 588.1 193.243C595.885 169.119 595.653 139.195 590.406 116.986Z" fill="#7A7473" />
                           <path d="M502.175 342.972C501.8 351.16 502.347 359.364 503.806 367.43C505.135 373.293 507.981 378.704 512.06 383.122C519.387 391.442 528.879 398.057 538.193 403.974C540.873 405.815 543.677 407.468 546.585 408.923C547.81 409.593 549.246 409.768 550.597 409.414C551.948 409.06 553.112 408.202 553.852 407.017C554.552 405.798 554.744 404.353 554.387 402.993C554.031 401.634 553.154 400.469 551.947 399.75C548.798 398.173 545.766 396.373 542.873 394.364C537.437 390.942 532.234 387.164 527.299 383.053C522.665 379.121 517.898 375.002 515.557 369.68C512.058 361.725 512.739 351.591 512.801 342.972C512.852 336.136 502.23 336.129 502.179 342.972H502.175Z" fill="#211715" />
                           <path d="M387.324 341.819C387.368 350.124 387.811 358.784 385.514 366.856C383.637 372.291 380.307 377.108 375.885 380.783C371.5 384.88 366.778 388.6 361.769 391.905C358.994 393.927 356.059 395.72 352.994 397.267C351.786 397.985 350.908 399.149 350.552 400.509C350.195 401.869 350.388 403.314 351.089 404.532C351.822 405.724 352.986 406.587 354.339 406.942C355.693 407.297 357.131 407.116 358.354 406.438C361.774 404.709 365.041 402.692 368.118 400.407C373.927 396.534 379.381 392.151 384.414 387.311C389.666 382.522 393.577 376.445 395.758 369.68C398.314 360.693 397.997 351.065 397.946 341.819C397.911 334.985 387.289 334.97 387.324 341.819Z" fill="#211715" />
                           <path d="M323.478 189.744C308.72 145.359 315.232 93.2056 344.975 56.3221C359.392 38.4414 377.64 24.5417 399.719 17.7147C410.953 14.3731 422.517 12.2606 434.208 11.4144C444.95 10.4061 455.767 10.5173 466.486 11.7464C478.297 13.0834 489.747 16.6528 500.225 22.2646C511.401 28.4753 520.761 37.4973 527.378 48.4373C530.937 54.2619 540.127 48.9308 536.551 43.0753C523.523 21.7512 502.307 8.11048 478.045 2.99189C454.627 -1.95187 429.331 -0.409437 406.123 4.98356C382.422 10.466 360.917 22.9501 344.404 40.8137C325.836 60.725 313.27 85.4766 308.155 112.217C303.013 138.999 304.764 166.649 313.245 192.568C315.392 199.023 325.653 196.257 323.487 189.744H323.478Z" fill="#211715" />
                           <path d="M357.431 179.374C365.39 167.845 374.834 157.416 385.521 148.357C390.889 143.931 396.364 140.422 403.072 139.45C413.773 137.901 424.694 139.963 435.441 139.74C456.105 139.297 474.568 130.561 493.252 122.727C498.227 120.642 503.257 118.557 508.415 116.973C510.365 116.371 510.887 116.362 512.354 117.752C514.054 119.361 515.674 121.056 517.298 122.749C523.974 129.712 530.105 137.178 535.635 145.082C547.963 162.797 557.78 183.176 560.099 204.859C560.139 206.255 560.711 207.583 561.699 208.57C562.686 209.558 564.014 210.13 565.41 210.17C566.816 210.16 568.162 209.598 569.156 208.604C570.15 207.61 570.712 206.264 570.721 204.859C568.1 183.816 560.657 163.662 548.97 145.967C543.224 136.985 536.772 128.475 529.673 120.518C526.453 116.891 523.134 113.293 519.591 109.976C514.961 105.643 509.967 105.233 504.1 107.218C483.847 114.078 464.893 125.807 443.381 128.558C431.856 130.032 420.342 128.007 408.794 128.387C400.124 128.436 391.664 131.062 384.492 135.934C370.092 145.761 358.239 159.865 348.248 174.019C347.549 175.238 347.357 176.683 347.713 178.042C348.069 179.402 348.946 180.567 350.153 181.286C351.376 181.968 352.815 182.15 354.17 181.795C355.524 181.44 356.689 180.575 357.42 179.381L357.431 179.374Z" fill="#211715" />
                           <path d="M550.696 66.4375C565.375 74.6388 574.574 88.7088 580.733 103.992C587.31 120.312 589.295 138.292 588.806 155.775C588.563 166.734 586.978 177.621 584.088 188.195C582.244 194.787 592.497 197.602 594.329 191.019C599.735 170.732 600.962 149.559 597.936 128.783C595.79 111.161 589.594 94.2744 579.834 79.4453C573.737 70.3025 565.594 62.7059 556.049 57.2582C550.074 53.9188 544.712 63.0915 550.687 66.4287L550.696 66.4375Z" fill="#211715" />
                           <path d="M284.034 794.773C284.145 791.785 284.233 789.152 284.344 786.961C283.68 748.128 282.08 695.544 279.73 641.826L278.612 643.287L274.93 648.098C264.887 660.778 243.922 685.55 230.533 697.265C217.185 708.941 196.303 716.095 178.728 713.292C151.362 708.866 139.395 682.83 128.221 657.43C112.153 620.898 100.73 581.607 89.3064 545.117C112.195 540.138 148.643 523.43 171.531 511.392C180.573 533.628 188.547 553.438 197.666 574.8C214.084 532.249 218.309 508.982 234.417 466.911C237.407 459.104 239.649 452.084 245.354 445.963C250.709 440.223 257.795 436.64 264.949 433.407C286.935 423.471 339.606 403.311 366.257 391.361C371.143 379.514 378.412 368.799 387.612 359.879C402.477 374.747 419.859 386.863 438.953 395.665C440.015 396.147 441.201 396.738 441.544 397.853C441.712 398.86 441.499 399.893 440.949 400.752C440.105 402.144 439.165 403.475 438.136 404.736L461.372 404.707C460.348 403.457 459.413 402.137 458.573 400.757C458.023 399.897 457.812 398.864 457.98 397.858C458.323 396.751 459.509 396.152 460.571 395.669C479.664 386.867 497.047 374.751 511.912 359.883C520.59 368.26 527.536 378.26 532.357 389.316C555.731 398.672 615.344 421.596 637.799 432.446C645.013 435.932 652.92 439.061 658.379 444.919C664.201 451.157 667.578 459.544 670.63 467.511C686.86 509.891 693.678 551.511 702.53 597.737H631.21C628.473 665.494 625.939 740.214 624.893 791.723C624.87 792.764 624.87 793.781 624.848 794.777L284.034 794.773Z" fill="white" />
                           <path d="M458.194 790.779C469.83 777.986 480.739 764.551 490.869 750.536C493.861 746.178 496.417 743.826 496.7 740.562C496.808 736.302 496.56 732.041 495.959 727.822C489.734 657.872 480.503 548.525 468.615 446.47C468.959 442.303 469.889 438.206 471.377 434.299C473.09 429.041 476.67 416.978 474.785 421.269C472.871 418.952 470.981 416.653 469.202 414.477C466.09 410.669 463.322 407.232 461.379 404.711L438.143 404.74C436.202 407.259 433.442 410.684 430.342 414.477C429.098 415.998 427.802 417.575 426.48 419.182C427.49 424.597 429.435 430.36 430.705 435.799C430.926 436.879 431.205 437.917 431.475 438.997C432.146 441.302 432.534 443.68 432.63 446.078C424 540.05 412.897 656.204 405.136 736.581C404.593 739.629 404.837 742.765 405.847 745.692C407.171 748.241 408.749 750.651 410.556 752.884C420.337 766.436 431.139 779.223 442.865 791.133C444.814 793.123 447.347 794.44 450.095 794.895C451.615 794.82 453.102 794.432 454.466 793.756C455.829 793.081 457.038 792.131 458.017 790.967L458.194 790.779Z" fill="#59B5C6" />
                           <path d="M434.265 451.062C445.357 451.062 456.448 450.816 467.54 450.812C468.948 450.812 470.299 450.252 471.295 449.256C472.291 448.26 472.851 446.909 472.851 445.501C472.851 444.092 472.291 442.741 471.295 441.745C470.299 440.749 468.948 440.19 467.54 440.19C456.448 440.19 445.357 440.435 434.265 440.44C432.857 440.44 431.506 440.999 430.51 441.995C429.514 442.991 428.954 444.342 428.954 445.751C428.954 447.159 429.514 448.51 430.51 449.506C431.506 450.502 432.857 451.062 434.265 451.062Z" fill="#211715" />
                           <path d="M421.444 421.076C422.851 427.917 424.984 434.602 426.598 441.398C428.054 447.537 426.567 454.249 425.991 460.469C424.789 473.49 423.58 486.511 422.364 499.533C419.847 526.531 417.31 553.522 414.752 580.505C409.994 630.744 405.191 680.978 400.343 731.208C399.714 737.709 398.705 744.063 402.102 750.018C405.925 756.096 410.186 761.887 414.851 767.345C419.277 772.975 423.89 778.455 428.691 783.786C430.957 786.304 433.259 788.79 435.595 791.243C437.848 793.95 440.513 796.285 443.491 798.163C446.468 799.79 449.917 800.336 453.25 799.708C456.584 799.079 459.597 797.315 461.777 794.715C466.119 790.115 470.173 785.184 474.258 780.355C482.714 770.36 490.453 759.932 498.227 749.416C499.871 747.427 501.066 745.105 501.73 742.611C502.186 739.82 502.235 736.978 501.876 734.173C501.398 728.692 500.854 723.217 500.369 717.737C499.394 706.717 498.421 695.696 497.45 684.676C495.219 659.421 492.944 634.171 490.623 608.926C488.01 580.748 485.273 552.578 482.411 524.417C480.946 510.107 479.433 495.796 477.872 481.486C477.083 474.257 476.277 467.028 475.455 459.799C475.045 456.203 474.633 452.607 474.218 449.011C473.896 445.511 474.344 441.984 475.531 438.676C477.08 433.599 478.808 428.58 480.123 423.433C481.815 416.807 471.574 413.979 469.881 420.609C468.564 425.757 466.836 430.776 465.287 435.852C464.087 439.263 463.415 442.837 463.295 446.45C463.357 449.829 464.096 453.352 464.479 456.712C466.092 470.827 467.647 484.949 469.144 499.077C472.111 526.987 474.914 554.913 477.553 582.857C482.108 630.682 486.261 678.541 490.515 726.392C490.767 729.238 491.097 732.08 491.318 734.928C491.664 736.92 491.601 738.962 491.134 740.929C489.816 743.226 488.29 745.397 486.573 747.413C484.832 749.89 483.09 752.359 481.276 754.782C473.705 764.898 465.448 774.513 457.099 783.994C455.55 785.746 453.759 788.674 451.376 789.367C449.457 789.922 447.614 788.338 446.271 786.999C441.365 782.09 436.698 776.917 432.152 771.674C427.607 766.432 423.263 761.109 419.113 755.592C417.188 753.032 415.298 750.441 413.419 747.847C411.319 745.518 410.181 742.479 410.233 739.343C410.647 728.318 412.313 717.213 413.371 706.219C414.508 694.381 415.644 682.543 416.779 670.705C419.229 645.141 421.667 619.576 424.093 594.008C426.601 567.6 429.091 541.186 431.563 514.764C432.769 501.864 433.97 488.966 435.168 476.068C435.735 469.956 436.301 463.845 436.866 457.734C437.143 454.735 437.419 451.736 437.693 448.738C437.969 444.979 437.595 441.2 436.587 437.567C434.994 431.121 433.017 424.732 431.679 418.239C430.302 411.547 420.06 414.38 421.437 421.063L421.444 421.076Z" fill="#211715" />
                           <path d="M461.405 399.396L438.227 399.425C436.818 399.425 435.467 399.984 434.471 400.98C433.475 401.976 432.916 403.327 432.916 404.736C432.916 406.144 433.475 407.495 434.471 408.491C435.467 409.487 436.818 410.047 438.227 410.047L461.405 410.018C462.814 410.018 464.165 409.458 465.161 408.462C466.157 407.466 466.716 406.115 466.716 404.707C466.716 403.298 466.157 401.947 465.161 400.951C464.165 399.955 462.814 399.396 461.405 399.396Z" fill="#211715" />
                           <path d="M494.102 443.879C506.696 431.265 516.453 416.305 525.672 401.142C527.885 397.479 530.098 393.801 532.326 390.141C533.712 387.864 535.726 385.509 534.938 382.65C534.128 380.502 533.058 378.46 531.753 376.571C527.411 369.016 521.996 362.13 515.678 356.128C514.671 355.154 513.324 354.609 511.923 354.609C510.521 354.609 509.175 355.154 508.168 356.128C495.497 368.831 480.916 379.472 464.953 387.663C461.487 389.446 456.473 390.761 454.109 394.029C453.086 395.64 452.597 397.533 452.711 399.438C452.826 401.343 453.538 403.164 454.747 404.64C459.263 411.248 464.685 417.334 469.77 423.502C475.374 430.298 481.034 437.047 486.589 443.879C487.589 444.866 488.938 445.42 490.344 445.42C491.75 445.42 493.099 444.866 494.1 443.879C495.067 442.867 495.607 441.522 495.607 440.123C495.607 438.724 495.067 437.379 494.1 436.368C488.446 429.415 482.683 422.548 476.982 415.63C473.743 411.7 470.507 407.763 467.338 403.775C466.32 402.492 463.098 399.349 463.289 397.858L462.567 400.546C462.322 401.049 461.653 400.974 462.607 400.571C463.244 400.301 463.866 399.987 464.495 399.686C465.607 399.168 466.714 398.637 467.814 398.095C470.204 396.914 472.565 395.677 474.896 394.383C479.845 391.639 484.656 388.663 489.329 385.454C498.776 379.024 507.597 371.721 515.676 363.639H508.165C515.123 370.316 520.894 378.128 525.229 386.742V381.38C513.501 400.504 502.569 420.361 486.589 436.368C481.756 441.212 489.264 448.725 494.102 443.879Z" fill="#211715" />
                           <path d="M412.944 436.368C396.964 420.362 386.034 400.505 374.303 381.38V386.742C378.639 378.129 384.409 370.316 391.367 363.639H383.856C391.935 371.721 400.756 379.025 410.204 385.454C414.744 388.564 419.416 391.463 424.221 394.151C426.55 395.452 428.911 396.698 431.302 397.889C432.404 398.435 433.511 398.97 434.622 399.493C435.286 399.801 435.939 400.109 436.6 400.409C436.82 400.504 437.033 400.614 437.238 400.737C437.749 401.034 437.658 400.958 436.963 400.538L436.24 397.858C436.43 399.343 433.208 402.492 432.19 403.775C429.021 407.759 425.785 411.7 422.546 415.63C416.845 422.548 411.083 429.415 405.428 436.368C404.469 437.383 403.935 438.727 403.935 440.123C403.935 441.52 404.469 442.864 405.428 443.879C406.429 444.866 407.778 445.419 409.184 445.419C410.589 445.419 411.938 444.866 412.939 443.879C423.119 431.369 433.83 419.244 443.531 406.356C445.567 404.119 446.761 401.244 446.908 398.223C446.769 392.965 441.878 391.261 437.906 389.329C429.851 385.393 422.11 380.845 414.752 375.724C406.373 369.92 398.544 363.36 391.363 356.128C390.355 355.155 389.009 354.611 387.607 354.611C386.206 354.611 384.86 355.155 383.852 356.128C377.534 362.13 372.12 369.016 367.777 376.571C366.472 378.461 365.403 380.502 364.593 382.65C363.849 385.35 365.626 387.548 366.945 389.716C369.26 393.518 371.548 397.338 373.858 401.142C383.073 416.305 392.834 431.265 405.428 443.879C410.268 448.723 417.781 441.214 412.944 436.368Z" fill="#211715" />
                           <path d="M260.55 443.022C265.903 484.976 268.38 527.336 270.794 569.546C273.68 619.992 275.877 670.471 277.386 720.984C277.78 733.596 278.132 746.21 278.442 758.826C278.732 770.813 279.159 782.792 278.719 794.777C278.466 801.613 289.088 801.602 289.341 794.777C290.137 773.108 288.918 751.275 288.272 729.606C287.534 704.906 286.649 680.213 285.616 655.527C283.556 605.969 281.062 556.408 277.302 506.948C275.68 485.609 273.877 464.258 271.168 443.027C271.125 441.632 270.551 440.306 269.564 439.319C268.578 438.332 267.252 437.759 265.857 437.716C264.45 437.723 263.104 438.285 262.11 439.28C261.115 440.274 260.553 441.62 260.546 443.027L260.55 443.022Z" fill="#211715" />
                           <path d="M630.159 794.773C630.558 770.36 631.308 745.948 632.065 721.544C632.926 693.849 633.885 666.159 634.942 638.471C635.967 611.227 637.073 583.984 638.261 556.744C639.264 533.744 640.352 510.749 641.525 487.757C642.289 473.194 643.01 458.613 644.209 444.076C644.294 443.067 644.38 442.06 644.475 441.053C644.465 439.647 643.902 438.302 642.908 437.308C641.915 436.314 640.569 435.752 639.164 435.742C637.765 435.771 636.431 436.34 635.441 437.33C634.451 438.319 633.882 439.653 633.853 441.053C632.622 454.264 631.989 467.542 631.272 480.789C630.073 502.961 629 525.14 628.053 547.326C626.858 574.247 625.751 601.172 624.733 628.099C623.666 655.965 622.682 683.833 621.781 711.705C620.993 736.343 620.312 760.98 619.738 785.618C619.672 788.67 619.615 791.723 619.566 794.775C619.453 801.613 630.075 801.613 630.188 794.775L630.159 794.773Z" fill="#211715" />
                           <path d="M130.147 402.503C125.19 382.887 111.264 333.941 106.141 327.401C102.463 322.708 98.1075 319.094 90.0323 322.533C83.1102 325.485 84.2322 333.478 85.5422 340.084C86.9829 347.358 95.5581 381.688 100.566 399.509C98.6636 397.373 96.1414 395.886 93.3521 395.254C90.5627 394.622 87.6458 394.878 85.0089 395.986C79.5163 398.491 77.3985 403.173 78.0137 406.557C78.0137 406.557 78.4984 409.213 79.1999 413.017C77.2258 411.944 75.0123 411.387 72.7654 411.4C70.5186 411.412 68.3114 411.993 66.3492 413.087C61.6068 415.628 56.8335 422.426 59.1637 427.33L62.2973 433.905L61.3191 433.101C55.2954 428.147 44.8325 431.196 43.133 437.802C41.8273 442.872 44.0315 448.853 46.853 453.49C47.1894 454.041 47.5479 454.631 47.9263 455.26L48.4773 456.957C52.3035 468.805 59.7634 486.91 70.9123 499.811C76.0907 505.786 82.0723 511.728 86.7682 518.143C91.4641 524.559 92.6348 531.687 94.9274 539.364L95.9476 542.758C108.084 538.275 142.241 525.513 160.416 516.867L159.77 515.048C157.981 506.798 156.007 496.074 157.18 489.085C159.271 481.205 161.905 473.478 165.063 465.962C167.645 459.857 168.775 453.236 168.362 446.62C167.537 439.096 165.59 428.357 160 420.521C158.891 418.994 157.507 417.688 155.919 416.67C155.739 416.539 155.547 416.424 155.346 416.327C148.687 412.244 139.93 412.227 132.386 412.547L131.756 409.339C131.49 407.973 130.93 405.603 130.147 402.503Z" fill="white" />
                           <path d="M136.872 407.911C135.064 398.823 132.346 389.851 129.844 380.938C126.254 368.149 122.525 355.378 118.248 342.799C115.149 333.66 112.069 321.739 102.412 317.333C93.7943 313.4 81.8709 317.886 79.7398 327.559C78.3301 333.95 80.1647 340.679 81.6186 346.92C85.63 364.135 89.9925 381.273 94.7061 398.334C96.5141 404.917 106.765 402.12 104.948 395.508C100.896 380.752 97.1271 365.912 93.5177 351.04C92.3581 346.254 91.1078 341.458 90.2713 336.601C89.8287 334.001 89.3994 330.546 90.5612 328.69C91.4575 327.748 92.5973 327.073 93.854 326.74C95.1107 326.406 96.4351 326.428 97.6803 326.802C98.8193 327.342 99.8256 328.126 100.628 329.099C100.949 329.44 102.053 330.763 101.805 330.427C101.44 329.931 101.996 330.712 102.069 330.843C102.744 332.038 103.337 333.25 103.901 334.503C104.487 335.802 103.739 334.06 104.06 334.875C104.228 335.297 104.401 335.718 104.569 336.138C104.99 337.204 105.397 338.272 105.791 339.345C106.676 341.766 107.528 344.202 108.351 346.648C112.286 358.334 115.767 370.178 119.117 382.042C121.795 391.524 124.709 401.073 126.641 410.748C127.016 412.107 127.914 413.26 129.14 413.956C130.365 414.651 131.816 414.832 133.174 414.457C134.532 414.083 135.686 413.184 136.381 411.959C137.077 410.734 137.257 409.283 136.883 407.925L136.872 407.911Z" fill="#211715" />
                           <path d="M43.3543 458.365C47.7167 472.81 54.4398 486.435 63.2511 498.685C68.5887 505.74 75.0307 511.839 80.5675 518.723C85.8632 525.307 87.4764 532.842 89.8067 540.771C91.7297 547.317 101.978 544.533 100.048 537.947C97.6693 529.846 95.9189 521.558 90.7538 514.658C85.3829 507.475 78.8835 501.296 73.236 494.354C64.1075 483.132 58.0351 469.206 53.5893 455.541C51.4825 449.068 41.2232 451.839 43.3455 458.365H43.3543Z" fill="#211715" />
                           <path d="M138.2 453.259C137.624 449.254 136.325 445.421 135.389 441.495C134.592 437.838 132.439 434.619 129.363 432.486C126.105 430.612 122.451 429.531 118.697 429.333C117.472 429.18 116.256 428.964 115.054 428.684C114.919 428.666 114.788 428.629 114.663 428.576C115.375 429.178 114.052 427.532 113.868 427.118C113.359 426.053 113.226 424.848 113.49 423.699C113.673 422.948 113.958 422.225 114.335 421.55C114.572 421.092 114.882 420.665 115.112 420.204C115.654 419.122 115.322 420.056 115.112 420.173C117.744 419.164 120.523 418.59 123.34 418.474C130.864 417.741 139.348 417.066 146.257 418.567C149.506 419.031 152.536 420.474 154.943 422.705C157.062 425.242 158.663 428.17 159.652 431.325C161.911 437.236 163.098 443.503 163.155 449.832C162.934 459.929 158.065 468.56 154.903 478.027C154.122 480.368 153.354 482.716 152.668 485.089C152.471 485.777 152.265 486.467 152.124 487.169C152.004 487.764 151.951 488.373 151.871 488.974C152.068 487.494 151.69 490.358 151.65 490.893C150.891 499.367 152.883 508.205 154.655 516.444C156.091 523.125 166.333 520.297 164.897 513.62C163.288 506.136 161.493 498.198 162.305 490.497C162.39 489.716 163.005 488.543 162.427 489.532C161.965 490.322 162.372 489.857 162.509 489.408C162.759 488.569 162.969 487.717 163.222 486.879C163.978 484.367 164.802 481.875 165.645 479.392C166.501 476.865 167.384 474.345 168.325 471.848C168.679 470.91 169.037 469.972 169.431 469.047C169.077 469.888 169.239 469.465 169.498 468.956C169.756 468.447 169.982 467.993 170.203 467.5C173.039 461.009 174.243 453.923 173.711 446.86C173.134 438.958 171.223 431.211 168.057 423.949C166.479 420.056 163.973 416.608 160.758 413.905C157.543 411.202 153.716 409.326 149.61 408.44C140.945 406.844 132.08 406.645 123.353 407.852C119.281 408.051 115.262 408.865 111.434 410.266C109.605 411.129 107.98 412.372 106.666 413.91C105.353 415.449 104.382 417.249 103.817 419.191C102.924 421.583 102.608 424.153 102.894 426.69C103.18 429.228 104.06 431.662 105.463 433.796C106.524 435.42 107.946 436.776 109.618 437.758C111.29 438.741 113.166 439.324 115.101 439.462C117.887 439.864 122.888 439.683 124.53 442.385C125.343 444.323 125.911 446.355 126.221 448.433C126.964 450.94 127.546 453.493 127.965 456.074C128.346 457.428 129.246 458.577 130.469 459.272C131.692 459.966 133.139 460.151 134.497 459.785C135.833 459.379 136.961 458.475 137.65 457.261C138.339 456.047 138.536 454.614 138.2 453.259Z" fill="#211715" />
                           <path d="M71.7754 457.466C72.0255 458.351 71.8595 456.515 71.8352 457.769C71.8108 459.024 72.0808 457.302 71.7887 458.212C71.709 458.46 71.1027 460.071 71.5674 459.051C71.3078 459.616 71.0121 460.163 70.6822 460.691C70.5163 460.958 70.3348 461.215 70.16 461.474C70.2064 461.405 70.6623 460.865 70.275 461.326C69.9344 461.737 69.5717 462.129 69.1885 462.501C68.9672 462.707 68.7459 462.897 68.5357 463.092C68.7016 462.943 69.3965 462.574 68.6065 463.016C68.4361 463.112 68.2612 463.22 68.0975 463.324C67.4469 463.74 67.6084 463.457 68.1904 463.324C67.8961 463.393 66.6082 463.727 67.0839 463.64C67.7478 463.519 66.7387 463.665 66.5794 463.676C66.3293 463.689 66.0793 463.698 65.8292 463.7C65.5791 463.702 63.7225 463.581 64.6762 463.7C63.9842 463.602 63.3001 463.454 62.6292 463.258C62.273 463.16 61.0802 462.749 61.3015 462.844C61.5692 462.957 60.3964 462.372 60.1286 462.211C59.8608 462.049 59.5731 461.866 59.3076 461.675C59.5045 461.815 59.987 462.302 59.2943 461.624C58.823 461.164 58.345 460.717 57.8979 460.232C57.4509 459.748 57.0836 459.305 56.6941 458.825C56.1253 458.128 57.0659 459.334 56.517 458.604C56.3511 458.382 56.1851 458.161 56.0236 457.929C55.1583 456.727 54.3417 455.495 53.5472 454.24C52.0547 452.006 50.7164 449.672 49.5418 447.256C49.5285 447.222 49.1722 446.335 49.3935 446.902C49.2873 446.627 49.1855 446.353 49.0903 446.076C48.869 445.432 48.661 444.782 48.4906 444.124C48.3932 443.75 48.3224 443.374 48.2295 443C48.2051 442.903 48.0569 441.962 48.1542 442.726C48.0591 441.984 48.0967 441.245 48.0657 440.513C48.0657 440.387 48.1432 439.455 48.0325 440.291C48.0713 440.023 48.1245 439.756 48.1919 439.493C48.2833 439.226 48.3572 438.954 48.4132 438.678C48.4618 438.165 48.3092 438.961 48.2406 439.065C48.4287 438.784 49.3205 437.534 48.4397 438.539C48.7849 438.145 49.1501 437.789 49.5174 437.432C49.7741 437.176 50.2344 437.058 49.378 437.527C49.6104 437.399 49.8206 437.226 50.0419 437.085C50.2632 436.943 50.5221 436.83 50.7523 436.691C51.5711 436.191 50.2344 436.771 50.8054 436.647C51.3431 436.529 51.8632 436.286 52.4054 436.158C52.6775 436.093 52.963 436.062 53.2308 435.989C53.908 435.804 52.0203 436.018 53.2928 436.005C53.8615 436.005 54.4258 436.005 54.9923 436.005C55.3353 436.005 55.8775 436.242 54.8485 435.97C55.1207 436.04 55.4061 436.076 55.6805 436.144C55.9549 436.213 56.2249 436.315 56.4993 436.383C57.4044 436.605 56.1917 436.085 56.6144 436.414C56.8932 436.636 58.4357 437.572 57.5439 436.87C58.5608 437.826 59.9038 438.358 61.2993 438.358C62.6948 438.358 64.0378 437.826 65.0547 436.87C66.0426 435.87 66.5965 434.521 66.5965 433.115C66.5965 431.709 66.0426 430.36 65.0547 429.359C62.2632 427.117 58.865 425.762 55.2969 425.466C51.7288 425.171 48.1539 425.949 45.0318 427.702C37.9635 431.625 36.3127 439.548 38.2291 446.955C39.3234 450.729 40.9708 454.321 43.1175 457.612C45.0596 460.896 47.2533 464.024 49.679 466.969C52.1409 469.86 55.3446 472.024 58.9453 473.23C62.5459 474.436 66.4072 474.637 70.1135 473.811C77.715 472.041 84.168 462.319 81.9993 454.649C81.6249 453.291 80.7261 452.137 79.5008 451.441C78.2755 450.745 76.824 450.565 75.4656 450.939C74.1071 451.314 72.9531 452.212 72.2573 453.438C71.5616 454.663 71.3811 456.114 71.7555 457.473L71.7754 457.466Z" fill="#211715" />
                           <path d="M84.8251 410.901C78.1862 403.598 66.369 405.316 59.6482 411.468C57.7811 413.082 56.2535 415.051 55.1541 417.261C54.0547 419.471 53.4053 421.877 53.2439 424.34C53.2129 429.054 56.2425 433.513 58.555 437.443C62.3702 443.932 66.9289 450.168 71.2707 456.324C73.0775 459.169 75.2335 461.776 77.6883 464.085C81.3424 466.927 85.9017 468.35 90.5235 468.091C102.197 467.591 108.597 456.161 105.66 445.443C103.857 438.857 93.6061 441.652 95.4164 448.267C95.8526 449.46 95.9879 450.742 95.8103 451.999C95.6328 453.257 95.1478 454.451 94.3984 455.477C93.9798 455.951 93.5075 456.375 92.9909 456.74C92.0401 457.306 90.9383 457.565 89.8353 457.482C88.5796 457.477 87.3338 457.261 86.1507 456.84C85.7089 456.605 85.2537 456.396 84.7875 456.214C84.6945 456.192 84.1236 455.789 84.7875 456.256C85.4956 456.754 84.5463 456.017 84.4688 455.937C82.9659 454.414 81.6155 452.748 80.4368 450.962C77.4028 446.66 74.4308 442.294 71.4455 437.959C69.3041 434.825 67.3389 431.574 65.559 428.222C64.918 427.105 64.3517 425.946 63.8639 424.754C63.9967 425.122 63.8639 424.267 63.8639 424.17C63.9812 423.519 64.2008 422.89 64.5145 422.307C65.1377 421.043 66.0147 419.922 67.0908 419.013C68.1668 418.103 69.4187 417.426 70.7684 417.022C71.8738 416.589 73.0819 416.489 74.2435 416.734C75.4052 416.98 76.4696 417.56 77.3055 418.403C81.9151 423.471 89.4082 415.942 84.8163 410.892L84.8251 410.901Z" fill="#211715" />
                           <path d="M113.788 436.036C113.985 437.289 113.865 438.571 113.44 439.766C113.015 440.961 112.298 442.031 111.354 442.878C110.717 443.493 109.917 443.91 109.048 444.08C108.179 444.25 107.28 444.164 106.459 443.834C104.047 442.297 102.108 440.123 100.856 437.552C98.4769 433.648 96.0316 429.793 93.553 425.947C89.5277 419.671 84.9225 413.171 83.245 405.793C83.245 405.769 83.0105 404.72 83.1632 405.351C83.3159 405.982 83.4066 404.687 83.1831 405.207C82.9596 405.727 83.5726 403.89 83.3491 404.446C83.8043 403.365 84.5581 402.436 85.5222 401.768C86.7129 400.891 88.1219 400.359 89.595 400.229C91.0681 400.1 92.5484 400.378 93.8739 401.033C96.8747 402.452 98.9903 405.771 100.955 408.336C103.217 411.302 105.417 414.342 107.393 417.507C111.004 423.294 120.199 417.967 116.566 412.147C114.102 408.29 111.443 404.562 108.599 400.976C105.742 397.293 102.887 393.54 98.5499 391.524C88.9501 387.061 75.6988 391.243 72.988 402.281C71.8483 406.929 73.6939 411.656 75.5439 415.854C77.8044 420.672 80.4285 425.311 83.3933 429.731C86.3875 434.427 89.2975 439.176 92.285 443.872C94.7655 448.353 98.6358 451.905 103.312 453.994C105.881 454.793 108.611 454.92 111.242 454.363C113.874 453.806 116.319 452.583 118.343 450.812C120.445 448.998 122.09 446.714 123.144 444.146C124.198 441.578 124.632 438.797 124.411 436.029C124.065 429.229 113.441 429.187 113.788 436.029V436.036Z" fill="#211715" />
                           <path d="M367.684 384.917C339.066 398.17 309.304 409.058 280.148 421.165C264.657 427.594 246.42 433.411 236.953 448.218C234.429 452.475 232.349 456.98 230.746 461.662C228.765 466.883 226.778 472.101 224.879 477.352C221.389 487.005 218.143 496.744 215.034 506.526C208.081 528.403 201.362 550.311 193.165 571.768C192.802 573.126 192.987 574.572 193.681 575.794C194.375 577.017 195.522 577.917 196.874 578.301C198.231 578.644 199.668 578.45 200.886 577.759C202.103 577.068 203.006 575.933 203.407 574.592C210.643 555.656 216.797 536.379 222.852 517.039C228.84 497.917 234.802 478.472 242.74 460.051C244.496 455.687 247.109 451.72 250.423 448.382C254.147 445.025 258.367 442.263 262.933 440.194C268.749 437.317 275.043 434.713 280.579 432.4C295.685 426.089 310.897 420.036 326.065 413.889C341.806 407.509 357.631 401.224 373.046 394.085C374.254 393.366 375.13 392.201 375.487 390.841C375.843 389.482 375.651 388.037 374.951 386.818C374.219 385.625 373.054 384.761 371.7 384.406C370.346 384.051 368.908 384.232 367.684 384.912V384.917Z" fill="#211715" />
                           <path d="M216.452 604.451C202.385 573.295 189.521 541.643 176.648 509.98C176.414 509.207 176.011 508.496 175.467 507.899C174.924 507.302 174.253 506.834 173.506 506.53C172.758 506.225 171.951 506.092 171.145 506.14C170.339 506.187 169.554 506.414 168.847 506.804C155.55 513.793 141.982 520.241 128.142 526.148C115.177 531.988 101.703 536.624 87.8902 539.997C86.5388 540.382 85.3928 541.282 84.699 542.504C84.0053 543.726 83.8193 545.172 84.1813 546.529C92.0993 571.843 99.6853 597.273 108.637 622.248C113.218 635.03 118.172 647.675 123.632 660.11C127.562 669.594 132.114 678.809 137.257 687.694C142.235 696.338 148.896 703.895 156.846 709.919C165.43 715.975 175.68 719.222 186.186 719.214C197.914 719.131 209.453 716.248 219.843 710.804C228.716 705.922 236.729 699.618 243.561 692.142C257.695 677.567 270.93 662.146 283.193 645.964C283.896 644.746 284.091 643.3 283.734 641.939C283.377 640.579 282.498 639.414 281.288 638.697C280.064 638.021 278.627 637.842 277.274 638.197C275.922 638.552 274.758 639.413 274.023 640.602L272.018 643.223C271.595 643.774 271.175 644.329 270.75 644.88C270.624 645.042 270.502 645.208 270.376 645.367C271.152 644.378 270.535 645.146 270.106 645.679C267.562 648.864 264.981 652.018 262.36 655.142C255.879 662.907 249.246 670.553 242.368 677.971C236.265 684.554 229.994 691.613 222.591 696.781C213.927 702.875 203.92 706.788 193.42 708.189C184.04 709.592 174.458 707.881 166.143 703.32C158.749 698.711 152.552 692.417 148.059 684.952C142.901 676.604 138.399 667.867 134.595 658.822C129.619 647.633 125.027 636.289 120.819 624.789C111.011 598.098 102.894 570.834 94.4163 543.708L90.7073 550.243C105.114 546.675 119.163 541.797 132.681 535.668C146.782 529.684 160.622 523.119 174.2 515.973L166.4 512.799C179.618 545.31 192.829 577.816 207.273 609.809C207.992 611.017 209.157 611.894 210.516 612.251C211.876 612.607 213.321 612.415 214.54 611.714C215.731 610.98 216.594 609.816 216.948 608.462C217.303 607.109 217.123 605.671 216.446 604.447L216.452 604.451Z" fill="#211715" />
                           <path d="M528.084 393.286C557.087 405.001 586.542 416.079 615.251 428.2C621.197 430.707 627.409 433.38 633.357 436.182C642.123 440.314 651.851 443.927 657.494 452.257C663.912 461.74 667.395 473.424 670.993 484.19C674.779 495.516 678.039 507.012 680.929 518.599C687.568 545.201 692.275 572.231 697.425 599.151C697.81 600.502 698.711 601.648 699.932 602.342C701.154 603.035 702.6 603.222 703.957 602.86C705.299 602.461 706.435 601.558 707.126 600.34C707.818 599.123 708.011 597.685 707.666 596.328C702.953 571.682 698.593 546.945 692.808 522.521C689.985 510.604 686.809 498.767 683.1 487.093C679.713 475.523 675.451 464.228 670.351 453.304C667.899 448.04 664.469 443.291 660.242 439.309C655.868 435.657 650.998 432.644 645.776 430.362C639.337 427.304 632.881 424.303 626.335 421.477C610.088 414.468 593.65 407.894 577.208 401.361C561.783 395.236 546.297 389.265 530.908 383.051C529.55 382.685 528.103 382.87 526.88 383.564C525.657 384.258 524.757 385.407 524.375 386.76C524.035 388.117 524.23 389.553 524.921 390.769C525.612 391.986 526.745 392.89 528.084 393.293V393.286Z" fill="#211715" />
                           <path d="M575.999 200.811C577.269 199.767 578.736 198.99 580.314 198.529C581.891 198.067 583.546 197.93 585.178 198.125C586.81 198.32 588.386 198.844 589.81 199.665C591.234 200.485 592.477 201.586 593.464 202.9C595.174 206.122 595.987 209.744 595.819 213.387C596.04 217.862 595.787 222.348 595.064 226.769C592.393 242.399 584.156 261.457 566.738 264.447C565.385 264.831 564.238 265.732 563.544 266.954C562.849 268.177 562.664 269.624 563.027 270.982C563.429 272.323 564.333 273.457 565.55 274.148C566.768 274.839 568.205 275.033 569.562 274.691C587.6 271.593 598.306 254.553 603.243 238.288C605.84 229.749 606.889 220.815 606.341 211.907C605.775 203.164 603.128 194.938 595.068 190.388C590.874 188.078 586.069 187.118 581.309 187.639C576.549 188.161 572.066 190.138 568.471 193.3C567.486 194.302 566.934 195.651 566.934 197.056C566.934 198.461 567.486 199.809 568.471 200.811C569.481 201.781 570.826 202.322 572.226 202.322C573.626 202.322 574.972 201.781 575.982 200.811H575.999Z" fill="#211715" />
                           <path d="M562.664 256.374C562.374 261.476 561.428 266.52 559.849 271.38C559.311 273.188 558.721 274.981 558.121 276.769C557.922 277.36 557.734 277.955 557.517 278.539C557.368 278.938 556.711 280.405 557.391 278.889C555.114 283.853 552.496 288.653 549.557 293.255C541.22 307.063 530.593 319.351 518.133 329.592C511.278 335.269 503.246 339.351 494.62 341.542C487.961 343.072 490.78 353.318 497.444 351.784C515.083 347.73 529.866 335.061 541.524 321.774C551.508 310.791 559.833 298.408 566.234 285.017C570.395 276.01 572.792 266.29 573.293 256.381C573.514 249.543 562.892 249.552 562.671 256.381L562.664 256.374Z" fill="#211715" />
                           <path d="M338.134 193.3C334.99 190.516 331.149 188.638 327.02 187.868C322.892 187.097 318.631 187.463 314.695 188.925C306.011 192.351 301.669 199.656 300.567 208.645C298.486 226.397 303.018 244.294 313.296 258.917C318.868 267.058 327.387 272.714 337.052 274.691C338.409 275.025 339.842 274.826 341.057 274.137C342.271 273.447 343.176 272.318 343.585 270.982C343.949 269.624 343.764 268.177 343.07 266.954C342.376 265.732 341.228 264.831 339.876 264.447C322.466 261.457 314.23 242.399 311.55 226.769C310.853 222.512 310.594 218.194 310.778 213.883C310.908 210.241 311.07 206.045 313.148 202.9C314.134 201.584 315.376 200.482 316.801 199.66C318.225 198.838 319.801 198.313 321.434 198.118C323.067 197.923 324.722 198.061 326.3 198.524C327.878 198.986 329.346 199.765 330.615 200.811C331.628 201.774 332.972 202.311 334.37 202.311C335.768 202.311 337.112 201.774 338.125 200.811C339.11 199.809 339.662 198.461 339.662 197.056C339.662 195.651 339.11 194.302 338.125 193.3H338.134Z" fill="#211715" />
                           <path d="M334.047 254.666C340.5 291.895 360.676 328.327 395.169 346.294C404.489 351.149 414.648 354.188 425.104 355.247C426.51 355.238 427.855 354.676 428.849 353.681C429.843 352.687 430.406 351.342 430.415 349.936C430.385 348.537 429.815 347.204 428.826 346.214C427.836 345.225 426.503 344.656 425.104 344.625C389.548 340.941 361.844 309.052 350.68 277.021C347.865 268.817 345.729 260.396 344.291 251.842C343.906 250.49 343.006 249.344 341.784 248.65C340.562 247.956 339.116 247.771 337.758 248.133C336.417 248.534 335.283 249.438 334.591 250.655C333.9 251.872 333.705 253.309 334.047 254.666Z" fill="#211715" />
                           <path d="M689.936 675.808C701.709 665.323 747.232 625.132 757.21 615.138C749.022 606.66 733.359 598.419 714.557 596.668C698.428 594.797 682.099 595.666 666.259 599.238C650.286 603.221 629.597 613.091 618.515 625.793C604.956 612.856 584.878 607.142 566.691 606.54C548.276 606.01 529.949 609.3 512.868 616.202C498.973 621.757 487.733 629.726 480.025 644.513C490.683 653.829 540.782 688.163 551.869 696.96L689.936 675.808Z" fill="#59B5C6" />
                           <path d="M477.578 616.264C474.845 618.848 472.312 621.636 470 624.603C474.083 628.869 478.424 632.88 482.999 636.612L484.272 637.557C491.639 627.097 501.341 620.823 512.874 616.213C529.956 609.311 548.282 606.021 566.698 606.551C584.884 607.151 604.963 612.865 618.521 625.804C629.604 613.093 650.293 603.232 666.266 599.249C682.106 595.677 698.435 594.808 714.564 596.679C724.273 597.567 733.731 600.265 742.447 604.633L742.813 604.27C745.638 601.586 751.29 595.936 756.09 590.848C738.714 577.71 728.97 575.747 708.481 573.755C692.886 572.237 675.169 571.726 659.924 575.526C644.679 579.325 625.127 585.692 614.295 597.742C602.099 589.144 585.033 584.271 566.703 583.667C548.287 583.136 529.96 586.426 512.879 593.329C505.029 596.276 497.598 600.236 490.774 605.109C486.168 608.575 481.762 612.3 477.578 616.264Z" fill="white" />
                           <path d="M646.467 648.598C645.822 648.079 645.173 647.566 644.519 647.06C636.161 640.605 630.102 639.596 621.504 644.404L616.904 648.399C613.392 644.672 610.413 641.583 609.141 640.481C607.308 638.823 605.078 637.666 602.666 637.123C600.255 636.58 597.745 636.67 595.378 637.383C589.95 639.403 587.677 642.371 587.677 646.916C587.677 646.916 587.456 648.56 587.161 650.78C584.285 647.735 581.691 645.11 579.713 643.338C578.04 641.837 569.88 637.805 564.443 641.897C559.654 645.495 558.911 650.306 561.688 654.54C561.978 655.03 562.244 655.536 562.482 656.053L561.267 655.418C559.728 654.566 558.025 654.053 556.271 653.913C554.518 653.773 552.755 654.008 551.1 654.604C549.444 655.2 547.936 656.143 546.674 657.369C545.413 658.595 544.428 660.077 543.785 661.714C542.926 665.63 543.419 669.721 545.184 673.321C548.702 680.121 564.069 697.177 572.366 705.942C591.37 719.386 621.699 710.023 645.991 704.376C649.405 703.533 652.657 702.134 655.617 700.235C664.706 693.928 669.382 686.176 676.804 677.977C679.957 674.937 682.753 671.548 685.138 667.875C687.555 663.155 689.549 658.018 688.201 652.889C687.651 650.201 686.142 647.806 683.954 646.15C680.34 643.767 675.505 644.904 671.497 646.54C665.508 648.987 659.939 652.357 654.993 656.527C652.355 653.673 649.505 651.022 646.467 648.598Z" fill="white" />
                           <path d="M652.951 695.652C647.826 699.193 641.304 700.034 635.375 701.463C628.243 703.185 621.093 704.876 613.854 706.086C601.566 708.142 587.611 709.116 576.544 702.364C570.69 698.794 565.348 707.978 571.182 711.537C584.305 719.541 600.276 718.89 614.908 716.627C622.607 715.429 630.199 713.646 637.77 711.82C644.721 710.145 652.3 708.985 658.313 704.834C659.502 704.098 660.363 702.934 660.717 701.582C661.072 700.23 660.893 698.793 660.218 697.568C659.499 696.361 658.334 695.485 656.974 695.129C655.615 694.772 654.17 694.964 652.951 695.663V695.652Z" fill="#211715" />
                           <path d="M663.15 658.153C657.709 650.764 650.904 644.483 643.103 639.651C639.577 637.439 635.524 636.208 631.363 636.086C626.94 636.249 622.631 637.528 618.836 639.806C617.619 640.516 616.735 641.681 616.378 643.044C616.02 644.407 616.218 645.856 616.929 647.072C617.64 648.288 618.805 649.173 620.167 649.53C621.53 649.888 622.979 649.689 624.196 648.978C625.442 648.22 626.781 647.625 628.179 647.208C628.94 646.97 629.718 646.793 630.507 646.677C629.573 646.801 631.29 646.692 631.613 646.699C631.742 646.699 633.063 646.799 632.397 646.723C631.821 646.657 632.826 646.81 632.93 646.832C633.605 646.979 634.27 647.167 634.922 647.396C635.143 647.476 636.028 647.863 635.417 647.578C635.763 647.737 636.103 647.907 636.442 648.084C637.252 648.507 638.038 648.97 638.805 649.474C644.608 653.275 649.737 658.016 653.98 663.504C654.72 664.688 655.885 665.545 657.236 665.899C658.586 666.253 660.021 666.078 661.247 665.41C662.456 664.692 663.334 663.528 663.69 662.168C664.047 660.808 663.854 659.363 663.153 658.144L663.15 658.153Z" fill="#211715" />
                           <path d="M638.675 663.765C632.861 658.293 627.65 652.087 622.188 646.267C619.48 643.391 616.793 640.45 613.945 637.699C611.661 635.374 608.861 633.622 605.772 632.583C602.683 631.545 599.392 631.251 596.168 631.724C592.441 632.215 589.008 634.013 586.481 636.796C583.954 639.58 582.496 643.169 582.366 646.927C582.213 653.765 592.835 653.763 592.988 646.927C593.019 645.486 592.891 645.632 593.625 644.521C593.183 645.185 594.354 643.8 594.577 643.636C594.287 643.857 595.823 642.957 596.095 642.828C597.24 642.28 598.499 642.01 599.768 642.042C601.037 642.073 602.281 642.404 603.398 643.008C606.89 644.679 609.634 648.441 612.232 651.196C618.535 657.857 624.494 665.016 631.175 671.303C636.15 675.985 643.676 668.49 638.686 663.792L638.675 663.765Z" fill="#211715" />
                           <path d="M555.631 693.218C536.157 677.818 515.158 664.301 495.171 649.574C492.769 647.803 490.383 646.014 488.014 644.205C487.39 643.725 488.689 644.732 488.089 644.263L487.304 643.65C486.861 643.307 486.436 642.964 486.007 642.616C485.257 642.012 484.515 641.399 483.794 640.768L484.624 647.204C488.478 639.644 494.136 633.151 501.097 628.298C508.905 623.301 517.435 619.535 526.389 617.134C545.991 611.32 567.594 609.541 587.487 614.983C597.634 617.545 607.001 622.549 614.773 629.557C615.776 630.539 617.124 631.088 618.528 631.088C619.932 631.088 621.279 630.539 622.283 629.557C633.569 616.822 650.693 608.74 666.954 604.551C677.522 601.966 688.389 600.813 699.264 601.121C709.715 600.962 720.131 602.364 730.168 605.281C738.908 607.895 746.897 612.562 753.466 618.893V611.382C745.815 619.013 737.632 626.143 729.603 633.366C719.173 642.748 708.706 652.085 698.204 661.38C694.197 664.938 690.19 668.496 686.185 672.053C681.069 676.607 688.604 684.098 693.696 679.564C712.462 662.854 731.345 646.272 749.883 629.307C753.623 625.886 757.385 622.474 760.976 618.893C761.952 617.886 762.497 616.54 762.497 615.138C762.497 613.736 761.952 612.389 760.976 611.382C746.358 596.509 725.186 591.649 705.077 590.68C683.165 589.246 661.25 593.436 641.412 602.851C631.375 607.464 622.328 613.979 614.77 622.036H622.281C606.635 607.344 584.714 601.351 563.649 601.165C551.447 601.089 539.29 602.64 527.498 605.777C517.005 608.307 506.947 612.382 497.651 617.866C488.261 623.752 480.601 632.026 475.455 641.842C474.879 642.86 474.649 644.038 474.798 645.199C474.948 646.359 475.47 647.44 476.285 648.279C484.571 655.48 493.81 661.712 502.717 668.101C513.961 676.167 525.289 684.123 536.52 692.198C538.942 693.937 541.358 695.689 543.767 697.453C544.726 698.159 545.682 698.865 546.644 699.582L547.855 700.501C548.415 700.923 546.908 699.755 548.14 700.722C549.156 701.679 550.5 702.212 551.896 702.212C553.292 702.212 554.635 701.679 555.651 700.722C556.639 699.722 557.193 698.372 557.193 696.967C557.193 695.561 556.639 694.211 555.651 693.211L555.631 693.218Z" fill="#211715" />
                           <path d="M485.679 632.023C486.766 632.848 485.648 631.976 485.237 631.629C484.683 631.164 484.135 630.692 483.592 630.213C482.218 629.009 480.864 627.778 479.523 626.541C477.464 624.791 475.54 622.886 473.769 620.845V628.356C485.963 612.602 503.301 601.856 522.012 595.626C541.666 588.78 562.756 587.126 583.238 590.824C593.393 592.666 603.06 596.583 611.632 602.331C612.647 602.919 613.828 603.157 614.991 603.006C616.154 602.856 617.236 602.326 618.068 601.499C624.347 595.118 631.981 590.23 640.405 587.197C649.267 583.612 658.478 580.964 667.89 579.294C678.81 577.716 689.876 577.423 700.863 578.423C709.916 578.797 718.917 579.988 727.755 581.981C737.124 584.706 745.852 589.279 753.426 595.429L752.35 587.086C748.024 591.654 743.622 596.159 739.073 600.508C734.118 605.237 741.635 612.741 746.583 608.019C751.135 603.675 755.537 599.167 759.861 594.597C760.418 594.014 760.838 593.314 761.09 592.548C761.341 591.782 761.418 590.97 761.315 590.17C761.212 589.37 760.931 588.604 760.494 587.927C760.056 587.25 759.472 586.679 758.786 586.256C751.24 580.266 742.707 575.636 733.571 572.576C724.139 570.061 714.465 568.559 704.714 568.095C693.109 566.944 681.415 567.032 669.829 568.358C659.47 569.797 649.311 572.426 639.553 576.192C628.931 580.2 618.338 585.502 610.563 593.989L616.999 593.159C599.68 581.131 577.247 577.464 556.552 578.431C534.643 579.456 511.531 585.586 492.818 597.29C482.683 603.566 473.7 611.535 466.263 620.852C465.322 621.876 464.8 623.216 464.8 624.607C464.8 625.998 465.322 627.338 466.263 628.363C470.42 633.192 475.145 637.501 480.335 641.198C481.553 641.9 483 642.094 484.36 641.738C485.72 641.381 486.885 640.502 487.602 639.292C488.279 638.068 488.459 636.63 488.104 635.277C487.749 633.924 486.887 632.76 485.697 632.025L485.679 632.023Z" fill="#211715" />
                           <path d="M563.958 650.833C560.96 649.185 557.551 648.434 554.137 648.67C550.724 648.905 547.45 650.117 544.706 652.161C542.498 653.752 540.732 655.88 539.574 658.343C538.417 660.806 537.906 663.524 538.091 666.24C538.514 671.862 540.68 677.212 544.287 681.544C547.828 686.304 551.661 690.852 555.574 695.322C559.805 700.169 564.133 704.93 568.557 709.607C573.262 714.586 580.761 707.064 576.068 702.083C567.769 693.638 560.002 684.688 552.812 675.282C551.59 673.746 550.529 672.091 549.643 670.34C549.004 668.809 548.684 667.164 548.704 665.505C548.732 665.083 548.732 664.659 548.704 664.237C548.727 664.055 549.187 662.292 548.888 663.13C548.589 663.969 549.258 662.524 549.362 662.354C550.065 661.205 548.698 662.995 549.698 661.911C550.353 661.118 551.156 660.461 552.064 659.977C553.074 659.447 554.198 659.172 555.339 659.177C556.48 659.181 557.602 659.465 558.608 660.003C559.832 660.679 561.269 660.857 562.622 660.503C563.975 660.148 565.139 659.287 565.875 658.098C566.573 656.879 566.764 655.435 566.408 654.076C566.051 652.717 565.176 651.553 563.969 650.833H563.958Z" fill="#211715" />
                           <path d="M612.823 671.066C607.355 665.142 602.024 659.089 596.584 653.141C593.898 650.2 591.194 647.274 588.416 644.417C586.365 642.061 584.05 639.948 581.516 638.119C573.43 632.981 562.166 633.762 556.84 642.399C550.752 652.273 559.754 661.269 565.652 668.486C572.322 676.804 579.434 684.758 586.958 692.313C591.826 697.117 599.351 689.611 594.469 684.802C588.549 678.964 582.972 672.827 577.65 666.434C574.944 663.181 572.282 659.893 569.599 656.62C568.352 655.135 567.241 653.541 566.28 651.857C566.005 651.415 565.766 650.952 565.565 650.472C565.534 650.381 565.313 649.184 565.371 649.675C565.421 650.118 565.521 648.739 565.357 649.392C565.65 648.161 566.384 647.081 567.422 646.356C568.459 645.631 569.726 645.313 570.983 645.462C572.234 645.644 573.458 645.974 574.632 646.444C574.019 646.192 575.36 646.821 575.634 646.978C575.856 647.102 576.077 647.279 576.314 647.389C577.177 647.805 575.701 646.675 576.106 647.23C576.935 648.147 577.832 649.001 578.788 649.786C579.921 650.908 581.032 652.05 582.134 653.201C584.568 655.734 586.94 658.313 589.306 660.902C594.664 666.771 599.928 672.734 605.31 678.574C609.957 683.609 617.453 676.083 612.821 671.064L612.823 671.066Z" fill="#211715" />
                           <path d="M661.632 658.052C664.763 655.836 668.084 653.904 671.557 652.278C673.912 651.185 677.464 649.43 680.139 650.193C682.363 650.824 683.169 653.734 683.328 655.775C683.277 659.359 682.197 662.852 680.215 665.839C678.531 668.38 676.567 670.722 674.359 672.823C672.007 675.335 669.796 677.964 667.612 680.622C663.417 686.263 658.486 691.318 652.951 695.652C651.763 696.389 650.903 697.553 650.549 698.905C650.194 700.256 650.372 701.693 651.045 702.917C651.764 704.125 652.929 705.002 654.289 705.358C655.649 705.715 657.094 705.522 658.313 704.823C665.95 699.412 671.484 692.406 677.455 685.32C680.082 682.202 682.972 679.332 685.623 676.247C688.758 672.609 691.149 668.392 692.66 663.834C695.59 655.122 693.143 642.767 683.08 640.009C673.972 637.511 663.411 643.878 656.27 648.888C655.082 649.624 654.222 650.789 653.867 652.141C653.512 653.494 653.691 654.93 654.365 656.155C655.085 657.362 656.25 658.238 657.609 658.594C658.968 658.951 660.413 658.759 661.632 658.06V658.052Z" fill="#211715" />
                           <path d="M431.973 292.2C438.942 295.798 446.704 297.59 454.545 297.411C462.578 297.361 470.755 295.803 477.197 290.773C478.186 289.773 478.741 288.423 478.741 287.017C478.741 285.611 478.186 284.261 477.197 283.262C476.184 282.298 474.84 281.761 473.442 281.761C472.044 281.761 470.699 282.298 469.686 283.262C471.257 282.038 469.908 283.069 469.496 283.328C469.038 283.622 468.564 283.895 468.08 284.149C467.746 284.324 466.088 285.019 467.416 284.512C466.767 284.76 466.123 285.01 465.464 285.222C461.703 286.42 457.76 286.944 453.817 286.772C450.056 286.875 446.303 286.37 442.704 285.276C441.989 285.054 441.292 284.806 440.586 284.563C440.365 284.486 440.143 284.366 439.904 284.297C441.212 284.68 440.285 284.468 439.935 284.297C439.06 283.886 438.196 283.454 437.342 283.003C436.118 282.322 434.679 282.14 433.325 282.495C431.971 282.85 430.806 283.715 430.074 284.908C429.379 286.128 429.189 287.572 429.545 288.93C429.901 290.289 430.775 291.454 431.98 292.176L431.973 292.2Z" fill="#211715" />
                           <path d="M452.135 238.651C453.19 242.457 454.034 246.319 454.665 250.218L454.474 248.806C454.549 249.334 454.563 249.87 454.517 250.401L454.707 248.99C454.672 249.234 454.614 249.475 454.532 249.709L455.068 248.439C454.996 248.6 454.911 248.755 454.813 248.901L455.645 247.826C455.533 247.964 455.406 248.089 455.267 248.2L456.34 247.367C456.047 247.551 455.742 247.713 455.426 247.854L456.694 247.319C456.197 247.528 455.677 247.677 455.145 247.761L456.557 247.571C456.075 247.63 455.589 247.63 455.107 247.571L456.519 247.761C455.973 247.686 455.437 247.553 454.891 247.478C453.506 247.156 452.052 247.346 450.797 248.014C450.194 248.366 449.667 248.833 449.245 249.389C448.823 249.944 448.515 250.578 448.338 251.253C448.161 251.927 448.119 252.631 448.214 253.322C448.309 254.013 448.539 254.679 448.891 255.281C449.229 255.88 449.684 256.405 450.23 256.823C450.776 257.242 451.4 257.545 452.067 257.715C453.255 257.875 454.408 258.18 455.608 258.233C457.401 258.245 459.172 257.827 460.77 257.014C461.773 256.567 462.662 255.9 463.371 255.062C464.08 254.224 464.591 253.237 464.867 252.174C465.229 250.429 465.21 248.626 464.811 246.889C464.183 243.165 463.322 239.472 462.364 235.825C461.989 234.466 461.091 233.312 459.865 232.616C458.64 231.921 457.188 231.74 455.83 232.115C454.471 232.489 453.317 233.388 452.622 234.613C451.926 235.838 451.745 237.29 452.12 238.648L452.135 238.651Z" fill="#211715" />
                           <path d="M390.378 206.058C388.446 212.336 389.714 226.776 401.598 228.004C417.31 227.911 418.151 210.453 412.862 202.245C408.529 195.524 395.789 192.729 390.378 206.058Z" fill="#211715" />
                           <path d="M516.245 206.06C518.177 212.336 516.909 226.776 505.025 228.004C489.313 227.911 488.47 210.453 493.761 202.243C498.094 195.524 510.832 192.729 516.245 206.06Z" fill="#211715" />
                         </g>
                         <defs>
                           <clipPath id="clip0_534_88">
                             <rect width="800" height="800" fill="white" />
                           </clipPath>
                         </defs>
                       </svg>

                     </div>
                     <label for="walk" class="radio-tile-label">Teacher</label>
                   </div>
                 </div>
               </a>

               <div class="input-container">
                 <input id="bike" class="radio-button" type="radio" name="radio" />
                 <div class="radio-tile">
                   <div class="icon bike-icon">
                     <!-- <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 0h24v24H0z" fill="none" />
                      <path d="M15.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM5 12c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 8.5c-1.9 0-3.5-1.6-3.5-3.5s1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm5.8-10l2.4-2.4.8.8c1.3 1.3 3 2.1 5.1 2.1V9c-1.5 0-2.7-.6-3.6-1.5l-1.9-1.9c-.5-.4-1-.6-1.6-.6s-1.1.2-1.4.6L7.8 8.4c-.4.4-.6.9-.6 1.4 0 .6.2 1.1.6 1.4L11 14v5h2v-6.2l-2.2-2.3zM19 12c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 8.5c-1.9 0-3.5-1.6-3.5-3.5s1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5z" />
                    </svg> -->

                     <svg width="24" height="24" viewBox="0 0 800 800" fill="#000000" xmlns="http://www.w3.org/2000/svg">
                       <g clip-path="url(#clip0_534_200)">
                         <path d="M357.533 716.74C356.714 683.545 355.281 582.293 352.325 533.186C349.498 486.217 346.423 429.161 343.635 399.312C376.756 399.312 465.734 399.411 494.446 399.422C494.105 405.385 493.785 411.392 493.785 411.392C491.444 442.756 489.41 491.618 486.907 533.186C483.523 589.411 482.136 713.968 481.378 726.516C472.973 729.319 435.501 728.921 419.499 725.595C418.959 725.69 418.433 725.791 418.433 725.791C398.939 729.517 366.255 729.319 357.852 726.516C357.758 724.929 357.653 721.548 357.533 716.74Z" fill="white" />
                         <path d="M465.638 128C462.215 134.406 454.42 145.701 444.876 151.354C444.938 154.735 445.17 158.11 445.571 161.468C445.571 161.468 445.06 182.188 418.518 182.188C391.976 182.188 391.378 161.337 391.378 161.337C391.761 157.9 392 154.063 392.073 151.039C387.439 148.178 383.317 144.559 379.881 140.334C375.114 134.489 371.636 127.703 369.675 120.42L367.664 120.111C365.403 119.733 363.278 118.775 361.497 117.331C359.304 115.466 357.539 113.15 356.322 110.541C353.743 105.378 352.632 99.6055 353.112 93.8541C353.179 92.384 353.554 90.9444 354.213 89.6286C354.781 88.6752 355.556 87.8612 356.481 87.2465C357.405 86.6317 358.455 86.2318 359.554 86.0762C360.675 85.9119 361.818 85.9912 362.905 86.3087C363.992 86.6263 364.997 87.1746 365.853 87.9163C365.853 87.9163 358.372 42.3889 417.976 42.3889C474.6 42.3889 471.452 87.9197 471.452 87.9197C472.307 87.1779 473.312 86.6292 474.398 86.3111C475.485 85.9929 476.627 85.9128 477.747 86.0762C478.847 86.2317 479.897 86.6315 480.822 87.2463C481.747 87.861 482.522 88.6751 483.09 89.6286C483.749 90.9446 484.123 92.3842 484.189 93.8541C484.669 99.6055 483.559 105.378 480.979 110.541C479.764 113.15 477.999 115.466 475.807 117.331C474.026 118.778 471.9 119.738 469.637 120.118C469.637 120.118 469.254 120.176 468.581 120.289C468.07 122.18 467.507 123.775 467.228 124.621C466.771 125.781 466.24 126.909 465.638 128Z" fill="white" />
                         <path d="M462.802 28.3736C470.893 32.8137 474.887 40.503 477.495 47.1665C481.313 56.9225 482.356 73.3353 478.347 86.1922C478.148 86.1462 477.947 86.107 477.742 86.0764C476.622 85.913 475.48 85.9931 474.393 86.3112C473.307 86.6294 472.302 87.178 471.447 87.9199L465.526 81.4744C464.197 78.1571 463.205 75.5111 461.876 72.1989C460.804 69.3047 459.534 66.4874 458.077 63.7667C456.816 61.7085 454.248 62.2503 451.894 61.8363C444.256 60.4903 445.867 58.8086 440.197 53.8949C432.51 62.172 424.324 65.5813 413.807 68.8713C406.386 71.0162 398.7 72.106 390.976 72.1086C383.977 76.1585 373.737 79.3242 367.45 81.2938L365.853 87.9165C364.998 87.1746 363.993 86.6259 362.907 86.3078C361.82 85.9897 360.678 85.9096 359.558 86.0729C359.328 86.1063 359.1 86.1529 358.876 86.2127L358.207 84.4492C354.288 74.0782 354.484 57.2906 357.631 45.5002C360.875 33.3742 368.482 21.6043 379.25 16.6872L388.911 10.0815C398.319 1.94583 426.306 2.52682 435.907 5.95659C445.068 9.22789 452.037 15.0276 455.376 21.8088L462.802 28.3736Z" fill="#7A7473" />
                         <path d="M473.861 90.329C474.315 89.969 474.837 89.704 475.395 89.5495C475.954 89.3951 476.537 89.3544 477.112 89.4299C477.686 89.5054 478.24 89.6955 478.74 89.989C479.239 90.2824 479.675 90.6733 480.02 91.1383C480.7 92.5534 480.998 94.1216 480.886 95.6875C480.948 97.526 480.822 99.3662 480.508 101.179C479.315 107.71 475.986 115.525 468.733 116.825C467.864 117.07 467.128 117.648 466.681 118.432C466.235 119.216 466.115 120.144 466.347 121.016C466.603 121.878 467.182 122.608 467.963 123.052C468.744 123.497 469.667 123.622 470.539 123.402C481.53 121.432 486.771 109.016 487.599 99.0559C488.021 93.953 487.621 88.1089 483.206 84.8018C481.116 83.2905 478.573 82.5374 475.997 82.6669C473.421 82.7964 470.966 83.8007 469.038 85.514C468.405 86.1566 468.05 87.0222 468.05 87.9241C468.05 88.8259 468.405 89.6915 469.038 90.3341C469.686 90.9556 470.549 91.3025 471.447 91.3025C472.345 91.3025 473.208 90.9556 473.856 90.3341L473.861 90.329Z" fill="#211715" />
                         <path d="M466.15 114.254C465.946 116.999 465.363 119.703 464.417 122.287C464.262 122.759 464.076 123.23 463.941 123.707C463.878 123.92 463.601 124.523 463.981 123.65C463.739 124.213 463.47 124.766 463.199 125.313C461.517 128.583 459.572 131.709 457.382 134.662C452.303 141.629 445.409 149.006 436.71 151.048C432.45 152.048 434.249 158.621 438.522 157.619C448.868 155.191 456.896 146.73 462.982 138.491C468.24 131.37 472.599 123.303 472.965 114.254C473.135 109.868 466.32 109.875 466.15 114.254Z" fill="#211715" />
                         <path d="M368.264 85.5089C366.335 83.7963 363.88 82.7925 361.304 82.663C358.728 82.5335 356.184 83.2861 354.094 84.7967C349.676 88.0953 349.28 93.9564 349.703 99.0507C350.529 109.011 355.772 121.427 366.761 123.396C367.633 123.611 368.553 123.484 369.334 123.04C370.114 122.596 370.694 121.87 370.954 121.011C371.187 120.139 371.067 119.211 370.62 118.427C370.174 117.643 369.437 117.065 368.569 116.82C361.314 115.52 357.985 107.703 356.794 101.174C356.496 99.4623 356.368 97.7256 356.411 95.989C356.297 94.4037 356.552 92.8137 357.154 91.3427C357.48 90.8396 357.908 90.4103 358.41 90.0825C358.913 89.7547 359.478 89.5356 360.07 89.4393C360.662 89.343 361.267 89.3717 361.848 89.5234C362.428 89.6752 362.97 89.9467 363.439 90.3204C364.09 90.937 364.952 91.2806 365.849 91.2806C366.746 91.2806 367.608 90.937 368.259 90.3204C368.891 89.6774 369.245 88.812 369.245 87.9104C369.245 87.0089 368.891 86.1434 368.259 85.5004L368.264 85.5089Z" fill="#211715" />
                         <path d="M364.698 113.773C366.359 124.507 370.85 134.604 377.71 143.026C385.036 151.693 394.721 157.965 406.134 159.197C407.036 159.191 407.9 158.83 408.538 158.192C409.175 157.554 409.536 156.691 409.542 155.789C409.522 154.892 409.157 154.036 408.522 153.402C407.887 152.767 407.032 152.401 406.134 152.381C396.327 151.323 388.132 145.055 382.048 137.63C376.049 130.316 372.878 121.173 371.271 111.962C371.025 111.094 370.448 110.357 369.663 109.911C368.879 109.464 367.95 109.344 367.078 109.577C366.217 109.833 365.488 110.412 365.044 111.193C364.599 111.974 364.474 112.897 364.693 113.768L364.698 113.773Z" fill="#211715" />
                         <path d="M458.314 20.0794C447.963 -0.32883 420.609 -2.23709 400.793 1.6101C395.593 2.38539 390.675 4.46964 386.502 7.66713C383.135 10.4954 387.981 15.2951 391.313 12.4906C394.249 10.4647 397.59 9.10039 401.105 8.49177C405.694 7.52725 410.368 7.02779 415.058 7.00094C423.406 6.85101 432.046 7.3417 439.582 11.2468C445.047 13.8826 449.541 18.1756 452.424 23.5142C454.407 27.433 460.288 23.9811 458.307 20.0742L458.314 20.0794Z" fill="#211715" />
                         <path d="M377.531 13.7446C365.264 19.5035 357.453 32.4422 354.199 45.1815C352.531 51.9418 351.747 58.8901 351.868 65.8521C351.778 72.4807 352.815 79.0763 354.935 85.3573C356.438 89.4464 363.028 87.6745 361.507 83.5461C357.409 72.4254 357.85 58.9653 360.629 47.5856C363.408 36.2059 370.016 24.7751 380.971 19.6296C384.937 17.7656 381.482 11.8892 377.531 13.7446Z" fill="#211715" />
                         <path d="M461.08 31.316C468.988 35.7902 473.59 44.4046 475.76 52.9884C478.296 63.2316 478.174 73.9525 475.408 84.1357C474.239 88.3696 480.812 90.1756 481.979 85.9468C485.12 74.3796 485.189 62.1933 482.18 50.5911C479.504 40.5387 473.765 30.6566 464.52 25.431C460.699 23.2672 457.26 29.1538 461.08 31.316Z" fill="#211715" />
                         <path d="M439.408 49.6642C433.552 56.3545 425.99 61.3309 417.529 64.063C409.082 67.1634 400.151 68.7384 391.153 68.7144C386.765 68.6275 386.765 75.4428 391.153 75.5297C400.975 75.5661 410.725 73.8383 419.937 70.4285C429.306 67.3649 437.689 61.8616 444.226 54.4842C447.072 51.1737 442.272 46.3315 439.408 49.6642Z" fill="#211715" />
                         <path d="M402.877 59.8871C397.638 64.0223 391.916 67.5075 385.839 70.2667C379.635 73.3811 373.182 75.9725 366.547 78.0139C362.354 79.2662 364.139 85.8514 368.358 84.5872C375.55 82.3629 382.544 79.5442 389.269 76.1601C395.853 73.1097 402.04 69.2664 407.692 64.7157C408.324 64.0729 408.679 63.2073 408.679 62.3056C408.679 61.404 408.324 60.5384 407.692 59.8956C407.044 59.2738 406.181 58.9265 405.283 58.9265C404.385 58.9265 403.521 59.2738 402.873 59.8956L402.877 59.8871Z" fill="#211715" />
                         <path d="M439.149 57.5733C441.892 60.5407 445.227 62.9001 448.938 64.4993C450.898 64.9871 452.891 65.3372 454.901 65.5471C455.071 65.5914 455.432 65.7584 455.145 65.5199C455.335 65.773 455.497 66.0467 455.627 66.336C456.138 67.2748 456.581 68.2511 457.01 69.2325C460.019 76.0852 462.907 82.9992 467.403 89.0699C467.878 89.8297 468.625 90.3794 469.492 90.6065C470.358 90.8336 471.279 90.7209 472.065 90.2915C472.841 89.8312 473.404 89.084 473.633 88.2116C473.862 87.3392 473.738 86.4118 473.288 85.6299C471.037 82.4473 469.032 79.0969 467.293 75.6081C466.851 74.7562 466.419 73.9162 466.003 73.0524C465.798 72.6321 465.599 72.2096 465.403 71.7848C465.291 71.5445 465.023 70.9329 465.274 71.5241C464.405 69.4693 463.621 67.3821 462.708 65.3461C461.996 63.1512 460.639 61.2224 458.813 59.8121C456.888 58.6297 454.678 58.8682 452.613 58.5053C449.3 57.9226 446.244 55.0977 443.979 52.7498C440.928 49.5893 436.111 54.4111 439.161 57.5699L439.149 57.5733Z" fill="#211715" />
                         <path d="M388.575 152.172C388.526 155.343 388.281 158.508 387.841 161.649C387.565 164.026 387.17 166.387 386.657 168.724C386.604 168.937 386.546 169.15 386.486 169.36C386.457 169.455 386.215 170.161 386.393 169.689C386.57 169.217 386.29 169.898 386.239 169.992C386.115 170.229 385.97 170.444 385.83 170.674C386.072 170.283 386.016 170.474 385.764 170.733C385.593 170.904 385.423 171.074 385.253 171.244C384.685 171.783 385.679 171.074 384.934 171.464C384.679 171.601 384.437 171.764 384.178 171.899C383.605 172.197 382.891 172.446 382.104 172.773C381.065 173.202 380.028 173.638 378.993 174.08C378.217 174.539 377.653 175.286 377.424 176.159C377.195 177.032 377.319 177.96 377.77 178.741C378.242 179.504 378.989 180.056 379.856 180.283C380.724 180.511 381.645 180.397 382.431 179.965C382.859 179.782 382.707 179.849 382.366 179.992L383.125 179.673C383.62 179.465 384.115 179.259 384.612 179.056C385.806 178.632 386.967 178.12 388.084 177.523C390.527 176.09 392.323 173.771 393.1 171.048C393.7 168.631 394.131 166.175 394.389 163.698C394.969 159.883 395.307 156.034 395.401 152.175C395.401 151.272 395.042 150.405 394.403 149.766C393.763 149.127 392.897 148.768 391.993 148.768C391.089 148.768 390.222 149.127 389.583 149.766C388.944 150.405 388.585 151.272 388.585 152.175L388.575 152.172Z" fill="#211715" />
                         <path d="M441.368 152.172C441.466 156.244 441.836 160.306 442.475 164.329C442.707 166.814 443.174 169.271 443.872 171.667C444.363 173.057 445.127 174.336 446.12 175.426C447.112 176.517 448.312 177.399 449.65 178.019C450.698 178.513 451.797 178.896 452.873 179.32C453.422 179.537 453.97 179.756 454.518 179.976C454.777 180.08 455.029 180.188 455.293 180.29C456.123 180.622 454.887 180.111 455.327 180.302C456.114 180.729 457.034 180.841 457.9 180.614C458.766 180.387 459.513 179.838 459.989 179.08C460.438 178.298 460.562 177.371 460.334 176.498C460.105 175.625 459.542 174.878 458.767 174.417C456.998 173.65 455.203 172.931 453.4 172.25C452.907 172.056 452.431 171.819 451.979 171.543C451.792 171.434 451.354 171.123 451.747 171.43C451.516 171.247 451.299 171.047 451.096 170.832C451.028 170.762 450.553 170.159 450.829 170.542C451.105 170.926 450.633 170.191 450.587 170.108C450.481 169.917 450.386 169.721 450.296 169.524C450.648 170.3 450.321 169.503 450.277 169.353C449.702 167.105 449.291 164.817 449.047 162.509C448.529 159.084 448.24 155.628 448.183 152.165C448.183 151.261 447.824 150.395 447.185 149.756C446.546 149.117 445.679 148.758 444.775 148.758C443.872 148.758 443.005 149.117 442.366 149.756C441.727 150.395 441.368 151.261 441.368 152.165V152.172Z" fill="#211715" />
                         <path d="M488.721 399.43C453.926 399.401 367.736 399.312 339.882 399.312C340.683 382.905 345.062 335.714 345.961 327.344L319.963 218.486C321.401 208.897 325.395 200.005 329.053 197.747C331.609 195.638 334.342 193.752 337.221 192.109C351.898 183.89 367.016 176.485 382.506 169.927C384.552 165.703 387.337 161.878 390.729 158.633C397.306 165.213 404.998 170.575 413.447 174.47C413.918 174.683 414.442 174.943 414.594 175.437H421.861C422.012 174.943 422.542 174.683 423.007 174.47C431.457 170.576 439.148 165.215 445.726 158.636C448.411 161.173 450.704 164.095 452.529 167.307C470.293 174.444 487.574 182.73 504.262 192.113C507.094 193.646 512.27 195.878 515.708 201.685C522.269 210.267 541.737 270.983 543.31 285.49C544.262 293.886 544.209 302.365 543.15 310.749C538.968 332.285 514.866 327.616 507.572 327.366C503.462 327.019 499.378 326.409 495.346 325.539C495.579 331.877 495.785 337.485 495.785 337.485C496.455 355.499 498.563 391.886 498.786 399.442L488.721 399.43Z" fill="#59B5C6" />
                         <path d="M416.569 316.359C416.85 341.531 417.085 366.705 417.272 391.881C417.291 394.278 417.318 396.673 417.32 399.071C417.32 403.455 424.135 403.463 424.135 399.071C424.12 379.886 423.835 360.698 423.646 341.514C423.564 333.128 423.477 324.743 423.384 316.359C423.336 311.975 416.521 311.965 416.569 316.359Z" fill="#211715" />
                         <path d="M414.971 178.048C414.984 199.664 415.388 221.285 415.625 242.9C415.674 247.282 422.49 247.294 422.44 242.9C422.203 221.285 421.8 199.664 421.786 178.048C421.786 173.664 414.971 173.655 414.971 178.048Z" fill="#211715" />
                         <path d="M427.775 729.992C427.536 729.769 427.306 729.544 427.081 729.319V726.788C439.015 728.075 451.019 728.587 463.019 728.321C463.105 728.566 463.156 728.706 463.156 728.706C463.745 731.101 464.512 733.449 465.451 735.729C464.884 737.062 463.918 738.185 462.685 738.944C460.446 740.132 457.929 740.7 455.397 740.59C445.184 740.66 435.32 736.875 427.775 729.992Z" fill="white" />
                         <path d="M375.176 737.237C374.82 736.777 374.528 736.27 374.309 735.731C375.257 733.389 376.031 730.981 376.623 728.525C388.668 728.846 400.72 728.244 412.674 726.726C412.663 728.205 412.663 729.314 412.663 729.314C405.054 736.618 394.893 740.662 384.346 740.583C381.813 740.693 379.297 740.125 377.057 738.937C376.332 738.489 375.695 737.913 375.176 737.237Z" fill="white" />
                         <path d="M339.592 788.983C339.395 788.724 339.209 788.457 339.032 788.182C337.964 786.284 337.322 784.176 337.151 782.005C336.98 779.833 337.283 777.651 338.04 775.608C339.582 771.538 341.76 767.738 344.493 764.35C350.718 755.846 357.299 747.617 364.235 739.661C366.938 736.562 369.993 733.33 374.037 732.567C373.814 733.812 373.986 735.095 374.527 736.238C375.069 737.38 375.953 738.326 377.057 738.942C379.297 740.13 381.813 740.698 384.346 740.588C394.893 740.667 405.054 736.623 412.663 729.319C412.616 737.838 412.701 740.672 412.663 749.194C412.774 751.27 412.522 753.349 411.917 755.338C410.166 760.075 404.973 762.356 400.807 765.208C389.964 772.627 384.254 786.165 372.893 792.759C368.786 795.092 364.177 796.399 359.456 796.569C354.736 796.738 350.044 795.765 345.781 793.732C343.38 792.647 341.262 791.021 339.592 788.983Z" fill="#7A7473" />
                         <path d="M500.149 788.983C500.347 788.724 500.534 788.457 500.71 788.182C501.778 786.284 502.42 784.176 502.592 782.005C502.763 779.833 502.46 777.651 501.703 775.608C500.16 771.538 497.983 767.738 495.251 764.35C489.024 755.846 482.443 747.617 475.507 739.661C472.805 736.562 469.748 733.33 465.707 732.567C465.929 733.812 465.757 735.095 465.215 736.238C464.673 737.381 463.789 738.326 462.684 738.942C460.444 740.13 457.928 740.699 455.395 740.588C444.848 740.667 434.688 736.624 427.08 729.319C427.126 737.838 427.04 740.672 427.08 749.194C426.969 751.27 427.221 753.349 427.826 755.338C429.577 760.075 434.771 762.356 438.938 765.208C449.779 772.627 455.489 786.165 466.85 792.759C470.957 795.093 475.567 796.4 480.288 796.569C485.009 796.738 489.7 795.765 493.964 793.732C496.364 792.646 498.481 791.021 500.149 788.983Z" fill="#7A7473" />
                         <path d="M339.882 402.72C360.231 402.72 380.58 402.732 400.928 402.757L473.339 402.817C481.852 402.817 490.364 402.822 498.878 402.831C503.263 402.831 503.272 396.016 498.878 396.016C480.415 396.016 461.952 396.003 443.487 395.978C418.823 395.958 394.158 395.938 369.492 395.918C359.621 395.912 349.749 395.907 339.879 395.905C335.493 395.905 335.484 402.72 339.879 402.72H339.882Z" fill="#211715" />
                         <path d="M373.355 727.576C372.742 730.092 371.944 732.56 370.969 734.959C370.849 735.397 370.817 735.856 370.875 736.307C370.934 736.758 371.082 737.193 371.31 737.586C371.766 738.366 372.514 738.933 373.388 739.162C374.262 739.391 375.192 739.264 375.972 738.808L376.662 738.274C377.08 737.858 377.381 737.34 377.538 736.772C378.512 734.372 379.309 731.904 379.923 729.387C380.151 728.501 380.029 727.561 379.582 726.762C379.244 726.182 378.743 725.716 378.14 725.42C377.538 725.124 376.862 725.013 376.197 725.1C375.532 725.187 374.907 725.468 374.401 725.909C373.896 726.349 373.533 726.929 373.355 727.576Z" fill="#211715" />
                         <path d="M406.513 727.544C406.525 729.347 406.543 731.149 406.557 732.952C406.568 733.853 406.925 734.715 407.554 735.361C407.87 735.678 408.246 735.929 408.659 736.1C409.073 736.272 409.516 736.36 409.964 736.36C410.411 736.36 410.855 736.272 411.268 736.1C411.682 735.929 412.057 735.678 412.374 735.361C413.002 734.715 413.36 733.853 413.372 732.952C413.359 731.149 413.34 729.347 413.328 727.544C413.315 726.643 412.958 725.781 412.329 725.135C411.69 724.496 410.824 724.137 409.92 724.137C409.017 724.137 408.15 724.496 407.511 725.135C406.882 725.781 406.525 726.643 406.513 727.544Z" fill="#211715" />
                         <path d="M459.869 729.611C460.486 732.103 461.283 734.547 462.255 736.924C462.525 737.763 463.079 738.482 463.82 738.96C464.601 739.416 465.53 739.543 466.404 739.314C467.278 739.085 468.026 738.518 468.482 737.738C468.717 737.348 468.869 736.913 468.928 736.461C468.987 736.009 468.951 735.55 468.823 735.112C467.852 732.735 467.054 730.291 466.437 727.798C466.197 726.927 465.62 726.186 464.834 725.74C464.048 725.294 463.117 725.178 462.245 725.419C461.374 725.659 460.634 726.236 460.187 727.022C459.741 727.808 459.626 728.739 459.866 729.611H459.869Z" fill="#211715" />
                         <path d="M426.412 727.292L426.373 732.914C426.383 733.816 426.741 734.679 427.371 735.323C428.01 735.962 428.877 736.321 429.78 736.321C430.684 736.321 431.55 735.962 432.189 735.323C432.815 734.676 433.172 733.815 433.188 732.914L433.227 727.292C433.216 726.39 432.858 725.527 432.229 724.881C431.912 724.564 431.536 724.313 431.123 724.142C430.709 723.971 430.266 723.882 429.819 723.882C429.371 723.882 428.928 723.971 428.514 724.142C428.101 724.313 427.725 724.564 427.408 724.881C426.783 725.53 426.427 726.391 426.412 727.292Z" fill="#211715" />
                         <path d="M340.252 399.459C342.656 425.483 344.084 451.595 345.639 477.689C347.161 503.222 348.887 528.757 349.979 554.314C350.928 576.539 351.539 598.784 352.086 621.013C352.618 642.662 353.083 664.311 353.482 685.961C353.737 698.894 353.845 711.847 354.364 724.775C354.388 725.356 354.412 725.937 354.448 726.516C354.468 727.257 354.72 727.973 355.169 728.563C355.617 729.153 356.24 729.586 356.949 729.803C360.596 730.803 364.347 731.378 368.126 731.517C373.399 731.928 378.69 732.04 383.987 732.009C395.836 732.094 407.669 731.113 419.342 729.077C423.648 728.266 421.825 721.696 417.531 722.506C406.453 724.406 395.226 725.306 383.987 725.194C378.857 725.223 373.718 725.118 368.6 724.738C365.269 724.657 361.962 724.151 358.76 723.23L361.263 726.516C360.595 715.271 360.653 703.967 360.43 692.716C360.011 671.613 359.568 650.51 359.103 629.408C358.571 606.792 357.975 584.177 357.09 561.573C356.143 537.404 354.555 513.266 353.132 489.122C351.514 461.69 349.992 434.23 347.713 406.84C347.508 404.379 347.293 401.919 347.067 399.459C347.044 398.562 346.677 397.709 346.043 397.075C345.409 396.441 344.556 396.075 343.659 396.051C342.757 396.058 341.894 396.419 341.257 397.056C340.619 397.694 340.258 398.557 340.252 399.459Z" fill="#211715" />
                         <path d="M418.596 728.888C427.251 730.473 436.018 731.36 444.815 731.541C453.961 731.998 463.126 731.922 472.263 731.313C475.651 731.202 479.016 730.698 482.288 729.812C482.997 729.595 483.62 729.162 484.068 728.572C484.517 727.982 484.769 727.266 484.789 726.525C485.411 716.048 485.367 705.505 485.576 695.015C485.972 675.187 486.382 655.36 486.808 635.533C487.307 613.653 487.866 591.775 488.65 569.905C489.436 548 490.778 526.137 491.949 504.253C493.451 476.141 494.71 448.028 496.593 419.937C496.784 417.092 496.985 414.247 497.196 411.401C497.522 407.026 490.705 407.048 490.381 411.401C488.355 438.662 487.144 465.977 485.714 493.271C484.505 516.371 483.004 539.456 482.107 562.571C481.271 584.196 480.693 605.829 480.18 627.462C479.694 647.925 479.262 668.389 478.884 688.854C478.645 700.851 478.543 712.864 478.054 724.854C478.032 725.411 478.008 725.968 477.974 726.525L480.475 723.239C479.412 723.565 478.326 723.809 477.226 723.969C476.149 724.14 474.912 724.274 473.295 724.414C469.278 724.755 465.243 724.895 461.214 724.953C451.809 725.106 442.402 724.787 433.029 723.997C428.794 723.681 424.58 723.12 420.409 722.317C416.128 721.441 414.296 728.009 418.596 728.888Z" fill="#211715" />
                         <path d="M416.463 453.933C415.698 462.309 415.782 470.801 415.722 479.197C415.627 491.562 415.678 503.924 415.753 516.289C415.858 533.618 416.046 550.946 416.02 568.277C415.989 587.614 415.952 606.95 415.908 626.285C415.868 647.821 415.848 669.357 415.848 690.893C415.848 698.671 415.867 706.448 415.904 714.227C415.925 717.888 415.776 721.616 416.056 725.271C416.058 725.915 416.217 726.548 416.518 727.117C416.819 727.686 417.254 728.173 417.785 728.537C418.567 728.988 419.495 729.113 420.368 728.884C421.241 728.655 421.989 728.091 422.449 727.314C422.882 726.528 422.997 725.606 422.769 724.738C422.541 723.871 421.989 723.124 421.225 722.652L422.449 723.876C422.754 724.441 422.876 726.252 422.854 724.831C422.854 724.256 422.82 723.68 422.81 723.102C422.771 721.018 422.755 718.933 422.74 716.847C422.689 709.661 422.679 702.472 422.67 695.286C422.649 674.344 422.664 653.402 422.718 632.46C422.752 612.564 422.79 592.669 422.834 572.775C422.863 556.715 422.747 540.66 422.631 524.602C422.471 502.493 421.908 480.264 423.002 458.17C423.072 456.758 423.157 455.345 423.285 453.936C423.279 453.035 422.918 452.171 422.28 451.534C421.643 450.896 420.779 450.535 419.878 450.529C418.98 450.548 418.124 450.913 417.489 451.548C416.854 452.183 416.489 453.039 416.47 453.936L416.463 453.933Z" fill="#211715" />
                         <path d="M454.393 171.701C465.703 176.301 476.759 181.472 487.6 187.086C492.712 189.736 497.77 192.506 502.855 195.219C506.818 197.333 510.351 199.47 512.766 203.397C515.061 207.127 520.958 203.707 518.649 199.957C515.866 195.625 511.951 192.138 507.327 189.874C502.096 187.109 496.919 184.251 491.667 181.525C480.096 175.515 468.275 170.05 456.204 165.129C455.332 164.895 454.403 165.014 453.618 165.46C452.834 165.907 452.257 166.645 452.013 167.515C451.795 168.386 451.921 169.308 452.366 170.088C452.81 170.869 453.538 171.448 454.398 171.706L454.393 171.701Z" fill="#211715" />
                         <path d="M502.19 399.575C501.587 378.717 499.941 357.888 499.171 337.035L498.747 325.536C498.587 321.164 491.771 321.144 491.931 325.536C492.685 345.992 493.746 366.427 494.789 386.873C495.005 391.107 495.252 395.343 495.375 399.58C495.501 403.955 502.318 403.974 502.19 399.58V399.575Z" fill="#211715" />
                         <path d="M504.655 212.957C502.757 224.788 500.305 236.524 498.596 248.386C497.063 259.021 496.271 269.738 495.49 280.45C495.17 284.825 501.987 284.805 502.306 280.45C503.062 270.079 503.776 259.679 505.286 249.384C506.989 237.798 509.375 226.328 511.227 214.768C511.439 213.897 511.31 212.978 510.867 212.199C510.423 211.419 509.699 210.839 508.841 210.577C507.97 210.344 507.041 210.463 506.256 210.91C505.472 211.356 504.895 212.093 504.65 212.962L504.655 212.957Z" fill="#211715" />
                         <path d="M342.554 327.344C340.509 346.399 338.919 365.524 337.456 384.631C337.081 389.521 336.716 394.414 336.474 399.312C336.256 403.696 343.071 403.684 343.29 399.312C344.312 378.8 346.402 358.309 348.335 337.866C348.675 334.358 348.994 330.848 349.369 327.344C349.363 326.442 349.002 325.578 348.364 324.941C347.726 324.303 346.863 323.942 345.961 323.936C345.064 323.956 344.208 324.321 343.573 324.956C342.938 325.591 342.573 326.446 342.554 327.344Z" fill="#211715" />
                         <path d="M382.372 166.321C368.247 172.194 354.552 178.91 341.08 186.148C337.595 187.897 334.223 189.862 330.983 192.033C328.488 193.59 326.223 195.488 324.253 197.672C319.866 203.233 317.76 210.7 316.676 217.58C316.464 218.451 316.593 219.37 317.037 220.15C317.48 220.929 318.204 221.51 319.062 221.773C319.934 222.006 320.863 221.886 321.647 221.44C322.432 220.993 323.009 220.256 323.255 219.387C324.176 213.531 325.72 206.409 329.673 201.748C331.658 199.745 333.901 198.015 336.343 196.606C339.368 194.643 342.647 193.028 345.818 191.334C358.341 184.631 371.069 178.341 384.188 172.889C385.044 172.625 385.768 172.044 386.211 171.265C386.654 170.486 386.784 169.567 386.573 168.696C386.33 167.826 385.753 167.088 384.968 166.641C384.183 166.195 383.254 166.076 382.382 166.31L382.372 166.321Z" fill="#211715" />
                         <path d="M436.179 194.133C443.475 186.884 448.253 178.102 453.642 169.331C451.638 165.336 448.96 161.717 445.726 158.633C439.148 165.214 431.455 170.576 423.004 174.47C422.534 174.683 422.009 174.943 421.857 175.437C421.783 175.883 421.877 176.34 422.12 176.72C423.579 178.823 425.148 180.849 426.819 182.788C430.019 186.696 434.033 191.491 436.179 194.133Z" fill="white" />
                         <path d="M400.275 194.133C392.98 186.884 388.202 178.102 382.813 169.331C384.817 165.336 387.495 161.717 390.729 158.633C397.306 165.213 404.998 170.575 413.447 174.47C413.918 174.683 414.442 174.943 414.594 175.437C414.668 175.883 414.575 176.34 414.332 176.72C412.872 178.823 411.304 180.849 409.633 182.788C406.436 186.696 402.422 191.491 400.275 194.133Z" fill="white" />
                         <path d="M438.589 196.543C444.093 190.686 448.881 184.195 452.851 177.208C453.874 175.514 454.896 173.815 455.918 172.125C456.648 171.204 457.025 170.052 456.98 168.878C456.716 167.776 456.244 166.735 455.589 165.811C453.585 162.269 451.071 159.041 448.127 156.23C447.48 155.606 446.616 155.257 445.717 155.257C444.818 155.257 443.953 155.606 443.307 156.23C439.598 159.955 435.504 163.274 431.092 166.131C428.947 167.522 426.737 168.813 424.464 169.985C422.309 171.1 419.295 171.888 418.567 174.534C418.397 175.491 418.454 176.474 418.734 177.404C419.014 178.334 419.509 179.185 420.179 179.888C421.655 181.846 423.21 183.744 424.762 185.64C427.749 189.286 430.787 192.893 433.762 196.544C434.404 197.178 435.269 197.534 436.171 197.534C437.073 197.534 437.939 197.178 438.58 196.544C439.201 195.896 439.547 195.033 439.547 194.135C439.547 193.238 439.201 192.375 438.58 191.726C436.098 188.674 433.569 185.659 431.067 182.621C429.658 180.917 428.25 179.201 426.87 177.467C426.482 176.978 426.088 176.49 425.72 175.986C425.558 175.765 425.407 175.497 425.229 175.289C424.926 174.935 425.304 174.868 425.26 175.436L424.795 177.155C424.227 177.621 424.201 177.706 424.718 177.41L425.248 177.169C425.78 176.916 426.313 176.657 426.839 176.404C427.918 175.869 428.983 175.308 430.034 174.722C432.201 173.512 434.308 172.206 436.355 170.803C440.572 167.924 444.513 164.661 448.127 161.054H443.307C446.312 163.951 448.809 167.334 450.691 171.06V167.61C445.549 176 440.758 184.693 433.762 191.724C430.671 194.837 435.491 199.657 438.589 196.543Z" fill="#211715" />
                         <path d="M402.684 191.724C395.688 184.693 390.897 176 385.755 167.61V171.05C387.638 167.324 390.134 163.941 393.139 161.044H388.319C391.934 164.65 395.875 167.914 400.091 170.793C402.136 172.198 404.242 173.504 406.41 174.712C407.377 175.248 408.353 175.764 409.339 176.26C409.867 176.525 410.398 176.783 410.932 177.034C411.196 177.159 411.461 177.281 411.728 177.4C412.241 177.696 412.216 177.61 411.651 177.145L411.186 175.426C411.149 174.94 411.554 174.886 411.217 175.279C411.07 175.449 410.954 175.659 410.823 175.843C410.426 176.395 409.999 176.925 409.576 177.457C408.196 179.189 406.789 180.902 405.38 182.611C402.877 185.648 400.348 188.664 397.864 191.716C397.249 192.367 396.906 193.229 396.906 194.125C396.906 195.021 397.249 195.883 397.864 196.534C398.506 197.167 399.372 197.522 400.274 197.522C401.176 197.522 402.042 197.167 402.684 196.534C405.599 192.956 408.573 189.417 411.501 185.846C413.072 183.929 414.641 182.007 416.144 180.034C416.85 179.319 417.375 178.445 417.677 177.486C417.979 176.527 418.048 175.51 417.879 174.519C417.172 171.95 414.347 171.18 412.248 170.106C409.976 168.944 407.766 167.671 405.616 166.286C401.105 163.391 396.922 160.014 393.139 156.215C392.492 155.591 391.628 155.243 390.729 155.243C389.83 155.243 388.967 155.591 388.319 156.215C385.446 158.956 382.983 162.096 381.005 165.538C380.395 166.433 379.898 167.4 379.526 168.416C379.415 169.069 379.446 169.738 379.619 170.377C379.792 171.015 380.101 171.609 380.526 172.117C381.557 173.807 382.571 175.506 383.603 177.199C387.574 184.186 392.361 190.677 397.864 196.534C400.963 199.657 405.782 194.839 402.684 191.724Z" fill="#211715" />
                         <path d="M342.535 787.262C339.529 783.155 340.32 777.978 342.518 773.675C345.344 768.69 348.617 763.973 352.296 759.581C355.899 754.878 359.624 750.271 363.471 745.759C366.586 742.091 369.958 736.964 374.941 735.854L370.75 731.662C370.321 734.013 370.754 736.439 371.97 738.495C373.185 740.552 375.102 742.102 377.367 742.86C381.852 744.618 387.215 744.156 391.867 743.412C400.613 741.982 408.712 737.908 415.073 731.737L409.256 729.328C409.218 736.588 409.535 743.902 409.22 751.154C409.062 754.796 407.211 756.959 404.291 758.932C401.227 760.818 398.269 762.871 395.431 765.082C385.127 773.821 379.018 788.69 365.01 792.343C357.397 794.33 347.225 793.042 342.008 786.579C341.366 785.946 340.501 785.591 339.599 785.591C338.697 785.591 337.832 785.946 337.19 786.579C336.57 787.228 336.224 788.092 336.224 788.989C336.224 789.887 336.57 790.75 337.19 791.399C342.489 797.957 352.39 800.499 360.493 799.929C368.892 799.241 376.753 795.52 382.608 789.46C388.06 784.081 392.283 777.602 397.731 772.22C400.474 769.667 403.481 767.413 406.7 765.496C410.037 763.675 412.789 760.945 414.638 757.623C416.785 752.987 416.097 747.327 416.085 742.348C416.074 738.007 416.056 733.659 416.085 729.326C416.067 728.66 415.857 728.013 415.479 727.464C415.102 726.915 414.573 726.487 413.958 726.232C413.342 725.978 412.666 725.906 412.011 726.028C411.355 726.15 410.749 726.458 410.266 726.917C405.784 731.24 400.271 734.344 394.25 735.935C390.806 736.886 387.236 737.302 383.665 737.169C381.726 737.092 376.746 736.487 377.328 733.48C377.474 732.901 377.467 732.294 377.308 731.718C377.149 731.143 376.843 730.618 376.421 730.196C375.999 729.774 375.474 729.468 374.899 729.309C374.323 729.15 373.716 729.143 373.137 729.289C367.041 730.652 363.032 735.819 359.184 740.329C354.611 745.691 350.192 751.178 345.925 756.792C339.042 765.822 328.223 779.183 336.657 790.709C337.131 791.47 337.878 792.02 338.745 792.248C339.612 792.475 340.533 792.362 341.32 791.933C342.096 791.471 342.659 790.721 342.886 789.847C343.114 788.973 342.987 788.044 342.535 787.262Z" fill="#211715" />
                         <path d="M503.091 790.702C511.525 779.178 500.706 765.81 493.824 756.785C489.549 751.183 485.129 745.695 480.564 740.323C476.716 735.811 472.709 730.642 466.611 729.282C466.032 729.136 465.425 729.143 464.85 729.303C464.274 729.462 463.749 729.767 463.327 730.189C462.905 730.612 462.599 731.136 462.44 731.712C462.281 732.287 462.274 732.894 462.42 733.473C463.004 736.482 458.014 737.085 456.085 737.162C452.514 737.295 448.944 736.879 445.499 735.929C439.479 734.338 433.966 731.233 429.484 726.91C429 726.451 428.395 726.142 427.74 726.021C427.084 725.899 426.408 725.97 425.792 726.225C425.177 726.48 424.648 726.908 424.271 727.457C423.894 728.007 423.684 728.653 423.667 729.32C423.686 733.185 423.677 737.05 423.667 740.916C423.426 745.276 423.534 749.649 423.989 753.992C425.372 762.651 434.159 765.215 439.965 770.299C445.741 775.356 450.018 781.822 455.194 787.436C460.704 793.4 467.461 798.123 475.614 799.481C484.765 801.005 496.412 798.998 502.556 791.393C503.172 790.741 503.515 789.879 503.515 788.983C503.515 788.086 503.172 787.224 502.556 786.573C501.914 785.94 501.049 785.585 500.147 785.585C499.246 785.585 498.38 785.94 497.738 786.573C493.168 792.229 484.554 793.933 477.655 792.943C470.351 791.897 464.665 787.697 459.801 782.379C455.128 777.268 451.187 771.519 446.171 766.735C443.605 764.356 440.805 762.243 437.812 760.431C435.363 758.898 432.31 757.226 431.118 754.43C430.443 752.096 430.229 749.653 430.485 747.237C430.485 745.223 430.485 743.208 430.485 741.192C430.497 737.234 430.509 733.274 430.485 729.316L424.669 731.725C431.028 737.897 439.127 741.972 447.873 743.4C452.413 744.127 457.647 744.592 462.055 742.97C464.394 742.259 466.392 740.715 467.67 738.631C468.948 736.547 469.417 734.066 468.99 731.659L464.798 735.85C469.676 736.937 472.953 741.858 476.006 745.448C479.933 750.062 483.746 754.772 487.445 759.577C491.037 763.885 494.253 768.493 497.058 773.349C499.346 777.731 500.295 783.03 497.205 787.259C496.755 788.041 496.632 788.969 496.861 789.841C497.09 790.714 497.653 791.461 498.428 791.922C499.213 792.358 500.136 792.475 501.004 792.248C501.873 792.02 502.621 791.467 503.091 790.702Z" fill="#211715" />
                         <path d="M256.201 217.844C256.446 217.159 256.903 216.57 257.505 216.162C258.107 215.755 258.823 215.549 259.549 215.576C285.958 216.509 362.43 220.271 382.816 221.277C383.955 221.333 385.04 221.777 385.891 222.537C386.741 223.296 387.306 224.324 387.49 225.449C390.516 243.804 401.594 307.554 404.528 324.127L404.777 325.534C404.242 325.825 403.686 326.074 403.114 326.279C401.523 326.779 399.86 327.01 398.193 326.96C355.733 324.517 318.644 320.656 276.431 318.157C275.245 318.089 274.117 317.621 273.232 316.83C272.346 316.038 271.755 314.969 271.556 313.798C268.077 293.182 259.118 238.812 256.051 219.541C255.958 218.971 256.009 218.388 256.201 217.844Z" fill="#C6C6C6" />
                         <path d="M401.686 307.898C400.834 303.041 399.885 297.575 398.883 291.807L400.439 292.124L407.936 293.649C412.28 294.612 429.625 299.101 436.389 301.568L434.5 303.102C425.868 310.088 410.079 321.973 406.346 324.57C405.846 324.924 405.322 325.245 404.778 325.529L404.53 324.125C403.903 320.578 402.899 314.863 401.686 307.898Z" fill="#C6C6C6" />
                         <path d="M408.101 293.578C412.423 294.537 429.698 299.014 436.392 301.454C438.427 294.942 441.344 285.692 443.461 278.777C440.602 277.823 437.724 276.929 434.826 276.097L426.788 262.173C425.594 259.631 423.762 257.442 421.47 255.818C418.98 254.646 416.233 254.126 413.486 254.307C409.491 254.072 405.482 254.194 401.509 254.671L392.514 255.779L398.951 291.937L408.101 293.578Z" fill="white" />
                         <path d="M444.63 275.741C441.672 274.737 438.732 273.696 435.733 272.812L437.769 274.377L431.453 263.437C429.672 260.355 428.013 256.864 425.319 254.455C422.526 252.159 419.015 250.92 415.4 250.954C411.633 250.779 407.859 250.826 404.098 251.095C399.745 251.386 399.713 258.205 404.098 257.91C408.176 257.554 412.276 257.527 416.357 257.832C420.3 258.21 421.99 260.691 423.854 263.894C426.159 267.869 428.455 271.845 430.744 275.821C431.253 277.073 432.068 278.178 433.116 279.032C434.163 279.508 435.257 279.874 436.38 280.123C438.541 280.813 440.679 281.576 442.826 282.305C446.988 283.719 448.776 277.139 444.639 275.734L444.63 275.741Z" fill="#211715" />
                         <path d="M512.766 203.4C516.013 207.725 517.545 212.783 519.394 217.542C522.583 225.764 525.444 234.116 528.172 242.503C530.991 251.172 533.66 259.895 536.053 268.692C536.999 272.169 537.905 275.659 538.698 279.174C539.006 280.537 539.297 281.915 539.55 283.295C539.647 283.828 539.728 284.365 539.82 284.9C539.955 285.687 539.821 284.914 539.838 284.978C539.897 285.481 539.95 285.985 540.008 286.49C540.651 292.827 540.728 299.208 540.24 305.559C539.867 310.394 539.102 315.226 535.648 318.886C530.743 324.081 523.234 324.721 516.332 324.508C513.573 324.425 510.83 324.123 508.077 323.97C507.119 323.917 506.17 323.863 505.218 323.752C504.978 323.725 504.739 323.694 504.501 323.665C503.897 323.59 505.063 323.75 504.238 323.628C503.516 323.519 502.792 323.411 502.069 323.287C494.52 322.052 487.033 320.377 479.579 318.649C471.029 316.666 462.51 314.536 454.054 312.183C450.584 311.217 447.122 310.215 443.692 309.116C442.364 308.69 441.041 308.249 439.73 307.772C439.195 307.578 438.666 307.366 438.132 307.165C437.699 307.004 437.682 306.978 438.158 307.186C437.928 307.085 437.694 306.988 437.468 306.879C437.144 306.722 436.827 306.554 436.507 306.39C435.839 306.049 436.219 306.182 436.507 306.44L437.384 309.755C441.172 296.818 445.934 284.123 449.282 271.062L445.091 273.447C460.425 277.124 475.919 280.193 491.207 284.089C497.465 285.444 503.839 286.189 510.241 286.314C514.625 286.544 514.613 279.729 510.241 279.499C506.896 279.329 503.565 278.964 500.236 278.605C498.045 278.462 495.867 278.159 493.721 277.698C490.354 276.822 486.965 276.035 483.578 275.245C474.829 273.2 466.061 271.244 457.298 269.263C453.829 268.479 450.359 267.704 446.905 266.877C446.033 266.652 445.108 266.775 444.326 267.22C443.543 267.665 442.965 268.398 442.714 269.263C439.366 282.324 434.604 295.019 430.814 307.954C430.651 308.535 430.647 309.149 430.801 309.732C430.955 310.315 431.263 310.846 431.692 311.27C433.34 312.542 435.21 313.498 437.207 314.09C440.146 315.201 443.157 316.124 446.167 317.022C454.53 319.515 462.989 321.689 471.469 323.742C485.012 327.022 498.539 330.107 512.451 331.123C520.118 331.682 528.316 331.492 535.232 327.715C539.161 325.568 542.319 322.244 544.262 318.21C547.08 312.299 547.259 305.53 547.382 299.086C547.711 281.76 542.455 265.265 537.365 248.89C534.537 239.795 531.537 230.748 528.262 221.8C526.02 215.086 523.287 208.548 520.084 202.237C519.665 201.442 519.19 200.679 518.661 199.953C518.186 199.194 517.439 198.645 516.572 198.418C515.706 198.191 514.786 198.303 513.999 198.732C513.224 199.192 512.66 199.939 512.432 200.812C512.203 201.684 512.327 202.612 512.778 203.393L512.766 203.4Z" fill="#211715" />
                         <path d="M404.852 328.008C408.259 325.008 407.332 320.476 406.646 316.562C406.078 313.363 405.518 310.164 404.966 306.964C403.548 298.843 402.135 290.722 400.727 282.6C397.919 266.408 395.132 250.214 392.368 234.016C391.908 231.304 391.453 228.59 391.005 225.875C390.808 223.729 389.834 221.729 388.264 220.253C386.695 218.776 384.64 217.924 382.486 217.859C377.275 217.501 372.041 217.348 366.823 217.09C350.701 216.301 334.578 215.525 318.453 214.761C302.328 214.001 286.202 213.247 270.065 212.582C267.28 212.469 264.497 212.359 261.716 212.253C259.847 211.991 257.941 212.241 256.201 212.976C255.039 213.608 254.084 214.562 253.452 215.725C252.82 216.887 252.538 218.208 252.64 219.527C252.863 222.548 253.591 225.615 254.075 228.603C254.664 232.238 255.256 235.876 255.849 239.518C258.688 256.943 261.555 274.364 264.448 291.78C265.623 298.868 266.805 305.955 267.993 313.042C268.782 317.734 271.469 321.081 276.432 321.561C282.994 322.19 289.623 322.382 296.196 322.844C321.394 324.609 346.556 326.833 371.75 328.637C378.297 329.107 384.847 329.546 391.398 329.954C397.302 330.319 402.916 331.014 408.061 327.512C414.417 323.185 420.469 318.329 426.553 313.637C430.027 310.957 433.492 308.263 436.905 305.504C437.539 304.863 437.895 303.997 437.895 303.095C437.895 302.193 437.539 301.328 436.905 300.686C436.256 300.066 435.393 299.719 434.495 299.719C433.597 299.719 432.734 300.066 432.085 300.686C425.352 306.126 418.455 311.371 411.525 316.559C409.295 318.227 407.077 319.922 404.788 321.51C400.304 324.623 394.879 323.357 389.737 323.043C365.611 321.532 341.519 319.477 317.426 317.608C305.158 316.656 292.891 315.76 280.603 315.001C278.957 314.899 275.894 315.441 275.021 313.638C274.628 312.403 274.394 311.122 274.325 309.827C273.791 306.658 273.261 303.488 272.735 300.316C269.988 283.835 267.266 267.35 264.567 250.863C263.344 243.401 262.126 235.936 260.914 228.47C260.46 225.654 260.005 222.838 259.551 220.021C259.496 219.68 259.551 218.816 259.343 219.109C259.461 218.951 259.604 218.982 260.137 219.012C261.435 219.089 262.739 219.108 264.039 219.159C278.301 219.711 292.562 220.374 306.821 221.033C322.919 221.78 339.016 222.548 355.112 223.335C361.436 223.642 367.759 223.951 374.082 224.262L381.114 224.603C382.049 224.649 383.237 224.488 383.869 225.339C384.339 226.448 384.591 227.637 384.614 228.842C389.478 257.989 394.586 287.095 399.686 316.201C399.994 317.961 401.444 321.944 400.026 323.186C396.724 326.083 401.56 330.891 404.845 328.005L404.852 328.008Z" fill="#211715" />
                         <path d="M300.291 292.48C299.93 290.957 299.009 289.625 297.712 288.749C296.415 287.873 294.836 287.516 293.288 287.749C292.128 287.798 291.024 288.263 290.179 289.06C289.334 289.857 288.804 290.931 288.688 292.087C288.287 295.362 289.029 299.112 290.243 305.215C291.179 309.895 292.404 315.318 293.726 319.762C294.652 321.978 296.129 323.922 298.017 325.407C299.906 326.892 302.142 327.869 304.515 328.247C307.677 328.821 327.47 331.184 336.415 331.259C344.135 330.968 355.676 331.537 355.877 324.955C353.037 324.161 350.556 322.783 349.452 322.587C349.1 321.829 348.82 321.04 348.616 320.23C347.576 316.133 344.723 308.617 341.676 306.84C339.231 305.414 334.956 305.21 333.583 307.806C333.583 307.806 333.198 308.535 332.607 309.66C332.287 308.508 331.965 307.31 331.639 306.039C330.463 301.679 329.007 297.398 327.281 293.225C326.857 292.154 326.181 291.202 325.311 290.448C324.44 289.694 323.4 289.162 322.28 288.896C319.636 288.044 315.565 289.226 315.02 291.877L314.422 294.774L313.158 289.453C311.742 283.489 307.126 281.687 303.664 282.503C299.771 283.42 298.819 286.648 300.086 291.502" fill="white" />
                         <path d="M336.526 309.527C336.82 309.016 336.083 309.945 336.745 309.272C335.986 310.043 337.19 309.115 336.677 309.352C336.204 309.57 337.12 309.251 337.228 309.222C337.609 309.154 337.566 309.158 337.096 309.234C337.267 309.22 337.451 309.212 337.628 309.212C337.899 309.212 338.166 309.232 338.437 309.248C337.543 309.198 338.657 309.307 338.863 309.36C339.122 309.428 339.374 309.517 339.625 309.597C339.984 309.735 339.949 309.72 339.521 309.553C339.669 309.624 339.814 309.703 339.957 309.784C340.07 309.851 340.177 309.921 340.283 309.997C339.894 309.687 339.8 309.617 339.996 309.788C340.172 309.982 340.359 310.166 340.557 310.338C340.686 310.48 341.295 311.333 340.804 310.612C340.956 310.836 341.114 311.052 341.261 311.277C342.034 312.493 342.708 313.77 343.278 315.093C343.341 315.235 343.404 315.378 343.465 315.521C343.324 315.18 343.33 315.196 343.481 315.569C343.629 315.952 343.782 316.332 343.927 316.717C344.167 317.363 344.394 318.014 344.609 318.668C345.017 319.924 345.29 321.234 345.743 322.473C346.021 323.699 346.725 324.786 347.732 325.539C348.389 325.835 349.067 326.083 349.761 326.281C351.408 326.933 353.013 327.659 354.715 328.177C355.587 328.408 356.515 328.287 357.299 327.841C358.083 327.395 358.66 326.659 358.907 325.792C359.128 324.92 359.003 323.997 358.558 323.216C358.114 322.434 357.384 321.855 356.522 321.6C354.445 320.968 352.47 319.758 350.354 319.305L352.398 320.871C352.248 320.53 352.257 320.554 352.424 320.941C352.349 320.752 352.279 320.561 352.213 320.368C352.095 320.028 352 319.678 351.906 319.329C351.754 318.767 351.603 318.206 351.434 317.651C351.063 316.432 350.642 315.231 350.171 314.049C349.157 311.227 347.725 308.572 345.924 306.174C342.371 301.732 333.835 300.551 330.641 306.087C330.185 306.868 330.057 307.797 330.287 308.671C330.516 309.546 331.084 310.293 331.864 310.749C332.644 311.205 333.574 311.332 334.448 311.103C335.322 310.873 336.07 310.308 336.526 309.527Z" fill="#211715" />
                         <path d="M338.275 317.23C336.267 308.822 333.714 300.555 330.632 292.479C329.936 290.591 328.74 288.927 327.172 287.667C325.603 286.406 323.722 285.596 321.728 285.323C317.673 284.786 312.868 286.701 311.733 290.966C310.599 295.23 317.186 297.021 318.307 292.777C318.467 292.164 318.307 292.692 318.136 292.871C318.233 292.768 318.908 292.261 318.465 292.547C318.807 292.287 319.215 292.13 319.642 292.092C320.574 291.879 319.244 292.046 320.195 292.027C320.23 292.027 321.288 292.107 320.706 292.01C321.219 292.103 321.717 292.266 322.186 292.496C322.704 292.682 323.159 293.007 323.503 293.436C323.912 293.862 323.478 293.348 323.657 293.639C323.8 293.867 323.929 294.101 324.057 294.339C324.398 294.972 323.982 294.123 324.253 294.772C324.401 295.127 324.539 295.486 324.679 295.844C324.967 296.579 325.247 297.317 325.519 298.059C328.027 304.886 329.814 312.015 331.693 319.036C332.828 323.268 339.403 321.473 338.267 317.223L338.275 317.23Z" fill="#211715" />
                         <path d="M323.609 316.499C321.527 308.513 319.437 300.529 317.423 292.527C316.489 288.814 315.804 284.939 312.964 282.133C311.549 280.72 309.771 279.724 307.826 279.255C305.882 278.787 303.846 278.863 301.942 279.477C296.243 281.488 295.512 287.212 296.795 292.426C297.841 296.686 304.416 294.881 303.366 290.615C303.03 289.522 302.903 288.375 302.991 287.235C303.013 286.901 303.146 286.585 303.37 286.337C303.764 286.068 304.21 285.883 304.679 285.795C305.148 285.707 305.631 285.718 306.096 285.825C306.832 286.024 307.511 286.393 308.078 286.902C308.645 287.412 309.084 288.047 309.36 288.758C309.881 290.176 310.28 291.635 310.553 293.121C312.652 301.535 314.857 309.921 317.044 318.312C318.15 322.553 324.725 320.753 323.616 316.499H323.609Z" fill="#211715" />
                         <path d="M290.788 321.483C292.003 324.099 293.831 326.383 296.117 328.142C298.403 329.901 301.08 331.082 303.92 331.584C307.794 332.227 311.721 332.634 315.625 333.062C325.861 334.184 336.287 335.323 346.581 334.213C352.327 333.595 358.649 331.794 359.283 325.1C359.277 324.198 358.916 323.335 358.278 322.697C357.641 322.059 356.777 321.698 355.876 321.692C354.978 321.711 354.122 322.076 353.487 322.711C352.852 323.346 352.487 324.202 352.468 325.1C352.433 325.323 352.318 325.525 352.144 325.669C351.664 326.069 351.112 326.374 350.517 326.565C348.543 327.182 346.493 327.523 344.426 327.579C340.151 327.872 335.863 327.901 331.584 327.667C326.965 327.396 322.357 326.959 317.758 326.475C315.571 326.248 313.387 326.002 311.205 325.739C310.297 325.625 309.392 325.512 308.491 325.398C308.133 325.352 307.774 325.306 307.416 325.257C308.002 325.337 307.14 325.219 306.954 325.192C305.174 325.031 303.433 324.571 301.807 323.829C299.522 322.494 297.723 320.465 296.673 318.036C294.697 314.117 288.815 317.566 290.788 321.476V321.483Z" fill="#211715" />
                         <path d="M309.68 314.737C308.392 310.103 307.135 305.46 305.91 300.809C305.351 298.694 304.799 296.58 304.269 294.459C303.952 292.66 303.412 290.909 302.661 289.245C301.961 288.036 301.012 286.99 299.877 286.176C298.742 285.361 297.447 284.797 296.078 284.521C294.709 284.245 293.296 284.263 291.934 284.573C290.573 284.884 289.292 285.48 288.178 286.323C284.099 289.678 285.084 295.694 285.851 300.263C286.975 307.151 288.511 313.965 290.451 320.668C291.688 324.866 298.267 323.079 297.023 318.857C295.529 313.778 294.396 308.602 293.361 303.414C292.93 301.247 292.405 298.757 292.169 296.769C292.063 295.892 292.006 295.011 291.998 294.128C291.957 293.472 292.007 292.814 292.148 292.172C292.346 291.629 292.431 291.491 292.985 291.271C293.622 291.095 294.292 291.075 294.939 291.213C295.465 291.323 295.945 291.591 296.316 291.98C296.687 292.369 296.931 292.861 297.016 293.392C297.778 296.629 298.614 299.844 299.464 303.058C300.656 307.565 301.875 312.063 303.121 316.554C304.293 320.774 310.87 318.981 309.692 314.742L309.68 314.737Z" fill="#211715" />
                         <path d="M330.647 266.504C330.829 266.528 331.012 266.54 331.194 266.542C330.394 266.603 330.566 266.431 330.922 266.511C331.249 266.584 331.574 266.649 331.896 266.751C332.012 266.789 332.125 266.833 332.237 266.869C332.886 267.073 331.494 266.491 332.096 266.808C332.421 266.971 332.737 267.151 333.043 267.348C333.13 267.404 333.639 267.76 333.138 267.402C332.638 267.044 333.127 267.402 333.212 267.487C333.407 267.721 333.618 267.942 333.842 268.148L333.537 267.748C333.61 267.847 333.68 267.947 333.748 268.051C333.835 268.181 333.919 268.314 333.992 268.45C334.049 268.597 334.122 268.737 334.208 268.869C333.997 268.344 333.958 268.251 334.087 268.586C334.123 268.677 334.154 268.77 334.183 268.862C334.29 269.203 334.297 269.626 334.437 269.939C334.188 269.373 334.381 269.321 334.384 269.661C334.384 269.881 334.404 270.098 334.399 270.317C334.399 270.476 334.365 270.648 334.375 270.806C334.408 271.254 334.559 269.908 334.413 270.546C334.335 270.886 334.2 271.214 334.132 271.546C334.302 270.735 334.384 270.992 334.203 271.329C334.154 271.423 334.101 271.517 334.045 271.607C333.961 271.742 333.861 271.864 333.779 271.999C334.271 271.191 334.173 271.527 333.961 271.726C333.75 271.926 333.53 272.106 333.34 272.307C333.353 272.294 334.079 271.796 333.655 272.052C333.484 272.159 333.314 272.277 333.125 272.379C332.832 272.541 331.992 272.784 333.086 272.439C332.833 272.519 332.59 272.624 332.336 272.701C332.082 272.778 331.825 272.842 331.561 272.897C331.404 272.929 331.247 272.955 331.089 272.984C330.474 273.098 331.949 272.9 331.363 272.945C330.794 272.995 330.222 273.01 329.651 272.987C329.402 272.974 329.155 272.941 328.908 272.922C330.213 273.026 328.998 272.922 328.628 272.807C328.477 272.762 328.325 272.689 328.174 272.652C327.748 272.546 328.945 273.059 328.373 272.723C328.121 272.526 327.847 272.361 327.555 272.231L327.94 272.534C327.84 272.454 327.743 272.372 327.647 272.287C327.552 272.202 327.415 272.071 327.306 271.955C327.197 271.839 327.097 271.662 326.984 271.6C327.315 272.042 327.376 272.119 327.167 271.832C327.112 271.754 327.058 271.674 327.006 271.592C326.92 271.455 326.836 271.317 326.761 271.174C326.62 270.912 326.524 270.401 326.776 271.283C326.686 270.967 326.558 270.665 326.483 270.341C326.458 270.234 326.368 269.58 326.437 270.2C326.507 270.82 326.437 270.145 326.437 270.045C326.427 269.837 326.429 269.627 326.437 269.419L326.451 269.208C326.489 268.837 326.475 268.925 326.41 269.474C326.562 269.083 326.672 268.677 326.739 268.263C326.557 269.075 326.558 268.668 326.724 268.365C326.817 268.194 326.925 268.039 327.023 267.876C327.376 267.288 326.475 268.452 326.955 267.969C327.087 267.837 327.208 267.695 327.346 267.566C327.484 267.436 327.645 267.332 327.766 267.199C327.175 267.852 327.415 267.47 327.683 267.3C327.993 267.102 328.364 266.98 328.664 266.772C327.993 267.239 328.187 266.964 328.54 266.843C328.71 266.784 328.891 266.729 329.068 266.673C329.245 266.617 329.424 266.581 329.603 266.545C329.722 266.52 329.842 266.499 329.961 266.479C329.382 266.55 329.228 266.571 329.501 266.542C329.882 266.53 330.259 266.489 330.642 266.496C331.544 266.488 332.406 266.126 333.043 265.489C333.68 264.851 334.042 263.989 334.05 263.088C334.033 262.19 333.668 261.333 333.033 260.697C332.398 260.062 331.541 259.698 330.642 259.68C328.428 259.587 326.239 260.177 324.372 261.37C322.504 262.563 321.049 264.301 320.203 266.349C319.422 268.574 319.441 271.001 320.258 273.213C321.075 275.424 322.639 277.281 324.679 278.463C326.41 279.331 328.316 279.794 330.252 279.817C332.188 279.841 334.105 279.424 335.856 278.598C337.541 277.848 338.96 276.608 339.928 275.039C341.089 272.968 341.476 270.553 341.02 268.223C340.531 265.826 339.234 263.669 337.344 262.114C335.455 260.559 333.089 259.699 330.642 259.68C329.741 259.687 328.878 260.05 328.24 260.688C327.603 261.325 327.241 262.188 327.235 263.09C327.251 263.99 327.616 264.849 328.253 265.485C328.889 266.122 329.747 266.487 330.647 266.504Z" fill="#211715" />
                         <path d="M437.297 298.166C425.629 294.174 413.685 291.035 401.562 288.775C400.69 288.557 399.768 288.683 398.987 289.127C398.206 289.572 397.627 290.3 397.369 291.16C397.138 292.032 397.258 292.96 397.704 293.743C398.15 294.527 398.886 295.105 399.754 295.351C411.878 297.612 423.822 300.751 435.491 304.743C436.363 304.975 437.291 304.854 438.075 304.408C438.859 303.962 439.437 303.225 439.683 302.358C439.904 301.486 439.78 300.562 439.335 299.781C438.89 298.999 438.16 298.42 437.297 298.166Z" fill="#211715" />
                         <path d="M364.039 81.3006C364.016 81.5749 363.989 81.8475 363.953 82.1201L364.074 81.2137C363.742 83.0885 363.193 84.9182 362.437 86.6659C362.317 87.1042 362.285 87.5621 362.344 88.0129C362.402 88.4636 362.55 88.8982 362.778 89.2914C363.004 89.6779 363.303 90.0161 363.66 90.2867C364.016 90.5573 364.422 90.7551 364.855 90.8687C365.288 90.9823 365.739 91.0095 366.182 90.9487C366.626 90.888 367.053 90.7406 367.439 90.5148L368.129 89.9815C368.546 89.5647 368.848 89.047 369.005 88.4787C369.419 87.4036 369.843 86.3302 370.169 85.2261C370.53 83.9468 370.758 82.6336 370.85 81.3074C370.849 80.4043 370.491 79.5383 369.854 78.8982C369.537 78.5816 369.162 78.3305 368.748 78.1592C368.334 77.9878 367.891 77.8997 367.444 77.8997C366.996 77.8997 366.553 77.9878 366.139 78.1592C365.726 78.3305 365.35 78.5816 365.034 78.8982L364.502 79.5883C364.197 80.1098 364.036 80.7031 364.035 81.3074L364.039 81.3006Z" fill="#211715" />
                         <path d="M439.734 111.223C447.927 111.461 457.046 111.052 462.026 103.505C465.775 97.8138 466.362 88.1992 460.99 83.2701C459.457 81.8662 456.598 81.4317 454.623 80.9683C452.36 80.4472 450.066 80.0733 447.755 79.8489C443.304 79.4171 438.814 79.6231 434.421 80.4605C430.586 81.1795 426.258 82.0366 424.048 85.572C422.419 88.3691 421.713 91.6089 422.031 94.8304C422.359 99.389 424.356 103.667 427.64 106.846C431.053 109.646 435.323 111.19 439.737 111.221C444.123 111.41 444.114 104.595 439.737 104.406C437.934 104.45 436.15 104.036 434.55 103.204C432.95 102.372 431.587 101.149 430.588 99.648C429.588 98.1471 428.985 96.4176 428.834 94.6207C428.683 92.8237 428.99 91.0179 429.725 89.3714C430.458 88.0953 432.702 87.8159 434.35 87.4291C436.969 86.8186 439.646 86.4874 442.335 86.4409C447.559 86.3659 452.754 87.2203 457.678 88.9642L456.174 88.0868C459.206 91.2644 458.414 97.1561 455.881 100.448C452.243 105.178 445.009 104.559 439.737 104.406C435.346 104.273 435.35 111.088 439.734 111.223Z" fill="#211715" />
                         <path d="M380.867 88.966C387.209 86.6899 393.997 85.9348 400.684 86.7612C402.294 86.9877 403.887 87.3166 405.455 87.746C406.525 88.034 408.082 88.2572 408.663 89.0256C409.474 90.4677 409.858 92.1102 409.772 93.7622C409.683 96.379 408.762 98.8993 407.143 100.957C405.407 102.848 403.032 104.029 400.476 104.273C397.435 104.653 394.361 104.681 391.313 104.356C388.533 104.266 385.856 103.278 383.685 101.538C380.302 98.4119 378.993 91.629 382.37 88.0902C385.399 84.9177 380.588 80.0908 377.552 83.2719C372.478 88.586 372.56 97.514 376.514 103.506C381.341 110.821 390.187 111.494 398.19 111.243C402.079 111.277 405.899 110.206 409.203 108.154C412.491 105.783 414.851 102.341 415.875 98.4187C416.817 95.2105 416.801 91.7969 415.828 88.5979C415.359 86.987 414.556 85.4927 413.471 84.2123C412.099 82.8679 410.374 81.9393 408.496 81.534C398.833 78.7361 388.536 79.0388 379.054 82.3995C374.935 83.8222 376.705 90.4074 380.867 88.9711V88.966Z" fill="#211715" />
                         <path d="M416.167 95.834C416.25 95.7915 416.337 95.7523 416.421 95.7131L415.606 96.0538C416.306 95.7766 417.038 95.5911 417.785 95.5018L416.879 95.6245C418.428 95.4234 419.997 95.4234 421.546 95.6245L420.639 95.5035C421.514 95.6028 422.373 95.8129 423.195 96.1288L422.381 95.788L422.467 95.8255C423.271 96.2565 424.206 96.3778 425.093 96.1663C425.525 96.048 425.929 95.8457 426.283 95.5709C426.637 95.2962 426.933 94.9544 427.155 94.5651C427.376 94.1758 427.519 93.7467 427.574 93.3023C427.63 92.8578 427.597 92.4068 427.478 91.9749C427.368 91.5463 427.173 91.1442 426.904 90.7929C426.635 90.4416 426.298 90.1482 425.913 89.9304C424.952 89.4899 423.939 89.1733 422.899 88.9882C421.699 88.782 420.486 88.668 419.269 88.6474C417.019 88.5558 414.779 88.9947 412.73 89.9287C411.954 90.3883 411.39 91.1355 411.161 92.0082C410.932 92.8809 411.056 93.8086 411.507 94.5903C411.978 95.354 412.726 95.9071 413.594 96.1349C414.462 96.3626 415.385 96.2476 416.17 95.8136L416.167 95.834Z" fill="#211715" />
                         <path d="M465.758 93.2833L466.003 93.176L465.188 93.5168C466.63 92.8893 468.133 92.4142 469.673 92.0992C470.516 91.8305 471.238 91.2769 471.717 90.5334C471.962 90.1549 472.102 89.7179 472.121 89.2675C472.224 88.8159 472.203 88.3449 472.06 87.9044C471.823 87.0457 471.261 86.3127 470.494 85.8599L469.68 85.5191C469.087 85.3572 468.461 85.3572 467.869 85.5191C465.955 85.9293 464.094 86.5581 462.324 87.3933C461.737 87.7237 461.266 88.227 460.976 88.8345C460.685 89.4421 460.588 90.1245 460.699 90.789C460.718 91.2394 460.858 91.6764 461.103 92.0549C461.556 92.8221 462.289 93.3835 463.147 93.6207L464.054 93.7434C464.658 93.7445 465.252 93.5839 465.773 93.2782L465.758 93.2833Z" fill="#211715" />
                         <path d="M375.671 87.4052C373.9 86.5701 372.04 85.9412 370.126 85.531C369.686 85.3896 369.215 85.3684 368.763 85.4697C368.109 85.5689 367.496 85.8513 366.996 86.2843C366.495 86.7173 366.127 87.2831 365.935 87.9164C365.816 88.3549 365.785 88.8126 365.843 89.2632C365.902 89.7138 366.049 90.1484 366.276 90.5419C366.497 90.9246 366.791 91.2598 367.142 91.5285C367.493 91.7972 367.893 91.994 368.32 92.1077C369.86 92.4227 371.363 92.8978 372.805 93.5253L371.99 93.1845L372.236 93.2919C372.614 93.5368 373.051 93.6762 373.502 93.6957C373.945 93.7758 374.4 93.7573 374.835 93.6416C375.271 93.5259 375.675 93.3157 376.02 93.0261C376.389 92.7865 376.691 92.457 376.897 92.0685C377.124 91.675 377.271 91.2404 377.33 90.7898C377.388 90.3392 377.357 89.8815 377.238 89.443L376.897 88.6286C376.601 88.1241 376.18 87.7036 375.676 87.4069L375.671 87.4052Z" fill="#211715" />
                         <path d="M409.714 131.064C412.974 132.755 416.607 133.6 420.278 133.521C424.139 133.672 427.939 132.529 431.075 130.271C431.714 129.632 432.073 128.766 432.073 127.862C432.073 126.959 431.714 126.092 431.075 125.453C430.424 124.838 429.562 124.496 428.666 124.496C427.77 124.496 426.908 124.838 426.257 125.453C427.422 124.543 426.131 125.485 425.758 125.681C425.466 125.835 424.67 126.073 425.71 125.738C425.418 125.831 425.136 125.959 424.843 126.053C424.473 126.172 424.1 126.273 423.721 126.359C423.281 126.408 422.844 126.49 422.416 126.607C422.457 126.496 423.14 126.525 422.391 126.607C422.152 126.629 421.914 126.649 421.675 126.664C421.101 126.702 420.527 126.716 419.951 126.712C419.436 126.712 418.922 126.694 418.407 126.658C418.172 126.641 417.935 126.622 417.7 126.598C417.566 126.586 417.431 126.571 417.298 126.554C417.032 126.522 417.12 126.534 417.562 126.589C416.783 126.555 416.015 126.382 415.296 126.078C414.979 125.985 414.671 125.87 414.357 125.763C413.565 125.492 415.039 126.092 414.32 125.763C413.93 125.579 413.548 125.388 413.168 125.187C412.389 124.729 411.46 124.6 410.585 124.827C409.71 125.054 408.961 125.619 408.503 126.399C408.045 127.178 407.915 128.107 408.143 128.982C408.37 129.857 408.935 130.606 409.714 131.064Z" fill="#211715" />
                         <path d="M418.187 106.658C418.655 108.348 419.03 110.063 419.31 111.793L419.188 110.889C419.221 111.123 419.227 111.361 419.206 111.597L419.329 110.691C419.313 110.8 419.287 110.906 419.251 111.01L419.591 110.195C419.559 110.267 419.522 110.336 419.479 110.401L420.011 109.711C419.96 109.774 419.903 109.831 419.84 109.882L420.53 109.348C420.4 109.43 420.264 109.501 420.123 109.563L420.937 109.222C420.719 109.316 420.49 109.383 420.256 109.422L421.162 109.301C420.948 109.326 420.732 109.326 420.518 109.301L421.425 109.422C421.183 109.389 420.944 109.33 420.702 109.297C420.262 109.155 419.791 109.134 419.339 109.236C418.888 109.256 418.451 109.395 418.072 109.64C417.685 109.866 417.347 110.166 417.076 110.522C416.806 110.879 416.608 111.285 416.495 111.718C416.381 112.151 416.354 112.603 416.415 113.046C416.476 113.49 416.624 113.917 416.85 114.303C417.067 114.687 417.36 115.023 417.711 115.29C418.062 115.558 418.463 115.751 418.891 115.859C419.513 115.942 420.114 116.099 420.747 116.126C421.729 116.132 422.698 115.898 423.57 115.445C424.134 115.18 424.633 114.793 425.03 114.314C425.428 113.834 425.715 113.273 425.872 112.669C426.076 111.714 426.067 110.725 425.846 109.773C425.567 108.118 425.185 106.478 424.759 104.856C424.641 104.424 424.438 104.019 424.164 103.665C423.889 103.312 423.547 103.015 423.158 102.794C422.769 102.572 422.339 102.43 421.895 102.374C421.451 102.319 421 102.351 420.568 102.47C419.71 102.709 418.978 103.27 418.523 104.036C418.078 104.835 417.956 105.775 418.182 106.662L418.187 106.658Z" fill="#211715" />
                         <path d="M391.783 91.9169C390.931 94.7026 391.484 101.117 396.764 101.659C403.741 101.617 404.112 93.866 401.764 90.2233C399.841 87.2348 394.186 85.9978 391.783 91.9169Z" fill="#211715" />
                         <path d="M447.66 91.9169C448.511 94.7026 447.958 101.117 442.679 101.659C435.694 101.617 435.329 93.866 437.679 90.2233C439.602 87.2348 445.256 85.9978 447.66 91.9169Z" fill="#211715" />
                       </g>
                       <defs>
                         <clipPath id="clip0_534_200">
                           <rect width="800" height="800" fill="white" />
                         </clipPath>
                       </defs>
                     </svg>

                   </div>
                   <label for="bike" class="radio-tile-label">Developer</label>
                 </div>
               </div>

               <div class="input-container">
                 <input id="drive" class="radio-button" type="radio" name="radio" />
                 <div class="radio-tile">
                   <div class="icon car-icon">
                     <!-- <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z" />
                      <path d="M0 0h24v24H0z" fill="none" />
                    </svg> -->
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <g clip-path="url(#clip0_536_304)">
                         <path d="M7.99993 16C5.71503 17.1 3.42723 18.2 1.14393 19.4C0.248746 19.9 -0.0853737 21 -7.36956e-05 22C0.0415903 22.6 -0.181164 23.3999 0.440816 23.7999C1.03173 24.0999 1.72452 23.9 2.36602 24H23.102C23.871 23.9 24.075 23.1 24 22.5C24.014 21.5 24.068 20.4999 23.342 19.7999C22.751 19.1999 21.907 18.9 21.185 18.5C19.457 17.7 17.728 16.8 16 16H7.99993Z" fill="#59B5C6" />
                         <path d="M8 16H16L14 24H10L8 16Z" fill="#BDC3C7" />
                         <path d="M10 18V21L11 22L10 24H14L13 22L14 21V18H10Z" fill="#59B5C6" />
                         <path d="M15 13H9V18H15V13Z" fill="#95A5A6" />
                         <path d="M8 16L9 15L12 18L15 15L16 16L14 21L12 18L10 21L8 16Z" fill="#ECF0F1" />
                         <path d="M11.9999 0C9.03733 0 6.58193 2.6899 6.09373 6.2188C5.98023 6.1878 5.85363 6.1537 5.74993 6.1875C5.22483 6.3585 5.09543 7.356 5.43743 8.4062C5.63813 9.0225 5.97203 9.5077 6.31243 9.7812C7.08873 12.799 9.32743 15 11.9999 15C14.6719 15 16.9109 12.799 17.6879 9.7812C18.0279 9.5076 18.3619 9.0224 18.5619 8.4062C18.9039 7.356 18.7749 6.3585 18.2499 6.1875C18.1459 6.1537 18.0199 6.1878 17.9059 6.2188C17.4179 2.6898 14.9629 0 11.9999 0Z" fill="#BDC3C7" />
                         <path d="M8 16L6 17V20H8L6 21L8 24H10L8 16ZM16 16L14 24H16L18 21L16 20H18V17L16 16Z" fill="#34495E" />
                         <path d="M11.9999 0.000155019C9.95698 -0.099845 8.06118 1.30011 7.01978 3.20011C6.48958 4.10011 6.13588 5.20011 5.97998 6.20011C6.31438 6.10011 6.58018 6.30018 6.88298 5.90018C7.51198 5.30018 7.79138 4.80015 8.01978 4.00015C8.40988 3.10015 9.26298 1.70015 10.0199 2.00015C10.7129 2.20015 11.0199 2.60013 12.0199 2.60013C13.0199 2.60013 13.3269 2.20015 14.0199 2.00015C14.7769 1.70015 15.6299 3.10015 16.0199 4.00015C16.2479 4.80015 16.4879 5.30018 17.1169 5.90018C17.4199 6.30018 17.6849 6.10011 18.0199 6.20011C17.8639 5.20011 17.5099 4.10011 16.9799 3.20011C15.9389 1.30011 14.0429 -0.099845 11.9999 0.000155019Z" fill="#34495E" />
                       </g>
                       <defs>
                         <clipPath id="clip0_536_304">
                           <rect width="24" height="24" fill="white" />
                         </clipPath>
                       </defs>
                     </svg>

                   </div>
                   <label for="drive" class="radio-tile-label">User</label>
                 </div>
               </div>


             </div>
             <!-- ends -->
           </div>

         </div>
       </div>

     </div>
   </div>
 </div>
 <!-- ends choose role -->

 <!-- login Modal -->
 <div class="modal fade" id="logIn" tabindex="-1" aria-labelledby="logInLabel" aria-hidden="true" id>
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h1 class="modal-title fs-5" id="logInLabel">
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
               <div class="col-lg-7">
                 <div class="">
                   <div class=" mb-3">
                     <div class="heading_sec">
                       <h2 class="main_heading">Login</h2>
                     </div>
                     <p>Login to access your travelwise account</p>
                   </div>
                   <form>
                     <div class="row g-3">

                       <div class="col-md-12">
                         <div class="form-floating mb-1">
                           <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                           <label for="floatingInput">Email</label>
                         </div>

                       </div>

                       <div class="col-12">
                         <div class="form-floating mb-1">
                           <input type="password" class="form-control" id="floatingInput" placeholder="Password">
                           <label for="floatingInput"> Password </label>
                         </div>
                       </div>

                       <div class="col-12">
                         <div class="form-check">
                           <div class="d-flex justify-content-between">

                             <div>
                               <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                               <label class="form-check-label" for="rememberMe">Remember me </label>
                             </div>
                             <div>
                               <a href="forgot_pass.php" class="text-danger">Forgot Password</a>
                             </div>
                           </div>

                         </div>
                       </div>
                       <div class="col-12">
                         <div class="row">
                           <div class="col-md-12">
                             <button type="submit" class="btn btn-dark w-100 py-3">Login</button>
                           </div>
                         </div>
                       </div>

                       <div class="col-12 text-center small_text mt-4">

                         <p>Already have an account? <a href="signup.php" class="text-danger">signup</a></p>

                         <h6><span>Or Sign up with</span></h6>

                       </div>

                       <div class="col-12">
                         <div class="row">
                           <div class="col-md-12">
                             <button type="submit" class="btn bg-transparent border-primary w-100  py-2">
                               <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14.1323 6.77545H13.6289V6.74951H8.00391V9.24951H11.5361C11.0208 10.7048 9.63609 11.7495 8.00391 11.7495C5.93297 11.7495 4.25391 10.0704 4.25391 7.99951C4.25391 5.92857 5.93297 4.24951 8.00391 4.24951C8.95984 4.24951 9.82953 4.61014 10.4917 5.1992L12.2595 3.43139C11.1433 2.39107 9.65015 1.74951 8.00391 1.74951C4.55234 1.74951 1.75391 4.54795 1.75391 7.99951C1.75391 11.4511 4.55234 14.2495 8.00391 14.2495C11.4555 14.2495 14.2539 11.4511 14.2539 7.99951C14.2539 7.58045 14.2108 7.17139 14.1323 6.77545Z" fill="#FFC107" />
                                 <path d="M2.47461 5.09045L4.52805 6.59639C5.08367 5.22076 6.4293 4.24951 8.00398 4.24951C8.95992 4.24951 9.82961 4.61014 10.4918 5.1992L12.2596 3.43139C11.1434 2.39107 9.65023 1.74951 8.00398 1.74951C5.60336 1.74951 3.52148 3.10482 2.47461 5.09045Z" fill="#FF3D00" />
                                 <path d="M8.004 14.2497C9.61838 14.2497 11.0853 13.6319 12.1943 12.6272L10.2599 10.9904C9.61136 11.4836 8.81883 11.7504 8.004 11.7497C6.37838 11.7497 4.99807 10.7132 4.47807 9.2666L2.43994 10.8369C3.47432 12.861 5.57494 14.2497 8.004 14.2497Z" fill="#4CAF50" />
                                 <path d="M14.1343 6.77545H13.6309V6.74951H8.00586V9.24951H11.538C11.2915 9.94214 10.8475 10.5474 10.2609 10.9904L10.2618 10.9898L12.1962 12.6267C12.0593 12.7511 14.2559 11.1245 14.2559 7.99951C14.2559 7.58045 14.2127 7.17139 14.1343 6.77545Z" fill="#1976D2" />
                               </svg>

                             </button>
                           </div>
                         </div>
                       </div>
                     </div>
                   </form>
                 </div>
               </div>
               <div class="col-xl-4">

                 <div class=" sign_upsec">
                   <div class=" profile-card pt-4 text-center">

                     <div id="carouselExampleIndicators" class="carousel slide">
                       <div class="carousel-indicators">
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                       </div>
                       <div class="carousel-inner">
                         <div class="carousel-item active">
                           <img src="../assets/img/signup.png" class="d-block w-100" alt="slider">
                         </div>
                         <div class="carousel-item">
                           <img src="../assets/img/signup.png" class="d-block w-100" alt="slider">
                         </div>
                         <div class="carousel-item">
                           <img src="../assets/img/signup.png" class="d-block w-100" alt="slider">
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
 <!-- login Modal ends -->



 <!-- small calandder js -->

 <script>
   $(document).ready(function() {
     function c(passed_month, passed_year, calNum) {
       var calendar = calNum == 0 ? calendars.cal1 : calendars.cal2;
       makeWeek(calendar.weekline);
       calendar.datesBody.empty();
       var calMonthArray = makeMonthArray(passed_month, passed_year);
       var r = 0;
       var u = false;
       while (!u) {
         if (daysArray[r] == calMonthArray[0].weekday) {
           u = true
         } else {
           calendar.datesBody.append('<div class="blank"></div>');
           r++;
         }
       }
       for (var cell = 0; cell < 42 - r; cell++) { // 42 date-cells in calendar
         if (cell >= calMonthArray.length) {
           calendar.datesBody.append('<div class="blank"></div>');
         } else {
           var shownDate = calMonthArray[cell].day;
           var iter_date = new Date(passed_year, passed_month, shownDate);
           if (
             (
               (shownDate != today.getDate() && passed_month == today.getMonth()) || passed_month != today.getMonth()) && iter_date < today) {
             var m = '<div class="past-date">';
           } else {
             var m = checkToday(iter_date) ? '<div class="today">' : "<div>";
           }
           calendar.datesBody.append(m + shownDate + "</div>");
         }
       }

       var color = "#444444";
       calendar.calHeader.find("h2").text(i[passed_month] + " " + passed_year);
       calendar.weekline.find("div").css("color", color);
       calendar.datesBody.find(".today").css("color", "#87b633");

       // find elements (dates) to be clicked on each time
       // the calendar is generated
       var clicked = false;
       selectDates(selected);

       clickedElement = calendar.datesBody.find('div');
       clickedElement.on("click", function() {
         clicked = $(this);
         var whichCalendar = calendar.name;

         if (firstClick && secondClick) {
           thirdClicked = getClickedInfo(clicked, calendar);
           var firstClickDateObj = new Date(firstClicked.year,
             firstClicked.month,
             firstClicked.date);
           var secondClickDateObj = new Date(secondClicked.year,
             secondClicked.month,
             secondClicked.date);
           var thirdClickDateObj = new Date(thirdClicked.year,
             thirdClicked.month,
             thirdClicked.date);
           if (secondClickDateObj > thirdClickDateObj && thirdClickDateObj > firstClickDateObj) {
             secondClicked = thirdClicked;
             // then choose dates again from the start :)
             bothCals.find(".calendar_content").find("div").each(function() {
               $(this).removeClass("selected");
             });
             selected = {};
             selected[firstClicked.year] = {};
             selected[firstClicked.year][firstClicked.month] = [firstClicked.date];
             selected = addChosenDates(firstClicked, secondClicked, selected);
           } else { // reset clicks
             selected = {};
             firstClicked = [];
             secondClicked = [];
             firstClick = false;
             secondClick = false;
             bothCals.find(".calendar_content").find("div").each(function() {
               $(this).removeClass("selected");
             });
           }
         }
         if (!firstClick) {
           firstClick = true;
           firstClicked = getClickedInfo(clicked, calendar);
           selected[firstClicked.year] = {};
           selected[firstClicked.year][firstClicked.month] = [firstClicked.date];
         } else {
           secondClick = true;
           secondClicked = getClickedInfo(clicked, calendar);

           // what if second clicked date is before the first clicked?
           var firstClickDateObj = new Date(firstClicked.year,
             firstClicked.month,
             firstClicked.date);
           var secondClickDateObj = new Date(secondClicked.year,
             secondClicked.month,
             secondClicked.date);

           if (firstClickDateObj > secondClickDateObj) {

             var cachedClickedInfo = secondClicked;
             secondClicked = firstClicked;
             firstClicked = cachedClickedInfo;
             selected = {};
             selected[firstClicked.year] = {};
             selected[firstClicked.year][firstClicked.month] = [firstClicked.date];

           } else if (firstClickDateObj.getTime() == secondClickDateObj.getTime()) {
             selected = {};
             firstClicked = [];
             secondClicked = [];
             firstClick = false;
             secondClick = false;
             $(this).removeClass("selected");
           }


           // add between dates to [selected]
           selected = addChosenDates(firstClicked, secondClicked, selected);
         }
         selectDates(selected);
       });

     }

     function selectDates(selected) {
       if (!$.isEmptyObject(selected)) {
         var dateElements1 = datesBody1.find('div');
         var dateElements2 = datesBody2.find('div');

         function highlightDates(passed_year, passed_month, dateElements) {
           if (passed_year in selected && passed_month in selected[passed_year]) {
             var daysToCompare = selected[passed_year][passed_month];
             for (var d in daysToCompare) {
               dateElements.each(function(index) {
                 if (parseInt($(this).text()) == daysToCompare[d]) {
                   $(this).addClass('selected');
                 }
               });
             }

           }
         }

         highlightDates(year, month, dateElements1);
         highlightDates(nextYear, nextMonth, dateElements2);
       }
     }

     function makeMonthArray(passed_month, passed_year) { // creates Array specifying dates and weekdays
       var e = [];
       for (var r = 1; r < getDaysInMonth(passed_year, passed_month) + 1; r++) {
         e.push({
           day: r,
           // Later refactor -- weekday needed only for first week
           weekday: daysArray[getWeekdayNum(passed_year, passed_month, r)]
         });
       }
       return e;
     }

     function makeWeek(week) {
       week.empty();
       for (var e = 0; e < 7; e++) {
         week.append("<div>" + daysArray[e].substring(0, 3) + "</div>")
       }
     }

     function getDaysInMonth(currentYear, currentMon) {
       return (new Date(currentYear, currentMon + 1, 0)).getDate();
     }

     function getWeekdayNum(e, t, n) {
       return (new Date(e, t, n)).getDay();
     }

     function checkToday(e) {
       var todayDate = today.getFullYear() + '/' + (today.getMonth() + 1) + '/' + today.getDate();
       var checkingDate = e.getFullYear() + '/' + (e.getMonth() + 1) + '/' + e.getDate();
       return todayDate == checkingDate;

     }

     function getAdjacentMonth(curr_month, curr_year, direction) {
       var theNextMonth;
       var theNextYear;
       if (direction == "next") {
         theNextMonth = (curr_month + 1) % 12;
         theNextYear = (curr_month == 11) ? curr_year + 1 : curr_year;
       } else {
         theNextMonth = (curr_month == 0) ? 11 : curr_month - 1;
         theNextYear = (curr_month == 0) ? curr_year - 1 : curr_year;
       }
       return [theNextMonth, theNextYear];
     }

     function b() {
       today = new Date;
       year = today.getFullYear();
       month = today.getMonth();
       var nextDates = getAdjacentMonth(month, year, "next");
       nextMonth = nextDates[0];
       nextYear = nextDates[1];
     }

     var e = 480;

     var today;
     var year,
       month,
       nextMonth,
       nextYear;

     var r = [];
     var i = [
       "JANUARY",
       "FEBRUARY",
       "MARCH",
       "APRIL",
       "MAY",
       "JUNE",
       "JULY",
       "AUGUST",
       "SEPTEMBER",
       "OCTOBER",
       "NOVEMBER",
       "DECEMBER"
     ];
     var daysArray = [
       "Sunday",
       "Monday",
       "Tuesday",
       "Wednesday",
       "Thursday",
       "Friday",
       "Saturday"
     ];

     var cal1 = $("#calendar_first");
     var calHeader1 = cal1.find(".calendar_header");
     var weekline1 = cal1.find(".calendar_weekdays");
     var datesBody1 = cal1.find(".calendar_content");

     var cal2 = $("#calendar_second");
     var calHeader2 = cal2.find(".calendar_header");
     var weekline2 = cal2.find(".calendar_weekdays");
     var datesBody2 = cal2.find(".calendar_content");

     var bothCals = $(".calendar");

     var switchButton = bothCals.find(".calendar_header").find('.switch-month');

     var calendars = {
       "cal1": {
         "name": "first",
         "calHeader": calHeader1,
         "weekline": weekline1,
         "datesBody": datesBody1
       },
       "cal2": {
         "name": "second",
         "calHeader": calHeader2,
         "weekline": weekline2,
         "datesBody": datesBody2
       }
     }


     var clickedElement;
     var firstClicked,
       secondClicked,
       thirdClicked;
     var firstClick = false;
     var secondClick = false;
     var selected = {};

     b();
     c(month, year, 0);
     c(nextMonth, nextYear, 1);
     switchButton.on("click", function() {
       var clicked = $(this);
       var generateCalendars = function(e) {
         var nextDatesFirst = getAdjacentMonth(month, year, e);
         var nextDatesSecond = getAdjacentMonth(nextMonth, nextYear, e);
         month = nextDatesFirst[0];
         year = nextDatesFirst[1];
         nextMonth = nextDatesSecond[0];
         nextYear = nextDatesSecond[1];

         c(month, year, 0);
         c(nextMonth, nextYear, 1);
       };
       if (clicked.attr("class").indexOf("left") != -1) {
         generateCalendars("previous");
       } else {
         generateCalendars("next");
       }
       clickedElement = bothCals.find(".calendar_content").find("div");
     });


     //  Click picking stuff
     function getClickedInfo(element, calendar) {
       var clickedInfo = {};
       var clickedCalendar,
         clickedMonth,
         clickedYear;
       clickedCalendar = calendar.name;
       clickedMonth = clickedCalendar == "first" ? month : nextMonth;
       clickedYear = clickedCalendar == "first" ? year : nextYear;
       clickedInfo = {
         "calNum": clickedCalendar,
         "date": parseInt(element.text()),
         "month": clickedMonth,
         "year": clickedYear
       }
       return clickedInfo;
     }


     // Finding between dates MADNESS. Needs refactoring and smartening up :)
     function addChosenDates(firstClicked, secondClicked, selected) {
       if (secondClicked.date > firstClicked.date || secondClicked.month > firstClicked.month || secondClicked.year > firstClicked.year) {

         var added_year = secondClicked.year;
         var added_month = secondClicked.month;
         var added_date = secondClicked.date;

         if (added_year > firstClicked.year) {
           // first add all dates from all months of Second-Clicked-Year
           selected[added_year] = {};
           selected[added_year][added_month] = [];
           for (var i = 1; i <= secondClicked.date; i++) {
             selected[added_year][added_month].push(i);
           }

           added_month = added_month - 1;
           while (added_month >= 0) {
             selected[added_year][added_month] = [];
             for (var i = 1; i <= getDaysInMonth(added_year, added_month); i++) {
               selected[added_year][added_month].push(i);
             }
             added_month = added_month - 1;
           }

           added_year = added_year - 1;
           added_month = 11; // reset month to Dec because we decreased year
           added_date = getDaysInMonth(added_year, added_month); // reset date as well

           // Now add all dates from all months of inbetween years
           while (added_year > firstClicked.year) {
             selected[added_year] = {};
             for (var i = 0; i < 12; i++) {
               selected[added_year][i] = [];
               for (var d = 1; d <= getDaysInMonth(added_year, i); d++) {
                 selected[added_year][i].push(d);
               }
             }
             added_year = added_year - 1;
           }
         }

         if (added_month > firstClicked.month) {
           if (firstClicked.year == secondClicked.year) {
             selected[added_year][added_month] = [];
             for (var i = 1; i <= secondClicked.date; i++) {
               selected[added_year][added_month].push(i);
             }
             added_month = added_month - 1;
           }
           while (added_month > firstClicked.month) {
             selected[added_year][added_month] = [];
             for (var i = 1; i <= getDaysInMonth(added_year, added_month); i++) {
               selected[added_year][added_month].push(i);
             }
             added_month = added_month - 1;
           }
           added_date = getDaysInMonth(added_year, added_month);
         }

         for (var i = firstClicked.date + 1; i <= added_date; i++) {
           selected[added_year][added_month].push(i);
         }
       }
       return selected;
     }
   });
 </script>


 <script src="https://demos.creative-tim.com/fullcalendar/../assets/js/fullcalendar.js"></script>

 <!-- full calander js -->

 <script>
   $(document).ready(function() {
     var date = new Date();
     var d = date.getDate();
     var m = date.getMonth();
     var y = date.getFullYear();

     /*  className colors

       className: default(transparent), important(red), chill(pink), success(green), info(blue)

       */

     /* initialize the external events
       -----------------------------------------------------------------*/

     $("#external-events div.external-event").each(function() {
       // create an Event Object (https://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
       // it doesn't need to have a start or end
       var eventObject = {
         title: $.trim($(this).text()) // use the element's text as the event title
       };

       // store the Event Object in the DOM element so we can get to it later
       $(this).data("eventObject", eventObject);

       // make the event draggable using jQuery UI
       $(this).draggable({
         zIndex: 999,
         revert: true, // will cause the event to go back to its
         revertDuration: 0 //  original position after the drag
       });
     });

     /* initialize the calendar
       -----------------------------------------------------------------*/

     var calendar = $("#calendar_events").fullCalendar({
       header: {
         left: "title",
         center: "agendaDay,agendaWeek,month",
         right: "prev,next today"
       },
       editable: true,
       firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
       selectable: true,
       defaultView: "month",

       axisFormat: "h:mm",
       columnFormat: {
         month: "ddd", // Mon
         week: "ddd d", // Mon 7
         day: "dddd M/d", // Monday 9/7
         agendaDay: "dddd d"
       },
       titleFormat: {
         month: "MMMM yyyy", // September 2009
         week: "MMMM yyyy", // September 2009
         day: "MMMM yyyy" // Tuesday, Sep 8, 2009
       },
       allDaySlot: false,
       selectHelper: true,
       select: function(start, end, allDay) {
         var title = prompt("Event Title:");
         if (title) {
           calendar.fullCalendar(
             "renderEvent", {
               title: title,
               start: start,
               end: end,
               allDay: allDay
             },
             true // make the event "stick"
           );
         }
         calendar.fullCalendar("unselect");
       },
       droppable: true, // this allows things to be dropped onto the calendar !!!
       drop: function(date, allDay) {
         // this function is called when something is dropped

         // retrieve the dropped element's stored Event Object
         var originalEventObject = $(this).data("eventObject");

         // we need to copy it, so that multiple events don't have a reference to the same object
         var copiedEventObject = $.extend({}, originalEventObject);

         // assign it the date that was reported
         copiedEventObject.start = date;
         copiedEventObject.allDay = allDay;

         // render the event on the calendar
         // the last `true` argument determines if the event "sticks" (https://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
         $("#calendar").fullCalendar("renderEvent", copiedEventObject, true);

         // is the "remove after drop" checkbox checked?
         if ($("#drop-remove").is(":checked")) {
           // if so, remove the element from the "Draggable Events" list
           $(this).remove();
         }
       },

       events: [{
           title: "All Day Event",
           start: new Date(y, m, 1)
         },
         {
           id: 999,
           title: "Repeating Event",
           start: new Date(y, m, d - 3, 16, 0),
           allDay: false,
           className: "info"
         },
         {
           id: 999,
           title: "Repeating Event",
           start: new Date(y, m, d + 4, 16, 0),
           allDay: false,
           className: "info"
         },
         {
           title: "Meeting",
           start: new Date(y, m, d, 10, 30),
           allDay: false,
           className: "important"
         },
         {
           title: "Lunch",
           start: new Date(y, m, d, 12, 0),
           end: new Date(y, m, d, 14, 0),
           allDay: false,
           className: "important"
         },
         {
           title: "Birthday Party",
           start: new Date(y, m, d + 1, 19, 0),
           end: new Date(y, m, d + 1, 22, 30),
           allDay: false
         },
         {
           title: "Click for Google",
           start: new Date(y, m, 28),
           end: new Date(y, m, 29),
           url: "https://google.com/",
           className: "success"
         }
       ]
     });
   });
 </script>

 <script>
   // tabs wizard sec
   var current = 0;
   var tabs = $(".tab");
   var tabs_pill = $(".tab-pills");

   loadFormData(current);

   function loadFormData(n) {
     $(tabs_pill[n]).addClass("active");
     $(tabs[n]).removeClass("d-none");
     $("#back_button").attr("disabled", n == 0 ? true : false);
     n == tabs.length - 1 ?
       $("#next_button").text("Submit for review").removeAttr("onclick") :
       $("#next_button")
       .attr("type", "button")
       .text("Save & next")
       .attr("onclick", "next()");
   }

   function next() {
     $(tabs[current]).addClass("d-none");
     $(tabs_pill[current]).removeClass("active");

     current++;
     loadFormData(current);
   }

   function back() {
     $(tabs[current]).addClass("d-none");
     $(tabs_pill[current]).removeClass("active");

     current--;
     loadFormData(current);
   }
 </script>


 <!-- count characters js -->
 <script>
   function markRequired() {
     var control = $(this).children(".form-control");
     var label = $(this).children("label");
     if (control.attr("required") == "required") {
       label.addClass("required");
     }
   }

   function countCharacters() {
     var max = $(this).attr("maxlength");
     var length = $(this).val().length;
     var counter = max - length;
     var helper = $(this).next(".form-text");
     // Switch to the singular if there's exactly 1 character remaining
     if (counter !== 1) {
       helper.text(counter + " 80");
     } else {
       helper.text(counter + " 80");
     }
     // Make it red if there are 0 characters remaining
     if (counter === 0) {
       helper.removeClass("text-muted");
       helper.addClass("text-danger");
     } else {
       helper.removeClass("text-danger");
       helper.addClass("text-muted");
     }
   }

   $(document).ready(function() {
     $(".form-group").each(markRequired);
     $(".form-control").each(countCharacters);
     $(".form-control").keyup(countCharacters);
   });
 </script>

 <!-- tiny mc js -->

 <script>
   tinymce.init({
     selector: 'textarea#premiumskinsandicons-bootstrap',
     content_css: '//www.tiny.cloud/css/codepen.min.css',
     skin: 'bootstrap',
     plugins: 'image lists link anchor charmap',
     toolbar: 'formatselect | bold italic bullist numlist | link image charmap',
     menubar: false,
     setup: (editor) => {
       editor.on('init', () => {
         editor.getContainer().style.transition = "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
       });
       editor.on('focus', () => {
         editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)",
           editor.getContainer().style.borderColor = "#80bdff"
       });
       editor.on('blur', () => {
         editor.getContainer().style.boxShadow = "",
           editor.getContainer().style.borderColor = ""
       });
     }
   });
 </script>

 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

 <script>
   // quiz step form js

   $(document).ready(function() {
     var currentStep = 0;
     var totalSteps = $('.step-form-step').length;

     function updateProgress() {
       var progress = (currentStep / (totalSteps - 1)) * 100;
       $('.progress-bar').css('width', progress + '%').text(Math.round(progress) + '%');
     }

     $('.next-step').click(function() {
       if (currentStep < totalSteps - 1) {
         $('.step-form-step').eq(currentStep).removeClass('active');
         currentStep++;
         $('.step-form-step').eq(currentStep).addClass('active');
         updateProgress();
       }
       if (currentStep === totalSteps - 1) {
         $('.confirm-step').show();
         $('.next-step, .prev-step').hide();
       }
      //  delete
      // if (currentStep === 2) {
      //    $('#CNQ').show();
      //    $('.next-step, .prev-step').hide();
      //  }

     });

     $('.prev-step').click(function() {
       if (currentStep > 0) {
         $('.step-form-step').eq(currentStep).removeClass('active');
         currentStep--;
         $('.step-form-step').eq(currentStep).addClass('active');
         updateProgress();
         $('.confirm-step').hide();
         $('.next-step, .prev-step').show();
       }
     });

     $('.confirm-step').click(function() {
       $('.thank-you-message').show();
       $('.progress, .step-form, .next-step, .prev-step, .confirm-step').hide();
       $("#right-column").removeClass("col-lg-8").addClass("col-lg-12");
       $(".main_heading").hide();

       // Hide the right column
       $("#left-column").hide();
     });
   });
 </script>

 <!-- progress slider js -->

 <script>
   var slider = document.getElementById("myRange");
   var output = document.getElementById("demo");
   output.innerHTML = slider.value; // Display the default slider value

   // Update the current slider value (each time you drag the slider handle)
   slider.oninput = function() {
     output.innerHTML = this.value;
   }
 </script>


 <!-- col width changes -->

 <!-- <script>
  $(document).ready(function() {
  // Assuming you track the current step and know when the last step is reached
  var lastStep = true; // Change this condition as per your form logic

  if (lastStep) {
    // Adjust left column to occupy full width
    $("#right-column").removeClass("col-md-10").addClass("col-md-12");
    
    // Hide the right column
    $("#left-column").hide();
  }
});

</script> -->




 </body>

 </html>