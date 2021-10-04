<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=User::find(1);
        return view('home',compact('user'));
    }



    public function control()
    { 
        $user=User::find(1);
     if (Auth::user()->role == 3) 
     {
        return redirect('/home',compact('user'));
     }
     $users= DB::table('users')->get();
     return view('control' , compact('users'),compact('user'));
    }
   public function updateRole( Request $request , User $user)
    { 
        $user=User::find(1);
        $user->update($request->all());
        return redirect('control',compact('user'));
       
    }



}
