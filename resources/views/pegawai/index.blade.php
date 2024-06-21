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
                        <input type="text" table-id="pegawai-table" id="searchBox" data-action="search"
                            class="form-control form-control-solid ps-5" placeholder="Search Pegawai" />
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchBox = document.getElementById('searchBox');
            const table = document.getElementById('pegawai-table').getElementsByTagName('tbody')[0];
            searchBox.addEventListener('input', function() {
                const searchTerm = searchBox.value.toLowerCase();
                const rows = table.getElementsByTagName('tr');
                for (let i = 0; i < rows.length; i++) {
                    const cells = rows[i].getElementsByTagName('td');
                    let rowContainsSearchTerm = false;
                    for (let j = 0; j < cells.length; j++) {
                        if (cells[j].textContent.toLowerCase().includes(searchTerm)) {
                            rowContainsSearchTerm = true;
                            break;
                        }
                    }
                    rows[i].style.display = rowContainsSearchTerm ? '' : 'none';
                }
            });
        });
    </script>
@endsection
