<?php
// app/Http/Controllers/PaiementController.php
namespace App\Http\Controllers;

use App\Models\Oeuvre;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function payer($id)
    {
        // Récupérer l'œuvre à partir de la base de données en utilisant l'ID
        $oeuvre = Oeuvre::findOrFail($id);  // Si l'œuvre n'existe pas, une erreur 404 sera renvoyée
        
        // Passer l'œuvre à la vue de paiement
        return view('paiement', compact('oeuvre'));
    }
}
