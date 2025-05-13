@extends('layout.app')

@section('title', 'Contact')

@section('content')
    <div class="contact-hero">
        <div class="hero-overlay">
            <h1>Contactez-Nous</h1>
            <p>Nous sommes à votre écoute pour répondre à toutes vos questions</p>
        </div>
    </div>

    <div class="contact-container">
        <div class="contact-grid">
            <!-- Formulaire de Contact -->
            <div class="contact-form-section">
                <div class="form-header">
                    <h2><i class="fas fa-paper-plane"></i> Envoyez-nous un message</h2>
                    <p>Remplissez ce formulaire et nous vous répondrons dans les plus brefs délais</p>
                </div>
                
                <form action="#" method="POST" class="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Nom complet</label>
                            <div class="input-with-icon">
                                <i class="fas fa-user"></i>
                                <input type="text" id="name" name="name" placeholder="Votre nom" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Adresse email</label>
                            <div class="input-with-icon">
                                <i class="fas fa-envelope"></i>
                                <input type="email" id="email" name="email" placeholder="Votre email" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Sujet</label>
                        <div class="input-with-icon">
                            <i class="fas fa-tag"></i>
                            <input type="text" id="subject" name="subject" placeholder="Objet de votre message">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <div class="textarea-with-icon">
                            <i class="fas fa-comment-alt"></i>
                            <textarea id="message" name="message" rows="6" placeholder="Décrivez-nous votre demande" required></textarea>
                        </div>
                    </div>
                    
                    <button type="submit" class="submit-btn">
                        <span>Envoyer le message</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>

            <!-- Informations de contact -->
            <div class="contact-info-section">
                <div class="info-card">
                    <h2><i class="fas fa-map-marker-alt"></i> Nos coordonnées</h2>
                    
                    <div class="contact-method">
                        <div class="icon-circle bg-purple">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3>Adresse</h3>
                            <p>123 Avenue de la République, Cotonou, Bénin</p>
                        </div>
                    </div>
                    
                    <div class="contact-method">
                        <div class="icon-circle bg-blue">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h3>Téléphone</h3>
                            <p>+229 12 34 56 78</p>
                            <p>+229 98 76 54 32</p>
                        </div>
                    </div>
                    
                    <div class="contact-method">
                        <div class="icon-circle bg-red">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3>Email</h3>
                            <p>contact@totchenou.com</p>
                            <p>support@totchenou.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-method">
                        <div class="icon-circle bg-orange">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3>Heures d'ouverture</h3>
                            <p>Lundi - Vendredi: 8h - 18h</p>
                            <p>Samedi: 9h - 13h</p>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte Google -->
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126885.3347564085!2d2.3137748289203204!3d6.372466676939312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102354e509f894f7%3A0xc8fde921f89849f6!2sCotonou!5e0!3m2!1sfr!2sbj!4v1743757303676!5m2!1sfr!2sbj" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
                  @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap');

        :root {
            --primary-color: #6c5ce7;
            --primary-dark: #5649c0;
            --secondary-color: #a29bfe;
            --accent-color: #fd79a8;
            --text-dark: #2d3436;
            --text-light: #636e72;
            --light-bg: #f9f9f9;
            --white: #ffffff;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        
      
        /* Hero Section */
        .contact-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url({{ asset('images/roi.jpg') }});
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-bottom: 60px;
        }
        
        .hero-overlay h1 {
            font-family: 'Space Grotesk', sans-serif !important;
            font-size: 3rem !important;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .hero-overlay p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* Main Container */
        .contact-container {
            max-width: 1200px;
            margin: 0 auto 60px;
            padding: 0 20px;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 60px;
        }
        
        /* Form Section */
        .contact-form-section {
            background: var(--white);
            border-radius: 12px;
            padding: 40px;
            box-shadow: var(--shadow);
        }
        
        .form-header h2 {
            color: var(--primary-color);
            font-size: 1.8rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .form-header p {
            color: var(--text-light);
            margin-bottom: 30px;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--text-dark);
        }
        
        .input-with-icon, .textarea-with-icon {
            position: relative;
        }
        
        .input-with-icon i, .textarea-with-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color);
        }
        
        .textarea-with-icon i {
            top: 20px;
            transform: none;
        }
        
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: var(--transition);
        }
        
        .form-group textarea {
            padding: 15px 15px 15px 45px;
            resize: vertical;
        }
        
        .form-group input:focus, .form-group textarea:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(108, 92, 231, 0.2);
        }
        
        .submit-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: var(--transition);
            margin-top: 10px;
        }
        
        .submit-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }
        
        /* Contact Info Section */
        .contact-info-section {
            position: relative;
        }
        
        .info-card {
            background: var(--white);
            border-radius: 12px;
            padding: 40px;
            box-shadow: var(--shadow);
            height: 100%;
        }
        
        .info-card h2 {
            color: var(--primary-color);
            font-size: 1.8rem;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .contact-method {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }
        
        .icon-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            flex-shrink: 0;
        }
        
        .bg-purple { background: var(--primary-color); }
        .bg-blue { background: #3498db; }
        .bg-red { background: #e74c3c; }
        .bg-orange { background: #e67e22; }
        
        .contact-method h3 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: var(--text-dark);
        }
        
        .contact-method p {
            color: var(--text-light);
            margin: 3px 0;
            font-size: 0.95rem;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 40px;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #6A1210 !important;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-dark);
            transition: var(--transition);
        }
        
        .social-icon:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }
        
        /* Map Section */
        .map-container {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow);
            height: 450px;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
            
            .hero-overlay h1 {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .contact-hero {
                height: 250px;
            }
            
            .hero-overlay h1 {
                font-size: 2rem;
            }
            
            .hero-overlay p {
                font-size: 1rem;
            }
            
            .contact-form-section, .info-card {
                padding: 30px;
            }
        }
        
        @media (max-width: 480px) {
            .contact-hero {
                height: 200px;
                margin-bottom: 40px;
            }
            
            .hero-overlay h1 {
                font-size: 1.8rem;
            }
            
            .contact-form-section, .info-card {
                padding: 20px;
            }
        }
    </style>
@endpush