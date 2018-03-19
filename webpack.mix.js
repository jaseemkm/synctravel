let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
mix.styles([
    'resources/assets/css/font-awesome.min.css',
	'resources/assets/css/style.css',
	'resources/assets/css/materialize.css',
	'resources/assets/css/bootstrap.css',
	'resources/assets/css/mob.css'
], 'public/css/all.css');