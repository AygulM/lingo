<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-72x72-precomposed.png" sizes="72x72">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-114x114-precomposed.png" sizes="114x114">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-144x144-precomposed.png" sizes="144x144">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-precomposed.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png">
    

    <link href="/assets/css/themify-icons.css" rel="stylesheet">
    <link href="/assets/css/flaticon.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/animate.css" rel="stylesheet">
    <link href="/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="/assets/css/owl.theme.css" rel="stylesheet">
    <link href="/assets/css/slick.css" rel="stylesheet">
    <link href="/assets/css/slick-theme.css" rel="stylesheet">
    <link href="/assets/css/swiper.min.css" rel="stylesheet">
    <link href="/assets/css/owl.transitions.css" rel="stylesheet">
    <link href="/assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="/assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="/assets/sass/style.css" rel="stylesheet">

    
    @yield('dopLink')

</head>
<body>

    <div class="page-wrapper">
        <!-- start preloader -->
        <!-- <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="/assets/images/preloader.png" alt="">
                </div>
            </div>
        </div> -->
        <!-- end preloader -->

        @include('partials.header')
        

        @yield('content')

        @include('partials.footer')
    </div>
    


     <!-- All JavaScript files
    ================================================== -->
    <!-- <script src="/assets/js/jquery.min.js"></script> -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="/assets/js/modernizr.custom.js"></script>
    <script src="/assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="/assets/js/script.js"></script>
</body>

</html>
