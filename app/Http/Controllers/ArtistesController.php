<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistesController extends Controller
{
    public function index()
    {
        return view('artistes');
    }
}

