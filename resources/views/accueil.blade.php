@extends('layout.app')

@section('title', 'Accueil')

@section('content')
    <!-- Section Bannière -->
    <section class="banner" id="principal-banniere">
        <div class="container-fluid p-0">
<img src="{{ asset('images/banniere.png') }}" alt="" class="img-fluid w-100">
        </div>
    </section>

    
<!-- Section Qui sommes-nous ? -->
<section class="bg-white py-3 py-md-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-12 order-2 order-md-1">
                <h2 class="fw-bold text-dark mb-3 mb-md-4 display-5 mobile-title" id="grotesk-title">
                    Qui sommes-nous ?
                </h2>

                <p class="text-mobile text-lg text-muted mb-3 mb-md-4 px-2 px-md-0">
                    <strong class="text-danger">" To Tché Nou "</strong> est une plateforme dédiée à l'exposition des trésors royaux du Bénin, un site conçu pour faire rayonner au monde entier l'héritage culturel exceptionnel du pays.
                    <br><br class="d-none d-md-block">
                    À travers cette initiative, le site s'engage à <strong>valoriser et sauvegarder le patrimoine du Bénin</strong> en présentant ses trésors les plus précieux, témoins d'une histoire riche et fascinante.
                    <br><br class="d-none d-md-block">
                    Au-delà de la mise en valeur de ces trésors, <strong class="text-danger">To Tché Nou</strong> a pour objectif de <strong>donner une visibilité aux artistes béninois</strong>, en particulier les jeunes talents.
                </p>

                <div class="mb-4 mb-md-0 d-flex flex-wrap gap-2 gap-md-3">
                    <a href="{{ url('/a-propos') }}" class="btn btn-danger py-2 py-md-3 px-3 px-md-4 rounded mobile-btn" id="plus">
                        En savoir plus
                    </a>

                    <a href="{{ route('educatif.index') }}" class="btn btn-outline-danger py-2 py-md-3 px-3 px-md-4 rounded mobile-btn">
                        <i class="fas fa-graduation-cap me-2"></i>Espace Éducatif
                    </a>
                </div>
            </div>

            <!-- Colonne image -->
            <div class="col-md-6 col-12 order-1 order-md-2 mb-3 mb-md-0 text-center" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200">
                <img src="{{ asset('images/Trones.png') }}" alt="Exposition des Trésors Royaux" class="img-fluid rounded mobile-img" style="max-height: 400px;">
            </div>
        </div>
    </div>
</section>

        

    <!-- Section Œuvres Restituées - Version améliorée -->
    <section class="bg-dark text-white py-6 position-relative overflow-hidden">
        <div class="bg-pattern"></div>
        <div class="container position-relative">
            <div class="section-header text-center mb-5" data-aos="fade-down">
                <span class="section-subtitle text-danger">Trésors nationaux</span>
                <h2 class="section-title display-4 fw-bold mb-3">Œuvres Restituées</h2>
                <div class="title-divider bg-danger mx-auto"></div>
                <p class="lead mx-auto mt-4" style="max-width: 700px;">
                    Découvrez les trésors royaux du Bénin restitués grâce à cette initiative historique.
                </p>
            </div>

            <div class="row g-4">
                <!-- Oeuvre 1 -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="artwork-card h-100">
                        <div class="artwork-img-container">
                            <img src="{{ asset('images/piture1.png') }}" alt="Statue Béhanzin" class="artwork-img">
                            <div class="artwork-overlay d-flex align-items-center justify-content-center">
                                <a href="{{ url('/oeuvres-restituees') }}" class="btn btn-outline-light btn-sm">Voir détails</a>
                            </div>
                        </div>
                        <div class="artwork-body bg-gradient-dark">
                            <h5 class="artwork-title">Statue Anthropozoomorphe</h5>
                            <p class="artwork-subtitle">Représentant le Roi Béhanzin</p>
                            <div class="artwork-meta">
                                <span class="badge bg-danger">XIXe siècle</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Oeuvre 2 -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="artwork-card h-100">
                        <div class="artwork-img-container">
                            <img src="{{ asset('images/piture9.png') }}" alt="Statue Glèlè" class="artwork-img">
                            <div class="artwork-overlay d-flex align-items-center justify-content-center">
                                <a href="{{ url('/oeuvres-restituees') }}" class="btn btn-outline-light btn-sm">Voir détails</a>
                            </div>
                        </div>
                        <div class="artwork-body bg-gradient-dark">
                            <h5 class="artwork-title">Statue Anthropozoomorphe</h5>
                            <p class="artwork-subtitle">Représentant le Roi Glèlè</p>
                            <div class="artwork-meta">
                                <span class="badge bg-danger">XIXe siècle</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Oeuvre 3 -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="artwork-card h-100">
                        <div class="artwork-img-container">
                            <img src="{{ asset('images/piture10.png') }}" alt="Statue Anthropomorphe" class="artwork-img">
                            <div class="artwork-overlay d-flex align-items-center justify-content-center">
                                <a href="{{ url('/oeuvres-restituees') }}" class="btn btn-outline-light btn-sm">Voir détails</a>
                            </div>
                        </div>
                        <div class="artwork-body bg-gradient-dark">
                            <h5 class="artwork-title">Statue Anthropomorphe</h5>
                            <p class="artwork-subtitle">Art royal du Dahomey</p>
                            <div class="artwork-meta">
                                <span class="badge bg-danger">XIXe siècle</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="{{ url('/oeuvres-restituees') }}" class="btn btn-danger btn-lg px-4 py-3 rounded-pill">
                    Voir toutes les œuvres <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-4xl font-bold text-center text-dark mb-4" id="grotesk-title-2">Nos Œuvres</h2>
            <p class="text-lg text-center text-gray-600 mb-6">
                Découvrez nos magnifiques œuvres d'art béninoises, créées par des artistes talentueux, qui capturent l'essence et la richesse de notre culture.
            </p>
    
            <div class="row gy-4 justify-content-center">
                @foreach(range(1,6) as $i)
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-duration="{{ 1000 + $i * 500 }}" data-aos-delay="200">
                    <div class="card shadow-sm border-0 rounded-4 overflow-hidden transition transform hover:scale-105">
                        <img src="{{ asset('images/oeuvre' . $i . (in_array($i, [4,5]) ? '.jpg' : '.png')) }}"class="card-img-top custom-card-img" alt="Œuvre {{ $i }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center fw-bold mb-2">Œuvre {{ $i }}</h5>
                            <p class="card-text text-center text-muted small">
                                @if($i % 3 == 1)
                                Cette œuvre reflète la créativité et la culture béninoise.
                                @elseif($i % 3 == 2)
                                Cette œuvre représente un aspect particulier du patrimoine béninois.
                                @else
                                Une pièce incontournable de l'art béninois contemporain.
                                @endif
                            </p>
                            <div class="text-center mt-auto">
                                <a href="{{ url('/oeuvres') }}" class="btn btn-outline-danger rounded-pill px-4 mt-3">
                                    Voir plus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    

{{-- section artistes  --}}


<!-- Section Artistes - Carrousel amélioré -->
<section class="artist-section py-6 bg-white">
    <div class="container">
      <div class="section-header text-center mb-5" data-aos="fade-down">
        <span class="section-subtitle text-danger">Talents nationaux</span>
        <h2 class="section-title display-4 fw-bold mb-3">Nos Artistes</h2>
        <div class="title-divider bg-danger mx-auto"></div>
        <p class="lead mx-auto mt-4" style="max-width: 700px;">
          Rencontrez les artistes qui façonnent la scène culturelle béninoise contemporaine.
        </p>
      </div>
  
      <div class="artist-carousel-wrapper d-flex flex-wrap justify-content-center">
        @foreach([
            ['name' => 'Eulogee Glèlè', 'image' => 'eulogee.jpg'],
            ['name' => 'Kifouli Dossou', 'image' => 'kifouli.jpg'],
            ['name' => 'Marius Dansou', 'image' => 'maruis.jpg']
        ] as $artist)
          <div class="artist-card" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
            <div class="artist-img-wrapper">
              <img src="{{ asset('images/' . $artist['image']) }}" alt="{{ $artist['name'] }}" class="artist-img">
              <div class="artist-social">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fas fa-globe"></i></a>
              </div>
            </div>
            <div class="artist-info">
              <h5 class="artist-name">{{ $artist['name'] }}</h5>
              <p class="artist-specialty">Sculpture / Peinture</p>
                                  <a href="{{ url('/artistes') }}" class="btn btn-sm btn-outline-danger">Voir portfolio</a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
</section>
  





<!-- Section Actualités - Design moderne -->
<section class="news-section py-6 bg-light">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-down">
            <span class="section-subtitle text-danger">Événements</span>
            <h2 class="section-title display-4 fw-bold mb-3" id="grotesk-title3">Actualités.</h2>
            <div class="title-divider bg-danger mx-auto"></div>
            <p class="lead mx-auto mt-4" style="max-width: 700px;">
                Restez informés des dernières nouvelles concernant le patrimoine culturel béninois.
            </p>
        </div>

        <div class="row g-4">
            @foreach([
                ['Événement Culturel à Cotonou', 'two.jpg', 'Un événement majeur célébrant la culture béninoise', 'blog'],
                ['Retour des Trésors Royaux', 'blanc.jpg', 'Le Bénin célèbre la restitution de ses trésors', 'bloge'],
                ['Exposition d\'Art Contemporain', 'fondation.jpg', 'Œuvres novatrices de jeunes artistes', 'blog2']
            ] as $news)
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="news-card">
                    <div class="news-img-wrapper">
                        <img src="{{ asset('images/'.$news[1]) }}" alt="{{ $news[0] }}" class="news-img">
                        <div class="news-date">
                            <span class="news-day">15</span>
                            <span class="news-month">Nov</span>
                        </div>
                    </div>
                    <div class="news-body">
                        <div class="news-meta">
                            <span class="news-category text-danger">Événement</span>
                            <span class="news-comments"><i class="far fa-comment-alt"></i> 5</span>
                        </div>
                        <h5 class="news-title">{{ $news[0] }}</h5>
                        <p class="news-excerpt">{{ $news[2] }}</p>
                        <a href="{{ url('/'.$news[3]) }}" class="news-link">Lire la suite <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

 
    <!-- Section Newsletter -->
    <section class="newsletter-section py-6 bg-dark text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="zoom-in">
                    <h2 class="display-5 fw-bold mb-3">Restez connectés</h2>
                    <p class="lead mb-4">Abonnez-vous à notre newsletter pour recevoir les dernières actualités sur le patrimoine béninois.</p>
                    
                    <form class="newsletter-form">
                        <div class="input-group">
                            <input type="email" class="form-control form-control-lg" placeholder="Votre email">
                            <button class="btn btn-danger" type="submit">S'abonner</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

<!-- Chatbot Art Bénin -->
<div class="chatbot-wrapper">
    <div class="chatbot-container" id="chatbotContainer">
      <div class="chatbot-header bg-danger text-white">
        <div class="d-flex align-items-center">
          <div class="chatbot-avatar me-2">
            <i class="bi bi-robot"></i>
          </div>
          <div>
            <h5 class="mb-0">Assistant Virtuel</h5>
            <small>Prêt à vous aider</small>
          </div>
        </div>
        <button class="btn-close btn-close-white" id="closeChatbot"></button>
      </div>
      
      <div class="chatbot-body" id="chatMessages">
        <!-- Message de bienvenue initial -->
        <div class="chat-message bot-message">
          <div class="message-content">
            <p>Bonjour ! 👋 Je suis l'assistant de la plateforme d'art béninois. Voici ce que je peux vous expliquer :</p>
            <div class="quick-actions">
              <button class="btn btn-sm btn-outline-light quick-action" data-action="explorer">Explorer les œuvres</button>
              <button class="btn btn-sm btn-outline-light quick-action" data-action="acheter">Acheter une œuvre</button>
              <button class="btn btn-sm btn-outline-light quick-action" data-action="soumettre">Soumettre une œuvre</button>
            </div>
          </div>
        </div>
      </div>
      
      <div class="chatbot-footer">
        <div class="suggested-questions">
          <button class="btn btn-sm btn-outline-danger suggested-question" data-question="Quels modes de paiement acceptez-vous ?">Paiements</button>
          <button class="btn btn-sm btn-outline-danger suggested-question" data-question="Comment contacter un artiste ?">Contact artiste</button>
          <button class="btn btn-sm btn-outline-danger suggested-question" data-question="Quelles sont vos commissions ?">Commissions</button>
        </div>
        <div class="input-group">
          <input type="text" class="form-control" id="userInput" placeholder="Tapez votre message...">
          <button class="btn btn-danger" id="sendBtn">
            <i class="bi bi-send"></i>
          </button>
        </div>
      </div>
    </div>
    
    <button class="chatbot-launcher btn btn-danger rounded-circle shadow-lg" id="chatbotLauncher">
      <i class="bi bi-robot fs-4"></i>
      <span class="position-absolute top-0 start-100 translate-middle p-1 bg-warning border border-light rounded-circle">
        <span class="visually-hidden">Nouveau message</span>
      </span>
    </button>
  </div>
  
  <style>
  /* Style principal */
  .chatbot-wrapper {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 1050;
  }
  
  .chatbot-container {
    width: 380px;
    height: 550px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    transform: translateY(20px);
    opacity: 0;
    transition: all 0.3s ease;
    position: relative;
  }
  
  .chatbot-container.active {
    transform: translateY(0);
    opacity: 1;
  }
  
  .chatbot-header {
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
  }
  
  .chatbot-avatar {
    width: 40px;
    height: 40px;
    background-color: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
  }
  
  .chatbot-body {
    flex: 1;
    padding: 15px;
    overflow-y: auto;
    background-color: #f8f9fa;
    display: flex;
    flex-direction: column;
  }
  
  .chat-message {
    max-width: 85%;
    margin-bottom: 15px;
    padding: 12px 15px;
    border-radius: 18px;
    position: relative;
    animation: fadeIn 0.4s ease-out;
  }
  
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }
  
  .bot-message {
    align-self: flex-start;
    background: white;
    border: 1px solid #e9ecef;
    border-bottom-left-radius: 5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
  }
  
  .user-message {
    align-self: flex-end;
    background: #8A1714;
    color: white;
    border-bottom-right-radius: 5px;
  }
  
  .quick-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: 10px;
  }
  
  .quick-action {
    font-size: 0.8rem;
    padding: 6px 12px;
    border-radius: 20px;
    transition: all 0.2s;
    background: #8A1714;
    color: white !important;
  }
  
  .quick-action:hover {
    background: #8A1714 !important;
    color: white !important;
  }
  
  .chatbot-footer {
    padding: 15px;
    border-top: 1px solid #e9ecef;
    background: white;
  }
  
  .suggested-questions {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 12px;
  }
  
  .suggested-question {
    font-size: 0.75rem;
    padding: 5px 10px;
    border-radius: 15px;
  }
  
  .input-group input {
    border-right: none;
  }
  
  .input-group input:focus {
    box-shadow: none;
    border-color: #ced4da;
  }
  
  #sendBtn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  
  .chatbot-launcher {
    width: 60px;
    height: 60px;
    position: fixed;
    bottom: 30px;
    right: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1040;
    animation: pulse 2s infinite;
  }
  
  @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
  }
  
  /* Indicateur de saisie */
  .typing-indicator {
    display: inline-flex;
    padding: 10px 15px;
    background: white;
    border-radius: 18px;
    border: 1px solid #e9ecef;
    margin-bottom: 15px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
  }
  
  .typing-dot {
    width: 8px;
    height: 8px;
    background: #8A1714;
    border-radius: 50%;
    margin: 0 3px;
    animation: typingAnimation 1.4s infinite ease-in-out;
  }
  
  .typing-dot:nth-child(1) { animation-delay: 0s; }
  .typing-dot:nth-child(2) { animation-delay: 0.2s; }
  .typing-dot:nth-child(3) { animation-delay: 0.4s; }
  
  @keyframes typingAnimation {
    0%, 60%, 100% { transform: translateY(0); }
    30% { transform: translateY(-5px); }
  }
  
  /* Badge de notification */
  .chatbot-launcher .badge {
    width: 12px;
    height: 12px;
  }
  
  /* Responsive */
  @media (max-width: 576px) {
    .chatbot-wrapper {
      bottom: 15px;
      right: 15px;
    }
    
    .chatbot-container {
      width: 100vw;
      height: 100vh;
      border-radius: 0;
    }
    
    .chatbot-launcher {
      width: 50px;
      height: 50px;
      bottom: 15px;
      right: 15px;
    }
  }
  </style>
  
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // Éléments du DOM
    const chatbot = document.getElementById('chatbotContainer');
    const launcher = document.getElementById('chatbotLauncher');
    const closeBtn = document.getElementById('closeChatbot');
    const chatMessages = document.getElementById('chatMessages');
    const userInput = document.getElementById('userInput');
    const sendBtn = document.getElementById('sendBtn');
    
    // Base de connaissances avancée
    const knowledgeBase = {
      "explorer": {
        response: `Explorez notre collection avec ces options :<br><br>
                  🔍 <strong>Recherche avancée</strong> : Par artiste, style ou période<br>
                  🖼️ <strong>Galerie virtuelle</strong> : Visite 360° des expositions<br>
                  🏆 <strong>Œuvres phares</strong> : Sélection du conservateur<br><br>
                  <em>Essayez notre nouvelle fonction "Découverte aléatoire" !</em>`,
        quickReplies: [
          "Comment filtrer par artiste ?",
          "Où voir les nouvelles œuvres ?",
          "Comment fonctionne la visite virtuelle ?"
        ]
      },
      "acheter": {
        response: `Processus d'achat sécurisé :<br><br>
                  1️⃣ Sélectionnez l'œuvre<br>
                  2️⃣ Choisissez :<br>
                  - <i class="bi bi-phone"></i> Mobile Money (Moov/MTN/Orange)<br>
                  - <i class="bi bi-credit-card"></i> Carte bancaire<br>
                  3️⃣ Recevez sous 7 jours max<br><br>
                  <strong>Garantie satisfait ou remboursé 14 jours</strong>`,
        quickReplies: [
          "Puis-je payer en plusieurs fois ?",
          "Comment suivre ma commande ?",
          "Quelles garanties d'authenticité ?"
        ]
      },
      "soumettre": {
        response: `Pour les artistes béninois :<br><br>
                  📱 <strong>Via WhatsApp</strong> : Envoyez photos + description au +229 62 88 02 63<br>
                  ⏳ <strong>Validation</strong> : Sous 48h par notre comité<br>
                  🎨 <strong>Publication</strong> : Avec votre profil artiste<br><br>
                  <span class="text-danger">Gratuit pendant le lancement !</span>`,
        quickReplies: [
          "Quels formats d'images ?",
          "Quand serai-je payé ?",
          "Puis-je modifier une œuvre publiée ?"
        ]
      },
      "paiement": {
        response: `Nous acceptons :<br>
                  <div class="d-flex align-items-center my-2">
                    <i class="bi bi-phone-fill text-success me-2"></i>
                    <span>Mobile Money (MTN, Moov, Orange)</span>
                  </div>
                  <div class="d-flex align-items-center my-2">
                    <i class="bi bi-credit-card-fill text-primary me-2"></i>
                    <span>Cartes (Visa, Mastercard, UnionPay)</span>
                  </div>
                  <div class="d-flex align-items-center my-2">
                    <i class="bi bi-bank2 text-info me-2"></i>
                    <span>Virement bancaire (sur demande)</span>
                  </div>
                  <br><strong>Sécurité</strong> : Toutes les transactions sont cryptées avec FedaPay`,
        quickReplies: [
          "Que faire en cas d'échec de paiement ?",
          "Frais supplémentaires ?",
          "Paiement en devises ?"
        ]
      },
      "contact": {
        response: `Contactez nos services :<br><br>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-envelope-fill text-danger me-2"></i>
                    <span>contact@artbenin.bj</span>
                  </div>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-telephone-fill text-danger me-2"></i>
                    <span>+229 XX XX XX XX</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-whatsapp text-success me-2"></i>
                    <span>WhatsApp Business</span>
                  </div>
                  <br>Disponible du lundi au vendredi, 9h-18h`,
        quickReplies: [
          "Comment contacter un artiste ?",
          "Service client urgent",
          "Demande de partenariat"
        ]
      },
      "commission": {
        response: `Structure des frais :<br><br>
                  <table class="table table-sm">
                    <tr>
                      <td>Commission plateforme</td>
                      <td class="text-end">15%</td>
                    </tr>
                    <tr>
                      <td>Frais Mobile Money</td>
                      <td class="text-end">1%</td>
                    </tr>
                    <tr>
                      <td>Frais carte bancaire</td>
                      <td class="text-end">2%</td>
                    </tr>
                    <tr class="fw-bold">
                      <td>Total pour une œuvre à 100.000 FCFA</td>
                      <td class="text-end">~83.000 FCFA net</td>
                    </tr>
                  </table>`,
        quickReplies: [
          "Pourquoi ces commissions ?",
          "Frais pour l'acheteur ?",
          "Modification future des tarifs ?"
        ]
      }
    };
    
    // Gestion de l'ouverture/fermeture
    launcher.addEventListener('click', () => {
      chatbot.classList.add('active');
      launcher.style.display = 'none';
      scrollToBottom();
    });
    
    closeBtn.addEventListener('click', () => {
      chatbot.classList.remove('active');
      launcher.style.display = 'flex';
    });
    
    // Envoyer un message
    function sendMessage() {
      const message = userInput.value.trim();
      if (!message) return;
      
      addMessage(message, 'user');
      userInput.value = '';
      
      // Simuler un délai de réponse
      showTypingIndicator();
      
      setTimeout(() => {
        hideTypingIndicator();
        const response = generateResponse(message);
        addMessage(response.response, 'bot');
        
        if (response.quickReplies) {
          addQuickReplies(response.quickReplies);
        }
      }, 1500);
    }
    
    // Gestion des événements
    sendBtn.addEventListener('click', sendMessage);
    userInput.addEventListener('keypress', (e) => e.key === 'Enter' && sendMessage());
    
    // Actions rapides
    document.addEventListener('click', (e) => {
      // Questions suggérées
      if (e.target.classList.contains('suggested-question')) {
        userInput.value = e.target.getAttribute('data-question');
        sendMessage();
      }
      
      // Actions rapides
      if (e.target.classList.contains('quick-action')) {
        const action = e.target.getAttribute('data-action');
        showTypingIndicator();
        
        setTimeout(() => {
          hideTypingIndicator();
          const response = knowledgeBase[action];
          addMessage(response.response, 'bot');
          addQuickReplies(response.quickReplies);
        }, 1000);
      }
    });
    
    // Fonctions utilitaires
    function addMessage(content, sender) {
      const msgDiv = document.createElement('div');
      msgDiv.className = `chat-message ${sender}-message`;
      msgDiv.innerHTML = `<div class="message-content">${content}</div>`;
      chatMessages.appendChild(msgDiv);
      scrollToBottom();
    }
    
    function addQuickReplies(replies) {
      const lastMsg = chatMessages.lastElementChild;
      const contentDiv = lastMsg.querySelector('.message-content');
      
      const quickDiv = document.createElement('div');
      quickDiv.className = 'quick-actions mt-2';
      
      replies.forEach(reply => {
        const btn = document.createElement('button');
        btn.className = 'btn btn-sm btn-outline-danger quick-action';
        btn.textContent = reply;
        btn.setAttribute('data-question', reply);
        quickDiv.appendChild(btn);
      });
      
      contentDiv.appendChild(quickDiv);
      scrollToBottom();
    }
    
    function showTypingIndicator() {
      const typingDiv = document.createElement('div');
      typingDiv.className = 'typing-indicator';
      typingDiv.innerHTML = `
        <div class="typing-dot"></div>
        <div class="typing-dot"></div>
        <div class="typing-dot"></div>
      `;
      typingDiv.id = 'typingIndicator';
      chatMessages.appendChild(typingDiv);
      scrollToBottom();
    }
    
    function hideTypingIndicator() {
      const typing = document.getElementById('typingIndicator');
      if (typing) typing.remove();
    }
    
    function scrollToBottom() {
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }
    
    function generateResponse(message) {
      const msg = message.toLowerCase();
      
      if (msg.includes('explorer') || msg.includes('œuvre') || msg.includes('voir')) {
        return knowledgeBase.explorer;
      } else if (msg.includes('acheter') || msg.includes('commander') || msg.includes('achat')) {
        return knowledgeBase.acheter;
      } else if (msg.includes('soumettre') || msg.includes('proposer') || msg.includes('artiste')) {
        return knowledgeBase.soumettre;
      } else if (msg.includes('paiement') || msg.includes('payer') || msg.includes('feda')) {
        return knowledgeBase.paiement;
      } else if (msg.includes('contact') || msg.includes('appeler') || msg.includes('email')) {
        return knowledgeBase.contact;
      } else if (msg.includes('commission') || msg.includes('frais') || msg.includes('tarif')) {
        return knowledgeBase.commission;
      } else {
        return {
          response: `Je n'ai pas compris votre demande. Voici ce que je peux expliquer :<br><br>
                    <div class="d-flex flex-wrap gap-2">
                      <button class="btn btn-sm btn-outline-danger quick-action" data-action="explorer">Explorer</button>
                      <button class="btn btn-sm btn-outline-danger quick-action" data-action="acheter">Acheter</button>
                      <button class="btn btn-sm btn-outline-danger quick-action" data-action="soumettre">Soumettre</button>
                      <button class="btn btn-sm btn-outline-danger quick-action" data-action="paiement">Paiements</button>
                    </div>`,
          quickReplies: [
            "Comment créer un compte ?",
            "Où voir les événements ?",
            "Qui sont les artistes ?"
          ]
        };
      }
    }
    
    // Animation d'apparition progressive
    setTimeout(() => {
      launcher.style.transform = 'scale(1.2)';
      setTimeout(() => launcher.style.transform = 'scale(1)', 300);
    }, 3000);
  });
  </script>
    <!-- Styles personnalisés -->
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap');

        :root {
            --primary:  #bb2d3b;
            --primary-dark: #bb2d3b;
            --secondary: #1a1a2e;
            --accent: #B38A58;
            --light: #f8f9fa;
            --dark: #212529;
        }
        #grotesk-title {
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 700;
        letter-spacing: -0.5px;
        line-height: 1.1;
    }
/* Styles pour la section Qui sommes-nous en mobile */
@media (max-width: 400px) {
    .mobile-title {
        font-size: 1.5rem !important;
        margin-bottom: 0.8rem !important;
        line-height: 1.3;
        text-align: center;
    }
    
    .text-mobile {
        font-size: 0.85rem !important;
        line-height: 1.5;
        margin-bottom: 1rem !important;
        padding: 0 0.5rem !important;
        text-align: justify;
    }
    
    .mobile-btn {
        padding: 0.5rem 1rem !important;
        font-size: 0.8rem !important;
        flex: 1 0 100%;
        margin-bottom: 0.5rem;
    }
    
    .mobile-img {
        max-height: 200px !important;
        margin-bottom: 1rem;
    }
    
    .py-3 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }
    
    .gap-2 {
        gap: 0.5rem !important;
    }
}

@media (min-width: 401px) and (max-width: 768px) {
    .mobile-title {
        font-size: 2rem !important;
    }
    
    .text-mobile {
        font-size: 1rem !important;
    }
    
    
}
    #grotesk-title-2 {
        text-transform: uppercase;
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 900;
        letter-spacing: -0.5px;
        line-height: 1.1;
        font-size: 5rem
    }
        
    #grotesk-title3{
       
        text-transform: uppercase;
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 900;
        letter-spacing: -0.5px;
        line-height: 1.1;
        font-size: 3rem;
        color: #000;
    }
        
        /* Sections */
        .py-6 {
            padding-top: 5rem;
            padding-bottom: 5rem;
            
        }
        
        .section-header {
            position: relative;
        }
        
        .section-subtitle {
            display: inline-block;
            font-size: 1.1rem;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
        }
        
        .section-title {
            position: relative;
            color: var(--dark);
        }
        
        .title-divider {
            width: 80px;
            height: 3px;
            background: var(--primary);
            margin: 1rem auto;
        }
        
        /* Cartes œuvres */
        .artwork-card {
            border: none;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #2c3e50, #1a1a2e);
            color: white;
        }
        
        .artwork-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .artwork-img-container {
            position: relative;
            overflow: hidden;
            height: 300px;
        }
        
        .artwork-img {
    width: 100%;
    height: 100%;
    object-fit: contain;
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
        }
        
        .artwork-card:hover .artwork-overlay {
            opacity: 1;
        }
        
        .artwork-body {
            padding: 1.5rem;
        }
        
        .artwork-title {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }
        
        .artwork-subtitle {
            font-size: 0.9rem;
            opacity: 0.8;
            margin-bottom: 1rem;
            
        }
        
        /* Carrousel artistes */
        .artist-card {
            text-align: center;
            padding: 1.5rem;
            transition: all 0.3s ease;
        }
        
        .artist-img-wrapper {
            position: relative;
            width: 180px;
            height: 180px;
            margin: 0 auto 1.5rem;
        }
        
        .artist-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid var(--accent);
        }
        
        .artist-social {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            background: white;
            padding: 0.5rem;
            border-radius: 50px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .artist-card:hover .artist-social {
            opacity: 1;
            bottom: -15px;
        }
        
        .artist-social a {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            margin: 0 3px;
            transition: all 0.3s ease;
        }
        
        .artist-social a:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
        }
        
        /* Cartes actualités */
        .news-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .news-img-wrapper {
            position: relative;
            height: 200px;
            overflow: hidden;
        }
        
        .news-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .news-card:hover .news-img {
            transform: scale(1.1);
        }
        
        .news-date {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--primary);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            line-height: 1;
        }
        
        .news-day {
            font-size: 1.2rem;
            font-weight: bold;
        }
        
        .news-month {
            font-size: 0.7rem;
            text-transform: uppercase;
        }
        
        .news-body {
            padding: 1.5rem;
        }
        
        .news-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            font-size: 0.8rem;
        }
        
        .news-category {
            font-weight: bold;
        }
        
        .news-title {
            font-size: 1.1rem;
            margin-bottom: 0.75rem;
            color: var(--dark);
        }
        
        .news-excerpt {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        
        .news-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }
        
        .news-link:hover {
            color: var(--primary-dark);
        }
        
        .news-link i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }
        
        .news-link:hover i {
            transform: translateX(3px);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
          
            
            .section-title {
                font-size: 2.5rem;
            }
            
            .artwork-img-container {
                height: 250px;
            }
        }




        .custom-card-img {
    height: 200px; 
    object-fit: cover; 
}


        .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.1);
}
.btn-outline-danger:hover {
    background-color: #dc3545;
    color: white;
}
   /* Styles de base */
   .banner-container {
            height: 40vh;
            min-height: 200px;
        }

        /* Adaptation spécifique pour 0-400px */
        @media (max-width: 400px) {
            /* Bannière ultra compacte */
            .banner-container {
                height: 35vh;
                min-height: 150px;
                margin-bottom: 0.5rem;
            }

            /* Section Qui sommes-nous */
            .about-section {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .container {
                padding-left: 0.5rem;
                padding-right: 0.5rem;
            }

            /* Titre */
            .mobile-title {
                font-size: 1.5rem !important;
                margin-bottom: 0.5rem !important;
                line-height: 1.3;
            }

            /* Texte */
            .text-mobile {
                font-size: 0.85rem !important;
                line-height: 1.4;
                margin-bottom: 0.8rem !important;
                padding: 0 !important;
            }

            /* Bouton */
            .mobile-btn {
                padding: 0.5rem 1rem !important;
                font-size: 0.8rem;
            }

            /* Image */
            .mobile-img {
                max-height: 180px;
                margin-bottom: 0.5rem;
            }

            /* Ajustement global des marges */
            .mb-3, .mb-4, .mb-5 {
                margin-bottom: 0.5rem !important;
            }

            /* Espacement entre sections */
            section {
                margin-bottom: 0.5rem !important;
            }
        }

        /* Media Query pour 401-768px */
        @media (min-width: 401px) and (max-width: 768px) {
            .banner-container {
                height: 45vh;
                min-height: 250px;
            }
            /* ... autres styles intermédiaires ... */
        }
    </style>

    <!-- Scripts -->
    <script>
        
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });
            
            // Initialisation du carrousel Owl
            $('#artistCarousel').owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                dots: false,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });
        });



        var myCarousel = document.querySelector('#carouselExampleControls');
  var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 3000, // 3000ms = 3 secondes
    ride: 'carousel'
  });
    </script>
@endsection