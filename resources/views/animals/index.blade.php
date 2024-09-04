@extends('layout.auth_blanc')

@section('content')

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mt-2">Liste des animaux</h5>
            <a href="{{ route('animals.create') }}" class="btn btn-primary btn-sm float-right p-2">
                <i class="fa fa-plus mx-2"></i>
                Nouveau
            </a>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th class="text-center">Nom</th>
                            <th class="text-center">Habitat</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($animals as $animal)
                            <tr>
                                <td class="text-center col-1">
                                    <img src="{{ asset($animal->image ) }}" alt="" class="w-100 rounded">
                                </td>
                                <td class="text-center"> {{ $animal->nom }} </td>
                                <td class="text-center"> {{ $animal->habitat?->nom }} </td>
                                <td> {{ $animal->description }} </td>
                                <td>
                                    <div class="d-flex justify-content-around align-items-center">
                                        <a href="{{ route('animals.edit', $animal->id) }}"><i class="fa fa-edit text-primary"></i></a>
                                        <a href="{{ route('animals.destroy', $animal->id) }}"> <i class="fa fa-trash text-danger"></i> </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection