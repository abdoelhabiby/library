<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    
    protected $table= 'reservations';
    protected $fillable = [
        "student_id",
		"book_id",
		"status",
		"evaluation",

    ];



   public function student(){

    	return $this->belongsTo(Student::class,'student_id','id');
    } 

  public function book(){

    	return $this->belongsTo(Book::class,'book_id','id');
    } 


}
