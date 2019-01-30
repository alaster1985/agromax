var gulp = require('gulp');
var less = require('gulp-less');
var plumber = require('gulp-plumber');
var autoprefixer = require('gulp-autoprefixer');
var server = require('browser-sync');

gulp.task('styles', function () {
     gulp.src('public/less/style.less')
        .pipe(plumber())
        .pipe(less())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest("public/css"))
        .pipe(server.stream());
});

gulp.task("serve", ["styles"],function() {
	server.init({
      open: 'external',
      host: 'local',
      port: 8888
    });
    gulp.watch("public/less/**/*.less", ["styles"]);
});

gulp.task("default", ["styles", "serve"]);

gulp.task("change", ["styles", "serve"]);



