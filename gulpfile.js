// Requis
var gulp = require('gulp');

// Include plugins
var plugins = require('gulp-load-plugins')(); // tous les plugins de package.json
var connect = new plugins.connectPhp();
var browserSync = require('browser-sync').create();

// Variables de chemins
var source = './app/src'; // dossier de travail
var destination = './app/dist'; // dossier à livrer

gulp.task('sass', function () {
    return gulp.src(source + '/assets/sass/style.scss')
        .pipe(plugins.sass())
        .pipe(plugins.csscomb())
        .pipe(plugins.cssbeautify({indent: '  '}))
        .pipe(plugins.autoprefixer())
        .pipe(gulp.dest(destination + '/assets/css/'))
        .pipe(browserSync.stream());;
});

// Tâche "minify" = minification CSS (destination -> destination)
gulp.task('minify', function () {
    return gulp.src(destination + '/assets/css/*.css')
      .pipe(plugins.csso())
      .pipe(plugins.rename({
        suffix: '.min'
      }))
      .pipe(gulp.dest(destination + '/assets/css/'));
  });


  // Tâche "build"
gulp.task('build', ['sass']);

// Tâche "prod" = Build + minify
gulp.task('prod', ['build',  'minify']);

// Tâche par défaut
gulp.task('default', ['build']);


// Tâche "watch" = je surveille *scss
// gulp.task('watch', function () {
//     gulp.watch(source + '/assets/sass/*.scss', ['build']);
//   });

gulp.task('serve', ['sass'], function() {
  connect.server({ base: 'app', port: 8011}, function(){
      browserSync.init({
          proxy: '127.0.0.1:8011',
          notify: false,
          port: 8011
      });
  });
  gulp.watch(source + "/assets/sass/*.scss", ['sass']);
  gulp.watch("app/*.php").on('change', browserSync.reload);
});