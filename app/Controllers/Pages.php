<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data['title'] = 'Home';
		echo \view('layout/header', $data);
		echo \view('pages/index');
		echo \view('layout/footer');
	}

	public function about()
	{
		$data['didik'] = [
			'nama' => 'Didik Prabowo',
			'umur' => 19,
			'alamat' => 'Desa Sumberejo, Kecamatan Maospati'
		];
		$data['title'] = 'About';
		echo \view('layout/header', $data);
		echo \view('pages/about', $data);
		echo \view('layout/footer');
	}
}
