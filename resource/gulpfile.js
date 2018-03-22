var gulp = require('gulp');
var path = require('path');
var less = require('gulp-less');
var minifyCSS = require('gulp-minify-css');
var px2rem = require('gulp-px3rem');

var px2remOptions = {
    remUnit:75,
    remPrecision:8,
};

gulp.task('less', function(){

    gulp.src('./src/less/*.less')
        .pipe(less())
        .pipe(px2rem(px2remOptions))
        .pipe(minifyCSS())
        .pipe(gulp.dest('./build/css'))
})


gulp.task('default', function(){

    gulp.watch('./src/less/*.less', ['less']);
})