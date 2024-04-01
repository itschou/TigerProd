@php
    use Carbon\Carbon;
@endphp

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="col text-center">
                <img src="favicon.png" class="rounded-circle border border-dark" alt="Photo de profil" width="150">
            </div>
            <div class="card-dark">
                <div class="card-header text-white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row mb-4">
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card bgs-gold">
                                <div class="particles"></div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-dark">{{ __('Nombre d\'inscrits') }}</h5>
                                    <p class="card-text text-dark">{{ count($users) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bgs-gold">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-dark">{{ __('Dernier inscrit') }}</h5>
                                    @if ($lastUser)
                                        <p class="card-text text-dark">{{ $lastUser->nom }} {{ $lastUser->prenom }}</p>
                                    @else
                                        <p class="card-text text-dark">{{ __('Aucun utilisateur inscrit') }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bgs-gold">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-dark">{{ __('Total de sessions') }}</h5>
                                    <p class="card-text text-dark">{{ count($sessions) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bgs-gold">
                                <div class="card-body text-center">
                                    {{-- <h5 class="card-title text-dark">{{ __('Promotion :') }} @if ($toggle->show == false) <span class="text-danger"><b>Désactivé</b></span> @else <span class="text-success"><b>Activé</b></span> @endif</h5> --}}
                                    <span class="card-text text-dark">
                                        <form action=" {{ route('toggle') }} " method="POST"> @csrf @if ($toggle && $toggle->show == false)
                                                <button class="btn btn-success">Activer la promotion maintenant</button>
                                            @else
                                                <button class="btn btn-danger">Désactiver la promotion
                                                    maintenant</button>
                                            @endif
                                        </form>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div><br>

                </div>

            </div>

        </div>
        <br> <br>
    </div><br>
    <br>
    <br>
    <div class="row">

        <div class="card">

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Date</th>
                            <th scope="col">Demande</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sessions as $session)
                            @if ($session->etat == false)
                                <tr>
                                    <td>{{ $session->id }}</td>
                                    <td>{{ Carbon::parse($session->date)->format('d/m/Y') }}</td>
                                    <td>{{ $session->type }}</td>
                                    <td><i class="fas fa-phone"></i> {{ $session->telephone }} </td>
                                    <td>
                                        <form action="{{ route('archiversession') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="session_id" value="{{ $session->id }}">
                                            <button type="submit" class="btn btn-secondary"><i
                                                    class="fas fa-archive"></i>
                                                Archiver</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('supprimersession') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="session_id" value="{{ $session->id }}">
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fa-solid fa-trash"></i>
                                                Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>

    <br>
    <br>
    <br>

    <div class="row">

        <div class="accordion" id="archiveAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="archiveHeading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#archiveCollapse" aria-expanded="false" aria-controls="archiveCollapse">
                        Archive @if (count($sessionsfalse) > 0)
                            <span class="ms-auto">{{ count($sessionsfalse) }} archivé</span>
                        @else
                            <span class="ms-auto text-danger">Aucune session archivé</span>
                        @endif
                    </button>
                </h2>
                <div id="archiveCollapse" class="accordion-collapse collapse" aria-labelledby="archiveHeading"
                    data-bs-parent="#archiveAccordion">
                    <div class="accordion-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Demande</th>
                                    <th scope="col">Téléphone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sessions as $session)
                                    @if ($session->etat == true && count($sessionsfalse) > 0)
                                        <tr>
                                            <td> {{ $session->id }} </td>
                                            {{-- <td>{{ Carbon::parse($session->date)->format('d/m/Y') }}</td> --}}
                                            <td>{{ $session->type }}</td>
                                            <td><i class="fas fa-phone"></i> {{ $session->telephone }} </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


<style>
    .bg-orange {
        background-color: #f3b33d !important;

    }
</style>
