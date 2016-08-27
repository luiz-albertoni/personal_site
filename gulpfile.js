process.env.DISABLE_NOTIFIER = true;
var elixir = require('laravel-elixir');
var gulp = require("gulp");

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */


gulp.task('copyFonts', function () {
    gulp.src('resources/assets/fonts/*.*')
        .pipe(gulp.dest('public/fonts'));
});

elixir(function(mix) {
    mix
        .styles(["angular/*.css", "bootstrap/*.css", "flags/*.css" ], "public/css/vendor.css")
        .scripts(["jquery/*.js", "angular/*.js","bootstrap/*.js"], "public/js/vendor.js")
        .version(["css/vendor.css", "js/vendor.js"]);
});
