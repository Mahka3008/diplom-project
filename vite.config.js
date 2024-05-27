import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/scss/app.scss'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0', // Это позволяет Vite слушать на всех IP-адресах внутри контейнера
        port: 3000,      // Порт, на котором будет работать Vite сервер
        hmr: {
            host: 'diplom.local',  // Внешний доступный домен
            port: 3000,            // Порт для HMR должен совпадать с портом сервера Vite
        },
        watch: {
            usePolling: true, // Это помогает при использовании WSL2
        },
    },

});
