<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PenjualanModel;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        return PenjualanModel::all();
    }
    public function store(Request $request)
    {
        $barang = PenjualanModel::create($request->all());
        return response()->json($barang, 201);
    }

    public function show($barang)
    {
        return PenjualanModel::find($barang);
    }

    public function update(Request $request, $barang)
    {
        $data = PenjualanModel::find($barang);
        $data->update($request->all());
        return PenjualanModel::find($barang);
    }

    public function destroy($barang)
    {
        $data = PenjualanModel::find($barang);
        $data->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data terhapus',
        ]);
    }
}