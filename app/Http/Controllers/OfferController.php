<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
class OfferController extends Controller
{
    public function create ()
 {
   return view ('offers.create');
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
 { $offers= Offer::all();
   return view ('offers.index' , compact('offers') );
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
   return view ('offers.edit' , compact('offer'));

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

