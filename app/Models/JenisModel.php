<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisModel extends Model
{
    protected $table = 'Jenis';
    protected $primaryKey = 'IdJenis';
    protected $allowedFields = ['jenis', 'keterangan_jenis'];
}
