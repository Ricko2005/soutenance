@extends('layout.app')

@section('title', 'Oeuvres')

@section('content')

<!-- Hero Section avec effet Parallax -->
<section class="hero-section position-relative overflow-hidden" style="height: 500px;">
    <div class="parallax-bg" 
         style="background-image: url('{{ asset('images/artistes.jpg') }}');
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                height: 120%; 
                width: 100%;
                position: absolute;
                top: -10%;"></div>
    
    <div class="hero-overlay" style="background: linear-gradient(135deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);"></div>
    
    <div class="container h-100 position-relative z-index-1">
        <div class="row h-100 align-items-center">
            <div class="col-lg-8 mx-auto text-center text-white">
                <h1 class="display-3 fw-bold mb-4">Explorez notre collection</h1>
                <p class="lead mb-5">Découvrez des œuvres exceptionnelles qui redéfinissent les frontières de l'art contemporain</p>
                <a href="#oeuvres" class="btn btn-lg px-4 py-2 rounded-pill shadow-sm" id="btn-explore">Explorer</a>
            </div>
        </div>
    </div>
</section>

<!-- Contenu Principal - Grille de 3 œuvres par ligne -->
<section id="oeuvres" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title fw-bold position-relative d-inline-block">
                <span class="position-relative z-index-1">Découvrez nos Œuvres</span>
                <span class="section-title-decoration"></span>
            </h2>
            <p class="section-subtitle text-muted mx-auto" style="max-width: 700px;">
                Nous présentons une sélection exclusive d'artistes contemporains qui repoussent les limites de la créativité.
            </p>
        </div>

        <!-- Grille avec 3 colonnes -->
        <div class="row g-4">
            @foreach ($oeuvres as $index => $oeuvre)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-sm oeuvre-card">
                    <div class="card-img-top position-relative" style="height: 280px; background-color: #f8f9fa;">
                        @if($oeuvre->image)
                            <img src="{{ asset('storage/' . $oeuvre->image) }}" 
                                 alt="{{ $oeuvre->titre }}"
                                 class="img-fluid w-100 h-100 object-fit-cover"
                                 data-bs-toggle="modal"
                                 data-bs-target="#oeuvreModal{{ $index }}">
                        @else
                            <img src="{{ asset('images/default-image.jpg') }}" 
                                 alt="{{ $oeuvre->titre }}"
                                 class="img-fluid w-100 h-100 object-fit-cover"
                                 data-bs-toggle="modal"
                                 data-bs-target="#oeuvreModal{{ $index }}">
                        @endif
                        <div class="price-badge position-absolute top-0 end-0 bg-dark text-white px-3 py-2 fw-bold">
                            {{ number_format($oeuvre->prix, 0, ',', ' ') }} FCFA
                        </div>
                    </div>
                    
                    <div class="card-body position-relative">
                        <div class="artist-badge text-white px-3 py-1 rounded-pill d-inline-block mb-2" id="color-artiste">
                            {{ $oeuvre->auteur }}
                        </div>
                        <h5 class="card-title fw-bold mb-3">{{ $oeuvre->titre }}</h5>
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <button class="btn btn-outline-dark btn-sm rounded-pill px-3" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#oeuvreModal{{ $index }}">
                                Voir détails
                            </button>
<a href="{{ route('paiement.form', ['oeuvre' => $oeuvre->id]) }}"class="btn btn-outline px-3 py-2 rounded-4" id="buy">
    Acheter
</a>                         

                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="oeuvreModal{{ $index }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content border-0 rounded-4 overflow-hidden">
                        <div class="modal-header bg-dark text-white">
                            <h5 class="modal-title fw-bold">{{ $oeuvre->titre }}</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="{{ asset('storage/' . $oeuvre->image) }}"
                                         alt="{{ $oeuvre->titre }}"
                                         class="img-fluid w-100 h-100 object-fit-cover">
                                </div>
                                <div class="col-md-6 p-4 d-flex flex-column">
                                    <div class="mb-4">
                                        <h6 class="text-primary fw-bold mb-3">À propos de l'œuvre</h6>
                                        <p class="text-muted">{{ $oeuvre->description }}</p>
                                    </div>
                                    
                                    <div class="mt-auto">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="fw-bold">Artiste:</span>
                                            <span>{{ $oeuvre->auteur }}</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <span class="fw-bold">Prix:</span>
                                            <span class="text-danger fw-bold">{{ number_format($oeuvre->prix, 0, ',', ' ') }} FCFA</span>
                                        </div>
                                        
                                        <div class="d-flex gap-2">
<a href="{{ route('paiement.form', ['oeuvre' => $oeuvre->id]) }}"class="btn btn-outline px-3 py-2 rounded-4" id="buy">
    Acheter
</a>                                        
                                            <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">
                                                Continuer à explorer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    /* Styles généraux */
    .hero-section {
        position: relative;
        overflow: hidden;
    }
    
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    .z-index-1 {
        z-index: 1;
    }
    
    .section-title {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
    }
    
    .section-title-decoration {
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #5c1000, #ff6584);
        border-radius: 2px;
    }
    
    #color-artiste {
        background-color: #8a1714;
    }
    #buy{
                background-color: #8a1714;
               
                color: #fff

    }
    
    #btn-explore {
        background-color: #8a1714;
        color: #FFF;
    }

    /* Styles pour les cartes */
    .oeuvre-card {
        transition: all 0.3s ease;
    }
    
    .oeuvre-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    
    .price-badge {
        font-size: 0.9rem;
        border-bottom-left-radius: 12px;
    }
    
    .artist-badge {
        font-size: 0.75rem;
        position: absolute;
        top: -15px;
        left: 15px;
    }
    
    /* Responsive */
    @media (max-width: 992px) {
        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }
    
    @media (max-width: 768px) {
        .hero-section {
            height: 400px;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .col-md-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Effet parallax
        window.addEventListener('scroll', function() {
            const parallaxBg = document.querySelector('.parallax-bg');
            if (parallaxBg) {
                parallaxBg.style.transform = 'translateY(' + window.pageYOffset * 0.5 + 'px)';
            }
        });

        // Animation au survol des cartes
        const cards = document.querySelectorAll('.oeuvre-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 10px 20px rgba(0,0,0,0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = '';
                this.style.boxShadow = '';
            });
        });
    });
</script>

@endsection