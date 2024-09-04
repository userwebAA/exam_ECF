<?php

namespace App\Http\Controllers;

use App\Models\Heure;
use Illuminate\Http\Request;

class HeureController extends Controller
{
    public function index() {
        $heures = Heure::all();
        return view('heures.index', compact('heures'));
    }

    public function update(Request $request) {
        $jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];

        for ($i = 0; $i < 7; $i++){
            $horaire = Heure::where("jour", $jours[$i])->first();

            $horaire->update([
                'heure_fermeture' => $request->heure_fermeture[$i],
                'heure_ouverture' => $request->heure_ouverture[$i],
                'ouverture' => $request->input("ouverture$i") ?? false,
            ]);
        }

        return redirect()->route('heures.index')->with('success', 'Heure à etait modifié avec succès');
    }

    public function edit() {
        $heures = Heure::all();
        return view('heures.create', compact('heures'));
    }

    public function destroy(Heure $heure) {
        $heure->delete();
        return redirect()->route('heures.index')->with('success', 'Heure à etait supprimé avec succès');
    }
}
