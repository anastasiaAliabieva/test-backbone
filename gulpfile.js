var coffeeify = require('gulp-coffeeify'),
    gulp = require('gulp'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    filter = require('gulp-filter'),
    concatCss = require('gulp-concat-css');

var config = {
    vendorSass: './vendor/twbs'
}

gulp.task('coffee', function() {
    return gulp.src('./web/app/assets/js/**/*.coffee')
        .pipe(coffeeify())
        .pipe(uglify().on('error', e => console.log(e)))
        .pipe(concat('app.js'))
        .pipe(gulp.dest('./web/app/dist'));
});

gulp.task('sass', function() {
    return gulp.src('./web/app/assets/sass/**/*.scss')
        .pipe(sass({
                includePaths: config.vendorSass + '/bootstrap-sass/assets/stylesheets'
            })
            .on('error', sass.logError))
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./web/app/dist'));
});

gulp.task('vendor:sass', function() {
    return gulp.src('.vendor/twbs/bootstrap-sass/assets/stylesheets/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./web/app/dist'));
});

gulp.task('vendor:js', function() {
    return gulp.src([
            './vendor/components/underscore/underscore.js',
            './vendor/components/jquery/dist/jquery.js',
            './vendor/components/backbone/backbone.js',
            './vendor/twbs/bootstrap-sass/assets/javascripts/**/*.js'
        ])
        .pipe(concat('vendor.js'))
        .pipe(gulp.dest('./web/app/dist'));
});

gulp.task('watch', function() {
    gulp.watch('./web/app/assets/sass/**/*.scss', ['sass']);
    gulp.watch('./web/app/assets/js/**/*.coffee', ['coffee']);
});

gulp.task('default', ['vendor:js','vendor:sass','watch']);