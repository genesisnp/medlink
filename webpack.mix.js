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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/views/components/tabs-diary/tabs.js', 'public/js')
    .js('resources/views/components/tabs-diary/carousel.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/views/components/diary/diary.scss', 'public/css')
    .sass('resources/views/components/tabs-diary/tabs-diary.scss', 'public/css')
    .sass('resources/views/components/patients-attended/patients-attended.scss', 'public/css')
    .sass('resources/views/components/progress/progress.scss', 'public/css')
    .sass('resources/views/components/citation-breakdown/citation-breakdown.scss', 'public/css')
    .sass('resources/views/components/effectiveness-rate/effectiveness-rate.scss', 'public/css')
    .sass('resources/views/components/diagnostics/diagnostics.scss', 'public/css')
    .sass('resources/views/components/finances/finances.scss', 'public/css')
    .copyDirectory('resources/assets/images', 'public/assets/images')
    .copyDirectory('resources/assets/fonts', 'public/assets/fonts')
    .version();