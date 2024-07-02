<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\JenisModel;

class Barang extends BaseController
{
    public function databarang()
    {
        $barangModel = new BarangModel();
        $jenisModel  = new JenisModel();

        $data['barang'] = $barangModel->getBarangWithJenis();
        $data['Jenis']  = $jenisModel->findAll();
        return view('barang/barang', $data);
    }

    public function create()
    {
        $jenisModel = new JenisModel();
        $data['Jenis'] = $jenisModel->findAll();
        return view('barang/Btambah', $data);
    }

    public function store()
    {
        $barangModel = new BarangModel();
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),  // Fixed typo
            'jumlah_barang' => $this->request->getPost('jumlah_barang'),
            'keterangan' => $this->request->getPost('keterangan'),
            'IdJenis' => $this->request->getPost('IdJenis'),
        ];
        $barangModel->save($data);
        return redirect()->to('/barang/barang');
    }

    public function edit($id)
    {
        $barangModel = new BarangModel();
        $jenisModel = new JenisModel();
        $data['barang'] = $barangModel->find($id);
        $data['Jenis'] = $jenisModel->findAll();
        return view('barang/barangedit', $data);
    }

    public function update($id)
    {
        $barangModel = new BarangModel();
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jumlah_barang' => $this->request->getPost('jumlah_barang'),
            'keterangan' => $this->request->getPost('keterangan'),
            'IdJenis' => $this->request->getPost('IdJenis'),
        ];
        $barangModel->update($id, $data);
        return redirect()->to('barang/barang');
    }

    public function delete($id)
    {
        $barangModel = new BarangModel();
        $barangModel->delete($id);
        return redirect()->to('barang/barang');
    }
}
