@extends('layout.app')

@section('title', 'À Propos')

@section('content')
<!-- Section Héro - Version améliorée -->
<section class="hero-section">
    <div class="hero-overlay">
        <div class="container">
            <h1 class="hero-title">Entrez dans notre univers artistique</h1>
            <p class="hero-subtitle">Un monde de créativité, de passion et d'expression</p>
            <div class="hero-btn-container">
                <a href="#team" class="hero-btn btn-primary">Rencontrez l'équipe</a>
                <a href="#values" class="hero-btn btn-outline">Nos valeurs</a>
            </div>
        </div>
    </div>
    <div class="hero-scroll-indicator">
        <span></span>
    </div>
</section>

<!-- Section À Propos - Design amélioré -->
<section class="about-section" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="about-content">
                    <span class="section-badge">À propos</span>
                    <h2 class="section-title">Qui sommes-nous ?</h2>
                    <p class="section-subtitle">Une communauté engagée pour l'art et les artistes</p>
                    
                    <div class="about-text">
                        <p>Depuis notre création, nous construisons un espace unique dédié à l'expression artistique sous toutes ses formes. Nous croyons au pouvoir transformateur de l'art et à sa capacité à rassembler les gens.</p>
                        <p>Grâce à nos expositions, événements et collaborations, nous donnons la parole aux artistes émergents et confirmés. Notre mission est de leur offrir visibilité, soutien et reconnaissance.</p>
                    </div>
                    
                    <div class="about-stats">
                        <div class="stat-item">
                            <span class="stat-number" data-count="50">0</span>+
                            <span class="stat-label">Artistes</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-count="120">0</span>+
                            <span class="stat-label">Œuvres</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-count="15">0</span>+
                            <span class="stat-label">Événements</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0">
                <div class="about-image-container">
                    <img src="{{ asset('images/propose.jpg') }}" alt="Art collectif" class="about-main-img">
                    <div class="about-img-decoration"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Équipe - Design amélioré -->
<section class="team-section" id="team">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Équipe</span>
            <h2 class="section-title">Notre Équipe</h2>
            <p class="section-description">Les passionnés qui font avancer notre vision au quotidien</p>
        </div>
        
        <div class="team-members">
            @foreach ([
                ['image' => 'oeuvre15.png', 'nom' => 'Sophie Martin', 'role' => 'Directrice Artistique', 'social' => ['twitter', 'instagram', 'linkedin']],
                ['image' => 'romaric.jpg', 'nom' => 'Romaric TOLOFON', 'role' => 'Responsable Communication', 'social' => ['twitter', 'facebook', 'linkedin']],
                ['image' => 'jarolle.jpg', 'nom' => 'Jarolle TOLOFON', 'role' => 'Chargée des événements', 'social' => ['instagram', 'pinterest', 'dribbble']],
            ] as $member)
                <div class="team-member">
                    <div class="member-img-container">
                        <img src="{{ asset('images/' . $member['image']) }}" alt="{{ $member['nom'] }}" class="member-img">
                        <div class="member-social">
                            @foreach($member['social'] as $network)
                                <a href="#" class="social-link"><i class="fab fa-{{ $network }}"></i></a>
                            @endforeach
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">{{ $member['nom'] }}</h3>
                        <p class="member-role">{{ $member['role'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Section Valeurs - Design amélioré -->
<section class="values-section" id="values">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Valeurs</span>
            <h2 class="section-title">Nos Valeurs</h2>
            <p class="section-description">Les principes qui guident chacune de nos actions</p>
        </div>
        
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3 class="value-title">Créativité</h3>
                <p class="value-description">Nous valorisons les idées nouvelles et l'expression libre, encourageant l'innovation à chaque étape.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="value-title">Partage</h3>
                <p class="value-description">L'art est un lien entre les personnes et les cultures. Nous construisons des ponts, pas des murs.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-star"></i>
                </div>
                <h3 class="value-title">Excellence</h3>
                <p class="value-description">Nous aspirons à la qualité dans tout ce que nous entreprenons, avec rigueur et passion.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="value-title">Engagement</h3>
                <p class="value-description">Envers nos artistes, notre public et notre mission de démocratisation culturelle.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section Vision - Design amélioré -->
<section class="vision-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="vision-image-container">
                    <img src="{{ asset('images/peace.jpg') }}" alt="Notre vision" class="vision-img">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="vision-content">
                    <span class="section-badge">Vision</span>
                    <h2 class="section-title">Notre Vision</h2>
                    <p class="vision-description">
                        2025 marque le début de notre aventure artistique. Animés par la passion et l'envie de faire rayonner la créativité, nous nous engageons sur une trajectoire ambitieuse.
                    </p>
                    
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-year">2025</div>
                            <div class="timeline-content">
                                <h4>Lancement officiel</h4>
                                <p>Plateforme digitale et première exposition locale</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-year">2026</div>
                            <div class="timeline-content">
                                <h4>Festival d'art</h4>
                                <p>Premier festival multidisciplinaire ouvert au public</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-year">2027</div>
                            <div class="timeline-content">
                                <h4>Résidence d'artistes</h4>
                                <p>Programme pour jeunes artistes émergents</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-year">2028</div>
                            <div class="timeline-content">
                                <h4>Réseau national</h4>
                                <p>Partenariats avec galeries à l'échelle nationale</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section CTA -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Prêt à explorer l'art autrement ?</h2>
            <p class="cta-text">Rejoignez notre communauté ou découvrez nos prochains événements</p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary">Nos événements</a>
                <a href="{{ url('/contact') }}" class="btn btn-outline">Nous contacter</a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
              @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap');

    :root {
        --primary-color: #8A1714;
        --primary-light: #c1393d;
        --secondary-color: #1a1a1a;
        --text-color: #333;
        --light-bg: #f8f8f8;
        --white: #ffffff;
        --transition: all 0.3s ease;
    }
    
    /* Typographie améliorée */
    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        color: var(--text-color);
        line-height: 1.6;
    }
    
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 700;
    }
    

    
    /* Section Héro améliorée */
    .hero-section {
        position: relative;
        height: 100vh;
        min-height: 700px;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)), url("{{ asset('images/about.jpg') }}") no-repeat center center/cover;
        display: flex;
        align-items: center;
        color: var(--white);
        overflow: hidden;
    }
    
    .hero-overlay {
        position: relative;
        z-index: 2;
        width: 100%;
    }
    
    .hero-title {
        display: flex;
        justify-content: center;
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 1.5rem;
        line-height: 1.2;
        animation: fadeInUp 1s ease-out;
    }
    
    .hero-subtitle {
        font-size: 1.5rem;
        font-weight: 300;
        max-width: 700px;
        margin: 0 auto 2.5rem;
        opacity: 0.9;
        animation: fadeInUp 1.2s ease-out;
    }
    
    .hero-btn-container {
        display: flex;
        gap: 1rem;
        justify-content: center;
        animation: fadeInUp 1.4s ease-out;
    }
    
    .hero-btn {
        padding: 0.8rem 2rem;
        border-radius: 50px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.9rem;
        transition: var(--transition);
    }
    
    .btn-primary {
        background-color: #2C3E50 !important;
        color: var(--white);
        border: 2px solid #2C3E50 !important;
    }
    
    .btn-primary:hover {
        background-color: var(--primary-light);
        border-color: var(--primary-light);
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
  
    
    .btn-outline {
        color: #000;
        background-color: #FFF !important;
        border: 2px solid var(--white);
    }
    
    .btn-outline:hover {
        color: #000 !important;
        background-color: rgba(255, 255, 255, 0.1);
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
    
    .hero-scroll-indicator {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 3;
    }
    
    .hero-scroll-indicator span {
        display: block;
        width: 20px;
        height: 20px;
        border-bottom: 2px solid var(--white);
        border-right: 2px solid var(--white);
        transform: rotate(45deg);
        margin: -10px;
        animation: scrollDown 2s infinite;
        opacity: 0.7;
    }
    
    /* Section À Propos améliorée */
    .about-section {
        padding: 6rem 0;
        position: relative;
        overflow: hidden;
    }
    
    .section-badge {
        display: inline-block;
        background-color: var(--primary-color);
        color: var(--white);
        padding: 0.3rem 1rem;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 1px;
        margin-bottom: 1rem;
        text-transform: uppercase;
    }
    
    .section-title {
        font-family: 'Space Grotesk', sans-serif;

        font-size: 2.5rem;
        color: #8A1714;
        margin-bottom: 1.5rem;
        position: relative;
    }
    
    .section-subtitle {
        font-size: 1.2rem;
        color: #666;
        margin-bottom: 2rem;
        font-weight: 400;
    }
    
    .about-content {
        position: relative;
        z-index: 2;
    }
    
    .about-text {
        margin-bottom: 2.5rem;
    }
    
    .about-text p {
        margin-bottom: 1.5rem;
        font-size: 1.1rem;
    }
    
    .about-stats {
        display: flex;
        gap: 2rem;
        margin-top: 3rem;
    }
    
    .stat-item {
        text-align: center;
    }
    
    .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-color);
        display: block;
        line-height: 1;
    }
    
    .stat-label {
        font-size: 0.9rem;
        color: #666;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .about-image-container {
        position: relative;
        max-width: 100%;
    }
    
    .about-main-img {
        border-radius: 12px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        position: relative;
        z-index: 2;
        transition: var(--transition);
        max-width: 100%;
        height: auto;
    }
    
    .about-img-decoration {
        position: absolute;
        width: 80%;
        height: 80%;
        background-color: rgba(138, 23, 20, 0.1);
        bottom: -20px;
        right: -20px;
        border-radius: 12px;
        z-index: 1;
    }
    
    /* Section Équipe améliorée */
    .team-section {
        padding: 6rem 0;
        background-color: var(--light-bg);
    }
    
    .section-header {
        text-align: center;
        margin-bottom: 4rem;
    }
    
    .section-description {
        max-width: 700px;
        margin: 0 auto;
        color: #666;
    }
    
    .team-members {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }
    
    .team-member {
        background-color: var(--white);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: var(--transition);
    }
    
    .team-member:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }
    
    .member-img-container {
        position: relative;
        overflow: hidden;
        height: 350px;
    }
    
    .member-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition);
    }
    
    .member-social {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
        padding: 1.5rem;
        display: flex;
        justify-content: center;
        gap: 1rem;
        opacity: 0;
        transition: var(--transition);
    }
    
    .team-member:hover .member-social {
        opacity: 1;
    }
    
    .social-link {
        color: var(--white);
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background-color: rgba(255,255,255,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: var(--transition);
    }
    
    .social-link:hover {
        background-color: var(--primary-color);
        transform: translateY(-3px);
    }
    
    .member-info {
        padding: 1.5rem;
        text-align: center;
    }
    
    .member-name {
        font-size: 1.3rem;
        margin-bottom: 0.5rem;
         color: #000;  
  }
    
    .member-role {
        color: var(--primary-color);
        font-weight: 500;
        font-size: 0.9rem;
    }
    
    /* Section Valeurs améliorée */
    .values-section {
        padding: 6rem 0;
        position: relative;
    }
    
    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
    }
    
    .value-card {
        background-color: var(--white);
        border-radius: 12px;
        padding: 2.5rem 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: var(--transition);
        text-align: center;
        border-top: 4px solid transparent;
    }
    
    .value-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        border-top-color: var(--primary-color);
    }
    
    .value-icon {
        width: 70px;
        height: 70px;
        background-color: rgba(138, 23, 20, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
    }
    
    .value-icon i {
        font-size: 1.8rem;
        color: var(--primary-color);
    }
    
    .value-title {
        font-size: 1.3rem;
        margin-bottom: 1rem;
color: #000000;
    }
    
    .value-description {
        color: #666;
        font-size: 1rem;
    }
    
    /* Section Vision améliorée */
    .vision-section {
        padding: 6rem 0;
        background-color: var(--light-bg);
    }
    
    .vision-image-container {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
    }
    
    .vision-img {
        width: 100%;
        height: auto;
        display: block;
    }
    
    .vision-description {
        font-size: 1.1rem;
        margin-bottom: 2rem;
        color: #666;
    }
    
    .timeline {
        position: relative;
        padding-left: 2rem;
    }
    
    .timeline::before {
        content: '';
        position: absolute;
        left: 7px;
        top: 0;
        bottom: 0;
        width: 2px;
        background-color: var(--primary-color);
    }
    
    .timeline-item {
        position: relative;
        padding-bottom: 2rem;
    }
    
    .timeline-year {
        position: absolute;
        left: -2rem;
        top: 0;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: var(--primary-color);
        color: var(--white);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 0.9rem;
    }
    
    .timeline-content {
        padding-left: 2rem;
    }
    
    .timeline-content h4 {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
        color: var(--secondary-color);
    }
    
    .timeline-content p {
        color: #666;
        font-size: 0.95rem;
    }
    
    /* Section CTA */
    .cta-section {
        padding: 5rem 0;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
        color: var(--white);
        text-align: center;
    }
    
    .cta-title {
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }
    
    .cta-text {
        font-size: 1.2rem;
        margin-bottom: 2rem;
        opacity: 0.9;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .cta-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
    }
    
    /* Animations */
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
    
    @keyframes scrollDown {
        0% {
            opacity: 0;
            transform: rotate(45deg) translate(-10px, -10px);
        }
        50% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            transform: rotate(45deg) translate(10px, 10px);
        }
    }
    
    /* Responsive */
    @media (max-width: 992px) {
        .hero-title {
            font-size: 2.8rem;
        }
        
        .hero-subtitle {
            font-size: 1.3rem;
        }
        
        .about-stats {
            gap: 1.5rem;
        }
    }
    
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.2rem;
        }
        
        .hero-subtitle {
            font-size: 1.1rem;
        }
        
        .hero-btn-container {
            flex-direction: column;
            align-items: center;
        }
        
        .about-section, .team-section, .values-section, .vision-section {
            padding: 4rem 0;
        }
        
        .about-stats {
            flex-direction: column;
            gap: 1rem;
            align-items: flex-start;
        }
        
        .stat-item {
            text-align: left;
        }
        
        .about-img-decoration {
            display: none;
        }
        
        .timeline::before {
            left: 0;
        }
        
        .timeline-year {
            left: -1.5rem;
            width: 30px;
            height: 30px;
            font-size: 0.8rem;
        }
    }
    
    @media (max-width: 576px) {
        .hero-title {
            font-size: 1.8rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .cta-title {
            font-size: 2rem;
        }
        
        .cta-buttons {
            flex-direction: column;
            align-items: center;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Animation des statistiques
    document.addEventListener('DOMContentLoaded', function() {
        const statNumbers = document.querySelectorAll('.stat-number');
        
        const animateStats = () => {
            statNumbers.forEach(stat => {
                const target = parseInt(stat.getAttribute('data-count'));
                const duration = 2000;
                const start = 0;
                const increment = target / (duration / 16);
                let current = start;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        clearInterval(timer);
                        current = target;
                    }
                    stat.textContent = Math.floor(current);
                }, 16);
            });
        };
        
        // Déclencher l'animation lorsque la section est visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateStats();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        const aboutSection = document.querySelector('.about-section');
        if (aboutSection) {
            observer.observe(aboutSection);
        }
    });
</script>
@endpush