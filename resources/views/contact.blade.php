@extends('layout.blanc')


@section('content')

<!-- Page Header Start -->
<div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-4 text-white mb-3 animated slideInDown">Nous Contacter</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Nous Contacter</li>
            </ol>
        </nav>
    </div>
</div>
<!-- En-tête de page fin -->

<!-- Contact Début -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="h-100 bg-light d-flex align-items-center p-5">
                    <div class="btn-lg-square bg-white flex-shrink-0">
                        <i class="fa fa-map-marker-alt text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2"><span class="text-primary me-2">#</span>Adresse</p>
                        <h5 class="mb-0">1 rue jules ferry , Paris , France</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="h-100 bg-light d-flex align-items-center p-5">
                    <div class="btn-lg-square bg-white flex-shrink-0">
                        <i class="fa fa-phone-alt text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2"><span class="text-primary me-2">#</span>Appelez-nous</p>
                        <h5 class="mb-0">+330798876545</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100 bg-light d-flex align-items-center p-5">
                    <div class="btn-lg-square bg-white flex-shrink-0">
                        <i class="fa fa-envelope-open text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2"><span class="text-primary me-2">#</span>Envoyez-nous un mail</p>
                        <h5 class="mb-0">info@example.com</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p><span class="text-primary me-2">#</span>Contactez-nous</p>
                <h1 class="display-5 mb-4">Avez-vous une question ? Veuillez nous contacter !</h1>
                <form action="{{ route('new_contact_mail') }}" method="post">
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-0" name="nom" placeholder="Votre Nom">
                                <label for="name">Votre Nom</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control bg-light border-0" name="mail" placeholder="Votre Email">
                                <label for="email">Votre Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-0" name="sujet" placeholder="Sujet">
                                <label for="subject">Sujet</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control bg-light border-0" placeholder="Laissez un message ici" name="message" style="height: 100px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Envoyer le message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100" style="min-height: 400px;">
                    <iframe class="rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d167998.48977253458!2d2.0352087518893693!3d48.858660364170134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1724077094494!5m2!1sfr!2sfr"
                    frameborder="0" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact End -->

@endsection