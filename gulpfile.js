// Requis

var gulp = require('gulp');

// Include plugins
var plugins = require('gulp-load-plugins')(); // tous les plugins de package.json

// Variable  chemins
var source = './src'; // dossier de travail
var destination = './dist'; // dossier à livrer

gulp.task('sass', function () {
    return gulp.src(source + '/assets/sass/style.scss')
        .pipe(plugins.sass())
        .pipe(plugins.csscomb())
        .pipe(plugins.cssbeautify({indent: ''}))
        .pipe(plugins.autoprefixer())
        .pipe(gulp.dest(destination + '/assets/css/'));
});

gulp.task('minify',function () {
    return gulp.src(destination + '/assets/css/*.css')
        .pipe(plugins.csso())
        .pipe(plugins.rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(destination + '/assets/css/'))
});

// Tâche "build"
gulp.task('build', ['sass']);

// Tâche "prod" = Build + minify
gulp.task('prod', ['build', 'minify']);

// Tâche par défaut
gulp.task('default', ['build']);

// Tâche "watch" = je surveille *less
gulp.task('watch', function () {
    gulp.watch(source + '/assets/sass/*.scss', ['build']);
});

gulp.task('serve', ['sass'], function() {
    browserSync.init({
        server: "./src"
    });
    gulp.watch("src/assets/sass/*.scss", ['sass']);
    gulp.watch("src/*.html").on('change', browserSync.reload);
});