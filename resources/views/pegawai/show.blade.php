@extends('layouts.app')

@section('konten')
    <div class="py-4">
        <div class="row">
            <div class="col-md-12">
                <h1>Detail Data Pegawai</h1>
                <hr />
                <div class="mb-3">
                    <label class="form-label" required>Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $pegawai->nama_pegawai }}"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">NIK</label>
                    <input type="text" name="nik" id="nik" class="form-control" value="{{ $pegawai->NIK }}"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control"
                        value="{{ $pegawai->jenis_kelamin }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ $jabatan->jabatan }}"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Divisi</label>
                    <input type="text" name="" id="" class="form-control" value="{{ $divisi->divisi }}"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Masuk</label>
                    <input type="date" name="tgl_masuk" id="tgl_masuk" class="form-control"
                        value="{{ $pegawai->tgl_masuk }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Gaji</label>
                    <input type="number" name="gaji" id="gaji" class="form-control" value="{{ $pegawai->gaji }}"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" readonly>{{ $pegawai->alamat }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Foto</label><br>
                    <img src="{{ asset($pegawai->foto) }}" alt="gambar" style="max-width: 100px;">
                </div>
                <div class="mb-3">
                    <a href="{{ url('/datapegawai') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
