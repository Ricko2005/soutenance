<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\OeuvresController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EducatifController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\OeuvresRestitueesController;
use App\Http\Controllers\ArtistesController;
use App\Http\Controllers\AProposController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuteurController;

/*
|--------------------------------------------------------------------------
| Routes Publiques
|--------------------------------------------------------------------------
*/

// Page d'accueil
Route::get('/', [AccueilController::class, 'index']);

// Galeries
Route::get('/oeuvres-restituees', [OeuvresRestitueesController::class, 'index']);
Route::get('/oeuvres', [OeuvresController::class, 'index']);
Route::get('/artistes', [ArtistesController::class, 'index']);

// Pages statiques
Route::get('/a-propos', [AProposController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

// Routes des œuvres
Route::resource('oeuvres', OeuvresController::class);

// Paiement
Route::prefix('paiement')->group(function () {
    Route::get('/{id}', [PaiementController::class, 'showForm'])->name('paiement.form');
    Route::post('/initier', [PaiementController::class, 'initierPaiement'])->name('paiement.initiate');
    Route::post('/callback', [PaiementController::class, 'handleCallback'])->name('paiement.callback');
});

// Auteur
Route::get('/auteur/{id}', [AuteurController::class, 'show'])->name('auteur.show');

/*
|--------------------------------------------------------------------------
| Section Éducative
|--------------------------------------------------------------------------
*/
Route::prefix('educatif')->name('educatif.')->group(function () {
    Route::get('/', [EducatifController::class, 'index'])->name('index');
    Route::get('/{module}', [EducatifController::class, 'show'])
         ->name('show')
         ->where('module', '[a-z]+');
});

/*
|--------------------------------------------------------------------------
| Authentification
|--------------------------------------------------------------------------
*/
Auth::routes();

/*
|--------------------------------------------------------------------------
| Routes Protégées (Admin)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    // Gestion des œuvres
    Route::post('/home/oeuvres', [HomeController::class, 'storeOeuvre'])
         ->name('home.store.oeuvre');
    Route::put('/home/oeuvres/{oeuvre}', [HomeController::class, 'updateOeuvre'])
         ->name('home.oeuvres.update');
    Route::delete('/oeuvres/{oeuvre}', [HomeController::class, 'destroyOeuvre'])
         ->name('home.oeuvres.destroy');
});