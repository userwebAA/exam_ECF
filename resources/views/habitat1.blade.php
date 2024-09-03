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
                    <img src="{{ asset('assets/guest/img/11959053-19391180.jpg') }}" id="#" class="w-100" alt="">
                </div>        
                    
                    <div class="col-lg-6 col-md-4 col-sm-6 wow fadeInUp " data-wow-delay="0.1s">
                        <h3 class="text-center">Foret naturel</h3>
                        <p class="text-center">Les rhinocéros blancs vivent dans des enclos qui imitent leur habitat naturel, comme les savanes et les forêts. Ces espaces sont aménagés pour 
                            permettre aux animaux de se déplacer librement et de maintenir un comportement naturel.</p>
                            <h5 class="pb-3">Ici vivent :</h5>
                            <ul class="habitat-1">
                                <a href="{{ route('animal1') }}"><li>Nos rhinoceros</li></a>
                                <a href="{{ route('animal1') }}"><li>Nos girafes</li></a>
                                <a href="{{ route('animal1') }}"><li>Nos zebres</li></a>
                                <a href="{{ route('animal1') }}"><li>Nos éléphants</li></a>
                            </ul>
                            <p>Nous sommes fiers d'accueillir des éléphants, rhinocéros, girafes, et zèbres dans notre zoo, où nous recréons pour eux des conditions 
                                qui imitent leur habitat naturel.Leur bien-être et leur confort sont au cœur de notre engagement quotidien.</p>
                
        </div>
    </div>

@endsection