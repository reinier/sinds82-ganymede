var gulp = require('gulp');

// `gulp`
gulp.task('default', ['init','watch']);

// `gulp work`
// Same as default but also opens Sublime and Chrome
gulp.task('work', ['default','sublime','openbrowser']);

// --------------------------------------- 
gulp.task('init', ['images','styles','wptheme']);
gulp.task('dist', ['images:dist','styles:dist','wptheme:dist']);
