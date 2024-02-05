@extends('admin.admin-dashboard')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <x-breadcrumb sub="Jurusan" icon="bx bx-dna" subsub="Index" />

    <div class="card radius-10">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">List Jurusan</h5>
                </div>
                <div class="font-22 ms-auto">
                    <div class="btn-group">
                        <button type="button" onclick="window.location.href='{{ route('jurusan.create') }}'"
                            class="btn btn-primary">Tambah Jurusan</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" id="importButton">
                            Import Excel
                        </button>
                    
                        <form method="post" action="{{ route('import.jurusan') }}" enctype="multipart/form-data" style="display: none;" id="importForm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                </div>
                                <div class="modal-body">
                                    {{ csrf_field() }}
                                    <label for="fileInput">Pilih file excel</label>
                                    <div class="form-group">
                                        <input type="file" name="file" id="fileInput" required="required">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="resetFileInput()">Close</button>
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <script>
                        document.getElementById('importButton').addEventListener('click', function () {
                            document.getElementById('fileInput').click();
                        });
                    
                        function resetFileInput() {
                            document.getElementById('importForm').reset();
                        }
                    </script>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" width="100%">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Jurusan</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jurusan as $index => $jurusan)
                            <tr>
                                <td width="5%">{{ $index+1 }}</td>
                                <td width="35%">{{ $jurusan->nama_jurusan }}</td>
                                <td width="50%">{{ $jurusan->deskripsi }}</td>
                                <td width="10%">
                                    <div class="d-flex order-actions">
                                        <a href="{{ route('jurusan.edit', encrypt($jurusan->id)) }}"
                                            class="ms-1 text-white" style="background: #0d6efd" data-toggle="tooltip"
                                            title="Edit"><i class="bx bx-edit"></i></a>
                                        <a href="{{ route('jurusan.destroy', encrypt($jurusan->id)) }}"
                                            class="ms-1 text-white" style="background: #0d6efd" data-toggle="tooltip"
                                                title="Delete"><i class="bx bx-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
