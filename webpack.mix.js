const { mix } = require('laravel-mix');

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
    'resources/assets/css/font-awesome.min.css',
    'resources/assets/css/main.css'
], 'public/css/main.css')
    .scripts([
        'resources/assets/js/jquery.min.js',
        'resources/assets/js/skel.min.js',
        'resources/assets/js/util.js',
        'resources/assets/js/main.js'
    ], 'public/js/main.js');