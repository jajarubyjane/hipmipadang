@extends('blog.main')
@section('title')
    Visi dan Misi HIPMI
@endsection

@section('content')
    <div class="container-fluid py-5 bg-header custom-bg">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Visi dan Misi</h1>
                <a href="{{ route('data.blog') }}" class="h5 text-white">Beranda</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="#" class="h5 text-white">Visi dan Misi</a>
            </div>
        </div>
    </div>


    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
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
                @foreach ($visimisi as $data)
                    <div class="col-lg-6">
                        <div class="card h-100 shadow clickable" onclick="toggleColor(this)">
                            <div class="card-body">
                                <div class="section-title text-center position-relative pb-3 mb-5">
                                    <h1 class="fw-bold text-uppercase">Visi</h1>
                                </div>
                                <p class="card-text mb-4">{!! $data->visi !!}</p>
                                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card h-100 shadow clickable" onclick="toggleColor(this)">
                            <div class="card-body">
                                <div class="section-title position-relative pb-3 mb-5 text-center">
                                    <h1 class="fw-bold text-uppercase">Misi</h1>
                                </div>
                                <p class="card-text mb-4">{!! $data->misi !!}</p>
                                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s"></div>
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
                            <a href="{{ route('blog.anggota') }}" class="text-decoration-none"
                                style="color: black; transition: color 0.3s ease;">
                                <i class="fas fa-chevron-right me-2"></i> Struktur Kepengurusan
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleColor(element) {
            element.classList.toggle('active');
        }
    </script>

    <style>
        .clickable {
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .clickable:hover {
            background-color: #ffcc00;
            color: #000;
        }

        .clickable.active {
            background-color: #000;
            color: #ffcc00;
        }
    </style>

    <!-- About End -->
    </div>
@endsection
