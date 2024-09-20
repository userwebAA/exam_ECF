@extends('layout.auth_blanc')

@section('content')

    @php
        if (!isset($user)) {
            $user = null;
        }
    @endphp

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mt-2">Nouvel utilisateur</h5>
        </div>
        <div class="card-body">

            <form action="{{ $user?->id ? route('users.update', $user->id) : route('users.store') }}" method="post" class="row">
                @csrf

                <div class="form-group col-md-12">
                    <label for="my-input">Nom complet</label>
                    <input class="form-control {{ $errors->has('nom_complet') ? 'border-danger' : '' }}" type="text" name="nom_complet" placeholder="Veuillez entrer votre nom complet" value="{{ $user?->nom_complet }}">
                    @if ($errors->has('nom_complet'))
                        <span class="text-danger"> {{ $errors->get('nom_complet')[0] }} </span>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="my-input">Email</label>
                    <input class="form-control {{ $errors->has('email') ? 'border-danger' : '' }}" type="email" name="email" placeholder="Veuillez entrer votre email" value="{{ $user?->email }}">
                    @if ($errors->has('email'))
                        <span class="text-danger"> {{ $errors->get('email')[0] }} </span>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="my-input">Rôle</label>
                    <select class="form-control" name="role">
                        <option {{ $user?->role == "employer" ? "selected" : "" }} value="employer">Employer</option>
                        <option {{ $user?->role == "veterinaire" ? "selected" : "" }} value="veterinaire">Vétérinaire</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="my-input">Mot de passe</label>
                    <input class="form-control {{ $errors->has('password') ? 'border-danger' : '' }}" type="password" name="password" placeholder="Veuillez entrer votre mot de passe">
                    @if ($errors->has('password'))
                        <span class="text-danger"> {{ $errors->get('password')[0] }} </span>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="my-input">Confirmation du mot de passe</label>
                    <input class="form-control" type="password" name="password_confirmation" placeholder="Veuillez confirmer votre mot de passe">
                </div>

                <div class="col-12 d-flex justify-content-end">
                    <button type="reset" class="btn btn-danger">Annuler</button>
                    <button type="submit" class="btn btn-primary mx-3">Enregistrer</button>
                </div>

            </form>

        </div>
    </div>

@endsection