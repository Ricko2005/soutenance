@extends('layout.app')

@section('title', $game['title'])

@section('content')
<div class="game-container" style="background-color: {{ $game['color'] }}20">
    <div class="container py-5">
        <div class="game-header text-center mb-4">
            <h1><i class="fas fa-{{ $game['icon'] }}"></i> {{ $game['title'] }}</h1>
            <p class="lead">Testez vos connaissances sur l'histoire coloniale et les restitutions au Bénin</p>
            <div class="progress-container">
                <div class="progress">
                    <div class="progress-bar" id="quiz-progress" role="progressbar"></div>
                </div>
                <span id="progress-text">Question 1/10</span>
            </div>
        </div>

        <div class="quiz-game">
            <div id="quiz-container">
                <!-- Les questions seront chargées dynamiquement -->
            </div>
        </div>
    </div>
</div>

<style>
    .quiz-game {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        max-width: 800px;
        margin: 0 auto;
    }

    .progress-container {
        margin: 2rem auto;
        max-width: 500px;
    }

    .progress {
        height: 10px;
        margin-bottom: 5px;
    }

    .progress-bar {
        background-color: {{ $game['color'] }};
        transition: width 0.5s ease;
    }

    .question-container {
        margin-bottom: 2rem;
    }

    .question-text {
        font-size: 1.3rem;
        margin-bottom: 1.5rem;
        color: #333;
        font-weight: 500;
    }

    .options-container {
        display: grid;
        gap: 1rem;
    }

    .quiz-option {
        padding: 1rem 1.5rem;
        background: #f8f9fa;
        border: 2px solid #ddd;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s;
        text-align: left;
        position: relative;
        padding-left: 3rem;
    }

    .quiz-option:hover {
        transform: translateX(5px);
        border-color: {{ $game['color'] }};
    }

    .quiz-option::before {
        content: attr(data-letter);
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        width: 1.5rem;
        height: 1.5rem;
        border-radius: 50%;
        background: #e9ecef;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    .quiz-option.correct {
        background: rgba(40, 167, 69, 0.1);
        border-color: #28a745;
    }

    .quiz-option.correct::before {
        background: #28a745;
        color: white;
    }

    .quiz-option.incorrect {
        background: rgba(220, 53, 69, 0.1);
        border-color: #dc3545;
    }

    .quiz-option.incorrect::before {
        background: #dc3545;
        color: white;
    }

    .feedback {
        margin-top: 1.5rem;
        padding: 1.5rem;
        border-radius: 8px;
        background: #f8f9fa;
        border-left: 4px solid {{ $game['color'] }};
        display: none;
    }

    .feedback.show {
        display: block;
        animation: fadeIn 0.5s;
    }

    .feedback-icon {
        color: {{ $game['color'] }};
        margin-right: 0.5rem;
    }

    .next-btn {
        display: none;
        margin-top: 1.5rem;
        padding: 0.8rem 2rem;
        background: {{ $game['color'] }};
        border: none;
    }

    .next-btn:hover {
        background: {{ $game['color'] }};
        opacity: 0.9;
    }

    .quiz-result {
        text-align: center;
        padding: 2rem;
    }

    .quiz-result h3 {
        color: {{ $game['color'] }};
        margin-bottom: 1.5rem;
        font-size: 1.8rem;
    }

    .final-score {
        font-size: 2rem;
        font-weight: bold;
        margin: 1.5rem 0;
        color: #333;
    }

    .result-message {
        font-size: 1.2rem;
        margin-bottom: 2rem;
    }

    .restart-btn {
        padding: 0.8rem 2rem;
        background: {{ $game['color'] }};
        border: none;
        font-size: 1.1rem;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 768px) {
        .question-text {
            font-size: 1.1rem;
        }
        
        .quiz-option {
            padding: 0.8rem 1rem 0.8rem 2.5rem;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Configuration du quiz
    const quizData = [
        {
            question: "En quelle année les troupes françaises ont-elles pénétré dans Abomey ?",
            options: ["1885", "1892", "1901", "1914"],
            answer: 1,
            explanation: "Le général Dodds est entré dans Abomey le 17 novembre 1892 après deux ans de guerre contre le roi Béhanzin."
        },
        {
            question: "Que sont devenus les biens royaux pris par les troupes françaises ?",
            options: [
                "Ils ont été détruits sur place",
                "Ils ont été emportés en France", 
                "Ils ont été partagés entre les soldats",
                "Ils ont été cachés par la population locale"
            ],
            answer: 1,
            explanation: "Les troupes françaises ont pillé les palais royaux et rapporté les trésors en France comme butin de guerre."
        },
        {
            question: "Comment s'appelait la colonie française dans la région ?",
            options: [
                "Colonie du Bénin",
                "Colonie du Dahomey et dépendances",
                "Colonie de l'Afrique Occidentale",
                "Colonie du Golfe de Guinée"
            ],
            answer: 1,
            explanation: "La France a administré la région sous le nom de 'colonie du Dahomey et dépendances' jusqu'à l'indépendance en 1960."
        },
        {
            question: "Quand les premières demandes de restitution ont-elles été formulées ?",
            options: [
                "Pendant la période coloniale",
                "Dans les années 1960 lors des indépendances",
                "Dans les années 1990",
                "Au 21ème siècle seulement"
            ],
            answer: 1,
            explanation: "Dès les indépendances dans les années 1960, plusieurs pays africains dont le Bénin ont demandé la restitution de leurs biens culturels."
        },
        {
            question: "Quel président français a initié le processus de restitution ?",
            options: [
                "François Hollande",
                "Emmanuel Macron",
                "Nicolas Sarkozy",
                "Jacques Chirac"
            ],
            answer: 1,
            explanation: "Emmanuel Macron a annoncé cette volonté lors de son discours à l'université de Ouagadougou en novembre 2017."
        },
        {
            question: "Quel obstacle juridique a retardé les restitutions ?",
            options: [
                "La loi béninoise",
                "Le principe d'inaliénabilité des collections publiques françaises",
                "Les accords internationaux",
                "La Constitution française"
            ],
            answer: 1,
            explanation: "Le droit français considérait ces biens comme inaliénables jusqu'à l'adoption d'une loi spéciale en décembre 2020."
        },
        {
            question: "Combien d'œuvres ont été restituées au Bénin en 2021 ?",
            options: ["10", "15", "26", "50"],
            answer: 2,
            explanation: "26 biens culturels des trésors royaux d'Abomey ont été officiellement restitués."
        },
        {
            question: "Où les œuvres ont-elles été accueillies au Bénin ?",
            options: [
                "Au Musée d'Abomey",
                "À l'Assemblée Nationale",
                "Au palais de la Marina",
                "À l'aéroport international"
            ],
            answer: 2,
            explanation: "Les œuvres ont été officiellement reçues lors d'une cérémonie au palais de la Marina à Cotonou."
        },
        {
            question: "Que représentent ces restitutions ?",
            options: [
                "Les premières œuvres restituées par la France au Bénin",
                "Une simple formalité administrative",
                "Un échange culturel temporaire",
                "Une exception sans lendemain"
            ],
            answer: 0,
            explanation: "C'était la première fois que la France restituait des biens culturels au Bénin, marquant un précédent historique."
        },
        {
            question: "Pourquoi ces restitutions sont-elles importantes ?",
            options: [
                "Pour leur valeur monétaire",
                "Pour le retour sur leur terre d'origine d'œuvres pillées",
                "Pour enrichir les musées béninois",
                "Pour attirer les touristes"
            ],
            answer: 1,
            explanation: "L'importance majeure est symbolique et historique : le retour sur leur terre natale de ces trésors culturels pillés pendant la colonisation."
        }
    ];

    const quizContainer = document.getElementById('quiz-container');
    const progressBar = document.getElementById('quiz-progress');
    const progressText = document.getElementById('progress-text');
    let currentQuestion = 0;
    let score = 0;
    const letters = ['A', 'B', 'C', 'D'];

    // Charger une question
    function loadQuestion() {
        const question = quizData[currentQuestion];
        progressBar.style.width = `${((currentQuestion + 1) / quizData.length) * 100}%`;
        progressText.textContent = `Question ${currentQuestion + 1}/${quizData.length}`;

        quizContainer.innerHTML = `
            <div class="question-container">
                <h3 class="question-text">${question.question}</h3>
                <div class="options-container">
                    ${question.options.map((option, index) => `
                        <div class="quiz-option" 
                             data-index="${index}"
                             data-letter="${letters[index]}">
                            ${option}
                        </div>
                    `).join('')}
                </div>
                <div class="feedback" id="feedback">
                    <i class="fas fa-info-circle feedback-icon"></i>
                    <span id="feedback-text">${question.explanation}</span>
                </div>
                <button class="btn btn-primary next-btn" id="next-btn">
                    ${currentQuestion < quizData.length - 1 ? 'Question suivante' : 'Voir les résultats'} <i class="fas fa-arrow-right ms-2"></i>
                </button>
            </div>
        `;

        // Ajouter les événements
        document.querySelectorAll('.quiz-option').forEach(option => {
            option.addEventListener('click', selectAnswer);
        });

        document.getElementById('next-btn').addEventListener('click', nextQuestion);
    }

    // Sélectionner une réponse
    function selectAnswer(e) {
        const selectedOption = e.currentTarget;
        const question = quizData[currentQuestion];
        const feedback = document.getElementById('feedback');
        const nextBtn = document.getElementById('next-btn');

        // Désactiver toutes les options
        document.querySelectorAll('.quiz-option').forEach(opt => {
            opt.style.pointerEvents = 'none';
        });

        // Marquer la bonne réponse
        document.querySelector(`.quiz-option[data-index="${question.answer}"]`)
            .classList.add('correct');

        // Vérifier la réponse
        if (parseInt(selectedOption.dataset.index) === question.answer) {
            selectedOption.classList.add('correct');
            score++;
        } else {
            selectedOption.classList.add('incorrect');
        }
        
        // Afficher le feedback et le bouton suivant
        feedback.classList.add('show');
        nextBtn.style.display = 'block';
    }

    // Passer à la question suivante
    function nextQuestion() {
        currentQuestion++;
        
        if (currentQuestion < quizData.length) {
            loadQuestion();
        } else {
            showFinalResult();
        }
    }

    // Afficher le résultat final
    function showFinalResult() {
        let message;
        const percentage = (score / quizData.length) * 100;

        if (percentage === 100) {
            message = "Félicitations ! Vous maîtrisez parfaitement ce chapitre de l'histoire.";
        } else if (percentage >= 70) {
            message = "Excellent travail ! Vous connaissez bien cette période historique.";
        } else if (percentage >= 50) {
            message = "Pas mal ! Vous avez des bases mais pouvez encore progresser.";
        } else {
            message = "Continuez à apprendre, vous progresserez !";
        }

        quizContainer.innerHTML = `
            <div class="quiz-result">
                <h3>Quiz terminé !</h3>
                <div class="final-score">Votre score: ${score}/${quizData.length}</div>
                <p class="result-message">${message}</p>
                <button class="btn btn-primary restart-btn" onclick="location.reload()">
                    <i class="fas fa-redo me-2"></i>Recommencer le quiz
                </button>
            </div>
        `;
    }

    // Démarrer le quiz
    loadQuestion();
});
</script>
@endsection