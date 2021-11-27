<?php

namespace App\Controllers;

//use App\Models\KategoriModel;
use App\Models\BarangModel;
use App\Models\PenjualanModel;
use App\Models\RekapPenjualanModel;

use function PHPUnit\Framework\throwException;

class Customer extends BaseController
{
    //protected $kategoriModel;
    protected $barangModel;
    protected $penjualanModel;
    protected $RekapPenjualanModel;

    public function __construct()
    {
        //$this->kategoriModel = new KategoriModel();
        $this->barangModel = new BarangModel();
        $this->penjualanModel = new PenjualanModel();
        $this->RekapPenjualanModel = new RekapPenjualanModel();
    }

    public function index()
    {
        $query = $this->barangModel->getBarang();
        //$kategori = $this->kategoriModel->findAll();
        $barang = $query->getResultArray();


        $data = [
            'title' => 'Customer Dashboard | Tokos',
            //'kategori' => $kategori,
            'barang' => $barang
        ];

        //jika barang tidak ada di table
        if (empty($data['barang'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data barang tidak ditemukan');
        }
        helper('form');
        return view('customer/index', $data);
    }
    public function produk()
    {
        $query = $this->barangModel->getBarang();
        $barang = $query->getResultArray();


        $data = [
            'title' => 'Customer Produk | Tokos',
            'barang' => $barang
        ];

        //jika barang tidak ada di table
        if (empty($data['barang'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data barang tidak ditemukan');
        }
        helper('form');
        return view('customer/produk', $data);
    }
    public function search()
    {
        $request = \Config\Services::request();
        $keyword = $request->getPost('keyword');
        $query = $this->barangModel->get_product_keyword($keyword);
        $barang = $query->getResultArray();
        $data = [
            'title' => 'Customer Produk | Tokos',
            'barang' => $barang
        ];
        helper('form');
        // dd($barang);
        return view('customer/produk', $data);
    }
}