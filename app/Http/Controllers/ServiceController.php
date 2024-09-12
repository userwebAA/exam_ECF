<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller {

    public function index() {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    public function create() {
        return view('services.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nom' => ['required','string','max:255'],
            'description' => ['required','string','max:255']
        ]);

        $service = Service::create([
            'nom' => $request->nom,
            'description' => $request->description,
        ]);

        if ($request->file('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/services'), $imageName);

            $service->update([
                'image' => 'images/services/' . $imageName,
            ]);
        }

        return redirect()->route('services.index')->with('success', 'Service créé avec succès');
    }

    public function update(Service $service, Request $request) {
        $request->validate([
            'nom' => ['required','string','max:255'],
            'description' => ['required','string','max:255'],
        ]);

        $service->update([
            'nom' => $request->nom,
            'description' => $request->description,
        ]);


        if ($request->file('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/services'), $imageName);

            $service->update([
                'image' => 'images/services/' . $imageName,
            ]);
        }

        return redirect()->route('services.index')->with('success', 'Service modifié avec succès');
    }

    public function edit(Service $service) {
        return view('services.create', compact('service'));
    }

    public function destroy(Service $service) {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service supprimé avec succès');
    }

}
