var elixir = require('laravel-elixir'),
    gulp = require('gulp'),
    stylus = require('laravel-elixir-stylus'),
    autoprefixer = require('gulp-autoprefixer'),
    tinypng = require('elixir-tinypng'),
    plumber = require('gulp-plumber');

elixir(function (mix) {

    mix.tinypng({
        key: '6R3ddSeN039Qn91I3YBCUN2j7XjAV-7u',
        sigFile: '.tinypng-sigs',
        summarize: true,
    });

    mix.copy('resources/assets/img/*.*', 'public/img/');
    mix.copy('resources/assets/svg-inline/*.*', 'public/svg/');
    mix.copy('resources/assets/fonts/*.*', 'public/fonts/');

    mix.stylus('app.styl'), {
        use: [autoprefixer('last 7 versions', 'ie8' )]
    };

    mix.scriptsIn();

    mix.browserSync({
        proxy: 'ecoleinfographie.app'
    });
})

