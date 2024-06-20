<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index()
    {
        $divisi = Divisi::all();
        return view('master.divisi.index', compact('divisi'));
    }
}
