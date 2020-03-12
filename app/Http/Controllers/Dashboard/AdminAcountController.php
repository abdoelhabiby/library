<?php

namespace App\Http\Controllers\Dashboard;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAcountController extends Controller
{

    
    public function login(){
        return view('dashboard.login.login');
    }  


    public function loginSubmit(){



      $remember_me = request()->remember ? true : false;

      if(auth()->guard("admin")->attempt(["name" => request()->name,"password" => request()->password],$remember_me)){

        return redirect(route('Dashboard'));

      }else{

        session()->flash("error_log",trans('dashb.loginError'));
        return back();

      }

    }


    public function logout(){

       return auth()->guard('admin')->logout();

       return redirect(route('admin.login'));
    }




}
