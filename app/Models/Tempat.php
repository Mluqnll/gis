<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;

class Tempat extends Model
{
    protected $table = 'tempat';

    public function wilayah(){
        return $this->belongsTo(Wilayah::class, 'id_wilayah');
    }
    
    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "tempat";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDelete()
    {
        $foto = $this->foto;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }

    function handleUploadIcon()
    {
        $this->handleDeleteIcon();
        if (request()->hasFile('icon')) {
            $icon = request()->file('icon');
            $destination = "icon";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $icon->extension();
            $url = $icon->storeAs($destination, $filename);
            $this->icon = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteIcon()
    {
        $icon = $this->icon;
        if ($icon) {
            $path = public_path($icon);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
