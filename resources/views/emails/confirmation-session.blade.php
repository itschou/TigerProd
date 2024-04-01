@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            <img src="favicon.png" alt="Logo TigerProd" class="img-fluid">
        </div>
        <div class="alert alert-success text-center mt-3" role="alert">
            Votre réservation de session a bien été envoyée à l'équipe de TigerProd. Vous venez de recevoir un mail de
            confirmation à votre adresse e-mail <b> {{ Auth::user()->email }} </b>. Merci pour votre confiance, nous vous contacterons par téléphone au
            <b> {{ Auth::user()->telephone }} </b> le plus vite possible.
        </div>
        <div class="text-center">
            <a href=" {{route('home')}} " class="btn btn-primary mt-3">Revenir au menu principal</a>
        </div>
    </div>
@endsection
