<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        $jabatan = Jabatan::all();
        $divisi = Divisi::all();
        return view('pegawai.index', compact('pegawai', 'jabatan', 'divisi'));
    }

    public function create()
    {
        $jabatan = Jabatan::all();
        $divisi = Divisi::all();
        return view('pegawai.create', compact('jabatan', 'divisi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255|string',
            'nik' => 'required|max:255|string',
            'jabatan' => 'required|exists:jabatans,id',
            'divisi' => 'nullable|exists:divisis,id',
            'tgl_masuk' => 'required|date',
            'gaji' => 'required|max:255|string',
            'alamat' => 'required|max:255|string',
            'foto' => 'nullable|mimes:png,jpg,jpeg,webp|max:3048',
        ]);

        $filename = null;
        $path = 'uploads/pas_foto/';

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
        }

        Pegawai::create([
            'nama_pegawai' => $request->nama,
            'NIK' => $request->nik,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan_id' => $request->jabatan,
            'divisi_id' => $request->divisi,
            'tgl_masuk' => $request->tgl_masuk,
            'gaji' => $request->gaji,
            'alamat' => $request->alamat,
            'foto' => $filename ? $path . $filename : null,
        ]);

        return redirect()->route('datapegawai.index')->with('status', 'Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $jabatan = Jabatan::all();
        $divisi = Divisi::all();
        return view('pegawai.show', compact('jabatan', 'divisi', 'pegawai'));
    }
    public function destroy(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        if (File::exists($pegawai->foto)) {
            File::delete($pegawai->foto);
        }

        $pegawai->delete();

        return redirect()->route('datapegawai.index')->with('status', 'Data Berhasil di Hapus');
    }

    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $jabatan = Jabatan::all();
        $divisi = Divisi::all();
        return view('pegawai.edit', compact('jabatan', 'divisi', 'pegawai'));
    }
}
