import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',  // Permet de lier l'app sur toutes les interfaces réseau
        port: process.env.PORT || 3000,  // Utilise le port de Render (ou un port par défaut)
        allowedHosts: ['localhost', '127.0.0.1', 'soutenance-5.onrender.com'], // Ajoute les hôtes autorisés
    },
});
