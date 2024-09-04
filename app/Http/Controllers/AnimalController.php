<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Habitat;
use Illuminate\Http\Request;

class AnimalController extends Controller {

    public function index() {
        $animals = Animal::all();
        return view('animals.index', compact('animals'));
    }

    public function guest_index() {
        $animals = Animal::all();
        return view('animals.guest_index', compact('animals'));
    }

    public function guest_show(Animal $animal) {
        // $animal->load('habitat');
        return view('animals.guest_show', compact('animal'));
    }

    public function create() {
        $habitats = Habitat::get(["id", "nom"]);
        return view('animals.create', compact('habitats'));
    }

    public function store(Request $request) {
        $request->validate([
            'nom' => ['required','string','max:255'],
            'description' => ['required','string'],
            'image' => ['nullable', 'image'],
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/animals/'), $imageName);

        Animal::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'habitat_id' => $request->habitat,
            'image' => 'images/animals/'.$imageName
        ]);

        return redirect()->route('animals.index')->with('success', 'Animal créé avec succès');
    }

    public function edit(Animal $animal) {
        $habitats = Habitat::get(["id", "nom"]);
        return view('animals.create', compact('animal', 'habitats'));
    }

    public function update(Request $request, Animal $animal) {
        $request->validate([
            'nom' => ['required','string','max:255'],
            'description' => ['required', 'string'],
        ]);

        if ($request->file('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/animals/'), $imageName);

            $animal->update([
                'image' => 'images/animals/'.$imageName,
            ]);
        }

        $animal->update([
            'nom' => $request->nom,
            'description' => $request->description,
            'habitat_id' => $request->habitat,
        ]);

        return redirect()->route('animals.index')->with('success', 'Animal modifié avec succès');
    }

    public function destroy(Animal $animal) {
        $animal->delete();
        return redirect()->route('animals.index')->with('success', 'Animal supprimé avec succès');
    }

}
