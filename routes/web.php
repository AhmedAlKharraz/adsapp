<?php

use Illuminate\Support\Facades\Route;

// Website 
Route::get('/', function () {
    return view('web.home');
});

// Auth Routes 
Auth::routes();

// Admin Panel Routes 
Route::group(['middleware' => 'auth', 'prefix' => 'admin',], function () {

	// Dashboard 
	Route::get('/dashboard', 'HomeController@index')->name('dashboard');

	Route::get('table-list', function () {
		return view('admin.pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('admin.pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('admin.pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('admin.pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('admin.pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('admin.pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('admin.pages.upgrade');
	})->name('upgrade');

	// Users 
	Route::resource('user', 'UserController', ['except' => ['show']]);

	// Profile 
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});