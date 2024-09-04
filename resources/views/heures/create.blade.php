@extends('layout.auth_blanc')

@section('content')

<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title mt-2">Crée vos heures</h5>
    </div>
    <div class="card-body">

        <form action="{{ route('heures.update') }}" method="post"
            class="row" enctype="multipart/form-data">
            @csrf

            @php
                $jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
            @endphp

            @for ($i = 0; $i < 7; $i++)
                <div class="form-group col-md-3">
                    <label for="my-input">Jour</label>
                    <input disabled class="form-control {{ $errors->has('jour') ? 'border-danger' : '' }}" type="text" name="jour[]" value="{{ $jours[$i] }}">
                </div>

                <div class="form-group col-md-3">
                    <label for="my-input">Heure d'ouverture</label>
                    <input class="form-control {{ $errors->has('heure') ? 'border-danger' : '' }}" type="time" name="heure_ouverture[]" placeholder="Veuillez entrer l'heure d'ouverture" value="{{ old('heure', $heures[$i]?->heure_ouverture) }}">
                    @if ($errors->has('heure'))
                        <span class="text-danger">{{ $errors->first('heure') }}</span>
                    @endif
                </div>


                <div class="form-group col-md-3">
                    <label for="my-input">Heure de fermeture</label>
                    <input class="form-control {{ $errors->has('heure') ? 'border-danger' : '' }}" type="time" name="heure_fermeture[]" placeholder="Veuillez entrer l'heure de fermeture" value="{{ old('heure', $heures[$i]?->heure_fermeture) }}">
                    @if ($errors->has('heure'))
                        <span class="text-danger">{{ $errors->first('heure') }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3">
                    <label for="ouverture">Ouverture</label>
                    <input type="checkbox" class="form-control {{ $errors->has('ouverture') ? 'border-danger' : '' }}" name="ouverture{{ $i }}" id="ouverture" value="1" {{ old('ouverture', $heures[$i]?->ouverture ?? false) ? 'checked' : '' }}>
                    @if ($errors->has('ouverture'))
                        <span class="text-danger">{{ $errors->first('ouverture') }}</span>
                    @endif
                </div>
            @endfor

            <div class="col-12 d-flex justify-content-end mt-5">
                <button type="reset" class="btn btn-danger">Annuler</button>
                <button type="submit" class="btn btn-primary mx-3">Enregistrer</button>
            </div>
        </form>
    </div>
</div>

@endsection
