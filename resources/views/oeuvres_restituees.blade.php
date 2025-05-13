@extends('layout.app')

@section('title', 'Œuvres Restituées')

@section('content')
 

    <section class="historical-section py-7 position-relative overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- En-tête stylisé avec animation -->
                    <div class="section-header text-center mb-7" data-aos="fade-down">
                        <span class="section-subtitle text-gold p-2">Histoire du Patrimoine</span>
                        <h2 class="display-4 fw-bold mb-4 text-uppercase" style="letter-spacing: 1.5px;" id="Title">Le Long Chemin des Restitutions</h2>
                        <div class="divider mx-auto" style="width: 100px; height: 3px; background: #8A1714;"></div>
                        <p class="lead mx-auto mt-4 text-light" style="max-width: 700px;">
                            De la spoliation coloniale au retour triomphal des trésors royaux
                        </p>
                    </div>
    
                    <!-- Timeline verticale immersive -->
                    <div class="timeline-immersive position-relative">
                        <!-- Ligne de temps animée -->
                        <div class="timeline-path" style="background: linear-gradient(to bottom, #8A1714, #8A1714);"></div>
    
                        <!-- Événement 1 - Sac d'Abomey -->
                        <div class="timeline-event" data-aos="fade-right">
                            <div class="event-date">1892</div>
                            <div class="event-card bg-dark-soft">
                                <div class="card-body p-4 p-lg-5">
                                    <div class="event-header d-flex align-items-center mb-4">
                                        <div class="event-icon rounded-circle p-3 me-4">
                                            <i class="fas fa-monument fa-2x"></i>
                                        </div>
                                        <h3 class="event-title text-gold mb-0">Le Sac d'Abomey</h3>
                                    </div>
                                    <p class="event-text text-light">Le 17 novembre 1892, le général français Alfred Amédée Dodds pénètre dans Abomey, capitale du royaume du Danxomè, après deux ans d'une guerre sans merci. Les troupes françaises pillent systématiquement les palais royaux, s'emparant des trésors sacrés et des symboles du pouvoir fon.</p>
                                    <div class="event-footer mt-4">
                                        <span class="badge bg-dark text-gold">Événement clé</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Événement 2 - Appels à restitution -->
                        <div class="timeline-event" data-aos="fade-left" data-aos-delay="100">
                            <div class="event-date">1960</div>
                            <div class="event-card bg-dark-soft">
                                <div class="card-body p-4 p-lg-5">
                                    <div class="event-header d-flex align-items-center mb-4">
                                        <div class="event-icon rounded-circle p-3 me-4">
                                            <i class="fas fa-handshake fa-2x"></i>
                                        </div>
                                        <h3 class="event-title text-gold mb-0">Les Appels à la Restitution</h3>
                                    </div>
                                    <p class="event-text text-light">À l'aube des indépendances africaines, les nations nouvellement souveraines réclament le retour de leur patrimoine culturel. Le Bénin, alors République du Dahomey, se joint à ce mouvement. Malgré la justesse de ces revendications, le principe d'inaliénabilité des collections publiques françaises constitue un obstacle juridique infranchissable pendant des décennies.</p>
                                    <div class="event-footer mt-4">
                                        <span class="badge bg-dark text-gold">Revendication</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Événement 3 - Discours de Ouagadougou -->
                        <div class="timeline-event" data-aos="fade-right" data-aos-delay="200">
                            <div class="event-date">2017</div>
                            <div class="event-card bg-dark-soft">
                                <div class="card-body p-4 p-lg-5">
                                    <div class="event-header d-flex align-items-center mb-4">
                                        <div class="event-icon  rounded-circle p-3 me-4">
                                            <i class="fas fa-bullhorn fa-2x"></i>
                                        </div>
                                        <h3 class="event-title text-gold mb-0">Le Discours de Ouagadougou</h3>
                                    </div>
                                    <p class="event-text text-light">Le 28 novembre 2017, le président Emmanuel Macron, lors d'un discours historique à l'université de Ouagadougou, reconnaît la nécessité de restituer le patrimoine africain : "Je veux que d'ici cinq ans les conditions soient réunies pour des restitutions temporaires ou définitives du patrimoine africain en Afrique." Cette déclaration marque un tournant dans les relations culturelles entre la France et ses anciennes colonies.</p>
                                    <div class="event-footer mt-4">
                                        <span class="badge bg-dark text-gold">Tournant historique</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Événement 4 - Retour des trésors -->
                        <div class="timeline-event" data-aos="fade-left" data-aos-delay="300">
                            <div class="event-date">2021</div>
                            <div class="event-card bg-dark-soft">
                                <div class="card-body p-4 p-lg-5">
                                    <div class="event-header d-flex align-items-center mb-4">
                                        <div class="event-icon  rounded-circle p-3 me-4">
                                            <i class="fas fa-flag fa-2x"></i>
                                        </div>
                                        <h3 class="event-title text-gold mb-0">Le Retour des Trésors</h3>
                                    </div>
                                    <p class="event-text text-light">Le 10 novembre 2021, après un processus législatif exceptionnel en France, les 26 trésors royaux d'Abomey foulent à nouveau le sol béninois. Accueillis lors d'une cérémonie solennelle au palais de la Marina à Cotonou, ces artefacts sacrés marquent par leur retour le début d'une nouvelle ère pour la mémoire collective et la souveraineté culturelle du Bénin.</p>
                                    <div class="event-footer mt-4">
                                        <span class="badge bg-dark text-gold">Aboutissement</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Citation finale animée -->
                    <div class="historical-quote text-center mt-7 pt-5" data-aos="zoom-in" data-aos-delay="400">
                        <blockquote class="display-5 fw-light text-gold" id="text-talon">
                            "Le retour de ces œuvres n'est pas une fin, mais le début d'une renaissance culturelle."
                        </blockquote>
                        <div class="signature mt-4 text-light">Patrice Talon, Président de la République du Bénin</div>
                    </div>
                </div>
            </div>
        </div>
    
    </section>







    <!-- Galerie d'œuvres améliorée -->
    <section class="py-6 text-white position-relative overflow-hidden" id="oeuvres">
        <div class="bg-pattern"></div>
        <div class="container position-relative">
            <div class="section-header text-center mb-5" data-aos="fade-down">
                <span class="section-subtitle text-danger">Collection complète</span>
                <div class="title-divider bg-danger mx-auto"></div>
                <p class="lead mx-auto mt-4" style="max-width: 700px;">
                    Découvrez l'ensemble des trésors royaux du Bénin restitués grâce à cette initiative historique.
                </p>
            </div>

            <div class="row g-4">
                @php
                $oeuvres = [
                    ['image' => 'piture1.png', 'name' => 'STATUE ANTHROPOZOOMORPHE REPRÉSENTANT LE ROI BÉHANZIN', 'description' => 'Royaume du Danxomè, entre 1889-1894 Bois (koro), fer et pigments 168 × 102 × 92 cm Collections Dodds restituées La statue à la tête d\'homme et au torse de requin représente le roi Béhanzin (1889-1894).', 'siecle' => 'XIXe siècle'],
                    ['image' => 'piture2.png', 'name' => 'RÉCADE 3', 'description' => 'Les trois récades présentées ici étaient utilisées lors de danses guerrières par des soldats masculins du bataillon « blu », composé uniquement d\'étrangers.', 'siecle' => 'XIXe siècle'],
                    ['image' => 'piture3.png', 'name' => 'ASEN DE BÉHANZIN', 'description' => 'En principe les asens sont fabriqués à la mort du roi. Cet asen dédié au roi Béhanzin, issu des collections Dodds, interroge : comment pouvait-il être présent dans le palais lors de l\'assaut des troupes françaises du vivant de Béhanzin ?', 'siecle' => 'XIXe siècle'],
                    ['image' => 'piture4.png', 'name' => 'ASEN HOTAGANTIN 1', 'description' => 'L\'asen fait le lien entre le monde des vivants et celui des ancêtres.', 'siecle' => 'XIXe siècle'],
                    ['image' => 'piture5.png', 'name' => 'ASEN HOTAGANTIN 2', 'description' => 'Description de l\'œuvre 5 et son importance historique.', 'siecle' => 'XIXe siècle'],
                    ['image' => 'piture6.png', 'name' => 'CALEBASSE À COUVERCLE', 'description' => 'Royaume du Danxomè, seconde moitié du xixe siècle Calebasse 27,5 × 27,2 × 27 cm Collections Dodds restituées', 'siecle' => 'XIXe siècle'],
                    ['image' => 'metisse.png', 'name' => 'MÉTIER À TISSER', 'description' => 'Bois (bois du métier à tisser : koro ), coton, fibres végétales Métier à tisser : 35,3 × 27,9 × 6,5 cm Collections Dodds restituées', 'siecle' => 'XIXe siècle'],
                    ['image' => 'piture8.png', 'name' => 'FUSEAU', 'description' => 'Bois ( bois du fuseau : rinorea), coton, fibres végétales Fuseau : 49,5 × 8,6 × 8,6 cm Collections Dodds restituées', 'siecle' => 'XIXe siècle'],
                    ['image' => 'piture9.png', 'name' => 'STATUE ANTHROPOZOOMORPHE REPRÉSENTANT LE ROI GLÈLÈ', 'description' => 'Royaume du Danxomè, entre 1858-1889 Bois (koro), fer et pigments 179 × 77 × 110 cm Collections Dodds restituées La statue à tête de lion représente le roi Glèlè (1858-1889).', 'siecle' => 'XIXe siècle'],
                    ['image' => 'piture10.png', 'name' => 'STATUE ANTHROPOMORPHE', 'description' => 'Cette statue pourrait représenter le roi Ghézo, identifiable grâce aux lames de fer qui recouvrent son corps. Elles évoquent le plumage de l\'oiseau cardinal, un des symboles de Ghézo. Le pieu sur lequel la statue est posée indique qu\'elle était plantée et protégée sous un abri.', 'siecle' => 'XIXe siècle'],
                    ['image' => 'porte1.jpg', 'name' => 'PORTE 1 DU PALAIS ROYAL D\'ABOMEY', 'description' => 'Sur la porte, le lion sculpté sur le panneau bas, rend hommage à Glèlè. Le caméléon représente le vodun Mawu Lisa, divinité suprême liée à la fertilité et la fécondité. L\'empreinte du serpent qui se mord la queue évoque le vodun Dan Aido Hwedo, symbole de la continuité de la vie.', 'siecle' => 'XIXe siècle'],
                    ['image' => 'porte2.jpg', 'name' => 'PORTE 2 DU PALAIS ROYAL D\'ABOMEY', 'description' => 'Les sculptures de la porte rendent hommage aux ancêtres royaux Kpengla, Ghézo, Tegbessou, à l\'armée et à l\'esprit protecteur du roi Glèlè. Les grenouilles, placées aux quatre coins, évoquent les Tohossous royaux, divinités des eaux.', 'siecle' => 'XIXe siècle'],
                    ['image' => 'porte3.jpg', 'name' => 'PORTE 3 DU PALAIS ROYAL D\'ABOMEY', 'description' => 'La porte évoque Glèlè représenté par un lion lacunaire dont l\'empreinte subsiste dans le panneau bas, les armes de l\'armée, le vodun Mawu Lisa représenté par un caméléon et le vodun Dan Aido Hwedo, représenté par un serpent qui se mord la queue.', 'siecle' => 'XIXe siècle'],
                    ['image' => 'porte4.jpg', 'name' => 'PORTE 4 DU PALAIS ROYAL D\'ABOMEY', 'description' => 'La porte évoque les ancêtres royaux : Kpengla, Ghézo, Tegbessou et Glèlè ; les armes de l\'armée et l\'esprit protecteur du roi Glèlè. Les grenouilles, placées aux coins, suggèrent le monde aquatique, lieu de résidence des Tohossous royaux, divinités des eaux.', 'siecle' => 'XIXe siècle'],
                    ['image' => 'pantalon.png', 'name' => 'PANTALON DE SOLDAT OU D\'AGOODJIÉ', 'description' => 'Ce pantalon appartient à un soldat ou une agoodjié du royaume du Danxomè. Les rayures bleues et rouges de cette tenue font pencher pour une artilleuse, chargée des armes lourdes telles que les canons.', 'siecle' => 'XIXe siècle'],
                    ['image' => 'porte5.png', 'name' => 'RÉCADE 1', 'description' => 'Les trois récades présentées ici étaient utilisées lors de danses guerrières par des soldats masculins du bataillon « blu », composé uniquement d\'étrangers.', 'siecle' => 'XIXe siècle'],
                    ['image' => 'porte6.png', 'name' => 'RÉCADE 2', 'description' => 'Les trois récades présentées ici étaient utilisées lors de danses guerrières par des soldats masculins du bataillon « blu », composé uniquement d\'étrangers.', 'siecle' => 'XIXe siècle'],
                    ['image' => 'porte7.jpg', 'name' => 'SAC', 'description' => 'Ce sac en cuir serait une gibecière de fabrication haoussa. Originaires du nord du Nigéria et du sud Niger actuels, les Haoussa excellent dans de nombreux artisanats dont celui du cuir', 'siecle' => 'XIXe siècle'],
                    ['image' => 'robe.jpg', 'name' => 'TUNIQUE', 'description' => 'Cette tunique appartient à un soldat ou une agoodjié du royaume du Danxomè. Les rayures bleues et rouges de cette tenue font pencher pour une artilleuse, chargée des armes lourdes telles que les canons.', 'siecle' => 'XIXe siècle'],
                    ['image' => 'tab.png', 'name' => 'KATAKLÉ DE BÉHANZIN', 'description' => 'Royaume du Danxomè, entre 1890 et 1892 Bois (balanites) 19,4 × 32,5 × 43 cm Collections Dodds restituées', 'siecle' => 'XIXe siècle'],
                    ['image' => 'trone.png', 'name' => 'Trone du Roi Glèlè', 'description' => 'Ce trône est composé de deux étages assemblés. La partie supérieure est incurvée pour accueillir un coussin. L\'étage inférieur est décoré de formes géométriques. Le lion peint en jaune et sculpté de chaque côté permet d\'attribuer ce trône au roi Glèlè', 'siecle' => 'XIXe siècle'],
                    ['image' => 'Trône2.png', 'name' => 'Trone d\'apparât du Roi Ghezo', 'description' => 'Le roi s\'installait sur ce trône pour des occasions exceptionnelles comme la cérémonie d\'Ato en hommage aux ancêtres royaux. Le trône était installé sur une estrade qui lui permettait de surplomber la foule et de distribuer des présents à l\'ensemble de ses sujets : cauris, tissus, animaux, nourri-ture, armes…', 'siecle' => 'XIXe siècle'],
                    ['image' => 'trones.png', 'name' => 'TRÔNE DE CANA', 'description' => 'Ce trône provient de Cana, ville sacrée du royaume, située à une vingtaine de kilomètres d\'Abomey, la capitale. La partie supérieure du trône représente le roi sous son parasol, entouré de ses servantes. À l\'étage inférieur, une file d\'esclaves entravés évoque deux caractéristiques majeures du royaume : sa politique expansionniste et l\'asservissement des populations des régions conquises.', 'siecle' => 'XIXe siècle'],
                    ['image' => 'lance.png', 'name' => 'ASEN HOTAGANTIN 3', 'description' => 'L\'asen fait le lien entre le monde des vivants et celui des ancêtres', 'siecle' => 'XIXe siècle'],
                    ['image' => 'lance2.png', 'name' => 'ASEN HOTAGANTIN 4', 'description' => 'L\'asen fait le lien entre le monde des vivants et celui des ancêtres.', 'siecle' => 'XIXe siècle'],
                    ['image' => 'agassou.png', 'name' => 'ASEN HOTAGANTIN D\'AGASSOU', 'description' => 'Alliage cuivreux, fer 42 × 96 × 43 cm Collections Dodds restituées', 'siecle' => 'XIXe siècle'],
                ];
                @endphp

                @foreach ($oeuvres as $index => $oeuvre)
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="{{ $index * 50 }}">
                    <div class="artwork-card h-100" data-bs-toggle="modal" data-bs-target="#oeuvreModal{{ $index }}">
                        <div class="artwork-img-container">
                            <img src="{{ asset('images/' . $oeuvre['image']) }}" 
                                 alt="{{ $oeuvre['name'] }}" 
                                 class="artwork-img">
                            <div class="artwork-overlay d-flex align-items-center justify-content-center">
                                <span class="text-white">Cliquez pour voir les détails</span>
                            </div>
                        </div>
                        <div class="artwork-body bg-gradient-dark">
                            <h5 class="artwork-title">{{ Str::limit($oeuvre['name'], 40) }}</h5>
                            <div class="artwork-meta">
                                <span class="badge bg-danger">{{ $oeuvre['siecle'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="oeuvreModal{{ $index }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content bg-dark text-white">
                            <div class="modal-header border-0">
                                <h5 class="modal-title fw-bold">{{ $oeuvre['name'] }}</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <img src="{{ asset('images/' . $oeuvre['image']) }}" 
                                             alt="{{ $oeuvre['name'] }}" 
                                             class="img-fluid rounded-3 shadow-sm">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="oeuvre-description">
                                            <div class="mb-4">
                                                <span class="badge bg-danger mb-2">{{ $oeuvre['siecle'] }}</span>
                                                {!! nl2br(e($oeuvre['description'])) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Styles personnalisés -->
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap');

          
          #Title{
            padding: 20px !important;
            font-family: 'Space Grotesk', sans-serif;
font-weight: 900;
          }
        
        .section-subtitle {
            display: block;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        h3 {
            font-family: 'Space Grotesk', sans-serif;

        }
        #text-talon{
            font-family: 'Space Grotesk', sans-serif;

        }
        
        .title-divider {
            width: 80px;
            height: 3px;
            background: #dc3545;
            margin: 0 auto;
        }
        
        .bg-gradient-dark {
            background: linear-gradient(135deg, #2c3e50, #1a1a2e);
        }
        
        .bg-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23dc3545' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.3;
        }
        
        .scroll-down {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            height: 50px;
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0) translateX(-50%);
            }
            40% {
                transform: translateY(-20px) translateX(-50%);
            }
            60% {
                transform: translateY(-10px) translateX(-50%);
            }
        }
        
        /* Cartes œuvres */
        .artwork-card {
            cursor: pointer;
            border: none;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
            color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .artwork-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }
        
        .artwork-img-container {
            position: relative;
            overflow: hidden;
            height: 250px;
            background-color: #1a1a2e;
        }
        
        .artwork-img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            transition: transform 0.5s ease;
        }
        
        .artwork-card:hover .artwork-img {
            transform: scale(1.05);
        }
        
        .artwork-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }
        
        .artwork-card:hover .artwork-overlay {
            opacity: 1;
        }
        
        .artwork-body {
            padding: 1.5rem;
        }
        
        .artwork-title {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        
        .artwork-meta {
            margin-top: 10px;
        }
        
        .oeuvre-description {
            white-space: pre-line;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.8);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-banner {
                min-height: 70vh;
            }
            
            .display-3 {
                font-size: 2.5rem;
            }
            
            .artwork-img-container {
                height: 200px;
            }
        }




/* ========== style section histoire des oeuvres restituées ========== */

      /* Variables CSS */
      :root {
        --gold: #8A1714;
        --dark-red: #8A1714;
        --dark-bg: #1a1a2e;
        --darker-bg: #0d0d1a;
    }

    /* Section historique */
    .historical-section {
        background: linear-gradient(rgba(13, 13, 26, 0.95), rgba(13, 13, 26, 0.95)), 
                    url('{{ asset('images/pattern.png') }}');
        background-size: cover;
        background-attachment: fixed;
        color: white;
    }

    .bg-dark-soft {
        background: rgba(30, 30, 60, 0.7) !important;
        backdrop-filter: blur(10px);
    }

    .text-gold {
        color: #FFF;
    }

    .bg-gold {
        background-color: var(--gold);
    }

    /* Timeline immersive */
    .timeline-immersive {
        padding-left: 80px;
        position: relative;
    }

    .timeline-path {
        position: absolute;
        left: 40px;
        top: 0;
        bottom: 0;
        width: 4px;
        border-radius: 2px;
        z-index: 1;
    }

    .timeline-event {
        position: relative;
        margin-bottom: 60px;
        transition: all 0.4s ease;
        z-index: 2;
    }

    .event-date {
        position: absolute;
        left: -100px;
        top: 20px;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: var(--dark-red);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.5rem;
        border: 4px solid var(--gold);
        box-shadow: 0 0 0 6px rgba(138, 23, 20, 0.3);
        z-index: 3;
    }

    .event-card {
        border-radius: 12px;
        overflow: hidden;
        border-left: 4px solid var(--gold);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .timeline-event:hover .event-card {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(232, 192, 125, 0.2);
    }

    .event-title {
        font-size: 1.6rem;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .event-text {
        line-height: 1.8;
        font-size: 1.05rem;
        opacity: 0.9;
    }

    .event-icon {
        transition: all 0.3s ease;
    }

    .timeline-event:hover .event-icon {
        transform: rotate(15deg) scale(1.1);
    }

    .historical-quote blockquote {
        position: relative;
        padding: 0 40px;
    }

    .historical-quote blockquote::before,
    .historical-quote blockquote::after {
        content: '"';
        font-size: 4rem;
        color: var(--gold);
        opacity: 0.3;
        position: absolute;
        top: -20px;
        left: 0;
    }

    .historical-quote blockquote::after {
        left: auto;
        right: 0;
        top: auto;
        bottom: -60px;
    }

    .signature {
        font-style: italic;
        letter-spacing: 1px;
        position: relative;
        display: inline-block;
    }

    .signature::before {
        content: "";
        position: absolute;
        top: -15px;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(to right, transparent, var(--gold), transparent);
    }

    /* Responsive */
    @media (max-width: 992px) {
        .timeline-immersive {
            padding-left: 60px;
        }
        
        .event-date {
            left: -80px;
            width: 60px;
            height: 60px;
            font-size: 1.2rem;
        }
        
        .event-title {
            font-size: 1.4rem;
        }
    }

    @media (max-width: 768px) {
        .historical-section {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }
        
        .timeline-immersive {
            padding-left: 40px;
        }
        
        .timeline-path {
            left: 20px;
        }
        
        .event-date {
            left: -60px;
            width: 50px;
            height: 50px;
            font-size: 1rem;
            top: 15px;
        }
        
        .event-card {
            padding: 1.5rem;
        }
        
        .event-header {
            flex-direction: column;
            align-items: flex-start !important;
        }
        
        .event-icon {
            margin-bottom: 1rem;
            margin-right: 0 !important;
        }
        
        .historical-quote blockquote {
            font-size: 1.8rem;
            padding: 0 20px;
        }
    }

    @media (max-width: 576px) {
        .event-date {
            position: relative;
            left: 0;
            top: 0;
            margin-bottom: 1rem;
        }
        
        .timeline-immersive {
            padding-left: 0;
        }
        
        .timeline-path {
            display: none;
        }
        
        .event-card {
            border-left: none;
            border-top: 4px solid var(--gold);
        }
    }
</style>





    </style>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-out-quad',
            once: true,
        });
    </script>
@endsection