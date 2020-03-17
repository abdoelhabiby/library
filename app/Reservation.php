<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    
    protected = 'reservations';
    protected $fillable = [
        "student_id",
		"book_id",
		"status",
		"like",
		"evaluation",

    ];
}
