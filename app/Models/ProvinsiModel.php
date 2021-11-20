<?php

namespace App\Models;

use CodeIgniter\Model;

class ProvinsiModel extends Model
{
    protected $table      = 'provinsi';
    protected $primaryKey = 'id_provinsi';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_provinsi','nama'];
}