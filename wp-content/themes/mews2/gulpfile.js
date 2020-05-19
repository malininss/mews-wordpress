const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function(done) {
  gulp.src("scss/*.scss")
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest("./"))
    .pipe(browserSync.stream());
  done();
});

gulp.task('serve', function(done) {

  browserSync.init({
    proxy: 'localhost'
  });

  gulp.watch("**/*.scss", gulp.series('sass'));
  gulp.watch("**/*.php").on('change', () => {
    browserSync.reload();
    done();
  });
  done();
});

gulp.task('default', gulp.series('sass', 'serve'));