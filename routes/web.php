<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BarangController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',[DashboardController::class, 'index']) ->name('admin.dashboard');

//Route untuk Barang
Route::resource('barang', BarangController::class);