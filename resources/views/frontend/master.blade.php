<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/flag-icons/css/flag-icons.min.css" />
    <link href="{{asset('frontend')}}/assets/vendor/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/font/style.css">
    <link href="{{asset('frontend')}}/tailwind.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/assets/css/scss/style.css" rel="stylesheet">

    <title>@yield('title')</title>
</head>

<body>

  {{-- topbar --}}
    @include('frontend.include.topbar')
    <!-- header section Start -->

    @include('frontend.include.header')


    <!-- header section Ends -->


{{-- main section --}}
    @yield('Maincontent')


    <!-- footer Start -->

    @include('frontend.include.footer')

    <!-- footer Ends -->


    <!-- Phosphor icon -->
    <script src="{{asset('frontend')}}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('frontend')}}/assets/font/phosphor-icon.js"></script>
    <script src="{{asset('frontend')}}/assets/vendor/swiper-bundle.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/swiper-init.js"></script>
    <script src="{{asset('frontend')}}/assets/vendor/easing.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/main.js"></script>

</body>

</html>
