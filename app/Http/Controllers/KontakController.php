<?php

namespace App\Http\Controllers;

use App\Models\Kontaks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontakController extends Controller
{
    public function index()
    {
        $data['kontak'] = Kontaks::get()->sortBy('nama_kontak');

        return view('admin.kontak.index', $data);
    }

    public function tambah()
    {
        return view('admin.kontak.tambah');
    }
    public function input(Request $r)
    {
        $kontak = DB::table('kontak')->insert([
            'notelp' => $r->notelp,
            'email' => $r->email,
            'alamat' => $r->alamat,
        ]);

        if ($kontak) {
            return redirect()
                ->route('admin.data.kontak')
                ->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()
                ->route('admin.tambah.kontak')
                ->with('error', 'Data Gagal Ditambahkan');
        }
    }
    public function ubah($id)
    {
        $data['kontak'] = DB::table('kontak')
            ->where('id_kontak', $id)
            ->first();

        return view('admin.kontak.ubah', $data);
    }
    public function edit(Request $r, $id)
    {
        $kontak = DB::table('kontak')
        ->where('id_kontak', $id)
        ->update([
            'notelp' => $r->notelp,
            'email' => $r->email,
            'alamat' => $r->alamat,
        ]);
        if ($kontak) {
            return redirect()->route('admin.data.kontak')->with('success', 'Data Berhasil Diubah');
        } else {
            return redirect()->route('admin.ubah.kontak',$id)->with('error','Data Gagal Diubah');
        }
    }
    public function hapus(Request $r, $id)
    {
        $kontak = DB::table('kontak')
            ->where('id_kontak', $id)
            ->delete();

        if ($kontak) {
            return redirect()->route('admin.data.kontak')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('admin.hapus.kontak')->with('error', 'Data Gagal Dihapus');
        }
    }
}
