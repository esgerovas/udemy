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
Route::get('/', 'RouteController@home');
Route::get('/courses', 'RouteController@courses');
Route::get('/Web-Development', 'RouteController@categories');
Route::get('/Web-Developer-Bootcamp', 'RouteController@course');
Route::get('/shopping-card', 'RouteController@shopping');
Route::get('/my-courses', 'RouteController@my_courses');
Route::get('/edit-profile', 'RouteController@edit_profile');
Route::get('/account-settings', 'RouteController@account_settings');
// Route::group(['middleware' => ['web']], function(){
	Route::auth();
	//Route::get('/home', 'HomeController@index');
// });

// Route::group(['middleware' => ['web']], function () {
    //Login Routes...
    Route::get('/admin/login','AdminAuth\AuthController@showLoginForm');
    Route::post('/admin/login','AdminAuth\AuthController@login');
    Route::get('/admin/logout','AdminAuth\AuthController@logout');

    // Registration Routes...
    Route::get('admin/register', 'AdminAuth\AuthController@showRegistrationForm');
    Route::post('admin/register', 'AdminAuth\AuthController@register');

    //Route::post('admin/password/email','AdminAuth\PasswordController@sendResetLinkEmail');
    //Route::post('admin/password/reset','AdminAuth\PasswordController@reset');
   //Route::get('admin/password/reset/{token?}','AdminAuth\PasswordController@showResetForm');

    Route::get('/admin', 'AdminController@index');
    
    Route::get('/admin/courses','AdminController@courses');
    Route::get('/admin/add-course', 'AdminController@addCourse');
    Route::get('/admin/unsigned-authors', 'AdminController@unsignedAuthors');
// });  
