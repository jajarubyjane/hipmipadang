<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\VisimisiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('login');
// });
// web.php
// routes/web.php
Route::view('//dashboard', 'admin.index')->name('dashboard');



//berita
Route::middleware(['auth'])->group(function () {


Route::get('admin/berita', [BeritaController::class, 'index'])->name('admin.data.berita');
Route::get('admin/tambah-berita', [BeritaController::class, 'tambah'])->name('admin.tambah.berita');
Route::post('admin/input-berita', [BeritaController::class, 'input'])->name('admin.input.berita');
Route::get('admin/ubah-berita/{id}', [BeritaController::class, 'ubah'])->name('admin.ubah.berita');
Route::post('admin/edit-berita/{id}', [BeritaController::class, 'edit'])->name('admin.edit.berita');
Route::get('admin/hapus-berita/{id}', [BeritaController::class, 'hapus'])->name('admin.hapus.berita');

//kategori
Route::get('admin/kategori', [KategoriController::class, 'index'])->name('admin.data.kategori');
Route::get('admin/tambah-kategori', [KategoriController::class, 'tambah'])->name('admin.tambah.kategori');
Route::post('admin/input-kategori', [KategoriController::class, 'input'])->name('admin.input.kategori');
Route::get('admin/ubah-kategori/{id}', [KategoriController::class, 'ubah'])->name('admin.ubah.kategori');
Route::post('admin/edit-kategori/{id}', [KategoriController::class, 'edit'])->name('admin.edit.kategori');
Route::get('admin/hapus-kategori/{id}', [KategoriController::class, 'hapus'])->name('admin.hapus.kategori');

//kontak
Route::get('admin/kontak', [KontakController::class, 'index'])->name('admin.data.kontak');
Route::get('admin/tambah-kontak', [KontakController::class, 'tambah'])->name('admin.tambah.kontak');
Route::post('admin/input-kontak', [KontakController::class, 'input'])->name('admin.input.kontak');
Route::get('admin/ubah-kontak/{id}', [KontakController::class, 'ubah'])->name('admin.ubah.kontak');
Route::post('admin/edit-kontak/{id}', [KontakController::class, 'edit'])->name('admin.edit.kontak');
Route::get('admin/hapus-kontak/{id}', [KontakController::class, 'hapus'])->name('admin.hapus.kontak');

//anggota
Route::get('admin/anggota', [AnggotaController::class, 'index'])->name('admin.data.anggota');
Route::get('admin/tambah-anggota', [AnggotaController::class, 'tambah'])->name('admin.tambah.anggota');
Route::post('admin/input-anggota', [AnggotaController::class, 'input'])->name('admin.input.anggota');
Route::get('admin/ubah-anggota/{id}', [AnggotaController::class, 'ubah'])->name('admin.ubah.anggota');
Route::post('admin/edit-anggota/{id}', [AnggotaController::class, 'edit'])->name('admin.edit.anggota');
Route::get('admin/hapus-anggota/{id}', [AnggotaController::class, 'hapus'])->name('admin.hapus.anggota');

//sejarah
Route::get('admin/sejarah', [SejarahController::class, 'index'])->name('admin.data.sejarah');
Route::get('admin/tambah-sejarah', [SejarahController::class, 'tambah'])->name('admin.tambah.sejarah');
Route::post('admin/input-sejarah', [SejarahController::class, 'input'])->name('admin.input.sejarah');
Route::get('admin/ubah-sejarah/{id}', [SejarahController::class, 'ubah'])->name('admin.ubah.sejarah');
Route::post('admin/edit-sejarah/{id}', [SejarahController::class, 'edit'])->name('admin.edit.sejarah');
Route::get('admin/hapus-sejarah/{id}', [SejarahController::class, 'hapus'])->name('admin.hapus.sejarah');

//visimisi
Route::get('admin/visimisi', [VisimisiController::class, 'index'])->name('admin.data.visimisi');
Route::get('admin/tambah-visimisi', [VisimisiController::class, 'tambah'])->name('admin.tambah.visimisi');
Route::post('admin/input-visimisi', [VisimisiController::class, 'input'])->name('admin.input.visimisi');
Route::get('admin/ubah-visimisi/{id}', [VisimisiController::class, 'ubah'])->name('admin.ubah.visimisi');
Route::post('admin/edit-visimisi/{id}', [VisimisiController::class, 'edit'])->name('admin.edit.visimisi');
Route::get('admin/hapus-visimisi/{id}', [VisimisiController::class, 'hapus'])->name('admin.hapus.visimisi');


//jabatan
Route::get('admin/tambah-jabatan', [AnggotaController::class, 'tambahJabatan'])->name('admin.tambah.jabatan');
Route::post('admin/simpan-jabatan', [AnggotaController::class, 'simpanJabatan'])->name('admin.simpan.jabatan');
Route::get('admin/index-jabatan', [AnggotaController::class, 'jabatan'])->name('admin.data.jabatan');
Route::get('admin/hapus-jabatan/{id}', [AnggotaController::class, 'hapusJabatan'])->name('admin.hapus.jabatan');
Route::get('admin/ubah-jabatan/{id}', [AnggotaController::class, 'ubahJabatan'])->name('admin.ubah.jabatan');
Route::post('admin/edit-jabatan/{id}', [AnggotaController::class, 'editJabatan'])->name('admin.edit.jabatan');

//divisi
Route::get('admin/tambah-divisi', [AnggotaController::class, 'tambahDivisi'])->name('admin.tambah.divisi');
Route::post('admin/simpan-divisi', [AnggotaController::class, 'simpanDivisi'])->name('admin.simpan.divisi');
Route::get('admin/index-divisi', [AnggotaController::class, 'divisi'])->name('admin.data.divisi');
Route::get('admin/hapus-divisi/{id}', [AnggotaController::class, 'hapusDivisi'])->name('admin.hapus.divisi');
Route::get('admin/ubah-divisi/{id}', [AnggotaController::class, 'ubahDivisi'])->name('admin.ubah.divisi');
Route::post('admin/edit-divisi/{id}', [AnggotaController::class, 'editDivisi'])->name('admin.edit.divisi');

});
//blog
Route::get('blog', [BlogController::class, 'index'])->name('data.blog');
Route::get('blog/sejarah', [BlogController::class, 'sejarah'])->name('blog.sejarah');
Route::get('blog/anggota', [BlogController::class, 'anggota'])->name('blog.anggota');
Route::get('blog/berita', [BlogController::class, 'berita'])->name('blog.berita');
Route::get('blog/visimisi', [BlogController::class, 'visimisi'])->name('blog.visimisi');
Route::get('blog/kontak', [BlogController::class, 'kontak'])->name('blog.kontak');
Route::get('/blog/{slug}', [BlogController::class, 'detail'])->name('blog.detail');


//login
Route::get('/login',[LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/logout',[LoginController::class, 'logout']);
