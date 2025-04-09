<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $data = BarangModel::with('kategori')->get();
        return view('barang.index', ['data' => $data]);
    }
}
