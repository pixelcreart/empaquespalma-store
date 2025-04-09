import gulp from 'gulp';
import gulpSass from 'gulp-sass';
import dartSass from 'sass';
import cleanCSS from 'gulp-clean-css';
import terser from 'gulp-terser';
import rename from 'gulp-rename';
import sourcemaps from 'gulp-sourcemaps';
import { deleteSync } from 'del';
import babel from 'gulp-babel';

const { src, dest, series, parallel, watch } = gulp;
const sass = gulpSass(dartSass);

const paths = {
  scss: 'src/scss/**/*.scss',
  js: 'src/js/**/*.js',
  distCss: 'web/css',
  distJs: 'web/js'
};

function clean() {
  deleteSync(['web/css/**/*', 'web/js/**/*']);
  return Promise.resolve();
}

function styles() {
  return src(paths.scss)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS())
    .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write('.'))
    .pipe(dest(paths.distCss));
}

function scripts() {
  return src(paths.js)
    .pipe(babel())
    .pipe(sourcemaps.init())
    .pipe(dest(paths.distJs))
    .pipe(terser())
    .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write('.'))
    .pipe(dest(paths.distJs));
}

function dev() {
  watch(paths.scss, styles);
  watch(paths.js, scripts);
}

export default series(clean, parallel(styles, scripts));
export { dev };