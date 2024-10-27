@extends('layouts.app')

@section('content')
<section class="flex items-center justify-center h-screen bg-gray-50">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">{{ __('Confirmer le mot de passe') }}</h2>
        <p class="text-center text-gray-600 mb-4">{{ __('Veuillez confirmer votre mot de passe avant de continuer.') }}</p>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Mot de passe') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md @error('password') border-red-500 @enderror" />
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="w-full px-4 py-2 font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    {{ __('Confirmer le mot de passe') }}
                </button>
                @if (Route::has('password.request'))
                    <a class="text-sm text-blue-600 hover:underline" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</section>
@endsection
