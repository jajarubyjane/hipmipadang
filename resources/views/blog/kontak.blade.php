@extends('blog.main')
@section('title')
    Kontak
@endsection

@section('content')
    <div class="container-fluid py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Kontak</h1>
                <a href="" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Kontak</a>
            </div>
        </div>
    </div>

    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="fw-bold text-uppercase">Hubungi Kami</h1>
                <h6 class="mb-0 text-warning ">Jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi kami</h6>
            </div>
            <div class="row g-5 mt-5 mb-5">
                @foreach ($kontak as $data)
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center justify-content-center rounded"
                                style="width: 60px; height: 60px; background-color: #FFE500;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h4 class="mb-2">No Telp</h4>
                                <h6 class="mb-0" style="font-size: 1rem;">{{$data->notelp}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center justify-content-center rounded"
                                style="width: 60px; height: 60px; background-color: #FFE500;">
                                <i class="fa fa-envelope-open text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h4 class="mb-2">Email</h4>
                                <h6 class="mb-0" style="font-size: 1rem;">{{$data->email}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                            <div class="d-flex align-items-center justify-content-center rounded"
                                style="width: 60px; height: 60px; background-color: #FFE500;">
                                <i class="fa fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h4 class="mb-2">Alamat</h4>
                                <h6 class="mb-0" style="font-size: 1rem;">{!!$data->alamat!!}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Nama"
                                    style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control border-0 bg-light px-4" placeholder="Email"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subjek"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Pesan"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-warning w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63828.523152839356!2d100.2819680216797!3d-0.9388488000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b93214c44a41%3A0xa906fbe7248baede!2sHimpunan%20Pengusaha%20Muda%20Indonesia%20(HIPMI)%20-%20Padang!5e0!3m2!1sid!2sid!4v1701066159604!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
