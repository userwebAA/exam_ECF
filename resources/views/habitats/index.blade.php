@extends('layout.auth_blanc')

@section('content')

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mt-2">Liste des habitats</h5>
            <a href="{{ route('habitats.create') }}" class="btn btn-primary btn-sm float-right p-2">
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
                            <th class="text-center">Description</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($habitats as $habitat)
                            <tr>
                                <td class="text-center col-1">
                                    <img src="{{ asset($habitat->image ) }}" alt="" class="w-100 rounded">
                                </td>
                                <td class="text-center"> {{ $habitat->nom }} </td>
                                <td> {{ $habitat->description }} </td>
                                <td class="py-4 d-flex justify-content-around align-items-center">
                                    <a href="{{ route('habitats.edit', $habitat->id) }}"><i class="fa fa-edit text-primary"></i></a>

                                    @if (in_array(auth()->user()->role, ["veterinaire"]))
                                    <a onclick="show_modal({{ $habitat->id }})"><i class="fa fa-comment text-info"></i></a>
                                    @endif

                                    @if (in_array(auth()->user()->role, ["admin"]))
                                    <a onclick="show_list({{ json_encode($habitat->comments) }})"><i class="fa fa-list text-info"></i></a>
                                    @endif

                                    @if (in_array(auth()->user()->role, ["admin"]))
                                    <a onclick="$('#delete').submit()"> <i class="fa fa-trash text-danger"></i> </a>
                                    @endif

                                    <form action="{{ route('animals.destroy', $habitat->id) }}" method="post" id="delete">
                                        @csrf
                                        @method("delete")
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>


    <div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('habitats.comment') }}" method="post" id='form'>
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Veuillez laisser votre avis de vétérinaire</h5>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="animal" id="animal_input" value="">

                        <div class="form-group">
                            <textarea class="form-control" name="commentaire" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Laisser le commentaire</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="liste_commeent" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Liste des avis de vétérinaire</h5>
                </div>
                <div class="modal-body">

                    <table class="table table-light">
                        <thead class="thead-light">
                            <tr>
                                <th>Vétérinaire</th>
                                <th>Commenataire</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')
<script>
    show_modal = (animal) => {
        $('#animal_input').val(animal);
        $('#my-modal').modal('show');
    }

    show_list = (comments) => {
        console.log(comments);

        let table = $('#liste_commeent table tbody');
        table.empty();

        comments.forEach(comment => {
            let row = $('<tr>');
            row.append(`<td>${comment.veterinaire.nom_complet}</td>`);
            row.append(`<td>${comment.description}</td>`);
            row.append(`<td>${comment.formatted_date}</td>`);
            row.append("</tr>");
            table.append(row);
        });

        $('#liste_commeent').modal('show');
    }

</script>
@endsection