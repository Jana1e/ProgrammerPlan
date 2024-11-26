<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Programmer Plan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ getBaseURL() }}">
    <meta name="file-base-url" content="{{ getFileBaseURL() }}">
    <title>@yield('meta_title', get_setting('website_name') . ' | ' . get_setting('site_motto'))</title>
    <!-- Favicons -->
    <link href="../assets/img/logo.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- tinymycs editor -->
    <!-- <link rel="stylesheet" href="https://www.tiny.cloud/css/codepen.min.css"> -->

    <!-- Template Main CSS File -->


    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- full calander css -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.3.0/main.min.css">

    <!-- event calader css -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/fullcalendar/../assets/css/fullcalendar.css">

    <!-- dropdown  menu calander -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet" />
    <!-- ends -->

</head>



@php
    $user = auth()->user();
    $user_avatar = null;
    $carts = [];
    if ($user && $user->avatar_original != null) {
        $user_avatar = uploaded_asset($user->avatar_original);
    }

    $system_language = get_system_language();
@endphp



<body class="font-sans antialiased">

    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">



        @include('frontend.inc.nav')

        <!-- Page Content -->
        <main id="main" class="main">
            @yield('content') <!-- Content section will be replaced by child views -->
        </main>

        <!-- footer -->
        @include('frontend.inc.footer')
        <!-- Back-to-top Button -->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up-short"></i>
        </a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
        <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
        <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <!-- FullCalendar JS -->
        <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.2.0/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.2.0/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

        <!-- UUID Generator -->
        <script src="https://cdn.jsdelivr.net/npm/uuid@8.3.2/dist/umd/uuidv4.min.js"></script>

        <script>
            var AIZ = AIZ || {};
            AIZ.local = {
                nothing_selected: '{!! translate('Nothing selected', null, true) !!}',
                nothing_found: '{!! translate('Nothing found', null, true) !!}',
                choose_file: '{{ translate('Choose file') }}',
                file_selected: '{{ translate('File selected') }}',
                files_selected: '{{ translate('Files selected') }}',
                add_more_files: '{{ translate('Add more files') }}',
                adding_more_files: '{{ translate('Adding more files') }}',
                drop_files_here_paste_or: '{{ translate('Drop files here, paste or') }}',
                browse: '{{ translate('Browse') }}',
                upload_complete: '{{ translate('Upload complete') }}',
                upload_paused: '{{ translate('Upload paused') }}',
                resume_upload: '{{ translate('Resume upload') }}',
                pause_upload: '{{ translate('Pause upload') }}',
                retry_upload: '{{ translate('Retry upload') }}',
                cancel_upload: '{{ translate('Cancel upload') }}',
                uploading: '{{ translate('Uploading') }}',
                processing: '{{ translate('Processing') }}',
                complete: '{{ translate('Complete') }}',
                file: '{{ translate('File') }}',
                files: '{{ translate('Files') }}',
            }
        </script>



        <!-- SCRIPTS -->
        <script src="{{ static_asset('assets/js/vendors.js') }}"></script>
        <script src="{{ static_asset('assets/js/aiz-core.js?v=') }}{{ rand(1000, 9999) }}"></script>

        <script>
            @if (Route::currentRouteName() == 'home' || Route::currentRouteName() == '/')


                $.post('{{ route('home.section.best_selling') }}', {
                        _token: '{{ csrf_token() }}'
                    },
                    function(data) {
                        $('#section_best_selling').html(data);
                        AIZ.plugins.slickCarousel();
                    });
                $.post('{{ route('home.section.featured') }}', {
                        _token: '{{ csrf_token() }}'
                    },
                    function(data) {
                        $('#section_featured').html(data);

                        AIZ.plugins.slickCarousel();
                    });
            @endif

            if ($('#lang-change').length > 0) {
                $('#lang-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e) {
                        e.preventDefault();

                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('{{ route('language.change') }}', {
                            _token: AIZ.data.csrf,
                            locale: locale
                        }, function(data) {
                            location.reload();
                        });

                    });
                });
            }
        </script>
