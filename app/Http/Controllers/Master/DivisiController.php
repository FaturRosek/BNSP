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

    public function edit($id)
    {
        $divisi = Divisi::findOrFail($id);
        return view('master.divisi.edit', compact('divisi'));
    }
    public function update(Request $request, $id)
    {
        $divisi = Divisi::findOrFail($id);

        $divisi->divisi = $request->divisi;
        $divisi->save();

        return redirect()->route('divisi.index')->with('status', 'Data Berhasil Di Update');
    }
    public function store(Request $request)
    {
        $request->validate([
            'divisi' => 'required|max:255|string'
        ]);

        Divisi::create([
            'divisi' => $request->divisi,
        ]);

        return redirect()->route('divisi.index')->with('succes', 'Data Berhasil Ditambahkan');
    }

    public function destroy(string $id)
    {
        $divisi = Divisi::find($id);
        $divisi->delete();
        return redirect()->route('divisi.index')->with('status', 'Data Berhasil di Hapus');
    }
}
