@extends('admin.layout')
@section('title')
    Tambah Divisi
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Divisi</h5>
            <form action="{{ route('admin.edit.divisi', $divisi->id_divisi) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama_divisi" class="form-label">Nama Divisi</label>
                    <input type="text" class="form-control" id="nama_divisi" name="nama_divisi" placeholder="Nama divisi" value="{{ $divisi->nama_divisi }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
