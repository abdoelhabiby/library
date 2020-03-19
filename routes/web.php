<?php

use Illuminate\Support\Facades\Route;


Config(['auth.defaults.guard' => 'web']);


 Route::get('/',"WelcomeController@index")->name('welcome');

 Route::get('/category/{id}',"WelcomeController@category")->name('categoryId');


Route::group(['middleware' => 'auth'],function(){



     Route::get('/book/{id}',"StudentsController@book_reservation")->name('book_reservation');
     Route::post('/reservation_submit/{id}',"StudentsController@reservation_submit")->name('reservation_submit');
     Route::post('/reservation_cancel/{id}',"StudentsController@reservation_cancel")->name('reservation_cancel');
     Route::get('/student/books',"StudentsController@student_books")->name('student_books');


     Route::get('/logout',"StudentAcountController@logout")->name('welcome.logout');



 });


 Route::get('/login',"StudentAcountController@login")->name('welcome.login');
 Route::post('/login',"StudentAcountController@loginSubmit")->name('welcome.loginSubmit');





