<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class Wilayah extends Model
{
    protected $table = "wilayah";

    public function extend()
    {
        return $this->hasMany(Extend::class, 'id_wilayah');
    }
    public function tempat()
    {
        return $this->hasMany(Extend::class, 'id_wilayah');
    }
}
