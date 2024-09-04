@extends('templates.master')

@section('title')
    Movify | Nous Contacter
@endsection

@section('content')
    <!-- =============== START OF PAGE HEADER =============== -->
    <section class="page-header overlay-gradient" style="background: url(assets/images/posters/movie-collection.jpg);">
        <div class="container">
            <div class="inner">
                <h2 class="title">Nous Contacter</h2>
                <ol class="breadcrumb">
                    <li><a href="index">Acceuil</a></li>
                    <li>Nous Contacter</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- =============== END OF PAGE HEADER =============== -->



    <!-- =============== START OF MAIN =============== -->
    <main class="contact-page ptb100">
        <div class="container">
            <div class="row">


                <!-- Start of Contact Details -->
                <div class="col-md-4 col-sm-12">
                    <h3 class="title">Infos</h3>

                    <div class="details-wrapper">
                        <p>
                            Movify est le 1er réseau de salles de cinéma et la premierère plateforme de streaming en Afrique, 
                            construit et développé par le groupe DesireDream. Espace polyvalent, Movify dispose 
                            d'une salle de cinéma dernière génération de 300 places, d’une scène ouverte extérieure 
                            permettant d'accueillir des concerts devant des milliers de personnes et de sa plateforme Movify.com 
                            pour regarder tout vos films en streaming.
                        </p>
                        <ul class="contact-details">
                            <li>
                                <i class="icon-phone"></i>
                                <strong>Téléphone:</strong>
                                <span>(228) 22-25-44-95 </span>
                            </li>
                            <li>
                                <i class="icon-printer"></i>
                                <strong>Fax:</strong>
                                <span>(228) 22-25-44-95 </span>
                            </li>
                            <li>
                                <i class="icon-globe"></i>
                                <strong>Web:</strong>
                                <span><a href="#">www.movify.com</a></span>
                            </li>
                            <li>
                                <i class="icon-paper-plane"></i>
                                <strong>E-Mail:</strong>
                                <span><a href="#"><span class="__cf_email__" data-cfemail="6b02050d042b06041d020d1245080406">[email&#160;protected]</span></a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Start of Contact Details -->


                <!-- Start of Contact Form -->
                <div class="col-md-8 col-sm-12">
                    <h3 class="title">Formulaire de Contact </h3>

                    @if ($valid = Session::get('success'))
                        <div class="col-lg text-center">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ $valid }}
                                <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    @endif

                    <!-- Start of Contact Form -->
                    <form id="contact-form" action=" {{ route('contact-us') }} " method="POST" enctype="multipart/form-data">

                        @csrf
                        <!-- contact result -->
                        <div id="contact-result"></div>
                        <!-- end of contact result -->

                        <!-- Form Group -->
                        <div class="form-group">
                            <input class="form-control input-box" type="text" name="name" placeholder="Votre Nom" autocomplete="off" value="@if (Auth::check()) {{Auth::user()->name}} @endif" >
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                            <input class="form-control input-box" type="email" name="email" placeholder="Votre-mail@movify.com" autocomplete="off"  value="@if (Auth::check()) {{Auth::user()->mail}} @endif">
                        </div>


                        <!-- Form Group -->
                        <div class="form-group">
                            <input class="form-control input-box" type="text" name="sujet" placeholder="Sujet" autocomplete="off">
                        </div>

                        <!-- Form Group -->
                        <div class="form-group mb20">
                            <textarea class="form-control textarea-box" rows="8" name="message" placeholder="Entrez votre message..."></textarea>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-main btn-effect">Envoyer</button>                            
                        </div>
                    </form>
                    <!-- End of Contact Form -->
                </div>
                <!-- Start of Contact Form -->

            </div>
        </div>
    </main>
    <!-- =============== END OF MAIN =============== -->
@endsection