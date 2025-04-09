<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data = KategoriModel::all();
        return view('kategori.index', ['data' => $data]);
    }
}
