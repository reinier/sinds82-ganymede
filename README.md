# Ganymede — A Wordpress Theme

![Ganymede Wordpress Theme Screenshot](http://static.digitalenergy.nl/ganymede.jpg)

## Download and use the theme

Download here:    
- [Download Ganymede Wordpress theme](https://github.com/reinier/ganymede/archive/release.zip)

Upload to your wp-themes directory and activate the theme.


## Development instructions

### Needed on your computer:
- [Node](https://nodejs.org)
- A [wp-dev-box](https://github.com/reinier/wp-dev-box) on the same level as this repository. Read about my development workflow here: [How I develop Wordpress themes](https://gist.github.com/reinier/c806c5ec8ad3e6906e66)

### Run when starting:
- `npm install`

### Run when developing:
- `gulp`    
or
- `gulp work` when you want to open Sublime and Google Chrome

### Run when releasing a new version of theme:
- `gulp release`    
  This will build the theme and pushes it to the online `release` branch.
