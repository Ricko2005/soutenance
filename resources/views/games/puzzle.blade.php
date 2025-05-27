@extends('layout.app')

@section('title', $game['title'])

@section('content')
<div class="game-container" style="background-color: {{ $game['color'] }}20">
    <div class="container py-5">
        <div class="game-header text-center mb-4">
            <h1><i class="fas fa-{{ $game['icon'] }}"></i> {{ $game['title'] }}</h1>
            <p class="lead">Reconstitue le Trône du Roi Ghézo</p>
        </div>

        <div class="puzzle-game">
            <!-- Image de référence -->
            <div class="text-center mb-4">
                <img src="{{ asset('images/throne-complet.jpg') }}" 
                     alt="Trône à reconstituer" 
                     class="img-fluid rounded shadow" 
                     style="max-height: 200px; border: 2px solid {{ $game['color'] }};">
                <p class="mt-2"><small>Trône du Roi Ghézo (œuvre restituée au Bénin)</small></p>
            </div>

            <!-- Zone des pièces -->
            <div class="puzzle-pieces-container mb-4 p-3 bg-light rounded">
                <h5 class="text-center mb-3">Pièces à assembler</h5>
                <div class="puzzle-pieces d-flex flex-wrap justify-content-center gap-3" id="puzzle-pieces">
                    @for($i = 1; $i <= 9; $i++)
                    <div class="puzzle-piece" draggable="true" data-piece="{{ $i }}">
                        <img src="{{ asset('images/pieces/throne-piece-'.$i.'.jpg') }}" 
                             alt="Pièce {{ $i }}" 
                             class="img-fluid">
                    </div>
                    @endfor
                </div>
            </div>

            <!-- Plateau de jeu -->
            <div class="puzzle-board-container text-center mt-4">
                <div class="puzzle-board d-inline-block p-3 bg-light rounded" id="puzzle-board">
                    @for($i = 0; $i < 3; $i++)
                    <div class="puzzle-row d-flex mb-2">
                        @for($j = 0; $j < 3; $j++)
                        <div class="puzzle-slot" 
                             data-row="{{ $i }}" 
                             data-col="{{ $j }}" 
                             data-expected="{{ $i*3 + $j + 1 }}"
                             style="width: 100px; height: 100px;">
                            <!-- Les pièces seront déposées ici -->
                        </div>
                        @endfor
                    </div>
                    @endfor
                </div>
            </div>

            <!-- Boutons -->
            <div class="text-center mt-4">
                <button id="check-puzzle" class="btn btn-primary">
                    <i class="fas fa-check"></i> Vérifier
                </button>
                <button id="reset-puzzle" class="btn btn-secondary ms-2">
                    <i class="fas fa-redo"></i> Recommencer
                </button>
            </div>

            <!-- Feedback -->
            <div id="puzzle-feedback" class="mt-3"></div>
        </div>
    </div>
</div>

<style>
    .puzzle-piece {
        width: 100px;
        height: 100px;
        border: 2px solid #ddd;
        border-radius: 8px;
        cursor: grab;
        transition: all 0.3s;
        overflow: hidden;
        background: white;
    }

    .puzzle-piece img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .puzzle-piece:hover {
        transform: scale(1.05);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .puzzle-slot {
        border: 2px dashed #aaa;
        margin: 0 5px;
        background: white;
        border-radius: 8px;
        transition: all 0.3s;
        overflow: hidden;
    }

    .puzzle-slot.highlight {
        background-color: {{ $game['color'] }}20;
        border-color: {{ $game['color'] }};
    }

    .puzzle-slot.filled {
        border-style: solid;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const pieces = document.querySelectorAll('.puzzle-piece');
    const slots = document.querySelectorAll('.puzzle-slot');
    const checkBtn = document.getElementById('check-puzzle');
    const resetBtn = document.getElementById('reset-puzzle');
    const feedback = document.getElementById('puzzle-feedback');

    let draggedPiece = null;

    // Fonctions pour le drag and drop
    pieces.forEach(piece => {
        piece.addEventListener('dragstart', function(e) {
            draggedPiece = this;
            setTimeout(() => this.style.opacity = '0.4', 0);
            e.dataTransfer.setData('text/plain', this.dataset.piece);
        });

        piece.addEventListener('dragend', function() {
            this.style.opacity = '1';
        });
    });

    slots.forEach(slot => {
        slot.addEventListener('dragover', function(e) {
            e.preventDefault();
            this.classList.add('highlight');
        });

        slot.addEventListener('dragleave', function() {
            this.classList.remove('highlight');
        });

        slot.addEventListener('drop', function(e) {
            e.preventDefault();
            this.classList.remove('highlight');
            
            const pieceNumber = e.dataTransfer.getData('text/plain');
            const piece = document.querySelector(`.puzzle-piece[data-piece="${pieceNumber}"]`);
            
            if (piece) {
                // Si le slot contient déjà une pièce
                if (this.children.length > 0) {
                    document.getElementById('puzzle-pieces').appendChild(this.children[0]);
                }
                
                this.appendChild(piece.cloneNode(true));
                this.classList.add('filled');
            }
        });
    });

    // Vérification du puzzle
    checkBtn.addEventListener('click', function() {
        let correct = true;
        
        slots.forEach(slot => {
            const expected = slot.dataset.expected;
            const piece = slot.querySelector('.puzzle-piece');
            
            if (!piece || piece.dataset.piece !== expected) {
                correct = false;
                slot.style.borderColor = '#dc3545';
            } else {
                slot.style.borderColor = '#28a745';
            }
        });

        if (correct) {
            feedback.innerHTML = `
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i> Félicitations ! Vous avez reconstitué le Trône Royal du Bénin.
                </div>
            `;
        } else {
            feedback.innerHTML = `
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-circle"></i> Quelques erreurs... Essayez encore !
                </div>
            `;
        }
    });

    // Réinitialisation
    resetBtn.addEventListener('click', function() {
        slots.forEach(slot => {
            if (slot.children.length > 0) {
                slot.removeChild(slot.children[0]);
                slot.classList.remove('filled');
                slot.style.borderColor = '';
            }
        });
        feedback.innerHTML = '';
    });
});
</script>
@endsection