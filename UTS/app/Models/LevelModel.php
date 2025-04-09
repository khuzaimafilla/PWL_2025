<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    protected $table = 'm_level';

    public function users()
    {
        return $this->hasMany(UserModel::class, 'level_id');
    }
}
