@extends('layouts.app')

@section('content')
<!-- En-tête Royal -->
<div class="royal-header">
    <div class="container">
        <div class="header-content">
            <div class="user-info">
                <div class="avatar-container">
                    <img src="{{ Auth::user()->avatar ?? asset('images/royal-avatar.png') }}" 
                         alt="Avatar" class="royal-avatar">
                </div>
                <div class="user-details">
                    <h3 class="royal-title">{{ Auth::user()->name }}</h3>
                    <p class="royal-subtitle">Conservateur des Trésors Royaux</p>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="royal-logout-btn">
                    <i class="fas fa-sign-out-alt"></i> Déconnexion
                </button>
            </form>
        </div>
    </div>
</div>

<div class="container royal-container">
    <!-- Notifications -->
    @if(session('success'))
    <div class="royal-alert alert alert-success">
        <div class="alert-content">
            <i class="fas fa-check-circle alert-icon"></i>
            <div>
                <h5>Succès Royal!</h5>
                <p>{{ session('success') }}</p>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <!-- Formulaire d'ajout -->
    <div class="royal-form-card">
        <div class="card-header">
            <i class="fas fa-plus-circle header-icon"></i>
            <h3>Enregistrer un Nouveau Trésor</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('home.store.oeuvre') }}" method="POST" enctype="multipart/form-data" id="oeuvreForm">
                @csrf
                <div class="form-grid">
                    <div class="form-group">
                        <label class="royal-label">Titre du Trésor*</label>
                        <input type="text" name="titre" class="royal-input" required>
                    </div>
                    <div class="form-group">
                        <label class="royal-label">Artiste Royal*</label>
                        <input type="text" name="auteur" class="royal-input" required>
                    </div>
                    <div class="form-group">
                        <label class="royal-label">Valeur (FCFA)*</label>
                        <div class="input-with-icon">
                            <span class="input-icon"></span>
                            <input type="number" name="prix" class="royal-input" step="0.01" min="0" required>
                        </div>
                    </div>
                    <div class="form-group full-width">
                        <label class="royal-label">Histoire du Trésor</label>
                        <textarea name="description" class="royal-textarea" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="royal-label">Portrait du Trésor</label>
                        <div class="file-upload">
                            <input type="file" name="image" id="imageUpload" accept="image/*">
                            <div class="file-hint" id="fileHint">
                                <i class="fas fa-image"></i> Formats: JPEG, PNG (Max: 700KB)
                            </div>
                            <div id="imagePreview" style="margin-top: 10px;"></div>
                        </div>
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="royal-submit-btn">
                            <i class="fas fa-save"></i> Conserver le Trésor
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Galerie des Trésors -->
    <div class="royal-gallery-card">
        <div class="card-header">
            <div class="header-content">
                <div class="header-title">
                    <i class="fas fa-crown"></i>
                    <h3>Galerie des Trésors Royaux</h3>
                </div>
                <span class="royal-badge">{{ $oeuvres->count() }} Trésors</span>
            </div>
        </div>
        <div class="card-body">
            @if($oeuvres->count() > 0)
            <div class="table-responsive">
                <table class="royal-table">
                    <thead>
                        <tr>
                            <th><i class="fas fa-heading"></i> Titre</th>
                            <th><i class="fas fa-user-tie"></i> Artiste</th>
                            <th><i class="fas fa-coins"></i> Valeur</th>
                            <th><i class="fas fa-image"></i> Portrait</th>
                            <th><i class="fas fa-tools"></i> Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($oeuvres as $oeuvre)
                        <tr>
                            <td>{{ $oeuvre->titre }}</td>
                            <td>{{ $oeuvre->auteur }}</td>
                            <td class="royal-value">{{ number_format($oeuvre->prix, 2) }} FCFA</td>
                            <td>
                                @if($oeuvre->image)
                                <img src="{{ asset('storage/'.$oeuvre->image) }}" 
                                     class="royal-thumbnail" 
                                     data-bs-toggle="modal" 
                                     data-bs-target="#imageModal{{ $oeuvre->id }}">
                                @else
                                <span class="no-image">Aucun portrait</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <!-- Bouton Modifier -->
                                    <button class="royal-edit-btn" 
                                            data-id="{{ $oeuvre->id }}"
                                            data-bs-toggle="modal" 
                                            data-bs-target="#editModal{{ $oeuvre->id }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                    
                                    <!-- Bouton Supprimer -->
                                    <form action="{{ route('home.oeuvres.destroy', $oeuvre->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="royal-delete-btn"
                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce trésor royal ?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        <!-- Modal d'édition -->
                        <div class="modal fade" id="editModal{{ $oeuvre->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modifier le Trésor</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('home.oeuvres.update', $oeuvre->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label>Titre</label>
                                                <input type="text" name="titre" class="form-control" value="{{ $oeuvre->titre }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Artiste</label>
                                                <input type="text" name="auteur" class="form-control" value="{{ $oeuvre->auteur }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Valeur (FCFA)</label>
                                                <input type="number" name="prix" class="form-control" value="{{ $oeuvre->prix }}" step="0.01" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Description</label>
                                                <textarea name="description" class="form-control" rows="3">{{ $oeuvre->description }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label>Image (Max: 700KB)</label>
                                                <input type="file" name="image" class="form-control" accept="image/*">
                                                @if($oeuvre->image)
                                                <div class="current-image mt-2">
                                                    <p>Image actuelle :</p>
                                                    <img src="{{ asset('storage/'.$oeuvre->image) }}" width="100">
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="submit" class="btn royal-btn">Enregistrer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal d'image -->
                        @if($oeuvre->image)
                        <div class="modal fade" id="imageModal{{ $oeuvre->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ $oeuvre->titre }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="{{ asset('storage/'.$oeuvre->image) }}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="empty-gallery">
                <img src="{{ asset('images/empty-treasure.png') }}" width="150">
                <h4>La Galerie est Vide</h4>
                <p>Commencez par ajouter des trésors à la collection royale</p>
            </div>
            @endif
        </div>
    </div>
</div>

<style>
/* Variables */
:root {
    --royal-gold: #D4AF37;
    --royal-red: #8B0000;
    --royal-blue: #003366;
    --royal-dark: #1A1A1A;
    --royal-cream: #F5F5DC;
}

/* Structure */
.royal-container {
    padding: 2rem 0;
    max-width: 1200px;
}

/* En-tête */
.royal-header {
    background: linear-gradient(135deg, var(--royal-dark) 0%, var(--royal-red) 100%);
    padding: 1.5rem 0;
    border-bottom: 3px solid var(--royal-gold);
    color: white;
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.user-info {
    display: flex;
    align-items: center;
}

.royal-avatar {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    border: 3px solid var(--royal-gold);
    object-fit: cover;
    margin-right: 1.5rem;
}

.user-details {
    line-height: 1.4;
}

.royal-title {
    margin: 0;
    color: var(--royal-gold);
    font-weight: 600;
}

.royal-subtitle {
    margin: 0;
    opacity: 0.8;
    font-size: 0.9rem;
}

.royal-logout-btn {
    background: transparent;
    border: 1px solid var(--royal-gold);
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 30px;
    transition: all 0.3s;
    display: flex;
    align-items: center;
}

.royal-logout-btn:hover {
    background: var(--royal-gold);
    color: var(--royal-dark);
}

.royal-logout-btn i {
    margin-right: 0.5rem;
}

/* Alertes */
.royal-alert {
    border-left: 4px solid var(--royal-gold);
    background-color: var(--royal-cream);
    padding: 1rem;
    margin-bottom: 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.alert-content {
    display: flex;
    align-items: center;
}

.alert-icon {
    color: var(--royal-gold);
    font-size: 1.5rem;
    margin-right: 1rem;
}

.royal-alert h5 {
    color: var(--royal-dark);
    margin-bottom: 0.3rem;
}

.royal-alert p {
    margin-bottom: 0;
}

/* Cartes */
.royal-form-card,
.royal-gallery-card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 2rem;
    overflow: hidden;
    border: none;
}

.card-header {
    background: linear-gradient(135deg, var(--royal-blue) 0%, var(--royal-dark) 100%);
    color: white;
    padding: 1.5rem;
    display: flex;
    align-items: center;
    border-bottom: 2px solid var(--royal-gold);
}

.card-header h3 {
    margin: 0;
    font-size: 1.5rem;
}

.header-icon {
    font-size: 1.8rem;
    margin-right: 1rem;
    color: var(--royal-gold);
}

.header-title {
    display: flex;
    align-items: center;
}

.royal-badge {
    background: var(--royal-gold);
    color: var(--royal-dark);
    padding: 0.3rem 1rem;
    border-radius: 20px;
    font-weight: 600;
    font-size: 0.9rem;
}

.card-body {
    padding: 2rem;
}

/* Formulaire */
.form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
}

.form-group {
    margin-bottom: 1rem;
}

.full-width {
    grid-column: 1 / -1;
}

.form-submit {
    grid-column: 1 / -1;
    display: flex;
    justify-content: flex-end;
}

.royal-label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--royal-blue);
}

.royal-input {
    width: 100%;
    padding: 0.8rem 1rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: all 0.3s;
}

.royal-input:focus {
    border-color: var(--royal-gold);
    box-shadow: 0 0 0 0.2rem rgba(212, 175, 55, 0.25);
    outline: none;
}

.input-with-icon {
    position: relative;
}

.input-icon {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--royal-gold);
}

.royal-textarea {
    width: 100%;
    min-height: 120px;
    padding: 1rem;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.file-upload {
    position: relative;
}

.file-hint {
    font-size: 0.8rem;
    color: #666;
    margin-top: 0.5rem;
    display: flex;
    align-items: center;
}

.file-hint i {
    margin-right: 0.5rem;
    color: var(--royal-gold);
}

.royal-submit-btn {
    background: linear-gradient(135deg, var(--royal-gold) 0%, #F0C14B 100%);
    color: var(--royal-dark);
    border: none;
    padding: 0.8rem 2rem;
    border-radius: 4px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
}

.royal-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(212, 175, 55, 0.3);
}

.royal-submit-btn i {
    margin-right: 0.5rem;
}

/* Tableau */
.royal-table {
    width: 100%;
    border-collapse: collapse;
}

.royal-table th {
    background: var(--royal-blue);
    color: white;
    padding: 1rem;
    text-align: left;
    font-weight: 500;
}

.royal-table th i {
    margin-right: 0.5rem;
    color: var(--royal-gold);
}

.royal-table td {
    padding: 1rem;
    border-bottom: 1px solid #eee;
    vertical-align: middle;
}

.royal-value {
    font-weight: 600;
    color: var(--royal-blue);
}

.royal-thumbnail {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 4px;
    border: 1px solid #ddd;
    cursor: pointer;
    transition: transform 0.3s;
}

.royal-thumbnail:hover {
    transform: scale(1.1);
}

.no-image {
    color: #999;
    font-style: italic;
}

/* Boutons d'action */
.action-buttons {
    display: flex;
    gap: 0.5rem;
}

.royal-edit-btn,
.royal-delete-btn {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    cursor: pointer;
    transition: all 0.3s;
}

.royal-edit-btn {
    background: var(--royal-gold);
    color: var(--royal-dark);
}

.royal-edit-btn:hover {
    background: var(--royal-blue);
    color: white;
    transform: scale(1.1);
}

.royal-delete-btn {
    background: var(--royal-red);
    color: white;
}

.royal-delete-btn:hover {
    background: darkred;
    transform: scale(1.1);
}

/* Galerie vide */
.empty-gallery {
    text-align: center;
    padding: 3rem 0;
}

.empty-gallery img {
    margin-bottom: 1.5rem;
}

.empty-gallery h4 {
    color: var(--royal-gold);
    margin-bottom: 0.5rem;
}

.empty-gallery p {
    color: #666;
}

/* Modals - Corrections pour les rendre cliquables */
.modal {
    z-index: 1050 !important;
    display: none;
    overflow: hidden;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040 !important;
    background-color: #000;
}

.modal-content {
    position: relative;
    z-index: 1050;
}

body.modal-open {
    overflow: auto;
    padding-right: 0 !important;
}

/* Assure que les modals sont au-dessus de tout */
.modal-dialog {
    z-index: 1060;
}

/* Responsive */
@media (max-width: 992px) {
    .form-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .header-content {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .royal-logout-btn {
        margin-top: 1rem;
    }
    
    .royal-table th, 
    .royal-table td {
        padding: 0.8rem;
    }
    
    .royal-table th i {
        display: none;
    }
}

@media (max-width: 576px) {
    .royal-table {
        display: block;
        overflow-x: auto;
    }
    
    .royal-avatar {
        width: 50px;
        height: 50px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation des éléments
    const cards = document.querySelectorAll('.royal-form-card, .royal-gallery-card');
    cards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'all 0.5s ease';
        
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 200);
    });

    // Confirmation de suppression
    const deleteForms = document.querySelectorAll('form[action*="destroy"]');
    deleteForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!confirm('Êtes-vous sûr de vouloir supprimer ce trésor royal ?')) {
                e.preventDefault();
            }
        });
    });

    // Effet de survol sur les lignes du tableau
    const tableRows = document.querySelectorAll('.royal-table tbody tr');
    tableRows.forEach(row => {
        row.addEventListener('mouseenter', function() {
            this.style.transform = 'translateX(5px)';
            this.style.transition = 'transform 0.3s ease';
        });
        
        row.addEventListener('mouseleave', function() {
            this.style.transform = 'translateX(0)';
        });
    });

    // Gestion de l'upload d'image avec limite de taille
    const imageUpload = document.getElementById('imageUpload');
    const fileHint = document.getElementById('fileHint');
    const imagePreview = document.getElementById('imagePreview');
    const maxSize = 700 * 1024; // 700KB en bytes

    if (imageUpload) {
        imageUpload.addEventListener('change', function() {
            const file = this.files[0];
            imagePreview.innerHTML = '';
            
            if (!file) return;

            // Vérification de la taille
            if (file.size > maxSize) {
                fileHint.innerHTML = '<i class="fas fa-exclamation-circle" style="color:red"></i> Fichier trop volumineux (>700KB)';
                this.value = '';
                return;
            }

            // Vérification du type
            if (!file.type.match('image.*')) {
                fileHint.innerHTML = '<i class="fas fa-exclamation-circle" style="color:red"></i> Format non supporté';
                this.value = '';
                return;
            }

            // Affichage des infos du fichier
            fileHint.innerHTML = `
                <i class="fas fa-check-circle" style="color:green"></i> ${file.name} (${Math.round(file.size/1024)}KB)
            `;

            // Prévisualisation de l'image
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.innerHTML = `
                    <img src="${e.target.result}" style="max-width:150px; max-height:150px; margin-top:10px; border:1px solid #ddd; border-radius:4px;">
                `;
            };
            reader.readAsDataURL(file);
        });
    }

    // Validation du formulaire avant soumission
    const oeuvreForm = document.getElementById('oeuvreForm');
    if (oeuvreForm) {
        oeuvreForm.addEventListener('submit', function(e) {
            const fileInput = this.querySelector('input[type="file"]');
            if (fileInput && fileInput.files.length > 0 && fileInput.files[0].size > maxSize) {
                e.preventDefault();
                alert('La taille de l\'image ne doit pas dépasser 700KB');
                fileInput.value = '';
                fileHint.innerHTML = '<i class="fas fa-exclamation-circle" style="color:red"></i> Fichier trop volumineux (>700KB)';
            }
        });
    }

    // Debug des modals
    document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
        button.addEventListener('click', function() {
            const target = this.getAttribute('data-bs-target');
            console.log('Opening modal:', target);
        });
    });

    // Initialisation manuelle des modals si nécessaire
    if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
        const modalElements = document.querySelectorAll('.modal');
        modalElements.forEach(modalEl => {
            new bootstrap.Modal(modalEl);
        });
    } else {
        console.error('Bootstrap JS non chargé correctement');
    }
});
</script>
@endsection

@section('content')
<!-- En-tête Royal -->
<div class="royal-header">
    <div class="container">
        <div class="header-content">
            <div class="user-info">
                <div class="avatar-container">
                    <img src="{{ Auth::user()->avatar ?? asset('images/royal-avatar.png') }}" 
                         alt="Avatar" class="royal-avatar">
                </div>
                <div class="user-details">
                    <h3 class="royal-title">{{ Auth::user()->name }}</h3>
                    <p class="royal-subtitle">Conservateur des Trésors Royaux</p>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="royal-logout-btn">
                    <i class="fas fa-sign-out-alt"></i> Déconnexion
                </button>
            </form>
        </div>
    </div>
</div>

<div class="container royal-container">
    <!-- Notifications -->
    @if(session('success'))
    <div class="royal-alert alert alert-success">
        <div class="alert-content">
            <i class="fas fa-check-circle alert-icon"></i>
            <div>
                <h5>Succès Royal!</h5>
                <p>{{ session('success') }}</p>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <!-- Formulaire d'ajout -->
    <div class="royal-form-card">
        <div class="card-header">
            <i class="fas fa-plus-circle header-icon"></i>
            <h3>Enregistrer un Nouveau Trésor</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('home.store.oeuvre') }}" method="POST" enctype="multipart/form-data" id="oeuvreForm">
                @csrf
                <div class="form-grid">
                    <div class="form-group">
                        <label class="royal-label">Titre du Trésor*</label>
                        <input type="text" name="titre" class="royal-input" required>
                    </div>
                    <div class="form-group">
                        <label class="royal-label">Artiste Royal*</label>
                        <input type="text" name="auteur" class="royal-input" required>
                    </div>
                    <div class="form-group">
                        <label class="royal-label">Valeur (FCFA)*</label>
                        <div class="input-with-icon">
                            <input type="number" name="prix" class="royal-input" step="0.01" min="0" required>
                        </div>
                    </div>
                    <div class="form-group full-width">
                        <label class="royal-label">Histoire du Trésor</label>
                        <textarea name="description" class="royal-textarea" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="royal-label">Portrait du Trésor</label>
                        <div class="file-upload">
                            <input type="file" name="image" id="imageUpload" accept="image/*">
                            <div class="file-hint" id="fileHint">
                                <i class="fas fa-image"></i> Formats: JPEG, PNG (Max: 700KB)
                            </div>
                            <div id="imagePreview" style="margin-top: 10px;"></div>
                        </div>
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="royal-submit-btn">
                            <i class="fas fa-save"></i> Conserver le Trésor
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Galerie des Trésors -->
    <div class="royal-gallery-card">
        <div class="card-header">
            <div class="header-content">
                <div class="header-title">
                    <i class="fas fa-crown"></i>
                    <h3>Galerie des Trésors Royaux</h3>
                </div>
                <span class="royal-badge">{{ $oeuvres->count() }} Trésors</span>
            </div>
        </div>
        <div class="card-body">
            @if($oeuvres->count() > 0)
            <div class="table-responsive">
                <table class="royal-table">
                    <thead>
                        <tr>
                            <th><i class="fas fa-heading"></i> Titre</th>
                            <th><i class="fas fa-user-tie"></i> Artiste</th>
                            <th><i class="fas fa-coins"></i> Valeur</th>
                            <th><i class="fas fa-image"></i> Portrait</th>
                            <th><i class="fas fa-tools"></i> Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($oeuvres as $oeuvre)
                        <tr>
                            <td>{{ $oeuvre->titre }}</td>
                            <td>{{ $oeuvre->auteur }}</td>
                            <td class="royal-value">{{ number_format($oeuvre->prix, 2) }} FCFA</td>
                            <td>
                                @if($oeuvre->image)
                                <img src="{{ asset('storage/'.$oeuvre->image) }}" 
                                     class="royal-thumbnail" 
                                     data-bs-toggle="modal" 
                                     data-bs-target="#imageModal{{ $oeuvre->id }}">
                                @else
                                <span class="no-image">Aucun portrait</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <!-- Bouton Modifier -->
                                    <button class="royal-edit-btn" 
                                            data-id="{{ $oeuvre->id }}"
                                            data-bs-toggle="modal" 
                                            data-bs-target="#editModal{{ $oeuvre->id }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                    
                                    <!-- Bouton Supprimer -->
                                    <form action="{{ route('home.oeuvres.destroy', $oeuvre->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="royal-delete-btn"
                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce trésor royal ?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        <!-- Modal d'édition -->
                        <div class="modal fade" id="editModal{{ $oeuvre->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modifier le Trésor</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('home.oeuvres.update', $oeuvre->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label>Titre</label>
                                                <input type="text" name="titre" class="form-control" value="{{ $oeuvre->titre }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Artiste</label>
                                                <input type="text" name="auteur" class="form-control" value="{{ $oeuvre->auteur }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Valeur (FCFA)</label>
                                                <input type="number" name="prix" class="form-control" value="{{ $oeuvre->prix }}" step="0.01" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Description</label>
                                                <textarea name="description" class="form-control" rows="3">{{ $oeuvre->description }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label>Image (Max: 700KB)</label>
                                                <input type="file" name="image" class="form-control" accept="image/*">
                                                @if($oeuvre->image)
                                                <div class="current-image mt-2">
                                                    <p>Image actuelle :</p>
                                                    <img src="{{ asset('storage/'.$oeuvre->image) }}" width="100">
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="submit" class="btn royal-btn">Enregistrer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal d'image -->
                        @if($oeuvre->image)
                        <div class="modal fade" id="imageModal{{ $oeuvre->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ $oeuvre->titre }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="{{ asset('storage/'.$oeuvre->image) }}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="empty-gallery">
                <img src="{{ asset('images/empty-treasure.png') }}" width="150">
                <h4>La Galerie est Vide</h4>
                <p>Commencez par ajouter des trésors à la collection royale</p>
            </div>
            @endif
        </div>
    </div>
</div>

<style>
/* Variables */
:root {
    --royal-gold: #D4AF37;
    --royal-red: #8B0000;
    --royal-blue: #003366;
    --royal-dark: #1A1A1A;
    --royal-cream: #F5F5DC;
}

/* Structure */
.royal-container {
    padding: 2rem 0;
    max-width: 1200px;
}

/* En-tête */
.royal-header {
    background: linear-gradient(135deg, var(--royal-dark) 0%, var(--royal-red) 100%);
    padding: 1.5rem 0;
    border-bottom: 3px solid var(--royal-gold);
    color: white;
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.user-info {
    display: flex;
    align-items: center;
}

.royal-avatar {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    border: 3px solid var(--royal-gold);
    object-fit: cover;
    margin-right: 1.5rem;
}

.user-details {
    line-height: 1.4;
}

.royal-title {
    margin: 0;
    color: var(--royal-gold);
    font-weight: 600;
}

.royal-subtitle {
    margin: 0;
    opacity: 0.8;
    font-size: 0.9rem;
}

.royal-logout-btn {
    background: transparent;
    border: 1px solid var(--royal-gold);
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 30px;
    transition: all 0.3s;
    display: flex;
    align-items: center;
}

.royal-logout-btn:hover {
    background: var(--royal-gold);
    color: var(--royal-dark);
}

.royal-logout-btn i {
    margin-right: 0.5rem;
}

/* Alertes */
.royal-alert {
    border-left: 4px solid var(--royal-gold);
    background-color: var(--royal-cream);
    padding: 1rem;
    margin-bottom: 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.alert-content {
    display: flex;
    align-items: center;
}

.alert-icon {
    color: var(--royal-gold);
    font-size: 1.5rem;
    margin-right: 1rem;
}

.royal-alert h5 {
    color: var(--royal-dark);
    margin-bottom: 0.3rem;
}

.royal-alert p {
    margin-bottom: 0;
}

/* Cartes */
.royal-form-card,
.royal-gallery-card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 2rem;
    overflow: hidden;
    border: none;
}

.card-header {
    background: linear-gradient(135deg, var(--royal-blue) 0%, var(--royal-dark) 100%);
    color: white;
    padding: 1.5rem;
    display: flex;
    align-items: center;
    border-bottom: 2px solid var(--royal-gold);
}

.card-header h3 {
    margin: 0;
    font-size: 1.5rem;
}

.header-icon {
    font-size: 1.8rem;
    margin-right: 1rem;
    color: var(--royal-gold);
}

.header-title {
    display: flex;
    align-items: center;
}

.royal-badge {
    background: var(--royal-gold);
    color: var(--royal-dark);
    padding: 0.3rem 1rem;
    border-radius: 20px;
    font-weight: 600;
    font-size: 0.9rem;
}

.card-body {
    padding: 2rem;
}

/* Formulaire */
.form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
}

.form-group {
    margin-bottom: 1rem;
}

.full-width {
    grid-column: 1 / -1;
}

.form-submit {
    grid-column: 1 / -1;
    display: flex;
    justify-content: flex-end;
}

.royal-label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--royal-blue);
}

.royal-input {
    width: 100%;
    padding: 0.8rem 1rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: all 0.3s;
}

.royal-input:focus {
    border-color: var(--royal-gold);
    box-shadow: 0 0 0 0.2rem rgba(212, 175, 55, 0.25);
    outline: none;
}

.input-with-icon {
    position: relative;
}

.input-icon {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--royal-gold);
}

.royal-textarea {
    width: 100%;
    min-height: 120px;
    padding: 1rem;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.file-upload {
    position: relative;
}

.file-hint {
    font-size: 0.8rem;
    color: #666;
    margin-top: 0.5rem;
    display: flex;
    align-items: center;
}

.file-hint i {
    margin-right: 0.5rem;
    color: var(--royal-gold);
}

.royal-submit-btn {
    background: linear-gradient(135deg, var(--royal-gold) 0%, #F0C14B 100%);
    color: var(--royal-dark);
    border: none;
    padding: 0.8rem 2rem;
    border-radius: 4px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
}

.royal-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(212, 175, 55, 0.3);
}

.royal-submit-btn i {
    margin-right: 0.5rem;
}

/* Tableau */
.royal-table {
    width: 100%;
    border-collapse: collapse;
}

.royal-table th {
    background: var(--royal-blue);
    color: white;
    padding: 1rem;
    text-align: left;
    font-weight: 500;
}

.royal-table th i {
    margin-right: 0.5rem;
    color: var(--royal-gold);
}

.royal-table td {
    padding: 1rem;
    border-bottom: 1px solid #eee;
    vertical-align: middle;
}

.royal-value {
    font-weight: 600;
    color: var(--royal-blue);
}

.royal-thumbnail {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 4px;
    border: 1px solid #ddd;
    cursor: pointer;
    transition: transform 0.3s;
}

.royal-thumbnail:hover {
    transform: scale(1.1);
}

.no-image {
    color: #999;
    font-style: italic;
}

/* Boutons d'action */
.action-buttons {
    display: flex;
    gap: 0.5rem;
}

.royal-edit-btn,
.royal-delete-btn {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    cursor: pointer;
    transition: all 0.3s;
}

.royal-edit-btn {
    background: var(--royal-gold);
    color: var(--royal-dark);
}

.royal-edit-btn:hover {
    background: var(--royal-blue);
    color: white;
    transform: scale(1.1);
}

.royal-delete-btn {
    background: var(--royal-red);
    color: white;
}

.royal-delete-btn:hover {
    background: darkred;
    transform: scale(1.1);
}

/* Galerie vide */
.empty-gallery {
    text-align: center;
    padding: 3rem 0;
}

.empty-gallery img {
    margin-bottom: 1.5rem;
}

.empty-gallery h4 {
    color: var(--royal-gold);
    margin-bottom: 0.5rem;
}

.empty-gallery p {
    color: #666;
}

/* Modals - Corrections pour les rendre cliquables */
.modal {
    z-index: 1050 !important;
    display: none;
    overflow: hidden;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040 !important;
    background-color: #000;
}

.modal-content {
    position: relative;
    z-index: 1050;
}

body.modal-open {
    overflow: auto;
    padding-right: 0 !important;
}

/* Assure que les modals sont au-dessus de tout */
.modal-dialog {
    z-index: 1060;
}

/* Responsive */
@media (max-width: 992px) {
    .form-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .header-content {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .royal-logout-btn {
        margin-top: 1rem;
    }
    
    .royal-table th, 
    .royal-table td {
        padding: 0.8rem;
    }
    
    .royal-table th i {
        display: none;
    }
}

@media (max-width: 576px) {
    .royal-table {
        display: block;
        overflow-x: auto;
    }
    
    .royal-avatar {
        width: 50px;
        height: 50px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation des éléments
    const cards = document.querySelectorAll('.royal-form-card, .royal-gallery-card');
    cards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'all 0.5s ease';
        
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 200);
    });

    // Confirmation de suppression
    const deleteForms = document.querySelectorAll('form[action*="destroy"]');
    deleteForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!confirm('Êtes-vous sûr de vouloir supprimer ce trésor royal ?')) {
                e.preventDefault();
            }
        });
    });

    // Effet de survol sur les lignes du tableau
    const tableRows = document.querySelectorAll('.royal-table tbody tr');
    tableRows.forEach(row => {
        row.addEventListener('mouseenter', function() {
            this.style.transform = 'translateX(5px)';
            this.style.transition = 'transform 0.3s ease';
        });
        
        row.addEventListener('mouseleave', function() {
            this.style.transform = 'translateX(0)';
        });
    });

    // Gestion de l'upload d'image avec limite de taille
    const imageUpload = document.getElementById('imageUpload');
    const fileHint = document.getElementById('fileHint');
    const imagePreview = document.getElementById('imagePreview');
    const maxSize = 700 * 1024; // 700KB en bytes

    if (imageUpload) {
        imageUpload.addEventListener('change', function() {
            const file = this.files[0];
            imagePreview.innerHTML = '';
            
            if (!file) return;

            // Vérification de la taille
            if (file.size > maxSize) {
                fileHint.innerHTML = '<i class="fas fa-exclamation-circle" style="color:red"></i> Fichier trop volumineux (>700KB)';
                this.value = '';
                return;
            }

            // Vérification du type
            if (!file.type.match('image.*')) {
                fileHint.innerHTML = '<i class="fas fa-exclamation-circle" style="color:red"></i> Format non supporté';
                this.value = '';
                return;
            }

            // Affichage des infos du fichier
            fileHint.innerHTML = `
                <i class="fas fa-check-circle" style="color:green"></i> ${file.name} (${Math.round(file.size/1024)}KB)
            `;

            // Prévisualisation de l'image
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.innerHTML = `
                    <img src="${e.target.result}" style="max-width:150px; max-height:150px; margin-top:10px; border:1px solid #ddd; border-radius:4px;">
                `;
            };
            reader.readAsDataURL(file);
        });
    }

    // Validation du formulaire avant soumission
    const oeuvreForm = document.getElementById('oeuvreForm');
    if (oeuvreForm) {
        oeuvreForm.addEventListener('submit', function(e) {
            const fileInput = this.querySelector('input[type="file"]');
            if (fileInput && fileInput.files.length > 0 && fileInput.files[0].size > maxSize) {
                e.preventDefault();
                alert('La taille de l\'image ne doit pas dépasser 700KB');
                fileInput.value = '';
                fileHint.innerHTML = '<i class="fas fa-exclamation-circle" style="color:red"></i> Fichier trop volumineux (>700KB)';
            }
        });
    }

    // Debug des modals
    document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
        button.addEventListener('click', function() {
            const target = this.getAttribute('data-bs-target');
            console.log('Opening modal:', target);
        });
    });

    // Initialisation manuelle des modals si nécessaire
    if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
        const modalElements = document.querySelectorAll('.modal');
        modalElements.forEach(modalEl => {
            new bootstrap.Modal(modalEl);
        });
    } else {
        console.error('Bootstrap JS non chargé correctement');
    }
});
</script>
@endsection