<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\User;
use App\Offer;
use App\Notifications\InvoicePaid;

use Illuminate\Support\Facades\Notification;


    class ServicesController extends Controller
		{

			
		    public function create ()
		 {

		   $offers= Offer::all();
		   $user=User::find(1);
		   return view ('services.create',compact('user'),compact ('offers'));


		 }
		 public function store(Request $request)
		 {

			$user=User::all();
		    $service = new Service ;
		    $service->name = $request->name ;
		    $service->detailes=$request->detailes;
		    $service->photo=$request->photo;
		    $service->offer_id=$request->offer_id;
		    $service->save();
			Notification::send($user, new InvoicePaid($request->name));
		    return back();
		 }
		public function index ()
		 { 
			 $services= Service::all();
			 $user=User::find(1);
		   return view ('services.index' ,compact('user'), compact('services') );
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
		   $user=User::find(1);
		   return view ('services.edit' ,['user'=>$user,'offers'=>$offers,'service'=>$service]);

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


