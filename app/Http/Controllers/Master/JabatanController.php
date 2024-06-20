<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatan = Jabatan::all();
        return view('master.jabatan.index', compact('jabatan'));
    }
}
