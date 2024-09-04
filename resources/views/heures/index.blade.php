@extends('layout.auth_blanc')

@section('content')

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mt-2">Liste des heures</h5>
            <a href="{{ route('heures.create') }}" class="btn btn-primary btn-sm float-right p-2">
                <i class="fa fa-plus mx-2"></i>
                Nouveau
            </a>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">Heure</th>
                            <th class="text-center">Jour</th>
                            <th class="text-center">Ouverture</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($heures as $heure)
                            <tr>
                                <td class="text-center"> {{ $heure->heure }} </td>
                                <td class="text-center"> {{ $heure->jour }} </td>
                                <td class="text-center"> {{ $heure->ouverture }} </td>
                                <td class="py-4 d-flex justify-content-around align-items-center">
                                    <a href="{{ route('heures.edit', $heure->id) }}"><i class="fa fa-edit text-primary"></i></a>
                                    <a href="{{ route('heures.delete', $heure->id) }}"> <i class="fa fa-trash text-danger"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection