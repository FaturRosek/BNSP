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
                    @foreach ($jabatan as $j)
                        <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ $j->jabatan }}"
                            readonly>
                    @endforeach
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Divisi</label>
                    @foreach ($divisi as $d)
                        <input type="text" name="" id="" class="form-control" value="{{ $d->divisi }}"
                            readonly>
                    @endforeach
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
                    <label for="" class="form-label">Pas Foto 3x4</label>
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
                <div class="mb-3">
                    <a href="{{ url('/datapegawai') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
