<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokModel extends Model
{
    protected $table = 't_stok';

    public function barang()
    {
        return $this->belongsTo(BarangModel::class, 'barang_id');
    }
}
