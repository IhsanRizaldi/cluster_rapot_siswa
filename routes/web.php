<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SetKelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TahunAjaranController;
use App\Http\Controllers\TingkatController;
use App\Http\Controllers\UserController;
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
//Login
Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class,'index'])->name('login.index');
    Route::post('/store', [LoginController::class,'store'])->name('login.store');
    Route::get('/destroy', [LoginController::class,'destroy'])->name('login.destroy');
});

Route::middleware(['auth'])->group(function (){

    Route::get('/', [IndexController::class,'index'])->name('home.index');

    //Tahun Ajaran
    Route::prefix('tahun_ajaran')->group(function () {
        Route::get('/', [TahunAjaranController::class,'index'])->name('tahun_ajaran.index');
        Route::get('/create', [TahunAjaranController::class,'create'])->name('tahun_ajaran.create');
        Route::post('/store', [TahunAjaranController::class,'store'])->name('tahun_ajaran.store');
        Route::get('/edit/{id}', [TahunAjaranController::class,'edit'])->name('tahun_ajaran.edit');
        Route::post('/update{id}', [TahunAjaranController::class,'update'])->name('tahun_ajaran.update');
        Route::get('/delete/{id}', [TahunAjaranController::class,'destroy'])->name('tahun_ajaran.delete');
    });
    //Tingkat
    Route::prefix('tingkat')->group(function () {
        Route::get('/', [TingkatController::class,'index'])->name('tingkat.index');
        Route::get('/create', [TingkatController::class,'create'])->name('tingkat.create');
        Route::post('/store', [TingkatController::class,'store'])->name('tingkat.store');
        Route::get('/edit/{id}', [TingkatController::class,'edit'])->name('tingkat.edit');
        Route::post('/update{id}', [TingkatController::class,'update'])->name('tingkat.update');
        Route::get('/delete/{id}', [TingkatController::class,'destroy'])->name('tingkat.delete');
    });
    //Kelas
    Route::prefix('kelas')->group(function () {
        Route::get('/', [KelasController::class,'index'])->name('kelas.index');
        Route::get('/create', [KelasController::class,'create'])->name('kelas.create');
        Route::post('/store', [KelasController::class,'store'])->name('kelas.store');
        Route::get('/edit/{id}', [KelasController::class,'edit'])->name('kelas.edit');
        Route::post('/update{id}', [KelasController::class,'update'])->name('kelas.update');
        Route::get('/delete/{id}', [KelasController::class,'destroy'])->name('kelas.delete');
    });
    //Siswa
    Route::prefix('siswa')->group(function () {
        Route::get('/', [SiswaController::class,'index'])->name('siswa.index');
        Route::get('/create', [SiswaController::class,'create'])->name('siswa.create');
        Route::post('/store', [SiswaController::class,'store'])->name('siswa.store');
        Route::get('/edit/{id}', [SiswaController::class,'edit'])->name('siswa.edit');
        Route::post('/update{id}', [SiswaController::class,'update'])->name('siswa.update');
        Route::get('/delete/{id}', [SiswaController::class,'destroy'])->name('siswa.delete');
    });

    //SetKelas
    Route::prefix('setkelas')->group(function () {
        Route::get('/', [SetKelasController::class,'index'])->name('setkelas.index');
        Route::get('/create', [SetKelasController::class,'create'])->name('setkelas.create');
        Route::post('/store', [SetKelasController::class,'store'])->name('setkelas.store');
        Route::get('/delete/{id}', [SetKelasController::class,'destroy'])->name('setkelas.delete');
    });

    //User
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class,'index'])->name('user.index');
        Route::get('/create', [UserController::class,'create'])->name('user.create');
        Route::post('/store', [UserController::class,'store'])->name('user.store');
        Route::get('/edit/{id}', [UserController::class,'edit'])->name('user.edit');
        Route::post('/update{id}', [UserController::class,'update'])->name('user.update');
        Route::get('/delete/{id}', [UserController::class,'destroy'])->name('user.delete');
    });

    //SetNilai
    Route::prefix('setnilai')->group(function () {
        Route::get('/', [NilaiController::class,'index'])->name('setnilai.index');
        Route::get('/store', [NilaiController::class,'store'])->name('setnilai.store');
        Route::get('/show/{id}', [NilaiController::class,'show'])->name('setnilai.show');
        Route::get('/edit/{id}', [NilaiController::class,'edit'])->name('setnilai.edit');
        Route::post('/update', [NilaiController::class,'update'])->name('setnilai.update');
        Route::get('/delete/{id}', [NilaiController::class,'destroy'])->name('setnilai.delete');
    });


});

