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
Route::get('/error',function(){
   abort(404);
});

Route::auth();

Route::group(['middleware' => 'auth'], function() {

	// Route::get('/', function () {
	// 	return view('welcome');
	// });

	Route::get('/', 'HomeController@index');
	Route::post('/store', 'HomeController@store');

	// borang
	Route::group(['as' => 'template::', 'prefix' => 'template'], function() {
		Route::get('/', ['as' => 'index', 'uses' => 'TemplateController@index']);
		Route::get('create', ['as' => 'create', 'uses' => 'TemplateController@create']);
		Route::post('store', ['as' => 'store', 'uses' => 'TemplateController@store']);
		Route::post('delete/{id}', ['as' => 'deleteTemplate', 'uses' => 'TemplateController@delete']);
	});

	// user
	Route::group(['as' => 'user::', 'prefix' => 'user'], function() {
		Route::get('/', ['as' => 'index', 'uses' => 'UserController@index']);
		Route::get('create', ['as' => 'create', 'uses' => 'UserController@create']);
		Route::post('store', ['as' => 'store', 'uses' => 'UserController@store']);
		Route::post('delete/{id}', ['as' => 'deleteUser', 'uses' => 'UserController@delete']);

	});

	// Dummyvot
	Route::group(['as' => 'dummyvot::', 'prefix' => 'dummyvot'], function() {
		Route::get('/', ['as' => 'index', 'uses' => 'DummyVotController@index']);
		Route::post('store', ['as' => 'store', 'uses' => 'DummyVotController@store']);
		Route::get('get/{id}', ['as' => 'getRecord', 'uses' => 'DummyVotController@get']);
		Route::get('get/template/{id}', ['as' => 'getTemplate', 'uses' => 'DummyVotController@getTemplate']);
		Route::post('delete/{id}', ['as' => 'deleteRecord', 'uses' => 'DummyVotController@delete']);
		Route::post('collection/', ['as' => 'getCollection', 'uses' => 'DummyVotController@getCollection']);
	});

	// beban kerja
	Route::group(['as' => 'bebankerja::', 'prefix' => 'bebankerja'], function() {
		Route::get('/', ['as' => 'index', 'uses' => 'BebanKerjaController@index']);
		Route::post('store', ['as' => 'store', 'uses' => 'BebanKerjaController@store']);
		Route::get('get/{id}', ['as' => 'getRecord', 'uses' => 'BebanKerjaController@get']);
		Route::get('get/template/{id}', ['as' => 'getTemplate', 'uses' => 'BebanKerjaController@getTemplate']);
		Route::get('get/template/{id}', ['as' => 'getTemplate', 'uses' => 'BebanKerjaController@getTemplate']);
		Route::post('delete/{id}', ['as' => 'deleteRecord', 'uses' => 'BebanKerjaController@delete']);
		Route::post('collection/', ['as' => 'getCollection', 'uses' => 'BebanKerjaController@getCollection']);

	});

	// Laporan 552M
	Route::group(['as' => '552M::', 'prefix' => '552M'], function() {
		Route::get('/', ['as' => 'index', 'uses' => 'Laporan552MController@index']);
		Route::post('store', ['as' => 'store', 'uses' => 'Laporan552MController@store']);
		Route::get('get/{id}', ['as' => 'getRecord', 'uses' => 'Laporan552MController@get']);
		Route::get('get/template/{id}', ['as' => 'getTemplate', 'uses' => 'Laporan552MController@getTemplate']);
		Route::post('delete/{id}', ['as' => 'deleteRecord', 'uses' => 'Laporan552MController@delete']);
		Route::post('collection/', ['as' => 'getCollection', 'uses' => 'Laporan552MController@getCollection']);
	});

	// Laporan KEW-13
	Route::group(['as' => 'KEW13::', 'prefix' => 'KEW13'], function() {
		Route::get('/', ['as' => 'index', 'uses' => 'KEW13Controller@index']);
		Route::post('store', ['as' => 'store', 'uses' => 'KEW13Controller@store']);
		Route::get('get/{id}', ['as' => 'getRecord', 'uses' => 'KEW13Controller@get']);
		Route::get('get/template/{id}', ['as' => 'getTemplate', 'uses' => 'KEW13Controller@getTemplate']);
		Route::post('delete/{id}', ['as' => 'deleteRecord', 'uses' => 'KEW13Controller@delete']);
		Route::post('collection/', ['as' => 'getCollection', 'uses' => 'KEW13Controller@getCollection']);
	});

	// Laporan KEW-9
	Route::group(['as' => 'KEW9::', 'prefix' => 'KEW9'], function() {
		Route::get('/', ['as' => 'index', 'uses' => 'KEW9Controller@index']);
		Route::post('store', ['as' => 'store', 'uses' => 'KEW9Controller@store']);
		Route::get('get/{id}', ['as' => 'getRecord', 'uses' => 'KEW9Controller@get']);
		Route::get('get/template/{id}', ['as' => 'getTemplate', 'uses' => 'KEW9Controller@getTemplate']);
		Route::post('delete/{id}', ['as' => 'deleteRecord', 'uses' => 'KEW9Controller@delete']);
		Route::post('collection/', ['as' => 'getCollection', 'uses' => 'KEW9Controller@getCollection']);
	});

});



