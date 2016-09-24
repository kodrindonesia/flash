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
	'jquery': './../../../node_modules/jquery/',
	'bootstrap': './../../../node_modules/bootstrap-sass/assets/',
	'theme' : './../../../public/themes/adaacara/assets/',
	'sass' : './'
}

//Elixir Config
// elixir.config.assetDir = paths.sass;
elixir.config.assetsPath = paths.sass;

elixir(function(mix) {
	mix.copy(paths.bootstrap + 'fonts/bootstrap/**', paths.theme + 'fonts')
	   .sass([
	   		"app.scss"
	   	], paths.theme + "css/", { includePaths: [paths.bootstrap + 'stylesheets/'] })
   		.scripts([
        	paths.jquery + "dist/jquery.js",
        	paths.bootstrap + "javascripts/bootstrap.js"
   		], paths.theme + 'js/', 'public/js/app.js');
});