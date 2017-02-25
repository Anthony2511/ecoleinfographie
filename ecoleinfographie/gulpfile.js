var elixir = require('laravel-elixir'),
    gulp = require('gulp'),
    stylus = require('laravel-elixir-stylus'),
    autoprefixer = require('gulp-autoprefixer'),
    tinypng = require('elixir-tinypng'),
    plumber = require('gulp-plumber');


gulp.task('watch', function() {
    gulp.watch('resources/**', ['default']);
    elixir(function(mix) {
        elixir(function(mix) {
            mix.tinypng({
                key: '6R3ddSeN039Qn91I3YBCUN2j7XjAV-7u',
                sigFile: '.tinypng-sigs',
                summarize: true,
            });
            mix.stylus('app.styl'), null, {
                use: [autoprefixer('last 7 versions', 'ie8' )]
            };

            mix.browserSync({
                proxy: 'ecoleinfographie.app'
            });

        });
    })
        .pipe(plumber());
});
