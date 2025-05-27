@extends('layout.app')

@section('title', 'Contactez-nous')

@section('content')
    <section class="contact-hero">
        <div class="hero-overlay">
            <div class="container">
                <h1>Contactez notre équipe</h1>
                <p>Une question, une suggestion ou besoin d'assistance ? Nous sommes là pour vous aider.</p>
            </div>
        </div>
    </section>

    <div class="contact-main">
        <div class="container">
            <div class="contact-grid">
                <!-- Carte Contact -->
                <div class="contact-card">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                            <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                        </svg>
                    </div>
                    <h3>Email</h3>
                    <p>totchenou@gmail.com</p>
                    <p>romarictolofon7@gmail.com</p>
                    <a href="mailto:contact@totchenou.com" class="contact-link">Envoyer un email <span>&rarr;</span></a>
                </div>

                <!-- Carte Téléphone -->
                <div class="contact-card">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3>Téléphone</h3>
                    <p>+229 01 62 88 02 63</p>
                    <p>+229 01 97 16 13 23</p>
                    <a href="tel:+22912345678" class="contact-link">Appeler maintenant <span>&rarr;</span></a>
                </div>

                <!-- Carte Adresse -->
                <div class="contact-card">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3>Adresse</h3>
                    <p>123 Rue de l'Innovation</p>
                    <p>Cotonou, Bénin</p>
                    <a href="https://maps.google.com?q=123+Rue+de+l'Innovation,Cotonou,Benin" target="_blank" class="contact-link">Voir sur la carte <span>&rarr;</span></a>
                </div>
            </div>

            <!-- Formulaire de Contact -->
            <div class="contact-form-section">
                <div class="form-intro">
                    <h2>Envoyez-nous un message</h2>
                    <p>Remplissez ce formulaire et nous vous répondrons dans les plus brefs délais.</p>
                </div>

                <form class="modern-form" id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Votre nom complet</label>
                            <input type="text" id="name" name="name" required placeholder="Entrez votre nom">
                        </div>
                        <div class="form-group">
                            <label for="email">Adresse email</label>
                            <input type="email" id="email" name="email" required placeholder="Entrez votre email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Sujet du message</label>
                        <select id="subject" name="subject" required>
                            <option value="" disabled selected>Sélectionnez un sujet</option>
                            <option value="support">Support technique</option>
                            <option value="partnership">Partenariat</option>
                            <option value="information">Demande d'information</option>
                            <option value="feedback">Retour d'expérience</option>
                            <option value="other">Autre</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Votre message</label>
                        <textarea id="message" name="message" rows="6" required placeholder="Décrivez votre demande en détail..."></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="submit-button">
                            <span class="button-text">Envoyer le message</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Carte Google Maps -->
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.258981021884!2d2.420505315769474!3d6.365689895387654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023556f5f7e8a0f%3A0x5c5f2a5a5f5f5a5a!2sCotonou%2C%20B%C3%A9nin!5e0!3m2!1sfr!2sfr!4v1620000000000!5m2!1sfr!2sfr" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
        </iframe>
    </div>
@endsection

@push('styles')
    <style>
        /* Variables */
        :root {
            --primary: #8A1714;
            --primary-dark: #8A1714;
            --primary-light: #8A1714;
            --text: #1f2937;
            --text-light: #6b7280;
            --light: #f9fafb;
            --white: #ffffff;
            --gray: #e5e7eb;
            --dark-gray: #9ca3af;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --radius: 8px;
            --transition: all 0.3s ease;
        }

        /* Base Styles */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .contact-hero {
            position: relative;
            height: 350px;
            background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            margin-bottom: 60px;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
        }

        .contact-hero h1 {
            color: var(--white);
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .contact-hero p {
            color: var(--gray);
            font-size: 1.25rem;
            max-width: 600px;
        }

        /* Main Content */
        .contact-main {
            padding: 60px 0;
        }

        /* Contact Grid */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .contact-card {
            background: var(--white);
            border-radius: var(--radius);
            padding: 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            background: rgba(37, 99, 235, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-icon svg {
            width: 24px;
            height: 24px;
            color: var(--primary);
        }

        .contact-card h3 {
            color: var(--text);
            font-size: 1.25rem;
            margin-bottom: 15px;
        }

        .contact-card p {
            color: var(--text-light);
            margin-bottom: 5px;
            font-size: 0.95rem;
        }

        .contact-link {
            display: inline-block;
            margin-top: 20px;
            color: var(--primary);
            font-weight: 500;
            text-decoration: none;
            transition: var(--transition);
        }

        .contact-link span {
            display: inline-block;
            transition: var(--transition);
        }

        .contact-link:hover {
            color: var(--primary-dark);
        }

        .contact-link:hover span {
            transform: translateX(3px);
        }

        /* Form Section */
        .contact-form-section {
            background: var(--white);
            border-radius: var(--radius);
            padding: 40px;
            box-shadow: var(--shadow);
        }

        .form-intro {
            text-align: center;
            margin-bottom: 40px;
        }

        .form-intro h2 {
            color: var(--text);
            font-size: 1.75rem;
            margin-bottom: 10px;
        }

        .form-intro p {
            color: var(--text-light);
            max-width: 600px;
            margin: 0 auto;
        }

        .modern-form {
            max-width: 800px;
            margin: 0 auto;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        @media (min-width: 768px) {
            .form-row {
                grid-template-columns: 1fr 1fr;
            }
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--text);
            font-weight: 500;
            font-size: 0.95rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--gray);
            border-radius: var(--radius);
            font-size: 1rem;
            transition: var(--transition);
            background: var(--light);
        }

        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }

        .form-group select {
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 16px;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }

        .submit-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: var(--primary);
            color: var(--white);
            border: none;
            padding: 14px 24px;
            border-radius: var(--radius);
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            width: 100%;
        }

        .submit-button:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .submit-button svg {
            width: 18px;
            height: 18px;
        }

        /* Map Section */
        .map-container {
            width: 100%;
            height: 450px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .contact-hero {
                height: 300px;
            }
            
            .contact-hero h1 {
                font-size: 2rem;
            }
            
            .contact-hero p {
                font-size: 1.1rem;
            }
            
            .contact-grid {
                grid-template-columns: 1fr;
            }
            
            .contact-form-section {
                padding: 30px 20px;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const submitBtn = this.querySelector('.submit-button');
                const buttonText = submitBtn.querySelector('.button-text');
                const originalText = buttonText.textContent;
                
                // Show loading state
                submitBtn.disabled = true;
                buttonText.textContent = 'Envoi en cours...';
                
                // Simulate form submission
                setTimeout(() => {
                    // Show success state
                    buttonText.textContent = 'Message envoyé !';
                    submitBtn.style.backgroundColor = '#10b981';
                    
                    // Reset after 2 seconds
                    setTimeout(() => {
                        contactForm.reset();
                        submitBtn.disabled = false;
                        buttonText.textContent = originalText;
                        submitBtn.style.backgroundColor = '';
                    }, 2000);
                }, 1500);
            });
        });
    </script>
@endpush