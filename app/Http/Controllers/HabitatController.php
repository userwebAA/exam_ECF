<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Habitat;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HabitatController extends Controller {

    public function index() {
        $habitats = Habitat::with(['comments' => function($c){
            return $c->where('type', 'habitat')->with('veterinaire');
        }])->get();

        foreach ($habitats as $animal) {
            foreach ($animal->comments as $comment) {
                $comment->formatted_date = Carbon::parse($comment->created_at)->format('d/m/Y H:i');
            }
        }

        return view('habitats.index', compact('habitats'));
    }

    public function guest_index() {
        $habitats = Habitat::all();
        return view('habitats.guest_index', compact('habitats'));
    }

    public function guest_index_show(Habitat $habitat) {
        // $habitat->load('animals');
        return view('habitats.guest_show', compact('habitat'));
    }

    public function create() {
        return view('habitats.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nom' => ['required','string','max:255'],
            'image' => ['nullable','image', 'max:2048'],
            'description' => ['required','string'],
        ]);

        $habitat = Habitat::create([
            'nom' => $request->nom,
            'description' => $request->description,
        ]);

        if ($request->file('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/habitats'), $imageName);

            $habitat->update([
                'image' => 'images/habitats/' . $imageName,
            ]);
        }

        return redirect()->route('habitats.index')->with('success', 'Habitat créé avec succès');
    }

    public function update(Habitat $habitat, Request $request) {
        $request->validate([
            'nom' => ['required','string','max:255'],
            'image' => ['nullable','image', 'max:2048'],
            'description' => ['required','string'],
        ]);

        $habitat->update([
            'nom' => $request->nom,
            'description' => $request->description,
        ]);

        if ($request->file('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/habitats'), $imageName);

            $habitat->update([
                'image' => 'images/habitats/' . $imageName,
            ]);
        }

        return redirect()->route('habitats.index')->with('success', 'Habitat modifié avec succès');
    }

    public function edit(Habitat $habitat) {
        return view('habitats.create', compact('habitat'));
    }

    public function destroy(Habitat $habitat) {
        $habitat->delete();
        return redirect()->route('habitats.index')->with('success', 'Habitat supprimé avec succès');
    }

    public function comment(Request $request) {
        Commentaire::create([
            'animal_id' => $request->animal,
            'user_id' => auth()->user()->id,
            'description' => $request->commentaire,
            'type' => 'habitat'
        ]);

        return redirect()->route('habitats.index')->with('success', 'Commentaire ajouté avec succès');
    }

}
