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
    <!-- ==================== header-section start ==================== -->
    <header id="header-section" class="header-section mb-30 clearfix">
        <div class="">
            <nav class="main-nav">
                <div class="nav-wrapper main-nav-wrapper">

                    <ul class="alternative-menu ul-li responsive_menu_fixed">

                        <li class="alt-search-area">
                            <form action="#">
                                <input class="alternative-search" type="search" placeholder="search">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </li>

                        <li class="side-menu-btn right">
                            <a href="#" class="button-collapse waves-effect default" data-activates="mobile-demo">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.alternative-menu -->
                    <div class=" hello_icon_menu hello_single_index_menu1">
                        <ul class="ul-li-block side-nav" id="mobile-demo">

                            <li class="sn-user">
                                <span class="sn-user-img">
                                    <img src="{{ asset("storage/$user?->profile_pic") }}" alt="Image">
                                </span>
                                <span class="sn-user-name">
                                    {{ $user?->name }}
                                </span>
                                <a href="#" class="sn-cv-link common-color">download cv</a>
                            </li>
                            <!-- /.sn-user -->

                            <li class="sn-item">
                                <a href="" class="waves-effect">
                                    <i class="fa fa-home" aria-hidden="true"></i> Home
                                </a>
                            </li>
                            <li class="sn-item">
                                <a href="" class="waves-effect">
                                    <i class="fa fa-user-o" aria-hidden="true"></i> About
                                </a>
                            </li>
                            <li class="sn-item">
                                <a href="" class="waves-effect">
                                    <i class="fa fa-lightbulb-o" aria-hidden="true"></i> Skills
                                </a>
                            </li>
                            <li class="sn-item">
                                <a href="" class="waves-effect">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i> Education
                                </a>
                            </li>
                            <li class="sn-item">
                                <a href="" class="waves-effect">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i> Portfolio
                                </a>
                            </li>
                            <li class="sn-item">
                                <a href="" class="waves-effect">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i> Testimolial
                                </a>
                            </li>
                            <li class="sn-item">
                                <a href="" class="waves-effect">
                                    <i class="fa fa-pencil" aria-hidden="true"></i> Experience
                                </a>
                            </li>
                            <li class="sn-item">
                                <a href="" class="waves-effect">
                                    <i class="fa fa-newspaper-o" aria-hidden="true"></i> Blog
                                </a>
                            </li>
                            <li class="sn-item">
                                <a href="" class="waves-effect">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i> Contant
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="hello_main_navigation hello_single_index_menu2">
                        <ul id="nav-mobile" class="right main-nav-ul">
                            <li class="active"><a href="" class="nav-mobile">home</a></li>
                            <li><a href="" class="waves-effect default">about</a></li>
                            <li><a href="" class="waves-effect default">skill</a></li>
                            <li><a href="" class="waves-effect default">education</a></li>
                            <li><a href="" class="waves-effect default">portfolio</a></li>
                            <li><a href="" class="waves-effect default">testimonial</a></li>
                            <li><a href="" class="waves-effect default">exprience</a></li>
                            <li><a href="" class="waves-effect default">blog</a></li>
                            <li><a href="" class="waves-effect default">contact</a></li>
                            <li>
                                <a href="" class="waves-effect default cd-search-trigger">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- /.main-nav-ul -->
                    <div class="hello_menu_fixed_main_wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="hello_logo_wrapper">
                                    <div class="hello_logo">
                                        <img src="{{ asset('import/assets/images/logo.png') }}" alt="hello_logo">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                <div class="hello_fixed_nav_wrapper hello_single_index_menu3">
                                    <ul class="hello_nav_fixed">
                                        <li><a href="" class="nav-mobile">home</a></li>
                                        <li><a href="" class="waves-effect default">about</a></li>
                                        <li><a href="" class="waves-effect default">skill</a></li>
                                        <li><a href="" class="waves-effect default">education</a></li>
                                        <li><a href="" class="waves-effect default">portfolio</a></li>
                                        <li><a href="" class="waves-effect default">testimonial</a></li>
                                        <li><a href="" class="waves-effect default">exprience</a></li>
                                        <li><a href="" class="waves-effect default">blog</a></li>
                                        <li><a href="" class="waves-effect default">contact</a></li>
                                        <li>
                                            <a href="" class="waves-effect default cd-search-trigger">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.main-nav-wrapper -->
            </nav>
        </div>
        <!-- /.
			-->

        <div id="cd-search" class="cd-search">
            <form action="#">
                <input type="search" placeholder="Search...">
            </form>
        </div>

    </header>
    <!-- /#header-section -->
    <!-- ==================== header-section end ==================== -->
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