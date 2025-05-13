@extends('layout.app')

@section('title', 'Artistes')

@section('content')

<!-- Hero Section avec effet parallaxe -->
<div class="hero-section position-relative text-white overflow-hidden">
    <div class="parallax-bg" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3)), url('{{ asset('images/images1.jpg') }}');"></div>
    <div class="container h-100 d-flex align-items-center justify-content-center text-center position-relative z-index-1">
        <div class="hero-content">
            <h1 class="hero-title mb-4 grotesk-title animate__animated animate__fadeInDown">L'Art sous un nouveau jour</h1>
            <p class="hero-subtitle mb-5 animate__animated animate__fadeIn animate__delay-1s">Rencontrez les visionnaires qui réinventent l'art contemporain</p>
            <a href="#discover" class="btn btn-outline-light btn-arrow animate__animated animate__fadeInUp animate__delay-1s">
                Explorer les talents <i class="fas fa-arrow-down ms-2"></i>
            </a>
        </div>
    </div>
    <div class="scroll-indicator animate__animated animate__bounce animate__infinite">
        <i class="fas fa-angle-down"></i>
    </div>
</div>

<!-- Section Artistes Premium -->
<section id="discover" class="artists-section py-6 position-relative">
    <!-- Effet de particules en arrière-plan -->
    <div class="particles-js" id="particles-js"></div>
    
    <div class="container position-relative z-index-1">
        <div class="section-header text-center mb-6">
            <h2 class="section-title grotesk-title animate__animated animate__fadeIn">
                <span class="title-highlight">Découvrez</span> Nos Artistes
            </h2>
            <p class="section-description mb-4 animate__animated animate__fadeIn animate__delay-1s">
                Des créateurs uniques aux univers singuliers. <span class="typed-text" data-typed-items="Peintres, Sculpteurs, Photographes, Artistes digitaux, Créateurs visionnaires"></span>
            </p>
            
            <!-- Filtres par catégorie améliorés -->
            <div class="artist-filters mb-5 animate__animated animate__fadeIn animate__delay-1s">
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">
                        <i class="fas fa-star me-2"></i> Tous
                    </button>
                    <button class="filter-btn" data-filter="peinture">
                        <i class="fas fa-palette me-2"></i> Peinture
                    </button>
                    <button class="filter-btn" data-filter="sculpture">
                        <i class="fas fa-monument me-2"></i> Sculpture
                    </button>
                    <button class="filter-btn" data-filter="photographie">
                        <i class="fas fa-camera me-2"></i> Photographie
                    </button>
                    <button class="filter-btn" data-filter="digital">
                        <i class="fas fa-laptop-code me-2"></i> Digital
                    </button>
                </div>
            </div>
        </div>

        <div class="row g-4 artist-grid">
            @foreach([1,2,3,4,5,6,7,8] as $i)
            <div class="col-xl-3 col-lg-4 col-md-6 artist-item" data-category="{{ ['peinture', 'sculpture', 'photographie', 'digital', 'peinture', 'sculpture', 'photographie', 'digital'][$i-1] }}">
                <div class="artist-card">
                    <div class="artist-image-container">
                        <img src="{{ asset('images/image2' . (3 + $i) . '.png') }}" 
                             alt="Artiste {{ $i }}" 
                             class="artist-image">
                        <div class="artist-badge">
                            <i class="{{ ['fas fa-palette', 'fas fa-monument', 'fas fa-camera', 'fas fa-laptop-code', 'fas fa-palette', 'fas fa-monument', 'fas fa-camera', 'fas fa-laptop-code'][$i-1] }} me-1"></i>
                            {{ ['Peinture', 'Sculpture', 'Photographie', 'Art Digital', 'Peinture', 'Sculpture', 'Photographie', 'Art Digital'][$i-1] }}
                        </div>
                        <div class="artist-overlay">
                            <div class="overlay-content">
                                <h3 class="overlay-name grotesk-title">Nom de l'Artiste {{ $i }}</h3>
                                <p class="overlay-specialty">{{ ['Abstrait', 'Figuratif', 'Portrait', 'Conceptuel', 'Minimaliste', 'Expressionniste', 'Surréaliste', 'Futuriste'][$i-1] }}</p>
                                <div class="artist-social">
                                    <a href="#" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="social-icon" aria-label="Site web"><i class="fas fa-globe"></i></a>
                                </div>
                                <a href="{{ route('auteur.show', ['id' => $i]) }}" class="btn btn-outline-light btn-sm mt-3">
                                    Voir portfolio <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="artist-info">
                        <div class="artist-meta">
                            <span class="meta-item"><i class="fas fa-map-marker-alt"></i> {{ ['Cotonou', 'Paris', 'Lagos', 'New York', 'Lomé', 'Dakar', 'Abidjan', 'Londres'][$i-1] }}</span>
                            <span class="meta-item"><i class="fas fa-star"></i> {{ rand(4, 5) }}.{{ rand(0, 9) }}</span>
                        </div>
                        <h3 class="artist-name grotesk-title">Nom de l'Artiste {{ $i }}</h3>
                        <p class="artist-bio">Artiste {{ ['contemporain', 'moderne', 'conceptuel', 'expérimental', 'traditionnel', 'innovant', 'avant-gardiste', 'visionnaire'][$i-1] }} spécialisé en {{ ['peinture acrylique', 'sculpture sur bois', 'photographie urbaine', 'art numérique', 'aquarelle', 'bronze', 'argentique', 'réalité virtuelle'][$i-1] }}.</p>
                        <div class="artist-footer">
                            <a href="{{ route('auteur.show', ['id' => $i]) }}" class="artist-link">
                                En savoir plus <i class="fas fa-long-arrow-alt-right ms-2"></i>
                            </a>
                            <span class="artist-price">À partir de {{ rand(50, 500) }}€</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Bouton "Voir plus" amélioré -->
        <div class="text-center mt-5">
            <button class="btn btn-dark btn-load-more btn-glow">
                <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                <span class="btn-content">
                    Charger plus d'artistes <i class="fas fa-plus ms-2"></i>
                </span>
            </button>
        </div>
    </div>
</section>

<!-- Section CTA -->
<div class="cta-section py-5 bg-dark text-white position-relative overflow-hidden">
    <div class="container position-relative z-index-1">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h3 class="cta-title grotesk-title mb-3">Prêt à découvrir votre prochain coup de cœur artistique ?</h3>
                <p class="cta-text mb-0">Rejoignez notre communauté de collectionneurs et amateurs d'art.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="#" class="btn btn-primary btn-lg btn-cta">
                    S'inscrire <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="cta-shape"></div>
</div>

<style>
    /* Import des polices et animations */
    @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap');
    @import url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    
    /* Variables CSS modernes */
    :root {
        --primary-color: #8A1714;
        --primary-dark: #6A110E;
        --primary-light: rgba(138, 23, 20, 0.1);
        --secondary-color: #1A1A1A;
        --accent-color: #FFD700;
        --text-dark: #2D2D2D;
        --text-light: #777;
        --light-bg: #F9F9F9;
        --white: #FFFFFF;
        --black: #000000;
        --transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        --transition-slow: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        --border-radius: 16px;
        --box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        --box-shadow-hover: 0 15px 40px rgba(138, 23, 20, 0.15);
    }

    /* Typographie améliorée */
    .grotesk-title {
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 700;
        letter-spacing: -0.5px;
        line-height: 1.1;
    }

    .title-highlight {
        color: var(--primary-color);
        position: relative;
        display: inline-block;
    }

    .title-highlight:after {
        content: '';
        position: absolute;
        bottom: 5px;
        left: 0;
        width: 100%;
        height: 8px;
        background: rgba(138, 23, 20, 0.3);
        z-index: -1;
        transform: skew(-15deg);
    }

    /* Hero Section améliorée avec parallaxe */
    .hero-section {
        height: 100vh;
        min-height: 700px;
        display: flex;
        align-items: center;
        position: relative;
    }

    .parallax-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 120%;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        will-change: transform;
        z-index: 0;
    }

    .z-index-1 {
        position: relative;
        z-index: 1;
    }

    .hero-content {
        max-width: 800px;
        margin: 0 auto;
        transform: translateY(20px);
    }

    .hero-title {
        font-size: 4rem;
        text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        margin-bottom: 1.5rem;
        line-height: 1.1;
    }

    .hero-subtitle {
        font-size: 1.4rem;
        font-weight: 300;
        letter-spacing: 0.5px;
        margin-bottom: 2rem;
        opacity: 0.9;
    }

    .btn-arrow {
        border: 2px solid;
        padding: 15px 40px;
        font-weight: 600;
        letter-spacing: 1px;
        transition: var(--transition);
        text-transform: uppercase;
        font-size: 0.9rem;
        position: relative;
        overflow: hidden;
    }

    .btn-arrow:hover {
        background: rgba(255,255,255,0.1);
        transform: translateY(-3px);
    }

    .btn-arrow:before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: var(--transition-slow);
    }

    .btn-arrow:hover:before {
        left: 100%;
    }

    .scroll-indicator {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 2rem;
        color: rgba(255,255,255,0.7);
        cursor: pointer;
    }

    /* Section Artistes Premium */
    .artists-section {
        background: var(--light-bg);
        position: relative;
        overflow: hidden;
        padding: 100px 0;
    }

    .py-6 {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    /* Effet de particules */
    #particles-js {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 0;
    }

    .section-header {
        position: relative;
        margin-bottom: 5rem;
    }

    .section-title {
        font-size: 3.5rem;
        color: var(--secondary-color);
        margin-bottom: 1.5rem;
        position: relative;
        display: inline-block;
    }

    .section-description {
        font-size: 1.3rem;
        color: var(--text-light);
        max-width: 700px;
        margin: 0 auto;
        font-weight: 300;
    }

    .typed-text {
        color: var(--primary-color);
        font-weight: 500;
    }

    /* Filtres premium */
    .artist-filters {
        margin-top: 3rem;
    }

    .filter-buttons {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
    }

    .filter-btn {
        padding: 12px 25px;
        border: none;
        background: var(--white);
        color: var(--text-dark);
        border-radius: 50px;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        border: 1px solid #eee;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .filter-btn:hover, .filter-btn.active {
        background: var(--primary-color);
        color: var(--white);
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(138, 23, 20, 0.3);
    }

    .filter-btn:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, transparent, rgba(255,255,255,0.3), transparent);
        transform: translateX(-100%);
        transition: var(--transition-slow);
    }

    .filter-btn:hover:after {
        transform: translateX(100%);
    }

    /* Grille d'artistes améliorée */
    .artist-grid {
        opacity: 0;
        animation: fadeIn 1s ease forwards 0.5s;
    }

    /* Cartes Artistes Premium */
    .artist-card {
        background: var(--white);
        border-radius: var(--border-radius);
        overflow: hidden;
        box-shadow: var(--box-shadow);
        transition: var(--transition-slow);
        height: 100%;
        position: relative;
        border: 1px solid rgba(0,0,0,0.03);
    }

    .artist-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: var(--box-shadow-hover);
    }

    .artist-image-container {
        height: 350px;
        position: relative;
        overflow: hidden;
    }

    .artist-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition-slow);
    }

    .artist-card:hover .artist-image {
        transform: scale(1.1);
    }

    .artist-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: var(--primary-color);
        color: white;
        padding: 8px 15px;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 600;
        z-index: 2;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
    }

    .artist-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(transparent, rgba(26, 26, 26, 0.95));
        display: flex;
        align-items: flex-end;
        padding: 2.5rem;
        opacity: 0;
        transition: var(--transition-slow);
    }

    .artist-card:hover .artist-overlay {
        opacity: 1;
    }

    .overlay-content {
        transform: translateY(30px);
        transition: var(--transition-slow);
        width: 100%;
    }

    .artist-card:hover .overlay-content {
        transform: translateY(0);
    }

    .overlay-name {
        color: var(--white);
        font-size: 1.8rem;
        margin-bottom: 0.8rem;
        text-shadow: 0 2px 5px rgba(0,0,0,0.3);
    }

    .overlay-specialty {
        color: rgba(255,255,255,0.9);
        font-size: 1rem;
        margin-bottom: 2rem;
        font-weight: 300;
    }

    .artist-social {
        display: flex;
        gap: 15px;
        margin-bottom: 1.5rem;
    }

    .social-icon {
        color: var(--white);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1px solid rgba(255,255,255,0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: var(--transition);
        font-size: 1rem;
    }

    .social-icon:hover {
        background: var(--white);
        color: var(--primary-color);
        transform: translateY(-5px) scale(1.1);
    }

    .artist-info {
        padding: 2rem;
    }

    .artist-meta {
        display: flex;
        gap: 20px;
        margin-bottom: 1rem;
        font-size: 0.9rem;
        color: var(--text-light);
    }

    .meta-item {
        display: flex;
        align-items: center;
        font-weight: 300;
    }

    .meta-item i {
        color: var(--primary-color);
        margin-right: 8px;
        font-size: 1rem;
    }

    .artist-name {
        font-size: 1.6rem;
        color: var(--secondary-color);
        margin-bottom: 1rem;
        transition: var(--transition);
    }

    .artist-card:hover .artist-name {
        color: var(--primary-color);
    }

    .artist-bio {
        font-size: 1rem;
        color: var(--text-light);
        margin-bottom: 2rem;
        line-height: 1.6;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .artist-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .artist-link {
        display: inline-flex;
        align-items: center;
        color: var(--primary-color);
        font-weight: 700;
        font-size: 0.9rem;
        text-decoration: none;
        transition: var(--transition);
        text-transform: uppercase;
        letter-spacing: 1px;
        position: relative;
    }

    .artist-link:after {
        content: '';
        position: absolute;
        bottom: -3px;
        left: 0;
        width: 0;
        height: 2px;
        background: var(--primary-color);
        transition: var(--transition);
    }

    .artist-link:hover {
        color: var(--primary-dark);
    }

    .artist-link:hover:after {
        width: 100%;
    }

    .artist-link i {
        transition: var(--transition);
    }

    .artist-link:hover i {
        transform: translateX(5px);
    }

    .artist-price {
        font-size: 1rem;
        font-weight: 700;
        color: var(--secondary-color);
        background: var(--primary-light);
        padding: 8px 15px;
        border-radius: 50px;
    }

    /* Bouton Charger plus premium */
    .btn-load-more {
        padding: 15px 40px;
        font-weight: 700;
        letter-spacing: 1px;
        border-radius: 50px;
        transition: var(--transition);
        border: none;
        background: linear-gradient(45deg, var(--primary-color), var(--primary-dark));
        color: white;
        position: relative;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(138, 23, 20, 0.3);
    }

    .btn-glow {
        animation: pulse 2s infinite;
    }

    .btn-load-more:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(138, 23, 20, 0.4);
    }

    .btn-load-more:before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: var(--transition-slow);
    }

    .btn-load-more:hover:before {
        left: 100%;
    }

    /* Section CTA */
    .cta-section {
        position: relative;
        overflow: hidden;
    }

    .cta-title {
        font-size: 2.2rem;
        color: var(--white);
    }

    .cta-text {
        font-size: 1.1rem;
        color: rgba(255,255,255,0.8);
        max-width: 600px;
    }

    .btn-cta {
        padding: 15px 30px;
        font-weight: 700;
        letter-spacing: 1px;
        border-radius: 50px;
        background: var(--accent-color);
        color: var(--secondary-color);
        transition: var(--transition);
        border: none;
    }

    .btn-cta:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(255, 215, 0, 0.3);
    }

    .cta-shape {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 300px;
        height: 300px;
        background: var(--primary-color);
        clip-path: polygon(100% 0, 0% 100%, 100% 100%);
        opacity: 0.2;
    }

    /* Animations améliorées */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(138, 23, 20, 0.4);
        }
        70% {
            box-shadow: 0 0 0 15px rgba(138, 23, 20, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(138, 23, 20, 0);
        }
    }

    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
        100% { transform: translateY(0px); }
    }

    .floating {
        animation: float 6s ease-in-out infinite;
    }

    /* Responsive Design amélioré */
    @media (max-width: 1399px) {
        .hero-title {
            font-size: 3.5rem;
        }
        
        .artist-image-container {
            height: 320px;
        }
    }

    @media (max-width: 1199px) {
        .hero-title {
            font-size: 3rem;
        }
        
        .section-title {
            font-size: 3rem;
        }
        
        .artist-image-container {
            height: 280px;
        }
    }

    @media (max-width: 991px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
        }
        
        .section-title {
            font-size: 2.5rem;
        }
        
        .section-description {
            font-size: 1.1rem;
        }
        
        .artist-image-container {
            height: 240px;
        }
        
        .filter-buttons {
            gap: 10px;
        }
        
        .filter-btn {
            padding: 10px 20px;
            font-size: 0.9rem;
        }
    }

    @media (max-width: 767px) {
        .hero-section {
            height: 80vh;
            min-height: 600px;
        }
        
        .hero-title {
            font-size: 2.2rem;
        }
        
        .hero-subtitle {
            font-size: 1.1rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .artist-image-container {
            height: 300px;
        }
        
        .artist-info {
            padding: 1.5rem;
        }
        
        .cta-title {
            font-size: 1.8rem;
        }
    }

    @media (max-width: 575px) {
        .hero-section {
            height: 70vh;
            min-height: 500px;
        }
        
        .hero-title {
            font-size: 2rem;
        }
        
        .artist-image-container {
            height: 260px;
        }
        
        .section-title {
            font-size: 1.8rem;
        }
        
        .filter-buttons {
            gap: 8px;
        }
        
        .filter-btn {
            padding: 8px 15px;
            font-size: 0.8rem;
        }
        
        .artist-footer {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }
        
        .cta-section .row {
            flex-direction: column;
            text-align: center;
        }
        
        .btn-cta {
            width: 100%;
            max-width: 250px;
            margin: 0 auto;
        }
    }
</style>

<!-- Scripts améliorés -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    // Initialisation des animations
    document.addEventListener('DOMContentLoaded', function() {
        // Effet de texte typé
        if(document.querySelector('.typed-text')) {
            new Typed('.typed-text', {
                strings: document.querySelector('.typed-text').getAttribute('data-typed-items').split(','),
                typeSpeed: 100,
                backSpeed: 60,
                loop: true
            });
        }
        
        // Effet de particules
        if(document.getElementById('particles-js')) {
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#8A1714"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        }
                    },
                    "opacity": {
                        "value": 0.3,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#8A1714",
                        "opacity": 0.2,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });
        }
        
        // Filtrage des artistes par catégorie
        const filterButtons = document.querySelectorAll('.filter-btn');
        const artistItems = document.querySelectorAll('.artist-item');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Animation des boutons
                filterButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.style.transform = 'translateY(0)';
                });
                
                this.classList.add('active');
                this.style.transform = 'translateY(-5px)';
                
                const filterValue = this.getAttribute('data-filter');
                
                // Animation de filtrage des artistes
                artistItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';
                        item.style.display = 'block';
                        
                        setTimeout(() => {
                            item.style.transition = 'all 0.6s cubic-bezier(0.16, 1, 0.3, 1)';
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 50);
                    } else {
                        item.style.transition = 'all 0.4s ease';
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';
                        
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 400);
                    }
                });
            });
        });
        
        // Animation de chargement pour le bouton "Voir plus"
        const loadMoreBtn = document.querySelector('.btn-load-more');
        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', function() {
                const spinner = this.querySelector('.spinner-border');
                const btnContent = this.querySelector('.btn-content');
                
                spinner.classList.remove('d-none');
                btnContent.textContent = 'Chargement...';
                this.disabled = true;
                
                // Simulation de chargement avec animation
                setTimeout(() => {
                    spinner.classList.add('d-none');
                    btnContent.innerHTML = 'Chargement réussi <i class="fas fa-check ms-2"></i>';
                    this.style.background = 'linear-gradient(45deg, #4CAF50, #2E7D32)';
                    
                    // Ici, vous pourriez ajouter une requête AJAX pour charger plus d'artistes
                    setTimeout(() => {
                        btnContent.innerHTML = 'Charger plus d\'artistes <i class="fas fa-plus ms-2"></i>';
                        this.style.background = 'linear-gradient(45deg, var(--primary-color), var(--primary-dark))';
                        this.disabled = false;
                    }, 1500);
                }, 2000);
            });
        }
        
        // Effet parallaxe
        const parallaxBg = document.querySelector('.parallax-bg');
        if(parallaxBg) {
            window.addEventListener('scroll', function() {
                const scrollPosition = window.pageYOffset;
                parallaxBg.style.transform = 'translateY(' + scrollPosition * 0.5 + 'px)';
            });
        }
        
        // Animation au scroll
        const animateOnScroll = function() {
            const elements = document.querySelectorAll('.animate__animated');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if(elementPosition < windowHeight - 100) {
                    const animationClass = element.classList.contains('animate__fadeIn') ? 'animate__fadeIn' : 
                                          element.classList.contains('animate__fadeInUp') ? 'animate__fadeInUp' : 
                                          element.classList.contains('animate__fadeInDown') ? 'animate__fadeInDown' : '';
                    
                    if(animationClass) {
                        element.style.opacity = '1';
                        element.classList.add(animationClass);
                    }
                }
            });
        };
        
        window.addEventListener('scroll', animateOnScroll);
        animateOnScroll(); // Exécuter une fois au chargement
    });
</script>

@endsection