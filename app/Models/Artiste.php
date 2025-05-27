<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artiste extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'specialite',
        'biographie',
        'photo',
        'telephone',
        'localisation'
    ];

    public function oeuvres(): HasMany
    {
        return $this->hasMany(Oeuvre::class);
    }
}
