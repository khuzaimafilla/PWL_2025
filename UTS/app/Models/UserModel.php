<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'm_user';

    public function penjualan()
    {
        return $this->hasMany(PenjualanModel::class, 'user_id');
    }
}

