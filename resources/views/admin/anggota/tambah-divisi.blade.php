@extends('admin.layout')
@section('title')
    Tambah divisi
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="font-size: 25px">Form Tambah Data Divisi</h4>
            <hr>
            <form action="{{ route('admin.simpan.divisi') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama_jabatan" class="form-label">Nama Divisi</label>
                    <input type="text" class="form-control" id="nama_divisi" name="nama_divisi" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
