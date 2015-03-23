var gulp      = require('gulp');
var config    = require('../config').wptheme;

gulp.task('wptheme', function() {
  gulp.src(config.source)
    .pipe(gulp.dest(config.build));
});

gulp.task('wptheme:dist', ['clean:dist'], function() {
  return gulp.src(config.source)
    .pipe(gulp.dest(config.dist));
});
