@extends('templates.template')

@section('meta')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/bootstrap.css">
@endsection

@section('title')
    Movify Account
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8 offset-lg-2 text-dark alert alert-success rounded text-center p-3 mt-3">
            <h1 class="text-center text-success">Félicitations !</h1>
            <p>Mr/Md <i><b>{{ $user->name }}</b></i> votre compte Movify a été créé avec succès.</p>
            <p>Vos informations de connexion sont les suivantes :</p>

            <div class="text-center">
                Adresse e-mail: <b><i>{{ $user->email }}</i></b>
            </div>
            
            <p>Nous vous recommandons de changer votre mot de passe dès que possible en utilisant l'option de mot de passe oublié.</p>
            <p>Si vous avez des questions, n'hésitez pas à nous contacter.</p>
            <p class="text-center my-2">Merci de choisir <a href="http://localhost:8000/" target="_blank" rel="noopener noreferrer"><i><b>Movify</b></i></a> .</p>
        </div>
    </div>
@endsection