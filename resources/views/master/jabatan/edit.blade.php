@foreach ($jabatan as $j)
    <form action="{{ route('jabatan.update', $j->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal fade" id="editModal{{ $j->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Data Jabatan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="jabatan" id="jabatan" placeholder="Nama Jabatan"
                                    class="form-control" value="{{ $j->jabatan }}">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="sumbit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach
