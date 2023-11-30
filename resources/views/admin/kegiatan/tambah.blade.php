@extends('admin.layout')
@section('title')
    Tambah Data Kegiatan
@endsection

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="font-size: 25px">Form Tambah Data Kegiatan</h4>
                <hr>
                <form action="{{ route('admin.input.kegiatan') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_kegiatan">Nama Kegiatan</label>
                        <input id="nama_kegiatan" name="nama_kegiatan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea id="alamat" name="alamat" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kegiatan">Tanggal Kegiatan</label>
                        <input id="tanggal_kegiatan" type="date" name="tanggal_kegiatan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="waktu_kegiatan">Waktu Kegiatan</label>
                        <input id="waktu_kegiatan" type="time" name="waktu_kegiatan" class="form-control">
                    </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
