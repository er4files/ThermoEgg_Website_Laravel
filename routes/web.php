<?php

use Illuminate\Support\Facades\Route;

// route monitoring suhu dan kelembaban
use App\Http\Controllers\SensorLaravel;
Route::get('/bacasuhu', [SensorLaravel::class, 'bacasuhu']);
Route::get('/bacakelembaban', [SensorLaravel::class, 'bacakelembaban']);

//route untuk menyimpan nilai sensor ke tb_sensor
Route::get('/simpan/{nilaisuhu}/{nilaikelembaban}', [SensorLaravel::class, 'simpansensor']);
//route home
Route::get('/home', function(){
    return view('home');
});

//route grafik
use App\Http\Controllers\GraphController;
Route::get('/graph', [GraphController::class, 'index']);

//routekirimdata
use App\Http\Controllers\KirimDataController;
// Route untuk menampilkan suhu
Route::get('/kirimsuhu', [KirimDataController::class, 'kirimsuhu']);
// Route untuk menampilkan kelembaban
Route::get('/kirimkelembaban', [KirimDataController::class, 'kirimkelembaban']);
// Route untuk menyimpan nilai sensor ke tb_grafik
Route::get('/kirimdata/{nilaisuhu}/{nilaikelembaban}', [KirimDataController::class, 'simpangrafik']);


//routedata pengguna
use App\Http\Controllers\CustomerController;
Route::resource('customer', CustomerController::class);


//route loginnn
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// routedatagraph
use App\Http\Controllers\DataGraphController;
Route::get('/datagraph', [DataGraphController::class, 'index']);
