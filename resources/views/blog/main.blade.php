<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="16x16" href="/../assets2/img/hipmi2.png">
    <title>@yield('title')</title>
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
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>hipmisumbar21@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <button href="#" class="btn btn-outline-light btn-sm"
                        style="height: 40px; line-height: 30px; margin-right: 10px;">Masuk/Daftar</button>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    {{-- <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in fw-normal"></i></a> --}}
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{route('data.blog')}}" class="navbar-brand p-0" style="display: flex; align-items: center;">
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
                            <a href="{{ route('blog.anggota') }}" class="dropdown-item">Struktur Kepengurusan</a>
                        </div>
                    </div>
                    <a href="{{ route('blog.berita') }}" class="nav-item nav-link fs-6">Berita & Kegiatan</a>
                    <a href="#" class="nav-item nav-link fs-6">List Usaha</a>
                    <a href="{{route('blog.kontak')}}" class="nav-item nav-link fs-6">Kontak</a>
                </div>
            </div>
        </nav>
        @yield('content')
        {{-- <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">About Us</h1>
                    <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">About</a>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- Navbar End -->

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
                        <p class="mt-3 mb-4">Lorem diam sit erat dolor elitr et, diam lorem justo amet clita stet eos
                            sit. Elitr dolor duo lorem, elitr clita ipsum sea. Diam amet erat lorem stet eos. Diam amet
                            et kasd eos duo.</p>
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
                                <a class="mb-2" style="color: black" href="{{route('blog.sejarah')}}"><i
                                        class="bi bi-arrow-right text-dark me-2"></i>Sejarah</a>
                                <a class="mb-2" style="color: black" href="{{route('blog.visimisi')}}"><i
                                        class="bi bi-arrow-right text-dark me-2"></i>Visi dan Misi</a>
                                <a class="mb-2" style="color: black" href="{{route('blog.anggota')}}"><i
                                        class="bi bi-arrow-right text-dark me-2"></i>Anggota</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="mb-0" style="color: #FFE500;">Semua</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="mb-2" style="color: black" href="{{route('data.blog')}}"><i
                                        class="bi bi-arrow-right text-dark me-2"></i>Beranda</a>
                                <a class="mb-2" style="color: black" href="#"><i
                                        class="bi bi-arrow-right text-dark me-2"></i>Tentang</a>
                                <a class="mb-2" style="color: black" href="{{route('blog.sejarah')}}"><i
                                        class="bi bi-arrow-right text-dark me-2"></i>Berita dan Kegiatan</a>
                                <a class="mb-2" style="color: black" href="{{route('blog.berita')}}"><i
                                        class="bi bi-arrow-right text-dark me-2"></i>List Usaha</a>
                                <a class="mb-2" style="color: black" href="{{route('blog.kontak')}}"><i
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
