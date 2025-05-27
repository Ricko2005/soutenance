@extends('layout.app')

@section('title', 'Artistes')

@section('content')

<!-- Hero Section -->
<section class="hero-section bg-dark text-white py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Nos Artistes Talentueux</h1>
                <p class="lead mb-5">Découvrez les créateurs qui façonnent la scène artistique contemporaine</p>
                <a href="#artistes" class="btn btn-btn-lg px-4 text-white" id="CTA">
                    Explorer <i class="fas fa-arrow-down ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Section Artistes avec filtres fonctionnels -->
<section id="artistes" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Rencontrez Nos Artistes</h2>
            <p class="text-muted">Filtrer par discipline :</p>
            
            <div class="d-flex flex-wrap justify-content-center gap-2 mb-4" id="filter-buttons">
                <button class="btn btn-sm btn-outline-dark filter-btn active" data-filter="all">Tous</button>
                <button class="btn btn-sm btn-outline-dark filter-btn" data-filter="sculpture">Sculpteur</button>
                <button class="btn btn-sm btn-outline-dark filter-btn" data-filter="peinture">Peinture</button>
                <button class="btn btn-sm btn-outline-dark filter-btn" data-filter="photographie">Photographie</button>
                <button class="btn btn-sm btn-outline-dark filter-btn" data-filter="digital">Digital</button>
            </div>
        </div>

        <div class="row g-4" id="artist-grid">
            <!-- Artiste 1 - Sculpteur -->
            <div class="col-lg-4 col-md-6 artist-item" data-category="sculpture">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-img-top overflow-hidden" style="height: 300px;">
                        <img src="{{ asset('images/maruis.jpg') }}" 
                             alt="Dansou Marius" 
                             class="img-fluid w-100 h-100 object-fit-cover">
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h3 class="h5 mb-0">Dansou Marius</h3>
                            <span class="badge bg-primary">Sculpteur</span>
                        </div>
                        <p class="text-muted small">Artiste contemporain</p>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a href="{{ route('auteur.show', ['id' => 1]) }}" class="btn btn-sm btn-outline text-white" id="CTA">
                                Voir portfolio
                            </a>
                            <div class="text-muted small">
                                <i class="fas fa-map-marker-alt me-1"></i> Cotonou
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Artiste 2 - Sculpteur -->
            <div class="col-lg-4 col-md-6 artist-item" data-category="sculpture">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-img-top overflow-hidden" style="height: 300px;">
                        <img src="{{ asset('images/eulogee.jpg') }}" 
                             alt="Euloge AHANHANZO-GLÈLÈ" 
                             class="img-fluid w-100 h-100 object-fit-cover">
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h3 class="h5 mb-0">Euloge AHANHANZO-GLÈLÈ</h3>
                            <span class="badge bg-primary">Sculpture</span>
                        </div>
                        <p class="text-muted small">Sculpteur sur bois</p>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a href="{{ route('auteur.show', ['id' => 2]) }}" class="btn btn-sm btn-outline text-white" id="CTA">
                                Voir portfolio
                            </a>
                            <div class="text-muted small">
                                <i class="fas fa-map-marker-alt me-1"></i> Abomey
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Artiste 3 - Sculpteur -->
            <div class="col-lg-4 col-md-6 artist-item" data-category="sculpture">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-img-top overflow-hidden" style="height: 300px;">
                        <img src="{{ asset('images/kifouli.jpg') }}" 
                             alt="kifouly-dossou" 
                             class="img-fluid w-100 h-100 object-fit-cover">
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h3 class="h5 mb-0">kifouly-dossou</h3>
                            <span class="badge bg-primary">Sculpteur</span>
                        </div>
                        <p class="text-muted small">Sculpteur</p>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a href="{{ route('auteur.show', ['id' => 3]) }}" class="btn btn-sm btn-outline text-white" id="CTA">
                                Voir portfolio
                            </a>
                            <div class="text-muted small">
                                <i class="fas fa-map-marker-alt me-1"></i> Parakou
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <button class="btn px-4 text-white" id="load-more">
                Charger plus d'artistes
            </button>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 text-white" id="CTA">
    <div class="container text-center py-4">
        <h2 class="h3 mb-4">Vous êtes artiste ?</h2>
        <p class="mb-4">Rejoignez notre plateforme pour exposer vos œuvres</p>
        <a href="https://wa.me/22962880263?text=Bonjour%2C%20je%20suis%20un%20artiste%20plasticien%20b%C3%A9ninois%20et%20je%20souhaiterais%20proposer%20l%E2%80%99une%20de%20mes%20%C5%93uvres%20%C3%A0%20votre%20plateforme.%20Pourriez-vous%20m%E2%80%99indiquer%20les%20d%C3%A9marches%20%C3%A0%20suivre%20afin%20de%20soumettre%20mon%20travail%20et%20le%20mettre%20%C3%A9ventuellement%20en%20vente%20sur%20votre%20site%20%3F" target="_blank">
            <button style="padding: 10px 20px; border: none; background-color: #FFF; color: #000; border-radius: 5px; font-size: 16px; cursor: pointer;">
                Proposer mon œuvre via WhatsApp
            </button>
        </a>
    </div>
</section>

<style>
    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                    url('{{ asset('images/images1.jpg') }}');
        background-size: cover;
        background-position: center;
    }
    
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 8px;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .object-fit-cover {
        object-fit: cover;
    }
    
    .filter-btn.active {
        background: #333;
        color: white !important;
    }
    
    section {
        padding: 4rem 0;
    }
    
    /* Animation pour le filtrage */
    .artist-item {
        transition: all 0.4s ease;
    }
    #CTA {
        background-color: #8A1714;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Système de filtrage
    const filterButtons = document.querySelectorAll('.filter-btn');
    const artistItems = document.querySelectorAll('.artist-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Active le bouton cliqué
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            const filterValue = this.dataset.filter;
            
            // Filtre les artistes
            artistItems.forEach(item => {
                if (filterValue === 'all' || filterValue === 'sculpture') {
                    // Affiche tous les artistes pour "Tous" et "Sculpteur"
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                    }, 10);
                } else if (item.dataset.category === filterValue) {
                    // Affiche seulement les artistes de la catégorie sélectionnée
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                    }, 10);
                } else {
                    // Cache les autres
                    item.style.opacity = '0';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 400);
                }
            });
        });
    });
    
    // Bouton "Charger plus" (simulation)
    const loadMoreBtn = document.getElementById('load-more');
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            this.textContent = 'Chargement...';
            this.disabled = true;
            
            // Simule un chargement AJAX
            setTimeout(() => {
                // Ici vous ajouteriez les nouveaux artistes
                alert('Fonctionnalité à implémenter : Chargement des artistes supplémentaires');
                this.textContent = 'Charger plus d\'artistes';
                this.disabled = false;
            }, 1500);
        });
    }
});
</script>

@endsection