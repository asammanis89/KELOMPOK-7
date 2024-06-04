<?php

namespace App\Http\Controllers;

use App\Models\PenyakitUmum;
use Illuminate\Http\Request;

class PenyakitUmumController extends Controller
{
    public function index()
    {
        $penyakit = PenyakitUmum::all();
        return view('home',['data'=>$penyakit]);
    }

    public function tampilkan()
    {
        $penyakit = PenyakitUmum::all();
        return view('penyakit_umum.index', compact('penyakit'));
    }
}
