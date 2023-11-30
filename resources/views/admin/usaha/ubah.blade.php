@extends('admin.layout')
@section('title')
    Ubah Data Usaha
@endsection

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.edit.usaha', $usaha->id_usaha) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h4 class="card-title" style="font-size: 25px">Form Ubah Data Usaha</h4>
                    <hr>
                    <div class="form-group">
                        <label for="nama_usaha">Nama Usaha</label>
                       <input  name="nama_usaha" class="form-control" value="{{$usaha->nama_usaha}}">
                    </div>
                    <label>Keterangan</label>
                    <div class="input-group">
                        <textarea name="keterangan" class="form-control mydatepicker" placeholder="Keterangan">{!! $usaha->keterangan !!}</textarea>
                        <div class="input-group-append">
                            <span class="input-group-text"></span>
                        </div>
                    </div>
                    <label>Foto</label>
                    <div class="input-group">
                        <img src="{{ asset('assets/images/' . $usaha->foto) }}" width="20%" alt="">
                        <input type="hidden" name="foto_lama" value="{{ $usaha->foto }}">
                        <input type="file" name="foto" class="form-control">
                    </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                </form>
            </div>
            <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
            <script>
                tinymce.init({
                    selector: 'textarea[name=keterangan]',
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
