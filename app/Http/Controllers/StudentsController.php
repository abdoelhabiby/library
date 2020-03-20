<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Category;
use App\Reservation;
use App\Book;

Config(['auth.defaults.guard' => 'web']);

class StudentsController extends Controller
{
    
   
 /*---------------------------------------------------------------------*/

     public function book_reservation($id){
           
        $book = Book::with('reservation')->findOrFail($id);


        if($book->available == 'yes'){


            return view('student.book_reservation',compact(['book']));

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


              return response(["status" => 200]);        

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
//--------------------------------------------------------------------

    public function student_books(){

      $reservation = Reservation::where('student_id' ,auth()->user()->id)->get();


       
         return view('student.student_books',compact(['reservation']));
    }    

//=============================================================================


    public function reservation_cancel( $id){
  


          $reservation = Reservation::find($id);
       
          if(!empty($reservation )){


           \App\Book::where('id',$reservation->book_id)->update(['available' => 'yes']);

             $reservation->delete();

              session()->flash('success','تم الغاء الحجز');

              return redirect(route('student_books'));        

          }else{

             return back();
       

          }

    



    }

//=============================================================================


  public function addLike($book_id){
       
       if(request()->ajax()){
              
             $book = Book::find($book_id);
             
             if(!empty($book)){

               $likes = $book->like + 1;

              $book->update(['like' => $likes]);



             }else{
              return response(['status' => 'error'],304);
             } 

        
           return response(['status' => 'error'],304);




          }else{

            return response(['status' => 'error'],304);
          }



       }

  


//=============================================================================






}
