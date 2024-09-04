@extends('templates.master')

@section('title')
    Movify | Nos films
@endsection

@section('content')
    <!-- =============== START OF PAGE HEADER =============== -->
<section class="page-header overlay-gradient" style="background: url(/assets/images/posters/movie-collection.jpg);">
    <div class="container">
        <div class="inner">
            <h2 class="title">Movie Grid 1</h2>
            <ol class="breadcrumb">
                <li><a href="index-2">Home</a></li>
                <li>Movie Grid 1</li>
            </ol>
        </div>
    </div>
</section>
<!-- =============== END OF PAGE HEADER =============== -->



<!-- =============== START OF MAIN =============== -->
<main class="ptb100">
    <div class="container">

        <!-- Start of Filters -->
        <div class="row mb50">

            <div class="col-md-6">
                <!-- Layout Switcher -->
                <div class="layout-switcher">
                    <a href="movie-list" class="list"><i class="fa fa-align-justify"></i></a>
                    <a href="movie-grid" class="grid active"><i class="fa fa-th"></i></a>
                </div>
            </div>

            <div class="col-md-6">

                <!-- Sort by -->
                <div class="sort-by">
                    <div class="sort-by-select">
                        <select class="chosen-select-no-single">
                            <option>Default Order</option>
                            <option>Featured</option>
                            <option>Top Viewed</option>
                            <option>Top Rated</option>
                            <option>Newest</option>
                            <option>Oldest</option>
                        </select>
                    </div>
                </div>
                <!-- Sort by / End -->

            </div>

        </div>
        <!-- End of Filters -->



        <!-- Start of Movie List -->
        <div class="row">

            <!-- Movie List Item -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="movie-box-2 mb30">
                    <div class="listing-container">

                        <!-- Movie List Image -->
                        <div class="listing-image">

                            <!-- Play Button -->
                            <div class="play-btn">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>

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
                                <h6 class="text-white" >Categorie | Prix | Diffusion</h6>
                                <h6 class="text-white" >Saga | 2800XOF | 13-02-2023</h6>
                                <h5 class="text-white">20h</h5>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>

                            <!-- Image -->
                            <img src="/assets/images/posters/poster-1.jpg" alt="">
                        </div>

                        <!-- Movie List Content -->
                        <div class="listing-content">
                            <div class="inner">
                                <h2 class="title">Star Wars</h2>

                                <p>
                                    La République galactique a été fondée pour amener la paix dans la galaxie,
                                    mais, tout au long de son existence, elle a été secouée par des sécessions
                                    et des guerres, notamment contre l'Empire Sith. Les chevaliers Jedi, 
                                   gardiens de la paix et de la justice, réussissent à éliminer les Sith 
                                   et la galaxie retrouve la prospérité. Cependant, après des millénaires
                                   d'existence, la République montre de lourdes failles ainsi qu'une corruption 
                                   rampante, et se trouve de fait fragilisée ; Selon une prophétie Jedi, un « 
                                   Élu » naîtra et rétablira un jour l'équilibre dans la Force.
                                </p>

                                <a href="billets" class="btn btn-main btn-effect">reserver</a>
                                <a href="movie-1" class="btn btn-main btn-effect">details</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Movie List Item -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="movie-box-2 mb30">
                    <div class="listing-container">

                        <!-- Movie List Image -->
                        <div class="listing-image">

                            <!-- Play Button -->
                            <div class="play-btn">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>

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
                                <h6 class="text-white" >Categorie | Prix | Diffusion</h6>
                                <h6 class="text-white" >Policier | 3700XOF | 13-02-2023</h6>
                                <h5 class="text-white">18h</h5>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>

                            <!-- Image -->
                            <img src="/assets/images/posters/poster-2.jpg" alt="">
                        </div>

                        <!-- Movie List Content -->
                        <div class="listing-content">
                            <div class="inner">
                                <h2 class="title">The Brain</h2>

                                <p>
                                    De Paris à Bruxelles, un train spécial va transporter les fonds secrets des nations de l'O.T.A.N. 
                                    Des deux côtés de la Manche, deux individus cherchent à s'en emparer. Côté français, Arthur, petit 
                                    truand débrouillard, assisté de son copain Anatole. Côté britannique, Le Cerveau, brillant escroc 
                                    disposant d'une équipe de spécialistes et de moyens considérables. Cependant, les deux équipes 
                                    programment leur hold-up le même jour, à la même heure.
                                </p>

                                <a href="billets" class="btn btn-main btn-effect">reserver</a>
                                <a href="movie-2" class="btn btn-main btn-effect">details</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Movie List Item -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="movie-box-2 mb30">
                    <div class="listing-container">

                        <!-- Movie List Image -->
                        <div class="listing-image">

                            <!-- Play Button -->
                            <div class="play-btn">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>

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
                                <h6 class="text-white" >Categorie | Prix | Diffusion</h6>
                                <h6 class="text-white" >Aventure | 3200XOF | 19-01-2023</h6>
                                <h5 class="text-white">22h</h5>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>

                            <!-- Image -->
                            <img src="/assets/images/posters/poster-3.jpg" alt="">
                        </div>

                        <!-- Movie List Content -->
                        <div class="listing-content">
                            <div class="inner">
                                <h2 class="title">The Mummy</h2>

                                <p>
                                    En 1127, un groupe de chevaliers croisés anglais capture un grand rubis rouge de l'Égypte ancienne et il est 
                                    enterré dans la tombe de l'un d'eux dans l'espoir que personne ne le trouvera. Actuellement à Londres sur 
                                    le projet Crossrail, une équipe de construction découvre la tombe des chevaliers et un homme mystérieux est 
                                    autorisé à enquêter sur les trésors découverts à l'intérieur du site. 
                                </p>

                                <a href="billets" class="btn btn-main btn-effect">reserver</a>
                                <a href="movie-3" class="btn btn-main btn-effect">details</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Movie List Item -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="movie-box-2 mb30">
                    <div class="listing-container">

                        <!-- Movie List Image -->
                        <div class="listing-image">

                            <!-- Play Button -->
                            <div class="play-btn">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>

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
                                <h6 class="text-white" >Categorie | Prix | Diffusion</h6>
                                <h6 class="text-white" >Super-pouvoir | 4500XOF | 13-02-2023</h6>
                                <h5 class="text-white">20h</h5>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>

                            <!-- Image -->
                            <img src="/assets/images/posters/poster-5.jpg" alt="">
                        </div>

                        <!-- Movie List Content -->
                        <div class="listing-content">
                            <div class="inner">
                                <h2 class="title">Daredevil</h2>

                                <p>
                                    Matt Murdock est un petit garçon solitaire, timide et faible, souvent malmené 
                                    par les petits délinquants de son quartier. Un jour, il surprend son père en 
                                    train de racketter et s'enfuit. Peu de temps après, il perd la vue à la suite 
                                    d'une exposition à des déchets radioactifs. Toutefois, à son réveil, tous ses 
                                    autres sens sont exacerbés et il en découvre un sixième : un sens radar 
                                    semblable à celui des chauve-souris qui lui permet de voir sans ses yeux.
                                </p>
                                
                                <a href="billets" class="btn btn-main btn-effect">reserver</a>
                                <a href="movie-4" class="btn btn-main btn-effect">details</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Movie List Item -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="movie-box-2 mb30">
                    <div class="listing-container">

                        <!-- Movie List Image -->
                        <div class="listing-image">

                            <!-- Play Button -->
                            <div class="play-btn">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>

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
                                <h6 class="text-white" >Categorie | Prix | Diffusion</h6>
                                <h6 class="text-white" >Aventure | 2700XOF | 24-01-2023</h6>
                                <h5 class="text-white">18h</h5>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>

                            <!-- Image -->
                            <img src="/assets/images/posters/poster-6.jpg" alt="">
                        </div>

                        <!-- Movie List Content -->
                        <div class="listing-content">
                            <div class="inner">
                                <h2 class="title">Stranger Things</h2>

                                <p>
                                    Un soir de novembre 1983 dans la ville américaine d'Hawkins en Indiana, 
                                    le jeune Will Byers âgé de douze ans disparaît brusquement sans laisser 
                                    de traces, hormis son vélo. Plusieurs personnages vont alors tenter de 
                                    le retrouver : sa mère Joyce, ses amis : Lucas Sinclair, Dustin 
                                    Henderson et Mike Wheeler, guidés par la mystérieuse Eleven, une jeune 
                                    fille ayant des pouvoirs psychiques, ainsi que le chef de la police Jim 
                                    Hopper.
                                </p>

                                <a href="billets" class="btn btn-main btn-effect">reserver</a>
                                <a href="movie-5" class="btn btn-main btn-effect">details</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Movie List Item -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="movie-box-2 mb30">
                    <div class="listing-container">

                        <!-- Movie List Image -->
                        <div class="listing-image">

                            <!-- Play Button -->
                            <div class="play-btn">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>

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
                                <h6 class="text-white" >Categorie | Prix | Diffusion</h6>
                                <h6 class="text-white" >Super-pouvoir | 3500XOF | 13-02-2023</h6>
                                <h5 class="text-white">16h</h5>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>

                            <!-- Image -->
                            <img src="/assets/images/posters/poster-8.jpg" alt="">
                        </div>

                        <!-- Movie List Content -->
                        <div class="listing-content">
                            <div class="inner">
                                <h2 class="title">The Flash</h2>

                                <p>
                                    Durant DC Rebirth, Barry n’est plus le seul Flash. Il est révélé que Wally West a été perdu dans la Force
                                     Véloce pendant dix ans, réalisant pendant ce temps que Barry n’était pas le responsable du changement 
                                     de la ligne temporelle après la crise Flashpoint. Une entité inconnue utilisa le voyage dans le temps de 
                                     Barry comme opportunité de changer fondamentalement la réalité.
                                </p>
                                
                                
                                <a href="billets" class="btn btn-main btn-effect">reserver</a>
                                <a href="movie-6" class="btn btn-main btn-effect">details</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- End of Movie List -->



        <!-- Start of Pagination -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <nav class="pagination">
                    <ul>
                        <li><a href="#" class="current-page">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="ti-angle-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End of Pagination -->

    </div>
</main>
<!-- =============== END OF MAIN =============== -->




@endsection