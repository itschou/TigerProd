<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
        <h4 class="text-center text-2xl font-bold text-yellow-600 mb-4">Réserver une session</h4>
        <form method="POST" action="{{ route('newsession') }}">
            @csrf

            <div class="mb-4">
                <label for="session" class="block text-gray-700 font-semibold mb-2">Type de session</label>
                <select class="form-select block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-yellow-500" id="session" name="type">
                    <optgroup label="Music">
                        <option value="COMPOSITION MUSICALE">COMPOSITION MUSICALE</option>
                        <option value="DIRECTION ARTISTIQUE">DIRECTION ARTISTIQUE</option>
                        <option value="ENREGISTREMENT ET MIXAGE">ENREGISTREMENT ET MIXAGE</option>
                        <option value="POST PRODUCTION">POST PRODUCTION</option>
                    </optgroup>
                    <optgroup label="AUTRES SERVICES">
                        <option value="TOURNAGE DE CLIP">TOURNAGE DE CLIP</option>
                        <option value="IMPRESSION">IMPRESSION</option>
                    </optgroup>
                </select>
            </div>

            <div class="mb-4">
                <label for="date" class="block text-gray-700 font-semibold mb-2">Date de la session</label>
                <input type="date" class="form-input block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-yellow-500" id="date" name="date">
            </div>

            <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 rounded-lg transition duration-200">
                Réserver
            </button>
        </form>
    </div>
</div>