@extends('layouts.app')

@section('konten')
    <div class="pagetitle">
        <h1>Jabatan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Jabatan</li>
            </ol>
        </nav>
    </div>

    <div class="container-xxl" style="max-width: 1560px;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @session('status')
                    <div class="alert alert-primary" role="alert">
                        {{ $value }}
                    </div>
                @endsession
                @session('status2')
                    <div class="alert alert-danger" role="alert">
                        {{ $value }}
                    </div>
                @endsession
                <div class="d-flex justify-content-between mt-3">
                    <div class="search-box position-relative">
                        <i class="fal fa-search fs-3 position-absolute top-50 translate-middle-y left-10"></i>
                        <input type="text" data-table-id="goodsrecording-table" id="searchBox" data-action="search"
                            class="form-control form-control-solid ps-5" placeholder="Search Pegawai" />
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        + Tambah Data
                    </button>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table align-middle table-striped table-hover">
                        <thead class="text-start text-muted fw-bold text-uppercase">
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jabatan as $j)
                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $j->jabatan }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $j->id }}">
                                            <i class="bi bi-pencil-fill"></i>
                                        </button>
                                        <form action="{{ route('jabatan.destroy', $j->id) }}" method="POST"
                                            style="display: inline-block;"
                                            onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
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
    @include('master.jabatan.create')
    @include('master.jabatan.edit')
@endsection
