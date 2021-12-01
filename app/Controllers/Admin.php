<?php

namespace App\Controllers;

//use App\Models\KategoriModel;
use App\Models\BarangModel;
use App\Models\PenjualanModel;
use App\Models\RekapPenjualanModel;

use function PHPUnit\Framework\throwException;

class Admin extends BaseController
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
    // *********************** Penjualan **********************************/
    public function index()
    {


        // $index = $this->RekapPenjualanModel->findAll();
        $total_terjual = $this->penjualanModel->getTotalBarangJual();
        $total = $total_terjual->getResultArray();

        // total pembeli
        $total_pembelian = $this->penjualanModel->getPenjualan();
        $pembeli = $total_pembelian->getResultArray();

        //total pendapatan
        $total_pendapatan = $this->penjualanModel->getTotalPendapatan();
        $pendapatan = $total_pendapatan->getResultArray();
        //terlaris
        $barangTerlaris = $this->penjualanModel->getTerlaris();
        $terlaris = $barangTerlaris->getResultArray();

        //bulanan
        $bulanan = $this->penjualanModel->getBulanan();
        $bulan = $bulanan->getResultArray();

        $data = [
            'title' => 'Admin Dashboard | Sumber Jaya Furniture',
            'barangjual' => $total,
            'pembeli' => $pembeli,
            'pendapatan' => $pendapatan,
            'terlaris' => $terlaris,
            'bulan' => $bulan
        ];
        // echo '<pre>';
        // print_r($total_terjual);
        // dd($total);
        return view('admin/index', $data);
    }
    public function transaksi()
    {
        $query = $this->penjualanModel->getTransaksi();
        $transaksi = $query->getResultArray();

        $data = [
            'title' => 'Data Transaksi | Sumber Jaya Furniture',
            'transaksi' => $transaksi
        ];

        // dd($data);
        return view('admin/data_transaksi', $data);
    }

    public function laporan($bln)
    {
        $query = $this->penjualanModel->getRekap($bln);
        $rekap = $query->getResultArray();
        $i = 1;
        $data = [
            'title' => 'Detail Barang | Sumber Jaya Furniture',
            'i' => $i,
            'rekap' => $rekap
        ];
        // dd($data);
        return view('admin/laporan-bulanan', $data);
    }

    /*****************************  Barang  ******************************** */
    public function barang()
    {
        $query = $this->barangModel->getBarang();
        //$kategori = $this->kategoriModel->findAll();
        $barang = $query->getResultArray();


        $data = [
            'title' => 'Data Barang | Sumber Jaya Furniture',
            //'kategori' => $kategori,
            'barang' => $barang
        ];

        //jika barang tidak ada di table
        if (empty($data['barang'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data barang tidak ditemukan');
        }
        helper('form');
        return view('admin/data_barang', $data);
    }
    public function search()
    {
        $request = \Config\Services::request();
        $keyword = $request->getPost('keyword');
        $query = $this->barangModel->get_product_keyword($keyword);
        $barang = $query->getResultArray();
        $data = [
            'title' => 'Data Barang | Sumber Jaya Furniture',
            'barang' => $barang
        ];
        helper('form');
        // dd($barang);
        return view('admin/search', $data);
    }


    public function detail($idbarang)
    {
        $query = $this->barangModel->getBarangid($idbarang);
        $barang = $query->getResultArray();
        // $kategori = $this->kategoriModel->findAll();

        // dd($barang);

        $data = [
            'title' => 'Form Edit Barang | Sumber Jaya Furniture',
            'barang' => $barang
            // 'kategori' => $kategori

        ];

        // dd($data);

        return view('admin/detail-barang', $data);
    }
}