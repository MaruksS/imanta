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


Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/','zinas@index');
Route::get('dalibnieki','MainController@dalibnieki');
Route::get('about','MainController@about');

// Articles route
Route::resource('zinas','zinas');
Route::get('/deletearticle/{id}', array('as' => 'delete_article','uses' => 'zinas@destroy'));

// Albums route
Route::resource('album','AlbumsController');
Route::get('/album/{id}', array('as' => 'show_album','uses' => 'AlbumsController@show'));
Route::get('/deletealbum/{id}', array('as' => 'delete_album','uses' => 'AlbumsController@destroy'));

// Authentication routes
Route::get('admin', 'Auth\AuthController@getLogin');
Route::post('admin', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/addimage/{id}','ImageController@index');
Route::post('/addimage','ImageController@store');
Route::get('/deleteimage/{id}', array('as' => 'delete_image','uses' => 'ImageController@destroy'));


