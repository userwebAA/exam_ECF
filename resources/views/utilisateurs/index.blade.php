@extends('layout.auth_blanc')

@section('content')

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mt-2">Liste des utilsateurs</h5>
            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right p-2">
                <i class="fa fa-plus mx-2"></i>
                Nouveau
            </a>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">Nom complet</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Rôle</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($utilisateurs as $utilisateur)
                            <tr>
                                <td class="text-center"> {{ $utilisateur->nom_complet }} </td>
                                <td class="text-center"> {{ $utilisateur->email }} </td>
                                <td class="text-center"> {{ $utilisateur->role }} </td>
                                <td class="py-4 d-flex justify-content-around align-items-center">
                                    <a href="{{ route('users.edit', $utilisateur->id) }}"><i class="fa fa-edit text-primary"></i></a>
                                    <a href="{{ route('users.delete', $utilisateur->id) }}"> <i class="fa fa-trash text-danger"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection