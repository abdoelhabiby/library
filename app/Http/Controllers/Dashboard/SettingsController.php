<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Storage;

class SettingsController extends Controller
{
    
    public function edit(){

        $settings = settings();

        return view('dashboard.settings.edit',compact('settings'));
    }


  public function update(){

     $validate = request()->validate([
           
              "name" => "required|string",
              "email" => "required|email",
              "icon" => checkImage(),
              "description" => "sometimes|nullable|string",
              "keywords" => "sometimes|nullable|string",
              "maintenance_message" => "sometimes|nullable|string",
              "status" => "sometimes|nullable|in:open,close",

     ]);

      if(request()->hasFile('icon')){

            $prev_im = !empty(settings()->icon) && settings()->icon != 'setting/default.png' ? 'public/' .settings()->icon : null;
             
            $replace = str_replace('public/', '', uploade()->uploadeImage($prev_im,request()->file('icon'),'setting'));


            $validate['icon'] = $replace;
         }



      settings()->update($validate);

      session()->flash('success',trans('dashb.success_update'));

      return redirect(route('setting.edit'));

  }


}
