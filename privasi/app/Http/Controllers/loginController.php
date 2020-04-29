<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;

class loginController extends Controller
{
    public function login(request $req)
	{
		$email = $req->input('email');
		$password = $req->input('password');
		
		$checkLogin = DB::table('users')->where(['email'=>$email,'password'=>$password])->get();
		if(count($checkLogin)  >0)
		{
			echo "Login Berhasil";
		}
		else
		{
			echo "login failed wrong data passed";
		}
		//authenticate the user
		if(! auth()->attempt(request(['email', 'password']))){
			
			return back();
		}
		//redirect to home
		return redirect()->home();
		
		
	}
	
}
