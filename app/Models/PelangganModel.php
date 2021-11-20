<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table      = 'pelanggan';
    protected $primaryKey = 'idpelanggan';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['idpelanggan','nama','password','jenis_kelamin','alamat','idkota','email','no_telp'];
}