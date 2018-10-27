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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about-us', function () {
    return view('aboutus');
})->name('about-us');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/contact-us', function () {
    return view('contactus');
})->name('contact-us');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

// event
Route::get('/event/upcoming', 'HomeController@upcoming')->name('upcoming');
Route::get('/event/happening', 'HomeController@happening')->name('happening');
Route::get('/event/{slug}', ['as' => 'event.single', 'uses' => 'Admin\EventController@getSingle'])
	->where('slug', '[\w\d\-\_]+'); // regular expression

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

	// SuperAdministrator and Administrator
	Route::group(['middleware' => ['role:superadministrator|organiser']], function() {

		// dashboard route
		Route::get('users/list', 'Admin\UserController@index');
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
	Route::group(['middleware' => ['role:organiser']], function() {
	    //Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
	});


	// SuperAdministrator
	Route::group(['middleware' => ['role:superadministrator']], function() {
		Route::resource('permissions', 'Admin\PermissionController', ['except' => 'destroy']);
		Route::resource('roles', 'Admin\RoleController', ['except' => 'destroy']);
	});
});

