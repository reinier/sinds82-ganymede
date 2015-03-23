var gulp = require('gulp');
var buildBranch = require('gulp-build-branch');
 
gulp.task('release', ['dist'], function() {
  return buildBranch({
    folder: 'dist',
    branch: 'dist'
  });
});
