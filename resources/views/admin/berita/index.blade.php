@extends('admin.layout')
@section('title')
    Data Berita
@endsection

@section('content')
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Data Berita
            </h1>
            <hr>
            <a href="{{ route('admin.tambah.berita') }}" class="btn btn-dark mb-4">Tambah Data</a>
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
                            <th>Nama Kategori</th>
                            <th>Judul Berita</th>
                            <th>Tanggal Berita</th>
                            <th>Isi Berita</th>
                            <th>Gambar Berita</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berita as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_kategori }}</td>
                                <td>{{ $data->judul_berita }}</td>
                                <td>{{ $data->tanggal_berita }}</td>
                                <td>{!! $data->isi_berita !!}</td>
                                <td><img src="{{ asset('assets/images/' . $data->gambar_berita) }}" width="100px"
                                        alt=""></td>
                                <td>
                                    <a href="{{ route('admin.ubah.berita', $data->id_berita) }}"
                                        class="btn btn-success"> <i class="fas fa-edit"></i> Ubah</a>
                                    <a href="{{ route('admin.hapus.berita', $data->id_berita) }}"
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
