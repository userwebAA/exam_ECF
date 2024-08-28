<?php

use App\Http\Controllers\HabitatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('index');
})->name('index');

Route::get('/services', function(){
    return view('services');
})->name('services');

Route::get('/animals', function(){
    return view('animals');
})->name('animals');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/habitat' , function(){
    return view ('habitat');
})->name('habitat') ;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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

    Route::get('services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('services/store', [ServiceController::class, 'store'])->name('services.store');
    Route::post('services/{habitat}', [ServiceController::class, 'update'])->name('services.update');
    Route::get('services/{habitat}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::get('services/{habitat}', [ServiceController::class, 'destroy'])->name('services.delete');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
