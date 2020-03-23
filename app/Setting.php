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


          public function getCreatedAtAttribute($value)
    {
        return date('d-m-Y h:m:s', strtotime($value));
    }

 

  public function getUpdatedAtAttribute($value)
  
    {
        return date('d-m-Y h:m:s', strtotime($value));
      }
    
}
