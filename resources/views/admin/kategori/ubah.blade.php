@extends('admin.layout')
@section('title')
    Ubah Data Kategori
@endsection

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.edit.kategori', $kategori->id_kategori) }}" method="POST">
                    @csrf
                    <h4 class="card-title" style="font-size: 25px">Form Ubah Data Kategori</h4>
                    <hr>
                    <div class="form-group">
                        <label for="kategori">Nama Kategori</label>
                       <input  for="" name="nama_kategori" class="form-control" value="{{$kategori->nama_kategori}}">
                    </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                </form>
            </div>
        @endsection
