<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //returns the homepage view
    public function index() 
    {
        //another method
        return view('home.index');
    }

}
