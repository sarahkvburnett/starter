var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');
var cssnano = require('gulp-cssnano');
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');
var del = require('del');
var runSequence = require('gulp4-run-sequence');
const webpack = require('webpack-stream')

// Tasks
// ---------------

//Compiling sass/scss
gulp.task('sass', async function() {
  return gulp.src('app/scss/**/*.scss') // Gets all files ending with .scss in app/scss and children dirs
    .pipe(sass().on('error', sass.logError)) // Passes it through a gulp-sass, log errors to console
    .pipe(gulpIf('*.css', cssnano()))
    .pipe(gulp.dest('public/dist/css'))
})

//Bundling js
gulp.task('js', async function(){
  return gulp.src('app/js/main.js')
      .pipe(webpack({'mode':'none'}))
      .pipe(uglify())
      .pipe(gulp.dest('public/dist/js'));
})

// Optimizing Images
gulp.task('images', async function() {
  return gulp.src('app/img/**/*.+(png|jpg|jpeg|gif|svg|webp)')
    // Caching images that ran through imagemin
    .pipe(cache(imagemin({
      interlaced: true,
    })))
    .pipe(gulp.dest('public/dist/img'))
});


// Copying fonts
gulp.task('fonts', async function() {
  return gulp.src('app/fonts/**/*')
    .pipe(gulp.dest('public/dist/fonts'))
})


// Cleaning
gulp.task('clean', async function() {
  return del.sync('dist').then(function(cb) {
    return cache.clearAll(cb);
  });
})

gulp.task('clean:dist', async function() {
  return del.sync(['public/dist/**/*', '!public/dist/img', '!public/dist/img/**/*'])
});

// Watchers
gulp.task('watch', function() {
  gulp.watch('app/scss/**/*.scss', gulp.series('sass'));
  gulp.watch('app/js/**/*.js', gulp.series('js'));
})

// Build Sequences
// ---------------

gulp.task('default', function(callback) {
  runSequence(['sass', 'js', 'images', 'fonts'], 'watch',
    callback
  )
})

gulp.task('build', function(callback) {
  console.log('boom')
  runSequence(
    'clean:dist',
    ['sass', 'js', 'images', 'fonts'],
    callback
  )
})
