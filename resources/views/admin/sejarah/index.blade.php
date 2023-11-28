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
            <a href="{{ route('admin.tambah.sejarah') }}" class="btn btn-dark mb-4">Tambah Data</a>
        </div>
    </section>

    <div class="card">
        <div class="card-body">
            @foreach ($sejarah as $data)
                <div class="mb-4">
                    <img src="{{ asset('assets/images/' . $data->foto) }}" class="img-fluid mx-auto d-block mb-3" style="max-width: 50%;" alt="">
                    <p>{!! $data->isi_sejarah !!}</p>
                    <div class="text-right">
                        <a href="{{ route('admin.ubah.sejarah', $data->id_sejarah) }}" class="btn btn-sm btn-success">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="{{ route('admin.hapus.sejarah', $data->id_sejarah) }}" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i> Hapus
                        </a>
                    </div>
                </div>
            @endforeach
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
