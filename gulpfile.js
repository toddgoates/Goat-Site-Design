require('es6-promise').polyfill();

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat'),
    nano = require('gulp-cssnano');

// Compile, autoprefix, minify scss files
gulp.task('sass', function() {
    return gulp
        .src('sass/**/*.scss')
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(concat('main.min.css'))
        .pipe(nano())
        .pipe(gulp.dest('./css'));
});

// Watcher task
gulp.task('watch', function(){
    gulp.watch('sass/**/*.scss', ['sass']);
});