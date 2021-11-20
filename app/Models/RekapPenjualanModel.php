<?php

namespace App\Models;

use CodeIgniter\Model;

class RekapPenjualanModel extends Model
{
    protected $table      = 'rekap_penjualan';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['idpenjualan','idbarang','jumlah','harga_satuan','total_penjualan','tgl_input'];

    public function getRekap($bln)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT barang.nama AS namaBarang, MONTH(rekap_penjualan.tgl_input) AS bulan, kategori.nama AS namaKategori,SUM(rekap_penjualan.jumlah) AS jumlah, rekap_penjualan.harga_satuan AS hargaSatuan, SUM(rekap_penjualan.total_penjualan) AS totalPenjualan
        FROM ((rekap_penjualan JOIN barang ON rekap_penjualan.idbarang = barang.idbarang) JOIN kategori ON barang.idkategori = kategori.idkategori )
        WHERE MONTH(rekap_penjualan.tgl_input) = ".$bln."
        GROUP BY barang.nama");
        
        return $query;
    }
    
    public function getTotalPenjualan()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('rekap_penjualan');
        $builder->selectSum('jumlah');
        $query = $builder->get();

        return $query;
    }

    public function getPenjualan()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('rekap_penjualan');
        $builder->selectCount('idpenjualan');
        $query = $builder->get();

        return $query;
    }

    public function getTotalPendapatan()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('rekap_penjualan');
        $builder->selectSum('total_penjualan');
        $query = $builder->get();

        return $query;
    }
    public function getTerlaris()
    {
        $db      = \Config\Database::connect();
        $query = $db->query("SELECT barang.nama AS namaBarang, kategori.nama AS namaKategori,SUM(rekap_penjualan.jumlah) AS total_terjual
        From ((rekap_penjualan JOIN barang ON rekap_penjualan.idbarang = barang.idbarang) JOIN kategori ON barang.idkategori = kategori.idkategori)
        GROUP BY rekap_penjualan.idbarang");
        
        return $query;
    }
    public function getBulanan()
    {
        $db      = \Config\Database::connect();
        $query = $db->query("SELECT MONTH(rekap_penjualan.tgl_input) AS bulan, SUM(rekap_penjualan.jumlah) AS jumlah, SUM(rekap_penjualan.total_penjualan) AS total_penjualan
        FROM rekap_penjualan
        GROUP BY MONTH(tgl_input)");
        
        return $query;
    }
}