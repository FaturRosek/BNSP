@extends('layouts.app')

@section('konten')
    <div class="py-4">
        <div class="row">
            <div class="col-md-12">
                <h1>Tambah Data Pegawai</h1>
                <hr />
                <form action="{{ route('datapegawai.store') }}" method="POST" enctype="multipart/form-data"
                    onsubmit="return validateForm()">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Masukkan Nama Lengkap">
                        <div id="nama_error" class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nik">NIK</label>
                        <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK">
                        <div id="nik_error" class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                            <option selected disabled>Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <div id="jenis_kelamin_error" class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="jabatan">Jabatan</label>
                        <select id="jabatan" name="jabatan" class="form-select" aria-label="Default select example">
                            <option selected disabled>Pilih Jabatan</option>
                            @foreach ($jabatan as $j)
                                <option value="{{ $j->id }}">{{ $j->jabatan }}</option>
                            @endforeach
                        </select>
                        <div id="jabatan_error" class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="divisi">Divisi</label>
                        <select name="divisi" id="divisi" class="form-select">
                            <option selected disabled>Pilih Divisi</option>
                            @foreach ($divisi as $d)
                                <option value="{{ $d->id }}">{{ $d->divisi }}</option>
                            @endforeach
                        </select>
                        <div id="divisi_error" class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="tgl_masuk">Tanggal Masuk</label>
                        <input type="date" name="tgl_masuk" id="tgl_masuk" class="form-control">
                        <div id="tgl_masuk_error" class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="gaji">Gaji</label>
                        <input type="number" name="gaji" id="gaji" class="form-control"
                            placeholder="Masukkan Jumlah Gaji">
                        <div id="gaji_error" class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat"></textarea>
                        <div id="alamat_error" class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="foto">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                        <div id="foto_error" class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-end">
                            <a href="{{ url('/datapegawai') }}" class="btn btn-secondary me-1">Back</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
@endsection
