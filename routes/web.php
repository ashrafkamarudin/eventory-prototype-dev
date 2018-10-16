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

//Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function () {
Route::group(['middleware' => 'auth'], function () {


	// SuperAdministrator and Administrator
	Route::group(['middleware' => ['role:superadministrator|administrator']], function() {
		Route::resource('users', 'Admin\UserController');
		Route::resource('events', 'Admin\EventController');
		Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
	});
	
	// SuperAdministrator
	Route::group(['middleware' => ['role:superadministrator']], function() {
		Route::resource('permissions', 'Admin\PermissionController', ['except' => 'destroy']);
		Route::resource('roles', 'Admin\RoleController', ['except' => 'destroy']);
	});

	// Administrator / organiser
	Route::group(['middleware' => ['role:administrator']], function() {
	    //Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
	});

	// User
	Route::group(['middleware' => ['role:user']], function() {
		//Route::resource('users', 'Admin\UserController');
		//Route::resource('permissions', 'Admin\PermissionController', ['except' => 'destroy']);
		//Route::resource('roles', 'Admin\RoleController', ['except' => 'destroy']);
		//Route::resource('events', 'Admin\EventController');
	});
});

