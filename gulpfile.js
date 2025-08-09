const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

gulp.task('css', () => {
   return gulp.src([
      'assets/css/dependencies/*.css',
      'assets/css/**/*.css',
      'assets/css/*.css',
   ])
      .pipe(concat('all.css'))
      .pipe(cleanCSS({ compatibility: 'ie8' }))
      .pipe(rename('all.min.css'))
      .pipe(gulp.dest('assets/output'))
});

gulp.task('css-watch', function () {
   gulp.watch('assets/css/*.css', gulp.series('css'))
   gulp.watch('assets/css/**/*.css', gulp.series('css'))
})

gulp.task('js', function() {
   return gulp.src([
      'assets/js/dependencies/*.js',
      'assets/js/**/*.js',
   ])
      .pipe(concat('all.js'))
      .pipe(uglify())
      .pipe(rename('all.min.js'))
      .pipe(gulp.dest('assets/output'))
})

gulp.task('js-watch', function () {
   gulp.watch('assets/js/**/*.js', gulp.series('js'))
})
