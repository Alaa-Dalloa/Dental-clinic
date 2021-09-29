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


<<<<<<< HEAD
=======
    class ServicesController extends Controller
		{

			
		    public function create ()
		 {

		   $offers= Offer::all();
		   return view ('services.create',compact ('offers'));

		 	$offers= Offer::all();
		   return view ('services.create' ,  compact ('offers'));

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
>>>>>>> 1a132952105a4d06eba58d9d54acb39fbabb0110

     public function destroy($id){
      //$meals = meal::where('id',$id)->first();
      //$operations = Operation::find($id);
       $service= service::where('id' , $id)->first();

      $service->delete();

      return back();
   }


      public function edit( $id){
      //$meals = meal::where('id',$id)->first();
      $services = service::find($id);
      $offers= Offer::all();
      return view('services.edit',['service'=>$services,'offers'=>$offers]);
     
   }


  
      public function update($id,Request $request){

    
       $service = Service::find($id);
       $service->name        = $request->name;
       $service->detailes       = $request->detailes;
       $service->photo = $request->photo;
       $service->offer_id = $request->offer_id;
       $service->save();
         return redirect('services');
   }


}
