/* jshint node:true */

// Include project requirements.
var gulp = require( 'gulp' ),
	jshint = require( 'gulp-jshint' ),
	uglify = require( 'gulp-uglify' ),
	sass = require( 'gulp-sass' ),
	// imagemin = require( 'gulp-imagemin' ),

	jade = require('gulp-jade-php'),
	concat = require('gulp-concat'),
	connect = require('gulp-connect'),
	es = require('event-stream');

// Sets assets folders.
var srcdirs = {
	jade: 'src/templates',
	js: 'src/js',
	sass: 'src/sass',
	images: 'src/images',
	fonts: 'src/fonts'
};

var buildDir = {
	jade: '../',
	js: '../assets/js',
	css: '../',
	images: '../assets/images'
}

gulp.task( 'scripts', function () {
	// Hint all JavaScript.
	// gulp.src( srcdirs.js + '/*.js' )
	// 	.pipe( jshint() )
	// 	.pipe( jshint.reporter( 'default' ) );

	// Minify and copy all JavaScript.
	gulp.src( srcdirs.js + '/*.js' )
		.pipe(concat('all.min.js'))
		.pipe( uglify() )
		.pipe( gulp.dest( buildDir.js ) )
});

// gulp.task('jade', function() {
// 	return gulp.src('src/templates/*.jade')
// 	.pipe(jade())
// 	.pipe(gulp.dest( buildDir.jade ))
// });

gulp.task( 'sass', function () {
	// Compile all SCSS files.
	var sasscomp = gulp.src( srcdirs.sass + '/main.sass' )
		.pipe( sass({
			indentedSyntax : true,
			outputStyle: 'compressed'
		}) )

	var wpheader = gulp.src( srcdirs.sass + '/wpheader.css')

	return es.merge( wpheader, sasscomp )
	.pipe( concat('style.css') )
	.pipe( gulp.dest( buildDir.css ) )
});

// gulp.task( 'optimize', function () {
// 	// Optimize all images.
// 	gulp.src( srcdirs.images + '/*.{png,jpg,gif}' )
// 		.pipe( imagemin({
// 			optimizationLevel: 7,
// 			progressive: true
// 		}) )
// 		.pipe( gulp.dest( buildDir.images ) )
// });

gulp.task( 'watch', function () {
	gulp.watch( srcdirs.js + '/**/*.js', ['scripts']);
	gulp.watch( srcdirs.sass + '/**/*.sass', ['sass']);
	// gulp.watch( srcdirs.images + '/*.{png,jpg,gif}', ['optimize']);
});

gulp.task('default', ['scripts', 'sass', 'watch']);
