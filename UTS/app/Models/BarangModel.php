<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BarangModel extends Model
{
    use HasFactory;

    protected $table = 'm_barang';
    protected $fillable = [];
    protected $primaryKey = 'barang_id';
    protected $guarded =[];

    public function kategori(): BelongsTo 
    {
        return $this->belongsTo(KategoriModel::class,'kategori_id','kategori_id');
    }

    public function stok()
    {
        return $this->hasOne(StokModel::class, 'barang_id', 'barang_id');
    }
}

