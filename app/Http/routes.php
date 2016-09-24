<?php

Route::get('/', 'RouteController@home');
Route::get('/courses', 'RouteController@courses');
Route::get('/Web-Development', 'RouteController@categories');
Route::get('/Web-Developer-Bootcamp', 'RouteController@course');
Route::get('/shopping-card', 'RouteController@shopping');
Route::get('/my-courses', 'RouteController@my_courses');
Route::get('/edit-profile', 'RouteController@edit_profile');
Route::get('/account-settings', 'RouteController@account_settings');
// Route::get('/admin',function(){ return view('admin.admin');});
Route::auth();

// Route::get('/admin', 'AdminController@index');
//Login Routes...
Route::get('/admin','AdminAuth\AuthController@showLoginForm');
Route::post('/admin/login','AdminAuth\AuthController@login');
Route::get('/admin/logout','AdminAuth\AuthController@logout');

// Registration Routes...
// Route::get('admin/register', 'AdminAuth\AuthController@showRegistrationForm');
// Route::post('admin/register', 'AdminAuth\AuthController@register');

Route::post('admin/password/email','AdminAuth\PasswordController@sendResetLinkEmail');
Route::post('admin/password/reset','AdminAuth\PasswordController@reset');
Route::get('admin/password/reset/{token?}','AdminAuth\PasswordController@showResetForm');


