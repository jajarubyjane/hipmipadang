@extends('admin.layout')
@section('title')
    Tambah Jabatan
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="font-size: 25px">Form Tambah Data Jabatan</h4>
            <hr>
            <form action="{{ route('admin.simpan.jabatan') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                    <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
