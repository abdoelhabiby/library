<?php

use Illuminate\Support\Facades\Route;


Config(['auth.defaults.guard' => 'web']);


 Route::get('/',"WelcomeController@index")->name('welcome');

 Route::get('/category/{id}',"WelcomeController@category")->name('categoryId');
 

 Route::get('/login',"StudentController@login")->name('welcome.login');
 Route::post('/login',"StudentController@loginSubmit")->name('welcome.loginSubmit');
 Route::get('/logout',"StudentController@logout")->name('welcome.logout');





