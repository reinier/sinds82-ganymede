/* ---------------------------------------
    CONFIG
   --------------------------------------- */

var title             = 'ganymede';

// Project paths
var src               = './src/';
var themedir          = '../wp-dev-box/awesome.dev/wp-content/themes/';
var build             = themedir+title+'/';
var dist              = './dist/';
var node_modules      = './node_modules/';
var bower_components  = './bower_components/';

module.exports = {
  styles: {
    source: src+'**/*.scss',
    build: build,
    dist: dist,
    sass: {
      includePaths: [
        bower_components+'bourbon/app/assets/stylesheets',
        bower_components+'neat/app/assets/stylesheets',
        src+'styles/'
      ]
    }
  },

  images: {
    source: src+'images/**/*',
    build: build+'images/',
    dist: dist+'images/'
  },

  wptheme: {
    source: [src+'/**/*.php',src+'/**/*.css',src+'screenshot.png'],
    build: build,
    dist: dist
  },

  watch: {
    source: {
      styles : src+'**/*.scss',
      wptheme : [src+'/**/*.php',src+'/**/*.css',src+'screenshot.png'],
      build : build
    }
  },

  openbrowser: {
    url: 'http://awesome.dev',
    browser: 'google chrome'
  },

  clean: {
    all: [build, dist, './.sass-cache/'],
    build: build,
    dist: dist
  },

  dist: {
    deploy: dist
  }
}
