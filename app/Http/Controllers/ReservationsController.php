<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;


use App\Patient;
use App\Specialization;
<<<<<<< HEAD
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
=======


class ReservationsController extends Controller
{

   public function create()
   {
       $patients= Patient::all();
        $specializations= Specialization::all();
      return view('reservations.create',['patients'=>$patients,'specializations'=>$specializations]);
      // return view('operations.create',compact ('patients'),compact ('specializations'),compact ('doctors'));
>>>>>>> 344ad947af4a9641d24a0890473f8b4bdc53eae7

   }

    public function store(Request $request)
    {
       $reservation = new Reservation;
       $reservation->time        = $request->time;
       $reservation->date       = $request->date;
       $reservation->specialization_id = $request->specialization_id;
       $reservation->patient_id = $request->patient_id;

       $reservation->save();
         return back();
   }

    public function index()
    {

      $reservations= reservation::all();
      return view('reservations.index' , compact('reservations'));
   }



     public function destroy($id){
      //$meals = meal::where('id',$id)->first();
      //$operations = Operation::find($id);
       $reservation= reservation::where('id' , $id)->first();

      $reservation->delete();

      return back();
   }


      public function edit( $id){
      //$meals = meal::where('id',$id)->first();
      $reservations = reservation::find($id);
      $patients= Patient::all();
        $specializations= Specialization::all();
      return view('reservations.edit',['reservation'=>$reservations,'patients'=>$patients,'specializations'=>$specializations]);
     
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
