<?php

namespace App\Controllers;

//use App\Models\KategoriModel;
use App\Models\BarangModel;
use App\Models\PenjualanModel;
use App\Models\StatusModel;
use App\Models\StatusPenjualanModel;
use App\Models\DetailPenjualanModel;
use CodeIgniter\I18n\Time;


class Edit extends BaseController
{
    //protected $kategoriModel;
    protected $barangModel;
    protected $penjualanModel;
    protected $statusModel;
    protected $statusPenjualanModel;
    protected $myTime;
    protected $DetailPenjualanModel;

    public function __construct()
    {
        $myTime = new Time('now', 'Asia/Jakarta');
        $this->barangModel = new BarangModel();
        $this->penjualanModel = new PenjualanModel();
        $this->statusModel = new StatusModel();
        $this->statusPenjualanModel = new StatusPenjualanModel();
        $this->DetailPenjualanModel = new DetailPenjualanModel();
        helper('date');
    }

    /*****************************  Barang  ******************************** */
    public function barang($idbarang)
    {
        $query = $this->barangModel->getBarangid($idbarang);
        $barang = $query->getResultArray();
        //$kategori = $this->kategoriModel->findAll();

        // dd($barang);

        $data = [
            'title' => 'Form Edit Barang | Sumber Jaya Furniture',
            'barang' => $barang
            //'kategori' => $kategori

        ];

        // dd($data);

        return view('admin/edit/form-edit-barang', $data);
    }
    public function detailhapusbarang($idbarang)
    {
        $query = $this->barangModel->getBarangid($idbarang);
        $barang = $query->getResultArray();
        // $barang = $databarang->getResultArray();
        $data = [
            'title' => 'Delete Barang | Sumber Jaya Furniture',
            'barang' => $barang
        ];

        // dd($barang);
        return view('admin/delete/form-delete-barang', $data);
    }

    public function hapusbarang($idbarang)
    {

        $this->barangModel->delete($idbarang);

        session()->setFlashdata('delete-msg-barang', 'Data Barang berhasil dihapus.');

        return redirect()->to('/admin/barang');
    }

    public function editbarang($idbarang)
    {
        $image = $this->request->getFile('image');

        if ($image->getError() == 4) { //user tidak upload file
            $namaImage = $this->request->getVar('imageLama');
        } else { //jika user upload file baru
            //mengambil nama file gambar
            $namaImage = $image->getName();
            //pindahkan letak file
            $image->move('assets/img/productimg', $namaImage);
            //hapus file lama
            unlink('assets/img/productimg/' . $this->request->getVar('imageLama'));
        }
        // date_default_timezone_set('Asia/Jakarta');
        $tgl_update = Time::now('Asia/Jakarta');
        $tgl = $tgl_update->toDateTimeString();

        // dd($tgl);
        $data = [
            'idbarang' => $idbarang,
            'nama' => $this->request->getVar('nama'),
            'stok' => $this->request->getVar('stok'),
            'harga' => $this->request->getVar('harga'),
            'keterangan' => $this->request->getVar('keterangan'),
            'file_gambar' => $namaImage,
            'tgl_update'    => $tgl
        ];



        $this->barangModel->update($idbarang, $data);

        session()->setFlashdata('edit-msg-barang', 'Data Barang berhasil diubah.');
        // dd($data);
        return redirect()->to('/admin/barang');
    }

    /*****************************  Penjualan  ******************************** */
    public function transaksi($idpenjualan)
    {
        $query = $this->penjualanModel->getDataTransaksi($idpenjualan);
        $transaksi = $query->getResultArray();
        $detail_query = $this->DetailPenjualanModel->getDataTransaksi($idpenjualan);
        $detail = $detail_query->getResultArray();
        $status = $this->statusModel->findAll();
        $statusPenjualan = $this->statusPenjualanModel->findAll();
        $data = [
            'title' => 'Form Edit Barang | Sumber Jaya Furniture',
            'transaksi' => $transaksi,
            'status' => $status,
            'statusPenjualan' => $statusPenjualan,
            'detail'            => $detail

        ];

        // dd($data);

        return view('admin/edit/form-edit-transaksi', $data);
    }

    public function edittransaksi($idpenjualan)
    {
        $data = [
            'idpenjualan' => $idpenjualan,
            'idstatus' => $this->request->getVar('update_status')
        ];
        $this->statusPenjualanModel->update($idpenjualan, $data);
        session()->setTempdata('edit-msg-transaksi', 'Status berhasil diubah.', 1);
        return redirect()->to('/admin/transaksi');
    }
}