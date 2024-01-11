<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Extend;
use App\Models\Tempat;
use App\Models\Tentang;
use App\Models\Wilayah;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_tempat'] = Tempat::all();
        $data['list_wilayah'] = Wilayah::all();
        $data['list_tentang'] = Tentang::all();

        // return $data;
        return view('frontend.index', $data);
    }

    public function show($wilayah)
    {
        // return $wilayah;
        $data['wilayah'] = Wilayah::find($wilayah);
        $data['list_tempat'] = Tempat::all();
        $data['list_wilayah'] = Wilayah::all();
        $data['extend'] = Extend::where('id_wilayah', $wilayah)->get();
        // return $data;
        return view('frontend.detail', $data);
    }


}
