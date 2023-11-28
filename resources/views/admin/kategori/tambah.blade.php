@extends('admin.layout')
@section('title')
    Tambah Data Kategori
@endsection

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="font-size: 25px">Form Tambah Data Kategori</h4>
                <hr>
                <form action="{{route('admin.input.kategori')}}" method="POST">
                    @csrf
                <div class="form-group">
                        <label for="kategori">Nama Kategori</label>
                        <input for="kategori" name="nama_kategori" class="form-control">
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                </form>
            </div>
        @endsection
