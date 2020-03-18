<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

Config(['auth.defaults.guard' => 'web']);

class WelcomeController extends Controller
{
    

     public function index(){



    $categories = Category::all();
  

     
     	return view('welcome',compact('categories'));
     }

     /*---------------------------------------------------------------------*/
       
       public function category($id){

       	    $categories = Category::get();

       	    $category = Category::where('id',$id)->first();

            $book = $category->books()->paginate(6);


       	 return view('category.index',compact(['categories','category','book']));
       }

     /*---------------------------------------------------------------------*/
     /*---------------------------------------------------------------------*/
     /*---------------------------------------------------------------------*/
     /*---------------------------------------------------------------------*/

}
