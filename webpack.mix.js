const {mix} = require('laravel-mix');

mix
    .js('assets/src/js/app.js', './assets/dist/js')
    .sass('assets/src/sass/app.scss', './assets/dist/css')
    .version();