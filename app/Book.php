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


    function category(){

    	return $this->belongsTo(Category::class);
    }
}
