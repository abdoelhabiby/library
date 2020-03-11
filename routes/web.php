<?php

use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'eldashboard'],function(){

	Route::get('/', function () {
	    return view('dashboard.welcome');
	})->name('Dashboard');

	Route::group(['namespace' => 'Dashboard'],function(){

		Route::resource('categories','CategoryController')->except('show');
		Route::resource('books','BooksController')->except('show');

		Route::get('settings','SettingsController@edit')->name('setting.edit');
		Route::PUT('settings','SettingsController@update')->name('setting.update');

    });

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
