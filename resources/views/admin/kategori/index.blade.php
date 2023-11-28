@extends('admin.layout')
@section('title')
    Data Sejarah
@endsection

@section('content')
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Data Sejarah
            </h1>
            <hr>
            <a href="{{ route('admin.tambah.kategori') }}" class="btn btn-dark mb-4">Tambah Data</a>
        </div>
    </section>

    <div class="card">
        <div class="card-body">
            {{-- <h5 class="card-title">Data Makanan</h5> --}}
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $data)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $data->nama_kategori }} </td>
                                <td>
                                    <a href="{{ route('admin.ubah.kategori', $data->id_kategori) }}"
                                        class="btn btn-success">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="{{ route('admin.hapus.kategori', $data->id_kategori) }}"
                                        class="btn btn-danger">
                                        <i class="fas fa-trash"></i> Hapus
                                    </a>
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
