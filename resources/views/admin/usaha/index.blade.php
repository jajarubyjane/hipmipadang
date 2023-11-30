@extends('admin.layout')
@section('title')
    Data Usaha
@endsection

@section('content')
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Data Usaha
            </h1>
            <hr>
            <a href="{{ route('admin.tambah.usaha') }}" class="btn btn-dark mb-4">Tambah Data</a>
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
                            <th>Nama Usaha</th>
                            <th>Keterangan</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usaha as $data)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $data->nama_usaha }} </td>
                                <td> {!! $data->keterangan !!} </td>
                                <td><img src="{{ asset('assets/images/' . $data->foto) }}" width="100px"
                                        alt=""></td>
                                <td>
                                    <a href="{{ route('admin.ubah.usaha', $data->id_usaha) }}" class="btn btn-success">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="{{ route('admin.hapus.usaha', $data->id_usaha) }}" class="btn btn-danger">
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
