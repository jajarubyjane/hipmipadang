@extends('blog.main')

@section('title')
    Kegiatan
@endsection

@section('content')
    <div class="container-fluid py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Agenda</h1>
                <a href="" class="h5 text-white">Beranda</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Agenda</a>
            </div>
        </div>
    </div>

    <!-- Tabel Agenda Kegiatan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="fw-bold text-warning text-uppercase">Agenda Kegiatan</h1>
                <h5 class="mb-0">Jadwal Kegiatan</h5>
            </div>
            <div class="row gx-2 gy-2 justify-content-center">
                @foreach ($kegiatan as $data)
                    <div class="col-lg-9 col-md-6">
                        <div class="card h-100 border-0 shadow mx-auto">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <i class="far fa-calendar-alt me-2"></i>
                                        <span class="text-muted">{{ translateDay($data->tanggal_kegiatan) }}, {{ date('d F Y', strtotime($data->tanggal_kegiatan)) }}</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="far fa-clock me-2"></i>
                                        <span class="text-muted">{{ date('H:i', strtotime($data->waktu_kegiatan)) }} - Selesai</span>
                                    </div>
                                </div>
                                <h5 class="card-title text-warning mt-2">{{ $data->nama_kegiatan }}</h5>
                                <p class="card-text text-muted">
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                    {{ $data->alamat }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @php
            function translateDay($date)
            {
                $days = [
                    'Sunday' => 'Minggu',
                    'Monday' => 'Senin',
                    'Tuesday' => 'Selasa',
                    'Wednesday' => 'Rabu',
                    'Thursday' => 'Kamis',
                    'Friday' => 'Jumat',
                    'Saturday' => 'Sabtu',
                ];

                $day = date('l', strtotime($date));
                return $days[$day];
            }
            @endphp

    <style>
        .card {
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>
@endsection
