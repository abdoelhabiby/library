<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

Config(['auth.defaults.guard' => 'web']);

class StudentAcountController extends Controller
{
   

    public function login(){

        return view('student.login');
    }

/*----------------------------------------------------*/

    public function loginSubmit(){



        if(auth()->attempt(['email' => request()->email,'password' => request()->password])){

             return redirect('/');
        }else{
            return back();
        }
    }

    /*----------------------------------------------------*/


    public function logout(){


         auth()->logout();

        return redirect("/");
    }
}
