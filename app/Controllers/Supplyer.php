<?php

namespace App\Controllers;

use App\Models\SupplyerModel;

class Supplyer extends BaseController
{
    public function index(){
        $supplyer_model = new SupplyerModel();
        $all_data_supplyer = $supplyer_model ->findAll();
        return view('supplyer' , ['all_data_supplyer' => $all_data_supplyer]);
    }
}
