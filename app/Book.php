<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    

    protected $table = 'books';
    protected $fillable = [

			"title",
			"category_id",
			"description",
			"photo",
            "available",

    ];


    public function category(){

    	return $this->belongsTo(Category::class);
    }


    public function reservation(){
        return $this->hasMany(Reservation::class);

    }

    public function bookLikes(){
        return $this->hasMany(BookLikes::class,'book_id','id');

    }
}
