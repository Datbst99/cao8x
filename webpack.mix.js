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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .sourceMaps();

// general

mix.copy('resources/assets/plugins', 'public/assets/plugins')

//Client
mix.copy('resources/assets/client/images', 'public/client/images')
    .copy('resources/assets/client/fonts', 'public/client/fonts')
    .copy('resources/assets/client/css', 'public/client/css')


// admin
mix.js('resources/assets/admin/js/lte3x.js', 'public/assets/admin/js')
    .js('resources/assets/admin/js/edit-tor.js', 'public/assets/admin/js')

mix.sass('resources/assets/admin/sass/lte3x.scss', 'public/assets/admin/css')
    .sass('resources/assets/admin/sass/main.scss', 'public/assets/admin/css')
    .sass('resources/assets/admin/sass/auth.scss', 'public/assets/admin/css')

// mix.copy('resources/assets/admin/images', 'public/assets/admin/images')
