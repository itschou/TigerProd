<header class="bg-gray-900 w-full h-16">
  <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
    <a class="block text-yellow-600" href="/">
      <span class="sr-only">Home</span>
      <img src="/assets/img/logo_old.webp" width="500px" height="500px" loading="lazy" class="w-full h-10" />
    </a>

    <div class="flex flex-1 items-center justify-end md:justify-between">
      <nav aria-label="Global" class="hidden md:block">
        <ul class="flex items-center gap-6 text-sm">
          <li>
            <a class="text-gray-50 transition hover:text-gray-50/75" href="propos">Services </a>
          </li>

          <li>
            <a class="text-gray-50 transition hover:text-gray-50/75" href="propos">Contact </a>
          </li>

        </ul>
      </nav>

      <div class="flex items-center gap-4">
      @if (Auth::check())
      <div class="sm:flex sm:gap-4">
      <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf

          <button class="rounded-md bg-gray-100 px-3 py-1.5 text-sm font-medium text-yellow-600 transition hover:text-yellow-600/75 sm:block">

              Déconnexion
            </button>
                </form>
          
        </div>
      @else
        <div class="sm:flex sm:gap-4">
          <a
            class="block rounded-md bg-yellow-600 px-3 py-1.5 text-sm font-medium text-white transition hover:bg-yellow-700"
            href="{{ route('register') }}"
          >
          Créer un compte
          </a>

          <a
            class="hidden rounded-md bg-gray-100 px-3 py-1.5 text-sm font-medium text-yellow-600 transition hover:text-yellow-600/75 sm:block"
            href="{{ route('login') }}"
          >
          Connexion
          </a>
        </div>
        @endif

        <button
          class="block rounded bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden"
        >
          <span class="sr-only">Toggle menu</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>