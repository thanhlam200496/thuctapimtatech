<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Admin dashboard for managing the application.">
    <meta name="keywords" content="Admin, Dashboard, Laravel">
    <meta name="author" content="Your Name">

    <link rel="shortcut icon" href="{{ asset('adminn/assets/images/favicon.svg') }}">
    <link rel="stylesheet" href="{{ asset('adminn/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('adminn/assets/fonts/bootstrap/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('adminn/assets/css/main.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('adminn/assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}">
    <script src="https://kit.fontawesome.com/2b285c875f.js" crossorigin="anonymous"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="page-wrapper">
        <div class="main-container">
            @include('admin.layouts.header')
            @include('admin.layouts.menu')
            <div class="content-wrapper">
                {{-- <section class="content-header">
                    <div class="alert">
                        <h4>@yield('title-page')</h4>
                    </div>
                </section> --}}
                @yield('main-content')
            </div>
            @include('admin.layouts.footer')
        </div>

        <!-- Chart.js and date-fns adapter -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/date-fns@2.27.0/dist/date-fns.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns@2.0.0/dist/chartjs-adapter-date-fns.umd.js"></script>

        <!-- jQuery 3 -->
        <script src="{{ asset('adminn/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('adminn/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('adminn/assets/js/modernizr.js') }}"></script>
        <script src="{{ asset('adminn/assets/js/moment.js') }}"></script>

        <!-- Vendor Js Files -->
        <script src="{{ asset('adminn/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
        <script src="{{ asset('adminn/assets/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>

        <!-- Apex Charts -->
        <script src="{{ asset('adminn/assets/vendor/apex/apexcharts.min.js') }}"></script>
        <script src="{{ asset('adminn/assets/vendor/apex/custom/sales/salesGraph.js') }}"></script>
        <script src="{{ asset('adminn/assets/vendor/apex/custom/sales/revenueGraph.js') }}"></script>
        <script src="{{ asset('adminn/assets/vendor/apex/custom/sales/taskGraph.js') }}"></script>

        <!-- Main Js Required -->
        <script src="{{ asset('adminn/assets/js/main.js') }}"></script>

        @yield('custom-js')
    </div>
</body>

</html>
