<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
Route::resource('category','CategoryController');
Route::post('category/{id}/update','CategoryController@update');
Route::get('category/{id}/delete','CategoryController@destroy');
Route::get('category/{id}/deleteMsg','CategoryController@DeleteMsg');
Route::resource('post','PostController');
Route::post('post/{id}/update','PostController@update');
Route::get('post/{id}/delete','PostController@destroy');
Route::get('post/{id}/deleteMsg','PostController@DeleteMsg');

Route::resource('thumbnail', 'ThumbnailController');
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

//Category Resources
/*******************************************************/
/********************************************************/

//Post Resources
/*******************************************************/
/********************************************************/
