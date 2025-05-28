<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use App\Models\Oeuvre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $oeuvres = Oeuvre::latest()->get();
        return view('home', compact('oeuvres'));
    }

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

    public function destroyOeuvre(Oeuvre $oeuvre)
    {
        if ($oeuvre->image) {
            Storage::disk('public')->delete($oeuvre->image);
        }

        $oeuvre->delete();
        return back()->with('success', 'Œuvre supprimée !');
    }

    public function updateOeuvre(Request $request, Oeuvre $oeuvre)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'auteur' => 'required|string|max:255',
            'prix' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($oeuvre->image) {
                Storage::disk('public')->delete($oeuvre->image);
            }
            $path = $request->file('image')->store('oeuvres', 'public');
            $validated['image'] = $path;
        } else {
            $validated['image'] = $oeuvre->image;
        }

        $oeuvre->update($validated);
        return redirect()->route('home')->with('success', 'Œuvre mise à jour !');
    }
}