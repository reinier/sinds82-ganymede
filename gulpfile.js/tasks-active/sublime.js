var gulp  = require('gulp');
var shell = require('gulp-shell');
 
gulp.task('sublime', shell.task([
  'subl .'
]));
