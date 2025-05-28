<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Oeuvre extends Model
{
    use HasFactory;

   protected $fillable = [
    'titre',
    'auteur', // Ajoutez ceci
    'prix',   // Ajoutez ceci
    'image',
    'description'
];
// Supprimez la relation artiste() si inutile

    public function artiste(): BelongsTo
    {
        return $this->belongsTo(Artiste::class);
    }
}
