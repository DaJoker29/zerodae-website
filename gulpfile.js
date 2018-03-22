const gulp = require('gulp');
const sourcemaps = require('gulp-sourcemaps');

gulp.task('css', () => {
  const postcss = require('gulp-postcss');
  const sass = require('gulp-sass');
  const autoprefixer = require('autoprefixer');

  return gulp
    .src('src/sass/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.init())
    .pipe(postcss([autoprefixer()]))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('dist'));
});

gulp.task('html', () => {
  const pug = require('gulp-pug');

  return gulp
    .src('src/pug/**/*.pug')
    .pipe(pug())
    .pipe(gulp.dest('dist/views'));
});

gulp.task('clean', cb => {
  const clean = require('gulp-clean');

  return gulp.src('dist', { read: false }).pipe(clean());
});

gulp.task('watch', ['clean', 'html', 'css'], () => {
  gulp.watch('src/sass/**/*.scss', ['css']);
  gulp.watch('src/pug/**/*.pug', ['html']);
});

gulp.task('dev', ['watch']);
gulp.task('default', ['build', 'watch']);
