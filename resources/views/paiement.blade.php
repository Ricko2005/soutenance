@extends('layout.app')

@section('title', 'Paiement Sécurisé')

@section('content')
@php

@endphp

<div class="premium-payment-page">
    <!-- Animated Background -->
    <div class="payment-hero">
        <div class="hero-overlay"></div>
        <div class="particles-container">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
        
        <div class="container position-relative z-index-2">
            <div class="hero-content text-center text-white py-5">
                <h1 class="hero-title display-4 fw-bold mb-3 animate__animated animate__fadeInDown">
                    Finalisez Votre Acquisition
                </h1>
                <div class="progress-steps animate__animated animate__fadeIn animate__delay-1s">
                    <div class="step completed">
                        <span class="step-number">1</span>
                        <span class="step-text">Sélection</span>
                    </div>
                    <div class="step active">
                        <span class="step-number">2</span>
                        <span class="step-text">Paiement</span>
                    </div>
                    <div class="step">
                        <span class="step-number">3</span>
                        <span class="step-text">Confirmation</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-5">
            <!-- Artwork Preview - Colonne gauche -->
            <div class="col-lg-5">
                <div class="artwork-preview-container">
                    <div class="artwork-frame">
                        <div class="artwork-matte">
                            <img src="{{ asset('storage/' . $oeuvre->image) }}" 
                                 alt="{{ $oeuvre->titre }}" 
                                 class="artwork-image animate__animated animate__zoomIn">
                        </div>
                        <div class="frame-decoration"></div>
                    </div>
                    
                    <div class="artwork-details mt-4">
                        <h2 class="artwork-title fw-bold">{{ $oeuvre->titre }}</h2>
                        <div class="artist-badge">
                            <i class="bi bi-person-circle me-2"></i>
                            <span>{{ $oeuvre->auteur }}</span>
                        </div>
                        
                        <div class="price-display mt-3">
                            <div class="original-price">
                                <span class="text-muted">Valeur estimée:</span>
                                <span>{{ number_format($oeuvre->prix * 1.2, 0, ',', ' ') }} FCFA</span>
                            </div>
                            <div class="current-price">
                                <span class="text-muted">Prix spécial:</span>
                                <span class="text-danger fw-bold">{{ number_format($oeuvre->prix, 0, ',', ' ') }} FCFA</span>
                            </div>
                        </div>
                        
                        <div class="artwork-description mt-3">
                            <p>{{ $oeuvre->description }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Form - Colonne droite -->
            <div class="col-lg-7">
                <div class="payment-form-container">
                    <div class="form-header">
                        <h3 class="form-title">
                            <i class="bi bi-credit-card-2-back-fill me-2"></i>
                            <span class="gradient-text">Informations de Paiement</span>
                        </h3>
                        <div class="secure-badge">
                            <i class="bi bi-lock-fill me-1"></i>
                            <span>Transaction sécurisée</span>
                        </div>
                    </div>
                    
                    <form method="POST" action="" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" name="oeuvre_id" value="{{ $oeuvre->id }}">
                        
                        <div class="form-section">
                            <h4 class="section-title">Informations Personnelles</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nom" name="nom" placeholder=" " required>
                                        <label for="nom">Nom</label>
                                        <div class="invalid-feedback">Veuillez entrer votre nom</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder=" " required>
                                        <label for="prenom">Prénom</label>
                                        <div class="invalid-feedback">Veuillez entrer votre prénom</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-floating mt-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder=" " required>
                                <label for="email">Adresse Email</label>
                                <div class="invalid-feedback">Veuillez entrer un email valide</div>
                            </div>
                            
                            <div class="mt-3">
                                <label class="form-label">Numéro de Téléphone</label>
                                <div class="input-group">
                                    <select class="form-select" id="indicatif" name="indicatif" style="max-width: 160px;" required>
                                        <option value="+229">🇧🇯 +229</option>
                                        <option value="+233">🇬🇭 +233</option>
                                        <option value="+225">CI +225</option>
                                        <option value="+226">🇧🇫 +226</option>
                                        <option value="+223">🇲🇱 +223</option>
                                    </select>
                                    <div class="form-floating flex-grow-1">
                                        <input type="text" class="form-control rounded-end" id="telephone" name="telephone" placeholder=" " required>
                                        <label for="telephone">Numéro</label>
                                    </div>
                                </div>
                                <div id="telephone-error" class="text-danger mt-2" style="display: none;">
                                    <i class="bi bi-exclamation-circle me-1"></i>Format incorrect pour ce pays
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section mt-4">
                            <h4 class="section-title">Adresse de Livraison</h4>
                            <div class="form-floating">
                                <textarea class="form-control" id="adresse" name="adresse" placeholder=" " style="height: 100px" required></textarea>
                                <label for="adresse">Adresse Complète</label>
                                <div class="invalid-feedback">Veuillez entrer votre adresse</div>
                            </div>
                        </div>
                        
                        <div class="form-section mt-4">
                            <h4 class="section-title">Détails de la Commande</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="quantite" name="quantite" min="1" value="1" required>
                                        <label for="quantite">Quantité</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-light" id="prix_total" name="prix_total" 
                                               value="{{ number_format($oeuvre['prix'], 0, ',', ' ') }} FCFA" readonly>
                                        <label for="prix_total">Total à Payer</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-check mt-4 ps-5">
                            <input class="form-check-input" type="checkbox" value="" id="acceptPrivacyPolicy" required>
                            <label class="form-check-label" for="acceptPrivacyPolicy">
                                J'accepte les <a href="#" class="text-decoration-none fw-bold" data-bs-toggle="modal" data-bs-target="#privacyModal">conditions générales</a> de vente
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-payment btn-lg w-100 mt-4 py-3" id="confirmPaymentBtn" disabled>
                            <span class="payment-btn-content">
                                <span class="payment-btn-text">Confirmer le Paiement</span>
                                <span class="payment-btn-price">{{ number_format($oeuvre['prix'], 0, ',', ' ') }} FCFA</span>
                            </span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                        
                        <div class="payment-methods mt-3 text-center">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/visa/visa-original.svg" alt="Visa" width="40">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mastercard/mastercard-original.svg" alt="Mastercard" width="40">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/paypal/paypal-original.svg" alt="PayPal" width="40">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Logo_mobile_money.svg/1200px-Logo_mobile_money.svg.png" alt="Mobile Money" width="40">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Conditions -->
<div class="modal fade" id="privacyModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header bg-gradient-primary text-white">
                <h5 class="modal-title fw-bold">
                    <i class="bi bi-shield-lock-fill me-2"></i>
                    Conditions Générales & Politique de Confidentialité
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="privacy-content">
                    <!-- Contenu amélioré avec onglets -->
                    <ul class="nav nav-tabs mb-4" id="privacyTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="conditions-tab" data-bs-toggle="tab" data-bs-target="#conditions" type="button" role="tab">Conditions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="privacy-tab" data-bs-toggle="tab" data-bs-target="#privacy" type="button" role="tab">Confidentialité</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="shipping-tab" data-bs-toggle="tab" data-bs-target="#shipping" type="button" role="tab">Livraison</button>
                        </li>
                    </ul>
                    
                    <div class="tab-content" id="privacyTabContent">
                        <div class="tab-pane fade show active" id="conditions" role="tabpanel">
                            <h6 class="fw-bold text-primary">1. Engagement d'achat</h6>
                            <p>En confirmant votre commande, vous vous engagez à acquérir l'œuvre sélectionnée. Les transactions sont définitives sauf en cas de force majeure.</p>
                            
                            <h6 class="fw-bold text-primary mt-4">2. Authenticité</h6>
                            <p>Toutes nos œuvres sont accompagnées d'un certificat d'authenticité signé par l'artiste et notre galerie.</p>
                            
                            <h6 class="fw-bold text-primary mt-4">3. Droit de rétractation</h6>
                            <p>Conformément à la législation, vous disposez de 14 jours pour exercer votre droit de rétractation après réception.</p>
                        </div>
                        
                        <div class="tab-pane fade" id="privacy" role="tabpanel">
                            <h6 class="fw-bold text-primary">1. Protection des données</h6>
                            <p>Vos informations sont cryptées et stockées de manière sécurisée conformément au RGPD.</p>
                            
                            <h6 class="fw-bold text-primary mt-4">2. Utilisation des données</h6>
                            <p>Nous utilisons vos données uniquement pour traiter votre commande et vous informer des œuvres similaires.</p>
                            
                            <h6 class="fw-bold text-primary mt-4">3. Partage des données</h6>
                            <p>Vos données ne sont jamais vendues et ne sont partagées qu'avec nos prestataires de paiement et de livraison.</p>
                        </div>
                        
                        <div class="tab-pane fade" id="shipping" role="tabpanel">
                            <h6 class="fw-bold text-primary">1. Emballage</h6>
                            <p>Toutes les œuvres sont emballées professionnellement avec protection renforcée pour le transport.</p>
                            
                            <h6 class="fw-bold text-primary mt-4">2. Délais</h6>
                            <p>Livraison sous 7-15 jours ouvrables en Afrique de l'Ouest, 15-30 jours pour les autres destinations.</p>
                            
                            <h6 class="fw-bold text-primary mt-4">3. Assurance</h6>
                            <p>Tous les envois sont assurés à 150% de la valeur de l'œuvre pendant le transport.</p>
                        </div>
                    </div>
                    
                    <div class="contact-card mt-4 p-4 rounded-3 bg-light">
                        <div class="d-flex align-items-center">
                            <div class="contact-icon me-3">
                                <i class="bi bi-headset fs-2 text-primary"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Assistance Clientèle</h6>
                                <p class="mb-1"><i class="bi bi-envelope me-2"></i> contact@galerie-art.com</p>
                                <p class="mb-0"><i class="bi bi-telephone me-2"></i> +229 01 62 88 02 63</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-primary rounded-pill px-4" data-bs-dismiss="modal">
                    <i class="bi bi-check-circle me-2"></i>J'accepte les conditions
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Animation Keyframes */
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }
    
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    
    @keyframes particle-move {
        0% { transform: translateY(0) rotate(0deg); opacity: 1; }
        100% { transform: translateY(-1000px) rotate(720deg); opacity: 0; }
    }
    
    /* Base Styles */
    .premium-payment-page {
        background-color: #f9f9f9;
        min-height: 100vh;
    }
    
    /* Hero Section */
    .payment-hero {
        position: relative;
        height: 300px;
        background: linear-gradient(135deg, #5c1000 0%, #cd1111 100%);
        overflow: hidden;
    }
    
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3);
    }
    
    .hero-title {
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }
    
    /* Progress Steps */
    .progress-steps {
        display: flex;
        justify-content: center;
        margin-top: 2rem;
    }
    
    .step {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        padding: 0 2rem;
    }
    
    .step-number {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-bottom: 0.5rem;
        border: 2px solid rgba(255, 255, 255, 0.3);
    }
    
    .step-text {
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9rem;
    }
    
    .step.active .step-number {
        background: white;
        color: #682825;
        border-color: white;
        animation: pulse 2s infinite;
    }
    
    .step.completed .step-number {
        background: #130847;
        color: white;
        border-color: #130847;
    }
    
    .step.active .step-text {
        color: white;
        font-weight: bold;
    }
    
    /* Artwork Preview */
    .artwork-preview-container {
        position: sticky;
        top: 20px;
    }
    
    .artwork-frame {
        position: relative;
        padding: 2rem;
        background: white;
        border-radius: 12px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        transform-style: preserve-3d;
        perspective: 1000px;
    }
    
    .artwork-matte {
        padding: 1.5rem;
        background: #f8f9fa;
        border-radius: 8px;
        box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.05);
    }
    
    .artwork-image {
        width: 100%;
        height: auto;
        max-height: 400px;
        object-fit: contain;
        border-radius: 4px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.5s ease;
    }
    
    .artwork-frame:hover .artwork-image {
        transform: scale(1.02);
    }
    
    .frame-decoration {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 2px solid rgba(106, 17, 203, 0.1);
        border-radius: 12px;
        pointer-events: none;
    }
    
    .artwork-title {
        font-size: 1.8rem;
        color: #343a40;
        margin-bottom: 0.5rem;
    }
    
    .artist-badge {
        display: inline-block;
        background: rgba(106, 17, 203, 0.1);
        color:  #8A1714;
        padding: 0.5rem 1rem;
        border-radius: 50px;
        font-weight: 500;
    }
    
    .price-display {
        background: white;
        padding: 1rem;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }
    
    .original-price {
        text-decoration: line-through;
        color: #6c757d;
    }
    
    .current-price {
        font-size: 1.5rem;
        margin-top: 0.5rem;
    }
    
    /* Payment Form */
    .payment-form-container {
        background: white;
        border-radius: 12px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        padding: 2.5rem;
        position: relative;
        overflow: hidden;
    }
    
    .payment-form-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, #8A1714, #682825);
    }
    
    .form-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
    }
    
    .form-title {
        font-size: 1.8rem;
        color: #343a40;
        margin: 0;
    }
    
    .gradient-text {
        background: linear-gradient(90deg,  #8A1714, #682825);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
    
    .secure-badge {
        background: rgba(40, 167, 69, 0.1);
        color: #28a745;
        padding: 0.5rem 1rem;
        border-radius: 50px;
        font-size: 0.9rem;
    }
    
    .form-section {
        margin-bottom: 1.5rem;
    }
    
    .section-title {
        font-size: 1.2rem;
        color:  #8A1714;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 1px solid #eee;
    }
    
    .form-floating label {
        color: #6c757d;
    }
    
    .form-control, .form-select {
        border-radius: 8px;
        padding: 1rem;
        border: 1px solid #e0e0e0;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: #8A1714;
        box-shadow: 0 0 0 0.25rem rgba(106, 17, 203, 0.1);
    }
    
    /* Payment Button */
    .btn-payment {
        background: linear-gradient(135deg,  #8A1714 0%,  #682825 100%);
        color: white;
        border: none;
        border-radius: 12px;
        font-weight: bold;
        letter-spacing: 0.5px;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    
    .btn-payment:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(106, 17, 203, 0.2);
    }
    
    .btn-payment:disabled {
        background: #FFF;
        transform: none;
        box-shadow: none;
    }
    
    .payment-btn-content {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }
    
    .payment-btn-text {
        text-align: left;
    }
    
    .payment-btn-price {
        font-weight: bold;
    }
    
    /* Payment Methods */
    .payment-methods {
        display: flex;
        justify-content: center;
        gap: 15px;
    }
    
    .payment-methods img {
        opacity: 0.7;
        transition: all 0.3s ease;
    }
    
    .payment-methods img:hover {
        opacity: 1;
        transform: translateY(-3px);
    }
    
    /* Modal */
    .bg-gradient-primary {
        background: linear-gradient(135deg,  #8A1714 0%,  #8A1714 100%);
    }
    
    .nav-tabs .nav-link {
        color: #6c757d;
        border: none;
        padding: 0.75rem 1.5rem;
    }
    
    .nav-tabs .nav-link.active {
        color: #8A1714;
        font-weight: bold;
        border-bottom: 3px solid  #8A1714;
        background: transparent;
    }
    
    .contact-card {
        border-left: 4px solid  #8A1714;
    }
    
    /* Particles */
    .particles-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 1;
    }
    
    .particle {
        position: absolute;
        bottom: -150px;
        background: rgba(255, 255, 255, 0.2);
        animation: particle-move linear infinite;
    }
    
    .particle:nth-child(1) {
        width: 15px;
        height: 15px;
        left: 5%;
        animation-duration: 15s;
        animation-delay: 0s;
    }
    
    .particle:nth-child(2) {
        width: 10px;
        height: 10px;
        left: 15%;
        animation-duration: 20s;
        animation-delay: 2s;
    }
    
    .particle:nth-child(3) {
        width: 8px;
        height: 8px;
        left: 30%;
        animation-duration: 25s;
        animation-delay: 4s;
    }
    
    .particle:nth-child(4) {
        width: 12px;
        height: 12px;
        left: 60%;
        animation-duration: 18s;
        animation-delay: 1s;
    }
    
    .particle:nth-child(5) {
        width: 6px;
        height: 6px;
        left: 80%;
        animation-duration: 22s;
        animation-delay: 3s;
    }
    
    /* Responsive */
    @media (max-width: 992px) {
        .artwork-preview-container {
            position: static;
            margin-bottom: 3rem;
        }
        
        .hero-title {
            font-size: 2.5rem;
        }
    }
    
    @media (max-width: 768px) {
        .payment-hero {
            height: 250px;
        }
        
        .hero-title {
            font-size: 2rem;
        }
        
        .payment-form-container {
            padding: 1.5rem;
        }
        
        .form-title {
            font-size: 1.5rem;
        }
    }
</style>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Activer le bouton de paiement seulement si la case est cochée
        const checkbox = document.getElementById('acceptPrivacyPolicy');
        const confirmBtn = document.getElementById('confirmPaymentBtn');

        checkbox.addEventListener('change', function () {
            confirmBtn.disabled = !this.checked;
        });

        // Recalcul automatique du prix
        document.getElementById('quantite').addEventListener('input', function () {
            let quantite = parseInt(this.value) || 1;
            let prixUnitaire = {{ $oeuvre['prix'] }};
            let prixTotal = quantite * prixUnitaire;
            document.getElementById('prix_total').value = prixTotal.toLocaleString('fr-FR') + ' FCFA';
            document.querySelector('.payment-btn-price').textContent = prixTotal.toLocaleString('fr-FR') + ' FCFA';
        });

        // Validation téléphone
        document.getElementById('telephone').addEventListener('input', function () {
            validatePhoneNumber();
        });
        
        document.getElementById('indicatif').addEventListener('change', function () {
            validatePhoneNumber();
        });

        function validatePhoneNumber() {
            let indicatif = document.getElementById('indicatif').value;
            let telephone = document.getElementById('telephone').value;
            let errorMessage = document.getElementById('telephone-error');

            let regex;
            switch (indicatif) {
                case '+225': regex = /^[0-9]{8,10}$/; break; // Côte d'Ivoire
                case '+233': regex = /^[0-9]{9}$/; break; // Ghana
                case '+229': regex = /^[0-9]{8}$/; break; // Bénin
                case '+226': regex = /^[0-9]{8}$/; break; // Burkina Faso
                case '+223': regex = /^[0-9]{8}$/; break; // Mali
                default: regex = /^[0-9]+$/;
            }

            if (!regex.test(telephone)) {
                errorMessage.style.display = 'block';
                document.getElementById('telephone').classList.add('is-invalid');
            } else {
                errorMessage.style.display = 'none';
                document.getElementById('telephone').classList.remove('is-invalid');
            }
        }

        // Validation Bootstrap
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
        
        // Animation au chargement
        setTimeout(() => {
            document.querySelector('.artwork-image').classList.add('animate__zoomIn');
        }, 300);
    });
</script>
@endsection