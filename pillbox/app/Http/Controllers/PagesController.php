<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Admin;

class PagesController extends Controller
{
    public function scripts(){
    	return view('pages.scripts');
    }

    public function newrxs()
    {
    	//Display all new rxs entered in admin view
    	//Return pages blade to display recently added rxs
	    	// $newrxs = Admin::all();
	     //    return view('pages.newrxs')->with('newrxs', $newrxs);
    }
}
