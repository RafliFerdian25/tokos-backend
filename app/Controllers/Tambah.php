<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\KategoriModel;

class Tambah extends BaseController
{
    protected $barangModel;
    protected $kategoriModel;

    public function __construct()
    {
        $this->barangModel = new BarangModel();
        $this->kategoriModel = new KategoriModel();
    }

    public function tambah()
    {
        $kategori = $this->kategoriModel->findAll();
        $data = [
            'title' => 'Form Tambah Barang | Sumber Jaya Furniture',
            'kategori' => $kategori
        ];

        return view('admin/form-add-barang', $data);
    }
    function tambahBarang()
	{
		// helper(['form','url']);

		// $error = $this->validate([
		// 	'isbn' => 'required|min_length[13]|max_length[13]',
		// 	'author' => 'required',
		// 	'title' => 'required',
		// 	'price' => 'required|numeric'
		// ]);

		// if(!$error)
		// {
		// 	echo view('add_book', [
		// 		'error' => $this->validator
		// 	]);
		// }
		// else
		// {
        // if (!$this->validate([
        //     'image' => [ 'rules' => 'uploaded[image]|max_size[image,2048]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
        //     'errors' =>  [
        //         'Uploaded' => 'Pilih gambar',
        //         'max_size' => 'Ukuran gambar terlalu besar',
        //         'is_image' => 'Yang dipilih bukan gambar',
        //         'mime_in'  => 'Yang dipilih bukan gambar'
        //     ]
        //     ]
        // ])) 
        // {
        //     $validation = \Config\Services::validation();
        //     return redirect()->to('/tambah/tambah')->withInput();
        // }

            $image = $this->request->getFile('image');
            if($image->getError() == 4){
                $namaImage = 'chair-prod.png';
            } else {
                $namaImage = $image->getName();
                $image->move('assets/img/productimg');
                
            }
            

            // dd($image);
            // $tgl_insert = date('m/d/y');
			$this->barangModel->save([
				'nama' => $this->request->getVar('nama'),
				'idkategori' => $this->request->getVar('kategori'),
                'stok' => $this->request->getVar('stok'),
				'harga' => $this->request->getVar('harga'),
                'berat' => $this->request->getVar('berat'),
                'keterangan' => $this->request->getVar('keterangan'),
                'tgl_insert' => $this->request->getVar('tgl_insert'),
                'file_gambar' => $namaImage

			]);
            
			$session = \Config\Services::session();
			// $session->setFlashdata('success', 'Book Added');

            session()->setFlashdata('add-msg-barang', 'Data Barang berhasil ditambahkan.');
            // dd($data);
			return redirect()->to('/admin/barang');
		// }
	}

    
}
