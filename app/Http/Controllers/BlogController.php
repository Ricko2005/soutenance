<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Méthode pour afficher la liste des articles
    public function index()
    {
        return view('blog');
    }

    // Méthode pour afficher un article spécifique (si nécessaire)

}
