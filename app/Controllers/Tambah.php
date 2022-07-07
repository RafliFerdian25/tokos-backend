<?php

namespace App\Controllers;

use App\Models\BarangModel;
use Config\Validation;

class Tambah extends BaseController
{
    protected $barangModel;

    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }

    /*****************************  Barang  ******************************** */

    public function tambah()
    {
        //$kategori = $this->kategoriModel->findAll();
        session();
        $data = [
            'title' => 'Form Tambah Barang | Sumber Jaya Furniture',
            'validation' => \Config\Services::validation()
            //'kategori' => $kategori
        ];

        return view('admin/form-add-barang', $data);
    }
    function tambahBarang()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} barang harus diisi'],
            ],
            'stok' => [
                'rules' => 'required',
                'errors' => ['required' => "{field} barang harus diisi"],
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => ['required' => "{field} barang harus diisi"],
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => ['required' => "{field} barang harus diisi"],
            ],
            'image' => [
                'rules' => 'required',
                'errors' => ['required' => "{field} barang harus diisi"],
            ]
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('/tambah/tambah')->withInput('validation', $validation);
        }


        $image = $this->request->getFile('image');
        if ($image->getError() == 4) {
            $namaImage = 'chair-prod.png';
        } else {
            $namaImage = $image->getName();
            $image->move('assets/img/productimg');
        }


        // dd($image);
        date_default_timezone_set('Asia/Jakarta');
        $tgl_insert = date("Y-m-d h:i:sa");
        $this->barangModel->save([
            'nama' => $this->request->getVar('nama'),
            'stok' => $this->request->getVar('stok'),
            'harga' => $this->request->getVar('harga'),
            'keterangan' => $this->request->getVar('keterangan'),
            'tgl_insert' => $tgl_insert,
            'file_gambar' => $namaImage

        ]);

        $session = \Config\Services::session();

        session()->setFlashdata('add-msg-barang', 'Data Barang berhasil ditambahkan.');
        // dd($data);
        return redirect()->to('/admin/barang');
    }
}