<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand text-white" href="#page-top">TigerProd</a>
        <a class="px-4 link text-decoration-none text-white" href="/">Acceuil</a>
        <a class="px-4 link text-decoration-none text-white" href=" {{route('propos')}} ">A PROPOS</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                @if (Auth::check())
                <li class="nav-item"><a href="/home" class="text-decoration-none"><span class="nav-link"> Bienvenue {{ Auth::user()->prenom}} </span></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Deconnexion</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @else
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('login') }}">Se connecter</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('register') }}">S'enregistrer</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
