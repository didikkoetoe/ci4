<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    public function index()
    {
        $buku = $this->bukuModel->findAll();

        $data = [
            'title' => 'Buku',
            'buku' => $buku
        ];



        return \view('buku/index', $data);
    }
}
