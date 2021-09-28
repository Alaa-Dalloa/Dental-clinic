<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;

use App\Doctor;
use App\Patient;
use App\Specialization;


class Operationscontroller extends Controller
{



   public function create()
   {
	    $patients= Patient::all();
        $specializations= Specialization::all();
        $doctors= Doctor::all();
		return view('operations.create',['patients'=>$patients,'specializations'=>$specializations,'doctors'=>$doctors]);
	   //	return view('operations.create',compact ('patients'),compact ('specializations'),compact ('doctors'));

   }

    public function store(Request $request)
    {
	    $operation = new Operation;
	    $operation->name        = $request->name;
	    $operation->date       = $request->date;
	    $operation->specialization_id = $request->specialization_id;
	    $operation->doctor_id    = $request->doctor_id;
	    $operation->patient_id = $request->patient_id;

	    $operation->save();
	   	return back();
   }

    public function index()
    {

      $operations= operation::all();
	   return view('operations.index' , compact('operations'));
   }



     public function destroy($id){
	   //$meals = meal::where('id',$id)->first();
	   //$operations = Operation::find($id);
       $operation= operation::where('id' , $id)->first();

	   $operation->delete();

	   return back();
   }


      public function edit($id){
	   //$meals = meal::where('id',$id)->first();
	   $operations = Operation::find($id);
	   $specializations= Specialization::find($id);
       $patients= Patient::find($id);
       $doctor= doctor::find($id);

	   return view ('operations.edit',compact ('operations'),compact ('specializations'),compact ('patients'),compact ('doctor'));
   }

      public function update($id,Request $request){

	 
	    $operation = Operation::find($id);
	    $operation->name        = $request->name;
	    $operation->date       = $request->date;
	    $operation->specialization_id = $request->specialization_id;
	    $operation->doctor_id    = $request->doctor_id;
	    $operation->patient_id = $request->patient_id;
	    $operation->save();
	   	return back();
   }


}
