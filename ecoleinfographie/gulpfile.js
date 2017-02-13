var elixir = require('laravel-elixir'),
    gulp = require('gulp'),
    stylus = require('laravel-elixir-stylus'),
    autoprefixer = require('gulp-autoprefixer');



elixir(function(mix) {
    mix.stylus('app.styl'), null, {
        use: [autoprefixer('last 7 versions', 'ie8' )]
    };
    mix.browserSync({
        proxy: 'ecoleinfographie.app'
    });
});
