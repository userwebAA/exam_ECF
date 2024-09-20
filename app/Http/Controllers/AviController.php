<?php

namespace App\Http\Controllers;

use App\Models\Avi;
use Illuminate\Http\Request;

class AviController extends Controller {

    public function index() {
        $avis = Avi::all();
        return view('avis_index', compact('avis'));
    }

    public function show($id) {
        $avi = Avi::find($id);
        return view('avis.show', compact('avi'));
    }

    public function store(Request $request) {

        $request->validate([
            'avis' => ['required','string'],
        ]);

        $avi = Avi::create([
            'nom' => $request->nom,
            'description' => $request->avis,
            'status' => 'nouveau'
        ]);

        if ($request->file('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/avis/'), $imageName);

            $avi->update(['fichier' => 'images/avis/' . $imageName]);
        }

        return redirect()->route('index')->with('success', 'Avi créé avec succès');
    }

    public function update_status(Avi $avi, String $status) {
        $avi->update([
            'status' => $status
        ]);

        return redirect()->route('avis.index');
    }

}
