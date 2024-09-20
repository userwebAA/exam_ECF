@extends('layout.auth_blanc')

@section('content')

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mt-2">Liste des services</h5>
            <a href="{{ route('services.create') }}" class="btn btn-primary btn-sm float-right p-2">
                <i class="fa fa-plus mx-2"></i>
                Nouveau
            </a>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="text-center">Nom</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td class="text-center col-1">
                                    <img src="{{ asset($service->image ) }}" alt="" class="w-100 rounded">
                                </td>
                                <td class="text-center"> {{ $service->nom }} </td>
                                <td class="text-center"> {{ $service->description }} </td>
                                <td class="py-4 d-flex justify-content-around align-items-center">
                                    <a href="{{ route('services.edit', $service->id) }}"><i class="fa fa-edit text-primary"></i></a>
                                    <a href="{{ route('services.delete', $service->id) }}"> <i class="fa fa-trash text-danger"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection