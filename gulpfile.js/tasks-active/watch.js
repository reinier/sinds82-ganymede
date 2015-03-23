var gulp      = require('gulp');
var config    = require('../config').watch;

gulp.task('watch', function() {
  gulp.watch(config.source.styles, ['styles']);
  gulp.watch(config.source.wptheme, ['wptheme']);
});
