<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'idBarang';
    protected $useAutoIncrement = 'true';
    protected $allowedFields = ['nama_Barang', 'Jumlah', 'keterangan','IdJenis'];

    public function getBarangWithJenis()
    {
        return $this ->select('barang.*,Jenis.Jenis')
                     ->join('jenis','jenis.IdJenis = barang.IdJenis')
                     ->findAll();
    }
}
 