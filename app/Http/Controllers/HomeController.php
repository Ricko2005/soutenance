<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    // Affiche le dashboard avec le formulaire
    public function index()
    {
        $oeuvres = Oeuvre::latest()->get();
        return view('home', compact('oeuvres'));
    }

    // Traite l'ajout d'une œuvre
    public function storeOeuvre(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'auteur' => 'required|string|max:255',
            'prix' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('oeuvres', 'public');
            $validated['image'] = $path;
        }

        Oeuvre::create($validated);
        return redirect()->route('home')->with('success', 'Œuvre ajoutée !');
    }

    // Supprime une œuvre
    public function destroyOeuvre(Oeuvre $oeuvre)
    {
        // Supprime l'image associée si elle existe
        if ($oeuvre->image) {
            Storage::disk('public')->delete($oeuvre->image);
        }

        $oeuvre->delete();
        return back()->with('success', 'Œuvre supprimée !');
    }

    // Met à jour une œuvre existante
    public function updateOeuvre(Request $request, Oeuvre $oeuvre)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'auteur' => 'required|string|max:255',
            'prix' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Gestion de l'image
        if ($request->hasFile('image')) {
            // Supprime l'ancienne image si elle existe
            if ($oeuvre->image) {
                Storage::disk('public')->delete($oeuvre->image);
            }
            
            $path = $request->file('image')->store('oeuvres', 'public');
            $validated['image'] = $path;
        } else {
            // Conserve l'image existante si aucune nouvelle n'est uploadée
            $validated['image'] = $oeuvre->image;
        }

        $oeuvre->update($validated);
        return redirect()->route('home')->with('success', 'Œuvre mise à jour !');
    }
}