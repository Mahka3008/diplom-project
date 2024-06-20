import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
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
