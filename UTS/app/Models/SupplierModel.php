<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    protected $table = 'm_supplier';

    public function barangs()
    {
        return $this->hasMany(BarangModel::class, 'supplier_id');
    }
}
