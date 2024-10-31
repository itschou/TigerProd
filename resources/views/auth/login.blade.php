@extends('layouts.app')

@section('content')
<section class="relative flex flex-wrap lg:h-screen lg:items-center">
  <div class="w-full px-4 py-12 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24">
    <div class="mx-auto max-w-lg text-center">
      <h1 class="text-2xl font-bold sm:text-3xl">{{ __('Connexion') }}</h1>
      <p class="mt-4 text-gray-500">
        Connecte-toi pour accéder à ton compte.
      </p>
      <a href="/" class="underline">Page d'accueil</a>
    </div>

    <form method="POST" action="{{ route('login') }}" class="mx-auto mt-8 max-w-md space-y-4">
      @csrf

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
          <span class="absolute inset-y-0 right-0 grid place-content-center px-4 text-gray-400">
            <i class="bi bi-envelope"></i>
          </span>
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
            autocomplete="current-password"
            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
            placeholder="Mot de passe"
          />
          @error('password')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
          @enderror
          <span class="absolute inset-y-0 right-0 grid place-content-center px-4 text-gray-400">
            <i class="bi bi-lock"></i>
          </span>
        </div>
      </div>

      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input
            id="remember"
            type="checkbox"
            name="remember"
            class="rounded border-gray-300 text-yellow-600 shadow-sm focus:ring focus:ring-yellow-200"
            {{ old('remember') ? 'checked' : '' }}
          />
          <label for="remember" class="ml-2 block text-sm text-gray-900">
            {{ __('Se souvenir de moi') }}
          </label>
        </div>

        <div>
          <button type="submit" class="inline-block rounded-lg bg-yellow-500 px-5 py-3 text-sm font-medium text-white">
            {{ __('Connexion') }}
          </button>
        </div>
      </div>

      <div class="mt-4 text-center">
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}" class="text-sm text-yellow-500 hover:underline">
            {{ __('Mot de passe oublié ?') }}
          </a>
        @endif
        <p class="text-sm text-gray-500 mt-2">
          {{ __('Pas encore de compte ?') }}
          <a href="{{ route('register') }}" class="text-yellow-500 underline">{{ __('Inscris-toi !') }}</a>
        </p>
      </div>
    </form>
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
