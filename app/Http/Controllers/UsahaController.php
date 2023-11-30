<?php

namespace App\Http\Controllers;

use App\Models\Usahas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsahaController extends Controller
{
    //
    public function index()
    {
        $data['usaha'] = Usahas::get()->sortBy('nama_usaha');

        return view('admin.usaha.index', $data);
    }

    public function tambah()
    {
        return view('admin.usaha.tambah');
    }
    public function input(Request $r)
    {
        $filename = null;
        if ($r->hasFile('foto')) {
            $filename = $r->foto->getClientOriginalName();
            $r->file('foto')->move('assets/images/', $filename);
        }

        $usaha = DB::table('usaha')->insert([
            'nama_usaha' => $r->nama_usaha,
            'keterangan' => $r->keterangan,
            'foto' => $filename,
        ]);

        if ($usaha) {
            return redirect()
                ->route('admin.data.usaha')
                ->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()
                ->route('admin.tambah.usaha')
                ->with('error', 'Data Gagal Ditambahkan');
        }
    }
    public function ubah($id)
    {
        $data['usaha'] = DB::table('usaha')
            ->where('id_usaha', $id)
            ->first();

        return view('admin.usaha.ubah', $data);
    }
    public function edit(Request $r, $id)
    {
        $filename = null;

        if ($r->hasFile('foto')) {
            $filename = $r->foto->getClientOriginalName();
            $r->file('foto')->move('assets/images/', $filename);
        } else {
            $filename = $r->foto_lama; // Gunakan nama file lama jika tidak ada gambar baru diunggah
        }
        $usaha = [
            'nama_usaha' => $r->nama_usaha,
            'keterangan' =>$r->keterangan,
            'foto' => $filename,
        ];

        DB::table('usaha')
        ->where('id_usaha', $id)
        ->update($usaha);

        if ($usaha) {
            return redirect()
                ->route('admin.data.usaha')
                ->with('success', 'Data Berhasil Diubah');
        } else {
            return redirect()
                ->route('admin.ubah.usaha', $id)
                ->with('error', 'Data Gagal Diubah');
        }
    }
    public function hapus(Request $r, $id)
    {
        $usaha = DB::table('usaha')
            ->where('id_usaha', $id)
            ->delete();

        if ($usaha) {
            return redirect()
                ->route('admin.data.usaha')
                ->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()
                ->route('admin.hapus.usaha')
                ->with('error', 'Data Gagal Dihapus');
        }
    }
}
