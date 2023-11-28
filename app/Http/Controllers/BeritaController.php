<?php

namespace App\Http\Controllers;

use App\Models\Beritas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index(Request $r)
    {
        $data['berita'] = Beritas::join('kategori', 'berita.id_kategori', '=', 'kategori.id_kategori')
            ->orderByDesc('berita.id_berita')
            ->get(['berita.*', 'kategori.nama_kategori']);

        return view('admin.berita.index', $data);
    }
    public function tambah()
    {
        $data['kategori'] = DB::table('kategori')->get();

        return view('admin.berita.tambah', $data);
    }
    public function input(Request $r)
    {
        $filename = null;
        if ($r->hasFile('gambar_berita')) {
            $filename = $r->gambar_berita->getClientOriginalName();
            $r->file('gambar_berita')->move('assets/images/', $filename);
        }
        $berita = DB::table('berita')->insert([
            'id_kategori' => $r->id_kategori,
            'judul_berita' => $r->judul_berita,
            'slug' => Str::slug($r->judul_berita),
            'tanggal_berita' => $r->tanggal_berita,
            'isi_berita' => $r->isi_berita,
            'gambar_berita' => $filename,
        ]);

        if ($berita) {
            return redirect()
                ->route('admin.data.berita')
                ->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()
                ->route('admin.tambah.berita')
                ->with('error', 'Data Gagal Ditambahkan');
        }
    }
    public function ubah($id)
    {
        $data['berita'] = DB::table('berita')
            ->where('id_berita', $id)
            ->first();
        $data['kategori'] = DB::table('kategori')->get();

        return view('admin.berita.ubah', $data);
    }
    public function edit(Request $r, $id)
    {
        if ($r->filled('judul_berita')) {
            $gambar_berita = $r->file('gambar_berita');

            if ($gambar_berita) {
                $filename = $gambar_berita->getClientOriginalName();
                $gambar_berita->move('assets/images/', $filename);
            } else {
                $filename = $r->foto_lama; // Gunakan nama file lama jika tidak ada gambar baru diunggah
            }

            DB::table('berita')
                ->where('id_berita', $id)
                ->update([
                    'id_kategori' => $r->id_kategori,
                    'judul_berita' => $r->judul_berita,
                    'tanggal_berita' => $r->tanggal_berita,
                    'isi_berita' => $r->isi_berita,
                    'gambar_berita' => $filename,
                ]);

            return redirect()
                ->route('admin.data.berita')
                ->with('success', 'Data Berhasil Diubah');
        } else {
            $fotolama = DB::table('berita')
                ->where('id_berita', $id)
                ->first();

            if ($fotolama->gambar_berita != '') {
                unlink('assets/images/' . $fotolama->gambar_berita);
            }

            return redirect()
                ->route('admin.ubah.berita', $id)
                ->with('error', 'Data Gagal Diubah');
        }
    }
    public function hapus(Request $r, $id)
    {
        $berita = DB::table('berita')
            ->where('id_berita', $id)
            ->delete();

        if ($berita) {
            return redirect()
                ->route('admin.data.berita')
                ->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()
                ->route('admin.hapus.berita')
                ->with('error', 'Data Gagal Dihapus');
        }
    }
}
