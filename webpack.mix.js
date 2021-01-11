const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    /* CSS */
    .sass('resources/assets/back/sass/main.scss', 'public/css/oneui.css')
    .sass('resources/assets/back/sass/oneui/themes/amethyst.scss', 'public/css/themes/')
    .sass('resources/assets/back/sass/oneui/themes/city.scss', 'public/css/themes/')
    .sass('resources/assets/back/sass/oneui/themes/flat.scss', 'public/css/themes/')
    .sass('resources/assets/back/sass/oneui/themes/modern.scss', 'public/css/themes/')
    .sass('resources/assets/back/sass/oneui/themes/smooth.scss', 'public/css/themes/')

    /* JS */
    .js('resources/assets/back/js/app.js', 'public/js/laravel.app.js')
    .js('resources/assets/back/js/oneui/app.js', 'public/js/oneui.app.js')

    /* Page JS */
    .js('resources/assets/back/js/pages/tables_datatables.js', 'public/js/pages/tables_datatables.js')

    /* Tools */
    .browserSync('localhost:8000')
    .disableNotifications()

    /* Options */
    .options({
        processCssUrls: false
    });


/**
 * Front End
 */
