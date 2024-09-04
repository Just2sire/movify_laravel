@extends('templates.master')

@section('title')
    Movify | Acceuil
@endsection


@section('content')
    <!-- =============== START OF SLIDER REVOLUTION SECTION =============== -->
    <section id="slider" class="hero-slider">
        <div class="rev-slider-wrapper fullwidthbanner-container overlay-gradient">
            <!-- Start REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="hero-slider" class="rev_slider fullwidthabanner" style="display:none" data-version="5.4.1">
                <ul>

                    <!-- ===== SLIDE NR. 1 ===== -->
                    <li data-transition="fade">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/posters/movie-collection.jpg"
                             alt="Image"
                             title="slider-bg"
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             data-bgparallax="10"
                             class="rev-slidebg"
                             data-no-retina="">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme"
                             data-x="center"
                             data-hoffset=""
                             data-y="middle"
                             data-voffset="['-80','-80','-80','-80']"
                             data-responsive_offset="on"
                             data-fontsize="['60','50','40','30']"
                             data-lineheight="['60','50','40','30']"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 5; color: #fff; font-weight: 900;">BIENVENUE SUR MOVIFY
                        </div>


                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme"
                             data-x="center"
                             data-hoffset=""
                             data-y="middle"
                             data-voffset="[0]"
                             data-width="[1200, 992, 768, 98%]"
                             data-responsive_offset="on"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 5; color: #fff; font-weight: 900;">

                            <!-- ===== START OF SEARCH FORM ===== -->
                            <form id="search-form-1">
                                <div class="row justify-content-center">
                                    <div class="col-md-8 col-sm-10 col-12">
                                        <div class="form-group">
                                            <input name="search-keyword" type="text" id="search-keyword" value="" class="form-control" placeholder="Titre du Film ou de la Serie ">
                                            <button type="submit" class="btn btn-main btn-effect"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- ===== END OF SEARCH FORM ===== -->

                        </div>


                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme text-center"
                             data-x="center"
                             data-hoffset=""
                             data-y="middle"
                             data-voffset="['100','100','80','80']"
                             data-responsive_offset="on"
                             data-fontsize="['16']"
                             data-lineheight="['22']"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 5; color: #fff; font-weight: 400;">
                            Admirez les mieux notés <br/>De nos Films et Séries!
                        </div>


                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-resizeme"
                             data-x="[730, 630, 520, 370]"
                             data-hoffset=""
                             data-y="middle"
                             data-voffset="['115','115','90','500']"
                             data-responsive_offset="on"
                             data-fontsize="['16']"
                             data-lineheight="['22']"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 5; color: #fff; font-weight: 400;">
                            <img src="assets/images/other/banner-arrow.png" alt="">
                        </div>
                    </li>

                </ul>
            </div>
            <!-- End REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        </div>
        <!-- ===== END OF REV SLIDER WRAPPER ===== -->

    </section>
    <!-- =============== START OF SLIDER REVOLUTION SECTION =============== -->




    <!-- =============== START OF TOP MOVIES SECTION =============== -->
    @if ($valide = Session::get('success'))
        <div class="col-lg-2 text-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $valide }}
                <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
        </div>
        
    @endif


    <section class="top-movies2">
        <div class="container">
            <div class="row">

                <!-- Movie List Item -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="movie-box-4">
                        <div class="listing-container">

                            <!-- Movie List Image -->
                            <div class="listing-image">

                                <!-- Buttons -->
                                <div class="buttons">
                                    <a href="#" data-original-title="Rate" data-toggle="tooltip" data-placement="bottom" class="like">
                                        <i class="icon-heart"></i>
                                    </a>

                                    <a href="#" data-original-title="Share" data-toggle="tooltip" data-placement="bottom" class="share">
                                        <i class="icon-share"></i>
                                    </a>
                                </div>

                                <!-- Rating -->
                                <div class="stars">
                                    <a href="movie-1" class="btn btn-main btn-effect">details</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>

                                <!-- Image -->
                                <img src="assets/images/posters/poster-1.jpg" alt="">
                            </div>

                            <!-- Movie List Content -->
                            <div class="listing-content">
                                
                                <div class="inner">
                                    <h2 class="title">Star Wars</h2>
                                    <a href="billets" class="btn btn-main btn-effect">reserver</a>

                                </div>
                                
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Movie List Item -->
                <div class="col-lg-3 col-md-6 col-sm-6 d-none d-sm-block">
                    <div class="movie-box-4">
                        <div class="listing-container">

                            <!-- Movie List Image -->
                            <div class="listing-image">

                                <!-- Buttons -->
                                <div class="buttons">
                                    <a href="#" data-original-title="Rate" data-toggle="tooltip" data-placement="bottom" class="like">
                                        <i class="icon-heart"></i>
                                    </a>

                                    <a href="#" data-original-title="Share" data-toggle="tooltip" data-placement="bottom" class="share">
                                        <i class="icon-share"></i>
                                    </a>
                                </div>

                                <!-- Rating -->
                                <div class="stars">
                                    <a href="movie-2" class="btn btn-main btn-effect">details</a>
                                    <div class="rating">

                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>

                                <!-- Image -->
                                <img src="assets/images/posters/poster-2.jpg" alt="">
                            </div>

                            <!-- Movie List Content -->
                            <div class="listing-content">
                                <div class="inner">
                                    <h2 class="title">The Brain</h2>
                                    <a href="billets" class="btn btn-main btn-effect">reserver</a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Movie List Item -->
                <div class="col-lg-3 col-md-6 d-none d-lg-block">
                    <div class="movie-box-4">
                        <div class="listing-container">

                            <!-- Movie List Image -->
                            <div class="listing-image">

                                <!-- Buttons -->
                                <div class="buttons">
                                    <a href="#" data-original-title="Rate" data-toggle="tooltip" data-placement="bottom" class="like">
                                        <i class="icon-heart"></i>
                                    </a>

                                    <a href="#" data-original-title="Share" data-toggle="tooltip" data-placement="bottom" class="share">
                                        <i class="icon-share"></i>
                                    </a>
                                </div>

                                <!-- Rating -->
                                <div class="stars">
                                    <a href="movie-3" class="btn btn-main btn-effect">details</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>

                                <!-- Image -->
                                <img src="assets/images/posters/poster-3.jpg" alt="">
                            </div>

                            <!-- Movie List Content -->
                            <div class="listing-content">
                                <div class="inner">
                                    <h2 class="title">The Mummy</h2>

                                    <a href="billets" class="btn btn-main btn-effect">reserver</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Movie List Item -->
                <div class="col-lg-3 col-md-6 d-none d-lg-block">
                    <div class="movie-box-4">
                        <div class="listing-container">

                            <!-- Movie List Image -->
                            <div class="listing-image">

                                <!-- Buttons -->
                                <div class="buttons">
                                    <a href="#" data-original-title="Rate" data-toggle="tooltip" data-placement="bottom" class="like">
                                        <i class="icon-heart"></i>
                                    </a>

                                    <a href="#" data-original-title="Share" data-toggle="tooltip" data-placement="bottom" class="share">
                                        <i class="icon-share"></i>
                                    </a>
                                </div>

                                <!-- Rating -->
                                <div class="stars">
                                    <a href="movie-4" class="btn btn-main btn-effect">details</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>

                                <!-- Image -->
                                <img src="assets/images/posters/poster-5.jpg" alt="">
                            </div>

                            <!-- Movie List Content -->
                            <div class="listing-content">
                                <div class="inner">
                                    <h2 class="title">Daredevil</h2>

                                    <a href="billets" class="btn btn-main btn-effect">reserver</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- =============== END OF TOP MOVIES SECTION =============== -->

   
    <!-- =============== START OF HOW IT WORKS SECTION =============== -->
    <section class="how-it-works3 ptb100">
        <div class="container">

            <!-- Start of row -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="title">Comment ça marche !?</h2>
                    <h6 class="subtitle">Nous allons vous montrer étapes par étapes comment regarder votre film favori !</h6>
                </div>
            </div>
            <!-- End of row -->

            <!-- Start of row -->
            <div class="row mt50">

                <!-- Start of Tab Menu -->
                <div class="col-lg-4 col-sm-12">
                    <ul class="nav features-tab">
                        <!-- Menu Item -->
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" aria-controls="home" aria-expanded="false">
                                <div class="icon-wrapper">
                                    <i class="icon-login"></i>
                                </div>
                                <div>
                                    <h5 class="title">Creer un compte</h5>
                                    <h6 class="subtitle">Creer votre compte en quelques étapes.</h6>
                                </div>
                            </a>
                        </li>

                        <!-- Menu Item -->
                        <li class="nav-item">
                            <a class="nav-link" id="plan-tab" data-toggle="tab" href="#plan" aria-controls="home" aria-expanded="false">
                                <div class="icon-wrapper">
                                    <i class="icon-layers"></i>
                                </div>
                                <div>
                                    <h5 class="title">Achète ton ticket</h5>
                                    <h6 class="subtitle">Achète un ou plusieurs tickets pour pouvoir accéder à vos coups de coeur du moment.</h6>
                                </div>
                            </a>
                        </li>

                        <!-- Menu Item -->
                        <li class="nav-item">
                            <a class="nav-link" id="movie-tab" data-toggle="tab" href="#search" aria-controls="home" aria-expanded="false">
                                <div class="icon-wrapper">
                                    <i class="icon-magnifier"></i>
                                </div>
                                <div>
                                    <h5 class="title">Trouver vos films préférés </h5>
                                    <h6 class="subtitle">Rechercher vos films ou séries .</h6>
                                </div>
                            </a>
                        </li>

                        <!-- Menu Item -->
                        <li class="nav-item">
                            <a class="nav-link" id="enjoy-tab" data-toggle="tab" href="#enjoy" aria-controls="home" aria-expanded="false">
                                <div class="icon-wrapper">
                                    <i class="icon-emotsmile"></i>
                                </div>
                                <div>
                                    <h5 class="title">Profiter de Movify</h5>
                                    <h6 class="subtitle">Maintenant, vous n'avez qu'à profiter de tout vos films avec un bon bol de Pop-Corn.</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End of Tab Menu -->

                <!-- Start of Tab Content -->
                <div class="col-lg-7 ml-auto">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="home" role="tabpanel" aria-expanded="false">
                            <img src="assets/images/other/signup.png" alt="">
                            <p class="mt20">Cliquez sur le lien suivant pour créer un <a href="register">compte Movify</a> .</p>
                        </div>


                        <div class="tab-pane fade" id="plan" role="tabpanel" aria-expanded="true">
                            <img src="assets/images/other/pricing.png" alt="">
                            <p class="mt20">Acheter un billet pour regarder vos films préférés.</p>
                            <a class="btn btn-main btn-effect" href="billets">Achats</a>
                        </div>

                        <div class="tab-pane fade" id="search" role="tabpanel">
                            <img src="assets/images/other/find-movie.png" alt="">
                            <p class="mt20">Recherchez dans notre catalogue vos films et séries favorites.</p>
                            <a class="btn btn-main btn-effect" href="movie-list">Catalogue</a>
                        </div>

                        <div class="tab-pane fade" id="enjoy" role="tabpanel">
                            <img src="assets/images/other/enjoy-movify.png" alt="">
                            <p class="mt20">Maintenant, toutes les conditions sont réunies pour pouvoir matter votre film ou série que vous aimez tant.</p>
                            <a class="btn btn-main btn-effect" href="#">Top</a>
                        </div>
                    </div>
                </div>
                <!-- End of Tab Content -->
            </div>
            <!-- End of row -->

        </div>
    </section>
    <!-- =============== END OF HOW IT WORKS SECTION =============== -->





    <!-- =============== END OF COUNTER SECTION =============== -->
    <section class="counter bg-main-gradient ptb50 text-center">
        <div class="container">
            <div class="row">

                <!-- 1st Count up item -->
                <div class="col-md-4 col-sm-12">
                    <span class="counter-item" data-from="0" data-to="964">0</span>
                    <h4>Films</h4>
                </div>

                <!-- 2nd Count up item -->
                <div class="col-md-4 col-sm-12">
                    <span class="counter-item" data-from="0" data-to="743">0</span>
                    <h4>Séries</h4>
                </div>

                <!-- 3rd Count up item -->
                <div class="col-md-4 col-sm-12">
                    <span class="counter-item" data-from="0" data-to="1207">0</span>
                    <h4>Utilisateurs</h4>
                </div>

            </div>
        </div>
    </section>
    <!-- =============== END OF COUNTER SECTION =============== -->




    <!-- =============== START OF LATEST RELEASES SECTION =============== -->
    <section class="latest-releases bg-light ptb100">
        <div class="container">

            <!-- Start of row -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="title">Les nouvelles sorties</h2>
                    <h6 class="subtitle">Retrouvez les nouveaux films et séries dans cette section .</h6>
                </div>
            </div>
            <!-- End of row -->
        </div>
        <!-- End of Container -->

        <!-- Start of Latest Releases Slider -->
        <div class="owl-carousel latest-releases-slider">

            <!-- === Start of Sliding Item 1 === -->
            <div class="item">
                <div class="movie-box-3">
                    <div class="listing-container">

                        <!-- Movie List Image -->
                        <div class="listing-image">
                            <!-- Image -->
                            <img src="assets/images/posters/poster-1.jpg" alt="">
                        </div>

                        <!-- Movie List Content -->
                        <div class="listing-content">
                            <div class="inner">

                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>

                                <h2 class="title">Star Wars</h2>

                                <!-- Rating -->
                                <div class="stars">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <span>7.5/10</span>
                                        <span class="category">Action, Fantaisie</span>
                                    </div>
                                </div>

                                <p>
                                    Les chevaliers Jedi, 
                                   gardiens de la paix et de la justice, réussissent à éliminer les Sith ennemis de la paix et du progrès 
                                   et la galaxie retrouve la prospérité. Cependant, après des millénaires
                                   d'existence, la République montre de lourdes failles ainsi qu'une corruption 
                                   rampante, et se trouve de fait fragilisée ; Selon une prophétie Jedi, un « 
                                   Élu » naîtra et rétablira un jour l'équilibre dans la Force.
                                </p>
                                <a href="movie-1" class="btn btn-main btn-effect">details</a>
                                <a href="billets" class="btn btn-main btn-effect">reserver</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- === End of Sliding Item 1 === -->

            <!-- === Start of Sliding Item 2 === -->
            <div class="item">
                <div class="movie-box-3">
                    <div class="listing-container">

                        <!-- Movie List Image -->
                        <div class="listing-image">
                            <!-- Image -->
                            <img src="assets/images/posters/poster-2.jpg" alt="">
                        </div>

                        <!-- Movie List Content -->
                        <div class="listing-content">
                            <div class="inner">

                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>

                                <h2 class="title">The Brain</h2>

                                <!-- Rating -->
                                <div class="stars">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <span>7.2/10</span>
                                        <span class="category">Action, Comédie</span>
                                    </div>
                                </div>

                                <p>
                                    De Paris à Bruxelles, un train spécial va transporter les fonds secrets des nations de l'O.T.A.N. 
                                    Des deux côtés de la Manche, deux individus cherchent à s'en emparer. Côté français, Arthur, petit 
                                    truand débrouillard, assisté de son copain Anatole. Côté britannique, Le Cerveau, brillant escroc 
                                    disposant d'une équipe de spécialistes et de moyens considérables. Helas, lils 
                                    arrivent là à la même heure.
                                </p>

                                <a href="movie-2" class="btn btn-main btn-effect">details</a>
                                <a href="billets" class="btn btn-main btn-effect">reserver</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- === End of Sliding Item 2 === -->

            <!-- === Start of Sliding Item 3 === -->
            <div class="item">
                <div class="movie-box-3">
                    <div class="listing-container">

                        <!-- Movie List Image -->
                        <div class="listing-image">
                            <!-- Image -->
                            <img src="assets/images/posters/poster-3.jpg" alt="">
                        </div>

                        <!-- Movie List Content -->
                        <div class="listing-content">
                            <div class="inner">

                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>

                                <h2 class="title">The Mummy</h2>

                                <!-- Rating -->
                                <div class="stars">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <span>5.5/10</span>
                                        <span class="category">Action, Fantaisie</span>
                                    </div>
                                </div>

                                <p>
                                    En 1127, un groupe de chevaliers croisés anglais capture un grand rubis rouge de l'Égypte ancienne et il est 
                                    enterré dans la tombe de l'un d'eux dans l'espoir que personne ne le trouvera. Actuellement à Londres sur 
                                    le projet Crossrail, une équipe de construction découvre la tombe des chevaliers et un homme mystérieux est 
                                    autorisé à enquêter sur les trésors découverts à l'intérieur du site. 
                                </p>

                                <a href="movie-3" class="btn btn-main btn-effect">details</a>
                                <a href="billets" class="btn btn-main btn-effect">reserver</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- === End of Sliding Item 3 === -->

            <!-- === Start of Sliding Item 4 === -->
            <div class="item">
                <div class="movie-box-3">
                    <div class="listing-container">

                        <!-- Movie List Image -->
                        <div class="listing-image">
                            <!-- Image -->
                            <img src="assets/images/posters/poster-5.jpg" alt="">
                        </div>

                        <!-- Movie List Content -->
                        <div class="listing-content">
                            <div class="inner">

                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>

                                <h2 class="title">Daredevil</h2>

                                <!-- Rating -->
                                <div class="stars">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <span>8.7/10</span>
                                        <span class="category">Action, Crime</span>
                                    </div>
                                </div>

                                <p>
                                    Matt Murdock est un petit garçon solitaire, souvent malmené 
                                    par les petits délinquants de son quartier. Un jour, il surprend son père en 
                                    train de racketter et s'enfuit. Il perd la vue à la suite 
                                    d'une exposition à des déchets radioactifs. Toutefois, à son réveil, tous ses 
                                    autres sens sont exacerbés et il en découvre un sixième : un sens radar 
                                    semblable à celui des chauve-souris qui lui permet de voir.
                                </p>

                                <a href="movie-4" class="btn btn-main btn-effect">details</a>
                                <a href="billets" class="btn btn-main btn-effect">reserver</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- === End of Sliding Item 4 === -->

            <!-- === Start of Sliding Item 5 === -->
            <div class="item">
                <div class="movie-box-3">
                    <div class="listing-container">

                        <!-- Movie List Image -->
                        <div class="listing-image">
                            <!-- Image -->
                            <img src="assets/images/posters/poster-6.jpg" alt="">
                        </div>

                        <!-- Movie List Content -->
                        <div class="listing-content">
                            <div class="inner">

                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>

                                <h2 class="title">Stranger Things</h2>

                                <!-- Rating -->
                                <div class="stars">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <span>9.0/10</span>
                                        <span class="category">Fantasy, Horror</span>
                                    </div>
                                </div>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam...</p>

                                <a href="movie-2" class="btn btn-main btn-effect">details</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- === End of Sliding Item 5 === -->

            <!-- === Start of Sliding Item 6 === -->
            <div class="item">
                <div class="movie-box-3">
                    <div class="listing-container">

                        <!-- Movie List Image -->
                        <div class="listing-image">
                            <!-- Image -->
                            <img src="assets/images/posters/poster-8.jpg" alt="">
                        </div>

                        <!-- Movie List Content -->
                        <div class="listing-content">
                            <div class="inner">

                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>

                                <h2 class="title">The Flash</h2>

                                <!-- Rating -->
                                <div class="stars">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <span>8.0/10</span>
                                        <span class="category">Action, Drama</span>
                                    </div>
                                </div>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam...</p>

                                <a href="movie-2" class="btn btn-main btn-effect">details</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- === End of Sliding Item 6 === -->

        </div>
        <!-- End of Latest Releases Slider -->

    </section>
    <!-- =============== END OF LATEST RELEASES SECTION =============== -->




@endsection