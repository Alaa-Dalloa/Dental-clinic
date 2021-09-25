<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Offer;
<<<<<<< HEAD

=======
>>>>>>> 88223527167b154b5c2dd8243df0b56838e54342
    class ServicesController extends Controller
		{

			
		    public function create ()
		 {
<<<<<<< HEAD
		   $offers= Offer::all();
		   return view ('services.create',compact ('offers'));
=======
		 	$offers= Offer::all();
		   return view ('services.create' ,  compact ('offers'));
>>>>>>> 88223527167b154b5c2dd8243df0b56838e54342
		 }
		 public function store(Request $request)
		 {
		    $service = new Service ;
		    $service->name = $request->name ;
		    $service->detailes=$request->detailes;
		    $service->photo=$request->photo;
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
<<<<<<< HEAD
		{
			$offers= Offer::all();
		   $service= service::find($id);
		   return view ('services.edit' , compact('services'),compact('offers'));
=======
		{  
		   $offers= Offer::find($id);
		   $service= service::find($id);
		   return view ('services.edit' , compact('service') , compact('offers'));
>>>>>>> 88223527167b154b5c2dd8243df0b56838e54342

		}
		public function update($id , Request $request)
		{
		    $service = new Service ;
		    $service->name = $request->name ;
		    $service->detailes=$request->detailes;
		    $service->photo=$request->photo;
		    $service->offer_id=$request->offer_id;
		    $service-> save();
		    return back();
		}
}


