@extends('layout.app')

@section('title', $auteur['nom'] . ' - Biographie')

@section('content')

<!-- En-tête personnalisé -->
<div class="position-relative text-white py-5" style="background: linear-gradient(135deg, #8A1714 0%, #2c3e50 100%); height: 300px;">
    <div class="container h-100 d-flex align-items-center">
        <div>
            <h1 class="display-4 fw-bold">{{ $auteur['nom'] }}</h1>
            <p class="lead">{{ $auteur['specialite'] }}</p>
        </div>
    </div>
</div>

<!-- Contenu principal -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Colonne de gauche - Photo et infos -->
            <div class="col-lg-4 mb-4">
                <div class="card shadow-sm border-0">
                    <img src="{{ asset('images/auteurs/auteur' . $auteur['id'] . '.jpg') }}" 
                         class="card-img-top" 
                         alt="{{ $auteur['nom'] }}">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <span><i class="fas fa-phone me-2"></i> {{ $auteur['telephone'] }}</span>
                            <span><i class="fas fa-map-marker-alt me-2"></i> {{ $auteur['localisation'] }}</span>
                        </div>
                        
                        <div class="social-icons d-flex gap-3">
                            <a href="#" class="btn btn-outline-dark rounded-circle"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-outline-dark rounded-circle"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-outline-dark rounded-circle"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Colonne de droite - Biographie et œuvres -->
            <div class="col-lg-8">
                <div class="ps-lg-4">
                    <h2 class="mb-4 border-bottom pb-2">Biographie</h2>
                    <div class="biographie">
                        <p>{{ $auteur['biographie'] }}</p>
                        <!-- Plus de contenu biographique ici -->
                    </div>
                    
                    <h2 class="mt-5 mb-4 border-bottom pb-2">Galerie d'œuvres</h2>
                    <div class="row g-4">
                        @foreach($auteur['oeuvres'] as $oeuvre)
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm">
                                <img src="{{ asset('images/oeuvres/' . $oeuvre['image']) }}" 
                                     class="card-img-top" 
                                     alt="{{ $oeuvre['titre'] }}"
                                     style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h3 class="h5">{{ $oeuvre['titre'] }}</h3>
                                    <p class="text-muted small">Technique mixte sur toile</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .biographie {
        line-height: 1.8;
        font-size: 1.1rem;
    }
    
    .biographie p {
        margin-bottom: 1.5rem;
    }
    
    .social-icons .btn {
        width: 40px;
        height: 40px;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .card {
        transition: transform 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-5px);
    }
</style>

@endsection