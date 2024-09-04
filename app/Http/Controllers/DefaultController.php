<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Heure;
use Illuminate\Http\Request;

class DefaultController extends Controller {

    public function home() {
        $animals = Animal::all();
        $heures = Heure::all();

        return view('index', compact('animals', 'heures'));
    }

}
