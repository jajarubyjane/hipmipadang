<?php

namespace App\Http\Controllers;

use App\Models\Sejarahs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SejarahController extends Controller
{
    public function index()
    {
        $data['sejarah'] = Sejarahs::get();

        return view('admin.sejarah.index', $data);
    }

    public function tambah()
    {
        $data['sejarah'] = DB::table('sejarah')->get();

        return view('admin.sejarah.tambah');
    }
    public function input(Request $r)
    {
        $filename = null;
        if ($r->hasFile('foto')) {
            $filename = $r->foto->getClientOriginalName();
            $r->file('foto')->move('assets/images/', $filename);
        }
        $sejarah = DB::table('sejarah')->insert([
            'isi_sejarah' => $r->isi_sejarah,
            'foto' => $filename,
        ]);

        if ($sejarah) {
            return redirect()
                ->route('admin.data.sejarah')
                ->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()
                ->route('admin.tambah.sejarah')
                ->with('error', 'Data Gagal Ditambahkan');
        }
    }
    public function ubah($id)
    {
        $data['sejarah'] = DB::table('sejarah')
            ->where('id_sejarah', $id)
            ->first();

        return view('admin.sejarah.ubah', $data);
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
        $sejarah = DB::table('sejarah')
            ->where('id_sejarah', $id)
            ->update([
                'isi_sejarah' => $r->isi_sejarah,
                'foto' => $filename,
            ]);
        if ($sejarah) {
            return redirect()
                ->route('admin.data.sejarah')
                ->with('success', 'Data Berhasil Diubah');
        } else {
            return redirect()
                ->route('admin.ubah.sejarah', $id)
                ->with('error', 'Data Gagal Diubah');
        }
    }
    public function hapus(Request $r, $id)
    {
        $sejarah = DB::table('sejarah')
            ->where('id_sejarah', $id)
            ->delete();

        if ($sejarah) {
            return redirect()
                ->route('admin.data.sejarah')
                ->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()
                ->route('admin.hapus.sejarah')
                ->with('error', 'Data Gagal Dihapus');
        }
    }
}
