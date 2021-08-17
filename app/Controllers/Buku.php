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
        // $buku = $this->bukuModel->findAll();

        $data = [
            'title' => 'Buku',
            'buku' => $this->bukuModel->getBuku()
        ];



        return \view('buku/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Buku',
            'buku' => $this->bukuModel->getBuku($slug)
        ];

        // Jika buku kosong, tampilkan pesan kesalahan
        if (empty($data['buku'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak Ada');
        }

        return \view('buku/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Komik'
        ];

        return \view('buku/create', $data);
    }

    public function save()
    {
        $slug = \url_title($this->request->getVar('judul'), '-', true);
        $this->bukuModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan.');

        return \redirect()->to('/buku');
    }
}
