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
    .js('resources/views/components/tabs/tabs.js', 'public/js')
    .js('resources/views/components/tabs/carousel.js', 'public/js')
    .js('resources/views/components/form-profile/form-profile.js', 'public/js')
    .js('resources/views/components/card-digital/card-digital.js', 'public/js')
    .js('resources/views/components/card-profile/card-profile.js', 'public/js')
    .js('resources/views/components/modal/modal.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/my-profile.scss', 'public/css')
    .sass('resources/sass/appointments.scss', 'public/css')
    .sass('resources/views/components/diary/diary.scss', 'public/css')
    .sass('resources/views/components/tabs/tabs.scss', 'public/css')
    .sass('resources/views/components/patients-attended/patients-attended.scss', 'public/css')
    .sass('resources/views/components/line-progress/line-progress.scss', 'public/css')
    .sass('resources/views/components/citation-breakdown/citation-breakdown.scss', 'public/css')
    .sass('resources/views/components/effectiveness-rate/effectiveness-rate.scss', 'public/css')
    .sass('resources/views/components/diagnostics/diagnostics.scss', 'public/css')
    .sass('resources/views/components/finances/finances.scss', 'public/css')
    .sass('resources/views/components/form-profile/form-profile.scss', 'public/css')
    .sass('resources/views/components/card-digital/card-digital.scss', 'public/css')
    .sass('resources/views/components/card-profile/card-profile.scss', 'public/css')
    .sass('resources/views/components/modal/modal.scss', 'public/css')
    .copyDirectory('resources/assets/images', 'public/assets/images')
    .copyDirectory('resources/assets/fonts', 'public/assets/fonts')
    .version();