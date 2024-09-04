{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
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
    <title>Movify | Mot de passe oublié</title>

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
        
                    <!-- ===== Start of Forget Password wrapper ===== -->
                    <div class="small-dialog login-register">
                        <div class="small-dialog-headline">
                            <h4 class="text-center">Mot de passe oublié</h4>
                        </div>

                        <div class="small-dialog-content">

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <!-- Start of Forger Password form -->
                            <form id="forget_pass_form" action="{{ route('password.email') }}"  method="POST">
                                @csrf
                                <p class="status"></p>


                                <div class="form-group">
                                    <label for="email">{{ __('Adresse Mail') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-main btn-effect nomargin">
                                        {{ __('Recuperer un nouveau pass') }}
                                    </button>
                                </div>
                            </form>
                            <!-- End of Forger Password form -->

                            <div class="bottom-links">
                                <a class="cancelClick">Retour</a>
                            </div>

                        </div><!-- .small-dialog-content -->

                    </div>
                    <!-- ===== End of Forget Password wrapper ===== -->

                <a href="index" class="text-white">Retour à la page d'acceuil</a>

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
