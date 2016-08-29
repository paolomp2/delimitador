<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('search_page.search_page');
});

Route::get('/login','loginController@login');
Route::post('login_store',['as'=>'login_store', 'uses' => 'loginController@login_store@login_store']);
//Route::post('login_store',['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);

Route::group(['middleware' => 'auth'], function (){

	Route::get('/consola','universalController@dashboard');

	Route::resource('looper','looperController');
	Route::get('/looper/trash/trash', ['uses' =>'looperController@trash']);
	Route::get('/looper/{id}/inactive', ['uses' =>'looperController@inactive']);
	Route::get('/looper/{id}/untrashed', ['uses' =>'looperController@untrashed']);
	Route::get('/looper/latency/latency', ['uses' =>'looperController@latency']);
});
