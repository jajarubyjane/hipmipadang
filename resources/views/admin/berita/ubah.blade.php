@extends('admin.layout')
@section('title')
    Ubah Data Berita
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.edit.berita', $berita->id_berita) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <h4 class="card-title" style="font-size: 25px">Form Ubah Data Berita</h4>
                    <hr>
                    <div class="form-group">
                        <label for="kategori">Nama Kategori</label>
                        <select id="id_kategori" name='id_kategori' class="form-control">
                            @foreach ($kategori as $k)
                                <option value="{{ $k->id_kategori }}" @if ($k->id_kategori == $berita->id_kategori) selected @endif>
                                    {{ $k->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="position-bottom-left">Judul Berita</label>
                        <input type="text" name="judul_berita" id="position-bottom-left" class="form-control demo"
                            data-position="bottom left" placeholder="Judul Berita" value="{{ $berita->judul_berita }}">
                    </div>
                    <div class="form-group">
                        <label for="position-top-right">Tanggal Berita</label>
                        <input type="date" name="tanggal_berita" id="position-top-right" class="form-control demo"
                            data-position="top right" placeholder="Tanggal Berita" value="{{ $berita->tanggal_berita }}">
                    </div>
                    <label>Isi Berita</label>
                    <div class="input-group">
                        <textarea name="isi_berita" class="form-control mydatepicker" placeholder="Isi Berita">{{ $berita->isi_berita }}</textarea>
                        <div class="input-group-append">
                            <span class="input-group-text"></span>
                        </div>
                    </div>
                    <label class="mt-3">Gambar Berita</label>
                    <div class="input-group">
                        <img src="{{ asset('assets/images/' . $berita->gambar_berita) }}" width="100%" alt="">
                        <input type="hidden" name="foto_lama" value="{{ $berita->gambar_berita }}">
                        <input type="file" name="gambar_berita" class="form-control">
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
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
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
