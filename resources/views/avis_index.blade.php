@extends('layout.auth_blanc')

@section('content')

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mt-2">Liste des avis</h5>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="text-center">Nom</th>
                            <th class="text-center">Avis</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($avis as $avi)
                            <tr>
                                <td class="text-center col-1">
                                    <img src="{{ asset($avi->image ) }}" alt="" class="w-100 rounded">
                                </td>
                                <td class="text-center"> {{ $avi->nom }} </td>
                                <td class="text-center"> {{ $avi->description }} </td>
                                <td class="text-center">
                                    @if($avi->status == 'nouveau')
                                        <span class="py-2 px-3 badge badge-primary">Nouveau</span>
                                    @else
                                        @if($avi->status == 'publier')
                                            <span class="py-2 px-3 badge badge-success">Publié</span>
                                        @else
                                            <span class="py-2 px-3 badge badge-danger">Non publier</span>
                                        @endif
                                    @endif
                                </td>
                                <td class="py-4 d-flex justify-content-around align-items-center">
                                    <a href="{{ route('avis.update_status', [$avi->id, 'publier']) }}"> <i class="fa fa-check text-success"></i> </a>
                                    <a href="{{ route('avis.update_status', [$avi->id, 'non publier']) }}"> <i class="fa fa-times text-danger"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection