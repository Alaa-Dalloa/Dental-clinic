<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;

use App\Doctor;
use App\Patient;
use App\User;
use App\Specialization;


class Operationscontroller extends Controller
{



   public function create()
   {
	    $patients= Patient::all();
        $specializations= Specialization::all();
        $doctors= Doctor::all();
		$user=User::find(1);
		return view('operations.create',['user'=>$user,'patients'=>$patients,'specializations'=>$specializations,'doctors'=>$doctors]);
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
	  $user=User::find(1);
	   return view('operations.index' , compact('operations'),compact('user'));
   }



     public function destroy($id){
	   //$meals = meal::where('id',$id)->first();
	   //$operations = Operation::find($id);
       $operation= operation::where('id' , $id)->first();

	   $operation->delete();

	   return back();
   }


      public function edit( $id){
	   //$meals = meal::where('id',$id)->first();
	   $operations = Operation::find($id);
	   $patients= Patient::all();
        $specializations= Specialization::all();
        $doctors= Doctor::all();
		$user=User::find(1);
	   return view('operations.edit',['user'=>$user,'operation'=>$operations,'patients'=>$patients,'specializations'=>$specializations,'doctors'=>$doctors]);
	  
   }


  
      public function update($id,Request $request){

	 
	    $operation = Operation::find($id);
	    $operation->name        = $request->name;
	    $operation->date       = $request->date;
	    $operation->specialization_id = $request->specialization_id;
	    $operation->doctor_id    = $request->doctor_id;
	    $operation->patient_id = $request->patient_id;
	    $operation->save();
	   	return redirect('operations');
   }


}
