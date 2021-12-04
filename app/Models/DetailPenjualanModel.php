<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPenjualanModel extends Model
{
    protected $table      = 'detail_penjualan';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['idpenjualan', 'idbarang', 'nama_barang', 'qty', 'harga'];

    public function getDataTransaksi($idpenjualan)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT idpenjualan, nama_barang, qty, harga, (qty * harga) AS Total  FROM `detail_penjualan` WHERE idpenjualan = '" . $idpenjualan . "'");
        // $transaksi = $this->$query->where(['idpenjualan' => $idpenjualan])->first();
        return $query;
    }
}