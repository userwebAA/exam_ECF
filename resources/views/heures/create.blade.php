@extends('layout.auth_blanc')

@section('content')

    @php
        if (!isset($heure)) {
            $heure = null;
        }
    @endphp

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mt-2">Crée vos heures</h5>
        </div>
        <div class="card-body">

            <form action="{{ $heure?->id ? route('heures.update', $heure->id) : route('heures.store') }}" method="post" class="row" enctype="multipart/form-data">
                @csrf

        <div class="form-group col-md-6">
         <label for="my-input">Jour</label>
             <input class="form-control {{ $errors->has('jour') ? 'border-danger' : '' }}" 
                 type="date" 
                 name="jour" 
                   placeholder="Veuillez entrer l'jour d'ouverture" 
                  value="{{ old('jour', $heure?->jour) }}">
            @if ($errors->has('jour'))
                <span class="text-danger">{{ $errors->first('jour') }}</span>
             @endif
     </div>

     <div class="form-group col-md-6">
    <label for="ouverture">Ouverture</label>
    <input type="checkbox" 
           class="form-control {{ $errors->has('ouverture') ? 'border-danger' : '' }}" 
           name="ouverture" 
           id="ouverture"
           value="1" 
           {{ old('ouverture', $data->ouverture ?? false) ? 'checked' : '' }}>
    @if ($errors->has('ouverture'))
        <span class="text-danger">{{ $errors->first('ouverture') }}</span>
    @endif
</div>


     <div class="form-group col-md-6">
         <label for="my-input">Heure d'ouverture</label>
             <input class="form-control {{ $errors->has('heure') ? 'border-danger' : '' }}" 
                 type="time" 
                 name="heure" 
                   placeholder="Veuillez entrer l'heure d'ouverture" 
                  value="{{ old('heure', $heure?->heure) }}">
            @if ($errors->has('heure'))
                <span class="text-danger">{{ $errors->first('heure') }}</span>
             @endif
     </div>

        
     <div class="form-group col-md-6">
         <label for="my-input">Heure de fermeture</label>
             <input class="form-control {{ $errors->has('heure') ? 'border-danger' : '' }}" 
                 type="time" 
                 name="heure" 
                   placeholder="Veuillez entrer l'heure de fermeture" 
                  value="{{ old('heure', $heure?->heure) }}">
            @if ($errors->has('heure'))
                <span class="text-danger">{{ $errors->first('heure') }}</span>
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