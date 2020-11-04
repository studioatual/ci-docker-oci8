<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home.html', ['title' => 'Welcome']);
		// return view('welcome_message');
	}

	//--------------------------------------------------------------------

}
