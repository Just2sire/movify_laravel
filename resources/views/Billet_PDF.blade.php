<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <link rel="stylesheet" href="/style.css">
  <title>Billet-PDF</title>
  <style>
    /* Mise en forme générale */
    body {
        margin: 0;
        font-size: 1.3em;
        border: 10px solid #a11f3c;
        background-color: wheat;
    }

    /* En-tête */
    header {
        background-color: #ddd;
        padding: 10px;
        text-align: center;
    }

    /* h1 */
    h1 {
        text-align: center;
        text-decoration: underline;
        font-size: 2em;
    }

    h4 {
        text-align: end;
    }

    /* Contenu */
    main {
        padding: 10px;
    }

    /* Tableau */
    table {
        text-align: center;
        align-content: center;
        border-collapse: collapse;
        margin: 0 auto;
        width: 50%;
    }

    .text {
        text-align: start;
        /* transform: translateX(80px); */
    }

    #logo {
        width: 100px;
        height: 100px;
        float: left;
        /* margin: 0 auto; */
    }

    .pic {
        margin: 0 auto;
        justify-content: center;
    }

    #UserPic {
        width: 115px;
        height: 115px;
        display: block;
        border: 3px solid goldenrod;
        margin: auto;
        /* transform: translateX(80px); */
        /* margin: 0 auto; */
    }

    .content {
        justify-content: center;
        display: inline-flex;
    }

    a {
        color: #a11f3c;
        font-style: italic;
    }

    .date {
      text-align: end;
    }

    #movie {
        height: 444px;
        width: 300px;
        margin: 0px auto;
        border: 3px solid white;
        margin-top: -115px;
        /* transform: translateY(-115px); */
    }

    .text-end {
        text-align: right;
        margin-right: 50px;
    }

    th,
    td {
        border: 1px solid #333;
        padding: 5px;
        text-align: center;
    }

    /* Pied de page */
    footer {
        /* background-color: #ddd;
        padding: 10px; */
        text-align: center;
        font-style: italic;
    }
  </style>
</head>
<?php
$path1 = public_path("assets/images/logoMovie.png");
$type1 = pathinfo($path1, PATHINFO_EXTENSION);
$data1 = file_get_contents($path1);
$base641 = 'data:image/' . $type1 . ';base64,' . base64_encode($data1);

$path3 = public_path("images/$infoBillet->image");
$type3 = pathinfo($path3, PATHINFO_EXTENSION);
$data3 = file_get_contents($path3);
$base643 = 'data:image/' . $type3 . ';base64,' . base64_encode($data3);
// foreach ($infoBillet as $item) {
//     $path3 = public_path("images/$item->image");
//     $type3 = pathinfo($path3, PATHINFO_EXTENSION);
//     $data3 = file_get_contents($path3);
//     $base643 = 'data:image/' . $type3 . ';base64,' . base64_encode($data3);
// }

?>
<body>
  <!-- Contenu -->
  <main>
    
    <div class="img">
      <img src="{{ $base641 }}" alt="Logo" id="logo">
    </div>
      <section>
        <h1 class="">{{ $data['title'] }}</h1>
        <h4 class="date">{{ $data['date'] }}</h4>
        <div class="pic">
          <img src="{{ $base643 }}" alt="Image" id="UserPic">
        </div>
            
        <div class="content">

            <article>
                <p class="text">Cher Mr/Md <b><i>{{ Auth::user()->name }}</i></b>, <br>
                  Félicitations ! Vous venez d'acheter {{ $infoBillet->number }} ticket(s) pour le film <b><i>{{ $infoBillet->movie }}</i></b> sur Movify. <br>
                  Nous espérons que vous passerez un moment agréable et divertissant au cinéma.
                  Assurez-vous <br> de vérifier les horaires et la salle de projection avant de partir,
                  et n'oubliez pas d'apporter <br> votre billet imprimé ou sur votre appareil mobile. <br>
                  Nous vous souhaitons une excellente séance de cinéma !
                </p>
                {{-- @foreach ($infoBillet as $item)
                  <p class="text">Cher Mr/Md <b><i>{{ Auth::user()->name }}</i></b>, <br>
                    Félicitations ! Vous venez d'acheter {{ $item->number }} ticket(s) pour le film <b><i>{{ $item->movie }}</i></b> sur Movify. <br>
                    Nous espérons que vous passerez un moment agréable et divertissant au cinéma.
                    Assurez-vous <br> de vérifier les horaires et la salle de projection avant de partir,
                    et n'oubliez pas d'apporter <br> votre billet imprimé ou sur votre appareil mobile. <br>
                    Nous vous souhaitons une excellente séance de cinéma !
                  </p>
                @endforeach --}}
            </article>
            {{-- <article>
                <img src="{{ $base642 }}" alt="Image" id="movie">
            </article> --}}
            

        </div>

        <p class="text-end">Cordialement, l'equipe <a href="http://localhost:8000">Movify</a></p>
      </section>
  </main>
  
  <!-- Pied de page -->
  <footer>
    <p>Movify - Tous droits réservés</p>
  </footer>
</body>
</html>
