@extends('admin.layout')
@section('title')
    Ubah Data Kontak
@endsection

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.edit.kontak', $kontak->id_kontak) }}" method="POST">
                    @csrf
                    <h4 class="card-title" style="font-size: 25px">Form Ubah Data Kontak</h4>
                    <hr>
                    <div class="form-group">
                        <label for="notelp">No Telepon</label>
                       <input  for="" name="notelp" class="form-control" value="{{$kontak->notelp}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                       <input  for="" name="email" class="form-control" value="{{$kontak->email}}">
                    </div>
                    <label>Alamat</label>
                    <div class="input-group">
                        <textarea name="alamat" class="form-control mydatepicker" placeholder="Alamat">{{ $kontak->alamat }}</textarea>
                        <div class="input-group-append">
                            <span class="input-group-text"></span>
                        </div>
                    </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-success">Save</button>
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
