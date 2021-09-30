<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;


use App\Patient;
use App\Specialization;


class ReservationsController extends Controller
{

   public function create()
   {
       $patients= Patient::all();
        $specializations= Specialization::all();
      return view('reservations.create',['patients'=>$patients,'specializations'=>$specializations]);
      // return view('operations.create',compact ('patients'),compact ('specializations'),compact ('doctors'));

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
