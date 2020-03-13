<?php

use Illuminate\Support\Facades\Route;

// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;





Route::group(['prefix' => 'eldashboard','middleware' => 'authAdmin:admin'],function(){

Config(['auth.defaults.guard' => 'admin']);





	Route::group(['namespace' => 'Dashboard'],function(){

	    Route::get('/',"DashboardController@index")->name('Dashboard');

		Route::resource('categories','CategoryController')->except('show');

		Route::resource('books','BooksController')->except('show');

		Route::resource('admins','AdminsController')->except('show');
		Route::resource('staff','StaffController')->except('show');


 Route::group(['middleware' => 'permission:edit_setting'],function(){

		Route::get('settings','SettingsController@edit')->name('setting.edit');
		Route::PUT('settings','SettingsController@update')->name('setting.update');

 });


    });


  Route::get('eldashboard/logout',"Dashboard\AdminAcountController@logout")->name('admin.logout');


});

Route::group(['middleware' => 'redirectAdmin:admin'],function(){
	  Route::get('eldashboard/login',"Dashboard\AdminAcountController@login")->name('admin.login');

	});

Route::POST('eldashboard/login',"Dashboard\AdminAcountController@loginSubmit")->name('admin.loginSubmit');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

