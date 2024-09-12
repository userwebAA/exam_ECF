<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Animal;
use App\Models\Heure;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DefaultController extends Controller {

    public function home() {
        $heures = Heure::all();
        $animals = Animal::take(4)->latest()->get();
        $services = Service::take(8)->latest()->get();

        return view('index', compact('animals', 'heures', 'services'));
    }


    public function new_contact_mail(Request $request) {
        Mail::to("alexalix58@gmail.com")->send(new ContactMail($request->nom, $request->mail, $request->message, $request->sujet));
        return redirect()->route('index');
    }

}
