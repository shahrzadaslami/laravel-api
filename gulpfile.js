var elixir = require('laravel-elixir');



elixir(function(mix) {
    mix.sass("app.scss");
    mix.scripts([
        'app.js'
    ], 'public/js/app.js');
});