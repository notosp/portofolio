<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Yasser Elgammal') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <!-- <link href="{{ asset('import/assets/img/favicon.ico') }}" rel="icon"> -->

    <!-- Google Web Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> -->

    <!-- Font Awesome -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet"> -->

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('import/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('import/assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="{{ asset('import/assets/css/style.css') }}" rel="stylesheet"> -->


    <!-- ============================================================================= -->
    <!-- css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/animate.css') }}">

    <!-- my css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('import/assets/css/responsive.css') }}">
</head>

<body class="clearfix">
    <div data-scroll='0' class="thetop"></div>
    @yield('content')

    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('import/assets/lib/typed/typed.min.js') }}"></script>
    <script src="{{ asset('import/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('import/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('import/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('import/assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('import/assets/lib/lightbox/js/lightbox.min.js') }}"></script> -->

    <!-- Contact Javascript File -->
    <!-- <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('import/assets/mail/contact.js') }}"></script> -->

    <script src="{{ asset('import/assets/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/materialize.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/circle-progress.js') }}"></script>

    <!-- my custom js -->
    <script src="{{ asset('import/assets/js/custom.js') }}"></script>
</body>

</html>