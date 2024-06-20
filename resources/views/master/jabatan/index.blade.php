@extends('layouts.app')

@section('konten')
    <div class="container-xxl" style="max-width: 1560px;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-sm" style="background: #f8f9fa;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-4" style="color: #333;">Jabatan</h5>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <a href="" class="btn btn-primary">+ Tambah Data</a>
                </div>
                <div class="search-box mt-3">
                    <label class="position-absolute" for="searchBox">
                        <i class="fal fa-search fs-3"></i>
                    </label>
                    <input type="text" data-table-id="goodsrecording-table" id="searchBox" data-action="search"
                        class="form-control form-control-solid w-250px ps-13" placeholder="Search Pegawai" />
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table class="table align-middle table-row-dashed  gy-5 dataTable no-footer text-gray-600 fw-semibold">
                    <thead class="text-start text-muted fw-bold  text-uppercase gs-0 ">
                        <tr class="text-center align-middle">
                            <th>No</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jabatan as $j)
                            <tr class="text-center align-middle">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $j->jabatan }}</td>
                                <td>
                                    <a href="" class="btn btn-warning me-2">
                                        <i class="bi bi-pencil-fill fs-2"></i>

                                    </a>
                                    <form action="" method="POST" type="button" class="btn btn-danger p-0 me-2"
                                        onsubmit="return confirm('Delete?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger m-0"><i class="bi bi-trash fs-2"></i>
                                        </button>
                                    </form>
                                </td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
