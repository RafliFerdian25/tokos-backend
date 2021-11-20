<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusModel extends Model
{
    protected $table      = 'status';
    protected $primaryKey = 'idstatus';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['idstatus','nama'];
}