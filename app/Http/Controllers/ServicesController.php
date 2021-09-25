<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Offer;

    class ServicesController extends Controller
		{

			
		    public function create ()
		 {
		   $offers= Offer::all();
		   return view ('services.create',compact ('offers'));
		 }
		 public function store(Request $request)
		 {
		    $service = new Service ;
		    $service->Name = $request->Name ;
		    $service->Detailes=$request->Detailes;
		    $service->Photo=$request->Photo;
		    $service->offer_id=$request->offer_id;
		    $service->save();
		    return back();
		 }
		public function index ()
		 { $services= Service::all();
		   return view ('services.index' , compact('services') );
		 }
		public function destroy($id)
		{
		  $service= service::where('id' , $id)->first();
		  $service->delete();
		  return back();

		}
		public function edit ($id)
		{
			$offers= Offer::all();
		   $service= service::find($id);
		   return view ('services.edit' , compact('services'),compact('offers'));

		}
		public function update($id , Request $request)
		{
		    $service = new Service ;
		    $service->Name = $request->Name ;
		    $service->Detailes=$request->Detailes;
		    $service->Photo=$request->Photo;
		    $service->offer_id=$request->offer_id;
		    $service-> save();
		    return back();
		}
}


