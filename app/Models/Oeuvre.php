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
        'image',
        'description',
        'artiste_id'
    ];

    public function artiste(): BelongsTo
    {
        return $this->belongsTo(Artiste::class);
    }
}
