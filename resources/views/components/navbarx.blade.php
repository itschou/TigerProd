@if (Auth::user()->admin == false)
    <nav class="bg-gray-800 text-white shadow">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <a class="text-2xl font-bold" href="/home">TigerProd</a>
            <button class="navbar-toggler block lg:hidden text-white focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse lg:flex lg:items-center lg:w-auto hidden" id="navbarNav">
                <ul class="flex flex-col lg:flex-row lg:space-x-4">
                    <li>
                        <a class="block py-2 px-4 text-white hover:bg-gray-700 rounded" aria-current="page" href="/">Accueil</a>
                    </li>
                </ul>
                <ul class="flex items-center space-x-4 ml-auto">
                    <li class="relative">
                        <a class="flex items-center hover:text-gray-400" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/img/profile.png" alt="Photo de profil" width="30" height="30" class="rounded-full mr-2">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="absolute right-0 mt-2 w-48 bg-white text-black shadow-lg rounded hidden" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="block px-4 py-2 hover:bg-gray-200" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@else
    <nav class="bg-gray-800 text-white shadow">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <a class="text-2xl font-bold" href="/home">TigerProd - <span class="text-red-500">Administrateur</span></a>
            <button class="navbar-toggler block lg:hidden text-white focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse lg:flex lg:items-center lg:w-auto hidden" id="navbarNav">
                <ul class="flex flex-col lg:flex-row lg:space-x-4">
                    <li>
                        <a class="block py-2 px-4 text-white hover:bg-gray-700 rounded" aria-current="page" href="/">Accueil</a>
                    </li>
                    <li>
                        <a class="block py-2 px-4 text-white hover:bg-gray-700 rounded" href="/sendemails">Emails</a>
                    </li>
                </ul>
                <ul class="flex items-center space-x-4 ml-auto">
                    <li class="relative">
                        <a class="flex items-center hover:text-gray-400" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="favicon.png" alt="Photo de profil" width="30" height="30" class="rounded-full mr-2">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="absolute right-0 mt-2 w-48 bg-white text-black shadow-lg rounded hidden" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="block px-4 py-2 hover:bg-gray-200" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endif
