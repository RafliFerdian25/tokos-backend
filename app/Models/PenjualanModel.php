<?php

namespace App\Models;

use CodeIgniter\Model;
use PhpParser\Node\Expr\FuncCall;

class PenjualanModel extends Model
{
    protected $table      = 'penjualan';
    protected $primaryKey = 'idpenjualan';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['idpenjualan','idpelanggan','tgl_penjualan','total_harga','total_item','total_berat','ongkir','jenis_pengiriman','nama_kirim','alamat_kirim','idkota_kirim'];

    public function getTransaksi()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT penjualan.idpenjualan AS 'idpenjualan', penjualan.tgl_penjualan AS 'tgl_penjualan', barang.nama AS 'nama_barang', pelanggan.nama AS 'nama_pembeli', penjualan.total_item AS jumlah, penjualan.total_harga AS 'harga_total', status.nama AS 'status' FROM (((((penjualan JOIN detail_penjualan ON penjualan.idpenjualan = detail_penjualan.idpenjualan) JOIN barang ON detail_penjualan.idbarang = barang.idbarang) JOIN pelanggan ON penjualan.idpelanggan = pelanggan.idpelanggan) JOIN status_penjualan ON penjualan.idpenjualan = status_penjualan.idpenjualan) JOIN status ON status_penjualan.idstatus = status.idstatus) ORDER BY penjualan.idpenjualan;");

        return $query;
    }

    public function getDataTransaksi($idpenjualan)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT penjualan.idpenjualan AS idpenjualan, penjualan.tgl_penjualan AS tgl_penjualan, barang.nama AS nama_barang, pelanggan.nama AS nama_pembeli, penjualan.total_item AS jumlah, penjualan.total_harga AS harga_total, status.nama AS 'status' FROM (((((penjualan JOIN detail_penjualan ON penjualan.idpenjualan = detail_penjualan.idpenjualan) JOIN barang ON detail_penjualan.idbarang = barang.idbarang) JOIN pelanggan ON penjualan.idpelanggan = pelanggan.idpelanggan) JOIN status_penjualan ON penjualan.idpenjualan = status_penjualan.idpenjualan) JOIN status ON status_penjualan.idstatus = status.idstatus) WHERE penjualan.idpenjualan = '".$idpenjualan."'");
        // $transaksi = $this->$query->where(['idpenjualan' => $idpenjualan])->first();
        return $query;
    }
}