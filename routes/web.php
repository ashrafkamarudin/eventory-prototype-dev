<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('comments', 'CommentController');

Auth::routes();

Route::get('event/{slug}', ['as' => 'event.single', 'uses' => 'Admin\EventController@getSingle'])
	->where('slug', '[\w\d\-\_]+'); // regular expression

Route::group(['middleware' => 'auth'], function () {
	Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');

	Route::resource('events', 'Admin\EventController');
	Route::resource('users', 'Admin\UserController');
	Route::resource('permissions', 'Admin\PermissionController');
	Route::resource('roles', 'Admin\RoleController');
});
