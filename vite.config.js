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
        host: '0.0.0.0',       // Permet à l'application d'écouter sur toutes les interfaces réseau
        port: process.env.PORT || 3000,  // Utilise la variable d'environnement PORT si définie
        preview: {
            allowedHosts: ['soutenance-3.onrender.com'],  // Ajoute l'hôte autorisé
        },
    },
});
