@extends('admin.layout')
@section('title')
    Ubah Data Anggota
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.edit.anggota', $anggota->id_anggota) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h4 class="card-title" style="font-size: 25px">Form Ubah Data Anggota</h4>
                    <hr>
                    <div class="form-group">
                        <label for="position-bottom-left">Nama Anggota</label>
                        <input type="text" name="nama_anggota" id="position-bottom-left" class="form-control demo"
                            data-position="bottom left" placeholder="Nama Anggota" value="{{ $anggota->nama_anggota }}" required>
                    </div>
                    <div class="form-group">
                        <label for="position-top-right">Jabatan</label>
                        <select name="id_jabatan" id="position-top-right" class="form-control demo">
                            @foreach ($jabatan as $k)
                                <option value="{{ $k->id_jabatan }}" {{ $anggota->id_jabatan == $k->id_jabatan ? 'selected' : '' }}>
                                    {{ $k->nama_jabatan }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="position-top-right">Bidang</label>
                        <select name="id_divisi" id="position-top-right" class="form-control mydatepicker">
                            @foreach ($divisi as $k)
                                <option value="{{ $k->id_divisi }}" {{ $anggota->id_divisi == $k->id_divisi ? 'selected' : '' }}>
                                    {{ $k->nama_divisi }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="position-bottom-left">Instagram</label>
                        <input type="text" name="instagram" id="position-bottom-left" class="form-control demo"
                            data-position="bottom left" placeholder="Instagram" value="{{ $anggota->instagram }}" required>
                    </div>
                    <label>Gambar Anggota</label>
                    <div class="input-group">
                        <img src="{{ asset('assets/images/' . $anggota->gambar_anggota) }}" width="20%" alt="">
                        <input type="hidden" name="foto_lama" value="{{ $anggota->gambar_anggota }}">
                        <input type="file" name="gambar_anggota" class="form-control">
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
