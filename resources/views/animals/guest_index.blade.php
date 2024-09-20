@extends('layout.blanc')

@section('content')

    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Nos animaux</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Nos animaux</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <p><span class="text-primary me-2">#</span>Nos Animaux</p>
                <h1 class="display-5 mb-0">Découvrez Nos Animaux Formidables de <span class="text-primary">Zoo</span></h1>
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

            {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="{{ asset('assets/guest/img/animal-md-1.jpg') }}" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('assets/guest/img/animal-md-1.jpg') }}" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                    <h5 class="text-white mb-0">Eland</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="animal-item" href="{{ asset('assets/guest/img/animal-lg-1.jpg') }}" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('assets/guest/img/animal-lg-1.jpg') }}" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                    <h5 class="text-white mb-0">Lémur catta</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="{{ asset('assets/guest/img/animal-lg-2.jpg') }}" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('assets/guest/img/animal-lg-2.jpg') }}" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                    <h5 class="text-white mb-0">Chat</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="animal-item" href="{{ asset('assets/guest/img/animal-md-2.jpg') }}" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('assets/guest/img/animal-md-2.jpg') }}" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                    <h5 class="text-white mb-0">Zebre</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="{{ asset('assets/guest/img/animal-md-3.jpg') }}" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('assets/guest/img/animal-md-3.jpg') }}" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                    <h5 class="text-white mb-0">Eléphant</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="animal-item" href="{{ asset('assets/guest/img/animal-lg-3.jpg') }}" data-lightbox="animal">
                            <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/guest/img/animal-lg-3.jpg') }}" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                    <h5 class="text-white mb-0">Giraffe</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

@endsection