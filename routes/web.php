<?php

use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'eldashboard'],function(){

	Route::get('/', function () {
	    return view('dashboard.welcome');
	})->name('Dashboard');

	Route::group(['namespace' => 'Dashboard'],function(){

		Route::resource('categories','CategoryController')->except('show');
		Route::resource('books','BooksController')->except('show');

    });

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
