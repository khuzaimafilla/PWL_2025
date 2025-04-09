<?php

namespace App\Http\Controllers;

use App\Models\PenjualanModel;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $data = PenjualanModel::with('user', 'detail.barang')->get();
        return view('penjualan.index', ['data' => $data]);
    }
}
