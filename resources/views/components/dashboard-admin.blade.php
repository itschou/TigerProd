@php
    use Carbon\Carbon;
@endphp

<div class="container mx-auto h-auto p-6">
    <!-- Profile Section -->
    <div class="flex flex-col items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Dashboard Administrateur</h1>
    </div>

    <!-- Dashboard Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <!-- Nombre d'inscrits -->
        <div class="bg-yellow-500 text-white p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-xl font-semibold">Nombre d'inscrits</h2>
            <p class="text-2xl">{{ count($users) }}</p>
        </div>
        <!-- Dernier inscrit -->
        <div class="bg-yellow-500 text-white p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-xl font-semibold">Dernier inscrit</h2>
            <p class="text-2xl">
                @if ($lastUser)
                    {{ $lastUser->nom }} {{ $lastUser->prenom }}
                @else
                    Aucun utilisateur inscrit
                @endif
            </p>
        </div>
        <!-- Total de sessions -->
        <div class="bg-yellow-500 text-white p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-xl font-semibold">Total de sessions</h2>
            <p class="text-2xl">{{ count($sessions) }}</p>
        </div>
    </div>

    <!-- Sessions Table -->
    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
        <h2 class="text-2xl font-bold text-gray-700 mb-4">Liste des Sessions</h2>
        <div class="overflow-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Date</th>
                        <th class="py-2 px-4 border-b">Demande</th>
                        <th class="py-2 px-4 border-b">Téléphone</th>
                        <th class="py-2 px-4 border-b"></th>
                        <th class="py-2 px-4 border-b"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sessions as $session)
                        @if (!$session->etat)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $session->id }}</td>
                                <td class="py-2 px-4 border-b">{{ Carbon::parse($session->date)->format('d/m/Y') }}</td>
                                <td class="py-2 px-4 border-b">{{ $session->type }}</td>
                                <td class="py-2 px-4 border-b"><i class="fas fa-phone"></i> {{ $session->telephone }}</td>
                                <td class="py-2 px-4 border-b">
                                    <form action="{{ route('archiversession') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="session_id" value="{{ $session->id }}">
                                        <button type="submit" class="bg-gray-500 text-white py-1 px-3 rounded">Archiver</button>
                                    </form>
                                </td>
                                <td class="py-2 px-4 border-b">
                                    <form action="{{ route('supprimersession') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="session_id" value="{{ $session->id }}">
                                        <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Archive Accordion -->
    <div class="bg-white p-6 rounded-lg shadow-lg pb-10">
    <h2 class="text-xl font-semibold text-gray-700 cursor-pointer flex items-center" onclick="toggleAccordion()">
        Archive
        <span id="archiveIndicator" class="ml-2 transition-transform transform">+</span>
        @if (count($sessionsfalse) > 0)
            <span class="ml-auto text-sm">{{ count($sessionsfalse) }} sessions archivées</span>
        @else
            <span class="ml-auto text-sm text-red-500">Aucune session archivée</span>
        @endif
    </h2>

    <div id="archiveCollapse" class="hidden mt-4 transition-all duration-300 ease-out overflow-hidden">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Date</th>
                    <th class="py-2 px-4 border-b">Demande</th>
                    <th class="py-2 px-4 border-b">Téléphone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sessions as $session)
                    @if ($session->etat && count($sessionsfalse) > 0)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $session->id }}</td>
                            <td class="py-2 px-4 border-b">{{ Carbon::parse($session->date)->format('d/m/Y') }}</td>
                            <td class="py-2 px-4 border-b">{{ $session->type }}</td>
                            <td class="py-2 px-4 border-b">
                                <i class="fas fa-phone"></i> {{ $session->telephone }}
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Formulaire pour Ajouter une Réalisation -->
<div class="bg-white p-6 rounded-lg shadow-lg mb-6 mt-5">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Ajouter une Réalisation</h2>
        <form action="{{ route('realisations.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <input type="text" name="artist_name" placeholder="Nom de l'artiste" class="border p-2 rounded" required>
                <input type="text" name="music_name" placeholder="Nom de la musique" class="border p-2 rounded" required>
                <input type="url" name="youtube_link" placeholder="Lien YouTube" class="border p-2 rounded" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Ajouter</button>
        </form>
    </div>

    <!-- Liste des Réalisations -->
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Réalisations</h2>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nom de l'artiste</th>
                    <th class="py-2 px-4 border-b">Nom de la musique</th>
                    <th class="py-2 px-4 border-b">Lien YouTube</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($realisations as $realisation)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $realisation->artist_name }}</td>
                        <td class="py-2 px-4 border-b">{{ $realisation->music_name }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ $realisation->youtube_link }}" target="_blank" class="text-blue-500">Voir la vidéo</a>
                        </td>
                        <td class="py-2 px-4 border-b">
                            <!-- Bouton Modifier -->
                            <button onclick="openEditModal({{ $realisation }})" class="bg-yellow-500 text-white py-1 px-3 rounded">Modifier</button>
                            
                            <!-- Bouton Supprimer -->
                            <form action="{{ route('realisations.destroy', $realisation->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal de Modification -->
<div id="editModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Modifier la Réalisation</h2>
        <form id="editForm" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <input type="text" id="editArtistName" name="artist_name" class="border p-2 rounded" required>
                <input type="text" id="editMusicName" name="music_name" class="border p-2 rounded" required>
                <input type="url" id="editYoutubeLink" name="youtube_link" class="border p-2 rounded" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Mettre à jour</button>
            <button type="button" onclick="closeEditModal()" class="bg-gray-500 text-white py-2 px-4 rounded">Annuler</button>
        </form>
    </div>
</div>
</div>

<script>
    function toggleAccordion() {
        const archiveCollapse = document.getElementById('archiveCollapse');
        const archiveIndicator = document.getElementById('archiveIndicator');

        archiveCollapse.classList.toggle('hidden');

        // Changer l'indicateur en + ou - en fonction de l'état de l'accordéon
        if (archiveCollapse.classList.contains('hidden')) {
            archiveIndicator.textContent = '+';
        } else {
            archiveIndicator.textContent = '-';
        }
    }

    function openEditModal(realisation) {
        // Remplir le formulaire avec les données de la réalisation à modifier
        document.getElementById('editArtistName').value = realisation.artist_name;
        document.getElementById('editMusicName').value = realisation.music_name;
        document.getElementById('editYoutubeLink').value = realisation.youtube_link;

        // Définir l'action du formulaire avec l'ID de la réalisation
        document.getElementById('editForm').action = `/realisations/${realisation.id}`;

        // Afficher le modal
        document.getElementById('editModal').classList.remove('hidden');
    }

    function closeEditModal() {
        // Cacher le modal
        document.getElementById('editModal').classList.add('hidden');
    }
</script>