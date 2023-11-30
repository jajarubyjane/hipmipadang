<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="16x16" href="/../assets2/img/hipmi2.png">
    <title>HIPMI Padang</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="/../assets2/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/../assets2/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/../assets2/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/../assets2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/../assets2/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .custom-link {
            color: white !important;
            /* Use !important to ensure it overrides Bootstrap styles */
        }

        #hipmi-link.scrolled {
            color: black !important;
            /* Change to your desired color */
            /* Add any other styles you want when scrolled */
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg px-5 d-none d-lg-block" style="background-color: black;">
        <div class="row gx-5" style="background-color: black;">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-white"><i class="fa fa-phone-alt me-2"></i>+62 811-88-6787</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>hipmipadang@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <button onclick="window.location.href='{{ route('blog.join') }}'"
                        class="btn btn-outline-light btn-sm"
                        style="height: 40px; line-height: 30px; margin-right: 10px;">Masuk/Daftar</button>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.youtube.com/hipmipadang/" target="_blank">
                        <i class="fab fa-youtube fw-normal"></i>
                    </a>

                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.facebook.com/hipmipadang/" target="_blank">
                        <i class="fab fa-facebook-f fw-normal"></i>
                    </a>

                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.instagram.com/hipmipadang/" target="_blank">
                        <i class="fab fa-instagram fw-normal"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{ route('data.blog') }}" class="navbar-brand p-0" style="display: flex; align-items: center;">
                <img src="/../assets2/img/hipmi.png" alt="Startup Logo" class="m-0"
                    style="height: 80px; width: auto;">
                <p id="hipmi-link" class="navbar-nav"
                    style="font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: 530; line-height: 20px;">
                    BPC <br>HIPMI<br>PADANG</p>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('data.blog') }}" class="nav-item nav-link" style="font-size: 15px;">Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle fs-6" data-bs-toggle="dropdown"
                            style="font-size: 15px;">Tentang</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('blog.sejarah') }}" class="dropdown-item"
                                style="font-size: 15px;">Sejarah</a>
                            <a href="{{ route('blog.visimisi') }}" class="dropdown-item" style="font-size: 15px;">Visi
                                dan Misi</a>
                            <a href="{{ route('blog.anggota') }}" style="font-size: 15px;"
                                class="dropdown-item">Struktur Kepengurusan</a>
                        </div>
                    </div>
                    <a href="{{ route('blog.berita') }}" class="nav-item nav-link fs-6">Berita</a>
                    <a href="{{ route('blog.kegiatan') }}" class="nav-item nav-link fs-6">Agenda</a>
                    <a href="#" class="nav-item nav-link fs-6">Anggota</a>
                    <a href="{{ route('blog.list-usaha') }}" class="nav-item nav-link fs-6">Sektor Usaha</a>
                    <a href="{{ route('blog.kontak') }}" class="nav-item nav-link fs-6">Kontak</a>

                </div>
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="assets2/img/carousel-3.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="width: 100%;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Bangkit dan Maju Bersama
                            </h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">HIPMI PADANG</h1>
                            <a href="{{ route('blog.sejarah') }}"
                                class="btn btn-outline-warning text-white py-md-3 px-md-5 me-3 animated slideInLeft">Tentang
                                Kami</a>
                            <a href="{{ route('blog.join') }}"
                                class="btn btn-outline-light btn-black py-md-3 px-md-5 animated slideInRight">Bergabung</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets2/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Bergabunglah bersama
                                organisasi pengusaha muda terbesar di Indonesia</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">BERSAMA HIPMI PADANG</h1>
                            <a href="{{ route('blog.sejarah') }}"
                                class="btn btn-outline-warning text-white py-md-3 px-md-5 me-3 animated slideInLeft">Tentang
                                Kami</a>
                            <a href="{{ route('blog.join') }}"
                                class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Bergabung</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(128, 128, 128, 0.5);
            ">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-dark p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-dark px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-warning text-uppercase">Tentang HIPMI</h5>
                        <h1 class="mb-0">Himpunan Pengusaha Muda Indonesia (HIPMI) Padang</h1>
                    </div>
                    <p class="mb-4">Sejak 1972, HIPMI Padang membina pengusaha muda untuk berjuang, bukan hanya untuk
                        kesuksesan diri dan usahanya, tapi juga untuk bangsa. Organisasi ini berawal dari sekelompok
                        pengusaha yang ingin mencapai cita-cita kemandirian ekonomi bangsa, salah satunya dengan
                        menumbuhkan semangat kewirausahaan di kalangan anak muda. Pembentukan HIPMI diniatkan sebagai
                        wadah yang dapat menampung dan menghimpun aspirasi pengusaha muda Indonesia, juga menjadi rumah
                        untuk tumbuh, berkembang, dan berjuang bersama demi kemandirian bangsa.</p>
                    <button class="btn btn-outline-warning"><a href="{{ route('blog.sejarah') }}"
                            class="text-dark">Kenali Lebih Dalam</a></button>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.4s"
                            src="assets2/img/about1.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="fw-bold text-warning text-uppercase">Kenapa Harus Bergabung Anggota HIPMI?</h1>
                <h5 class="mb-0">Alasan Bergabung dengan HIPMI</h5>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-warning rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Wadah Inspirasi dan Peluang Bisnis</h4>
                            <p class="mb-0">Bergabung dengan HIPMI memberikan akses ke komunitas yang kaya akan
                                inspirasi dan pengalaman bisnis.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-warning rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Jaringan Luas dan Kolaborasi</h4>
                            <p class="mb-0">HIPMI menawarkan peluang untuk memperluas jaringan Anda di dunia bisnis.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                            src="assets2/img/about1.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-warning rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Pengembangan Keterampilan dan Pengetahuan</h4>
                            <p class="mb-0">HIPMI menyelenggarakan berbagai kegiatan, seperti seminar, pelatihan, dan
                                workshop.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-warning rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>Akses ke Sumber Daya</h4>
                            <p class="mb-0">Melalui HIPMI, Anda dapat mengakses berbagai sumber daya yang dapat
                                mendukung bisnis Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->

    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="fw-bold text-warning text-uppercase">Struktur Kepengurusan</h1>
                <h5 class="mb-0">Badan Pengurus HIPMI Padang</h5>
            </div>
            <div class="row g-5">
                @foreach ($anggota->take(3) as $data)
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded overflow-hidden"
                            style="background: rgba(128, 128, 128, 0.1);
                        ">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100"
                                    src="{{ asset('assets/images/' . $data->gambar_anggota) }}" alt="">
                                <div class="team-social">
                                    {{-- <a class="btn btn-lg btn-warning btn-lg-square rounded" href=""><i
                                            class="fab fa-twitter fw-normal"></i></a> --}}
                                    {{-- <a class="btn btn-lg btn-warning btn-lg-square rounded" href=""><i
                                            class="fab fa-facebook-f fw-normal"></i></a> --}}
                                    <a class="btn btn-lg btn-lg-square rounded"
                                        style="background: black; color: white" href="{{ $data->instagram }}"
                                        target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                                    {{-- <a class="btn btn-lg btn-warning btn-lg-square rounded" href=""><i
                                            class="fab fa-linkedin-in fw-normal"></i></a> --}}
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h3 class="text-warning">{{ $data->nama_anggota }}</h3>
                                <h5 class="text-uppercase m-0 fw-bold" style="font-size: 12px">
                                    {{ $data->nama_jabatan }}</h5>
                                <h6 class="text-uppercase mt-2" style="color: black; font-size: 14px;">
                                    {{ $data->nama_divisi }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="text-center mt-4">
                    <a href="{{ route('blog.anggota') }}" class="btn btn-warning btn-lg rounded-pill">Lihat Semua
                        Pengurus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="fw-bold text-uppercase text-warning">Berita Terbaru</h1>
                <h5 class="mb-0">Berikut adalah berita dan kegiatan terbaru HIPMI Padang</h5>
            </div>
            <div class="row g-5">
                @foreach ($berita as $data)
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('assets/images/' . $data->gambar_berita) }}"
                                    alt="">
                                <a class="position-absolute top-0 start-0 text-dark rounded-end mt-5 py-2 px-4"
                                    href="" style="background-color: #FFE500;">{{ $data->nama_kategori }}</a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    @php
                                        $tanggal_berita = date('d F Y', strtotime($data->tanggal_berita));
                                    @endphp
                                    <small><i
                                            class= "far fa-calendar-alt text-warning me-2"></i>{{ $tanggal_berita }}</small>
                                </div>
                                <h4 class="mb-3">{{ $data->judul_berita }}</h4>
                                <p>{!! Illuminate\Support\Str::limit($data->isi_berita, 150, '...') !!}</p>
                                <a href="{{ route('blog.detail', $data->slug) }}" class="btn btn-dark py-2 px-4"
                                    style="background-color: #FFD700; color: black; border: none;">
                                    Baca Selengkapnya
                                    <i class="bi bi-arrow-right" style="margin-left: 5px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog Start -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-warning text-uppercase">Keanggotaan</h5>
                        <h1 class="mb-0">HIPMI Padang Terbuka Untuk Seluruh Pengusaha Muda</h1>
                    </div>
                    <h5 class="mb-4">Kembangkan usahamu dengan memperluas jejaring dan koneksi melalui HIPMI. Dengan
                        terdaftar sebagai anggota HIPMI, Anda akan memiliki kesempatan untuk terlibat dalam usaha-usaha
                        organisasi memajukan ekosistem perekonomian nasional.</h5>
                    <button class="btn btn-outline-warning"><a href="{{ route('blog.join') }}"
                            class="text-dark">Daftar Menjadi
                            Anggota</a></button>
                </div>
                <div class="col-lg-6">
                    <h4 class="text-center mt-5">Anggota Kami</h4>
                    <div class="bg-white d-flex flex-wrap">
                        <img src="assets2/img/vendor1.png" alt="" class="vendor-image">
                        <img src="assets2/img/vendor1.png" alt="" class="vendor-image">
                        <img src="assets2/img/vendor1.png" alt="" class="vendor-image">
                        <img src="assets2/img/vendor1.png" alt="" class="vendor-image">
                        <img src="assets2/img/vendor1.png" alt="" class="vendor-image">
                        <img src="assets2/img/vendor1.png" alt="" class="vendor-image">
                        <img src="assets2/img/vendor1.png" alt="" class="vendor-image">
                        <img src="assets2/img/vendor1.png" alt="" class="vendor-image">
                        <img src="assets2/img/vendor1.png" alt="" class="vendor-image">
                        <img src="assets2/img/vendor1.png" alt="" class="vendor-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* Gaya untuk Gambar Vendor */
        .vendor-image {
            width: calc(20% - 10px);
            /* Lebar gambar agar terbagi menjadi 3 kolom dengan sedikit ruang di antara gambar */
            max-width: 100%;
            /* Maksimum lebar gambar adalah 20% dari container */
            height: auto;
            /* Mengatur tinggi agar disesuaikan secara proporsional */
            margin: 5px;
            /* Menambahkan sedikit ruang di antara gambar */
            /* border-radius: 10px;
            /* Menambahkan sudut lengkung pada gambar */
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
            */
            /* Menambahkan bayangan pada gambar */
            transition: transform 0.3s ease-in-out;
            /* Efek hover */
        }

        .vendor-image:hover {
            transform: scale(1.1);
            /* Efek zoom ketika dihover */
        }
    </style>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid text-light mt-5 wow fadeInUp" data-wow-delay="0.1s"
        style="background-color: darkgrey;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 p-5"
                        style="background-color: grey;">
                        <a href="index.html" class="navbar-brand d-flex align-items-center">
                            <img src="/../assets2/img/hipmi2.png" alt="Startup Logo" class="m-0"
                                style="height: 50px; width: auto;">
                            <h1 class="m-0 text-white fs-4">HIPMI PADANG</h1>
                        </a>
                        <p class="mt-3 mb-4">Hipmi Padang, organisasi pengusaha muda, menjadi kekuatan di ranah ekonomi Sumatra Barat. Dengan semangat kolaboratif, Hipmi Padang memajukan usaha lokal, mewujudkan pertumbuhan ekonomi yang inklusif.</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn text-white" style="background-color: black;">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="mb-0" style="color: #FFE500">Kontak</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-dark me-2"></i>
                                <p class="mb-0" style="color: black"> Jl. Veteran, No.12-C, Padang, Sumatera Barat
                                    25115, Indonesia</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-dark me-2"></i>
                                <p class="mb-0" style="color: black">hipmipadang@example.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-dark me-2"></i>
                                <p class="mb-0" style="color: black">+62 811-88-6787</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-dark btn-square me-2" style="background-color: black;"
                                    href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-dark btn-square me-2" style="background-color: black; href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-dark btn-square me-2" style="background-color: black; href="#"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-dark btn-square" style="background-color: black; href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="mb-0" style="color: #FFE500;">Tentang Kami</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="mb-2" style="color: black" href="{{ route('blog.sejarah') }}"><i
                                        class="bi bi-arrow-right text-dark me-2"></i>Sejarah</a>
                                <a class="mb-2" style="color: black" href="{{ route('blog.visimisi') }}"><i
                                        class="bi bi-arrow-right text-dark me-2"></i>Visi dan Misi</a>
                                <a class="mb-2" style="color: black" href="{{ route('blog.anggota') }}"><i
                                        class="bi bi-arrow-right text-dark me-2"></i>Anggota</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="mb-0" style="color: #FFE500;">Semua</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="mb-2" style="color: black" href="{{ route('data.blog') }}"><i
                                        class="bi bi-arrow-right text-dark me-2"></i>Beranda</a>
                                <a class="mb-2" style="color: black" href="{{ route('blog.sejarah') }}"><i
                                        class="bi bi-arrow-right text-dark me-2"></i>Tentang</a>
                                <a class="mb-2" style="color: black" href="{{ route('blog.berita') }}"><i
                                        class="bi bi-arrow-right text-dark me-2"></i>Berita</a>
                                <a class="mb-2" style="color: black" href="{{ route('blog.kegiatan') }}"><i
                                        class="bi bi-arrow-right text-dark me-2"></i>Kalender</a>
                                <a class="mb-2" style="color: black" href=""><i
                                        class="bi bi-arrow-right text-dark me-2"></i>Kalender</a>
                                <a class="mb-2" style="color: black" href="{{ route('blog.list-usaha') }}"><i
                                        class="bi bi-arrow-right text-dark me-2"></i>Sektor Usaha</a>
                                <a class="mb-2" style="color: black" href="{{ route('blog.kontak') }}"><i
                                        class="bi bi-arrow-right text-dark me-2"></i>Kontak</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: black;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">HIPMI Padang by
                                Azaria Adriana.</a>
                            All Rights Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            {{-- Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML
                                Codex</a> --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-lg-square rounded back-to-top"
        style="background-color: #FFE500; color: black;"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/../assets2/lib/wow/wow.min.js"></script>
    <script src="/../assets2/lib/easing/easing.min.js"></script>
    <script src="/../assets2/lib/waypoints/waypoints.min.js"></script>
    <script src="/../assets2/lib/counterup/counterup.min.js"></script>
    <script src="/../assets2/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/../assets2/js/main.js"></script>
    <script>
        $(document).ready(function() {
            $(window).on('scroll', function() {
                if ($(this).scrollTop() > 50) {
                    $('#hipmi-link').addClass('scrolled');
                } else {
                    $('#hipmi-link').removeClass('scrolled');
                }
            });
        });
    </script>

</body>

</html>
