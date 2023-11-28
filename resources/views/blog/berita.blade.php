@extends('blog.main')
@section('title')
    Berita dan Kegiatan HIPMI Padang
@endsection

@section('content')
    <div class="container-fluid py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Berita dan Kegiatan</h1>
                <a href="" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Berita dan Kegiatan</a>
            </div>
        </div>
    </div>
    </div>

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        @foreach ($berita as $data)
                            <div class="col-md-6 wow slideInUp" data-wow-delay="0.5s">
                                <div class="blog-item rounded overflow-hidden"
                                    style="background: rgba(128, 128, 128, 0.1);">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('assets/images/' . $data->gambar_berita) }}"
                                            alt="">
                                        <a class="position-absolute top-0 start-0 text-dark rounded-end mt-5 py-2 px-4"
                                            style="background-color: #FFE500;" href="">{{ $data->nama_kategori }}</a>
                                    </div>
                                    <div class="p-4">
                                        <div class="d-flex mb-3">
                                            @php
                                                $tanggal_berita = date('d F Y', strtotime($data->tanggal_berita));
                                            @endphp
                                            <small><i
                                                    class="far fa-calendar-alt text-warning me-2"></i>{{ $tanggal_berita }}</small>
                                        </div>
                                        <h4 class="mb-3">{{ $data->judul_berita }}</h4>
                                        <p>{!! Illuminate\Support\Str::limit($data->isi_berita, 150, '...') !!}</p>
                                        <a href="{{route('blog.detail', $data->slug)}}" class="btn btn-dark py-2 px-4" style="background-color: #FFD700; color: black; border: none;">
                                            Read More
                                            <i class="bi bi-arrow-right" style="margin-left: 5px;"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="/../assets2/img/blog-2.jpg" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h4 class="mb-3">How to build a website</h4>
                                <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> --}}
                        @endforeach
                    </div>
                </div>
                <!-- Blog list End -->

                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    {{-- <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Keyword">
                            <button class="btn btn-dark px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div> --}}
                    <!-- Search Form End -->

                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h4 class="mb-0">Kategori</h4>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            @foreach ($kategori as $data )
                            <a class="h6 fw-semi-bold rounded py-2 px-3 mb-2" href="{{ route('blog.berita') }}?kategori={{ $data->nama_kategori }}"
                                style="background: rgba(128, 128, 128, 0.1);"><i class="bi bi-arrow-right me-2"></i>{{$data->nama_kategori}}</a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Category End -->

                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h4 class="mb-0">Postingan Terbaru</h4>
                        </div>

                        @foreach ($berita as $data)
                            <div class="d-flex rounded overflow-hidden mb-3">
                                <img class="img-fluid" src="{{ asset('assets/images/' . $data->gambar_berita) }}"
                                    style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                <a href="{{route('blog.detail', $data->slug)}}"
                                    class="h6 fw-semi-bold d-flex align-items-center px-3 mb-0"
                                    style="background: rgba(128, 128, 128, 0.1);">{{ $data->judul_berita }}</a>
                            </div>
                        @endforeach
                    </div>
                    <!-- Recent Post End -->

                    <!-- Image Start -->
                    <div id="imageCarousel" class="carousel slide mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="carousel-inner">
                            <div class="carousel-inner">
                                @foreach ($berita as $data)
                                    <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
                                        <img src="{{ asset('assets/images/' . $data->gambar_berita) }}" class="d-block w-100" alt="Image {{ $loop->iteration }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <!-- Image End -->

                    <!-- Tags Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h4 class="mb-0">Kata Kunci</h4>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn m-1"
                                style="background: rgba(128, 128, 128, 0.1); color: black;">HIPMI Padang</a>
                            <a href="" class="btn m-1"
                                style="background: rgba(128, 128, 128, 0.1); color: black;">Kewirausahaan</a>
                            <a href="" class="btn m-1"
                                style="background: rgba(128, 128, 128, 0.1); color: black;">Pengusaha Muda</a>
                        </div>
                    </div>
                    <!-- Tags End -->

                    <!-- Plain Text Start -->
                    <div class="wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h4 class="mb-0">HIPMI Quote</h4>
                        </div>
                        <div class="text-center" style="padding: 30px; background: rgba(128, 128, 128, 0.1);">
                            <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita
                                kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet
                                diam</p>
                            <a href="" class="btn py-2 px-4 text-white" style="background: black;">Read More</a>
                        </div>
                    </div>
                    <!-- Plain Text End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
