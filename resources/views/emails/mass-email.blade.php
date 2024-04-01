@extends('layouts.app')

@section('content')
    <x-navbarx />


    <div class="container">
        <h1 class="text-center mb-4">Envoi de mails a tous les inscrits</h1>
        <form method="POST" action=" {{route('sentmassmail')}} ">
            @csrf
            <div class="mb-3">
                <label for="destinataires" class="form-label">Destinataires : {{ count($users) }} emails </label>
                @error('destinataires')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="objet" class="form-label">Objet :</label>
                <input type="text" class="form-control" id="objet" name="objet" value="{{ old('objet') }}">
                @error('objet')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message :</label>
                <input type="text" class="form-control" id="message" name="messagee" value="{{ old('message') }}">
                @error('message')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
@endsection
