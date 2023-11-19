<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Tempat;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data['list_tempat'] = Tempat::all();
        return view('frontend.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function peta()
    {
        $data['list_tempat'] = Tempat::all();
        return view('frontend.peta', $data);
    }


}
