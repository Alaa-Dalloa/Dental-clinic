<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
    	return View('front.index');
    }


         public function about()
    {
      return view ('front.about');

    }


         public function blog()
    {
      return view ('front.blog');

    }

         public function contact()
    {
      return view ('front.contact');

    }


         public function doctors()
    {
      return view ('front.doctors');

    }


         public function services()
    {
      return view ('front.services');

    }
}
