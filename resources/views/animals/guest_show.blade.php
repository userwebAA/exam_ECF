@extends('layout.blanc')

@section('content')

    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Nos animaux</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">animaux</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Giraffe de tanzanie </li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Nos Animaux</p>
                    <h1 class="display-5 mb-0">Nos <span class="text-primary"> {{ $animal->nom . 's' }} </span></h1>
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
                <div class="col-lg-6 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="{{ asset($animal->image ?? "default_animal.jpg") }}" id="#" class="w-100" alt="">
                </div>
                    <div class="col-lg-6 col-md-4 col-sm-6 wow fadeInUp " data-wow-delay="0.1s">
                        <h3> {{ $animal->nom }} </h3>
                        <p> {{ $animal->description }} </p>
                            {{-- <h5 class="pb-1">Leurs specifités secrètes</h5>
                            <ul class="animal-1" >
                                <li class="pb-1">Langue préhensile : Leur langue peut mesurer jusqu'à 50 cm de long , 
                                    ce qui leur permet de saisir et de tirer les feuilles des arbres tout en évitant les épines.</li>
                                <li class="pb-1">Mode de communication : Bien qu'elles soient généralement silencieuses, les girafes communiquent à basse fréquence, parfois inaudible pour les humains, 
                                    ce qui leur permet de rester en contact sur de longues distances.</li>
                                <li>Les girafes ont des excroissances osseuses recouvertes de peau sur leur tête, appelées ossicônes, 
                                    qui sont plus proéminentes chez les mâles et sont utilisées lors des combats.</li>
                            </ul> --}}
        </div>
    </div>

@endsection