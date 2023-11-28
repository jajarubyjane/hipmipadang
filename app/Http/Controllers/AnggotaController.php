<?php

namespace App\Http\Controllers;

use App\Models\Anggotas;
use App\Models\Divisis;
use App\Models\Jabatans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function index()
    {
        $data['anggota'] = Anggotas::join('jabatan', 'anggota.id_jabatan', '=', 'jabatan.id_jabatan')
    ->join('divisi', 'anggota.id_divisi', '=', 'divisi.id_divisi')
    ->orderBy('anggota.id_anggota')  // Adjust the column for ordering if needed
    ->get([
        'anggota.*',
        'jabatan.nama_jabatan',
        'divisi.nama_divisi'
    ]);


        return view('admin.anggota.index', $data);
    }
    public function tambah()
    {
        $jabatan = Jabatans::get();
        $divisi = Divisis::get();

        return view('admin.anggota.tambah', compact('jabatan', 'divisi'));
    }
    public function input(Request $r)
    {
        $filename = null;
        if ($r->hasFile('gambar_anggota')) {
            $filename = $r->gambar_anggota->getClientOriginalName();
            $r->file('gambar_anggota')->move('assets/images/', $filename);
        }
        $anggota = DB::table('anggota')->insert([
            'id_anggota' => $r->id_anggota,
            'id_jabatan' => $r->id_jabatan,
            'id_divisi' => $r->id_divisi,
            'nama_anggota' => $r->nama_anggota,
            'instagram' => $r->instagram,
            'gambar_anggota' => $filename,
        ]);

        if ($anggota) {
            return redirect()
                ->route('admin.data.anggota')
                ->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()
                ->route('admin.tambah.anggota')
                ->with('error', 'Data Gagal Ditambahkan');
        }
    }
    public function ubah($id)
    {
        $data['anggota'] = Anggotas::join('jabatan', 'anggota.id_jabatan', '=', 'jabatan.id_jabatan')
        ->join('divisi', 'anggota.id_divisi', '=', 'divisi.id_divisi')
        ->where('anggota.id_anggota', $id)  // Adjust the column for ordering if needed
        ->first([
            'anggota.*',
            'jabatan.nama_jabatan',
            'divisi.nama_divisi'
        ]);

        $data['jabatan'] = Jabatans::all();
        $data['divisi'] = Divisis::all();

        return view('admin.anggota.ubah', $data);
    }
    public function edit(Request $r, $id)
    {
        $filename = null;

    if ($r->hasFile('gambar_anggota')) {
        $filename = $r->gambar_anggota->getClientOriginalName();
        $r->file('gambar_anggota')->move('assets/images/', $filename);
    } else {
        $filename = $r->foto_lama; // Gunakan nama file lama jika tidak ada gambar baru diunggah
    }

    // Update the fields with the new data
    $anggota = [
        'id_jabatan' => $r->id_jabatan,
        'id_divisi' => $r->id_divisi,
        'nama_anggota' => $r->nama_anggota,
        'instagram' => $r->instagram,
        'gambar_anggota' => $filename,
    ];

    // Update the record in the database
    DB::table('anggota')
        ->where('id_anggota', $id)
        ->update($anggota);

    return redirect()
        ->route('admin.data.anggota')
        ->with('success', 'Data Berhasil Diubah');
    }
    public function hapus(Request $r, $id)
    {
        $anggota = DB::table('anggota')
            ->where('id_anggota', $id)
            ->delete();

        if ($anggota) {
            return redirect()
                ->route('admin.data.anggota')
                ->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()
                ->route('admin.hapus.anggota')
                ->with('error', 'Data Gagal Dihapus');
        }
    }

//Jabatan

   public function jabatan()
    {
        $jabatan = Jabatans::orderBy('nama_jabatan', 'asc')->get();

        return view('admin.anggota.index-jabatan', compact('jabatan'));
    }
    public function ubahJabatan($id)
    {
        $jabatan = Jabatans::where('id_jabatan', $id)->first();

        return view('admin.anggota.ubah-jabatan', compact('jabatan'));
    }
    public function editJabatan (Request $r, $id)
    {
        $jabatan = [
            'nama_jabatan' => $r->nama_jabatan,
        ];

        DB::table('jabatan')
        ->where('id_jabatan', $id)
        ->update($jabatan);

        return redirect()
        ->route('admin.data.jabatan')
        ->with('success', 'Data Jabatan berhasil diubah');
    }
    public function tambahJabatan()
    {
        return view('admin.anggota.tambah-jabatan');
    }
    public function simpanJabatan(Request $r)
    {
        $jabatan = DB::table('jabatan')->insert([
            'nama_jabatan' => $r->nama_jabatan,
        ]);

        if ($jabatan) {
            return redirect()
                ->route('admin.data.jabatan')
                ->with('success', 'Data Jabatan Berhasil Ditambahkan');
        } else {
            return redirect()
                ->route('admin.tambah.jabatan')
                ->with('error', 'Data Jabatan Gagal Ditambahkan');
        }
    }
    public function hapusJabatan(Request $r, $id)
    {
        $jabatan = DB::table('jabatan')
            ->where('id_jabatan', $id)
            ->delete();

        if ($jabatan) {
            return redirect()
                ->route('admin.data.jabatan')
                ->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()
                ->route('admin.hapus.jabatan')
                ->with('error', 'Data Gagal Dihapus');
        }
    }

//Jabatan

   public function divisi()
    {
        $divisi = Divisis::orderBy('nama_divisi', 'asc')->get();

        return view('admin.anggota.index-divisi', compact('divisi'));
    }
    public function ubahDivisi($id)
    {
        $divisi = Divisis::where('id_divisi', $id)->first();

        return view('admin.anggota.ubah-divisi', compact('divisi'));
    }
    public function editDivisi (Request $r, $id)
    {
        $divisi = [
            'nama_divisi' => $r->nama_divisi,
        ];

        DB::table('divisi')
        ->where('id_divisi', $id)
        ->update($divisi);

        return redirect()
        ->route('admin.data.divisi')
        ->with('success', 'Data Divisi berhasil diubah');
    }
    public function tambahDivisi()
    {
        return view('admin.anggota.tambah-divisi');
    }
    public function simpanDivisi(Request $r)
    {
        $divisi = DB::table('divisi')->insert([
            'nama_divisi' => $r->nama_divisi,
        ]);

        if ($divisi) {
            return redirect()
                ->route('admin.data.divisi')
                ->with('success', 'Data Divisi Berhasil Ditambahkan');
        } else {
            return redirect()
                ->route('admin.tambah.divisi')
                ->with('error', ' Data Divisi Gagal Ditambahkan');
        }
    }
    public function hapusDivisi(Request $r, $id)
    {
        $divisi = DB::table('divisi')
            ->where('id_divisi', $id)
            ->delete();

        if ($divisi) {
            return redirect()
                ->route('admin.data.divisi')
                ->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()
                ->route('admin.hapus.divisi')
                ->with('error', 'Data Gagal Dihapus');
        }
    }
}
