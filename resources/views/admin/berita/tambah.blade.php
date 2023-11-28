@extends('admin.layout')
@section('title')
    Tambah Data Berita
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.input.berita') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h4 class="card-title" style="font-size: 25px">Form Tambah Data Berita</h4>
                    <hr>
                    <div class="form-group">
                        <label for="kategori">Nama Kategori</label>
                        <select id="id_kategori" name='id_kategori' class="form-control">
                            @foreach ($kategori as $k)
                                <option value="{{ $k->id_kategori }}">
                                    {{ $k->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="position-bottom-left">Judul Berita</label>
                        <input type="text" name="judul_berita" id="position-bottom-left" class="form-control demo"
                            data-position="bottom left" placeholder="Judul Berita">
                    </div>
                    <div class="form-group">
                        <label for="position-top-right">Tanggal Berita</label>
                        <input type="date" name="tanggal_berita" id="position-top-right" class="form-control demo"
                            data-position="top right" placeholder="Tanggal Berita">
                    </div>
                    <label>Isi Berita</label>
                    <div class="input-group">
                        <textarea name="isi_berita" class="form-control mydatepicker" placeholder="Isi Berita"></textarea>
                        <div class="input-group-append">
                            <span class="input-group-text"></span>
                        </div>
                    </div>
                    <label>Gambar Berita</label>
                    <div class="input-group">
                        <input type="file" name="gambar_berita" class="form-control mydatepicker"
                            placeholder="Keterangan">
                        <div class="input-group-append">
                            <span class="input-group-text"></span>
                        </div>
                    </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    <script src="/../assets/path/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea[name=isi_berita]',
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
