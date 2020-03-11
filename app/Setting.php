<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    
    protected $table = 'settings';

    protected $fillable = [

		"name",
		"email",
		"icon",
		"description",
		"keywords",
		"maintenance_message",
		"status",


      ];
}
