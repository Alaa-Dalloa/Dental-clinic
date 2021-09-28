<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function index()
    {
      return view ('front.index');

    }

     public function about()
    {
      return view ('about');

    }
}
