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


Route::get('/about-us', function () {
    return view('aboutus');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('contactus');
})->name('contact-us');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('comments', 'CommentController');
Auth::routes();

Route::get('event/{slug}', ['as' => 'event.single', 'uses' => 'Admin\EventController@getSingle'])
	->where('slug', '[\w\d\-\_]+'); // regular expression

//Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function () {
Route::group(['middleware' => 'auth'], function () {

	// SuperAdministrator and Administrator
	Route::group(['middleware' => ['role:superadministrator|administrator']], function() {

		// dashboard route
		Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');

		// manage events route
		Route::get('events/published', 'Admin\EventController@getPublished');
		Route::get('events/drafts', 'Admin\EventController@getDrafts');
		Route::resource('events', 'Admin\EventController');

		// manage users route
		Route::resource('users', 'Admin\UserController');
	});
	
	// User
	Route::group(['middleware' => ['role:user']], function() {
		//Route::resource('users', 'Admin\UserController');
		//Route::resource('permissions', 'Admin\PermissionController', ['except' => 'destroy']);
		//Route::resource('roles', 'Admin\RoleController', ['except' => 'destroy']);
		//Route::resource('events', 'Admin\EventController');
	});

	// Administrator / organiser
	Route::group(['middleware' => ['role:administrator']], function() {
	    //Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
	});


	// SuperAdministrator
	Route::group(['middleware' => ['role:superadministrator']], function() {
		Route::resource('permissions', 'Admin\PermissionController', ['except' => 'destroy']);
		Route::resource('roles', 'Admin\RoleController', ['except' => 'destroy']);
	});
});

