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

// mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
//     require('postcss-import'),
//     require('tailwindcss'),
//     require('autoprefixer'),
// ]);

/**
 * General
 */

mix.copy('resources/assets/plugins/', 'public/assets/plugins')
mix.js('resources/js/app.js', 'public/js/');
mix.sass('resources/assets/auth/scss/auth.scss', 'public/assets/auth')

/****
 *
 *  ADMIN
 *
 */

mix.sass('resources/assets/admin/scss/app.scss', 'public/assets/admin')

mix.js('resources/assets/admin/js/main.js', 'public/assets/admin/js');
mix.js('resources/assets/admin/js/confirm.js', 'public/assets/admin/js');



/****
 *
 *  Client
 *
 */
//
// mix.sass('resources/assets/client/scss/app.scss', 'public/assets/client/css')
//
// mix.js('resources/assets/client/js/theme.js', 'public/assets/client/js/theme.js');


mix.copy('resources/landing', 'public/landing')


if(mix.inProduction()){
    mix.version();
}
