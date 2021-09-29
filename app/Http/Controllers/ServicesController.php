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
