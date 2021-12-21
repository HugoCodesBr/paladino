const gulp = require('gulp');
const sass = require('gulp-sass')(require('node-sass'));
const concat = require('gulp-concat');
const sassGlob = require('gulp-sass-glob');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const browserSync = require('browser-sync').create();
const php = require('gulp-connect-php');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const imagemin = require('gulp-imagemin');
const jpegtran = require('imagemin-jpegtran');

function sassCompile(){
    return gulp.src('project/scss/*.scss')
        .pipe(sassGlob())
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(autoprefixer())
        .pipe(concat('style.min.css'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('dist/assets/css'))
        .pipe(browserSync.stream())
}

function phpCopy(){
    return gulp.src('project/template/**/*.php')
        .pipe(gulp.dest('dist/'))
}

function jsCompile(){
    return gulp.src('project/js/*.js')
        .pipe(sourcemaps.init())
        .pipe(concat('app.min.js'))
        .pipe(babel({
            presets: ["@babel/preset-env"]
        }))
        .pipe(uglify())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('dist/assets/js'))
}

function imageMin(){
    return gulp.src('project/images/*')
        .pipe(imagemin(
            [
                imagemin.gifsicle({
                    interlaced: true,
                    optimizationLevel: 2,
                }),
                jpegtran({ progressive: true }),
                imagemin.optipng(),
                imagemin.svgo(),
            ],
            { verbose: true }
        ))
        .pipe(gulp.dest('dist/assets/images'))
}

function fontStack(){
    return gulp.src('project/fonts/*')
        .pipe(gulp.dest('dist/assets/fonts'))
}

function icoStack(){
    return gulp.src('project/ico/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/assets/ico'))
}

gulp.task('sass-compile', sassCompile);
gulp.task('php-copy', phpCopy);
gulp.task('js-compile', jsCompile);
gulp.task('image-min', imageMin);
gulp.task('font-stack', fontStack);
gulp.task('ico-stack', icoStack);

gulp.task('php-sync', () => {
    php.server({
        base: './dist/',
        port: 4010,
        stdio: 'ignore',
    });
   
    gulp.watch('**/*.php').on('change', browserSync.reload);
});

gulp.task('browser-sync', () => {
    browserSync.init({
        proxy: "localhost:4010",
        notify: false,
        port: 4000,
    });
});

gulp.task('watch', () => {
    gulp.watch('project/scss/**/*.scss', sassCompile);
    gulp.watch('project/template/**/*.php', phpCopy);
    gulp.watch('project/js/**/*.js', jsCompile);
    gulp.watch('project/images/**/*', imageMin);
    gulp.watch('project/fonts/**/*', fontStack);
    gulp.watch('project/ico/**/*', icoStack);
});

gulp.task('init', gulp.parallel('watch', 'browser-sync', 'php-sync'));

gulp.task('default', gulp.series('sass-compile', 'php-copy', 'js-compile', 'image-min', 'font-stack', 'ico-stack', 'init'));