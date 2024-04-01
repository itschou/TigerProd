@extends('layouts.app')

@section('content')
    <x-Navbar />

    <br><br>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                {{-- <div class="col-lg-6">
                    <img src="assets/img/studio.jpg" class="img-fluid rounded" alt="Image 1">
                </div> --}}
                <div class="col-lg-12 text-center">
                    <img src="assets/img/nabil.jpg" width="300" height="200px" class="img-fluid rounded-circle"
                        alt="Logo">
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h2 class="fw-bold text-center mb-4">À PROPOS</h2>
                    <h5 class=" text-center mb-4">NOTRE STUDIO :</h5>
                    <p class="lead text-center mb-5">Tiger Prod est un lieu de création musicale qui offre un espace
                        professionnel pour les musiciens, les artistes et les producteurs pour enregistrer, mixer et
                        produire leurs projets musicaux. Situé au centre de Rabat, le studio Tiger Prod vous ouvre ses
                        portes chaque jour de la semaine, dans une ambiance chaleureuse et conviviale, pour vous accompagner
                        dans la réalisation de vos projets.</p>
                    <h5 class=" text-center mb-4">NOTRE VISION :</h5>
                    <p class="lead text-center mb-5">Chez Tiger Prod on croit que le succès de la culture urbaine marocaine
                        serait collectif ou ne serait jamais. Produire des artistes en donnant une propre identité musicale
                        est notre mission, donner la visibilité à plusieurs genres musicaux et imposer nos sonorités au-delà
                        des frontières. Aider à montrer au monde entier la puissance de notre culture et le potentiel de
                        notre mouvement en équipe...</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="assets/img/studio2.jpg" width="430" height="430" class="card-img-top w-100" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark text-center">NOTRE STUDIO</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="assets/img/studio.jpg" width="430" height="430" class="card-img-top w-100" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark text-center">NOTRE STUDIO</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="assets/img/studio3.jpg" width="430" height="430" class="card-img-top w-100" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark text-center">NOTRE STUDIO</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
