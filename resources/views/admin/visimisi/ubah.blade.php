@extends('admin.layout')
@section('title')
    Ubah Data Visi dan Misi
@endsection

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.edit.visimisi', $visimisi->id_visimisi) }}" method="POST">
                    @csrf
                    <h4 class="card-title" style="font-size: 25px">Form Ubah Data Visi dan Misi</h4>
                    <hr>
                    <label>Visi</label>
                    <div class="input-group">
                        <textarea name="visi" class="form-control mydatepicker" placeholder="Visi">{{ $visimisi->visi }}</textarea>
                        <div class="input-group-append">
                            <span class="input-group-text"></span>
                        </div>
                    </div>
                    <div class="input-group">
                        <textarea name="misi" class="form-control mydatepicker" placeholder="Misi">{{ $visimisi->misi }}</textarea>
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
            <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
            <script>
                tinymce.init({
                    selector: 'textarea[name=visi, misi]',
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
