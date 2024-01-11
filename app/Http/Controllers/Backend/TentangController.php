<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Tentang;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_tentang'] = Tentang::all();
        return view('backend.tentang.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.tentang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tentang = new Tentang();
        $tentang->deskripsi = request('deskripsi');
        // return $tentang;
        $tentang->save();

        return redirect('admin/tentang')->with('success', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $tentang)
    {
        $tentang = Tentang::find($tentang);
        $tentang->delete();
        return back()->with('danger', 'Data Berhasil dihapus');
    }
}
