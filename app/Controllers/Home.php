<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function show()
	{
		$data['nama'] = 'Sasya Salsabila';
		$data['npm'] = '1867051001';

		echo view('Mahasiswa/header');
		echo view('Mahasiswa/index');
		echo viee('Mahasiswa/rooter');
	}

	//--------------------------------------------------------------------

}
