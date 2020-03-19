<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Reservation;
use App\Book;

Config(['auth.defaults.guard' => 'web']);

class WelcomeController extends Controller
{
    

     public function index(){

       	return view('welcome');
     }

     /*---------------------------------------------------------------------*/
       
       public function category($id){

       	    

       	    $category = Category::where('id',$id)->first();

            $book = $category->books()->paginate(6);

           // $book = $category->books()->first();



       	 return view('category.index',compact(['category','book']));
       }

     /*---------------------------------------------------------------------*/

     public function book_reservation($id){
           
        $book = Book::with('reservation')->findOrFail($id);


     	if($book->available == 'yes'){

     		

     	    return view('book_reservation',compact(['book']));

     	}else{


     	    return back();
     	}

     }
     /*---------------------------------------------------------------------*/

        public function reservation_submit($id){

        	if(request()->ajax()){

        	   $book = Book::with('reservation')->find($id);

              if(!empty($book)){

        	   if($book->available == 'yes'){

         $reservation = Reservation::create(['student_id' => auth()->user()->id,'book_id' => $id]);
          
          $book->update(['available' => 'no']);


        	  return response(["status" => 200,'content' => $reservation]);	   	   

        	   }else{

        	   return response(["status" => 304,'content' => 'not available']);	   	   
        	  }

            }else{

              return response(["status" => 304,'content' => 'not available']);	   	   

            }

	        }else{

	        	return redirect(route('welcome'));

	        }


        }

     /*---------------------------------------------------------------------*/
     /*---------------------------------------------------------------------*/

}
