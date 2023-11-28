@extends('admin.layout')
@section('title')
    Tambah Data Anggota
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.input.anggota') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h4 class="card-title" style="font-size: 25px">Form Tambah Data Anggota</h4>
                    <hr>
                    <div class="form-group">
                        <label for="position-bottom-left">Nama Anggota</label>
                        <input type="text" name="nama_anggota" id="position-bottom-left" class="form-control demo"
                        data-position="bottom left" placeholder="Nama Anggota">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Jabatan</label>
                        <select id="id_jabatan" name='id_jabatan' class="form-control">
                            @foreach ($jabatan as $k)
                                <option value="{{ $k->id_jabatan }}">
                                    {{ $k->nama_jabatan }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <label>Bidang</label>
                    <select id="id_divisi" name='id_divisi' class="form-control mb-2">
                        @foreach ($divisi as $k)
                            <option value="{{ $k->id_divisi }}">
                                {{ $k->nama_divisi }}
                            </option>
                        @endforeach
                    </select>
                    <div class="form-group">
                        <label for="position-bottom-left">Instagram</label>
                        <input type="text" name="instagram" id="position-bottom-left" class="form-control demo"
                        data-position="bottom left" placeholder="Instagram">
                    </div>
                    <label>Gambar Anggota</label>
                    <div class="input-group">
                        <input type="file" name="gambar_anggota" class="form-control mydatepicker"
                            placeholder="Gambar Anggota">
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
@endsection
