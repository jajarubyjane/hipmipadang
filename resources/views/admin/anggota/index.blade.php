@extends('admin.layout')
@section('title')
    Data Anggota
@endsection

@section('content')
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Data Anggota
            </h1>
            <hr>
            <a href="{{ route('admin.tambah.anggota') }}" class="btn btn-dark mb-4">
                <i class="fas fa-plus"></i> Anggota
            </a>
            <a href="{{route('admin.tambah.jabatan')}}" class="btn btn-dark mb-4">
                <i class="fas fa-plus"></i> Jabatan
            </a>
            <a href="#" class="btn btn-dark mb-4">
                <i class="fas fa-plus"></i> Divisi
            </a>

            <!-- Gantilah 'nama_rute_tambah_data' dengan nama rute yang sesuai -->
        </div>
    </section>

    <div class="card">
        <div class="card-body">
            {{-- <h5 class="card-title">Data Berita</h5> --}}
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Anggota</th>
                            <th>Jabatan</th>
                            <th>Divisi</th>
                            <th>Instagram</th>
                            <th>Gambar Anggota</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anggota as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_anggota }}</td>
                                <td>{{ $data->nama_jabatan }}</td>
                                <td>{{ $data->nama_divisi }}</td>
                                <td>{{ $data->instagram }}</td>
                                <td><img src="{{ asset('assets/images/' . $data->gambar_anggota) }}" width="100px"
                                        alt=""></td>
                                <td>
                                    <a href="{{ route('admin.ubah.anggota', $data->id_anggota) }}"
                                        class="btn btn-success"> <i class="fas fa-edit"></i> Ubah</a>
                                    <a href="{{ route('admin.hapus.anggota', $data->id_anggota) }}"
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
