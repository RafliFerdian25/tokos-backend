<?php

namespace App\Models;

use CodeIgniter\Model;

class KonfirmPembayaranModel extends Model
{
    protected $table      = 'konfirm_pembayaran';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['idpenjualan','nama_bank','no_rekening','nama','total_bayar','tgl_bayar','scan_struk','verifikasi','idpetugas'];
}