const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/assets/css/vendor/owl.carousel.min.css',
    'resources/assets/css/background_shapes.css',
    'resources/assets/css/header.css',
    'resources/assets/css/main.css',
    'resources/assets/css/home.css',
    'resources/assets/css/style.css'
], 'public/assets/css/front.css');

mix.scripts([
    'resources/assets/js/vendor/owl.carousel.min.js',
    'resources/assets/js/vendor/jquery-2.2.4.min.js',
    'resources/assets/js/vendor/functions-min.js',
    'resources/assets/js/vendor/plugins.js',
    'resources/assets/js/main.js',
    'resources/assets/js/home.js',
], 'public/assets/js/front.js');

mix.copy('resources/assets/img/','public/assets/img');
mix.copy('resources/assets/js/service-site.js','public/assets/js/service.js');
mix.copy('resources/assets/css/service-site.css','public/assets/css/service.css');



mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
