@extends('layout.app')

@section('title', $game['title'])

@section('content')
<div class="game-container" style="background-color: {{ $game['color'] }}20">
    <div class="container py-5">
        <div class="game-header">
            <h1><i class="fas fa-{{ $game['icon'] }}"></i> {{ $game['title'] }}</h1>
            <p>Replace les événements dans le bon ordre chronologique</p>
        </div>

        @php
        $timeline = [
            ['date' => '1235', 'event' => 'Fondation de l’Empire du Mali par Soundiata Keïta'],
            ['date' => '1497', 'event' => 'Arrivée des Portugais sur les côtes africaines'],
            ['date' => '1807', 'event' => 'Abolition de la traite négrière par le Royaume-Uni'],
            ['date' => '1884', 'event' => 'Conférence de Berlin sur le partage de l’Afrique'],
            ['date' => '1960', 'event' => 'Indépendances africaines en cascade'],
        ];
        @endphp

        <div class="timeline-game">
            <div class="timeline-items" id="draggable-items">
                @foreach(collect($timeline)->shuffle() as $item)
                <div class="timeline-item" draggable="true" data-date="{{ $item['date'] }}">
                    <span class="event-date">{{ $item['date'] }}</span>
                    <span class="event-name">{{ $item['event'] }}</span>
                </div>
                @endforeach
            </div>

            <div class="timeline-slots" id="drop-slots">
                @foreach(collect($timeline)->sortBy('date') as $item)
                <div class="slot" data-date="{{ $item['date'] }}">
                    <div class="slot-label">{{ $loop->iteration }}.</div>
                </div>
                @endforeach
            </div>

            <button id="check-timeline" class="btn btn-primary mt-4">
                <i class="fas fa-check-circle"></i> Vérifier
            </button>

            <div id="timeline-feedback" class="mt-3"></div>
        </div>
    </div>
</div>

<style>
    .timeline-game {
        background: white;
        border-radius: 10px;
        padding: 2rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .timeline-items {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-bottom: 2rem;
    }

    .timeline-item {
        padding: 12px 15px;
        background: #f8f9fa;
        border-left: 4px solid {{ $game['color'] }};
        border-radius: 4px;
        cursor: grab;
        display: flex;
        align-items: center;
        transition: all 0.3s;
    }

    .timeline-item:hover {
        transform: translateX(5px);
    }

    .timeline-item.dragging {
        opacity: 0.5;
        background: #e9ecef;
    }

    .event-date {
        font-weight: bold;
        margin-right: 10px;
        color: {{ $game['color'] }};
    }

    .timeline-slots {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .slot {
        min-height: 50px;
        border: 2px dashed #6c757d;
        border-radius: 4px;
        display: flex;
        align-items: center;
        padding-left: 15px;
        transition: all 0.3s;
    }

    .slot.highlight {
        background-color: {{ $game['color'] }}15;
        border-color: {{ $game['color'] }};
    }

    .slot.correct {
        background-color: rgba(40, 167, 69, 0.1);
        border-color: #28a745;
    }

    .slot.incorrect {
        background-color: rgba(220, 53, 69, 0.1);
        border-color: #dc3545;
    }

    .slot-label {
        font-weight: bold;
        color: #6c757d;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const draggableItems = document.querySelectorAll('.timeline-item');
        const dropSlots = document.querySelectorAll('.slot');
        const checkButton = document.getElementById('check-timeline');
        const feedbackDiv = document.getElementById('timeline-feedback');

        let draggedItem = null;

        draggableItems.forEach(item => {
            item.addEventListener('dragstart', function() {
                draggedItem = this;
                setTimeout(() => this.classList.add('dragging'), 0);
            });

            item.addEventListener('dragend', function() {
                this.classList.remove('dragging');
            });
        });

        dropSlots.forEach(slot => {
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

                if (draggedItem) {
                    if (this.children.length > 1) {
                        const existingItem = this.children[1];
                        document.getElementById('draggable-items').appendChild(existingItem);
                    }
                    this.appendChild(draggedItem);
                    draggedItem = null;
                }
            });
        });

        checkButton.addEventListener('click', function() {
            let allCorrect = true;

            dropSlots.forEach(slot => {
                const item = slot.querySelector('.timeline-item');
                const slotDate = slot.dataset.date;

                if (item && item.dataset.date === slotDate) {
                    slot.classList.add('correct');
                    slot.classList.remove('incorrect');
                } else {
                    slot.classList.add('incorrect');
                    slot.classList.remove('correct');
                    allCorrect = false;
                }
            });

            if (allCorrect) {
                feedbackDiv.innerHTML = `
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i> Bravo ! Tu as parfaitement reconstitué la chronologie.
                    </div>
                `;
            } else {
                feedbackDiv.innerHTML = `
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle"></i> Quelques erreurs... Regarde les cases rouges et corrige-les.
                    </div>
                `;
            }
        });
    });
</script>
@endsection
