@extends('layouts.app')

@section('konten')
    <div class="pagetitle">
        <h1>Data Pegawai</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Pegawai</li>
            </ol>
        </nav>
    </div>

    <div class="container-xxl" style="max-width: 1560px;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-primary" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('status2'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('status2') }}
                    </div>
                @endif
                <div class="d-flex justify-content-between mt-3">
                    <div class="search-box position-relative">
                        <i class="bi bi-search position-absolute top-50 translate-middle-y" style="left: 10px;"></i>
                        <input type="text" id="searchBox" class="form-control form-control-solid ps-5"
                            placeholder="Search Pegawai" />
                    </div>
                    <a href="{{ route('datapegawai.create') }}" class="btn btn-primary">+ Tambah Data</a>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table align-middle table-striped table-hover" id="pegawai-table">
                        <thead class="text-start text-muted fw-bold text-uppercase">
                            <tr class="text-center align-middle">
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Jenis Kelamin</th>
                                <th>Jabatan</th>
                                <th>Divisi</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $p)
                                <tr class="text-center align-middle">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p->nama_pegawai }}</td>
                                    <td>{{ $p->NIK }}</td>
                                    <td>{{ $p->jenis_kelamin }}</td>
                                    <td>{{ $p->jabatan->jabatan }}</td>
                                    <td>{{ $p->divisi->divisi }}</td>
                                    <td>
                                        <img src="{{ asset($p->foto) }}"
                                            style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;"
                                            alt="Img" />
                                    </td>
                                    <td>
                                        <a href="{{ route('datapegawai.show', $p->id) }}" class="btn btn-primary btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('datapegawai.edit', $p->id) }}" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>
                                        <form action="{{ route('datapegawai.destroy', $p->id) }}" method="POST"
                                            style="display:inline;"
                                            onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#searchBox').on('keyup', function() {
                const searchTerm = $(this).val().toLowerCase().trim();

                $('#pegawai-table tbody tr').each(function() {
                    let found = false;
                    $(this).find('td').each(function() {
                        if ($(this).text().toLowerCase().indexOf(searchTerm) !== -1) {
                            found = true;
                            return false;
                        }
                    });
                    $(this).toggle(found);
                });
            });
        });
    </script>
@endsection
