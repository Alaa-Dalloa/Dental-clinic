<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;


use App\Patient;
use App\Specialization;

use App\User;
class ReservationsController extends Controller
{
    public function create ()
 {
   $user=User::find(1);
    $patients= Patient::all();
    $specializations= Specialization::all();
   return view ('reservations.create' ,['patients'=>$patients,'specializations'=>$specializations,'user'=>$user]);
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
   $user=User::find(1);
  $reservations= Reservation::all();
   return view ('reservations.index' , ['user'=>$user,'reservations'=>$reservations]);
 }
public function destroy($id)
{
  $reservation= reservation::where('id' , $id)->first();
  $reservation->delete();
  return back();

}
public function edit ($id)
{  $specializations= Specialization::all();
   $patients= Patient::all();
   $reservation= reservation::find($id);
   $user=User::find(1);

   return view ('reservations.edit' , compact('user'),compact('reservation') , compact ('specializations') , compact ('patients'));
 }




  
      public function update($id,Request $request){

    
       $reservation = Reservation::find($id);
       $reservation->time        = $request->time;
       $reservation->date       = $request->date;
       $reservation->specialization_id = $request->specialization_id;
       $reservation->patient_id = $request->patient_id;
       $reservation->save();
         return redirect('reservations');
   }


}
