<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8" />
        <title>Prodigi - Integrator IT Profesional</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('default/prodigi-color.png') }}" />
        <!-- Css -->
        <link href="{{ asset('backend') }}/assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend') }}/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
        <link href="{{ asset('backend') }}/assets/css/style.min.css" class="theme-opt" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->

        <div class="page-wrapper toggled">
            @include('layouts.backend.sidebar')

            <!-- Start Page Content -->
            <main class="page-content bg-light">
                @include('layouts.backend.topbar')

                @yield('content')

                @include('layouts.backend.footer')
            </main>
            <!--End page-content" -->
        </div>
        <!-- page-wrapper -->
        
        <!-- javascript -->
        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/feather-icons/feather.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/apexcharts/apexcharts.min.js"></script>
        <!-- Main Js -->
        <script src="{{ asset('backend') }}/assets/js/plugins.init.js"></script>
        <script src="{{ asset('backend') }}/assets/js/app.js"></script>
    </body>

</html>