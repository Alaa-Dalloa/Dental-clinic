<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\User;
class PatientController extends Controller
{
    public function create ()
 {

  $user=User::find(1);
   return view ('patients.create',compact('user'));
 }
 public function store(Request $request)
 {
    $patient = new Patient ;
    $patient->Name = $request->Name ;
    $patient->Phone=$request->Phone;
    $patient->Address=$request->Address;
    $patient->Age=$request->Age;
    $patient->save();
    return back();
 }
public function index ()
 { 
   $patients= Patient::all();
   $user=User::find(1);
   return view ('patients.index' , compact('patients'),compact('user') );
 }
public function destroy($id)
{
  $patient= patient::where('id' , $id)->first();
  $patient->delete();
  return back();

}
public function edit ($id)
{
   $patient= patient::find($id);
   $user=User::find(1);
   return view ('patients.edit' , compact('patient'),compact('user'));

}
public function update($id , Request $request)
{
    $patient= patient::find($id);
    $patient->Name = $request->Name ;
    $patient->Phone=$request->Phone;
    $patient->Address=$request->Address;
    $patient->Age=$request->Age;
    $patient-> save();
    return back();
}
}

