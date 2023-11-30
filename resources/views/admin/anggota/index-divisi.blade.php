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
            <a href="{{ route('admin.tambah.divisi') }}" class="btn btn-dark mb-4">
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
                                        <a href="{{ route('admin.ubah.divisi', $data->id_divisi) }}"
                                            class="btn btn-success"> <i class="fas fa-edit"></i> Ubah</a>

                                        <form id="alert-hapus" method="post" class="d-inline">
                                            <script>
                                                function konfirmasiHapus(route, id) {


                                                    Swal.fire({
                                                        title: "Yakin ingin mengahapus data?",
                                                        text: "Klik cancel jika tidak ingin menghapus data!",
                                                        icon: "warning",
                                                        showCancelButton: true,
                                                        confirmButtonColor: "#3085d6",
                                                        cancelButtonColor: "#d33",
                                                        confirmButtonText: "Ya, Hapus Data!"
                                                    }).
                                                    then((result) => {
                                                        if (result.isConfirmed) {

                                                            $('#alert-hapus').attr('action', `/${route}/${id}`)
                                                            $('#alert-hapus').submit()
                                                        }
                                                    });
                                                }
                                            </script>
                                            @method('delete')
                                            @csrf
                                            <a href="#" class="btn btn-danger"
                                                onclick="konfirmasiHapus('admin/hapus-divisi',{{ $data->id_divisi }})"><i
                                                    class="fa fa-trash mr-1"></i>Hapus
                                            </a>
                                        </form>
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
