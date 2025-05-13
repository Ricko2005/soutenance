<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OeuvresController extends Controller
{
    /**
     * Affiche la liste des œuvres
     */
    public function index()
    {
        $oeuvres = Oeuvre::latest()->get();
        return view('oeuvres', compact('oeuvres'));
    }

    /**
     * Affiche le formulaire de création
     */
    public function create()
    {
        return view('oeuvres.create');
    }

    /**
     * Stocke une nouvelle œuvre
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'auteur' => 'required|string|max:255',
            'prix' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Gestion de l'image
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('oeuvres', 'public');
            $validated['image'] = $path;
        }

        Oeuvre::create($validated);

        return redirect()->route('oeuvres.index')
                         ->with('success', 'Œuvre ajoutée avec succès!');
    }

    /**
     * Affiche une œuvre spécifique
     */
    public function show(Oeuvre $oeuvre)
    {
        return view('oeuvres.show', compact('oeuvre'));
    }

    /**
     * Affiche le formulaire d'édition
     */
    public function edit(Oeuvre $oeuvre)
    {
        return view('oeuvres.edit', compact('oeuvre'));
    }

    /**
     * Met à jour une œuvre
     */
    public function update(Request $request, Oeuvre $oeuvre)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'auteur' => 'required|string|max:255',
            'prix' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Gestion de l'image
        if ($request->hasFile('image')) {
            // Supprime l'ancienne image si elle existe
            if ($oeuvre->image) {
                Storage::disk('public')->delete($oeuvre->image);
            }
            
            $path = $request->file('image')->store('oeuvres', 'public');
            $validated['image'] = $path;
        }

        $oeuvre->update($validated);

        return redirect()->route('oeuvres.index')
                         ->with('success', 'Œuvre mise à jour avec succès!');
    }

    /**
     * Supprime une œuvre
     */
    public function destroy(Oeuvre $oeuvre)
    {
        // Supprime l'image associée
        if ($oeuvre->image) {
            Storage::disk('public')->delete($oeuvre->image);
        }

        $oeuvre->delete();

        return redirect()->route('oeuvres.index')
                         ->with('success', 'Œuvre supprimée avec succès!');
    }
}