<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SessionController extends Controller
{
    public function __construct()
	{
		$this->middleware('guest', ['except' => 'destroy']);
	}
	
	public function create(){
		return view('sessions.create');
	}
	
	public function store(){
		//authenticate the user
		if(! auth()->attempt(request(['email', 'password']))){
			
			return back()->withErrors([
				'message' => 'Tolong Cek username dan password anda kembali.'	
			]);
	}
		
		//redirect to the home
		return redirect()->home();
	}
	
	public function destroy(){
		auth()->logout();
		return redirect()->home();
	}
}
