@extends('layout.auth_blanc')

@section('content')

    @php
        if (!isset($service)) {
            $service = null;
        }
    @endphp

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mt-2">Nouveau service</h5>
        </div>
        <div class="card-body">

            <form action="{{ $service?->id ? route('services.update', $service->id) : route('services.store') }}" method="post" class="row" enctype="multipart/form-data">
                @csrf

                <div class="form-group col-md-6">
                    <label for="my-input">Nom</label>
                    <input class="form-control {{ $errors->has('nom') ? 'border-danger' : '' }}" type="text" name="nom" placeholder="Veuillez entrer votre nom complet" value="{{ $service?->nom }}">
                    @if ($errors->has('nom'))
                        <span class="text-danger"> {{ $errors->get('nom')[0] }} </span>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image">
                    @if ($errors->has('image'))
                        <span class="text-danger"> {{ $errors->get('image')[0] }} </span>
                    @endif
                </div>

                <div class="form-group col-md-12">
                    <label>Description</label>
                    <textarea name="description" class="form-control" cols="3"> {{ $service?->description }} </textarea>
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