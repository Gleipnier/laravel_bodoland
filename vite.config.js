import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import Swiper from 'swiper';
import 'swiper/swiper-bundle.min.css';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
