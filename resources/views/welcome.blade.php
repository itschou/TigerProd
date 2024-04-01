@php
    use App\Models\site;
@endphp

@extends('layouts.app')

@section('content')
    <x-Navbar />

    <!-- Masthead-->
    <header class="masthead">
        <div class="video-background">
            <video autoplay muted loop playsinline>
                <source src="assets/videos/bg3.mp4" type="video/mp4">
            </video>
        </div>
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h2 class="text-white font-weight-bold">Libérer " le tigre qui est en vous " avec Tiger Prod.</h2>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white mb-5">Ne laissez pas votre musique attendre plus longtemps, réservez dès
                        maintenant votre session d'enregistrement chez TigerProd et donnez vie à vos créations.</p>
                    <a class="btn btn-primary btn-xl" href="{{ route('home') }}">RESERVER MAINTENANT !</a>
                </div>
            </div>
        </div>
    </header>

    <!-- About-->
    <section class="page-section bg-gold" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Suivez TigerProd sur les réseaux sociaux</h2>
                    <hr class="divider divider-light" />
                    <a href="https://www.instagram.com/tigerprod1/"><i
                            class="btn btn-light fa-brands fa-instagram px-2"></i></a>
                    <a href="https://www.facebook.com/tigerprod1/"><i
                            class="btn btn-light fa-brands fa-facebook px-2"></i></a>
                    <a href="https://www.youtube.com/channel/UC8LhEKh5bh49H0eLqAdS1bQ"><i
                            class="btn btn-light fa-brands fa-youtube px-2"></i></a>
                    <a href="https://www.tiktok.com/@tigerprodoff"><i
                            class="btn btn-light fa-brands fa-tiktok px-2"></i></a>
                    <a href="https://twitter.com/TigerProd1"><i class="btn btn-light fa-brands fa-twitter px-2"></i></a>
                    <br> <br>
                    <a href="https://open.spotify.com/artist/0tm7iHbGGMk21XcyhDoAMI?si=sTOwOAcRQAe6XffBIKc-ag"><i
                            class="btn btn-light fa-brands fa-spotify px-2"></i></a>
                    <a href="https://www.deezer.com/en/artist/10142758?deferredFl=1"><i
                            class="btn btn-light fa-brands fa-deezer px-2"></i></a>
                    <a href="https://soundcloud.com/user-774949526"><i
                            class="btn btn-light fa-brands fa-soundcloud px-2"></i></a>


                </div>


            </div>

        </div>
    </section>

    {{-- POPUP --}}

    @if (site::first() && site::first()->show == true)
        <!-- Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="videoModalLabel">Ma Vidéo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="col-md-6 mx-auto">
                            <video autoplay muted loop playsinline width="100%">
                                <source src="assets/videos/promo2.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-center text-black">Chez Tiger Prod vous allez pouvoir profiter d'un service
                                complet:
                            </h4>
                            <p class="text-dark text-center">• session d'enregistrement vocal.</p>
                            <p class="text-dark text-center">• Mixage et mastering.</p>
                            <p class="text-dark text-center">• Beatmaking et arrangement.</p><br>
                            <p class="text-center text-dark">email : tigerprod1@gmail.com</p>
                            <p class="text-center text-dark">adresse : 📍29 rue Brahim roudani, Rabat, Maroc</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endif


    <!-- Services-->
    <section class="page-section" id="services"
    style="background-image: url('assets/img/studio2.jpg'); background-size: cover;">
    <div class="overlay p-3" style="background-color: rgba(0,0,0,0.5);">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Nos Services</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 h2"><i class="fas fa-drum"></i></div>
                            <h3 class="h4 mb-2">COMPOSITION MUSICALE</h3>
                            <p class="text-light mb-0">Donnez vie à votre inspiration musicale avec notre expertise créative
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 h2"><i class="fas fa-star"></i></div>
                            <h3 class="h4 mb-2">DIRECTION ARTISTIQUE</h3>
                            <p class="text-light mb-0">Transformez votre vision artistique en une réalité concrète</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 h2"><i class="fas fa-volume-up"></i></div>
                            <h3 class="h4 mb-2">ENREGISTREMENT ET MIXAGE</h3>
                            <p class="text-light mb-0">Capturez la magie de votre musique avec une qualité audio optimale
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 h2"><i class="fas fa-film"></i></div>
                            <h3 class="h4 mb-2">POST PRODUCTION</h3>
                            <p class="text-light mb-0">Affinez chaque détail de votre œuvre pour un résultat exceptionnel
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="https://www.youtube.com/embed/3kGqTp8MEr8"
                        title="Black Jaguar - Ghadya Bina">
                        <img class="img-fluid" src="assets/img/miniatures/1.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">SONG:</div>
                            <div class="project-name">Black Jaguar - Ghadya Bina</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="https://www.youtube.com/embed/Ht4ydKYPk8k"
                        title="Black jaguar - Nour Heyati ">
                        <img class="img-fluid" src="assets/img/miniatures/2.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">SONG:</div>
                            <div class="project-name">Black jaguar - Nour Heyati </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="https://www.youtube.com/embed/TdBHKt3jaes"
                        title="Gnawi Ft DJ Hitman sanchez - Number One #1">
                        <img class="img-fluid" src="assets/img/miniatures/3.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">SONG:</div>
                            <div class="project-name">Gnawi Ft DJ Hitman sanchez - Number One #1</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="https://www.youtube.com/embed/TqsV6cu3y_0"
                        title="Kalamesque - Mawal Lotfi - Ahwak/Crazy in Love">
                        <img class="img-fluid" src="assets/img/miniatures/4.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">SONG:</div>
                            <div class="project-name">Kalamesque - Mawal Lotfi - Ahwak/Crazy in Love</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="https://www.youtube.com/embed/2HYQtz_tACk"
                        title="Sahar Seddiki - Farhana ft. DJ Byazed">
                        <img class="img-fluid" src="assets/img/miniatures/5.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">SONG:</div>
                            <div class="project-name">Sahar Seddiki - Farhana ft. DJ Byazed</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="https://www.youtube.com/embed/DPJB1lWYwvM"
                        title="Parodie ENSAY / SAAD LAMJARRED & MOHAMED RAMADAN / SERBAY">
                        <img class="img-fluid" src="assets/img/miniatures/6.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">SONG:</div>
                            <div class="project-name">Parodie ENSAY / SAAD LAMJARRED & MOHAMED RAMADAN / SERBAY</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <x-footer />

    <style>
        header.masthead {
            position: relative;
            height: 100vh;
            min-height: 25rem;
            padding-top: 8rem;
            padding-bottom: 8rem;
        }

        header.masthead::before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        header.masthead .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -2;
        }

        header.masthead .video-background video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translate(-50%, -50%);
            object-fit: cover;
            z-index: -1;
        }

        header.masthead .container {
            position: relative;
            z-index: 1;
        }

        .overlay {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
@endsection
