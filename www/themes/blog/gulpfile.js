// Requires
var gulp = require('gulp');

// Include plugins
var less = require('gulp-less');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var minifycss = require('gulp-minify-css');
// var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');


gulp.task('css', function () {
  return gulp.src('./less/styles.less')
    .pipe(less())
    .pipe(autoprefixer())
    .pipe(rename('styles.css'))
    .pipe(gulp.dest('./css/'))
    //.pipe(sourcemaps.init())
    //.pipe(sourcemaps.write('.', {includeContent: false}))
});

// Watcher
gulp.task('watch', function() {
  gulp.watch(['./less/*.less'], ['css']);
  gulp.watch(['./less/custom/*.less'], ['css']);
});

gulp.task('default', ['css']);
