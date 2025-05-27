@extends('layout.app')

@section('title', $game['title'])

@section('content')
<div class="game-container" style="background-color: {{ $game['color'] }}20">
    <div class="container py-5">
        <div class="game-header text-center mb-4">
            <h1><i class="fas fa-{{ $game['icon'] }}"></i> {{ $game['title'] }}</h1>
            <p class="lead">Retrouve les paires de portraits royaux</p>
            <div class="game-stats">
                <span class="badge bg-primary">Tentatives: <span id="attempts">0</span></span>
                <span class="badge bg-success ms-2">Paires: <span id="matches">0</span>/4</span>
            </div>
        </div>

        <div class="memory-game">
            <div class="memory-grid" id="memory-grid">
                @php
                    // Liste des rois avec leurs images
                    $kings = [
                        ['id' => 1, 'name' => 'KATAKLÉ DE BÉHANZIN', 'image' => 'tab.png'],
                        ['id' => 2, 'name' => 'CALEBASSE À COUVERCLE', 'image' => 'piture6.png'],
                        ['id' => 3, 'name' => 'Behanzin', 'image' => 'behanzin.jpeg'],
                        ['id' => 4, 'name' => 'PANTALON DE SOLDAT OU D\'AGOODJIÉ', 'image' => 'pantalon.png']
                    ];
                    
                    // Créer 8 cartes (4 paires)
                    $cards = array_merge($kings, $kings);
                    shuffle($cards);
                @endphp

                @foreach($cards as $index => $king)
                <div class="memory-card" data-card="{{ $king['id'] }}">
                    <div class="memory-front">
                        <i class="fas fa-crown"></i>
                        <span class="card-number">{{ $index+1 }}</span>
                    </div>
                    <div class="memory-back">
                        <img src="{{ asset('images/kings/' . $king['image']) }}" 
                             alt="{{ $king['name'] }}"
                             onerror="this.src='{{ asset('images/default-king.jpg') }}'">
                        <div class="king-name">{{ $king['name'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="text-center mt-4">
            <button id="restart-btn" class="btn btn-primary">
                <i class="fas fa-redo"></i> Recommencer
            </button>
        </div>
    </div>
</div>

<style>
    .game-container {
        min-height: 100vh;
        padding: 2rem 0;
    }

    .memory-game {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        max-width: 800px;
        margin: 0 auto;
    }

    .memory-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
    }

    .memory-card {
        aspect-ratio: 1;
        position: relative;
        transform-style: preserve-3d;
        transition: transform 0.6s;
        cursor: pointer;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .memory-card.flipped {
        transform: rotateY(180deg);
    }

    .memory-front, .memory-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 15px;
    }

    .memory-front {
        background: {{ $game['color'] }};
        color: white;
    }

    .memory-front i {
        font-size: 2.5rem;
        margin-bottom: 10px;
    }

    .card-number {
        position: absolute;
        top: 5px;
        left: 5px;
        font-size: 0.8rem;
        background: rgba(255,255,255,0.2);
        padding: 2px 5px;
        border-radius: 3px;
    }

    .memory-back {
        background: white;
        transform: rotateY(180deg);
    }

    .memory-back img {
        width: 100%;
        height: 80%;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 5px;
    }

    .king-name {
        font-weight: bold;
        color: {{ $game['color'] }};
        text-align: center;
        font-size: 0.9rem;
    }

    .game-stats {
        margin: 1rem 0;
    }

    @media (max-width: 768px) {
        .memory-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .memory-card {
            height: 120px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    let hasFlippedCard = false;
    let lockBoard = false;
    let firstCard, secondCard;
    let attempts = 0;
    let matches = 0;
    const totalPairs = 4;

    // Éléments du DOM
    const attemptsElement = document.getElementById('attempts');
    const matchesElement = document.getElementById('matches');
    const restartBtn = document.getElementById('restart-btn');
    const cards = document.querySelectorAll('.memory-card');

    // Fonctions
    function flipCard() {
        if (lockBoard || this === firstCard) return;

        this.classList.add('flipped');

        if (!hasFlippedCard) {
            hasFlippedCard = true;
            firstCard = this;
            return;
        }

        secondCard = this;
        attempts++;
        attemptsElement.textContent = attempts;
        checkForMatch();
    }

    function checkForMatch() {
        const isMatch = firstCard.dataset.card === secondCard.dataset.card;

        if (isMatch) {
            disableCards();
            matches++;
            matchesElement.textContent = matches;
            
            if (matches === totalPairs) {
                setTimeout(() => {
                    alert(`Félicitations ! Vous avez gagné en ${attempts} tentatives.`);
                }, 500);
            }
        } else {
            unflipCards();
        }
    }

    function disableCards() {
        firstCard.removeEventListener('click', flipCard);
        secondCard.removeEventListener('click', flipCard);
        resetBoard();
    }

    function unflipCards() {
        lockBoard = true;
        setTimeout(() => {
            firstCard.classList.remove('flipped');
            secondCard.classList.remove('flipped');
            resetBoard();
        }, 1000);
    }

    function resetBoard() {
        [hasFlippedCard, lockBoard] = [false, false];
        [firstCard, secondCard] = [null, null];
    }

    function shuffleCards() {
        cards.forEach(card => {
            const randomPos = Math.floor(Math.random() * cards.length);
            card.style.order = randomPos;
            card.classList.remove('flipped');
            card.addEventListener('click', flipCard);
        });
        
        attempts = 0;
        matches = 0;
        attemptsElement.textContent = attempts;
        matchesElement.textContent = matches;
    }

    // Événements
    cards.forEach(card => card.addEventListener('click', flipCard));
    restartBtn.addEventListener('click', shuffleCards);

    // Préchargement des images
    const kingImages = [
        @foreach($kings as $king)
            '{{ asset("images/kings/" . $king['image']) }}',
        @endforeach
    ];
    
    kingImages.forEach(src => {
        new Image().src = src;
    });
});
</script>
@endsection