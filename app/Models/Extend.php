<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class Extend extends Model
{
    protected $table='extend_wilayah';

    public function wilayah(){
        return $this->belongsTo(Wilayah::class, 'id_wilayah');
    }

    public function desa(){
        return $this->belongsTo(Desa::class, 'id_desa');
    }
}
