<?php
/**
 * Route for Backend
 *
 * @author 		Sandi Andrian (halo@kodrindonesia.com)
 * @since 		Sep 18, 2016
 * @version 	1.0
 * @package     Backend
 **/

Route::group(['namespace' => 'Backend', 'prefix' => 'backend'], function($route) {
	// Route::auth();
	
	//Auth
	$route->get('/auth/login','AuthController@getLogin');

	/**
	 * Protected 
	 **/
	Route::group(['middleware' => ['auth','backend']], function($route) {
		$route->get('/','DashboardController@index');
		
		//Dashboard
		$route->resource('/dashboard','DashboardController');
	});	
});