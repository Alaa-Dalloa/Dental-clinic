<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;
use App\Doctor;
use App\Patient;
use App\Specialization;


class Operationscontroller extends Controller
{
   public function create(){
	      $doctors= Doctor::all();
	      $patients= patient::all();
	      $specializations= Specialization::all();
	   	return view('operations.create' , compact('doctors') , compact('patients') , compact('specializations'));
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


     public function destroy($id)
     {
	   $operation= operation::where('id' , $id)->first();
		$operation->delete();
		  return back();
     }


      public function edit($id)
      {
         $specializations= Specialization::find($id);
         $doctors= Doctor::find($id);
		   $patients= Patient::find($id);
		   $operation= operation::find($id);
	   return view ('operations.edit' , compact('operation') , compact('patients') , compact('doctors') , compact('specializations'));
     }

      public function update($id,Request $request)
      {
	 
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
