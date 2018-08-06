let gulpfile = require('gulp'),
    sass = require('gulp-sass'),
    header = require('gulp-header'),
    cleanCSS = require('gulp-clean-css'),
    rename = require("gulp-rename"),
    uglify = require('gulp-uglify'),
    watch = require('gulp-watch'),
    browserSync = require('browser-sync').create();


// Copy third party libraries from /node_modules into /vendor
gulpfile.task('vendor', function () {

    // Bootstrap
    gulpfile.src([
        './node_modules/bootstrap/dist/**/*',
        '!./node_modules/bootstrap/dist/css/bootstrap-grid*',
        '!./node_modules/bootstrap/dist/css/bootstrap-reboot*'
    ])
        .pipe(gulpfile.dest('./public/vendor/bootstrap'));

    // Font Awesome
    gulpfile.src([
        './node_modules/font-awesome/**/*',
        '!./node_modules/font-awesome/{less,less/*}',
        '!./node_modules/font-awesome/{scss,scss/*}',
        '!./node_modules/font-awesome/.*',
        '!./node_modules/font-awesome/*.{txt,json,md}'
    ])
        .pipe(gulpfile.dest('./public/vendor/font-awesome'));

    // jQuery
    gulpfile.src([
        './node_modules/jquery/dist/*',
        '!./node_modules/jquery/dist/core.js'
    ])
        .pipe(gulpfile.dest('./public/vendor/jquery'));
});

// Compile SCSS
gulpfile.task('css:compile', function () {
    return gulpfile.src('./resources/assets/scss/**/*.scss')
        .pipe(sass.sync({
            outputStyle: 'expanded'
        }).on('error', sass.logError))
        .pipe(gulpfile.dest('./public/css'))
});

// Minify CSS
gulpfile.task('css:minify', ['css:compile'], function () {
    return gulpfile.src([
        './public/css/*.css',
        '!./public/css/*.min.css'
    ])
        .pipe(cleanCSS())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulpfile.dest('./public/css'))
        .pipe(browserSync.stream());
});

// CSS
gulpfile.task('css', ['css:compile', 'css:minify']);


//copy js files
gulpfile.task('js:copy', function () {
    gulpfile.src('./resources/assets/js/**/*.js').pipe(gulpfile.dest('./public/js'));
});

// Minify JavaScript
gulpfile.task('js:minify', function () {
    return gulpfile.src([
        './public/js/*.js',
        '!./public/js/*.min.js'
    ])
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulpfile.dest('./public/js'))
        .pipe(browserSync.stream());
});


// JS
gulpfile.task('js', ['js:copy', 'js:minify']);

// Default task
gulpfile.task('default', ['css', 'js', 'vendor']);

// Configure the browserSync task
gulpfile.task('browserSync', function () {
    browserSync.init({
        proxy: 'mzi.dev',
        notify: false
    });
});

// Dev task
gulpfile.task('dev', ['css', 'js', 'browserSync'], function () {
    gulpfile.watch('./resources/assets/scss/*.scss', ['css']);
    gulpfile.watch('./resources/assets/js/*.js', ['js:copy', 'js:minify']);
    gulpfile.watch('./resources/views/**/*.php', browserSync.reload);
});

