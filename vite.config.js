import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [ 
                    // Css
                    'public/assets/css/app.css',
                    'public/assets/css/login-media.css', 
                    'public/assets/css/bootstrap-icons.css', 
                    'public/assets/css/login.css', 
                    'public/assets/css/admin/header.css', 
                    'public/assets/css/admin/sidebar.css', 
                    'public/assets/css/admin/dashboard/main.css', 
                    'public/assets/css/admin/dashboard/table.css', 
                    'public/assets/css/admin/dashboard/reports.css',

                    // sass
                    'public/assets/sass/app.scss', 

                    // Js
                    'public/assets/js/app.js', 
                    'public/assets/js/admin/layout/realtime_update.js', 
                    'public/assets/js/login-toggler.js'],

            refresh: true,
        }),
    ],
});
