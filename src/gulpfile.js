var gulp = require('gulp');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

gulp.task('sass', function() {
  gulp.src('./themes/vh/assets/sass/style.scss')
                   .pipe(plumber())
                   .pipe(sass())
                   .pipe(gulp.dest('./themes/vh/'))
                   .pipe(reload({stream: true}));
});

gulp.task('watch', function () {
  gulp.watch('./themes/vh/assets/sass/*.scss', ['sass']);

  browserSync.init({ proxy: "192.168.99.100:8080", port: 4000 });
  gulp.watch("./themes/vh/*.php").on('change', reload);
  gulp.watch("./themes/vh/*.css").on('change', reload);
});
