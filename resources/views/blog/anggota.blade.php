@extends('blog.main')
@section('title')
    Struktur Kepengurusan HIPMI
@endsection

@section('content')
    <div class="container-fluid py-5 bg-header custom-bg">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Struktur Kepengurusan</h1>
                <a href="{{ route('data.blog') }}" class="h5 text-white">Beranda</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="#" class="h5 text-white">Struktur Kepengurusan</a>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="fw-bold text-warning text-uppercase">Struktur Kepengurusan</h1>
                <h5 class="mb-0">Badan Pengurus HIPMI Padang</h5>
            </div>
            <div class="row g-5">
                @foreach ($anggota as $data)
                    <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded overflow-hidden" style="background: rgba(128, 128, 128, 0.1);">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('assets/images/' . $data->gambar_anggota) }}"
                                    alt="">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-lg-square rounded" style="background: black; color: white"
                                        href="{{ $data->instagram }}" target="_blank"><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h5 class="text-warning" style="font-size: 23px;">{{ $data->nama_anggota }}</h5>
                                <h5 class="text-uppercase m-0 fw-bold" style="font-size: 10px">{{ $data->nama_jabatan }}
                                </h5>
                                <h6 class="text-uppercase mt-2" style="color: black; font-size: 11px;">
                                    {{ $data->nama_divisi }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12" style="margin-top: 6rem">
                    <h3 class="fw-bold text-warning text-uppercase mb-4">Tentang Lainnya</h3>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('blog.sejarah') }}" class="text-decoration-none"
                                style="color: black; transition: color 0.3s ease;">
                                <i class="fas fa-chevron-right me-2"></i> Sejarah
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blog.visimisi') }}" class="text-decoration-none"
                                style="color: black; transition: color 0.3s ease;">
                                <i class="fas fa-chevron-right me-2"></i> Visi dan Misi
                            </a>
                        </li>
                    </ul>
                    <style>
                        .text-decoration-none:hover {
                            color: #ffcc00;
                            /* Warna saat hover, sesuaikan dengan warna yang diinginkan */
                        }

                        .text-decoration-none:hover i {
                            color: #ffcc00;
                            /* Warna panah saat hover */
                        }
                    </style>
                </div>
            </div>
        </div>
@endsection
