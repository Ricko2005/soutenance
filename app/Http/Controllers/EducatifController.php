<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducatifController extends Controller
{
    // Données des jeux éducatifs
    private $games = [
        'quiz' => [
            'title' => 'Quiz Historique',
            'icon' => 'question-circle',
            'color' => '#8A1714'
        ],
        'memory' => [
            'title' => 'Memory des Rois',
            'icon' => 'brain',
            'color' => '#2C3E50'
        ],
        'timeline' => [
            'title' => 'Frise Chronologique',
            'icon' => 'hourglass-half',
            'color' => '#28a745'
        ],
        'puzzle' => [
            'title' => 'Puzzle des Symboles',
            'icon' => 'puzzle-piece',
            'color' => '#fd7e14'
        ]
    ];

    /**
     * Affiche la page principale avec tous les jeux
     */
    public function index()
    {
        return view('educatif', [
            'games' => $this->games
        ]);
    }

    /**
     * Affiche un jeu spécifique
     */
    public function show($game)
    {
        if (!array_key_exists($game, $this->games)) {
            abort(404);
        }

        return view('games.'.$game, [
            'game' => $this->games[$game]
        ]);
    }
}