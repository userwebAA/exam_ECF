<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\HabitatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HeureController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DefaultController::class, 'home'])->name('index');

Route::get('/services', function(){
    return view('services');
})->name('services');

Route::get('/animals_lits', [AnimalController::class, 'guest_index'])->name('guest_animals');
Route::get('/animals/show/{animal}', [AnimalController::class, 'guest_show'])->name('guest_animals_show');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/habitat', [HabitatController::class, 'guest_index'])->name('habitat');
Route::get('/habitat/show/{habitat}', [HabitatController::class, 'guest_index_show'])->name('habitat1');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('new_contact_mail', [DefaultController::class, 'new_contact_mail'])->name('new_contact_mail');

Route::middleware('auth')->group(function () {
    Route::get('users', [UtilisateurController::class, 'index'])->name('users.index');
    Route::get('users/create', [UtilisateurController::class, 'create'])->name('users.create');
    Route::post('users/store', [UtilisateurController::class, 'store'])->name('users.store');
    Route::get('users/{user}/edit', [UtilisateurController::class, 'edit'])->name('users.edit');
    Route::post('users/{user}', [UtilisateurController::class, 'update'])->name('users.update');
    Route::get('users/{user}', [UtilisateurController::class, 'destroy'])->name('users.delete');

    Route::get('habitats', [HabitatController::class, 'index'])->name('habitats.index');
    Route::get('habitats/create', [HabitatController::class, 'create'])->name('habitats.create');
    Route::post('habitats/store', [HabitatController::class, 'store'])->name('habitats.store');
    Route::post('habitats/{habitat}', [HabitatController::class, 'update'])->name('habitats.update');
    Route::get('habitats/{habitat}/edit', [HabitatController::class, 'edit'])->name('habitats.edit');
    Route::get('habitats/{habitat}', [HabitatController::class, 'destroy'])->name('habitats.delete');

    Route::get('services/index', [ServiceController::class, 'index'])->name('services.index');
    Route::get('services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('services/store', [ServiceController::class, 'store'])->name('services.store');
    Route::post('services/{service}', [ServiceController::class, 'update'])->name('services.update');
    Route::get('services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::get('services/{service}', [ServiceController::class, 'destroy'])->name('services.delete');

    Route::resource('animals', AnimalController::class);

    Route::get('heures/index', [HeureController::class, 'index'])->name('heures.index');
    // Route::get('heures/create', [HeureController::class, 'create'])->name('heures.create');
    // Route::post('heures/store', [HeureController::class, 'store'])->name('heures.store');
    Route::post('heures', [HeureController::class, 'update'])->name('heures.update');
    Route::get('heures/edit', [HeureController::class, 'edit'])->name('heures.edit');
    Route::get('heures/{habitat}', [HeureController::class, 'destroy'])->name('heures.delete');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
