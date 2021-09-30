<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Offer;


class ServicesController extends Controller
{



   public function create()
   {
       $offers= Offer::all();
      return view('services.create',['offers'=>$offers]);
      // return view('operations.create',compact ('patients'),compact ('specializations'),compact ('doctors'));

   }

    public function store(Request $request)
    {
       $service = new Service;
       $service->name        = $request->name;
       $service->detailes       = $request->detailes;
       $service->photo = $request->photo;
       $service->offer_id = $request->offer_id;

       $service->save();
         return back();
   }

    public function index()
    {

      $services= service::all();
      return view('services.index' , compact('services'));
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
		   return view ('services.edit' , compact('service'),compact('offers'));

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

