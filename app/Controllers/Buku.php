<?php

namespace App\Controllers;

use Codeigniter\Model\BukuModel;

class Buku extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Buku'
        ];

        $bukuModel = new BukuModel();
        $buku = $bukuModel->findAll();

        \dd($buku);

        return \view('buku/index', $data);
    }
}
