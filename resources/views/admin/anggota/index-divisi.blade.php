@extends('admin.layout')
@section('title')
    Data Divisi
@endsection

@section('content')
<section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <h1 class="title">
            Data Divisi
        </h1>
        <hr>
        <a href="{{route('admin.tambah.divisi')}}" class="btn btn-dark mb-4">
            <i class="fas fa-plus"></i> Divisi
        </a>
    </div>
<div class="card">
    <div class="card-body">
        {{-- <h5 class="card-title">Data Berita</h5> --}}
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Divisi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($divisi as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama_divisi }}</td>
                            <td>
                                <a href="{{route('admin.ubah.divisi', $data->id_divisi)}}"
                                    class="btn btn-success"> <i class="fas fa-edit"></i> Ubah</a>
                                <a href="{{route('admin.hapus.divisi', $data->id_divisi)}}"
                                    class="btn btn-danger"> <i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    @endforeach
            </table>
            @if (session('success') == true)
                <script>
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "{{ session('success') }}",
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>
            @elseif (session('erorr') == true)
                <script>
                    Swal.fire({
                        position: "center",
                        icon: "error",
                        title: "{{ session('erorr') }}",
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>
            @endif
        @endsection
