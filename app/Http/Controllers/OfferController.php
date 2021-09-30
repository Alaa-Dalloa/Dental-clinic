<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use App\User;
class OfferController extends Controller
{
    public function create ()
 {
  $user=User::find(1);
   return view ('offers.create',compact('user'));
 }
 public function store(Request $request)
 {
    $offer = new Offer ;
    $offer->Name = $request->Name ;
    $offer->Duration=$request->Duration;
    $offer->Values=$request->Values;
    $offer->save();
    return back();
 }
public function index ()
 { 
   $offers= Offer::all();
   $user=User::find(1);
   return view ('offers.index' , compact('offers') ,compact('user'));
 }
public function destroy($id)
{
  $offer= offer::where('id' , $id)->first();
  $offer->delete();
  return back();

}
public function edit ($id)
{
   $offer= offer::find($id);
   $user=User::find(1);
   return view ('offers.edit' , compact('offer'),compact('user'));

}
public function update($id , Request $request)
{
    $offer= offer::find($id);
    $offer->Name = $request->Name ;
    $offer->Duration=$request->Duration;
    $offer->Values=$request->Values;
    $offer-> save();
    return back();
}
}

