'use strict';

const {task, src, parallel, series, dest, watch, lastRun} = require('gulp'),
      settings = require('./settings'),
      less = require('gulp-less'),
      webpack = require('webpack'),
      cssmin = require('gulp-cssmin'),
      pug = require('gulp-pug'),
      minify = require('gulp-minify'),
      debug = require('gulp-debug'),
      del = require('del'),
      webp = require('gulp-webp'),
      svgmin = require('gulp-svgmin'),
      imgmin = require('gulp-image'),
      autoprefixer = require('gulp-autoprefixer'),
      browserSync = require('browser-sync').create();

task('pug', function () {
  return src(settings.themeLocation + '/src/templates/*.pug', { since: lastRun(pug)} )
      .pipe(pug({
        pretty: true
      }))
      .pipe(debug({title: 'working on'}))
      .pipe(dest(settings.themeLocation + '/html/'))
});

task('less', function () {
  return src(settings.themeLocation + '/src/less/*.less')
      .pipe(less())
      .pipe(autoprefixer({
        browsers: ['last 2 versions']
      }))
      .pipe(cssmin())
      .pipe(debug({title: 'working on'}))
      .pipe(dest(settings.themeLocation + '/css'))
});

task('js', function(callback) {
  webpack(require('./webpack.config.js'), function(err, stats) {
    if (err) {
      console.log(err.toString());
    }
    console.log(stats.toString());
    callback();
  });
});

task('img', function () {
  return src(settings.themeLocation + '/src/img/**/*.*', {since: lastRun('img')})
      .pipe(debug({title: 'working on'}))
      .pipe(imgmin({
        pngquant: true,
        optipng: true,
        zopflipng: true,
        jpegRecompress: false,
        mozjpeg: true,
        gifsicle: true,
        svgo: true,
        concurrent: 10,
        quiet: true 
      }))
      .pipe(dest(settings.themeLocation + '/img'))
});

task('webp', function() {
  return src(settings.themeLocation + '/src/img/**/*.{png,jpg}')
    .pipe(debug({title: 'qweqweqwe'}))
    .pipe(webp())
    .pipe(dest(settings.themeLocation + '/img'))
});

task('svgimg', function () {
  return src(settings.themeLocation + '/src/img/**/*.svg', {since: lastRun('svgimg')})
      .pipe(debug({title: 'working on'}))
      .pipe(svgmin())
      .pipe(dest(settings.themeLocation + '/img'))
});

task('fonts', function () {
  return src('src/fonts/**/**.*')
      .pipe(dest(settings.themeLocation + '/fonts'))
});


task('watch', function () {
  browserSync.init({
    notify: true,
    proxy: settings.urlToPreview
  })

  watch(settings.themeLocation + '/src/less/**/*.*',series('less'));
  watch(settings.themeLocation + '/src/templates/**/*.*',series('pug'));
  watch(settings.themeLocation + '/src/js/**/*.*',series('js'));

  watch(settings.themeLocation + '**/*.php').on('change', browserSync.reload);
  watch(settings.themeLocation + '/css/*.css').on('change', browserSync.reload);
  watch(settings.themeLocation + '/js/*.js').on('change', browserSync.reload);
});

task('clean', function () {
  del(settings.themeLocation + 'css/')
  return del(settings.themeLocation + 'js');
});

task('build',series('clean', parallel('pug', 'less', 'js', 'img', 'fonts')));
// 'assets', 'fonts'

task('dev',series('build', 'watch'));