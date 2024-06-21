@extends('layouts.app')

@section('konten')
    <div class="py-4">
        <div class="row">
            <div class="col-md-12">
                <h1>Tambah Data Pegawai</h1>
                <hr />
                <form action="{{ route('datapegawai.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" required>Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter name"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">NIK</label>
                        <input type="text" name="nik" id="nik" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>
                            <option selected disabled>Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jabatan</label>
                        <select id="jabatan" name="jabatan" class="form-select" aria-label="Default select example"
                            required>
                            <option selected disabled>Jabatan</option>
                            @foreach ($jabatan as $j)
                                <option value="{{ $j->id }}">{{ $j->jabatan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Divisi</label>
                        <select name="divisi" id="divisi" class="form-select" required>
                            <option selected disabled>Divisi</option>
                            @foreach ($divisi as $d)
                                <option value="{{ $d->id }}">{{ $d->divisi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Masuk</label>
                        <input type="date" name="tgl_masuk" id="tgl_masuk" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Gaji</label>
                        <input type="number" name="gaji" id="gaji" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('/datapegawai') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
