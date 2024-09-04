<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class DefaultController extends Controller {

    public function home() {
        $animals = Animal::all();
        return view('index', compact('animals'));
    }

}
