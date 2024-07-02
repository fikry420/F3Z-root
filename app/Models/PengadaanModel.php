<?php

namespace App\Models;

use CodeIgniter\Model;

class PengadaanModel extends Model
{
    protected $table = 'pengadaan';
    protected $primaryKey = 'IdPengadaan';
    protected $allowedFields = ['Barang','Jumlah','Waktu','Keterangan','IdBarang','IdSuplier','IdRole'];

    public function getPengadaan()
    {
        return $this->select('pengadaan.*, Barang.nama_barang supplier.nama_supplier, role.nama_role')
                    ->join('barang','barang.IdBarang = pengadaan.IdBarang')
                    ->join('supplier', 'supplier.IdSupplier = pengadaan.IdSupplier')
                    ->join('role','role.IdRole = pengadaaan.IdRole')
                    ->findAll();
    } 

}
 