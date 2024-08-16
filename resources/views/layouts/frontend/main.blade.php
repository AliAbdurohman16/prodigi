
<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8" />
        <title>Prodigi - Integrator IT Profesional</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Prodigi Integrator IT Profesional" />
        <meta name="keywords" content="Prodigi, Integrator IT Profesional, Integrator, IT, Solution, IT Integrator" />
        <meta name="author" content="Ali Abdurohman" />
        <meta name="email" content="aliabdurohman16@gmail.com" />
        <meta name="website" content="https://aliabdurohman16.github.io/" />
        <meta name="Version" content="v4.2.0" />

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('default/prodigi-color.png') }}" />
        
        <!-- Css -->
        <link href="{{ asset('frontend') }}/assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
        <link href="{{ asset('frontend') }}/assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('frontend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend') }}/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
        <link href="{{ asset('frontend') }}/assets/css/style.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
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

        @include('layouts.frontend.navbar')

        @yield('content')
        
        @include('layouts.frontend.footer')

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
        <!-- Back to top -->

        <!-- Javascript -->
        <!-- JAVASCRIPT -->
        <script src="{{ asset('frontend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/libs/feather-icons/feather.min.js"></script>
        <!-- SLIDER -->
        <script src="{{ asset('frontend') }}/assets/libs/tiny-slider/min/tiny-slider.js"></script>
        <!-- Lightbox -->
        <script src="{{ asset('frontend') }}/assets/libs/tobii/js/tobii.min.js"></script>
        <!-- Main Js -->
        <script src="{{ asset('frontend') }}/assets/js/plugins.init.js"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="{{ asset('frontend') }}/assets/js/app.js"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    </body>
</html>