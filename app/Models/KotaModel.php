<?php

namespace App\Models;

use CodeIgniter\Model;

class KotaModel extends Model
{
    protected $table      = 'kota';
    protected $primaryKey = 'id_kota';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_kota','id_provinsi','nama'];
}