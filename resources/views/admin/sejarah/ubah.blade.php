@extends('admin.layout')
@section('title')
    Ubah Data Sejarah
@endsection

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.edit.sejarah', $sejarah->id_sejarah) }}" method="POST">
                    @csrf
                    <h4 class="card-title" style="font-size: 25px">Form Ubah Data Sejarah</h4>
                    <hr>
                    <label>Isi Sejarah</label>
                    <div class="input-group">
                        <textarea name="isi_sejarah" class="form-control mydatepicker" placeholder="Isi sejarah">{{ $sejarah->isi_sejarah }}</textarea>
                        <div class="input-group-append">
                            <span class="input-group-text"></span>
                        </div>
                    </div>
                    <label>Foto</label>
                    <div class="input-group">
                        <img src="{{ asset('assets/images/' . $sejarah->foto) }}" width="20%" alt="">
                        <input type="hidden" name="foto_lama" value="{{ $sejarah->foto }}">
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
