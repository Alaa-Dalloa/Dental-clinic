<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
    class ServicesController extends Controller
		{
		    public function create ()
		 {
		   return view ('services.create');
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
		   $service= service::find($id);
		   return view ('services.edit' , compact('services'));

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


