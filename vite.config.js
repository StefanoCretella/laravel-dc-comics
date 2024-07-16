// vite.config.js

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/header.css',
                'resources/css/comic-details.css',
                'resources/css/home.css',
                'resources/css/comics-list.css', 
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
