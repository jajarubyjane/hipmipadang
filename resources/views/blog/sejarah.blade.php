@extends('blog.main')
@section('title')
    Sejarah HIPMI
@endsection

@section('content')
    <div class="container-fluid py-5 bg-header custom-bg">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Sejarah</h1>
                <a href="{{ route('data.blog') }}" class="h5 text-white">Beranda</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="#" class="h5 text-white">Sejarah</a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(128, 128, 128, 0.5);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                @foreach ($sejarah as $data)
                    <div class="col-lg-7">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h1 class="fw-bold text-warning text-uppercase">Sejarah HIPMI</h1>
                            {{-- <h1 class="mb-0">The Best IT Solution With 10 Years of Experience</h1> --}}
                        </div>
                        <p class="mb-4">{!! $data->isi_sejarah !!}</p>
                    </div>
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                                src="{{ asset('assets/images/' . $data->foto) }}" style="object-fit: cover;">
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12 mt-5">
                    <h3 class="fw-bold text-warning text-uppercase mb-4">Tentang Lainnya</h3>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('blog.visimisi') }}" class="text-decoration-none" style="color: black; transition: color 0.3s ease;">
                                <i class="fas fa-chevron-right me-2"></i> Visi dan Misi
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blog.anggota') }}" class="text-decoration-none" style="color: black; transition: color 0.3s ease;">
                                <i class="fas fa-chevron-right me-2"></i> Struktur Kepengurusan
                            </a>
                        </li>
                    </ul>
                    <style>
                        .text-decoration-none:hover {
                            color: #ffcc00; /* Warna saat hover, sesuaikan dengan warna yang diinginkan */
                        }

                        .text-decoration-none:hover i {
                            color: #ffcc00; /* Warna panah saat hover */
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    </div>
@endsection
