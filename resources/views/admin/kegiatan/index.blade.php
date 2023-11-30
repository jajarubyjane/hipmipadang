@extends('admin.layout')
@section('title')
    Data Kegiatan
@endsection

@section('content')
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Data Kegiatan
            </h1>
            <hr>
            <a href="{{ route('admin.tambah.kegiatan') }}" class="btn btn-dark mb-4">Tambah Data</a>
        </div>
    </section>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Alamat</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Waktu Kegiatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kegiatan as $data)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $data->nama_kegiatan }} </td>
                                <td> {{ $data->alamat }} </td>
                                <td> {{ $data->tanggal_kegiatan }} </td>
                                <td> {{ $data->waktu_kegiatan }} </td>
                                <td>
                                    <a href="{{ route('admin.ubah.kegiatan', $data->id_kegiatan) }}"
                                        class="btn btn-success">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="{{ route('admin.hapus.kegiatan', $data->id_kegiatan) }}"
                                        class="btn btn-danger">
                                        <i class="fas fa-trash"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

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
    @elseif (session('error') == true)
        <script>
            Swal.fire({
                position: "center",
                icon: "error",
                title: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
@endsection
