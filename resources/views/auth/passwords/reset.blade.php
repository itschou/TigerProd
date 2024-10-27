@extends('layouts.app')

@section('content')
<section class="flex items-center justify-center h-screen bg-gray-50">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">{{ __('Réinitialisation de mot de passe') }}</h2>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Adresse e-mail') }}</label>
                <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md @error('email') border-red-500 @enderror" />
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Mot de passe') }}</label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md @error('password') border-red-500 @enderror" />
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password-confirm" class="block text-sm font-medium text-gray-700">{{ __('Confirmer le mot de passe') }}</label>
                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password"
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
            </div>

            <div>
                <button type="submit" class="w-full px-4 py-2 font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    {{ __('Réinitialiser le mot de passe') }}
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
