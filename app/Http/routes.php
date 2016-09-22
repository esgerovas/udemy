<?php

Route::get('/', function () {
    return view('udemy.home');
});
Route::get('/courses', function () {
    return view('udemy.courses');
});
Route::get('/Web-Development', function () {
    return view('udemy.course.categories');
});
Route::get('/Web-Developer-Bootcamp', function () {
    return view('udemy.course.course');
});
Route::get('/shopping-card', function () {
    return view('udemy.course.shopping');
});
Route::get('/my-courses', function () {
    return view('udemy.course.my_courses');
});
Route::get('/edit-profile', function () {
    return view('udemy.course.edit_profile');
});
Route::get('/account-settings', function () {
    return view('udemy.course.account_settings');
});
