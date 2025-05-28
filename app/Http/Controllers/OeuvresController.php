<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OeuvresController extends Controller
{
    public function index()
    {
        $oeuvres = Oeuvre::latest()->get();
        return view('oeuvres', compact('oeuvres'));
    }

    public function create()
    {
        return view('oeuvres.create');
    }

    public function store(Request $request)
    {
        // Debug avant validation
        // dd($request->all());
        
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'auteur' => 'required|string|max:255',
            'prix' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        try {
            // Gestion de l'image
            $path = $request->file('image')->store('oeuvres', 'public');
            $validated['image'] = $path;

            // Debug avant création
            // dd($validated);
            
            $oeuvre = Oeuvre::create($validated);
            
            // Debug après création
            // dd($oeuvre);
            
            return redirect()->route('oeuvres.index')
                             ->with('success', 'Œuvre ajoutée avec succès!');
                             
        } catch (\Exception $e) {
            return back()->withInput()->withErrors([
                'error' => 'Erreur lors de l\'ajout: ' . $e->getMessage()
            ]);
        }
    }

    // ... (keep other methods unchanged)
}