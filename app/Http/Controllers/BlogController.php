<?php

namespace App\Http\Controllers;

use App\Models\Anggotas;
use App\Models\Beritas;
use App\Models\Kategoris;
use App\Models\Kegiatans;
use App\Models\Kontaks;
use App\Models\Sejarahs;
use App\Models\Usahas;
use App\Models\VisiMisis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $data['kategori'] = Kategoris::all();
        $data['anggota'] = Anggotas::all();
        $data['anggota'] = Anggotas::join('jabatan', 'anggota.id_jabatan', '=', 'jabatan.id_jabatan')
            ->join('divisi', 'anggota.id_divisi', '=', 'divisi.id_divisi')
            ->orderBy('anggota.id_anggota') // Adjust the column for ordering if needed
            ->get(['anggota.*', 'jabatan.nama_jabatan', 'divisi.nama_divisi']);

        $query = DB::table('berita')
            ->join('kategori', 'berita.id_kategori', '=', 'kategori.id_kategori')
            ->orderBy('id_berita', 'desc');

        if ($request->has('kategori')) {
            $kategoriTerpilih = $request->input('kategori');
            $query->where('kategori.nama_kategori', $kategoriTerpilih);
        }
        $data['berita'] = $query->get();

        return view('blog.index', $data);
    }
    public function sejarah()
    {
        $sejarah = Sejarahs::all();

        return view('blog.sejarah', compact('sejarah'));
    }
    public function berita(Request $request)
    {
        $data['kategori'] = Kategoris::all()->sortBy('nama_kategori');

        $query = DB::table('berita')
            ->join('kategori', 'berita.id_kategori', '=', 'kategori.id_kategori')
            ->orderBy('id_berita', 'desc');

        if ($request->has('kategori')) {
            $kategoriTerpilih = $request->input('kategori');
            $query->where('kategori.nama_kategori', $kategoriTerpilih);
        }

        // Tambahkan kondisi untuk pencarian berdasarkan keyword
        if ($request->has('keyword')) {
            $keyword = $request->input('keyword');
            $query->where(function ($q) use ($keyword) {
                $q->where('berita.judul_berita', 'like', "%$keyword%")->orWhere('berita.isi_berita', 'like', "%$keyword%");
            });
        }

        $data['berita'] = $query->get();

        return view('blog.berita', $data);
    }

    public function anggota()
    {
        $data['anggota'] = Anggotas::all();
        $data['anggota'] = Anggotas::join('jabatan', 'anggota.id_jabatan', '=', 'jabatan.id_jabatan')
            ->join('divisi', 'anggota.id_divisi', '=', 'divisi.id_divisi')
            ->orderBy('anggota.id_anggota') // Adjust the column for ordering if needed
            ->get(['anggota.*', 'jabatan.nama_jabatan', 'divisi.nama_divisi']);

        return view('blog.anggota', $data);
    }
    public function visimisi()
    {
        $visimisi = VisiMisis::all();

        return view('blog.visi-misi', compact('visimisi'));
    }
    public function detail($id)
    {
        $data['berita'] = Beritas::where('slug', $id)->first();
        $data['kategori'] = Kategoris::all()->sortBy('nama_kategori'); // Menambahkan variabel $kategori

        // Ambil semua berita (untuk recent post)
        $data['recentPosts'] = Beritas::latest()
            ->take(5)
            ->get();

        $data['gambar'] = Beritas::latest();

        return view('blog.detail', $data);
    }
    public function kontak()
    {
        $data['kontak'] = Kontaks::all();

        return view('blog.kontak', $data);
    }
    public function listusaha()
    {
        $data['usaha'] = Usahas::all();
        return view('blog.list-usaha', $data);
    }
    public function kegiatan()
    {
        $data['kegiatan'] = Kegiatans::all();
        return view('blog.kegiatan', $data);
    }
    public function join()
    {
        return view('blog.join');
    }
}
