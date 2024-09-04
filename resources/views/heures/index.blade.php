@extends('layout.auth_blanc')

@section('content')

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mt-2">Liste des heures</h5>
            <a href="{{ route('heures.edit') }}" class="btn btn-primary btn-sm float-right p-2">
                <i class="fas fa-edit mx-2"></i>
                Modifier le programme
            </a>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">Jour</th>
                            <th class="text-center">Heure ouverture</th>
                            <th class="text-center">Heure fermeture</th>
                            <th class="text-center">Ouvert</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($heures as $heure)
                            <tr>
                                <td class="text-center"> {{ $heure->jour }} </td>
                                <td class="text-center"> {{ $heure->heure_ouverture }} </td>
                                <td class="text-center"> {{ $heure->heure_fermeture }} </td>
                                <td class="text-center">
                                    <span class="badge badge-{{ $heure->ouverture ? "success" : "danger" }} px-4 py-2">
                                        {{ $heure->ouverture ? "Oui" : "Non"}}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection