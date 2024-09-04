@extends('layout.blanc')

@section('content')

    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Nos habitats</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Foret naturel </li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Nos habitats</p>
                    <h1 class="display-5 mb-0">Notre foret naturel reconstituée <span class="text-primary">Zoo</span></h1>
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
                    <img src="{{ asset($habitat->image ?? "default_habitat.jpg") }}" id="#" class="w-100" alt="">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 wow fadeInUp " data-wow-delay="0.1s">
                    <h3> {{ $habitat->nom }} </h3>
                    <p> {{ $habitat->description }} </p>
                        <h5 class="pb-3">Ici vivent :</h5>

                        <ul class="habitat-1">
                            @forelse ($habitat->animals as $animal)
                                <a href="{{ route('guest_animals_show', $animal->id) }}">
                                    <li> {{ $animal->nom }} </li>
                                </a>
                            @empty
                                <p> Aucun animal ne vit ici pour le moment. </p>
                            @endforelse
                        </ul>
                </div>
            </div>
        </div>
    </div>

@endsection