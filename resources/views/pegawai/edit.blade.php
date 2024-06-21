@extends('layouts.app')

@section('konten')
    <div class="py-4">
        <div class="row">
            <div class="col-md-12">
                <h1>Update Data Pegawai</h1>
                <hr />
                <form action="{{ route('datapegawai.update', $pegawai->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" required>Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="{{ $pegawai->nama_pegawai }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">NIK</label>
                        <input type="text" name="nik" id="nik" class="form-control"
                            value="{{ $pegawai->NIK }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control"
                            value="{{ $pegawai->jenis_kelamin }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jabatan</label>
                        <select id="jabatan" name="jabatan" class="form-select" aria-label="Default select example">
                            <option selected disabled>Jabatan</option>
                            @foreach ($jabatan as $j)
                                <option value="{{ $j->id }}" {{ $pegawai->jabatan_id == $j->id ? 'selected' : '' }}>
                                    {{ $j->jabatan }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Divisi</label>
                        <select name="divisi" id="divisi" class="form-select">
                            <option selected disabled>Divisi</option>
                            @foreach ($divisi as $d)
                                <option value="{{ $d->id }}" {{ $pegawai->divisi_id == $d->id ? 'selected' : '' }}>
                                    {{ $d->divisi }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Masuk</label>
                        <input type="date" name="tgl_masuk" id="tgl_masuk" class="form-control"
                            value="{{ $pegawai->tgl_masuk }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Gaji</label>
                        <input type="number" name="gaji" id="gaji" class="form-control"
                            value="{{ $pegawai->gaji }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control">{{ $pegawai->alamat }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Pas Foto 3x4</label><br>
                        <img src="{{ asset($pegawai->foto) }}" alt="gambar" style="max-width: 100px;">
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('/datapegawai') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
