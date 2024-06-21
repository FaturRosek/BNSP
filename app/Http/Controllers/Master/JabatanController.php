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

    public function edit($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('master.jabatan.edit', compact('jabatan'));
    }

    public function update(Request $request, $id)
    {
        $jabatan = Jabatan::findOrFail($id);

        $jabatan->jabatan = $request->jabatan;
        $jabatan->save();

        return redirect()->route('jabatan.index')->with('status', 'Data Berhasil Di Update');
    }
    public function store(Request $request)
    {
        $request->validate([
            'jabatan' => 'required|max:255|string'
        ]);

        Jabatan::create([
            'jabatan' => $request->jabatan,
        ]);

        return redirect()->route('jabatan.index')->with('succes', 'Data Berhasil Ditambahkan');
    }

    public function destroy(string $id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->delete();
        return redirect()->route('jabatan.index')->with('status', 'Data Berhasil di Hapus');
    }
}
