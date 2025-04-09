<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table = 'm_barang';

    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id');
    }

    public function detailPenjualan()
    {
        return $this->hasMany(DetailPenjualanModel::class, 'barang_id');
    }
}

