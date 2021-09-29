<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Specialization;


class DoctorController extends Controller
{



   public function create()
   {
       $specializations= Specialization::all();
      return view('doctors.create',['specializations'=>$specializations]);
      // return view('operations.create',compact ('patients'),compact ('specializations'),compact ('doctors'));

   }

    public function store(Request $request)
    {
       $doctor = new Doctor;
       $doctor->name        = $request->name;
       $doctor->phone       = $request->phone;
       $doctor->email = $request->email;
       $doctor->specialization_id = $request->specialization_id;

       $doctor->save();
         return back();
   }

    public function index()
    {

      $doctors= doctor::all();
      return view('doctors.index' , compact('doctors'));
   }



     public function destroy($id){
      //$meals = meal::where('id',$id)->first();
      //$operations = Operation::find($id);
       $doctor= doctor::where('id' , $id)->first();

      $doctor->delete();

      return back();
   }


      public function edit( $id){
      //$meals = meal::where('id',$id)->first();
      $doctors = doctor::find($id);
      $specializations= Specialization::all();
      return view('doctors.edit',['doctor'=>$doctors,'specializations'=>$specializations]);
     
   }


  
      public function update($id,Request $request){

    
       $doctor = Doctor::find($id);
       $doctor->name        = $request->name;
       $doctor->phone       = $request->phone;
       $doctor->email = $request->email;
       $doctor->specialization_id = $request->specialization_id;
       $doctor->save();
         return redirect('doctors');
   }


}
