<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Ricode Apps'
		];
		return view('pages/landing', $data);
	}

	//--------------------------------------------------------------------

}