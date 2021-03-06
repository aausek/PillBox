<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{
    public function users(){
    	$email = Auth::user()->email;
    	return view('pages.users')->with('email', $email);
    }

    function userCanEdit(User $user){
    	return $user->isAdmin() || $this->user_id == $user->id;
	}
}
