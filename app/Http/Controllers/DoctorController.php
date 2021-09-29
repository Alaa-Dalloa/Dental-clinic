<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Specialization;
class DoctorController extends Controller
{
  public function create ()
 { 
       $specializations= Specialization::all();
       return view ('doctors.create' , compact ('specializations'));
 }
 public function store(Request $request)
 {
    $doctor = new Doctor ;
    $doctor->name = $request->name ;
    $doctor->phone=$request->phone;
    $doctor->email=$request->email;
    $doctor->specialization_id=$request->specialization_id;
    $doctor->save();
    return back();
 }
public function index ()
 { $doctors= Doctor::all();
   return view ('doctors.index' , compact('doctors') );
 }
public function destroy($id)
{
  $doctor= doctor::where('id' , $id)->first();
  $doctor->delete();
  return back();

}
public function edit ($id)
{  $specializations= Specialization::all();
   $doctor= doctor::find($id);
   return view ('doctors.edit' , compact('doctor') , compact ('specializations'));

}
public function update($id , Request $request)
{
    $doctor= doctor::find($id);
    $doctor->name = $request->name ;
    $doctor->phone=$request->phone;
    $doctor->email=$request->email;
    $doctor->specialization_id=$request->specialization_id;
    $doctor-> save();
    return back();
}
}


