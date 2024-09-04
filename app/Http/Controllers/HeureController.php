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

    public function create() {
        return view('heures.create');
    }
    public function store(Request $request) {
        // $request->validate([
        //     'heure' => ['required', 'date_format:HH:MM'], // H:i correspond à l'heure au format 24 heures (00:00 - 23:59)
        //     'ouverture' => ['required','boolean'],
        // ]);
        for ($i=1; $i<=7; $i++){
            Heure::create([
                'heure' => $request->heure,
                'jour' => $request->jour,
                'ouverture' => $request->ouverture,
            ]);
        }

        return redirect()->route('heures.index')->with('success', 'Heure à etait crée avec succès.');
    }
    public function update(Heure $heure, Request $request) {
        $request->validate([
           'heure' => ['required', 'date_format:H:i'], // H:i correspond à l'heure au format 24 heures (00:00 - 23:59)
            'jour' => ['required', 'date_format:Y-m-d'],
            'ouverture' => ['required','boolean'],
        ]);

        $heure->update([
           'heure' => ['required', 'date_format:H:i'], // H:i correspond à l'heure au format 24 heures (00:00 - 23:59)
            'jour' => ['required', 'date_format:Y-m-d'],
            'ouverture' => ['required','boolean'],
        ]);

          return redirect()->route('heures.index')->with('success', 'Heure à etait modifié avec succès');
    }
    public function edit(Heure $heure) {
        return view('heures.create', compact('heure'));
    }

    public function destroy(Heure $heure) {
        $heure->delete();
        return redirect()->route('heures.index')->with('success', 'Heure à etait supprimé avec succès');
    }
}
