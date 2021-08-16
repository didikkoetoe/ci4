<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data['title'] = 'Home';
		return \view('pages/index', $data);
	}

	public function about()
	{
		$data = [
			'title' => 'About',
			'alamat' => [
				[
					'tipe' => 'rumah',
					'alamat' => 'Desa Sumberejo Kecamatan Maospati',
					'provinsi' => 'Jawa Timur'
				],
				[
					'tipe' => 'kantor',
					'alamat' => 'Desa Badan Kecamatan Abc',
					'provinsi' => 'DKI Jakarta'
				]
			]
		];

		return view('pages/about', $data);
	}
}
