<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

use App\Specialization;
<<<<<<< HEAD
use App\User;
=======


>>>>>>> 344ad947af4a9641d24a0890473f8b4bdc53eae7
class DoctorController extends Controller
{



   public function create()
   {
       $specializations= Specialization::all();
<<<<<<< HEAD
       $user=User::find(1);
       return view ('doctors.create' , compact ('specializations'),compact('user'));
 }
 public function store(Request $request)
 {
    $doctor = new Doctor ;
    $doctor->name = $request->name ;
    $doctor->phone=$request->phone;
    $doctor->email=$request->email;
    $doctor->specialization_id=$request->specialization_id;
    $doctor->save();
    return back();
 }
public function index ()
 {
    $doctors= Doctor::all();
    $user=User::find(1);
   return view ('doctors.index' , compact('doctors'),compact('user') );
 }
public function destroy($id)
{
  $doctor= doctor::where('id' , $id)->first();
  $doctor->delete();
  return back();

}
public function edit ($id)
{  $specializations= Specialization::all();
   $doctor= doctor::find($id);
   $user=User::find(1);
   return view ('doctors.edit' ,['doctor'=>$doctor,'specializations'=>$specializations,'user'=>$user]);
=======
      return view('doctors.create',['specializations'=>$specializations]);
      // return view('operations.create',compact ('patients'),compact ('specializations'),compact ('doctors'));

>>>>>>> 344ad947af4a9641d24a0890473f8b4bdc53eae7

   }
      public function edit ($id)
      {  $specializations= Specialization::all();
         $doctor= doctor::find($id);
         return view ('doctors.edit' , compact('doctor') , compact ('specializations'));
      }
    public function store(Request $request)
    {
       $doctor = new Doctor;
       $doctor->name        = $request->name;
       $doctor->phone       = $request->phone;
       $doctor->email = $request->email;
       $doctor->specialization_id = $request->specialization_id;

       $doctor->save();
         return back();
   }

    public function index()
    {

      $doctors= doctor::all();
      return view('doctors.index' , compact('doctors'));
   }



     public function destroy($id){
      //$meals = meal::where('id',$id)->first();
      //$operations = Operation::find($id);
       $doctor= doctor::where('id' , $id)->first();

      $doctor->delete();

      return back();
   }

      public function update($id,Request $request){

    
       $doctor = Doctor::find($id);
       $doctor->name        = $request->name;
       $doctor->phone       = $request->phone;
       $doctor->email = $request->email;
       $doctor->specialization_id = $request->specialization_id;
       $doctor->save();
         return redirect('doctors');
   }


}
