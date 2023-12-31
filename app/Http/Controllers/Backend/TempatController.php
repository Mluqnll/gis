<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Tempat;
use Illuminate\Http\Request;

class TempatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_tempat'] = Tempat::all();
        return view('backend.tempat.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.tempat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tempat = new Tempat();
        $tempat->nama_tempat = request('nama_tempat');
        $tempat->lat = request('lat');
        $tempat->long = request('long');
        $tempat->deskripsi = request('deskripsi');
        $tempat->handleUploadFoto();
        $tempat->handleUploadIcon();

        $tempat->save();

        return redirect('admin/tempat')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $tempat)
    {
        $data['tempat'] = Tempat::find($tempat);
        return view('backend.tempat.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $tempat)
    {
        $data['tempat'] = Tempat::find($tempat);
        // return $data;
        return view('backend.tempat.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $tempat)
    {
        $tempat = Tempat::find($tempat);
        $tempat->nama_tempat = request('nama_tempat');
        $tempat->lat = request('lat');
        $tempat->long = request('long');
        $tempat->deskripsi = request('deskripsi');
        if (request('foto')) $tempat->handleUploadFoto();
        if (request('icon')) $tempat->handleUploadIcon();
        // return $tempat;
        $tempat->save();

        return redirect('admin/tempat')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $tempat)
    {
        $tempat = Tempat::find($tempat);
        $tempat->handleDelete();
        $tempat->handleDeleteIcon();
        // return $tempat;
        $tempat->delete();

        return back()->with('danger', 'Data berhasil dihapus');

    }
}
