var gulp    = require('gulp');
var browser = require('gulp-open');
var config    = require('../config').openbrowser;

gulp.task('openbrowser', function(){
  var options = {
    url: config.url,
    app: config.browser
  };

  // Don't know why, but you have to pipe something to make it work
  gulp.src('./src/index.php')
  .pipe(browser('', options));

});
