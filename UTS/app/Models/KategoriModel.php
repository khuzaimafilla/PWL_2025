<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    protected $table = 'm_kategori';

    public function barangs()
    {
        return $this->hasMany(BarangModel::class, 'kategori_id');
    }
}

