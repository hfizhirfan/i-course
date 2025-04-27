<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgetpassController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\UjianController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminkursusController;
use App\Http\Controllers\AdminpengajarController;
use App\Http\Controllers\AdminsoalController;
use App\Http\Controllers\AdminuserController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [HomeController::class, 'index'])->name('index');
// Route::get('/kategori', KategoriController::class)->name('kategori');
// Route::get('/pembelajaran', PembelajaranController::class)->name('pembelajaran');

Route::get('login', LoginController::class)->name('login'); // Mengarah ke controller yang benar


Route::get('/register', RegisterController::class)->name('register');
// Menampilkan form forgot password
// Rute untuk menampilkan form lupa password
Route::get('/forgot-password', [ForgetpassController::class, 'showForgotPasswordForm'])->name('forgot-password');

// Rute untuk menampilkan halaman konfirmasi setelah kirim email
Route::get('/forgot-password-confirmation', function () {
    return view('forgot-password-confirmation');
})->name('forgot-password-confirmation');

// Rute untuk menampilkan form reset password
Route::get('/reset-password', [ForgetpassController::class, 'showResetForm'])->name('reset-password');

// Rute untuk memproses reset password (biasanya dengan metode POST)
Route::post('/reset-password', [ForgetpassController::class, 'resetPassword'])->name('reset-password.process');



// Halaman yang dapat diakses tanpa login
Route::get('/', [HomeController::class, 'index'])->name('home.guest');
Route::get('/kategori-programing', [CategoryController::class, 'index'])->name('category.index');
Route::get('/pembelajaran', [CourseController::class, 'index'])->name('course.index');

// Halaman yang dapat diakses setelah login
Route::get('/home', [HomeController::class, 'afterLogin'])->name('home');
    Route::get('/kategori-programing/after-login', [CategoryController::class, 'afterLogin'])->name('category.after-login');
Route::get('/pembelajaran/after-login', [CourseController::class, 'afterLogin'])->name('course.after-login');

Route::get('/kategori-programing/detail/pemrograman-java-pemula', [CategoryController::class, 'showPemrogramanJava'])->name('category.detail.java');
Route::get('/kategori-programing/detail/before-pemrograman-java-pemula', [CategoryController::class, 'showPemrogramanJavaBef'])->name('category.detail.before-java');
Route::get('/kategori-programing/detail/vuejs-pemula', [CategoryController::class, 'showVueJs'])->name('category.detail.vuejs');


Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('/courses', [UserController::class, 'courses']);
Route::get('/catatan', [UserController::class, 'notes'])->name('user.catatan');
Route::get('/pencapaian', [UserController::class, 'achievements'])->name('user.pencapaian');

Route::get('/kategori-programing/kursus/pemrograman-java-pemula', [KursusController::class, 'pemrogramanJavaPemula'])->name('kursus.java-pemula');

Route::get('/kuis', [UjianController::class, 'kuis'])->name('ujian.kuis');
Route::get('/hasilkuis', [UjianController::class, 'hasilkuis'])->name('ujian.hasilkuis');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');



Route::get('/kursus', [AdminkursusController::class, 'index'])->name('admin.kursus.index');
Route::get('/kursus/tambah', [AdminkursusController::class, 'create'])->name('admin.kursus.create');
Route::get('/kursus/edit', [AdminkursusController::class, 'edit'])->name('admin.kursus.edit');
Route::get('/kursus/pengaturan-tambah', [AdminkursusController::class, 'settingtambah'])->name('admin.kursus.setting-tambah');
Route::get('/kursus/pengaturan-edit', [AdminkursusController::class, 'settingedit'])->name('admin.kursus.setting-edit');


Route::get('/pengajar', [AdminpengajarController::class, 'index'])->name('admin.pengajar.index');
Route::get('/pengajar/tambah', [AdminpengajarController::class, 'create'])->name('admin.pengajar.create');
Route::get('/pengajar/edit-budi', [AdminpengajarController::class, 'editBudi'])->name('admin.pengajar.edit-budi');
Route::get('/pengajar/edit-rina', [AdminpengajarController::class, 'editRina'])->name('admin.pengajar.edit-rina');
Route::get('/pengajar/rina-wijaya', [AdminpengajarController::class, 'showRina'])->name('admin.pengajar.show-rina');
Route::get('/pengajar/budi-setiawan', [AdminpengajarController::class, 'showBudi'])->name('admin.pengajar.show-budi');


Route::get('/soal', [AdminsoalController::class, 'index'])->name('admin.soal.index');
Route::get('/soal/tambah', [AdminsoalController::class, 'create'])->name('admin.soal.create');
Route::get('/soal/edit', [AdminsoalController::class, 'edit'])->name('admin.soal.edit');
Route::get('/soal/pengaturan-tambah', [AdminsoalController::class, 'settingtambah'])->name('admin.soal.setting-tambah');
Route::get('/soal/pengaturan-edit', [AdminsoalController::class, 'settingedit'])->name('admin.soal.setting-edit');
Route::get('/soal/detail', [AdminsoalController::class, 'detailsoal'])->name('admin.soal.detail');



Route::get('/user', [AdminuserController::class, 'index'])->name('admin.user.index');
Route::get('/user/detail-budiono', [AdminuserController::class, 'showBudiono'])->name('admin.user.show-budiono');
Route::get('/user/detail-siti', [AdminuserController::class, 'showSiti'])->name('admin.user.show-siti');


Route::get('/content-kuis', function () {
    return view('layout-kursus.content-kuis');
})->name('content-kuis');





