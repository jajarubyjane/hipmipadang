@extends('admin.layout')
@section('title')
    Ubah Data Kegiatan
@endsection

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.edit.kegiatan', $kegiatan->id_kegiatan) }}" method="POST">
                    @csrf
                    <h4 class="card-title" style="font-size: 25px">Form Ubah Data Kegiatan</h4>
                    <hr>
                    <div class="form-group">
                        <label for="nama_kegiatan">Nama kegiatan</label>
                       <input  for="" name="nama_kegiatan" class="form-control" value="{{$kegiatan->nama_kegiatan}}">
                    </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                </form>
            </div>
        @endsection
