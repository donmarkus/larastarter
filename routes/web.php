<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Auth Routes
Auth::routes();

// Locale Routes
Route::group(['prefix' => 'locales'], function () {

    Route::get('/{locale}.js', '\Someline\Support\Controllers\LocaleController@getLocaleJs');

    Route::get('/switch/{locale}', '\Someline\Support\Controllers\LocaleController@getSwitchLocale');

});

// Basic Routes
Route::get('/', 'HomeController@index');


// Image Routes
Route::get('/image/{name}', 'ImageController@showOriginalImage');
Route::post('/image', 'ImageController@postImage');

// Protected Routes
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

    Route::get('users', 'UserController@getUserList');
    Route::get('dashboard', 'DashboardController@index');
    Route::get('profile', 'UserController@profile')->name('admin.user.profile');

});

// Console Routes
Route::group(['prefix' => 'console'], function () {

    Route::get('oauth', function () {
        return view('console.oauth');
    });

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

});