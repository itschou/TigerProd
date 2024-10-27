@php
    use App\Models\site;
@endphp

@extends('layouts.app')

@section('content')
    <x-Navbar />

<section class="overflow-hidden bg-gray-50 sm:grid sm:grid-cols-2 sm:items-center">
  <div class="p-8 md:p-12 lg:px-16 lg:py-24">
    <div class="mx-auto max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
    <h1 class="text-2xl font-bold text-gray-900 md:text-3xl">
    TigerProd : Votre studio d'enregistrement professionnel à Rabat
</h1>

<p class="hidden text-gray-500 md:mt-4 md:block">
    TigerProd est le studio d'enregistrement idéal à Rabat, offrant des services de production musicale de haute qualité. 
    Que vous soyez musicien, artiste ou producteur, notre équipe est là pour vous accompagner dans tous vos projets 
    musicaux et vous aider à libérer votre créativité.
</p>


      <div class="mt-4 md:mt-8">
        <a
          href="/home"
          class="inline-block rounded bg-yellow-600 px-5 py-3 text-sm font-medium text-white transition hover:bg-yellow-700 focus:outline-none focus:ring focus:ring-yellow-400"
        >
          Reserver ma session
        </a>
      </div>
    </div>
  </div>

  <img
    alt="Representatif image of tigerprod studio rabat"
    src="https://images.unsplash.com/photo-1484959014842-cd1d967a39cf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
    class="h-full w-full object-cover sm:h-[calc(100%_-_2rem)] sm:self-end sm:rounded-l-[30px] md:h-[calc(100%_-_4rem)] md:rounded-l-[60px]"
    loading="lazy"
    width="1200px" height="800px"
  />
</section>

    
    <section class="bg-gray-900 text-white my-16 rounded-3xl mx-3">
  <div class="px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
    <div class="max-w-xl">
      <h2 class="text-3xl font-bold sm:text-4xl">Ce qui fait notre spécificité</h2>

      <p class="mt-4 text-gray-300">
      Chez TigerProd, nous sommes spécialisés dans la production musicale, ayant collaboré avec de nombreux artistes pour les aider à perfectionner leur art à travers nos services d'expertise.
      </p>
    </div>

    <div class="mt-8 grid grid-cols-1 gap-8 md:mt-16 md:grid-cols-2 md:gap-12 lg:grid-cols-3">
      <div class="flex items-start gap-4">
        <span class="shrink-0 rounded-lg bg-gray-800 p-4">
          <svg
            class="size-5"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
    <path d="M7 9.5C7 10.8807 5.88071 12 4.5 12C3.11929 12 2 10.8807 2 9.5C2 8.11929 3.11929 7 4.5 7C5.88071 7 7 8.11929 7 9.5ZM7 9.5V2C7.33333 2.5 7.6 4.6 10 5" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
    <circle cx="10.5" cy="19.5" r="2.5" stroke="currentColor" strokeWidth="2" />
    <circle cx="20" cy="18" r="2" stroke="currentColor" strokeWidth="2" />
    <path d="M13 19.5L13 11C13 10.09 13 9.63502 13.2466 9.35248C13.4932 9.06993 13.9938 9.00163 14.9949 8.86504C18.0085 8.45385 20.2013 7.19797 21.3696 6.42937C21.6498 6.24509 21.7898 6.15295 21.8949 6.20961C22 6.26627 22 6.43179 22 6.76283V17.9259" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
    <path d="M13 13C17.8 13 21 10.6667 22 10" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" />
          </svg>
        </span>

        <div>
          <h2 class="text-lg font-bold">COMPOSITION MUSICALE</h2>

          <p class="mt-1 text-sm text-gray-300">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error cumque tempore est ab
            possimus quisquam reiciendis tempora animi! Quaerat, saepe?
          </p>
        </div>
      </div>

      <div class="flex items-start gap-4">
        <span class="shrink-0 rounded-lg bg-gray-800 p-4">
          <svg
            class="size-5"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
       
    <path d="M3.99803 12.9996C3.99803 12.9996 1.99805 11.5266 1.99805 10.9996C1.99805 10.4725 3.99805 8.99965 3.99805 8.99965M20.0039 15.0001C20.0039 15.0001 22.0029 13.5271 22.0029 13.0001C22.0029 12.473 20.0039 11.0001 20.0039 11.0001M21.7781 12.8675C20.3664 13.1574 17.7204 13.27 16.4099 10.8163C15.8666 9.95268 15.9684 8.50668 15.9684 6.86106C15.9346 6.19025 15.3632 4.96995 13.931 5.00057C12.4989 5.03118 12.0286 6.20733 11.9725 6.79158V16.9022C11.9871 17.7539 11.4934 18.9993 9.97701 18.9993C8.49653 18.9993 7.91702 17.6872 8.04471 16.7036C8.39056 14.0396 7.5823 11.2472 4.08206 11.003H1.99805" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />

          </svg>
        </span>

        <div>
          <h2 class="text-lg font-bold">DIRECTION ARTISTIQUE</h2>

          <p class="mt-1 text-sm text-gray-300">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error cumque tempore est ab
            possimus quisquam reiciendis tempora animi! Quaerat, saepe?
          </p>
        </div>
      </div>

      <div class="flex items-start gap-4">
        <span class="shrink-0 rounded-lg bg-gray-800 p-4">
          <svg
            class="size-5"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
          <path d="M17 7V11C17 13.7614 14.7614 16 12 16C9.23858 16 7 13.7614 7 11V7C7 4.23858 9.23858 2 12 2C14.7614 2 17 4.23858 17 7Z" stroke="currentColor" strokeWidth="1.5" />
    <path d="M17 7H14M17 11H14" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" />
    <path d="M20 11C20 15.4183 16.4183 19 12 19M12 19C7.58172 19 4 15.4183 4 11M12 19V22M12 22H15M12 22H9" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" />
          </svg>
        </span>

        <div>
          <h2 class="text-lg font-bold">ENREGISTREMENT</h2>

          <p class="mt-1 text-sm text-gray-300">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error cumque tempore est ab
            possimus quisquam reiciendis tempora animi! Quaerat, saepe?
          </p>
        </div>
      </div>

      <div class="flex items-start gap-4">
        <span class="shrink-0 rounded-lg bg-gray-800 p-4">
          <svg
            class="size-5"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
          
      
    <path d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z" stroke="currentColor" strokeWidth="1.5" />
    <path d="M15 11L16.8284 9.17157C17.4065 8.59351 17.6955 8.30448 17.8478 7.93694C18 7.5694 18 7.16065 18 6.34315V3" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" />
    <path d="M17.1973 9C17.7078 9.88252 18 10.9071 18 12C18 15.3137 15.3137 18 12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C12.8922 6 13.7389 6.19474 14.5 6.54404" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" />
    <path d="M9 13C9.3294 13.932 10.068 14.6706 11 15" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" />


          </svg>
        </span>

        <div>
          <h2 class="text-lg font-bold">MIXAGE</h2>

          <p class="mt-1 text-sm text-gray-300">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error cumque tempore est ab
            possimus quisquam reiciendis tempora animi! Quaerat, saepe?
          </p>
        </div>
      </div>

      <div class="flex items-start gap-4">
        <span class="shrink-0 rounded-lg bg-gray-800 p-4">
          <svg
            class="size-5"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
     
    <path d="M4.5 21.5L8.5 17.5M10.5 17.5L14.5 21.5M9.5 17.5L9.5 22.5" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
    <path d="M2 11.875C2 9.81261 2 8.78141 3.02513 8.1407C4.05025 7.5 5.70017 7.5 9 7.5H10C13.2998 7.5 14.9497 7.5 15.9749 8.1407C17 8.78141 17 9.81261 17 11.875V13.125C17 15.1874 17 16.2186 15.9749 16.8593C14.9497 17.5 13.2998 17.5 10 17.5H9C5.70017 17.5 4.05025 17.5 3.02513 16.8593C2 16.2186 2 15.1874 2 13.125V11.875Z" stroke="currentColor" strokeWidth="1.5" />
    <path d="M17 10.2495L17.1259 10.174C19.2417 8.90435 20.2996 8.26954 21.1498 8.57605C22 8.88257 22 9.89876 22 11.9312V13.0685C22 15.1009 22 16.1171 21.1498 16.4236C20.2996 16.7301 19.2417 16.0953 17.1259 14.8257L17 14.7501" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" />
    <circle cx="12.5" cy="5" r="2.5" stroke="currentColor" strokeWidth="1.5" />
    <circle cx="7" cy="4.5" r="3" stroke="currentColor" strokeWidth="1.5" />

          </svg>
        </span>

        <div>
          <h2 class="text-lg font-bold">Clip musical</h2>

          <p class="mt-1 text-sm text-gray-300">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error cumque tempore est ab
            possimus quisquam reiciendis tempora animi! Quaerat, saepe?
          </p>
        </div>
      </div>

      <div class="flex items-start gap-4">
        <span class="shrink-0 rounded-lg bg-gray-800 p-4">
          <svg
            class="size-5"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
            <path
              d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
            ></path>
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
            ></path>
          </svg>
        </span>

        <div>
          <h2 class="text-lg font-bold">Lorem, ipsum dolor.</h2>

          <p class="mt-1 text-sm text-gray-300">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error cumque tempore est ab
            possimus quisquam reiciendis tempora animi! Quaerat, saepe?
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="mx-auto max-w-screen-2xl px-4 py-8 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
      <div class="bg-blue-600 p-8 md:p-12 lg:px-16 lg:py-24">
        <div class="mx-auto max-w-xl text-center">
          <h2 class="text-2xl font-bold text-white md:text-3xl">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit
          </h2>

          <p class="hidden text-white/90 sm:mt-4 sm:block">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas tempus tellus etiam
            sed. Quam a scelerisque amet ullamcorper eu enim et fermentum, augue. Aliquet amet
            volutpat quisque ut interdum tincidunt duis.
          </p>

          <div class="mt-4 md:mt-8">
            <a
              href="#"
              class="inline-block rounded border border-white bg-white px-12 py-3 text-sm font-medium text-blue-500 transition hover:bg-transparent hover:text-white focus:outline-none focus:ring focus:ring-yellow-400"
            >
              Get Started Today
            </a>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-2 gap-4 md:grid-cols-1 lg:grid-cols-2">
        <img
          alt=""
          src="https://images.unsplash.com/photo-1621274790572-7c32596bc67f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=654&q=80"
          class="h-40 w-full object-cover sm:h-56 md:h-full"
        />

        <img
          alt=""
          src="https://images.unsplash.com/photo-1567168544813-cc03465b4fa8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
          class="h-40 w-full object-cover sm:h-56 md:h-full"
        />
      </div>
    </div>
  </div>
</section>


    <x-footer />
@endsection
