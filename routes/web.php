<?php


Route::get('/login', ['as' => 'login', function () {
	return view('auth.login');
}]);

Route::post('/login', ['as' => 'login-submit', 'uses' => 'Auth\LoginController@login' ]);

Route::group(['middleware' => ['auth']], function(){

	Route::get('/', function () {
	    return view('layouts.default');
	});

});
