@extends('blog.main')

@section('title')
    Daftar Anggota
@endsection

@section('content')
    <div class="container-fluid py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Daftar Anggota</h1>
                <a href="" class="h5 text-white">Beranda</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Daftar Anggota</a>
            </div>
        </div>
    </div>

    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-center">DAFTAR</h2>
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_anggota" class="form-label">Nama Anggota</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        <input type="text" class="form-control" id="nama_anggota" name="nama_anggota"
                                            required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                        <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="notelp" class="form-label">No Telepon</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        <input type="text" class="form-control" id="notelp" name="notelp" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-building"></i></span>
                                        <input type="text" class="form-control" id="nama_perusahaan"
                                            name="nama_perusahaan" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="bidang_usaha" class="form-label">Bidang Usaha</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-industry"></i></span>
                                        <select class="form-select" id="bidang_usaha" name="bidang_usaha" required>
                                            <option value="option1">Option 1</option>
                                            <option value="option2">Option 2</option>
                                            <!-- Tambahkan pilihan sesuai kebutuhan -->
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        <input type="password" class="form-control" id="password_confirmation"
                                            name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-image"></i></span>
                                        <input type="file" class="form-control" id="foto" name="foto"
                                            required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-warning"><i class="fas fa-user-plus"></i>
                                    Daftar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
