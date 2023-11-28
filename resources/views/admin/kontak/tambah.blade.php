@extends('admin.layout')
@section('title')
    Tambah Data Kontak
@endsection

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="font-size: 25px">Form Tambah Data Kontak</h4>
                <hr>
                <form action="{{ route('admin.input.kontak') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="notelp">No Telepon</label>
                        <input for="notelp" name="notelp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input for="email" name="email" class="form-control">
                    </div>
                    <label>Alamat</label>
                    <div class="input-group">
                        <textarea name="alamat" class="form-control mydatepicker" placeholder="alamat"></textarea>
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
                    selector: 'textarea[name=alamat]',
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
