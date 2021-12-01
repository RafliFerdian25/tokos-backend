<?php

namespace App\Controllers;

//use App\Models\KategoriModel;
use App\Models\BarangModel;
use App\Models\PenjualanModel;
use App\Models\RekapPenjualanModel;
use App\Models\DetailPenjualanModel;

use function PHPUnit\Framework\throwException;

class Customer extends BaseController
{
    //protected $kategoriModel;
    protected $barangModel;
    protected $penjualanModel;
    protected $RekapPenjualanModel;
    protected $DetailPenjualanModel;

    public function __construct()
    {
        //$this->kategoriModel = new KategoriModel();
        $this->barangModel = new BarangModel();
        $this->penjualanModel = new PenjualanModel();
        $this->RekapPenjualanModel = new RekapPenjualanModel();
        $this->DetailPenjualanModel = new DetailPenjualanModel();
    }

    public function index()
    {
        $query = $this->barangModel->getBarang();
        $barang = $query->getResultArray();

        $data = [
            'title' => 'Customer Dashboard | Tokos',
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

    /************************ KERANJANG ****************************** */
    public function tambah_keranjang($idbarang)
    {
        $barang = $this->barangModel->find($idbarang);
        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'      => $barang['idbarang'],
            'qty'     => 1,
            'price'   => $barang['harga'],
            'name'    => $barang['nama']
        ));
        return redirect()->to('customer/keranjang');
    }
    public function keranjang()
    {
        $cart = \Config\Services::cart();
        $keranjang = $cart->contents();
        $j = 1;

        $data = [
            'title' => 'Customer Keranjang | Tokos',
            'j' => $j,
            'cart' => $cart,
            'keranjang' => $keranjang
        ];
        return view('customer/keranjang', $data);
    }
    public function hapus_keranjang($rowid)
    {
        $cart = \Config\Services::cart();
        $cart->remove($rowid);
        return redirect()->to('/Customer/keranjang');
    }
    public function kurangi_produk_keranjang($rowid)
    {
        $cart = \Config\Services::cart();
        // $qty = $qty--;
        $cart->update(array(
            'rowid'   => $rowid,
            'qty'     => 1
        ));
        // dd($qty);
        return redirect()->to('/Customer/keranjang');
    }
    /************************** PEMBAYARAN **************************** */
    public function pembayaran()
    {
        $cart = \Config\Services::cart();
        $keranjang = $cart->contents();

        $data = [
            'title' => 'Customer Keranjang | Tokos',
            'cart' => $cart,
            'keranjang' => $keranjang
        ];
        return view('customer/isiAlamat', $data);
    }
    public function invoice()
    {
        $db = \Config\Database::connect();
        date_default_timezone_set('Asia/Jakarta');
        $cart = \Config\Services::cart();

        $image = $this->request->getFile('image');
        if ($image->getError() == 4) {
            $namaImage = 'chair-prod.png';
        } else {
            $namaImage = $image->getName();
            $image->move('assets/img/productimg');
        }

        $invoice = array(
            'idpelanggan'     => 1,
            'total_harga'     => $cart->total(),
            'total_item'      => $cart->totalItems(),
            'nama_kirim'      => $this->request->getVar('nama'),
            'noHp'            => (int) $this->request->getVar('noHp'),
            'alamat_kirim'    => $this->request->getVar('alamat'),
            'metode_pembayaran'          => $this->request->getVar('metode'),
            'bukti_bayar'     => $namaImage
        );
        $this->penjualanModel->insert($invoice);
        $idpenjualan = $db->insertID();

        foreach ($cart->contents() as $item) {
            $data = array(
                'idpenjualan'      => $idpenjualan,
                'idbarang'          => $item['id'],
                'nama_barang'       => $item['name'],
                'qty'               => $item['qty'],
                'harga'             => $item['price']
            );
            $this->DetailPenjualanModel->insert($data);
        }
        // dd($image);
        // dd($invoice);
        // dd($data);
        $cart->destroy();
        session()->setFlashdata('byr-msg-barang', 'Selamat Pesanan Anda Telah Berhasil Diproses.');
        return redirect()->to("customer/produk");
    }
}