var elixir = require('laravel-elixir'),
    gulp = require('gulp'),
    stylus = require('laravel-elixir-stylus'),
    autoprefixer = require('gulp-autoprefixer'),
    tinypng = require('elixir-tinypng');

require('laravel-elixir-browserify-official');

elixir(function (mix) {

    mix.tinypng({
        key: '6R3ddSeN039Qn91I3YBCUN2j7XjAV-7u',
        sigFile: '.tinypng-sigs',
        summarize: true,
    });

    mix.stylus('app.styl'), {
        use: [autoprefixer('last 7 versions', 'ie8' )]
    };

    //mix.browserify('all.js');

    mix.scripts([

        './resources/assets/js/vendor/*.js',
        './resources/assets/js/front.js',
        './resources/assets/js/class/*.js',
        './resources/assets/js/pages/*.js',

        ])

    //mix.scriptsIn();

    //mix.copy('resources/assets/img/*.*', 'public/img/');
    mix.copy('resources/assets/svg-inline/*.*', 'public/svg/');
    mix.copy('resources/assets/fonts/*.*', 'public/fonts/');

    mix.browserSync({
        proxy: 'ecoleinfographie.app'
    });
});
