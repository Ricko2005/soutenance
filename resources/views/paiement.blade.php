@extends('layout.app')

@section('title', 'Paiement Sécurisé')

@section('content')
<div class="premium-payment-page">
    <!-- Hero Section -->
    <div class="payment-hero">
        <div class="hero-overlay"></div>
        <div class="container position-relative z-index-2">
            <div class="hero-content text-center text-white py-5">
                <h1 class="hero-title display-4 fw-bold mb-3">
                    Finalisez Votre Acquisition
                </h1>
                <div class="progress-steps">
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
            <!-- Artwork Preview -->
            <div class="col-lg-5">
                <div class="artwork-preview-container">
                    <div class="artwork-frame">
                        <div class="artwork-matte">
                            <img src="{{ asset('storage/' . $oeuvre->image) }}" 
                                 alt="{{ $oeuvre->titre }}" 
                                 class="artwork-image">
                        </div>
                    </div>
                    
                    <div class="artwork-details mt-4">
                        <h2 class="artwork-title fw-bold">{{ $oeuvre->titre }}</h2>
                        <div class="artist-badge">
                            <i class="bi bi-person-circle me-2"></i>
                            <span>{{ $oeuvre->auteur }}</span>
                        </div>
                        
                        <div class="price-display mt-3">
                            <div class="current-price">
                                <span class="text-muted">Prix :</span>
                                <span class="text-danger fw-bold">{{ number_format($oeuvre->prix, 0, ',', ' ') }} FCFA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Form -->
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
                    
                    <form id="paymentForm" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" name="oeuvre_id" value="{{ $oeuvre->id }}">
                        <input type="hidden" name="amount" value="{{ $oeuvre->prix }}">
                        
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
                                <div class="invalid-feedback">Veuillez entrer une adresse email valide</div>
                            </div>
                            
                            <div class="mt-3">
                                <label class="form-label">Numéro de Téléphone</label>
                                <div class="input-group">
                                    <select class="form-select" id="indicatif" name="indicatif" style="max-width: 160px;" required>
                                        <option value="+229">🇧🇯 +229</option>
                                        <option value="+225">🇨🇮 +225</option>
                                        <option value="+226">🇧🇫 +226</option>
                                    </select>
                                    <input type="text" 
                                           class="form-control rounded-end" 
                                           id="telephone" 
                                           name="telephone" 
                                           placeholder="96959595" 
                                           pattern="[0-9]{8}" 
                                           required>
                                    <div class="invalid-feedback">Veuillez entrer un numéro valide (8 chiffres)</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section mt-4">
                            <h4 class="section-title">Méthode de Paiement</h4>
                            <div class="payment-method-selector bg-light p-4 rounded-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" 
                                           id="mobileMoney" value="mobile_money" checked>
                                    <label class="form-check-label fw-medium" for="mobileMoney">
                                        <i class="bi bi-phone-fill me-2 text-primary"></i> Paiement Mobile Money via FedaPay
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-check mt-4 ps-5">
                            <input class="form-check-input" type="checkbox" value="" id="acceptPrivacyPolicy" required>
                            <label class="form-check-label" for="acceptPrivacyPolicy">
                                J'accepte les <a href="#" data-bs-toggle="modal" data-bs-target="#cgvModal">conditions générales de vente</a>
                            </label>
                        </div>
                        
                        <button type="button" id="initiatePaymentBtn" class="btn btn-payment btn-lg w-100 mt-4 py-3" disabled>
                            <span class="payment-btn-content">
                                <span class="payment-btn-text">Payer {{ number_format($oeuvre->prix, 0, ',', ' ') }} FCFA</span>
                            </span>
                            <i class="bi bi-lock-fill ms-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal CGV -->
<div class="modal fade" id="cgvModal" tabindex="-1" aria-labelledby="cgvModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cgvModalLabel">Conditions Générales de Vente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<style>
    .premium-payment-page {
        background-color: #f9f9f9;
        min-height: 100vh;
    }
    
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
    
    .step.active .step-number {
        background: white;
        color: #682825;
        border-color: white;
    }
    
    .artwork-frame {
        position: relative;
        padding: 2rem;
        background: white;
        border-radius: 12px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }
    
    .artwork-image {
        width: 100%;
        height: auto;
        max-height: 400px;
        object-fit: contain;
        border-radius: 4px;
    }
    
    .payment-form-container {
        background: white;
        border-radius: 12px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        padding: 2.5rem;
    }
    
    .btn-payment {
        background: linear-gradient(135deg, #8A1714 0%, #682825 100%);
        color: white;
        border: none;
        border-radius: 12px;
        font-weight: bold;
        transition: all 0.3s ease;
    }
    
    .btn-payment:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .btn-payment:disabled {
        opacity: 0.7;
        background: #6c757d !important;
        transform: none;
        box-shadow: none;
    }
    
    .invalid-feedback {
        display: none;
        color: #dc3545;
    }
    
    .was-validated .form-control:invalid ~ .invalid-feedback,
    .was-validated .form-control:invalid ~ .invalid-feedback {
        display: block;
    }
</style>

@endsection

@section('scripts')
@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('paymentForm');
        const payBtn = document.getElementById('initiatePaymentBtn');
        const cgvCheckbox = document.getElementById('acceptPrivacyPolicy');

        // Activer/désactiver le bouton
        cgvCheckbox.addEventListener('change', function() {
            payBtn.disabled = !this.checked;
        });

        // Soumission du formulaire
        payBtn.addEventListener('click', async function() {
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }

         // Par ceci :
const phoneNumber = document.getElementById('telephone').value.replace(/\D/g,'');
const phonePrefix = document.getElementById('indicatif').value;

const formData = {
    oeuvre_id: form.oeuvre_id.value,
    amount: form.amount.value,
    nom: form.nom.value,
    prenom: form.prenom.value,
    email: form.email.value,
    phone: phonePrefix + phoneNumber,
    payment_method: 'mobile_money'
};

            // Afficher le loader
            payBtn.innerHTML = `
                <span class="spinner-border spinner-border-sm me-2"></span>
                Traitement en cours...
            `;
            payBtn.disabled = true;

            try {
                const response = await fetch('{{ route("paiement.initier") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(formData)
                });

                const data = await response.json();

                if (!response.ok) throw new Error(data.message || 'Erreur de paiement');
                if (!data.success) throw new Error(data.message || 'Erreur inconnue');

                window.location.href = data.payment_url;

            } catch (error) {
                showError(error.message);
                payBtn.innerHTML = `Payer ${form.amount.value} FCFA`;
                payBtn.disabled = false;
            }
        });

        function showError(message) {
            const toast = `
                <div class="toast show position-fixed bottom-0 end-0 m-3" style="z-index: 9999">
                    <div class="toast-header bg-danger text-white">
                        <strong class="me-auto">Erreur</strong>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
                    </div>
                    <div class="toast-body">
                        ${message}
                    </div>
                </div>
            `;
            document.body.insertAdjacentHTML('beforeend', toast);
        }
    });
</script>
@endsection
@endsection