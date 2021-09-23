<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialization;
class SpecializationsController extends Controller
{
    public function create ()
 {
   return view ('specializations.create');
 }
 public function store(Request $request)
 {
    $specialization = new Specialization ;
    $specialization->Name = $request->Name ;
    $specialization->save();
    return back();
 }
public function index ()
 { $specializations= Specialization::all();
   return view ('specializations.index' , compact('specializations') );
 }
public function destroy($id)
{
  $specialization= specialization::where('id' , $id)->first();
  $specialization->delete();
  return back();

}
public function edit ($id)
{
   $specialization= specialization::find($id);
   return view ('specializations.edit' , compact('specialization'));

}
public function update($id , Request $request)
{
    $specialization= specialization::find($id);
    $specialization->Name = $request->Name ;
    $specialization-> save();
    return back();
}
}
