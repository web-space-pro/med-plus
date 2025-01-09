const mix = require('laravel-mix');

mix
    .js('assets/src/scripts/app.js', 'assets/dist/scripts')
    .sass('assets/src/styles/app.scss', 'assets/dist/css')
    .copy('assets/src/fonts', 'assets/dist/fonts')