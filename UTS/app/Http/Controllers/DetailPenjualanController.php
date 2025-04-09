<?php

namespace App\Http\Controllers;

use App\Models\DetailPenjualanModel;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    public function index()
    {
        $data = DetailPenjualanModel::with('barang', 'penjualan')->get();
        return view('detail_penjualan.index', ['data' => $data]);
    }
}
