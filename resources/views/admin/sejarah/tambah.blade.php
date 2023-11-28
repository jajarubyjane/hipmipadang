@extends('admin.layout')
@section('title')
    Tambah Data Sejarah
@endsection

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="font-size: 25px">Form Tambah Data Sejarah</h4>
                <hr>
                <form action="{{ route('admin.input.sejarah') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label>Isi Sejarah</label>
                    <div class="input-group mb-2">
                        <textarea name="isi_sejarah" class="form-control mydatepicker" placeholder="Isi Sejarah"></textarea>
                        <div class="input-group-append">
                            <span class="input-group-text"></span>
                        </div>
                    </div>
                    <label>Foto</label>
                    <div class="input-group">
                        <input type="file" name="foto" class="form-control mydatepicker" placeholder="Foto">
                        <div class="input-group-append">
                            <span class="input-group-text"></span>
                        </div>
                    </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                </form>
            </div>
            <script src="/../assets/path/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea[name=isi_sejarah]',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic underline strikethrough | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | ' +
                'removeformat | help'
        });
    </script>
        @endsection
