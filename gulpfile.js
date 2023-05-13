const {src, dest, watch, parallel} = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const cssnano = require('cssnano');
const webp = require('gulp-webp');
const notify = require('gulp-notify');

const paths = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js',
    imagenes: 'src/img/**/*'
}

function css() {
    return src(paths.scss)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(postcss([autoprefixer(), cssnano()]))
        //.pipe(postcss([autoprefixer()]))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('./public/build/css'));
}

function javascript() {
    return src(paths.js)
        .pipe(dest('./public/build/js'));
}

function versionWebp() {
    return src(paths.imagenes)
        .pipe(webp())
        .pipe(dest('./public/build/img'))
        .pipe(notify({ message: 'Imagen Completada' }));
}

function watchArchivos() {
    watch(paths.scss, css);
    watch(paths.js, javascript);
    watch(paths.imagenes, versionWebp);
}

exports.css = css;
exports.default = parallel(css, javascript, versionWebp ,watchArchivos);