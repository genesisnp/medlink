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
    .sass('resources/sass/public-profile.scss', 'public/css')
    .sass('resources/sass/indicators.scss', 'public/css')
    .sass('resources/sass/calendar.scss', 'public/css')
    .sass('resources/sass/summary.scss', 'public/css')
    .sass('resources/sass/finances.scss', 'public/css')
    .sass('resources/views/components/header/header.scss', 'public/css')
    // .sass('resources/views/components/footer/footer.scss', 'public/css')
    .sass('resources/views/components/tabs/tabs.scss', 'public/css')
    .sass('resources/views/components/tabs-timetable/tabs-timetable.scss', 'public/css')
    .sass('resources/views/components/patients-attended/patients-attended.scss', 'public/css')
    .sass('resources/views/components/form-profile/form-profile.scss', 'public/css')
    .sass('resources/views/components/card-digital/card-digital.scss', 'public/css')
    .sass('resources/views/components/card-profile/card-profile.scss', 'public/css')
    .sass('resources/views/components/modal/modal.scss', 'public/css')
    .copyDirectory('resources/assets/images', 'public/assets/images')
    .copyDirectory('resources/assets/fonts', 'public/assets/fonts')
    .version();