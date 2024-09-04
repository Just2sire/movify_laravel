@extends('templates.master')

@section('title')
    Movify | The Brain
@endsection

@section('content')
    <!-- =============== START OF MOVIE DETAIL INTRO =============== -->
    <section class="movie-detail-intro overlay-gradient ptb100" style="background: url(/assets/images/other/movie-detail-bg.jpg);">
    </section>
    <!-- =============== END OF MOVIE DETAIL INTRO =============== -->



    <!-- =============== START OF MOVIE DETAIL INTRO 2 =============== -->
    <section class="movie-detail-intro2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="movie-poster">
                        <img src="/assets/images/posters/poster-2.jpg" alt="">

                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>


                    <div class="movie-details">
                        <h3 class="title">The brain: The Movie</h3>

                        <ul class="movie-subtext">
                            <li>PG-13</li>
                            <li>2h 32min</li>
                            <li>Action, Adventure, Fantaisie</li>
                            <li>15 December 2017 (USA)</li>
                        </ul>

                        <a href="#" class="btn btn-main btn-effect">BO</a>
                        <a href="#" class="btn btn-main btn-effect">Regarder plus tard</a>
                        <a href="#" class="btn rate-movie"><i class="icon-heart"></i></a>

                        <div class="rating mt10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <span>296 Ratings</span>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </section>
    <!-- =============== End OF MOVIE DETAIL INTRO 2 =============== -->


    <!-- =============== START OF MOVIE DETAIL MAIN SECTION =============== -->
    <section class="movie-detail-main ptb100">
        <div class="container">

            <div class="row">
                <!-- Start of Movie Main -->
                <div class="col-lg-8 col-sm-12">
                    <div class="inner pr50">

                        <!-- Storyline -->
                        <div class="storyline">
                            <h3 class="title">Sypnosis</h3>

                            <p>
                                De Paris à Bruxelles, un train spécial va transporter les fonds secrets des nations de l'O.T.A.N. 
                                Des deux côtés de la Manche, deux individus cherchent à s'en emparer. Côté français, Arthur, petit 
                                truand débrouillard, assisté de son copain Anatole. Côté britannique, Le Cerveau, brillant escroc 
                                disposant d'une équipe de spécialistes et de moyens considérables. Cependant, les deux équipes 
                                programment leur hold-up le même jour, à la même heure.
                            </p>
                        </div>

                        <!-- Media -->
                        <div class="movie-media mt50">
                            <h3 class="title"> Photos & Videos</h3>

                            <ul class="image-gallery isotope">
                                <li class="element">
                                    <a href="/assets/images/blog/bloglist-1.jpg">
                                        <img src="/assets/images/blog/bloglist-1.jpg" class="img-responsive" alt="">
                                    </a>
                                </li>

                                <li class="element">
                                    <a href="/assets/images/blog/bloglist-2.jpg">
                                        <img src="/assets/images/blog/bloglist-2.jpg" class="img-responsive" alt="">
                                    </a>
                                </li>

                                <li class="element">
                                    <a href="/assets/images/other/home2-bg.jpg">
                                        <img src="/assets/images/other/home2-bg.jpg" class="img-responsive" alt="">
                                    </a>
                                </li>

                                <li class="element">
                                    <a href="/assets/images/blog/bloglist-2.jpg">
                                        <img src="/assets/images/blog/bloglist-2.jpg" class="img-responsive" alt="">
                                    </a>
                                </li>

                                <li class="element">
                                    <a href="/assets/images/blog/bloglist-1.jpg">
                                        <img src="/assets/images/blog/bloglist-1.jpg" class="img-responsive" alt="">
                                    </a>
                                </li>

                                <li class="element">
                                    <a href="/assets/images/blog/bloglist-3.jpg">
                                        <img src="/assets/images/blog/bloglist-3.jpg" class="img-responsive" alt="">
                                    </a>
                                </li>

                                <li class="element">
                                    <a href="/assets/images/blog/bloglist-1.jpg">
                                        <img src="/assets/images/blog/bloglist-1.jpg" class="img-responsive" alt="">
                                    </a>
                                </li>

                                <li class="element">
                                    <a href="/assets/images/other/landscape.jpg">
                                        <img src="/assets/images/other/landscape.jpg" class="img-responsive" alt="">
                                    </a>
                                </li>

                                <li class="element">
                                    <a href="/assets/images/other/home2-bg.jpg">
                                        <img src="/assets/images/other/home2-bg.jpg" class="img-responsive" alt="">
                                    </a>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
                <!-- End of Movie Main -->


                <!-- Start of Sidebar -->
                <div class="col-lg-4 col-sm-12">
                    <div class="sidebar">

                        <!-- Start of Details Widget -->
                        <aside class="widget widget-movie-details">
                            <h3 class="title">Details</h3>

                            <ul>
                                <li><strong>Date de sortie: </strong>December 15, 2017</li>
                                <li><strong>Directeur: </strong><a href="#">Rian Johnson</a></li>
                                <li><strong>Budget: </strong>200 million USD</li>
                                <li><strong>Pays: </strong>USA</li>
                                <li><strong>Language: </strong>English</li>
                                <li><strong>Production Co: </strong><a href="#">Lucasfilm</a></li>
                            </ul>
                        </aside>
                        <!-- End of Details Widget -->

                        <!-- Start of Details Widget -->
                        <aside class="widget widget-movie-cast">
                            <h3 class="title">Acteurs</h3>

                            <ul class="cast-wrapper">
                                <li>
                                    <a href="celebrity-detail">
                                        <span class="circle-img">
                                            <img src="/assets/images/celebrities/celebrity1.jpg" alt="">
                                        </span>
                                        <h6 class="name">Bryan Doe</h6>
                                    </a>
                                </li>

                                <li>
                                    <a href="celebrity-detail">
                                        <span class="circle-img">
                                            <img src="/assets/images/celebrities/celebrity2.jpg" alt="">
                                        </span>
                                        <h6 class="name">Baron Saul</h6>
                                    </a>
                                </li>

                                <li>
                                    <a href="celebrity-detail">
                                        <span class="circle-img">
                                            <img src="/assets/images/celebrities/celebrity3.jpg" alt="">
                                        </span>
                                        <h6 class="name">Ewan Actor</h6>
                                    </a>
                                </li>

                                <li>
                                    <a href="celebrity-detail">
                                        <span class="circle-img">
                                            <img src="/assets/images/celebrities/celebrity4.jpg" alt="">
                                        </span>
                                        <h6 class="name">Nicole Beet</h6>
                                    </a>
                                </li>
                            </ul>

                        </aside>
                        <!-- End of Details Widget -->

                    </div>
                </div>
                <!-- End of Sidebar -->
            </div>

        </div>
    </section>
    <!-- =============== END OF MOVIE DETAIL MAIN SECTION =============== -->



    <!-- =============== START OF RECOMMENDED MOVIES SECTION =============== -->
    <section class="recommended-movies bg-light ptb100">
        <div class="container">

            <!-- Start of row -->
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h2 class="title">Les gens aiment aussi...</h2>
                </div>
            </div>
            <!-- End of row -->


            <!-- Start of Latest Movies Slider -->
            <div class="owl-carousel recommended-slider mt20">

                <!-- === Start of Sliding Item 1 === -->
                <div class="item">
                    <!-- Start of Movie Box -->
                    <div class="movie-box-1">

                        <!-- Start of Poster -->
                        <div class="poster">
                            <img src="/assets/images/posters/poster-5.jpg" alt="">
                        </div>
                        <!-- End of Poster -->

                        <!-- Start of Buttons -->
                        <div class="buttons">
                            <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <!-- End of Buttons -->

                        <!-- Start of Movie Details -->
                        <div class="movie-details">
                            <h4 class="movie-title">
                                <a href="movie-detail">Daredevil</a>
                            </h4>
                            <span class="released">19 Apr 2015</span>
                        </div>
                        <!-- End of Movie Details -->

                        <!-- Start of Rating -->
                        <div class="stars">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <span>8.7 / 10</span>
                        </div>
                        <!-- End of Rating -->

                    </div>
                    <!-- End of Movie Box -->
                </div>
                <!-- === End of Sliding Item 1 === -->


                <!-- === Start of Sliding Item 2 === -->
                <div class="item">
                    <!-- Start of Movie Box -->
                    <div class="movie-box-1">

                        <!-- Start of Poster -->
                        <div class="poster">
                            <img src="/assets/images/posters/poster-6.jpg" alt="">
                        </div>
                        <!-- End of Poster -->

                        <!-- Start of Buttons -->
                        <div class="buttons">
                            <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <!-- End of Buttons -->

                        <!-- Start of Movie Details -->
                        <div class="movie-details">
                            <h4 class="movie-title">
                                <a href="movie-detail">Stranger Things</a>
                            </h4>
                            <span class="released">15 Jul 2016</span>
                        </div>
                        <!-- End of Movie Details -->

                        <!-- Start of Rating -->
                        <div class="stars">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <span>9 / 10</span>
                        </div>
                        <!-- End of Rating -->

                    </div>
                    <!-- End of Movie Box -->
                </div>
                <!-- === End of Sliding Item 2 === -->


                <!-- === Start of Sliding Item 3 === -->
                <div class="item">
                    <!-- Start of Movie Box -->
                    <div class="movie-box-1">

                        <!-- Start of Poster -->
                        <div class="poster">
                            <img src="/assets/images/posters/poster-7.jpg" alt="">
                        </div>
                        <!-- End of Poster -->

                        <!-- Start of Buttons -->
                        <div class="buttons">
                            <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <!-- End of Buttons -->

                        <!-- Start of Movie Details -->
                        <div class="movie-details">
                            <h4 class="movie-title">
                                <a href="movie-detail">Luke Cage</a>
                            </h4>
                            <span class="released">30 Sep 2016</span>
                        </div>
                        <!-- End of Movie Details -->

                        <!-- Start of Rating -->
                        <div class="stars">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <span>7.6 / 10</span>
                        </div>
                        <!-- End of Rating -->

                    </div>
                    <!-- End of Movie Box -->
                </div>
                <!-- === End of Sliding Item 3 === -->


                <!-- === Start of Sliding Item 4 === -->
                <div class="item">
                    <!-- Start of Movie Box -->
                    <div class="movie-box-1">

                        <!-- Start of Poster -->
                        <div class="poster">
                            <img src="/assets/images/posters/poster-8.jpg" alt="">
                        </div>
                        <!-- End of Poster -->

                        <!-- Start of Buttons -->
                        <div class="buttons">
                            <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <!-- End of Buttons -->

                        <!-- Start of Movie Details -->
                        <div class="movie-details">
                            <h4 class="movie-title">
                                <a href="movie-detail">The Flash</a>
                            </h4>
                            <span class="released">7 Oct 2014</span>
                        </div>
                        <!-- End of Movie Details -->

                        <!-- Start of Rating -->
                        <div class="stars">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <span>8 / 10</span>
                        </div>
                        <!-- End of Rating -->

                    </div>
                    <!-- End of Movie Box -->
                </div>
                <!-- === End of Sliding Item 4 === -->


                <!-- === Start of Sliding Item 5 === -->
                <div class="item">
                    <!-- Start of Movie Box -->
                    <div class="movie-box-1">

                        <!-- Start of Poster -->
                        <div class="poster">
                            <img src="/assets/images/posters/poster-5.jpg" alt="">
                        </div>
                        <!-- End of Poster -->

                        <!-- Start of Buttons -->
                        <div class="buttons">
                            <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <!-- End of Buttons -->

                        <!-- Start of Movie Details -->
                        <div class="movie-details">
                            <h4 class="movie-title">
                                <a href="movie-detail">Daredevil</a>
                            </h4>
                            <span class="released">19 Apr 2015</span>
                        </div>
                        <!-- End of Movie Details -->

                        <!-- Start of Rating -->
                        <div class="stars">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <span>8.7 / 10</span>
                        </div>
                        <!-- End of Rating -->

                    </div>
                    <!-- End of Movie Box -->
                </div>
                <!-- === End of Sliding Item 5 === -->


                <!-- === Start of Sliding Item 6 === -->
                <div class="item">
                    <!-- Start of Movie Box -->
                    <div class="movie-box-1">

                        <!-- Start of Poster -->
                        <div class="poster">
                            <img src="/assets/images/posters/poster-6.jpg" alt="">
                        </div>
                        <!-- End of Poster -->

                        <!-- Start of Buttons -->
                        <div class="buttons">
                            <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <!-- End of Buttons -->

                        <!-- Start of Movie Details -->
                        <div class="movie-details">
                            <h4 class="movie-title">
                                <a href="movie-detail">Stranger Things</a>
                            </h4>
                            <span class="released">15 Jul 2016</span>
                        </div>
                        <!-- End of Movie Details -->

                        <!-- Start of Rating -->
                        <div class="stars">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <span>9 / 10</span>
                        </div>
                        <!-- End of Rating -->

                    </div>
                    <!-- End of Movie Box -->
                </div>
                <!-- === End of Sliding Item 6 === -->

            </div>
            <!-- End of Latest Movies Slider -->

        </div>
    </section>
    <!-- =============== END OF RECOMMENDED MOVIES SECTION =============== -->


    
@endsection