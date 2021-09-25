<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;
<<<<<<< HEAD
use App\Doctor;
use App\Patient;
use App\Specialization;
=======
use App\Specialization;
use App\Doctor;
use App\Patient;

>>>>>>> 46f03447bb4ed61d537ac1a3f3a5c521c77bc1d8


class Operationscontroller extends Controller
{
<<<<<<< HEAD
   public function create(){
	      $doctors= Doctor::all();
	      $patients= patient::all();
	      $specializations= Specialization::all();
	   	return view('operations.create' , compact('doctors') , compact('patients') , compact('specializations'));
=======
   public function create()
   {
	    $patients= Patient::all();
        $specializations= Specialization::all();
        $doctors= Doctor::all();
	   	return view('operations.create',compact ('patients'),compact ('specializations'),compact ('doctors'));
>>>>>>> 46f03447bb4ed61d537ac1a3f3a5c521c77bc1d8
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
<<<<<<< HEAD
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
=======
      $operations= Operation::all();
	   return view('operations.index',compact ('operations'));
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
>>>>>>> 46f03447bb4ed61d537ac1a3f3a5c521c77bc1d8
	 
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
