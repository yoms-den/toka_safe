import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/apexchart.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        chunkSizeWarningLimit: 1600,
    },
});
