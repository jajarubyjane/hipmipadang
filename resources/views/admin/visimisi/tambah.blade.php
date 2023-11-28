@extends('admin.layout')

@section('title')
    Tambah Data Visi dan Misi
@endsection

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="font-size: 25px">Form Tambah Data Visi dan Misi</h4>
            <hr>
            <form action="{{ route('admin.input.visimisi') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="visi" class="form-label">Visi</label>
                    <textarea name="visi" class="form-control" placeholder="Masukkan Visi"></textarea>
                </div>

                <div class="mb-3">
                    <label for="misi" class="form-label">Misi</label>
                    <textarea name="misi" class="form-control" placeholder="Masukkan Misi"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <script>
        tinymce.init({
            selector: 'textarea[name=visi], textarea[name=misi]',
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
