<!DOCTYPE html>
<html lang="fr">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Mon Site')</title>

        <!-- Lien vers Google Fonts pour Poppins -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Custom CSS (si besoin) -->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            @stack('styles')  <!-- Permet d'injecter les styles spécifiques -->
         
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <style>
            /* Appliquer Poppins à tout le site */
            body {
                font-family: 'Poppins', sans-serif;
            }

         #more{
            background-color: #8a1714 !important;
            text-align: center;
            align-items: center;
            display: flex;
            justify-content: center;

        }
        #plus{
            background-color: #8a1714 !important;

        }


      
         #titre{
            color: #fff;
            text-align: center;
         }
#trait{
   color: #8a1714 !important
}

         #Artistes{
            background-color: #8a1714 !important;
         }
         #artistes-p{
            color: #FFF !important;
         }
      
  .artist-img {
    border-radius: 50%;
    width: 300px; 
    height: 300px;
    object-fit: cover; 
    margin-bottom: 15px; 
}

.artist-name {
    font-size: 22px;
    font-weight: bold;
    color: #fff; 
}

.actualite-custom-card {
    border: none;
    background-color: #ffffff;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    overflow: hidden; 
}

.actualite-img-top {
    width: 100%; 
    height: 100%; 
    object-fit: cover; 
    border-radius: 15px; 
}

.actualite-custom-card:hover {
    transform: translateY(-10px); 
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.actualite-card-body {
    padding: 1.5rem;
}

.actualite-card-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 1rem;
}

.actualite-card-text {
    font-size: 1rem;
    color: #666;
    line-height: 1.5;
}

.btn-danger {
    background-color: #8a1714;
    border-color: #8a1714;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.btn-danger:hover {
    background-color:  #8a1714;
    border-color: #6c0e11;
}

.transition-all {
    transition: all 0.3s ease-in-out;
}

 

.navbar-nav .nav-item .nav-link.btn-outline-danger {
    color: #8a1714; /* Couleur initiale du texte */
    border-color: #8a1714; /* Couleur initiale de la bordure */
    padding: 10px 20px; /* Augmenter l'espacement du bouton */
    transition: all 0.3s ease; /* Transition pour un effet fluide */
}

.navbar-nav .nav-item .nav-link.btn-outline-danger:hover {
    color: #fff; /* Changer la couleur du texte en blanc au survol */
    background-color: #8a1714; /* Fond rouge au survol */
    border-color: #8a1714; /* Garde la même couleur pour la bordure */
}

.navbar-nav .nav-item:last-child {
    margin-left: 7rem; /* Pousser le bouton vers la droite */
}
/* Augmenter la graisse des éléments du menu */
.navbar-nav .nav-item .nav-link {
    font-weight: 600; /* Augmenter la graisse du texte des éléments du menu */
    letter-spacing: 1px; /* Ajouter un espacement entre les lettres pour plus de visibilité */
}

/* Ajouter un effet de survol plus marqué */
.navbar-nav .nav-item .nav-link:hover {
    font-weight: 700; /* Augmenter la graisse au survol */
}











/* Style Page oeuvre */


/* Style pour la page des oeuvres */
.page-title {
    font-weight: 700;
    color: #8a1714;
    font-size: 2.5rem;
    margin-top: 30px;
    margin-bottom: 20px;
}

.page-description {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 40px;
}

.oeuvre-card {
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.oeuvre-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.oeuvre-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-bottom: 2px solid #8a1714;
}

.oeuvre-card .card-body {
    padding: 15px;
}

.oeuvre-card .card-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: #8a1714;
    margin-bottom: 10px;
}

.oeuvre-card .card-text {
    font-size: 1rem;
    color: #666;
}

.oeuvre-card .btn-danger {
    background-color: #8a1714;
    border-color: #8a1714;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.oeuvre-card .btn-danger:hover {
    background-color: #6c0e11;
    border-color: #6c0e11;
}



#oeuvre{
    color: #000;
    
}

            /* Footer : fond avec la couleur #8a1714 et stylisation */
            footer {
                background-color: #8a1714; /* Fond avec la couleur demandée */
                color: #fff; /* Texte blanc */
                padding: 30px 0; /* Espacement intérieur */
                text-align: center;
                font-size: 16px; /* Taille de police */
                margin-top: 50px; /* Marge supérieure pour espacer du contenu */
            }

            footer p {
                margin: 0; /* Supprime la marge par défaut */
            }

            footer a {
                color: #f8d7da; /* Couleur rose pâle pour les liens */
                text-decoration: none;
            }

            footer a:hover {
                text-decoration: underline; /* Souligner les liens au survol */
            }

            /* Ajouter un effet de survol aux liens du menu */
            .navbar-nav .nav-item .nav-link:hover {
                color: #dc3545; /* Couleur rouge pour le survol */
            }


            /* Augmenter la graisse du titre */
#qui-sommes-nous-title {
    font-weight: 800; /* Plus gras pour le titre */
    letter-spacing: 1px; /* Espacement entre les lettres */
}








#titreP{
    padding-top: 25px;
    color: #fff;
    text-align: center;
}

#pic{
    display: flex;
    text-align: center;
align-items: center}

.btn-payer {
    background-color: #033D68;
    color: white;
    border: none;
    padding: 8px;
    text-decoration: none;
    border-radius: 8px
}

.btn-payer:hover {
    background-color: #022c4e;
    color: #FFF;
}

.numero{
    color: #8a1714;
    font-weight: 900;
}

#privacyModalLabel{
    color: #8a1714;
    font-weight: 700;
}

.card img:hover {
    transform: scale(1.05);
}

.btn-payer {
    background-color: #ff4d4d;
    color: white;
    font-weight: bold;
    border-radius: 8px;
    padding: 8px 16px;
    transition: background-color 0.3s ease;
}

.btn-payer:hover {
    background-color: #e60000;
}

.modal-content {
    border-radius: 20px;
}

.card {
    transition: transform 0.3s ease;
}
.card:hover {
    transform: translateY(-5px);
}


/* ====================== section les 26 oeuvres sur mobile ==================== */


@media (max-width: 768px) {
        #oeuvres-count {
            font-size: 2rem !important;
        }
    }

    @media (max-width: 576px) {
        #oeuvres-count {
            font-size: 1.6rem !important;
        }
    }




        </style>
    </head>
    
<body>

    <!-- Header commun -->
    <header class="navbar navbar-expand-lg navbar-light bg-white text-danger">
        <div class="container">
            <!-- Logo à gauche -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 150px;"> <!-- Remplacez par le chemin de votre logo -->
            </a>
            
            <!-- Bouton navbar-toggler pour mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu centré -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item me-3"><a class="nav-link" href="{{ url('/') }}">Accueil</a></li>
                    <li class="nav-item me-3"><a class="nav-link" href="{{ url('/oeuvres-restituees') }}">Oeuvres Restituées</a></li>
                    <li class="nav-item me-3"><a class="nav-link" href="{{ url('/oeuvres') }}">Oeuvres</a></li>
                    <li class="nav-item me-3"><a class="nav-link" href="{{ url('/artistes') }}">Artistes</a></li>
                    <li class="nav-item me-3"><a class="nav-link" href="{{ url('/a-propos') }}">À Propos</a></li>
                    <li class="nav-item me-3"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                    <!-- Bouton "Se connecter" dans le menu -->
                    <li class="nav-item ms-auto">
                        <a class="nav-link btn btn-outline-danger" href="{{ url('/login') }}">Se connecter</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </header>

    <!-- Contenu spécifique à chaque page -->
    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="footer-wave">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="#8a1714"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="#8a1714"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="#8a1714"></path>
            </svg>
        </div>
        
        <div class="footer-container">
            <!-- Section À propos -->
            <div class="footer-section">
                <div class="footer-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 150px;"> <!-- Remplacez par le chemin de votre logo -->
                </div>
                <p>Notre mission est d'apporter des solutions innovantes à nos clients. Nous nous engageons à fournir excellence, qualité et satisfaction.</p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
    
            <!-- Section Liens rapides -->
            <div class="footer-section">
                <h3>Navigation</h3>
                <ul>
                    <li><a href="{{ url('/') }}"><i class="fas fa-chevron-right"></i> Accueil</a></li>
                    <li><a href="{{ url('/oeuvres-restituees') }}"><i class="fas fa-chevron-right"></i> Oeuvres restituées</a></li>
                    <li><a href="{{ url('/oeuvres') }}"><i class="fas fa-chevron-right"></i> Oeuvres</a></li>
                    <li><a href="{{ url('/artistes') }}"><i class="fas fa-chevron-right"></i> Artistes</a></li>
                    <li><a href="{{ url('/a-propos') }}"><i class="fas fa-chevron-right"></i> A propos</a></li>
                    <li><a href="{{ url('/contact') }}"><i class="fas fa-chevron-right"></i> Contact</a></li>

                </ul>
            </div>
    
            <!-- Section Contact -->
            <div class="footer-section">
                <h3>Nous contacter</h3>
                <address>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Rue Exemple, Ville, Pays</p>
                    <p><i class="fas fa-phone-alt"></i> +123 456 7890</p>
                    <p><i class="fas fa-envelope"></i> contact@totchenou.com</p>
                    <p><i class="fas fa-clock"></i> Lun-Ven: 9h-18h</p>
                </address>
            </div>
    
            <!-- Section Newsletter -->
            <div class="footer-section">
                <h3>Newsletter</h3>
                <p>Abonnez-vous pour recevoir nos dernières actualités et offres exclusives.</p>
                <form class="newsletter-form">
                    <div class="input-group">
                        <input type="email" placeholder="Votre email" required>
                        <button type="submit" aria-label="S'abonner">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
                <div class="payment-methods">
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-paypal"></i>
                    <i class="fab fa-cc-stripe"></i>
                </div>
            </div>
        </div>
    
        <!-- Bas de footer -->
        <div class="footer-bottom">
            <div class="footer-container">
                <p>© {{ date('Y') }} <strong>TO TCHE NOU</strong> - Tous droits réservés.</p>
                <div class="legal-links">
                    <a href="{{ url('/privacy-policy') }}">Confidentialité</a>
                    <span>•</span>
                    <a href="{{ url('/terms-of-service') }}">CGU</a>
                    <span>•</span>
                    <a href="{{ url('/cookies') }}">Cookies</a>
                    <span>•</span>
                    <a href="{{ url('/sitemap') }}">Plan du site</a>
                </div>
            </div>
        </div>
        
        <button class="back-to-top" aria-label="Retour en haut">
            <i class="fas fa-arrow-up"></i>
        </button>
    </footer>
    
    <style>
         :root {
        --primary-color: #8a1714;
        --primary-dark: #6a1210;
        --secondary-color: #f8f9fa;
        --text-color: #333;
        --light-text: #f8f9fa;
        --dark-bg: #2c3e50;
        --darker-bg: #1a252f;
        --transition: all 0.3s ease;
    }
    
    .site-footer {
        background-color: var(--dark-bg);
        color: var(--light-text);
        position: relative;
        padding-top: 80px;
        font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
    }
    
    .footer-wave {
        position: absolute;
        top: -1px;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
    }
    
    .footer-wave svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 80px;
    }
    
    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 0 20px;
        gap: 30px;
        align-items: flex-start; /* Alignement en haut */
    }
    
    .footer-section {
        flex: 1;
        min-width: 220px;
        margin-bottom: 40px;
        padding-top: 20px; /* Compensation pour la vague */
    }
    
    .footer-logo img {
        max-width: 180px;
        height: auto;
        margin-bottom: 20px;
        filter: brightness(0) invert(1);
        margin-top: -10px; /* Ajustement fin de l'alignement */
    }
    
    .footer-section h3 {
    margin-top: 0;
    padding-top: 0;
}
    .footer-section h3::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 50px;
        height: 2px;
        background-color: var(--primary-color);
    }
        
        .footer-section h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: var(--primary-color);
        }
        
        .footer-section p, .footer-section address {
            font-size: 0.95rem;
            line-height: 1.7;
            margin-bottom: 20px;
            color: rgba(255, 255, 255, 0.8);
        }
        
        .footer-section address i {
            width: 20px;
            text-align: center;
            margin-right: 10px;
            color: var(--primary-color);
        }
        
        .footer-section ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-section ul li {
            margin-bottom: 12px;
            transition: var(--transition);
        }
        
        .footer-section ul li:hover {
            transform: translateX(5px);
        }
        
        .footer-section ul li a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .footer-section ul li a i {
            font-size: 0.7rem;
            color: var(--primary-color);
        }
        
        .footer-section ul li a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            transition: var(--transition);
        }
        
        .social-links a:hover {
            background-color: var(--primary-color);
            transform: translateY(-3px);
        }
        
        .newsletter-form {
            margin-top: 20px;
        }
        
        .input-group {
            display: flex;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .newsletter-form input {
            flex: 1;
            padding: 12px 20px;
            border: none;
            background-color: rgba(255, 255, 255, 0.9);
            font-size: 0.9rem;
        }
        
        .newsletter-form input:focus {
            outline: none;
            background-color: white;
        }
        
        .newsletter-form button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 0 20px;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .newsletter-form button:hover {
            background-color: var(--primary-dark);
        }
        
        .payment-methods {
            display: flex;
            gap: 15px;
            margin-top: 25px;
            font-size: 1.8rem;
            color: rgba(255, 255, 255, 0.7);
        }
        
        .footer-bottom {
            background-color: var(--darker-bg);
            padding: 20px 0;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .footer-bottom p {
            margin: 0;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
        }
        
        .footer-bottom strong {
            color: white;
            font-weight: 600;
        }
        
        .legal-links {
            margin-top: 15px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .legal-links a {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            font-size: 0.8rem;
            transition: var(--transition);
        }
        
        .legal-links a:hover {
            color: var(--primary-color);
        }
        
        .legal-links span {
            color: rgba(255, 255, 255, 0.3);
        }
        
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            z-index: 99;
        }
        
        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background-color: var(--primary-dark);
            transform: translateY(-5px);
        }
        
        @media (max-width: 992px) {
            .footer-section {
                min-width: 45%;
            }
        }
        
        @media (max-width: 768px) {
            .footer-section {
                min-width: 100%;
                text-align: center;
            }
            
            .footer-section h3::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .social-links, .legal-links {
                justify-content: center;
                color: #FFF;
            }
            
            .footer-section ul li {
                justify-content: center;
            }
        }
    </style>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
    
    <!-- AOS Animation -->
    <script>
        AOS.init({
            once: true,
            disable: false,
        });
    </script>
    
    <!-- Vos scripts personnalisés -->
    <script>
        // Bouton retour en haut
        document.addEventListener('DOMContentLoaded', function() {
            const backToTopButton = document.querySelector('.back-to-top');
            
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.add('visible');
                } else {
                    backToTopButton.classList.remove('visible');
                }
            });
            
            backToTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });

        function initMap() {
            var location = { lat: 48.8566, lng: 2.3522 };
            var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 14,
                center: location,
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: "Nous sommes ici !"
            });
        }
    </script>

    @yield('scripts')
</body>
</html>
