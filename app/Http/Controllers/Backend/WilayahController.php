<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Extend;
use App\Models\Tempat;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_wilayah'] = Wilayah::all();
        return view('backend.wilayah.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.wilayah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $wilayah = new Wilayah();
        $wilayah->nama_wilayah = request('nama_wilayah');
        $wilayah->warna = request('warna');
        $wilayah->geojson = request('geojson');
        // return $wilayah;
        $wilayah->save();

        return redirect('admin/wilayah')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $wilayah)
    {
        $data['wilayah'] = wilayah::find($wilayah);
        $data['tempat'] = Tempat::where('id_wilayah', $wilayah)->get();
        $data['extend'] = Extend::where('id_wilayah', $wilayah)->get();
        // return $data;
        return view('backend.wilayah.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $wilayah)
    {
        $data['wilayah'] = Wilayah::find($wilayah);
        // return $data;
        return view('backend.wilayah.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $wilayah)
    {
        $wilayah = Wilayah::find($wilayah);
        $wilayah->nama_wilayah = request('nama_wilayah');
        $wilayah->warna = request('warna');
        if (request('geojson'))
            $wilayah->geojson;
        // return $wilayah;
        $wilayah->save();

        return redirect('admin/wilayah')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $wilayah)
    {
        $wilayah = Wilayah::find($wilayah);
        // return $wilayah;
        $wilayah->delete();

        return back()->with('danger', 'Data Berhasil di hapus');
    }

    public function extend()
    {
        $extend = new Extend();
        $extend->id_wilayah = request('id_wilayah');
        $extend->extend_nama_wilayah = request('extend_nama_wilayah');
        $extend->extend_warna = request('extend_warna');
        $extend->extend_geojson = request('extend_geojson');
        // return $extend;
        $extend->save();

        return back()->with('success', 'Data Berhasil Ditambahkan');
    }

    public function updateExtend($extend)
    {
        $extend = Extend::find($extend);
        $extend->id_wilayah = request('id_wilayah');
        $extend->extend_nama_wilayah = request('extend_nama_wilayah');
        $extend->extend_warna = request('extend_warna');
        if (request('extend_geojson'))
            $extend->extend_geojson;
        // return $extend;
        $extend->save();

        return back()->with('success', 'Data Berhasil Diedit');
    }

    public function hapus($extend)
    {
        $extend = Extend::find($extend);
        // return $extend;
        $extend->delete();

        return back()->with('danger', 'Data Berhasil Dihapus');
    }

    public function tempat(Request $request)
    {
        $tempat = new Tempat();
        $tempat->id_wilayah = request('id_wilayah');
        $tempat->nama_tempat = request('nama_tempat');
        $tempat->posisi = request('posisi');
        $tempat->deskripsi = request('deskripsi');
        $tempat->handleUploadFoto();
        $tempat->handleUploadIcon();
        // return $tempat;
        $tempat->save();

        return back()->with('success', 'Data berhasil ditambahkan');
    }

    public function updateTempat($tempat)
    {
        $tempat = Tempat::find($tempat);
        $tempat->id_wilayah = request('id_wilayah');
        $tempat->nama_tempat = request('nama_tempat');
        $tempat->posisi = request('posisi');
        $tempat->deskripsi = request('deskripsi');
        if (request('foto'))
            $tempat->handleUploadFoto();
        if (request('icon'))
            $tempat->handleUploadIcon();
        // return $tempat;
        $tempat->save();
        // $wilayah = $tempat->id_wilayah;

        return back()->with('success', 'Data Berhasil Diedit');
    }

    public function hapusTempat($tempat)
    {
        $tempat = Tempat::find($tempat);
        $tempat->handleDelete();
        $tempat->handleDeleteIcon();
        // return $tempat;
        $tempat->delete();
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
