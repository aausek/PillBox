<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function scripts(){
    	return view('pages.scripts');
    }
}
