@extends('layout.blanc')

@section('content')

    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>


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

@endsection