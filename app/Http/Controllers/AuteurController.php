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
            'nom' => 'DANSOU Maruis',
            'specialite' => 'Peinture abstraite',
            'telephone' => '+229 61234567',
            'localisation' => 'Cotonou',
            'biographie' => "Dans ses mains, le fer à béton devient des mèches de cheveux auxquelles il donne des formes étonnantes ! MARIUS DANSOU nous propose une série de sculptures contemporaines dont le thème est la coiffure de ces belles africaines

Des sculptures en fer à béton
Dans le domaine de la construction, on aligne des kilomètres de fer à béton. On organise en parallèle, en perpendiculaire de manière stricte et monotone.   Marius, quant à lui s’approprie ces mêmes barres de fer qu’il torse à souhait. Il les met en forme de manière surprenante, les déforme, reforme, tresse, boucle, pour leurs donner des allures de coiffures africaines.



Un terrain propice à l’expression artistique
L’art au Bénin est à l’image du pays, foisonnant ! Il y a une énergie, un dynamisme, offrant un terrain pro piste à une création originale, diversifiée. Les jeunes artistes trouvent le soutien avec et en collaboration des aînés, comme ce fut le cas de Marius avec DOMINIQUE ZINKPE. Adolescent, il aimait sculpter le bois et s’amusait de la sorte. Sa première participation à une manifestation artistique fut en tant qu’assistant. Il observait, scrutait… Et pourquoi pas moi, se dit-il ! L’élève est devenu n maître !

Dans la continuité des coutumes ethniques              
L’artiste par son travail du fer, s’inscrit dans la continuité des traditions des « AYATOGBEDE ». Ces spécialistes de la forge étaient chargés de la réalisation des outils   permettant le travail des champs et   de l’ensemble des   armes de guerre. Inspiré par la tradition, il perpétue les coutumes ancestrales de la forge.

Les têtes de femme se multiplient, toutes aussi séduisantes les unes que les des autres.
 

Extraits de sa bibliographie    
 

2020    Exposition ART3f, galerie ART IN MOV, Kirchberg, Luxembourg

2020    « Où allons-nous et quand ? », exposition individuelle, Le Parking, Cotonou, Bénin

2020    « Mode in Africa », exposition collective ( Bénin, France, Sénégal, Angleterre, Nigéria), à St-Jean-de-Monts, France

2019    « Résister », exposition en binôme avec Maksaens Denis, Institut Français de Cotonou, Bénin.

2019    Résidence de création fondation Blachère, Apt, France

2019    « Trans-fer », Fondation Blachère, Apt, France

2018    « Bénin : L’Art Roi », Art-Cade Les Grands Bains Douche de la Plaine, Marseille, France

2017    expositions en binôme, « Histoires brodées », Musée Africain de Lyon, France

« Reflets, qui êtes-vous ? », Le Centre à Cotonou, Bénin

2017    « Biennale de Lyon », « Mouvements », Pavillon de la Biennale de Lyon, France

2017    Exposition « Paris-Cotonou-Paris », galerie Vallois, Paris, France

2017    Exposition ART FAIR PARIS, Galerie Vallois, Grand Palais, Paris, France

2016    Exposition AKAA, Foire d’Art contemporain et design centrée sur l’Afrique, Galerie Vallois, Paris, France

2016    Exposition « Cotonou-Lomé », Maison Rouge à Cotonou, Bénin

2015    « Esclavage Modern », à l’UNESCO, Paris, France

2014    Exposition « L’envol », Institut Français de Cotonou, Bénin

2014    Biennale de Dakar, exposition collective « Bois Sacré », Dakar, Sénégal

2013    « Da-Bibla », Institut Français de Cotonou, Bénin

2012    Biennale Benin, exposition collective « La Débrouille », Cotonou, Bénin

2011    Résidence d’artistes au Bénin « L’un dans l’autre » - Echange avec les ateliers de Belleville ( France).", // Ajout de la biographie
            'photo' => 'coiffes.jpg',
            'oeuvres' => [ // Changement de 'oeuvre' à 'oeuvres' et structure de tableau
                [
                    'titre' => 'Les Lumières du Golfe',
                    'image' => 'coiffes.jpg'
                ],
                [
                    'titre' => 'Harmonie Nocturne',
                    'image' => 'oeuvre2.jpg'
                ]
            ]
        ],
        2 => [
            'id' => 2,
            'nom' => 'Euloge AHANHANZO-GLÈLÈ',
            'specialite' => 'culpteur peintre',
            'telephone' => '+229 62345678',
            'localisation' => 'Porto-Novo',
            'biographie' => "
Euloge GLÈLÈ, artiste sculpteur peintre, puise son inspiration dans la vie quotidienne de ses concitoyens. L’artiste se sert de l’argile, sa matière première pour réincarner son entourage , sa culture en des petites statuettes en terre cuite. Il utilise ensuite des peintures de couleurs différentes pour embellir ses œuvres et les rendre plus vivantes.",
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
            'nom' => 'Kifouli DOSSOU ',
            'specialite' => 'Sculpteur"',
            'telephone' => '+229 62345678',
            'localisation' => 'Porto-Novo',
            'biographie' => "Kifouli DOSSOU est né en 1978 à Covè au Bénin, où il réside et travaille aujourd’hui. Dès son plus jeune âge, il observe, apprend et manie la matière dans la cour de la demeure familiale, entouré de son père tisserand et de ses frères, Amidou et Lassissi, sculpteurs de masques Gèlèdè. Formé à cet art par ses aînés, Kifouli DOSOU a d’ailleurs transmis son savoir-faire à ses neveux, notamment Wabi DOSSOU.

 

Kifouli DOSSOU grandit non loin de Kétou, ancien royaume yoruba, épicentre historique du culte Gèlèdè. Les sculpteurs de la région jouissent de longue date d’une grande liberté dans le traitement de la partie supérieure des masques, comme l’explique Rachida DE SOUZA, spécialiste du patrimoine Gèlèdè :« les superstructures, parfois très complexes, font appel à une imagerie foisonnante de diversité, où l’artiste peut donner libre cours à son imagination » (Pour une reconnaissance africaine, Dahomey 1930 – Editions VILO, 1996).",
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