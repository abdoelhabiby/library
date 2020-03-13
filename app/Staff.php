<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Staff extends Authenticatable
{

use HasRoles;

    protected $table = 'staff';
    
    protected $fillable = [
            "name",
			"phone",
			"password",
    ];

      protected $hidden = [
        'password'
    ];

}
