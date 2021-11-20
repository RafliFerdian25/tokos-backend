<?php

namespace App\Models;

use CodeIgniter\Model;

class DataTransaksiModel extends Model
{
    protected $table      = 'data_transaksi';
    protected $primaryKey = 'invoice';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['invoice','waktu_pemesanan','idbarang','jumlah','harga_total','idstatus','idpelanggan'];
}