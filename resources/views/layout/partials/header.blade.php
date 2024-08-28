<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="{{ route('index') }}" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="{{ asset('assets/guest/img/icon/icon-10.png') }}" alt="Icône">
        <h1 class="m-0 text-primary">Zoo</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
            <a href="{{ route('index') }}" class="nav-item nav-link active">Accueil</a>
            <a href="{{ route('habitat') }}" class="nav-item nav-link">Habitat</a>
            <a href="{{ route('services') }}" class="nav-item nav-link">Services</a>
            <a href="{{ route('animals') }}" class="nav-item nav-link">Nos animaux</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
        </div>

        @guest
            <a href="{{ route('login') }}" class="btn btn-primary">Connexion<i class="fa fa-arrow-right ms-3"></i></a>
        @else
            <a href="{{ route('dashboard') }}" class="btn btn-primary"> Dashboard <i class="fa fa-arrow-right ms-3"></i></a>
        @endguest

    </div>
</nav>
<!-- Navbar End -->