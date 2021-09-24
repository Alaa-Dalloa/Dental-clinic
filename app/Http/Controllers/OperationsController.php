<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;



class Operationscontroller extends Controller
{
   public function create(){
	   
	   	return view('operations.create');
   }

    public function store(Request $request){
	    $operation = new Operation;
	    $operation->name        = $request->name;
	    $operation->date       = $request->date;
	    $operation->specialization_id = $request->specialization_id;
	    $operation->doctor_id    = $request->doctor_id;
	    $operation->patient_id = $request->patient_id;

	    $operation->save();
	   	return back();
   }

    public function index(){

	   return view('operations.index');
   }


     public function destroy($id){
	   //$meals = meal::where('id',$id)->first();
	   $operation = Operation::find($id);

	   $operation->delete();

	   return back();
   }


      public function edit($id){
	   //$meals = meal::where('id',$id)->first();
	   $operation = Operation::find($id);

	   return view ('operations.edit');
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
