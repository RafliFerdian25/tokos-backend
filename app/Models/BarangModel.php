<?php

namespace App\Models;

use CodeIgniter\Model;
use phpDocumentor\Reflection\Types\This;

class BarangModel extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'idbarang';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['idbarang', 'nama', 'keterangan', 'file_gambar', 'tampil', 'harga', 'berat', 'stok', 'tgl_insert', 'tgl_update'];

    public function getBarang()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT barang.idbarang, barang.nama, barang.keterangan, barang.file_gambar, barang.harga, barang.stok, barang.tgl_insert AS tgl_input, barang.tgl_update AS tgl_update FROM barang");

        return $query;
    }

    public function getBarangid($idbarang)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT barang.idbarang, barang.nama, barang.keterangan,  barang.file_gambar, barang.harga, barang.stok, barang.tgl_insert AS tgl_insert, barang.tgl_update AS tgl_update FROM barang WHERE barang.idbarang = " . $idbarang . "");

        return $query;
    }
    public function getFindId($idbarang)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('barang');
        $result = $builder->where('idbarang', $idbarang)
            ->limit(1)
            ->get('barang');
        if ($result->getRow() > 0) {
            return $result->getRow();
        } else {
            return array();
        }
    }
    public function getSearchBarang($keyword)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT barang.idbarang, barang.nama, barang.keterangan, barang.file_gambar, barang.harga, barang.stok, barang.tgl_insert AS tgl_input, barang.tgl_update AS tgl_update FROM barang WHERE barang.nama LIKE '%" . $keyword . "%'");

        return $query;
    }
    public function get_product_keyword($keyword)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('barang');
        $builder->select();
        $builder->like('nama', $keyword);
        $builder->orlike('harga', $keyword);
        $query = $builder->get();
        return $query;
    }
}