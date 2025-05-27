<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Trésors Royaux du Bénin - Portail d'Authentification</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Playfair+Display:700|Lora:400,600|Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm py-2">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Trésors Royaux du Bénin" style="height: 100px;"> <!-- Taille augmentée -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <!-- Liens supplémentaires optionnels -->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto align-items-center">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item me-2">
                                    <a class="nav-link btn btn-outline-royal {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}">
                                        <i class="fas fa-door-open me-2"></i>Portail d'Accès
                                        <span class="auth-badge d-inline d-md-none">Connexion</span>
                                    </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-royal {{ request()->is('register') ? 'active' : '' }}" href="{{ route('register') }}">
                                        <i class="fas fa-scroll me-2"></i>Demande d'Accès
                                        <span class="auth-badge d-inline d-md-none">Inscription</span>
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-royal" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-crown me-2"></i>{{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt me-2"></i> Quitter le Royaume
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <style>
        /* Couleurs principales */
        :root {
            --royal-blue: #2c3e50;
            --royal-red: #6A1210;
            --gold-accent: #D4AF37;
        }

        /* Boutons personnalisés */
        .btn-royal {
            background-color: var(--royal-red);
            color: white !important;
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: 6px;
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .btn-royal:hover {
            background-color: #7a1a18;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(106, 18, 16, 0.2);
        }

        .btn-outline-royal {
            border: 2px solid var(--royal-red);
            color: var(--royal-red) !important;
            background-color: transparent;
            padding: 0.5rem 1.5rem;
            border-radius: 6px;
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .btn-outline-royal:hover {
            background-color: rgba(106, 18, 16, 0.1);
            color: #7a1a18 !important;
            border-color: #7a1a18;
        }

        /* Navigation */
        .navbar {
            border-bottom: 3px solid var(--royal-red);
        }

        .nav-link {
            font-family: 'Lora', serif;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin: 0 5px;
        }

        /* Menu déroulant */
        .dropdown-menu {
            background-color: white;
            border: 1px solid var(--royal-red);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .dropdown-item {
            color: var(--royal-blue);
            font-family: 'Lora', serif;
            padding: 0.75rem 1.5rem;
            transition: all 0.3s;
            border-bottom: 1px solid rgba(106, 18, 16, 0.1);
        }

        .dropdown-item:hover {
            background-color: rgba(106, 18, 16, 0.08);
            color: var(--royal-red);
            padding-left: 1.75rem;
        }

        .dropdown-item:last-child {
            border-bottom: none;
        }

        /* Bouton mobile */
        .navbar-toggler {
            border-color: rgba(106, 18, 16, 0.3) !important;
            padding: 0.35rem 0.75rem;
        }

        /* Badge mobile */
        .auth-badge {
            background-color: var(--royal-red);
            color: white;
            padding: 3px 8px;
            border-radius: 12px;
            font-size: 0.75rem;
            margin-left: 8px;
            vertical-align: middle;
        }

        /* Effet sur le logo */
        .navbar-brand img {
            transition: transform 0.4s;
        }

        .navbar-brand:hover img {
            transform: scale(1.05);
        }
    </style>
</body>
</html>