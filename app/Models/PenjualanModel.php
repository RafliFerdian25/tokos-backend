<?php

namespace App\Models;

use CodeIgniter\Model;
use PhpParser\Node\Expr\FuncCall;

class PenjualanModel extends Model
{
    protected $table      = 'penjualan';
    protected $primaryKey = 'idpenjualan';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['idpenjualan', 'idpelanggan', 'tgl_penjualan', 'total_harga', 'total_item', 'nama_kirim', 'alamat_kirim', 'noHp', 'metode_pembayaran', 'bukti_bayar'];

    public function getTransaksi()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT penjualan.idpenjualan AS 'idpenjualan', penjualan.tgl_penjualan AS 'tgl_penjualan', pelanggan.nama AS 'nama_pembeli', penjualan.total_item AS jumlah, penjualan.total_harga AS 'harga_total', status.nama AS 'status' FROM (((penjualan  JOIN pelanggan ON penjualan.idpelanggan = pelanggan.idpelanggan) JOIN status_penjualan ON penjualan.idpenjualan = status_penjualan.idpenjualan) JOIN status ON status_penjualan.idstatus = status.idstatus) ORDER BY penjualan.idpenjualan;");

        return $query;
    }

    public function getDataTransaksi($idpenjualan)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT penjualan.idpenjualan AS idpenjualan, penjualan.tgl_penjualan AS tgl_penjualan, barang.nama AS nama_barang, pelanggan.nama AS nama_pembeli, penjualan.total_item AS jumlah, penjualan.total_harga AS harga_total, status.nama AS 'status' FROM (((((penjualan JOIN detail_penjualan ON penjualan.idpenjualan = detail_penjualan.idpenjualan) JOIN barang ON detail_penjualan.idbarang = barang.idbarang) JOIN pelanggan ON penjualan.idpelanggan = pelanggan.idpelanggan) JOIN status_penjualan ON penjualan.idpenjualan = status_penjualan.idpenjualan) JOIN status ON status_penjualan.idstatus = status.idstatus) WHERE penjualan.idpenjualan = '" . $idpenjualan . "'");
        // $transaksi = $this->$query->where(['idpenjualan' => $idpenjualan])->first();
        return $query;
    }

    //******************** Laporan penjualan ************************ */ 
    public function getRekap($bln)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT detail_penjualan.nama_barang AS namaBarang, MONTH(penjualan.tgl_penjualan) AS bulan, SUM(detail_penjualan.qty) AS jumlah, detail_penjualan.harga AS hargaSatuan, SUM(penjualan.total_harga) AS totalPenjualan
        FROM penjualan JOIN detail_penjualan ON penjualan.idpenjualan = detail_penjualan.idpenjualan
        WHERE MONTH(penjualan.tgl_penjualan)  = " . $bln . "
        GROUP BY detail_penjualan.nama_barang");

        return $query;
    }

    public function getTotalBarangJual()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('penjualan');
        $builder->selectSum('total_item');
        $query = $builder->get();

        return $query;
    }

    public function getPenjualan()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('penjualan');
        $builder->selectCount('idpenjualan');
        $query = $builder->get();

        return $query;
    }

    public function getTotalPendapatan()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('penjualan');
        $builder->selectSum('total_harga');
        $query = $builder->get();

        return $query;
    }
    public function getTerlaris()
    {
        $db      = \Config\Database::connect();
        $query = $db->query("SELECT detail_penjualan.nama_barang AS namaBarang, SUM(detail_penjualan.qty) AS total_terjual
        From detail_penjualan JOIN barang ON detail_penjualan.idbarang = barang.idbarang
        GROUP BY detail_penjualan.idbarang
        ORDER BY total_terjual DESC
        LIMIT 3
        ");

        return $query;
    }
    public function getBulanan()
    {
        $db      = \Config\Database::connect();
        $query = $db->query("SELECT MONTH(penjualan.tgl_penjualan) AS bulan, SUM(penjualan.total_item) AS jumlah, SUM(penjualan.total_harga) AS total_penjualan
        FROM penjualan
        GROUP BY MONTH(tgl_penjualan)");

        return $query;
    }
}