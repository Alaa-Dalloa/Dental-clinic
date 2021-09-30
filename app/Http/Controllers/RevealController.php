<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reveal;
use App\Patient;
use App\Specialization;
use App\Doctor;
use App\User;
class RevealController extends Controller
{
  public function create ()
 { 
   $patients= Patient::all();
   $specializations= Specialization::all();
   $doctors= Doctor::all();
   $user=User::find(1);
   return view('reveals.create',['user'=>$user,'patients'=>$patients,'specializations'=>$specializations,'doctors'=>$doctors]);
  
  // return view ('reveals.create' , compact ('specializations') , compact('patients') , compact('doctors'));
 }
 public function store(Request $request)
 {
    $reveal = new Reveal ;
    $reveal->drug = $request->drug ;
    $reveal->price=$request->price;
    $reveal->specialization_id=$request->specialization_id;
    $reveal->doctor_id=$request->doctor_id;
    $reveal->patient_id=$request->patient_id;
    $reveal->save();
    return back();
 }
public function index ()
 { 
    $reveals= Reveal::all();
    $user=User::find(1);
   return view ('reveals.index' ,compact('user'), compact('reveals') );
 }
public function destroy($id)
{
  $reveal= reveal::where('id' , $id)->first();
  $reveal->delete();
  return back();

}
public function edit ($id)
{ 
   $patients= Patient::all();
   $specializations= Specialization::all();
   $doctors= doctor::all();
   $reveal= reveal::find($id);
   $user=User::find(1);
   return view ('reveals.edit' , ['user'=>$user,'reveal'=>$reveal,'patients'=>$patients,'specializations'=>$specializations,'doctors'=>$doctors]);

}
public function update($id , Request $request)
{
    $reveal= reveal::find($id);
    $reveal->drug = $request->drug ;
    $reveal->price=$request->price;
    $reveal->doctor_id=$request->doctor_id;
    $reveal->specialization_id=$request->specialization_id;
    $reveal->patient_id=$request->patient_id;
    $reveal-> save();
    return back();
}
}


