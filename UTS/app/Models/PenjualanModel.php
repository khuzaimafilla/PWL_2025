<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanModel extends Model
{
    protected $table = 't_penjualan';

    public function user()
    {
        return $this->belongsTo(UserModel::class, 'user_id');
    }

    public function detail()
    {
        return $this->hasMany(DetailPenjualanModel::class, 'penjualan_id');
    }
}

