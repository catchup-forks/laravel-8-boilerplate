const mix = require('laravel-mix');

mix.setPublicPath('public')

mix
    .postCss(
    'resources/css/app.css', 'css', [
        require('tailwindcss')
    ])
    .sass('resources/assets/sass/frontend/app.scss', 'css/frontend.css')
    .sass('resources/assets/sass/backend/app.scss', 'css/backend.css')
    .js('resources/assets/js/frontend/app.js', 'js/frontend.js')
    .js(['resources/assets/js/backend/before.js', 'resources/assets/js/backend/app.js', 'resources/assets/js/backend/after.js'], 'js/backend.js');
