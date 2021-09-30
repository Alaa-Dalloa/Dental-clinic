<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialization;
use App\User;
class SpecializationsController extends Controller
{
    public function create ()
 {
   $user=User::find(1);
   return view ('specializations.create',compact('user'));
 }
 public function store(Request $request)
 {
    $specialization = new Specialization ;
    $specialization->Name = $request->Name ;
    $specialization->save();
    return back();
 }
public function index ()
 {
  $user=User::find(1);
    $specializations= Specialization::all();
   return view ('specializations.index' ,compact('user'), compact('specializations') );
 }
public function destroy($id)
{
  $specialization= specialization::where('id' , $id)->first();
  $specialization->delete();
  return back();

}
public function edit ($id)
{
  $user=User::find(1);
   $specialization= specialization::find($id);
   return view ('specializations.edit' ,compact('user'), compact('specialization'));

}
public function update($id , Request $request)
{
    $specialization= specialization::find($id);
    $specialization->Name = $request->Name ;
    $specialization-> save();
    return back();
}
}
