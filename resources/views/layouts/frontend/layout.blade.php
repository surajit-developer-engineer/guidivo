<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <title>Guidivo | Your Trusted Guide to Top Brands & Services</title>
    <meta name="keywords" content="" />
    <meta name="description"
        content="Guidivo connects consumers and business owners with top-rated brands and services
across various industries. Find trusted guidance, expert insights, and top picks today." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <link rel="icon" type="image/png" href="images/favicon.png"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" />
    <link type="text/css" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.min.css"
        rel="stylesheet" />
    <!-- Bootstrap -->
    <link type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Owl Carousel -->
    <link type="text/css" href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <!-- Gallery Css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.css') }}" />
    <!-- Menu Css -->
    <link type="text/css" href="{{ asset('frontend/css/slimmenu.css') }}" rel="stylesheet" />
    <!-- Custom Css -->
    <link type="text/css" href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" />
    <!-- Font Link -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />

    @stack('css_styles')
</head>

<body>

    @include('includes.frontend.header')

    @yield('content')

    @include('includes.frontend.footer')

    <!-- JS Start here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        window.jQuery ||
            document.write('<script src="js/jquery.min.js"><\/script>');
    </script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- Custome js -->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>

    @stack('js_scripts')
</body>

</html>
