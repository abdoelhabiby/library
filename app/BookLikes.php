<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookLikes extends Model
{
    

     protected $table ='book_likes';

     protected $fillable = [

       "student_id",
       "book_id",
     ];
}
