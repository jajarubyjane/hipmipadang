<?php

namespace App\Http\Controllers;

use App\Models\VisiMisis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisimisiController extends Controller
{
    public function index()
    {
        $data['visimisi'] = VisiMisis::get();

        return view('admin.visimisi.index', $data);
    }

    public function tambah()
    {
        return view('admin.visimisi.tambah');
    }
    public function input(Request $r)
    {
        $visimisi = DB::table('visimisi')->insert([
            'visi' => $r->visi,
            'misi' => $r->misi,
        ]);

        if ($visimisi) {
            return redirect()
                ->route('admin.data.visimisi')
                ->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()
                ->route('admin.tambah.visimisi')
                ->with('error', 'Data Gagal Ditambahkan');
        }
    }
    public function ubah($id)
    {
        $data['visimisi'] = DB::table('visimisi')
            ->where('id_visimisi', $id)
            ->first();

        return view('admin.visimisi.ubah', $data);
    }
    public function edit(Request $r, $id)
    {
        $visimisi = DB::table('visimisi')
            ->where('id_visimisi', $id)
            ->update([
                'visi' => $r->visi,
                'misi' => $r->misi,
            ]);
        if ($visimisi) {
            return redirect()
                ->route('admin.data.visimisi')
                ->with('success', 'Data Berhasil Diubah');
        } else {
            return redirect()
                ->route('admin.ubah.visimisi', $id)
                ->with('error', 'Data Gagal Diubah');
        }
    }
    public function hapus(Request $r, $id)
    {
        $visimisi = DB::table('visimisi')
            ->where('id_visimisi', $id)
            ->delete();

        if ($visimisi) {
            return redirect()
                ->route('admin.data.visimisi')
                ->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()
                ->route('admin.hapus.visimisi')
                ->with('error', 'Data Gagal Dihapus');
        }
    }
}
