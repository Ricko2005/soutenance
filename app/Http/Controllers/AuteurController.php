<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuteurController extends Controller
{
    /**
     * Affiche la page d'un auteur spécifique
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
   public function show($id)
{
    // Simulation de données
    $auteurs = [
        1 => [
            'id' => 1, // Ajout de l'ID
            'nom' => 'Amadou Bello',
            'specialite' => 'Peinture abstraite',
            'telephone' => '+229 61234567',
            'localisation' => 'Cotonou',
            'biographie' => "Amadou Bello est un artiste contemporain reconnu pour...", // Ajout de la biographie
            'photo' => 'artiste1.jpg',
            'oeuvres' => [ // Changement de 'oeuvre' à 'oeuvres' et structure de tableau
                [
                    'titre' => 'Les Lumières du Golfe',
                    'image' => 'oeuvre1.jpg'
                ],
                [
                    'titre' => 'Harmonie Nocturne',
                    'image' => 'oeuvre2.jpg'
                ]
            ]
        ],
        2 => [
            'id' => 2,
            'nom' => 'Fatou Diop',
            'specialite' => 'Sculpture sur bois',
            'telephone' => '+229 62345678',
            'localisation' => 'Porto-Novo',
            'biographie' => "Fatou Diop transforme le bois en œuvres d'art...",
            'photo' => 'artiste2.jpg',
            'oeuvres' => [
                [
                    'titre' => 'Esprit Yoruba',
                    'image' => 'oeuvre3.jpg'
                ],
                [
                    'titre' => 'Ancêtres',
                    'image' => 'oeuvre4.jpg'
                ]
            ]
        ],


        3 => [
            'id' => 3,
            'nom' => 'Fatou Ndiaye',
            'specialite' => 'Racines Africaines"',
            'telephone' => '+229 62345678',
            'localisation' => 'Porto-Novo',
            'biographie' => "Fatou Ndiaye transforme le bois en œuvres d'art...",
            'photo' => 'artiste2.jpg',
            'oeuvres' => [
                [
                    'titre' => 'Esprit Yoruba',
                    'image' => 'oeuvre3.jpg'
                ],
                [
                    'titre' => 'Ancêtres',
                    'image' => 'oeuvre4.jpg'
                ]
            ]
        ],


        4=> [
            'id' => 4,
            'nom' => 'Lamine Sow',
            'specialite' => '"Lumière Saharienne"',
            'telephone' => '+229 62345678',
            'localisation' => 'Porto-Novo',
            'biographie' => "Lamine Sow transforme le bois en œuvres d'art...",
            'photo' => 'artiste2.jpg',
            'oeuvres' => [
                [
                    'titre' => 'Esprit Yoruba',
                    'image' => 'oeuvre3.jpg'
                ],
                [
                    'titre' => 'Ancêtres',
                    'image' => 'oeuvre4.jpg'
                ]
            ]
        ],


        5=> [
            'id' => 5,
            'nom' => 'Sarah Kim',
            'specialite' => 'Équilibre Fragile"',
            'telephone' => '+229 62345678',
            'localisation' => 'Porto-Novo',
            'biographie' => "Sarah Kim transforme le bois en œuvres d'art...",
            'photo' => 'artiste2.jpg',
            'oeuvres' => [
                [
                    'titre' => 'Esprit Yoruba',
                    'image' => 'oeuvre3.jpg'
                ],
                [
                    'titre' => 'Ancêtres',
                    'image' => 'oeuvre4.jpg'
                ]
            ]
        ],



        6=> [
            'id' => 6,
            'nom' => 'Nora Elbaz',
            'specialite' => 'Mémoire Liquide',
            'telephone' => '+229 62345678',
            'localisation' => 'Porto-Novo',
            'biographie' => "Sarah Kim transforme le bois en œuvres d'art...",
            'photo' => 'artiste2.jpg',
            'oeuvres' => [
                [
                    'titre' => 'Esprit Yoruba',
                    'image' => 'oeuvre3.jpg'
                ],
                [
                    'titre' => 'Ancêtres',
                    'image' => 'oeuvre4.jpg'
                ]
            ]
        ],
        // ... Ajoutez les autres auteurs avec la même structure
    ];

    if (!array_key_exists($id, $auteurs)) {
        abort(404, 'Auteur non trouvé');
    }

    return view('auteur', [
        'auteur' => $auteurs[$id],
        'pageTitle' => $auteurs[$id]['nom'] . ' - Biographie'
    ]);
}

}