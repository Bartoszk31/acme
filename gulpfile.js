var elixir = require('laravel-elixir');

elixir.config.sourcemap = false;

var gulp = require('gulp');

elixir(function(mix) {
    mix.sass('resources/assets/sass/app.scss', 'resources/assets/css');

    mix.styles(
        [
            'resources/assets/css/app.css',
            'node_modules/slick-carousel/slick/slick.css'
        ],
        'public/css/all.css',
        './'
    );

    mix.scripts(
        [
            'node_modules/jquery/dist/jquery.min.js',
            'node_modules/foundation-sites/dist/js/foundation.min.js',
            'node_modules/slick-carousel/slick/slick.min.js'
        ],
        'public/js/all.js',
        './'
    );
});