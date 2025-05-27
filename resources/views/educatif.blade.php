@extends('layout.app')

@section('title', 'Espace Éducatif')

@section('content')
<div class="educatif-container">
    <!-- Hero Section -->
    <div class="educatif-hero">
        <div class="container">
            <h1><i class="fas fa-graduation-cap"></i> Apprends en t'amusant</h1>
            <p>Découvre l'histoire du Bénin à travers nos jeux éducatifs</p>
        </div>
    </div>

    <!-- Games Grid -->
    <div class="container py-5">
        <div class="row g-4">
            @foreach($games as $id => $game)
            <div class="col-md-6 col-lg-3">
                <a href="{{ route('educatif.show', $id) }}" class="game-card" style="border-top: 5px solid {{ $game['color'] }}">
                    <div class="game-icon" style="color: {{ $game['color'] }}">
                        <i class="fas fa-{{ $game['icon'] }}"></i>
                    </div>
                    <h3>{{ $game['title'] }}</h3>
                    <div class="game-hover" style="background-color: {{ $game['color'] }}">
                        <span>Jouer</span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    /* Styles de base */
    .educatif-container {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f9fa;
    }

    .educatif-hero {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                    url('{{ asset("images/benin-bg.jpg") }}');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 5rem 0;
        text-align: center;
        margin-bottom: 3rem;
    }

    .educatif-hero h1 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }

    .educatif-hero p {
        font-size: 1.2rem;
        opacity: 0.9;
    }

    /* Cartes de jeu */
    .game-card {
        display: block;
        background: white;
        border-radius: 8px;
        padding: 2rem 1.5rem;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        height: 100%;
        text-decoration: none;
        color: #333;
    }

    .game-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .game-icon {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        transition: all 0.3s ease;
    }

    .game-card h3 {
        font-size: 1.3rem;
        margin-bottom: 1.5rem;
    }

    .game-hover {
        position: absolute;
        bottom: -50px;
        left: 0;
        width: 100%;
        padding: 1rem;
        color: white;
        transition: all 0.3s ease;
        opacity: 0;
    }

    .game-card:hover .game-hover {
        bottom: 0;
        opacity: 1;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .educatif-hero {
            padding: 3rem 0;
        }
        
        .educatif-hero h1 {
            font-size: 2rem;
        }
        
        .game-card {
            padding: 1.5rem 1rem;
        }
    }
</style>
@endsection