@extends('layouts.app')

@section('konten')
    <div class="pagetitle">
        <h1>Divisi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Divisi</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container-xxl" style="max-width: 1560px;">
        <div class="row justify-content-center">
            <div class="col-md-12">
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
                            <tr class="text-center align-middle">
                                <th>No</th>
                                <th>Divisi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($divisi as $d)
                                <tr class="text-center align-middle">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->divisi }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $d->id }}">
                                            <i class="bi bi-pencil-fill"></i>
                                        </button>
                                        <form action="{{ route('divisi.destroy', $d->id) }}" method="POST" type="button"
                                            class="btn btn-danger p-0 me-2" onsubmit="return confirm('Delete?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger m-0"><i class="bi bi-trash"></i>
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
    @include('master.divisi.create')
    @include('master.divisi.edit')
@endsection
