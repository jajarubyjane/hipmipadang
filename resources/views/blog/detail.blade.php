@extends('blog.main')
@section('title')
    Detail Berita - HIPMI Padang
@endsection

@section('content')
    <div class="container-fluid py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Detail Berita</h1>
                <a href="" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Detail Berita</a>
            </div>
        </div>
    </div>

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-4">
                {{-- Berita --}}
                @if ($berita)
                    <div class="col-md-8 wow fadeIn" data-wow-delay="0.1s">
                        <div class="blog-item border h-100 p-4">
                            <img class="img-fluid mb-4" src="{{ asset('assets/images/' . $berita->gambar_berita) }}"
                                alt="" width="100%">
                            <h1 class="mb-4">{{ $berita->judul_berita }}</h1>
                            @php
                                $tanggal_berita = date('d F Y', strtotime($berita->tanggal_berita));
                            @endphp
                            <small><i
                                    class="far fa-calendar-alt text-warning me-2"></i>{{ $tanggal_berita }}</small>
                            <p class="mb-4">{!! $berita->isi_berita !!}</p>
                        </div>
                    </div>
                @endif

                {{-- Sidebar --}}
                <div class="col-md-4">
                    <!-- Category -->
                    {{-- <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h4 class="mb-0">Kategori</h4>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            @foreach ($kategori as $data)
                                <a class="h6 fw-semi-bold rounded py-2 px-3 mb-2"
                                    href="{{ route('blog.berita') }}?kategori={{ $data->nama_kategori }}"
                                    style="background: rgba(128, 128, 128, 0.1);"><i
                                        class="bi bi-arrow-right me-2"></i>{{ $data->nama_kategori }}</a>
                            @endforeach
                        </div>
                    </div> --}}

                    <!-- Recent Post -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h4 class="mb-0">Postingan Terbaru</h4>
                        </div>

                        @foreach ($recentPosts as $data)
                            <div class="d-flex rounded overflow-hidden mb-3">
                                <img class="img-fluid" src="{{ asset('assets/images/' . $data->gambar_berita) }}"
                                    style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                <a href="{{ route('blog.detail', $data->slug) }}"
                                    class="h6 fw-semi-bold d-flex align-items-center px-3 mb-0"
                                    style="background: rgba(128, 128, 128, 0.1);">{{ $data->judul_berita }}</a>
                            </div>
                        @endforeach
                    </div>

                    <!-- Image Carousel -->
                    <div id="imageCarousel" class="carousel slide mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="carousel-inner">
                            @foreach ($gambar as $data)
                                <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
                                    <img src="{{ asset('assets/images/' . $data->gambar_berita) }}" class="d-block w-100"
                                        alt="Image {{ $loop->iteration }}">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <!-- Tags -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h4 class="mb-0">Kata Kunci</h4>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn m-1"
                                style="background: rgba(128, 128, 128, 0.1); color: black;">HIPMI
                                Padang</a>
                            <a href="" class="btn m-1"
                                style="background: rgba(128, 128, 128, 0.1); color: black;">Kewirausahaan</a>
                            <a href="" class="btn m-1"
                                style="background: rgba(128, 128, 128, 0.1); color: black;">Pengusaha Muda</a>
                        </div>
                    </div>

                    <!-- Plain Text -->
                    <div class="wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h4 class="mb-0">HIPMI Quote</h4>
                        </div>
                        <div class="text-center" style="padding: 30px; background: rgba(128, 128, 128, 0.1);">
                            <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita
                                kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet
                                diam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
