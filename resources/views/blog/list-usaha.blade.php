@extends('blog.main')
@section('title')
    List Usaha
@endsection

@section('content')
    <div class="container-fluid py-5 bg-header custom-bg">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Sektor Usaha</h1>
                <a href="{{ route('data.blog') }}" class="h5 text-white">Beranda</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="#" class="h5 text-white">Sektor Usaha</a>
            </div>
        </div>
    </div>
    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h1 class="fw-bold text-warning text-uppercase">Sektor Usaha</h1>
                <h5 class="mb-0">Jelajahi Beragam Sektor Bisnis </h5>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                @foreach($usaha as $data)
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" src="{{ asset('assets/images/' . $data->foto) }}" style="width: 60px; height: 60px;">
                            <div class="ps-4">
                                <h4 class="text-warning mb-1">{{ $data->nama_usaha }}</h4>
                                {{-- <small class="text-uppercase">{{ $data['profession'] }}</small> --}}
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5" style="font-size: 13px">
                            {!! $data->keterangan !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
