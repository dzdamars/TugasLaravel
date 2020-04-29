<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct(){
		$this->middleware('auth')->except(['home', 'show']);
	}
	
	public function store(){
		$this->validate(request(), [
			'title' => 'required',
			'body' => 'required'
		]);
		
		Post::create{[
		
			'title' => request('title'),
			'body' => request('body'),
			'user_id' = auth()->id()
		]);
		
		return redirect('/');
	}
}
