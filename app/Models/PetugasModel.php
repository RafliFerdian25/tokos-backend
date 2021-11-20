<?php

namespace App\Models;

use CodeIgniter\Model;

class PetugasModel extends Model
{
    protected $table      = 'petugas';
    protected $primaryKey = 'idpetugas';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['idpetugas','nama','password'];
}