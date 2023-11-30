<?php

namespace App\Http\Controllers;

use App\Models\Kegiatans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KegiatanController extends Controller
{
    //
    public function index()
    {
        $data['kegiatan'] = Kegiatans::get()->sortBy('nama_kegiatan');

        return view('admin.kegiatan.index', $data);
    }

    public function tambah()
    {
        return view('admin.kegiatan.tambah');
    }
    public function input(Request $r)
    {
        $kegiatan = DB::table('kegiatan')->insert([
            'nama_kegiatan' => $r->nama_kegiatan,
            'alamat' => $r->alamat,
            'tanggal_kegiatan' => $r->tanggal_kegiatan,
            'waktu_kegiatan' => $r->waktu_kegiatan,
        ]);

        if ($kegiatan) {
            return redirect()
                ->route('admin.data.kegiatan')
                ->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()
                ->route('admin.tambah.kegiatan')
                ->with('error', 'Data Gagal Ditambahkan');
        }
    }
    public function ubah($id)
    {
        $data['kegiatan'] = DB::table('kegiatan')
            ->where('id_kegiatan', $id)
            ->first();

        return view('admin.kegiatan.ubah', $data);
    }
    public function edit(Request $r, $id)
    {
        $kegiatan = DB::table('kegiatan')
        ->where('id_kegiatan', $id)
        ->update([
            'nama_kegiatan' => $r->nama_kegiatan,
            'alamat' => $r->alamat,
            'tanggal_kegiatan' => $r->tanggal_kegiatan,
            'waktu_kegiatan' => $r->waktu_kegiatan,
        ]);
        if ($kegiatan) {
            return redirect()->route('admin.data.kegiatan')->with('success', 'Data Berhasil Diubah');
        } else {
            return redirect()->route('admin.ubah.kegiatan',$id)->with('error','Data Gagal Diubah');
        }
    }
    public function hapus(Request $r, $id)
    {
        $kegiatan = DB::table('kegiatan')
            ->where('id_kegiatan', $id)
            ->delete();

        if ($kegiatan) {
            return redirect()->route('admin.data.kegiatan')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('admin.hapus.kegiatan')->with('error', 'Data Gagal Dihapus');
        }
    }
}
