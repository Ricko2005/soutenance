<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AProposController extends Controller
{
    public function index()
    {
        return view('a-propos');
    }
}

