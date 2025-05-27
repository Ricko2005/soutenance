@extends('layout.app')

@section('title', 'Événement Culturel à Cotonou - Blog')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <!-- Hero Section avec image en plein écran -->
       

        <!-- Contenu principal avec sidebar -->
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Auteur et partage -->
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('images/romaric.jpg') }}" alt="Admin" class="rounded-circle me-4" width="50">
                        <div>
                            <p class="mb-0 fw-bold">Par Admin</p>
                            <small class="text-muted">Publié le 15 Nov 2024</small>
                        </div>
                    </div>
                    <div class="share-buttons">
                        <span class="me-2">Partager :</span>
                        <a href="#" class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-dark"><i class="fas fa-link"></i></a>
                    </div>
                </div>

                <!-- Introduction animée -->
                <div class="fade-in-up mb-5 p-4 bg-white rounded-4 shadow-sm">
                    <p class="lead fst-italic text-center px-lg-5">
                        "Plongez au cœur de la richesse culturelle béninoise avec cet événement exceptionnel qui a illuminé Cotonou. Une expérience immersive où traditions ancestrales et créativité contemporaine se rencontrent pour créer une symphonie culturelle inoubliable."
                    </p>
                </div>

                <!-- Contenu principal avec animations -->
                <article class="article-content">
                    <div class="fade-in-up mb-5">
                        <h2 class="fw-bold mb-4 position-relative title-underline">Une célébration de la culture béninoise</h2>
                        <p class="fs-5">
                            Le 15 novembre 2024, Cotonou a vibré au rythme d'un rassemblement culturel sans précédent. Artistes, musiciens et passionnés de culture venus des quatre coins du Bénin ont transformé la ville en un véritable musée à ciel ouvert, célébrant la diversité et la richesse des traditions locales.
                        </p>
                        <div class="mt-4 p-3 bg-light rounded-4 border-start border-4 border-danger">
                            <p class="mb-0 fst-italic"><i class="fas fa-quote-left text-danger me-2"></i> Cet événement n'est pas qu'une simple manifestation culturelle, c'est une renaissance de notre identité collective. - Ministre de la Culture</p>
                        </div>
                    </div>

                    <div class="fade-in-up mb-5">
                        <h3 class="fw-bold mb-4 position-relative title-underline">Les temps forts de l'événement</h3>
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="highlight-card h-100 p-4 rounded-4 shadow-sm text-center">
                                    <div class="icon-wrapper  bg-opacity-10 text-danger  mx-auto mb-3">
                                        <i class="fas fa-music fa-2x"></i>
                                    </div>
                                    <h4 class="h5">Performances musicales</h4>
                                    <p class="mb-0">Des rythmes traditionnels aux mélodies contemporaines, une explosion sonore qui a captivé le public.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="highlight-card h-100 p-4 rounded-4 shadow-sm text-center">
                                    <div class="icon-wrapper  bg-opacity-10 text-danger rounded-circle mx-auto mb-3">
                                        <i class="fas fa-hands-helping fa-2x"></i>
                                    </div>
                                    <h4 class="h5">Artisanat local</h4>
                                    <p class="mb-0">Découverte du savoir-faire ancestral avec des artisans maîtrisant des techniques vieilles de siècles.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="highlight-card h-100 p-4 rounded-4 shadow-sm text-center">
                                    <div class="icon-wrapper  bg-opacity-10 text-danger rounded-circle mx-auto mb-3">
                                        <i class="fas fa-utensils fa-2x"></i>
                                    </div>
                                    <h4 class="h5">Ateliers interactifs</h4>
                                    <p class="mb-0">Initiation à la danse, cuisine traditionnelle et langues locales pour une immersion totale.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fade-in-up mb-5">
                        <h3 class="fw-bold mb-4 position-relative title-underline">L'impact culturel</h3>
                        <p class="fs-5">
                            Cet événement a transcendé le simple cadre du divertissement pour devenir une plateforme de préservation et de transmission du patrimoine culturel. Plus de 15,000 visiteurs ont pu:
                        </p>
                        <ul class="styled-list">
                            <li>Découvrir des traditions méconnues des jeunes générations</li>
                            <li>Échanger avec des gardiens du savoir culturel</li>
                            <li>Participer à des ateliers pratiques de création artisanale</li>
                            <li>Assister à des performances uniques et authentiques</li>
                        </ul>
                        <div class="stats-card p-4 bg-danger text-white rounded-4 shadow mt-4">
                            <div class="row text-center">
                                <div class="col-4 border-end">
                                    <div class="display-5 fw-bold">15K+</div>
                                    <div class="small">Visiteurs</div>
                                </div>
                                <div class="col-4 border-end">
                                    <div class="display-5 fw-bold">120+</div>
                                    <div class="small">Artistes</div>
                                </div>
                                <div class="col-4">
                                    <div class="display-5 fw-bold">40+</div>
                                    <div class="small">Ateliers</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Galerie photos interactive -->
                <section class="fade-in-up mb-5">
                    <h3 class="fw-bold mb-4 position-relative title-underline">Galerie immersive</h3>
                    <div class="row g-3 gallery-grid">
                        <div class="col-12 col-md-6">
                            <a href="{{ asset('images/culture1.jpg') }}" data-lightbox="gallery" data-title="Spectacle musical">
                                <img src="{{ asset('images/artistes.jpg') }}" alt="Spectacle musical" class="img-fluid rounded-4 shadow-sm gallery-item">
                                <div class="gallery-overlay rounded-4">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="{{ asset('images/culture2.jpg') }}" data-lightbox="gallery" data-title="Artisanat local">
                                <img src="{{ asset('images/artisanat.jpg') }}" alt="Artisanat local" class="img-fluid rounded-4 shadow-sm gallery-item">
                                <div class="gallery-overlay rounded-4">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-4">
                            <a href="{{ asset('images/culture3.jpg') }}" data-lightbox="gallery" data-title="Atelier de danse">
                                <img src="{{ asset('images/atelier.jpeg') }}" alt="Atelier de danse" class="img-fluid rounded-4 shadow-sm gallery-item">
                                <div class="gallery-overlay rounded-4">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-4">
                            <a href="{{ asset('images/culture4.jpg') }}" data-lightbox="gallery" data-title="Cuisine traditionnelle">
                                <img src="{{ asset('images/cuisine.jpg') }}" alt="Cuisine traditionnelle" class="img-fluid rounded-4 shadow-sm gallery-item">
                                <div class="gallery-overlay rounded-4">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-4">
                            <a href="{{ asset('images/culture5.jpg') }}" data-lightbox="gallery" data-title="Costumes traditionnels">
                                <img src="{{ asset('images/costume.jpg') }}" alt="Costumes traditionnels" class="img-fluid rounded-4 shadow-sm gallery-item">
                                <div class="gallery-overlay rounded-4">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>

                <!-- Vidéo de l'événement -->
                <section class="fade-in-up mb-5">
                    <h3 class="fw-bold mb-4 position-relative title-underline">Revivez l'ambiance</h3>
                    <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow">
                        <iframe src="https://www.youtube.com/embed/example" allowfullscreen></iframe>
                    </div>
                    <p class="text-muted text-center mt-2">Extraits des performances musicales de l'événement</p>
                </section>

                <!-- Carte interactive des lieux -->
                <section class="fade-in-up mb-5">
                    <h3 class="fw-bold mb-4 position-relative title-underline">Lieux de l'événement</h3>
                    <div class="map-container rounded-4 overflow-hidden shadow">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.258281118817!2d2.420505415769788!3d6.365384295379535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023553f2c2b37e5%3A0x5a30a8238029c340!2sCotonou%2C%20Benin!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-outline-danger me-2"><i class="fas fa-map-marker-alt me-1"></i> Voir les lieux</button>
                        <button class="btn btn-outline-danger"><i class="fas fa-calendar-alt me-1"></i> Programme complet</button>
                    </div>
                </section>

                <!-- Commentaires modernes -->
                <section class="fade-in-up mb-5">
                    <h3 class="fw-bold mb-4 position-relative title-underline">Témoignages <span class="badge bg-danger">5</span></h3>
                    
                    <div class="comments-container">
                        <div class="comment-card mb-4 p-4 bg-white rounded-4 shadow-sm">
                            <div class="d-flex">
                                <img src="{{ asset('images/avatar1.jpg') }}" alt="Marie D." class="rounded-circle me-3" width="50">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <strong>Marie D.</strong>
                                        <small class="text-muted">16 Nov 2024</small>
                                    </div>
                                    <p class="mb-2">Un événement incroyable, la musique était époustouflante ! J'ai particulièrement aimé la performance du groupe traditionnel.</p>
                                    <div class="d-flex align-items-center">
                                        <button class="btn btn-sm btn-outline-danger me-2"><i class="far fa-thumbs-up"></i> 12</button>
                                        <button class="btn btn-sm btn-outline-secondary"><i class="far fa-comment"></i> Répondre</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comment-card mb-4 p-4 bg-white rounded-4 shadow-sm">
                            <div class="d-flex">
                                <img src="{{ asset('images/avatar2.jpg') }}" alt="Jean P." class="rounded-circle me-3" width="50">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <strong>Jean P.</strong>
                                        <small class="text-muted">16 Nov 2024</small>
                                    </div>
                                    <p class="mb-2">J'ai adoré les ateliers, surtout la cuisine traditionnelle. J'ai appris à préparer le "Amiwo", un délice !</p>
                                    <div class="d-flex align-items-center">
                                        <button class="btn btn-sm btn-outline-danger me-2"><i class="far fa-thumbs-up"></i> 8</button>
                                        <button class="btn btn-sm btn-outline-secondary"><i class="far fa-comment"></i> Répondre</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Formulaire de commentaire amélioré -->
                        <div class="comment-form p-4 bg-light rounded-4 shadow-sm">
                            <h5 class="mb-3 fw-bold">Ajouter votre témoignage</h5>
                            <form action="{{ url('/blog/comment') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Nom complet</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Votre email" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="comment" class="form-label">Votre expérience</label>
                                        <textarea id="comment" name="comment" rows="4" class="form-control" placeholder="Racontez-nous votre expérience lors de cet événement..." required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="notify" checked>
                                            <label class="form-check-label small" for="notify">
                                                Recevoir les notifications des réponses
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-danger px-4"><i class="far fa-paper-plane me-2"></i> Publier</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- À propos de l'événement -->
                <div class="card sidebar-card mb-4 border-0 shadow-sm rounded-4">
                    <div class="card-header bg-danger text-white rounded-top-4">
                        <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i> Infos pratiques</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-calendar-day text-danger me-2"></i> Date</span>
                                <span class="fw-bold">15 Nov 2024</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-clock text-danger me-2"></i> Heure</span>
                                <span class="fw-bold">10h - 22h</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-map-marker-alt text-danger me-2"></i> Lieu</span>
                                <span class="fw-bold">Place de l'Étoile Rouge, Cotonou</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-ticket-alt text-danger me-2"></i> Entrée</span>
                                <span class="badge bg-success">Gratuite</span>
                            </li>
                        </ul>
                        <button class="btn btn-danger w-100 mt-3">
                            <i class="far fa-calendar-plus me-2"></i> Ajouter à mon agenda
                        </button>
                    </div>
                </div>

                <!-- Articles liés avec onglets -->
                <div class="card sidebar-card mb-4 border-0 shadow-sm rounded-4">
                    <div class="card-header bg-white border-0 rounded-top-4">
                        <ul class="nav nav-tabs card-header-tabs" id="relatedPostsTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="popular-tab" data-bs-toggle="tab" data-bs-target="#popular" type="button" role="tab">Populaires</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="recent-tab" data-bs-toggle="tab" data-bs-target="#recent" type="button" role="tab">Récents</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body tab-content p-0">
                        <div class="tab-pane fade show active" id="popular" role="tabpanel">
                            <div class="list-group list-group-flush">
                                <a href="{{ url('/blog/article-1') }}" class="list-group-item list-group-item-action d-flex gap-3 py-3">
                                    <img src="{{ asset('images/danse.jpg') }}" alt="Fête de la Musique" width="80" class="rounded-3">
                                    <div>
                                        <h6 class="mb-1">Fête de la Musique à Cotonou</h6>
                                        <small class="text-muted">12 juin 2024</small>
                                        <div class="mt-1 small text-danger">
                                            <i class="fas fa-eye me-1"></i> 1.2K
                                            <i class="fas fa-heart ms-2 me-1"></i> 245
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ url('/blog/article-2') }}" class="list-group-item list-group-item-action d-flex gap-3 py-3">
                                    <img src="{{ asset('images/art.jpeg') }}" alt="Festival des Arts" width="80" class="rounded-3">
                                    <div>
                                        <h6 class="mb-1">La Grande fête des Arts Africains</h6>
                                        <small class="text-muted">23 au 28 avril 2024</small>
                                        <div class="mt-1 small text-danger">
                                            <i class="fas fa-eye me-1"></i> 980
                                            <i class="fas fa-heart ms-2 me-1"></i> 187
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="recent" role="tabpanel">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">
                                    <img src="{{ asset('images/carnaval.jpeg') }}" alt="Nouvel article" width="80" class="rounded-3">
                                    <div>
                                        <h6 class="mb-1">Carnaval de Ouidah 2024</h6>
                                        <small class="text-muted">1 déc 2024</small>
                                        <div class="mt-1 small text-danger">
                                            <i class="fas fa-eye me-1"></i> 320
                                            <i class="fas fa-heart ms-2 me-1"></i> 45
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Newsletter -->
                <div class="card sidebar-card mb-4 border-0 shadow-sm rounded-4 bg-danger text-white">
                    <div class="card-body text-center p-4">
                        <div class="icon-wrapper bg-white text-danger  mx-auto mb-3">
                            <i class="fas fa-envelope fa-2x"></i>
                        </div>
                        <h5 class="card-title">Restez informés</h5>
                        <p class="card-text small opacity-75">Abonnez-vous pour ne pas manquer nos prochains événements culturels.</p>
                        <form class="mt-3">
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Votre email" required>
                            </div>
                            <button type="submit" class="btn btn-light text-danger w-100">S'abonner</button>
                        </form>
                    </div>
                </div>

                <!-- Galerie Instagram -->
                <div class="card sidebar-card mb-4 border-0 shadow-sm rounded-4">
                    <div class="card-header bg-white border-0 rounded-top-4">
                        <h5 class="mb-0"><i class="fab fa-instagram text-danger me-2"></i> #CultureCotonou</h5>
                    </div>
                    <div class="card-body p-3">
                        <div class="row g-2">
                            <div class="col-4">
                                <a href="#" class="instagram-post">
                                    <img src="{{ asset('images/insta1.jpg') }}" class="img-fluid rounded-2" alt="Instagram post">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="instagram-post">
                                    <img src="{{ asset('images/insta2.jpg') }}" class="img-fluid rounded-2" alt="Instagram post">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="instagram-post">
                                    <img src="{{ asset('images/insta3.jpg') }}" class="img-fluid rounded-2" alt="Instagram post">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="instagram-post">
                                    <img src="{{ asset('images/insta4.jpg') }}" class="img-fluid rounded-2" alt="Instagram post">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="instagram-post">
                                    <img src="{{ asset('images/insta5.jpg') }}" class="img-fluid rounded-2" alt="Instagram post">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="instagram-post">
                                    <img src="{{ asset('images/insta6.jpg') }}" class="img-fluid rounded-2" alt="Instagram post">
                                </a>
                            </div>
                        </div>
                        <a href="#" class="btn btn-outline-danger w-100 mt-3">
                            <i class="fab fa-instagram me-2"></i> Voir plus
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section "Événements à venir" -->
        <section class="fade-in-up mb-5 mt-5 pt-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold m-0 position-relative title-underline">Événements à venir</h3>
                <a href="#" class="btn btn-outline-danger">Voir tout</a>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card event-card h-100 border-0 shadow-sm overflow-hidden rounded-4">
                        <div class="event-date bg-danger text-white text-center py-1">
                            <div class="fw-bold">20</div>
                            <div class="small">DEC</div>
                        </div>
                        <img src="{{ asset('images/fondation.jpg') }}" class="card-img-top" alt="Festival International">
                        <div class="card-body">
                            <h5 class="card-title">Festival International de Cotonou</h5>
                            <p class="card-text small">Une rencontre des cultures du monde entier sur une même scène.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-danger">Musique</span>
                                <a href="#" class="btn btn-sm btn-outline-danger">Détails</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card event-card h-100 border-0 shadow-sm overflow-hidden rounded-4">
                        <div class="event-date bg-danger text-white text-center py-1">
                            <div class="fw-bold">15</div>
                            <div class="small">JAN</div>
                        </div>
                        <img src="{{ asset('images/blanc.jpg') }}" class="card-img-top" alt="Exposition d'Art">
                        <div class="card-body">
                            <h5 class="card-title">Exposition d'Art Contemporain</h5>
                            <p class="card-text small">Découvrez les talents émergents de la scène artistique béninoise.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-danger">Art</span>
                                <a href="#" class="btn btn-sm btn-outline-danger">Détails</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card event-card h-100 border-0 shadow-sm overflow-hidden rounded-4">
                        <div class="event-date bg-danger text-white text-center py-1">
                            <div class="fw-bold">28</div>
                            <div class="small">FÉV</div>
                        </div>
                        <img src="{{ asset('images/vodoune.jpg') }}" class="card-img-top" alt="Fête du Vodoun">
                        <div class="card-body">
                            <h5 class="card-title">Fête du Vodoun</h5>
                            <p class="card-text small">Célébration annuelle des traditions spirituelles ancestrales.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-danger">Tradition</span>
                                <a href="#" class="btn btn-sm btn-outline-danger">Détails</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection

@section('styles')
<style>
    /* Styles de base améliorés */
    body {
        background-color: #f8f9fa;
    }
    
    /* Hero section */
    .hero-section {
        height: 70vh;
        overflow: hidden;
        position: relative;
    }
    
    .hero-image {
        object-fit: cover;
        height: 100%;
        filter: brightness(0.7);
    }
    
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.7));
    }
    
    .text-shadow {
        text-shadow: 0 2px 4px rgba(0,0,0,0.5);
    }
    
    /* Animation */
    .fade-in-up {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease-out;
    }
    
    .fade-in-up.visible {
        opacity: 1;
        transform: translateY(0);
    }
    
    /* Titres soulignés */
    .title-underline::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 60px;
        height: 4px;
        background: #dc3545;
        border-radius: 2px;
    }
    
    /* Cartes spéciales */
    .highlight-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(220, 53, 69, 0.2);
    }
    
    .highlight-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        border-color: rgba(220, 53, 69, 0.5);
    }
    
    .icon-wrapper {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    /* Galerie */
    .gallery-item {
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(220, 53, 69, 0.7);
        opacity: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 2rem;
        transition: all 0.3s ease;
    }
    
    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }
    
    /* Commentaires */
    .comment-card {
        transition: all 0.3s ease;
    }
    
    .comment-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1) !important;
    }
    
    /* Sidebar */
    .sidebar-card {
        transition: all 0.3s ease;
    }
    
    .sidebar-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    
    .instagram-post {
        display: block;
        position: relative;
        overflow: hidden;
        border-radius: 8px;
    }
    
    .instagram-post::after {
        content: '';
        display: block;
        padding-bottom: 100%;
    }
    
    .instagram-post img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    
    .instagram-post:hover img {
        transform: scale(1.05);
    }
    
    /* Événements */
    .event-card {
        transition: all 0.3s ease;
    }
    
    .event-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    
    .event-date {
        position: absolute;
        top: 15px;
        right: 15px;
        width: 50px;
        border-radius: 8px;
        z-index: 1;
    }
    
    /* Liste stylisée */
    .styled-list {
        list-style: none;
        padding-left: 0;
    }
    
    .styled-list li {
        position: relative;
        padding-left: 30px;
        margin-bottom: 10px;
    }
    
    .styled-list li::before {
        content: '';
        position: absolute;
        left: 0;
        top: 8px;
        width: 15px;
        height: 15px;
        background-color: #dc3545;
        border-radius: 50%;
    }
    
    /* Stats card */
    .stats-card {
        background: linear-gradient(135deg, #dc3545, #a71d2a);
    }
</style>
@endsection

@section('scripts')
<!-- Lightbox pour la galerie -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<!-- Font Awesome pour les icônes -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script>
    // Animation au scroll
    document.addEventListener('DOMContentLoaded', () => {
        const fadeEls = document.querySelectorAll('.fade-in-up');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        fadeEls.forEach(el => observer.observe(el));
        
        // Configuration de la lightbox
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'albumLabel': 'Image %1 sur %2'
        });
    });
    
    // Compteur animé pour les stats
    function animateValue(id, start, end, duration) {
        const obj = document.getElementById(id);
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            obj.innerHTML = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }
    
    // Démarrer l'animation quand la section stats est visible
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateValue("visitors-count", 0, 15000, 2000);
                animateValue("artists-count", 0, 120, 1500);
                animateValue("workshops-count", 0, 40, 1000);
                statsObserver.unobserve(entry.target);
            }
        });
    });
    
    const statsCard = document.querySelector('.stats-card');
    if (statsCard) {
        statsObserver.observe(statsCard);
    }
</script>
@endsection