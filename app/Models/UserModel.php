<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'idBarang';
    protected $allowedFields = ['nama_Barang', 'Jumlah', 'keterangan'];
}
