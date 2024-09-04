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

                @forelse ($habitats as $habitat)
                    <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="mb-3 tewx text-uppercase"> {{ $habitat->nom }} </h5>
                        <a href="{{ route('habitat1', $habitat->id) }}">
                            <img src="{{ asset($habitat->image ?? "default_habitat.jpg") }}" class="w-100" style="height: 175px">
                        </a>
                        <p> {!! Str::limit($habitat->description, 75, ' ...') !!} </p>
                    </div>
                @empty
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <p>Aucun résultat trouvé.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>

@endsection