<?php

namespace App\Models;

use CodeIgniter\Model;

class TarifOngkirModel extends Model
{
    protected $table      = 'tarif_ogkir';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['idkota_tujuan','jenis_pengiriman','harga'];
}