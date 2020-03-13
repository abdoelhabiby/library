<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    
use HasRoles;

    protected $table = 'admins';
    
    protected $fillable = [
            "name",
			"phone",
			"password",
			"level",
    ];

      protected $hidden = [
        'password'
    ];
}
