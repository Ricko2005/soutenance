<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oeuvre extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'auteur',
        'prix',
        'image',
        'description',
    ];
}
