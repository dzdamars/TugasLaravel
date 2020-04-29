<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
	{ 
		$data['nama'] = 'onphpid';
		$data['usia'] = 20;
		$data['alamat'] = 'Bogor';
		
		return view('index', $data);
	}
}
