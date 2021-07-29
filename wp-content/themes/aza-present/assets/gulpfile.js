let gulp = require('gulp'),
  sourcemaps = require('gulp-sourcemaps'),
  sass = require('gulp-sass'),
  browserSync = require('browser-sync'),
  csso = require('gulp-csso'),
  webpack = require('webpack-stream'),
  rename = require('gulp-rename'),
  imagemin = require('gulp-imagemin'),
  pngquant = require('imagemin-pngquant'),
  cache = require('gulp-cache'),
  gsmq = require('gulp-group-css-media-queries'),
  autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function () {
  return gulp
    .src(`scss/app.scss`)
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(gsmq())
    .pipe(autoprefixer(['last 2 versions'], { cascade: true }))
    .pipe(csso())
    .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(`css`))
    .pipe(browserSync.reload({ stream: true }));
});

gulp.task('js', function (){
  return gulp.src('./js/app.js')
  .pipe(webpack({
    mode: 'production',
    performance: { hints: false },
    module: {
      rules: [
        {
          test: /\.(js)$/,
          exclude: /(node_modules)/,
          loader: 'babel-loader',
          query: {
            presets: ['@babel/env'],
            plugins: ['babel-plugin-root-import']
          }
        }
      ]
    }
  })).on('error', function handleError() {
    this.emit('end')
  })
  .pipe(rename('app.min.js'))
  .pipe(gulp.dest('./js/'))
  .pipe(browserSync.reload({ stream: true }));
});

gulp.task('browser-sync', function () {
  browserSync({
    // add neccesary url to proxy for live time dev
    proxy: "podarok.local/",
    notify: false,
    open: false,
    // tunnel: true,
  });
});

gulp.task('img', function () {
  return gulp
    .src(`img/**/*`)
    .pipe(
      cache(
        imagemin({
          interlaced: true,
          progressive: true,
          use: [pngquant({
            quality: '70-90', // When used more then 70 the image wasn't saved
            speed: 1, // The lowest speed of optimization with the highest quality
            floyd: 1 // Controls level of dithering (0 = none, 1 = full).
        })],
        })
      )
    )
    .pipe(gulp.dest(`img-compressed`));
});

gulp.task('checkupdate', function () {
  gulp.watch('scss/**/*.scss', gulp.parallel('sass'));
  gulp.watch(['js/**/*.js', '!js/*.min.js'], gulp.parallel('js'));
  gulp.watch('../**/*.php').on('change', browserSync.reload);
  gulp.watch('img/**/*.*', browserSync.reload({stream: true}));
});

gulp.task(
  'watch',
  gulp.parallel(
    'sass',
    'js',
    'browser-sync',
    'checkupdate'
  )
);

gulp.task(
  'build',
  gulp.parallel(
    'sass',
    'js'
  )
);
