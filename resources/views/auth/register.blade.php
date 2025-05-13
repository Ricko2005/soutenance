@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.9)), url('https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center fixed; background-size: cover; min-height: 100vh;">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-5">
            <div class="card border-0 shadow-lg" style="border-radius: 15px; overflow: hidden;">
                <div class="card-header py-4 text-center text-white" style="background-color: #8a1714;">
                    <div class="mb-3">
                        <i class="fas fa-crown fa-3x"></i>
                    </div>
                    <h2 class="mb-0">Trésors Royaux</h2>
                    <p class="mb-0 mt-2">Devenir Membre Privilégié</p>
                </div>
                
                <div class="card-body p-5" style="background-color: #f8f9fa;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="form-label fw-bold" style="color: #2C3E50;">Nom </label>
                            <div class="input-group">
                                <span class="input-group-text" style="background-color: #8a1714; color: white;">
                                    <i class="fas fa-user-tie"></i>
                                </span>
                                <input id="name" type="text" class="form-control py-3 @error('name') is-invalid @enderror" 
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                       placeholder="Votre nom complet" style="border-left: 0;">
                            </div>
                            @error('name')
                                <div class="text-danger mt-2">
                                    <i class="fas fa-exclamation-circle me-2"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label fw-bold" style="color: #2C3E50;">Adresse mail</label>
                            <div class="input-group">
                                <span class="input-group-text" style="background-color: #8a1714; color: white;">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input id="email" type="email" class="form-control py-3 @error('email') is-invalid @enderror" 
                                       name="email" value="{{ old('email') }}" required autocomplete="email"
                                       placeholder="votre@courrier.com" style="border-left: 0;">
                            </div>
                            @error('email')
                                <div class="text-danger mt-2">
                                    <i class="fas fa-exclamation-circle me-2"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label fw-bold" style="color: #2C3E50;">Mot de passe</label>
                            <div class="input-group">
                                <span class="input-group-text" style="background-color: #8a1714; color: white;">
                                    <i class="fas fa-key"></i>
                                </span>
                                <input id="password" type="password" class="form-control py-3 @error('password') is-invalid @enderror" 
                                       name="password" required autocomplete="new-password"
                                       placeholder="••••••••" style="border-left: 0;">
                            </div>
                            @error('password')
                                <div class="text-danger mt-2">
                                    <i class="fas fa-exclamation-circle me-2"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password-confirm" class="form-label fw-bold" style="color: #2C3E50;">Confirmez le mot de passe</label>
                            <div class="input-group">
                                <span class="input-group-text" style="background-color: #8a1714; color: white;">
                                    <i class="fas fa-key"></i>
                                </span>
                                <input id="password-confirm" type="password" class="form-control py-3" 
                                       name="password_confirmation" required autocomplete="new-password"
                                       placeholder="••••••••" style="border-left: 0;">
                            </div>
                        </div>

                        <div class="d-grid mb-4">
                            <button type="submit" class="btn py-3 text-white fw-bold" style="background-color: #8a1714; letter-spacing: 1px;">
                                <i class="fas fa-user-plus me-2"></i> DEVENIR MEMBRE
                            </button>
                        </div>

                        <div class="text-center pt-3" style="border-top: 1px solid #ddd;">
                            <p class="mb-0" style="color: #2C3E50;">Déjà membre ? 
                                <a href="{{ route('login') }}" class="text-decoration-none fw-bold" style="color: #8a1714;">Inscription</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection