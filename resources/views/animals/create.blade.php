@extends('layout.auth_blanc')

@section('content')

    @php
        if (!isset($animal)) {
            $animal = null;
        }
    @endphp

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mt-2">Nouvel animal</h5>
        </div>
        <div class="card-body">

            <form action="{{ $animal?->id ? route('animals.update', $animal->id) : route('animals.store') }}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                @if ($animal != null)
                    @method("patch")
                @endif

                <div class="form-group col-md-6">
                    <label for="my-input">Nom</label>
                    <input class="form-control {{ $errors->has('nom') ? 'border-danger' : '' }}" type="text" name="nom" placeholder="Veuillez entrer votre nom complet" value="{{ $animal?->nom }}">
                    @if ($errors->has('nom'))
                        <span class="text-danger"> {{ $errors->get('nom')[0] }} </span>
                    @endif
                </div>

                <div class="form-group col-md-3">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image">
                    @if ($errors->has('image'))
                        <span class="text-danger"> {{ $errors->get('image')[0] }} </span>
                    @endif
                </div>

                <div class="form-group col-md-3">
                    <label for="habitat">Habitat</label>
                    <select id="habitat" class="form-control" name="habitat">
                        <option> Veuillez choisir un habitat </option>
                        @forelse ($habitats as $habitat)
                            <option {{ $animal != null && $animal->habitat_id == $habitat->id ? "selected" : "" }} value="{{ $habitat->id }}"> {{ $habitat->nom }} </option>
                        @empty
                            <option> Aucun habitat n'a été défini </option>
                        @endforelse
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label>Description</label>
                    <textarea name="description" class="form-control" cols="3"> {{ $animal?->description }} </textarea>
                    @if ($errors->has('description'))
                        <span class="text-danger"> {{ $errors->get('description')[0] }} </span>
                    @endif
                </div>

                <div class="col-12 d-flex justify-content-end">
                    <button type="reset" class="btn btn-danger">Annuler</button>
                    <button type="submit" class="btn btn-primary mx-3">Enregistrer</button>
                </div>

            </form>

        </div>
    </div>

@endsection