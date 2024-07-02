<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use SebastianBergmann\Template\Template;

class Welcome extends Controller
{
    public function index()
    {
        $data['content'] = 'content';
        echo view('layouts/main',$data);
    }

    public function dashboard()
    {
        $data['content'] = 'barang';
        echo view('template',$data);
    }

    public function supplyer()
    {
        $data['content'] = 'supplyer';
        echo view('template', $data);
    }
}