<!DOCTYPE html>

<html lang="fr">


<!-- Mirrored from gnodesign.com/templates/movify/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jun 2022 20:03:22 GMT -->
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
    <title>Movify | Achat Billets</title>

    <!-- ===== Favicon & Different size apple touch icons ===== -->
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/apple-touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/apple-touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/apple-touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/apple-touch-icon-ipad-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="/assets/images/apple-touch-icon-ipad-pro.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon-iphone-6-plus.png">
    <link rel="icon" sizes="192x192" href="/assets/images/icon-hd.png">
    <link rel="icon" sizes="128x128" href="/assets/images/icon.png">

    <!-- ===== Google Fonts ===== -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- ===== CSS links ===== -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/assets/revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery.mmenu.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">


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



    <!-- =============== START OF WRAPPER =============== -->
    <div class="wrapper">
        <main class="login-register-page" style="background-image: url(/assets/images/posters/movie-collection.jpg)">
            <div class="container">

                <!-- =============== START OF LOGIN & REGISTER POPUP =============== -->
                <div class="small-dialog login-register">

                    @if (!Auth::check())
                        {{ redirect()->route('register') }}
                    @endif

                    <!-- ===== Start of Signin wrapper ===== -->
                    <div class="signin">
                        <div class="small-dialog-headline">
                            <h4 class="text-center">Achat de billets</h4>
                        </div>


                        <div class="small-dialog-content">

                            
                            <!-- Start of Login form -->
                            <form id="" method="post" action="{{ route('envoi') }}" enctype="multipart/form-data">
                                @csrf
                                
                                @if ($valide = Session::get('success'))
                                    <div class="col-lg-4 offset-lg-4 mb-4">
                                        <img src=" {{ asset('/images/'.Session::get('image')) }} " class="img-fluid rounded" alt="Image televerser">
                                    </div>
                                    <div class="alert-dismissible">
                                        <p class="alert alert-light text-dark w-100">
                                            {{ $valide }} 
                                            <button type="submit" class="btn btn-dark btn-outline-primary btn-close show" data-bs-dismiss="alert"></button>
                                        </p>
                                        <br>
                                    </div>
                                    
                                @else
                                    <div class="form-group">
                                        <label for="image">Votre photo</label>
                                        <input type="file" class="form-control" name="image">

                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>       

                                @endif
                                
                                <div class="form-group">
                                    <label for="movify_user_login">{{ __('Nom d\'utilisateur') }}</label>
                                    <input id="movify_user_login" class="form-control @error('name') is-invalid @enderror" name="name" value="@if (Auth::check()){{Auth::user()->name}}@endif" required autocomplete="name"/>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-groug">
                                    <label for="movie">Films</label>
                                    <select name="movie" id="movie" class="form-select">
                                        <option value="">Choisissez votre film</option>
                                        <option value="Star_Wars">Star_Wars</option>
                                        <option value="The_brain">The_brain</option>
                                        <option value="The_mummy">The_mummy</option>
                                        <option value="Daredevil">Daredevil</option>
                                        <option value="Stranger_Things">Stranger_Things</option>
                                        <option value="The_flash">The_flash</option>
                                    </select>
                                    @error('movie')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="number">Nombre de billets</label>
                                    <input type="number" class="form-control" id="number" name="number" placeholder="Nombre de tickets" autofocus/>
                                </div>

                                {{-- <a href="http://localhost:8000/generate-pdf"><button class="btn btn-danger">Billet </button></a> --}}

                                <button type="submit" class="btn btn-main btn-effect nomargin">VALIDER</button>
                            </form>
                            <!-- End of Login form -->

                    </div>
                    <!-- ===== End of Signin wrapper ===== -->

                </div>
                <!-- =============== END OF LOGIN & REGISTER POPUP =============== -->

                <a href="index" class="text-white text-center">Retour à la page d'acceuil</a>
                
            </div>
        </main>
    </div>
    <!-- =============== END OF WRAPPER =============== -->



    <!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
    <script src="/assets/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.ajaxchimp.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/jquery.mmenu.js"></script>
    <script src="/assets/js/jquery.inview.min.js"></script>
    <script src="/assets/js/jquery.countTo.min.js"></script>
    <script src="/assets/js/jquery.countdown.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/headroom.js"></script>
    <script src="/assets/js/custom.js"></script>

    <!-- ===== Slider Revolution core JavaScript files ===== -->
    <script type="text/javascript" src="/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- ===== Slider Revolution extension scripts ===== -->
    <script type="text/javascript" src="/bootsrap.bundle.min.js"></script>
    <script type="text/javascript" src="/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

</body>


<!-- Mirrored from gnodesign.com/templates/movify/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jun 2022 20:03:22 GMT -->
</html>
