<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
class PatientController extends Controller
{
    public function create ()
 {
   return view ('patients.create');
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
 { $patients= Patient::all();
   return view ('patients.index' , compact('patients') );
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
   return view ('patients.edit' , compact('patient'));

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

