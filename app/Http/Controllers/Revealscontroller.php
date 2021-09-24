<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reveal;



class Revealscontroller extends Controller
{
   public function create(){
	   
	   	return view('reveals.create');
   }

    public function store(Request $request){
	    $reveal = new Reveal;
	    $reveal->drug        = $request->drug;
	    $reveal->price       = $request->price;
	    $reveal->specialization_id = $request->specialization_id;
	    $reveal->doctor_id    = $request->doctor_id;
	    $reveal->patient_id = $request->patient_id;

	    $reveal->save();
	   	return back();
   }

    public function index(){

	   return view('reveals.index');
   }


     public function destroy($id){
	   //$meals = meal::where('id',$id)->first();
	   $reveal = Reveal::find($id);

	   $reveal->delete();

	   return back();
   }


      public function edit($id){
	   //$meals = meal::where('id',$id)->first();
	   $reveal = Reveal::find($id);

	   return view ('reveals.edit');
   }

      public function update($id,Request $request){
	 
	    $reveal = Reveal::find($id);
	    $reveal->drug        = $request->drug;
	    $reveal->price       = $request->price;
	    $reveal->specialization_id = $request->specialization_id;
	    $reveal->doctor_id    = $request->doctor_id;
	    $reveal->patient_id = $request->patient_id;


	    $reveal->save();
	   	return back();
   }


}
