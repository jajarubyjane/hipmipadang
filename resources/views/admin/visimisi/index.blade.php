@extends('admin.layout')
@section('title')
    Data Visi dan Misi
@endsection

@section('content')
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Data Visi dan Misi
            </h1>
            <hr>
            <a href="{{ route('admin.tambah.visimisi') }}" class="btn btn-dark mb-4">Tambah Data</a>
        </div>
    </section>

    <div class="card">
        <div class="card-body">
            {{-- <h5 class="card-title">Data Makanan</h5> --}}
            @foreach ($visimisi as $data)
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h6 class="font-weight-bold">Visi:</h6>
                        <p>{!! $data->visi !!}</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="font-weight-bold">Misi:</h6>
                        <p>{!! $data->misi !!}</p>
                    </div>
                    <div class="col-md-12 text-right mt-2">
                        <a href="{{ route('admin.ubah.visimisi', $data->id_visimisi) }}" class="btn btn-sm btn-success">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="{{ route('admin.hapus.visimisi', $data->id_visimisi) }}" class="btn btn-sm btn-danger">
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
