<?php

use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'eldashboard','middleware' => 'authAdmin:admin'],function(){

	     Config::set('auth.defines','admin');

	Route::get('/', function () { return view('dashboard.welcome'); })->name('Dashboard');

	Route::group(['namespace' => 'Dashboard'],function(){

		Route::resource('categories','CategoryController')->except('show');
		Route::resource('books','BooksController')->except('show');

		Route::get('settings','SettingsController@edit')->name('setting.edit');
		Route::PUT('settings','SettingsController@update')->name('setting.update');

    });


  Route::get('eldashboard/logout',"Dashboard\AdminAcountController@logout")->name('admin.logout');


});

Route::group(['middleware' => 'redirectAdmin:admin'],function(){
	  Route::get('eldashboard/login',"Dashboard\AdminAcountController@login")->name('admin.login');

	});

Route::POST('eldashboard/login',"Dashboard\AdminAcountController@loginSubmit")->name('admin.loginSubmit');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
