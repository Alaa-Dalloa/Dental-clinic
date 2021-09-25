<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Patient;
use App\Specialization;
class ReservationsController extends Controller
{
    public function create ()
 {
    $patients= Patient::all();
    $specializations= Specialization::all();
   return view ('reservations.create' , compact ('specializations') , compact ('patients'));
 }
 public function store(Request $request)
 {
    $reservation = new Reservation ;
    $reservation->time = $request->time ;
    $reservation->date=$request->date;
    $reservation->patient_id=$request->patient_id;
    $reservation->specialization_id=$request->specialization_id;
    $reservation->save();
    return back();
 }
public function index ()
 { 
  $reservations= Reservation::all();
   return view ('reservations.index' , compact('reservations') );
 }
public function destroy($id)
{
  $reservation= reservation::where('id' , $id)->first();
  $reservation->delete();
  return back();

}
public function edit ($id)
{  $specializations= Specialization::find($id);
   $patients= Patient::find($id);
   $reservation= reservation::find($id);
   return view ('reservations.edit' , compact('reservation') , compact ('specializations') , compact ('patients'));

}
public function update($id , Request $request)
{
    $reservation= reservation::find($id);
    $reservation->time = $request->time ;
    $reservation->date=$request->date;
    $reservation->patient_id=$request->patient_id;
    $reservation->specialization_id=$request->specialization_id;
    $reservation-> save();
    return back();
}
}

