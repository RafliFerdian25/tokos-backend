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
    protected $UsersModel;

    public function __construct()
    {
        //$this->kategoriModel = new KategoriModel();
        $this->barangModel = new BarangModel();
        $this->penjualanModel = new PenjualanModel();
        $this->RekapPenjualanModel = new RekapPenjualanModel();
        $this->DetailPenjualanModel = new DetailPenjualanModel();
        $this->db = \Config\Database::connect();
        $UsersModel = new \Myth\Auth\Models\UserModel();
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
    /*****************************  Barang  ******************************** */
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
        // foreach ($keranjang as $data) {
        //     $po = $data['rowid'];
        // }
        // dd($po);
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
        $row = (string)$rowid;
        $cart_row = $cart->contents($rowid);
        $qty_row = $cart_row[$row]['qty'];
        //dd($cart);
        if ($qty_row > 1) {
            $cart->update(array(
                'rowid'   => $rowid,
                'qty'     => $qty_row - 1
            ));
        } else {
            $cart->remove($rowid);
        }
        return redirect()->to('/Customer/keranjang');
    }
    public function edit_keranjang($rowid = null,$qty = null)
    {
        $cart = \Config\Services::cart();
        $row = (string)$rowid;
        $cart_row = $cart->contents($rowid);
        $qty_row = $cart_row[$row]['qty'];
        $qty_new = $this->request->getVar('qty_keranjang');
        //dd($rowid);
        if ($qty_row >= 1) {
                $cart->update(array(
                    'rowid'   => $rowid,
                    'qty'     => $qty_new
                ));
        } else {
            $cart->remove($rowid);
        }
        //dd($qty_row);
        return redirect()->to('/customer/keranjang');
    }
    /************************** penjualan **************************** */
    public function pembayaran()
    {
        $cart = \Config\Services::cart();
        $keranjang = $cart->contents();

        // $this->builder = $this->db->table('users');
        // $pelanggan = $this->builder->get();
        $data = [
            'title' => 'Customer Keranjang | Tokos',
            'cart' => $cart,
            'keranjang' => $keranjang,
            'pelanggan' => user()
        ];
        // dd($pelanggan);
        return view('customer/isiAlamat', $data);
    }
    public function invoice()
    {
        $db = \Config\Database::connect();
        date_default_timezone_set('Asia/Jakarta');
        $cart = \Config\Services::cart();

        $image = $this->request->getFile('image');
        if ($image->getError() == 4) {
            $namaImage = '';
        } else {
            $namaImage = $image->getName();
            $image->move('assets/img/bukti');
        }

        $invoice = array(
            'idpelanggan'     => user_id(),
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
            $query = $this->barangModel->getBarangid($item['id']);
            $barang = $query->getResultArray();
            // dd($barang);
            $setbarang = array(
                'idbarang'  => $barang[0]['idbarang'],
                'stok'      => $barang[0]['stok'] - $item['qty']
            );
            $this->barangModel->update($barang[0]['idbarang'], $setbarang);
        }
        // dd($image);
        // dd($invoice);
        // dd($data);
        // dd($setbarang);
        $cart->destroy();
        session()->setFlashdata('byr-msg-barang', 'Selamat Pesanan Anda Telah Berhasil Diproses.');
        return redirect()->to("customer/produk");
    }

    /***************************** PROFILE *************************************/
    public function profile()
    {
        $data = [
            'title' => 'Customer Profile | Tokos',
            'pelanggan' => user()
        ];
        return view('customer/profile', $data);
    }
    public function detail_ubah_profile()
    {
        $data = [
            'title' => 'Customer Profile | Tokos',
            'pelanggan' => user()
        ];
        return view('customer/ubahdata', $data);
    }
    public function ubah_profile($id)
    {
        $image = $this->request->getFile('image');
        // dd($namaImage);
        if ($image->getError() == 4) { //user tidak upload file
            $namaImage = $this->request->getVar('imageLama');
        } else { //jika user upload file baru
            //mengambil nama file gambar
            $namaImage = $image->getRandomName();
            //pindahkan letak file
            $image->move('assets/img', $namaImage);
            //hapus file lama
            if ($this->request->getVar('imageLama') != "default.svg") {
                unlink('assets/img/' . $this->request->getVar('imageLama'));
            }
        }
        $profile = array(
            'fullname'     => $this->request->getVar('nama'),
            'alamat'       => $this->request->getVar('alamat'),
            'noHp'         => $this->request->getVar('noHp'),
            'user_image'   => $namaImage
        );
        $builder = $this->db->table('users');
        $builder->update($profile, "id = $id");
        // dd($profile);

        return redirect()->to('customer/profile');
    }

    public function riwayat_transaksi($idpelanggan)
    {
        $query = $this->penjualanModel->getDataTransaksiCustomer($idpelanggan);
        $transaksi = $query->getResultArray();

        $data = [
            'title' => 'Customer Profile | Tokos',
            'pelanggan' => user(),
            'transaksi' => $transaksi
        ];
        return view('customer/transaksi', $data);
    }
    public function detail_riwayat_transaksi($idpenjualan)
    {
        $query = $this->DetailPenjualanModel->getDataTransaksi($idpenjualan);
        $transaksi = $query->getResultArray();
        $i = 1;
        $data = [
            'title' => 'Customer Profile | Tokos',
            'pelanggan' => user(),
            'transaksi' => $transaksi,
            'i'         => $i
        ];
        return view('customer/detail_transaksi', $data);
    }
}