@extends('layouts.app')

@section('content')
<section class="relative flex flex-wrap lg:h-screen lg:items-center">
  <div class="w-full px-4 py-12 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24">
    <div class="mx-auto max-w-lg text-center">
      <h1 class="text-2xl font-bold sm:text-3xl">{{ __('Inscription') }}</h1>
      <p class="mt-4 text-gray-500">
        Crée un compte pour accéder à toutes les fonctionnalités.
      </p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="mx-auto mt-8 max-w-md space-y-4">
      @csrf

      <div>
        <label for="nom" class="sr-only">{{ __('Nom') }}</label>
        <div class="relative">
          <input
            id="nom"
            type="text"
            name="nom"
            value="{{ old('nom') }}"
            required
            autocomplete="nom"
            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
            placeholder="Nom"
          />
          @error('nom')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div>
        <label for="prenom" class="sr-only">{{ __('Prénom') }}</label>
        <div class="relative">
          <input
            id="prenom"
            type="text"
            name="prenom"
            value="{{ old('prenom') }}"
            required
            autocomplete="prenom"
            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
            placeholder="Prénom"
          />
          @error('prenom')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div>
        <label for="telephone" class="sr-only">{{ __('Numéro de téléphone') }}</label>
        <div class="relative">
          <input
            id="telephone"
            type="text"
            name="telephone"
            value="{{ old('telephone') }}"
            required
            autocomplete="telephone"
            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
            placeholder="Numéro de téléphone"
          />
          @error('telephone')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div>
        <label for="email" class="sr-only">{{ __('Adresse e-mail') }}</label>
        <div class="relative">
          <input
            id="email"
            type="email"
            name="email"
            value="{{ old('email') }}"
            required
            autocomplete="email"
            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
            placeholder="Email"
          />
          @error('email')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div>
        <label for="password" class="sr-only">{{ __('Mot de passe') }}</label>
        <div class="relative">
          <input
            id="password"
            type="password"
            name="password"
            required
            autocomplete="new-password"
            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
            placeholder="Mot de passe"
          />
          @error('password')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div>
        <label for="password-confirm" class="sr-only">{{ __('Confirmer le mot de passe') }}</label>
        <div class="relative">
          <input
            id="password-confirm"
            type="password"
            name="password_confirmation"
            required
            autocomplete="new-password"
            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
            placeholder="Confirmer le mot de passe"
          />
        </div>
      </div>

      <div class="mt-4">
        <button type="submit" class="inline-block rounded-lg bg-yellow-500 px-5 py-3 text-sm font-medium text-white">
          {{ __('S\'inscrire') }}
        </button>
      </div>
    </form>

    <div class="mt-4 text-center">
      <p class="text-sm text-gray-500">
        {{ __('Déjà un compte ?') }}
        <a href="{{ route('login') }}" class="text-yellow-500 underline">{{ __('Connectez-vous !') }}</a>
      </p>
    </div>
  </div>

  <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2">
    <img
      alt="Studio d'enregistrement"
      src="https://images.unsplash.com/photo-1630450202872-e0829c9d6172?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
      class="absolute inset-0 h-full w-full object-cover"
    />
  </div>
</section>
@endsection
