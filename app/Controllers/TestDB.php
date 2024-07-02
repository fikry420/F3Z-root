<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class TestDB extends Controller
{
    public function index()
    {
        $db = Database::connect();
        if ($db->connect()) {
            echo "Koneksi ke database berhasil!";
        } else {
            echo "Koneksi ke database gagal.";
        }
    }
}
