<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\OeuvresController;
// Routes publiques existantes
Route::get('/', [App\Http\Controllers\AccueilController::class, 'index']);
Route::get('/oeuvres-restituees', [App\Http\Controllers\OeuvresRestitueesController::class, 'index']);
Route::get('/oeuvres', [App\Http\Controllers\OeuvresController::class, 'index']);
Route::get('/artistes', [App\Http\Controllers\ArtistesController::class, 'index']);
Route::get('/a-propos', [App\Http\Controllers\AProposController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);
Route::get('/paiement/{id}', [PaiementController::class, 'payer'])->name('payer.oeuvre');
Route::get('/auteur/{id}', [App\Http\Controllers\AuteurController::class, 'show'])->name('auteur.show');

// Authentification
Auth::routes();

// Routes protégées
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    // Gestion des œuvres
    Route::post('/home/oeuvres', [HomeController::class, 'storeOeuvre'])
         ->name('home.store.oeuvre');
    
    Route::put('/home/oeuvres/{oeuvre}', [HomeController::class, 'updateOeuvre'])
         ->name('home.oeuvres.update');
          
    Route::delete('/oeuvres/{oeuvre}', [HomeController::class, 'destroyOeuvre'])
         ->name('home.oeuvres.destroy');
});

