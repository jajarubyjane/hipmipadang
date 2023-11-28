@extends('admin.layout')
@section('title')
    Tambah Jabatan
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Jabatan</h5>
            <form action="{{ route('admin.edit.jabatan', $jabatan->id_jabatan) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                    <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="Nama Jabatan" value="{{ $jabatan->nama_jabatan }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
