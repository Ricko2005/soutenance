<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OeuvresRestitueesController extends Controller
{
    public function index()
    {
        return view('oeuvres_restituees');
    }
}
