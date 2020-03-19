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



   public function user(){

    	return $this->belongsTo(User::class,'student_id','id');
    } 

  public function book(){

    	return $this->hasOne(Book::class,'id','book_id');
    } 


}
