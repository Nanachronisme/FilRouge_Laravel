<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Redirects all the webapages
 */
class PagesController extends Controller
{
     //returns the homepage view
    public function index() 
    {
        //TODO link to the database select All Teachers
        //another method
        return view('home.index');
    }

    public function addTeacher()
    {
        return view('page.addTeacher');
    }


    public function detailTeacher()
    {
        return view('page.detailTeacher');
    }


    public function updateTeacher()
    {
        return view('page.updateTeacher');
    }

}
