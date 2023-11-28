<?php

namespace App\Http\Controllers;

use App\Models\Kategoris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        $data['kategori'] = Kategoris::get()->sortBy('nama_kategori');

        return view('admin.kategori.index', $data);
    }

    public function tambah()
    {
        return view('admin.kategori.tambah');
    }
    public function input(Request $r)
    {
        $kategori = DB::table('kategori')->insert([
            'nama_kategori' => $r->nama_kategori,
        ]);

        if ($kategori) {
            return redirect()
                ->route('admin.data.kategori')
                ->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()
                ->route('admin.tambah.kategori')
                ->with('error', 'Data Gagal Ditambahkan');
        }
    }
    public function ubah($id)
    {
        $data['kategori'] = DB::table('kategori')
            ->where('id_kategori', $id)
            ->first();

        return view('admin.kategori.ubah', $data);
    }
    public function edit(Request $r, $id)
    {
        $kategori = DB::table('kategori')
        ->where('id_kategori', $id)
        ->update([
            'nama_kategori' => $r->nama_kategori
        ]);
        if ($kategori) {
            return redirect()->route('admin.data.kategori')->with('success', 'Data Berhasil Diubah');
        } else {
            return redirect()->route('admin.ubah.kategori',$id)->with('error','Data Gagal Diubah');
        }
    }
    public function hapus(Request $r, $id)
    {
        $kategori = DB::table('kategori')
            ->where('id_kategori', $id)
            ->delete();

        if ($kategori) {
            return redirect()->route('admin.data.kategori')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('admin.hapus.kategori')->with('error', 'Data Gagal Dihapus');
        }
    }
}
