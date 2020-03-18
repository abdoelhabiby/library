<?php

namespace App\Http\Controllers\Dashboard;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\DataTables\UsersDataTable;


class UsersController extends Controller
{

  
  public function __construct(){

      $this->middleware('permission:read_students')->only('index');

  }


// -------------------------------------------------------------------------------


    public function index(UsersDataTable $dataTable)
    {
        
       return $dataTable->render('dashboard.users.index');

    }  

}
