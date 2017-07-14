<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users(){
    	$user = 'User List';
    	return view('pages.users')->with('user', $user);
    }
}
