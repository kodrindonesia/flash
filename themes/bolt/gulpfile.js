var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
	'jquery': './../../node_modules/jquery/',
	'bootstrap': './../../node_modules/bootstrap-less/',
	'lesshat': './../../node_modules/lesshat/',
	'less' : './',
	'theme' : './assets/',
}

//Elixir Config
elixir.config.assetsPath = paths.less;

elixir(function(mix) {
	mix.copy(paths.bootstrap + 'fonts/**', paths.theme + 'fonts')
	   .less([
	   		paths.bootstrap + 'bootstrap/bootstrap.less',
	   		paths.lesshat + 'lesshat.less',
	   		'fonts.less',
	   		'style.less'
	   	], paths.theme + 'css/style.css')
   		.scripts([
        	paths.jquery + 'dist/jquery.js',
        	paths.bootstrap + 'js/bootstrap.js'
   		], paths.theme + 'js/');
});

elixir.Task.find('less').watch(paths.less + '/less/*/.less', ['less']);