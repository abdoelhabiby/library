<?php

namespace App\Http\Controllers\Dashboard;

use App\Reservation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\ReservationsDataTable;

class ReservationsController extends Controller
{




  public function __construct(){

      $this->middleware('permission:read_reservation')->only('index');
      $this->middleware('permission:update_reservation')->only(['edit','update']);
      $this->middleware('permission:delete_reservation')->only('destroy');
  }

// -------------------------------------------------------------------------------


    public function index(ReservationsDataTable $dataTable)
    {

        // $admin = Reservation::with(['user','book'])->get();

        // return $admin;
    
        return $dataTable->render('dashboard.reservations.index');

    }



//-----------------------------------------------------------

    public function edit($id)
    {

       return $id;

         $reservation = Reservation::all();

         return $reservation;
         
        return  view('dashboard.reservations.edit',compact('reservation'));

    }

// -------------------------------------------------------------------------------


    public function update(Request $request, Reservation $reservation)
    {

       $validate = $request->validate([
            
            "status" => "required|in:pending,active,refused"

       ]);


        $reservation->update($validate);

        session()->flash('success',trans('dashb.success_update'));

        return redirect(route('reservations.index'));
    }

// -------------------------------------------------------------------------------

    public function destroy(Reservation $reservation)
    {

       $reservation->delete();

       session()->flash('success',trans('dashb.success_delete'));

        return redirect(route('reservations.index'));


    }
}
