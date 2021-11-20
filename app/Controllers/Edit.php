<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\BarangModel;
use App\Models\PenjualanModel;
use App\Models\StatusModel;
use App\Models\StatusPenjualanModel;

class Edit extends BaseController
{
    protected $kategoriModel;
    protected $barangModel;
    protected $penjualanModel;
    protected $statusModel;
    protected $statusPenjualanModel;

    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->barangModel = new BarangModel();
        $this->penjualanModel = new PenjualanModel();
        $this->statusModel = new StatusModel();
        $this->statusPenjualanModel = new StatusPenjualanModel();
    }

    public function barang($idbarang)
    {
        $query = $this->barangModel->getBarangid($idbarang);
        $barang = $query->getResultArray();
        $kategori = $this->kategoriModel->findAll();

        // dd($barang);

        $data = [
            'title' => 'Form Edit Barang | Sumber Jaya Furniture',
            'barang' => $barang,
            'kategori' => $kategori
            
        ];

        // dd($data);

        return view('admin/edit/form-edit-barang', $data);
    }

    

    public function kategori($idkategori)
    {
        $datakategori = $this->kategoriModel->getKategori($idkategori);
        $data = [
            'title' => 'Form Edit Kategori | Sumber Jaya Furniture',
            'data' => $datakategori
        ];

        return view('admin/edit/form-edit-kategori', $data);
    }

    public function detailhapuskategori($idkategori)
    {
        $datakategori = $this->kategoriModel->getKategori($idkategori);
        $data = [
            'title' => 'Hapus Kategori | Sumber Jaya Furniture',
            'data' => $datakategori
        ];

        return view('admin/delete/form-delete-kategori', $data);
    }

    
    public function hapuskategori($idkategori)
    {
        $this->kategoriModel->delete($idkategori);

        session()->setFlashdata('delete-msg-kategori', 'Data Kategori berhasil dihapus.');

        return redirect()->to('/admin/barang');
    }

    public function editkategori($idkategori)
    {
        $data = [
            'idkategori' => $idkategori,
            'nama' => $this->request->getVar('namaKategori')
        ];
        $this->kategoriModel->update($idkategori, $data);

        session()->setFlashdata('edit-msg-kategori', 'Data Kategori berhasil diubah.');

        return redirect()->to('/admin/barang');
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
            if($image->getError() == 4){ //user tidak upload file
                $namaImage = $this->request->getVar('imageLama');
            } else { //jika user upload file baru
                //mengambil nama file gambar
                $namaImage = $image->getName();
                //pindahkan letak file
                $image->move('assets/img/productimg',$namaImage);
                //hapus file lama
                unlink('assets/img/productimg/'. $this->request->getVar('imageLama'));
                
            }
        $data = [
            'idbarang' => $idbarang,
            'nama' => $this->request->getVar('nama'),
            'idkategori' => $this->request->getVar('idkategori'),
            'stok' => $this->request->getVar('stok'),
            'harga' => $this->request->getVar('harga'),
            'berat' => $this->request->getVar('berat'),
            'keterangan' => $this->request->getVar('keterangan'),
            'file_gambar' => $namaImage
        ];
        
        

        $this->barangModel->update($idbarang, $data);

        session()->setFlashdata('edit-msg-barang', 'Data Barang berhasil diubah.');
        // dd($data);
        return redirect()->to('/admin/barang');
    }

    public function transaksi($idpenjualan)
    {
        $query = $this->penjualanModel->getDataTransaksi($idpenjualan);
        $transaksi = $query->getResultArray();
        $status = $this->statusModel->findAll();
        $statusPenjualan = $this->statusPenjualanModel->findAll();
        

        $data = [
            'title' => 'Form Edit Barang | Sumber Jaya Furniture',
            'transaksi' => $transaksi,
            'status' => $status,
            'statusPenjualan' => $statusPenjualan
            
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
        
        // dd($data);

        $this->statusPenjualanModel->update($idpenjualan, $data);

        session()->setTempdata('edit-msg-transaksi', 'Status berhasil diubah.', 1);

        // dd($data);
        return redirect()->to('/admin/transaksi');
    }
}
