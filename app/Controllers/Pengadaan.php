<?php

namespace App\Controller;

use App\Controllers\BaseController;
use App\Models\PengadaanModel;
use App\Models\BarangModel;
use App\Models\SupplyerModel;
use App\Models\RoleModel;


class Pengadaan extends BaseController
{
    public function index()
    {
        $pengadaanModel = new Pengadaan();
        $data['pengadaan'] = $pengadaanModel->getPengadaan();
        return view ('Pengadaan/index',$data);
    }
    public function create()
    {
        $barangModel = new BarangModel();
        $SupplierModel = new SupplyerModel();
        $roleModel = new RoleModel();

        $data['barang'] = $barangModel->findAll();
        $data['suplier'] = $SupplierModel->findAll();
        $data['role'] = $roleModel->findAll();
        return view('pengadaan/create', $data);
    }
    public function store()
    {
        $pengadaanModel = new Pengadaan();
        $data = [
            'IdBarang'=> $this->request->getPost('IdBarang'),
            'IdSupplier'=> $this->request->getPost('IdSupplier'),
            'IdRole'=> $this->request->getPost('IdRole'),
            'jumlah'=> $this->request->getPost('Jumlah'),
            'waktu'=> $this->request->getPost('Waktu'),
            'Keterangan'=> $this->request->getPost('Keterangan'),
        ];
        $pengadaanModel->save($data);
        return redirect()->to('/pengadaan');
    }
}