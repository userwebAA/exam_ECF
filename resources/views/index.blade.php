@extends('layout.blanc')

@section('content')


    <!-- Header Start -->
        <div class="container-fluid bg-dark p-0 mb-5">
            <div class="col-lg-12  wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel h-90 header-carousel">
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('assets/guest/img/chameleon-green-hd-close-wallpaper.jpg') }}" style="height: 75vh">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('assets/guest/img/325868.jpg') }}" style="height: 75vh">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('assets/guest/img/Jungle-Giraffe-Wallpaper-43337.jpg') }}" style="height: 75vh">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><span class="text-primary me-2">#</span>Bienvenue à notre zoo</p>
                    <h1 class="display-5 mb-4">Pourquoi Vous Devriez Visiter <span class="text-primary">Zoo</span> Park !</h1>
                    <p class="mb-4">Découvrez notre merveilleux parc. Vous pourrez y admirer des animaux du monde entier dans un environnement naturel unique.</p>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Parking Gratuit</h5>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Environnement Naturel</h5>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Guide Professionnel & Sécurité</h5>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Les Meilleurs Animaux du Monde</h5>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="">En savoir plus</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="{{ asset('assets/guest/img/about.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-paw fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Nombre Total d'Animaux</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Visiteurs Quotidiens</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Nombre Total de Membres</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Sauvegarde de la Faune Sauvage</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Nos Services</p>
                    <h1 class="display-5 mb-0">Services Spéciaux Pour Les Visiteurs de <span class="text-primary">Zoo</span></h1>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                        <i class="fa fa-3x fa-mobile-alt text-white"></i>
                        <div class="ms-4">
                            <p class="text-white mb-0">Appelez pour plus d'informations</p>
                            <h2 class="text-white mb-0">+330798876545</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="{{ asset('assets/guest/img/icon/icon-2.png') }}" alt="Icon">
                    <h5 class="mb-3">Parking</h5>
                    <span>Parking gratuit et accessible pour tous les visiteurs.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="{{ asset('assets/guest/img/icon/icon-3.png') }}" alt="Icon">
                    <h5 class="mb-3">Photos d'Animaux</h5>
                    <span>Profitez de magnifiques opportunités de photos avec nos animaux.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="{{ asset('assets/guest/img/icon/icon-4.png') }}" alt="Icon">
                    <h5 class="mb-3">Services de Guide</h5>
                    <span>Bénéficiez de visites guidées par des experts pour découvrir nos animaux.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <img class="img-fluid mb-3" src="{{ asset('assets/guest/img/icon/icon-5.png') }}" alt="Icon">
                    <h5 class="mb-3">Nourriture & Boissons</h5>
                    <span>Découvrez des snacks et des boissons dans notre aire de restauration.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="{{ asset('assets/guest/img/icon/icon-6.png') }}" alt="Icon">
                    <h5 class="mb-3">Boutique du Zoo</h5>
                    <span>Ramenez chez vous un souvenir de notre zoo avec nos produits en vente.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="{{ asset('assets/guest/img/icon/icon-7.png') }}" alt="Icon">
                    <h5 class="mb-3">Wi-Fi Gratuit</h5>
                    <span>Profitez d'une connexion Wi-Fi gratuite dans tout le zoo.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="{{ asset('assets/guest/img/icon/icon-8.png') }}" alt="Icon">
                    <h5 class="mb-3">Aire de Jeux</h5>
                    <span>Nos jeunes visiteurs peuvent s'amuser dans notre espace de jeux sécurisé.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <img class="img-fluid mb-3" src="{{ asset('assets/guest/img/icon/icon-9.png') }}" alt="Icon">
                    <h5 class="mb-3">Aire de Repos</h5>
                    <span>Besoin de vous reposer ? Profitez de nos espaces confortables.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Animal Start --><div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Nos Animaux</p>
                    <h1 class="display-5 mb-0">Découvrez Nos Animaux Formidables de <span class="text-primary">Zoo</span></h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="{{ route('guest_animals') }}">Explorer plus d'animaux</a>
                </div>
            </div>
            <div class="row g-4">
                @php
                    $snd_counnt = 1;
                @endphp
                @forelse ($animals as $animal)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $snd_counnt }}s">
                        <div class="row g-4">
                            <div class="col-12">
                                <a class="animal-item" href="{{ route('guest_animals_show', $animal->id) }}">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="{{ asset($animal->image ?? 'default_animal.jpg') }}" style="width: 420px; height: 270px">
                                        <div class="animal-text p-4">
                                            <p class="text-white small text-uppercase mb-0">Animal</p>
                                            <h5 class="text-white mb-0"> {{ $animal->nom }} </h5>
                                        </div>
                                    </div>
                                </a>
                                <h4> {{ $animal->nom }} </h4>
                                <p> {!! Str::limit($animal->description, 75, ' ...') !!} </p>
                            </div>
                        </div>
                    </div>

                    @php
                        $snd_counnt += 2;
                    @endphp
                @empty
                    <p> Aucun animal enregistré pour le moment. </p>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Animal End -->


    <!-- Visiting Hours Start -->
    <div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-5">Heures de Visite</h1>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span>Lundi</span>
                            @if ($heures[0]->ouverture)
                                <span> {{ $heures[0]->heure_ouverture . ' - ' . $heures[0]->heure_fermeture }} </span>
                            @else
                                <span>Fermé</span>
                            @endif
                        </li>
                        <li class="list-group-item">
                            <span>Mardi</span>
                            @if ($heures[1]->ouverture)
                                <span> {{ $heures[1]->heure_ouverture . ' - ' . $heures[1]->heure_fermeture }} </span>
                            @else
                                <span>Fermé</span>
                            @endif
                        </li>
                        <li class="list-group-item">
                            <span>Mercredi</span>
                            @if ($heures[2]->ouverture)
                                <span> {{ $heures[2]->heure_ouverture . ' - ' . $heures[2]->heure_fermeture }} </span>
                            @else
                                <span>Fermé</span>
                            @endif
                        </li>
                        <li class="list-group-item">
                            <span>Jeudi</span>
                            @if ($heures[3]->ouverture)
                                <span> {{ $heures[3]->heure_ouverture . ' - ' . $heures[3]->heure_fermeture }} </span>
                            @else
                                <span>Fermé</span>
                            @endif
                        </li>
                        <li class="list-group-item">
                            <span>Vendredi</span>
                            @if ($heures[4]->ouverture)
                                <span> {{ $heures[4]->heure_ouverture . ' - ' . $heures[4]->heure_fermeture }} </span>
                            @else
                                <span>Fermé</span>
                            @endif
                        </li>
                        <li class="list-group-item">
                            <span>Samedi</span>
                            @if ($heures[5]->ouverture)
                                <span> {{ $heures[5]->heure_ouverture . ' - ' . $heures[5]->heure_fermeture }} </span>
                            @else
                                <span>Fermé</span>
                            @endif
                        </li>
                        <li class="list-group-item">
                            <span>Dimanche</span>
                            @if ($heures[6]->ouverture)
                                <span> {{ $heures[6]->heure_ouverture . ' - ' . $heures[6]->heure_fermeture }} </span>
                            @else
                                <span>Fermé</span>
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-white mb-5">Infos de Contact</h1>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Bureau</td>
                                <td>1 rue jules ferry , Paris , France</td>
                            </tr>
                            <tr>
                                <td>Zoo</td>
                                <td>1 rue jules ferry , Paris , France</td>
                            </tr>
                            <tr>
                                <td>Billetterie</td>
                                <td>
                                    <p class="mb-2">+330798876545</p>
                                    <p class="mb-0">billetterie@exemple.com</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Support</td>
                                <td>
                                    <p class="mb-2">+330798876545</p>
                                    <p class="mb-0">support@exemple.com</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Visiting Hours End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Ce que disent nos clients !</h1>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="{{ asset('assets/guest/img/testimonial-1.jpg') }}" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>« Une expérience incroyable ! Le zoo est bien entretenu, et les animaux semblent heureux. Mes enfants ont adoré voir les lions et les éléphants de si près. Je recommande fortement à toutes les familles. »</p>
                        <h5 class="mb-1">Marie Dupont</h5>
                        <span class="fst-italic">Mère au foyer</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="{{ asset('assets/guest/img/testimonial-2.jpg') }}" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>« Le personnel est extrêmement sympathique et les visites guidées sont très instructives. J'ai beaucoup appris sur la conservation des espèces en danger. C'est un endroit idéal pour passer une journée agréable. »</p>
                        <h5 class="mb-1">Jean Martin</h5>
                        <span class="fst-italic">Professeur</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="{{ asset('assets/guest/img/testimonial-3.jpg') }}" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>« J'ai adoré ma visite au zoo ! Les habitats des animaux sont spacieux et propres. Le café sur place propose également de délicieux plats. Une visite incontournable pour tous ceux qui aiment les animaux. »</p>
                        <h5 class="mb-1">Sophie Laurent</h5>
                        <span class="fst-italic">Étudiante</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial End -->

    <div class="d-flex justify-content-center">
        <a class="btn btn-primary btn-lg" onclick="show_avis_modal()">
            Laisser un avis
        </a>
    </div>


    <div class="modal fade" id="modal_avis" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Laisser votre avis</h5>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="avis">Avis</label>
                        <textarea name="avis" id="avis" class="form-control"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="close_modal()">Fermer</button>
                    <button type="button" class="btn btn-primary">Laisser mon avis</button>
                </div>
            </div>
        </div>
    </div>

@endsection