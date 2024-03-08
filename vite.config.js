import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/date.js',
                'resources/js/image-input.js',
                'resources/js/password.js',
                'resources/js/flash-message.js',
            ],
            refresh: true,
        }),
    ],
});
