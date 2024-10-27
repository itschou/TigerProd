@extends('layouts.app')

@section('content')
<section class="flex items-center justify-center h-screen bg-gray-50">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">{{ __('Réinitialiser le mot de passe') }}</h2>

        @if (session('status'))
            <div class="mb-4 p-3 text-green-800 bg-green-100 rounded">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Adresse email') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md @error('email') border-red-500 @enderror" />
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <button type="submit" class="w-full px-4 py-2 font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    {{ __('Envoyer le lien de réinitialisation du mot de passe') }}
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
