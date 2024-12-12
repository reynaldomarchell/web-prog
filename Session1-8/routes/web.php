<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin/mahasiswa', [MahasiswaController::class, 'index']);

Route::prefix('/admin')->group(function(){
    Route::get('/mahasiswa/{nilai}', [MahasiswaController::class, 'index'])->name('admin.mahasiswa');

    Route::get('/mhs/binus', [MahasiswaController::class, 'tampil']);
    Route::get('/mhs/post', [MahasiswaController::class, 'view'])->name('view.post.mhs');

    Route::get('/dosen/{dosen}', function($dosen){
        $arrMahasiswa = ['Risa Lestari', 'Rudi Hermawan','Bambang Kusumo','Lisa Permata'];
        return view('universitas.dosen')
        ->with('daftarmahasiswa',$arrMahasiswa)
        ->with('jur','Teknik Informatika')
        ->with('dosen',$dosen);
    })->name('admin.dosen');

    Route::get('/karyawan', function(){
        return view('universitas.karyawan');
    })->name('admin.karyawan');
});

//cara melempar data/value ke view , ada 2 cara:
//1. Argument kedua dari view
//2. Method with()
