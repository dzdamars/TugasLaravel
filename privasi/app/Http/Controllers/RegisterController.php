<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class RegisterController extends Controller
{
   public function create(){
		return view('registration.create');
	}
	public function store(){
		//Validate the form
		$this->validate(request(),[
			'name' => 'required',
			'email' => 'required',
			'password' => 'required|confirmed'
		]);
		
		//create and save the user
		$user = User::create([
			'name' => request('name'),
			'email' => request('email'),
			'password' => bcrypt(request('password'))
		]);
		
		//sign them in
		auth()->login($user);
		
		//redirect to the home
		return redirect()->home();
	}
}
