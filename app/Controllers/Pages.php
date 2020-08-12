<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'CodeIgniter 4 | by NuPipel'
		];
		return view('Pages/index', $data);
	}

	public function about(){
		$data = [
			'title' => 'About Me'
		];
		return view('Pages/about', $data);
	}

	public function contact(){
		$data = [
			'title' => 'Contact'
		];
		return view('Pages/contact', $data);
	}

	//--------------------------------------------------------------------

}
