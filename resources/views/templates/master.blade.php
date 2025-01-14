<!DOCTYPE html>

<html lang="fr">


<!-- Mirrored from gnodesign.com/templates/movify/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jun 2022 20:03:18 GMT -->
<head>
    <meta charset="UTF-8">

    <!-- ===== Mobile viewport optimized ===== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

    <!-- ===== Meta Tags - Description for Search Engine purposes ===== -->
    <meta name="description" content="Movify - Movies, Series & Cinema HTML Template">
    <meta name="keywords" content="movies, series, online streaming, html template, cinema html template">
    <meta name="author" content="GnoDesign">

    <!-- ===== Website Title ===== -->
    <title>@yield('title')</title>

    <!-- ===== Favicon & Different size apple touch icons ===== -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/apple-touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/apple-touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/apple-touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/apple-touch-icon-ipad-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="assets/images/apple-touch-icon-ipad-pro.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon-iphone-6-plus.png">
    <link rel="icon" sizes="192x192" href="assets/images/icon-hd.png">
    <link rel="icon" sizes="128x128" href="assets/images/icon.png">

    <!-- ===== Google Fonts ===== -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- ===== CSS links ===== -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mmenu.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    {{-- Mes styles --}}
    <style>
        #img {
            width: 50px;
            height: 50px;
        }
    </style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>


    <!-- =============== START OF PRELOADER =============== -->
    <div class="loading">
        <div class="loading-inner">
            <div class="loading-effect">
                <div class="object"></div>
            </div>
        </div>
    </div>
    <!-- =============== END OF PRELOADER =============== -->



    <!-- =============== START OF RESPONSIVE - MAIN NAV =============== -->
    <nav id="main-mobile-nav"></nav>
    <!-- =============== END OF RESPONSIVE - MAIN NAV =============== -->



    <!-- =============== START OF WRAPPER =============== -->
    <div class="wrapper">


        <!-- =============== START OF HEADER NAVIGATION =============== -->
        <!-- Insert the class "sticky" in the header if you want a sticky header -->
        <header class="header header-fixed header-transparent text-white">
            <div class="container-fluid">

                <!-- ====== Start of Navbar ====== -->
                <nav class="navbar navbar-expand-lg">

                    <a class="navbar-brand" href="index-2.html">
                        <!-- INSERT YOUR LOGO HERE -->
                        <img src="assets/images/logo.svg" alt="logo" width="150" class="logo">
                        <!-- INSERT YOUR WHITE LOGO HERE -->
                        <img src="assets/images/logo-white.svg" alt="white logo" width="150" class="logo-white">
                    </a>

                    <button id="mobile-nav-toggler" class="hamburger hamburger--collapse" type="button">
                       <span class="hamburger-box">
                          <span class="hamburger-inner"></span>
                       </span>
                    </button>

                        <!-- ====== Start of #main-nav ====== -->
                        <div class="navbar-collapse" id="main-nav">

                            <!-- ====== Start of Main Menu ====== -->
                            <ul class="navbar-nav mx-auto" id="main-menu">
                                <!-- Menu Item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="/" >Acceuil</a>
                                </li>
    
                                <!-- Menu Item -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Films & Series</a>
    
                                    <!-- Dropdown Menu -->
                                    <ul class="dropdown-menu">
                                        <!-- Menu Item -->
                                        <li>
                                            <a class="dropdown-item" href="movie-list">Films 1</a>
                                        </li>
    
                                        <!-- Menu Item -->
                                        <li>
                                            <a class="dropdown-item" href="movie-grid">Films 2</a>
                                        </li>
    
                                    </ul>
                                </li>
    
                                <!-- Menu Item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="contact-us">Nous Contacter</a>
                                </li>
    
                            </ul>
                            <!-- ====== End of Main Menu ====== -->
    
    
                            <!-- ====== Start of Extra Nav ====== -->
                            <ul class="navbar-nav extra-nav">
    
                                <!-- Menu Item -->
                                <li class="nav-item">
                                    <a class="nav-link toggle-search" href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
    
                                <!-- Menu Item -->
                                <li class="nav-item notification-wrapper">
                                    <a class="nav-link notification" href="#">
                                        <i class="fa fa-globe"></i>
                                        <span class="notification-count">2</span>
                                    </a>
                                </li>
    
                                <!-- Menu Item -->
                                <li class="nav-item m-auto">{{-- #login-register-popup --}}
                                        {{-- <i class="icon-user"></i> --}}
                                        {{-- @if (Auth::check())
                                            {{ Auth::user()->name }}
                                        @else
                                            Se connceter
                                        @endif--}}
    
                                        @guest
                                            {{-- @if (Route::has('login'))
                                                    <a class="btn btn-main btn-effect" href="{{ route('login') }}"><i class="icon-user"></i> {{ __('Se connecter') }}</a>
                                            @endif --}}
    
                                            @if (Route::has('register'))
                                                <a class="btn btn-main btn-effect" href="{{ route('register') }}"><i class="icon-user"></i> {{ __('S\'inscrire') }}</a>
                                                <a class="btn btn-main btn-effect" href="{{ route('login') }}"><i class="icon-user"></i> {{ __('S\'identifier') }}</a>
                                            @endif 
                                        @else
                                            @if ($valide = Session::get('success'))
                                                @foreach ($infoBillet as $item)
                                                    <div class="col-lg-2">
                                                        <img src="/images/{{$item->image}}" class="img-fluid rounded" alt="Image televerser" id="img">
                                                    </div>
                                                @endforeach
                                            @endif
                                            <li class="nav-item">
                                                @if (isset($exist))
                                                    <a class="btn btn-main btn-effect" href="http://localhost:8000/generate-pdf"><i class="fa-solid fa-download"></i> {{ __('Billet_PDF') }}</a>
                                                @endif
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="btn btn-main btn-effect dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    <i class="icon-user"></i> {{ Auth::user()->name }}
                                                </a>
                
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Se deconnecter') }}
                                                    </a>
                
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                </li>
                            </ul>
                            <!-- ====== End of Extra Nav ====== -->
    
                        </div>
                        <!-- ====== End of #main-nav ====== -->
                </nav>
                <!-- ====== End of Navbar ====== -->

            </div>
        </header>
        <!-- =============== END OF HEADER NAVIGATION =============== -->



        @yield('content')





        <!-- =============== START OF FOOTER =============== -->
        <footer class="footer1 bg-dark">

            <!-- ===== START OF FOOTER COPYRIGHT AREA ===== -->
            <div class="footer-copyright-area ptb30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex">
                                <div class="links">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#">
                                            Confidentialité & Cookies</a></li>
                                        <li class="list-inline-item"><a href="#">Termes & Conditions</a></li>
                                        <li class="list-inline-item"><a href="#">Mention Legal</a></li>
                                        <li class="list-inline-item"><a href="#">Communauté</a></li>
                                    </ul>
                                </div>

                                <div class="copyright ml-auto">Tous droits réservés par <a href="#">Movify</a>.</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===== END OF FOOTER COPYRIGHT AREA ===== -->

        </footer>
        <!-- =============== END OF FOOTER =============== -->

    </div>
    <!-- =============== END OF WRAPPER =============== -->




    <!-- =============== START OF GENERAL SEARCH WRAPPER =============== -->
    <div class="general-search-wrapper">
        <form class="general-search" role="search" method="get" action="#">
            <input type="text" placeholder="Entrer votre recherche">
            <span id="general-search-close" class="ti-close toggle-search"></span>
        </form>
    </div>
    <!-- =============== END OF GENERAL SEARCH WRAPPER =============== -->


    <!-- ===== Start of Back to Top Button ===== -->
    <div id="backtotop">
        <a href="#"></a>
    </div>
    <!-- ===== End of Back to Top Button ===== -->



    <!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.mmenu.js"></script>
    <script src="assets/js/jquery.inview.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/headroom.js"></script>
    <script src="assets/js/custom.js"></script>

    <!-- ===== Slider Revolution core JavaScript files ===== -->
    <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- ===== Slider Revolution extension scripts ===== -->
    <script type="text/javascript" src="/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

</body>


<!-- Mirrored from gnodesign.com/templates/movify/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jun 2022 20:03:20 GMT -->
</html>
