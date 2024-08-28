<?php

use App\Http\Controllers\ProfileController;
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


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
