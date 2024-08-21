<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>
    <link href="{{ asset('assets/auth/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="{{ asset('assets/auth/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include("layout.auth_partials.sidebar")

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                @include('layout.auth_partials.header')

                <div class="container-fluid">

                    @yield('content')

                </div>
            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Prêt à partir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Sélectionnez "Déconnexion" ci-dessous si vous êtes prêt à terminer votre session actuelle.</div>
                <div class="modal-footer">

                    <form action="{{ route('logout') }}" method="POST" id="logout_form">
                        @csrf
                    </form>

                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    <a class="btn btn-primary" onclick="$('#logout_form').submit()">Déconnexion</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/auth/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/auth/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/auth/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <script src="{{ asset('assets/auth/js/sb-admin-2.min.js') }}"></script>

    <script src="{{ asset('assets/auth/vendor/chart.js/Chart.min.js') }}"></script>

    <script src="{{ asset('assets/auth/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/auth/js/demo/chart-pie-demo.js') }}"></script>
</body>

</html>