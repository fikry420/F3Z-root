<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplyerModel extends Model
{
    protected $table = 'suplier';
    protected $primaryKey = 'IdSuplier';
    protected $returnType = 'object';
    protected $allowedFields = ['IdSuplier', 'NoHp', 'Alamat','Kategori_Barang'];
}
 