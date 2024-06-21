<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        $jabatan = Jabatan::all();
        $divisi = Divisi::all();
        $totalpegawai = Pegawai::count();
        return view('landing', compact('pegawai', 'jabatan', 'divisi', 'totalpegawai'));
    }
}
