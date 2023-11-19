<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Pengelola;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_pengelola']= pengelola::all();
        return view('backend.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pengelola = new Pengelola();
        $pengelola->nama = request('nama');
        $pengelola->username = request('username');
        $pengelola->nim = request('nim');
        $pengelola->foto = request('foto');
        $pengelola->password = request('password');
        // return($pengelola);
        $pengelola->handleUploadFoto();

        $pengelola->save();

        return redirect('admin/pengelola') -> with('success', 'Data Berhasil Ditambahkan');
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
    public function edit(string $pengelola)
    {
        $data['pengelola'] = Pengelola::find($pengelola);
        return view('backend.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $pengelola)
    {
        $pengelola= Pengelola::find($pengelola);
        $pengelola->nama = request('nama');
        $pengelola->username = request('username');
        $pengelola->nim = request('nim');
        $pengelola->foto = request('foto');
        $pengelola->password = request('password');
        if (request('foto')) $pengelola->handleUploadFoto();

        $pengelola->save();

        return redirect('admin/pengelola') -> with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $pengelola)
    {
        $pengelola = Pengelola::find($pengelola);
        $pengelola->handleDelete();
        // $pengelola->handleDelete();
        // return $pengelola;
        $pengelola->delete();
        return back()->with('danger', 'Data Berhasil diHapus');
    }
}
