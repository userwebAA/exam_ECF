<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UtilisateurController extends Controller {

    public function index() {
        $utilisateurs = User::all();
        return view('utilisateurs.index', compact('utilisateurs'));
    }

    public function create() {
        return view('utilisateurs.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nom_complet' =>'required|string',
            'email' =>'required|email|unique:users',
            'role' =>'required',
            'password' =>'required|string|min:8|confirmed',
        ], [
            "required" => 'Ce champ est requis'
        ]);

        User::create([
            'nom_complet' => $request->nom_complet,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users.index')->with('success', 'Utilisateur créé avec succès');
    }

    public function edit(User $user) {
        return view('utilisateurs.create', compact('user'));
    }

    public function update(User $user, Request $request) {
        $request->validate([
            'nom_complet' =>'required|string',
            'email' =>'required|email|unique:users,email,' . $user->id,
            'role' =>'required',
        ], [
            "required" => 'Ce champ est requis'
        ]);

        if ($request->password) {
            $request->validate([
                'password' =>'required|string|min:8|confirmed',
            ]);

            $user->update([
                'password' => bcrypt(request('password')),
            ]);
        }

        $user->update([
            'nom_complet' => request('nom_complet'),
            'email' => request('email'),
            'role' => request('role'),
        ]);

        return redirect()->route('users.index')->with('success', 'Utilisateur modifié avec succès');
    }

    public function destroy(User $user) {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Utilisateur supprimé avec succès');
    }
}
