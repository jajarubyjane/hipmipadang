@extends('admin.layout')
@section('title')
    Data Kontak
@endsection

@section('content')
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Data Kontak
            </h1>
            <hr>
            <a href="{{ route('admin.tambah.kontak') }}" class="btn btn-dark mb-4">Tambah Data</a>
        </div>
    </section>

    <div class="card">
        <div class="card-body">
            <ul class="list-group">
                @foreach ($kontak as $data)
                    <li class="list-group-item">
                        <div class="mb-2">
                            <strong>No Telepon:</strong> {{ $data->notelp }}
                        </div>
                        <div class="mb-2">
                            <strong>Email:</strong> {{ $data->email }}
                        </div>
                        <div class="mb-2">
                            <strong>Alamat:</strong> {!! $data->alamat !!}
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('admin.ubah.kontak', $data->id_kontak) }}" class="btn btn-success mr-2">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="{{ route('admin.hapus.kontak', $data->id_kontak) }}" class="btn btn-danger">
                                <i class="fas fa-trash"></i> Hapus
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
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
