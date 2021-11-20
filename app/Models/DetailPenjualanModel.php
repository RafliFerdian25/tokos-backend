<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPenjualanModel extends Model
{
    protected $table      = 'detail_penjualan';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['idpenjualan','idbarang','qty','harga'];
}